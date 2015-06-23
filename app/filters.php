<?php
require_once('Net/DNSBL.php');

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

function cidr_match($ip, $net){
  include_once("Net/IPv4.php");
  $objIP = new Net_IPv4();
  return $objIP->ipInNetwork($ip, $net);
}

App::before(function($request)
{
    // Check if we need to confirm a referrer
    $required_ref = Config::get('faucet.referrer');

    if(!is_null($required_ref))
    {
        // Confirm the referrer
        $referer = $request->header('referer');
        $my_url  = Config::get('app.url');

        if($referer != $required_ref && $referer != $my_url)
        {
            Log::error('Bad referrer: ' . $referer);
            return App::abort(403);
        }
    }

	// Check the user isn't on a DNS blocklist
	$redis = Redis::connection();
	$ip = $request->ip();
    $redis_key = 'horizonfaucet:blocked';
	$blocked_at = Redis::hget($redis_key, $ip);
    $yesterday = Carbon::now()->timestamp - 86400;

    // If the IP address was blocked less than 24h ago, keep it banned
	if(!is_null($blocked_at) && $blocked_at > $yesterday) {
        Log::error("Previously Blacklisted IP disallowed: $ip");
		return App::abort(403);
    } else if($blocked_at < $yesterday) {
        // If blocked over 24h ago, we need to re-check
        Redis::hdel($redis_key, $ip);
    }

	$dnsbl_servers = Config::get('blocklist.servers');
    $ignore_ranges = Config::get('blocklist.ignore_ranges');

    foreach($ignore_ranges as $subnet)
    {
        // Use X-Forwarded-For if the IP is in the ignore list
        if(cidr_match($ip, $subnet))
        {
            $ip = Request::header('X-Forwarded-For');
            break;
        }
    }

    $reverse_ip = implode(".", array_reverse(explode(".", $ip)));

    foreach($dnsbl_servers as $host)
    {
        $host = "$reverse_ip.$host.";
        if(checkdnsrr($host, "A"))
        {
        	$redis->hset($redis_key, $ip, Carbon::now()->timestamp);
            Log::error('New IP Blacklisted: ' . $ip);

            // Just abort with a 403, no need for more information
        	return App::abort(403);
        }
    }
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		Session::regenerateToken();
		Log::error('BUTTON MASHER DETECTED - CSRF TOKEN MISMATCHED');
		return Redirect::to('/');
	}
	Session::regenerateToken();
});

