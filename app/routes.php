<?php

use n00bsys0p\Horizon\HorizonClient;

/*
|--------------------------------------------------------------------------
| View Composers
|--------------------------------------------------------------------------
|
| Here we set up any precomposition that is required for any views in the
| application. If there are too many of these, they should be abstracted
| out into a "composers.php" file and included here instead.
|
*/

View::composer('home', function($view) {
    // Initialise settings
    $host = Config::get('faucet.host');
    $port = Config::get('faucet.port');
    $faucet_addr = Config::get('faucet.address');
    $minamount = Config::get('faucet.minamount');
    $maxamount = Config::get('faucet.maxamount');
    $minbalance = Config::get('faucet.minbalance');
    $timer = Config::get('faucet.timer');
    $redis = Redis::connection();

    // Retrieve the balance from cache
    $redis_key = 'horizonfaucet:balance';
    $balance = Redis::get($redis_key);

    // If not set, update cache
    if(!is_numeric($balance))
    {
        try {
            $client = new HorizonClient($host, $port);
            $res = $client->runCommand(
                'GET', 'getAccount', array('account' => $faucet_addr)
            );

            // balanceNQT needs converting to a sensible number
            $balance = $res->balanceNQT / pow(10, 8);

            Redis::set($redis_key, $balance);
            Redis::expire($redis_key, 60); // Cache balance once every minute
        } catch (Exception $e) {
            $balance = 0;
            $msg = 'Something is wrong... We\'re on it!';
            $view->with('flash', array(
                array('severity' => 'danger', 'message' => $msg)
            ));

            Log::error($e->getMessage());
        }

        // Set/Expire
        Redis::set($redis_key, $balance);
        Redis::expire($redis_key, 10);
    }

    // Attach the variables to the view.
    $view->with('balance', $balance);
    $view->with('minbalance', $minbalance);
    $view->with('minamount', $minamount);
    $view->with('maxamount', $maxamount);
    $view->with('timer', $timer);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');
Route::get('/horizon-news', 'HomeController@showNews');
Route::get('/horizon-account', 'HomeController@showAccount');
Route::post('/payout', 'PayoutController@payout');
