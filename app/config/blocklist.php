<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | DNS Blocklist servers
    |--------------------------------------------------------------------------
    |
    | These are all DNS blocklists to be used by the application to filter out
    | malicious traffic. Set them to the hostnames of any DNSBL service you
    | would like to use. This setup is pretty seriously restrictive, and may
    | restrict access from any IP that has ever been seen to serve spam, which
    | may mean that "normal" users get filtered out if they're on a dynamic IP.
    |
    */
    'servers' => array(
        "torexit.dan.me.uk"
    ),

    /*
    |--------------------------------------------------------------------------
    | Ignore ranges
    |--------------------------------------------------------------------------
    |
    | Insert CIDR subnets here to ignore. Any ranges on here will be ignored
    | in favour of the contents of the X-Forwarded-For header.
    |
    | The default contents are Cloudflare's address ranges. To remove, set the
    | value to be an empty array, i.e., 'ignore_ranges' => array(),
    |
    */
    'ignore_ranges' => array(
        '199.27.128.0/21',
        '173.245.48.0/20',
        '103.21.244.0/22',
        '103.22.200.0/22',
        '103.31.4.0/22',
        '141.101.64.0/18',
        '108.162.192.0/18',
        '190.93.240.0/20',
        '188.114.96.0/20',
        '197.234.240.0/22',
        '198.41.128.0/17',
        '162.158.0.0/15',
        '104.16.0.0/12'
    ),
);
