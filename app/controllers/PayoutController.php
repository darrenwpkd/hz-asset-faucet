<?php

use Carbon\Carbon;
use Illuminate\Support\Contracts\MessageProviderInterface;
use n00bsys0p\Horizon\HorizonClient;
use n00bsys0p\Horizon\UnknownAccountException;
use n00bsys0p\Horizon\InvalidAccountException;

class PayoutController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Payout Controller
    |--------------------------------------------------------------------------
    |
    | The payout controller handles all payout operations from validation
    | through sending funds.
    |
    */

    protected $messages = NULL;

    public function __construct(MessageProviderInterface $messages)
    {
        $this->messages = $messages;
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function payout()
    {
        $ip_address = Request::ip();
        $timer = Config::get('faucet.timer');
        $user_addr = Input::get('horizon-address');
        $pubkey = Input::get('horizon-pubkey', null);

        // Validate input
        $rules = array(
            'captcha_response' => 'required|recaptcha',
            'address' => 'required|address_format|address_used',
            'ip' => 'required|ip_used',
        );

        $input = array(
            'captcha_response' => Input::get('g-recaptcha-response'),
            'address' => $user_addr,
            'ip' => $ip_address,
        );

        $messages = array(
            'ip.ip_used' => "The IP $ip_address has been used too recently.",
            'address.address_used' => "The address $user_addr is either invalid or has been used too recently."
        );

        $validator = Validator::make($input, $rules);

        // If validation failed, give up
        if(!$validator->passes())
        {
            $msgs = array();
            foreach($validator->messages()->getMessages() as $msg)
                $this->messages->add('error', $msg);

            return Redirect::to('/')->with('flash', $this->messages->getMessages());
        }

        // Connect to the Horizon server
        $host = Config::get('faucet.host');
        $port = Config::get('faucet.port');
        $my_addr = Config::get('faucet.address');
        $client = new HorizonClient($host, $port);

        try {
            // Local account balance validation
            $res = $client->runCommand(
                'GET', 'getAccount', array('account' => $my_addr)
            );

            // Balance too low            
            $minbalance = Config::get('faucet.minbalance');
            if($res->balanceNQT < $minbalance)
            {
                $msg = "Faucet is dry :-( Try again soon!";

                $this->messages->add('error', $msg);

                return Redirect::to('/')->with('flash', $this->messages->getMessages());
            }

            try {
                $res = $client->runCommand(
                    'GET', 'getAccount', array('account' => $user_addr)
                );
            } catch(UnknownAccountException $e) {
                if (!$pubkey) {
                    $msg = 'Account not detected on network. You need to include your ' .
                           'public key to request a payout.';
                    $this->messages->add('warning', $msg);
                    return Redirect::to('/')->with('flash', $this->messages->getMessages());
                }
            }

            // Stop the user from trying again RIGHT here
            $now = Carbon::now()->timestamp;
            Redis::hset('horizonfaucet:addresses', $user_addr, $now);
            Redis::hset('horizonfaucet:ips', $ip_address, $now);
            // Nothing insane has occurred, try to send

            // Use mt_rand as it's less biased
            $amount = mt_rand(
                Config::get('faucet.minamount'),
                Config::get('faucet.maxamount')
            );

            $txOpts = array(
                'secretPhrase' => Config::get('faucet.passphrase'),
                'recipient' => $user_addr,
                'amountNQT' => $amount * pow(10, 8),
                'feeNQT' => 1*pow(10, 8),
                'deadline' => 60
            );

            // If the pubkey is set, configure the tx for it
            if ($pubkey) {
                $txOpts['recipientPublicKey'] = $pubkey;
            }

            $res = $client->runCommand('POST', 'sendMoney', $txOpts);
        } catch(InvalidAccountException $e) {
            $this->messages->add('error', 'Invalid account ID. Please check your input!');
            return Redirect::to('/')->with('flash', $this->messages->getMessages());
        } catch(Exception $e) {
            // Everything went seriously wrong. Log to file and bum out.
            Log::error($e->getMessage());
            $msg = "Sorry, something isn't right on our end!. " .
                   "Try again later - we're working on it.";

            $this->messages->add('error', $msg);
            return Redirect::to('/')->with('flash', $this->messages->getMessages());
        }

        // Huzzah! It worked!
        $msg = 'Sent ' . $amount . ' Horizon to ' . $user_addr . "!<br />See you next time!";
        $this->messages->add('success', $msg);
        Log::info('PAYOUTLOG : ' . Carbon::now() . " : $amount : $user_addr");

        return Redirect::to('/')->with('flash', $this->messages->getMessages());
    }
}
