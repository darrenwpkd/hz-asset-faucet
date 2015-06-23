<?php

use Carbon\Carbon;

Validator::extend('address', function($attribute, $value, $parameters) {
    // Check address is valid
    if(!preg_match("/^NHZ(-[0-9A-Z]{4}){3}-[0-9A-Z]{5}$/", $value))
        return FALSE;

    // Check address hasn't been used too recently
    $now = Carbon::now()->timestamp;
    $timer = Config::get('faucet.timer');
    $redis_key = 'horizonfaucet:addresses';

    $last_used = Redis::hget($redis_key, $value);

    // If not seen before, allow straight through. Otherwise check times.
    return (is_null($last_used)) ? TRUE : $now > $last_used + ($timer * 3600);
});

// Validators
Validator::extend('address_format', function($attribute, $value, $parameters) {
    return preg_match("/^NHZ(-[0-9A-Z]{4}){3}-[0-9A-Z]{5}$/", $value);
});

Validator::extend('address_used', function($attribute, $value, $parameters) {
    $now = Carbon::now()->timestamp;
    $timer = Config::get('faucet.timer');
    $redis_key = 'horizonfaucet:addresses';

    $last_used = Redis::hget($redis_key, $value);

    return (is_null($last_used) || $now > $last_used + ($timer * 3600));
});

Validator::extend('ip_used', function($attribute, $value, $parameters) {
    $now = Carbon::now()->timestamp;
    $timer = Config::get('faucet.timer');
    $redis_key = 'horizonfaucet:ips';
    $last_connected = Redis::hget($redis_key, $value);

    return (is_null($last_connected) || $now > $last_connected + ($timer * 3600));
});

Validator::extend('captcha', function($attribute, $value, $parameters) {
    return $value == Session::get('captcha_validator');
});
