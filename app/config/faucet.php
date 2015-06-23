<?php

return array(
    /**
     * The host at which to contact the Horizon API
     */
    'host' => 'localhost',

    /**
     * The port on which to access the Horizon API
     */
    'port' => '7776',

    /**
     * The address holding the faucet's balance.
     */
    'address' => 'NHZ-BV25-U2VJ-HG69-GZWST',

    /**
     * The full passphrase for the faucet's account.
     *
     * Required for payouts. Keep this file very well secured.
     */
    'passphrase' => 'concern tough team baby guard letter good ball wrinkle shove tight pathetic',

    /**
     * The minimum balance on which to offer a payout
     */
    'minbalance' => 500,

    /**
     * The minimum payout
     */
    'minamount' => 50,

    /**
     * The maximum payout
     */
    'maxamount' => 125,

    /**
     * The number of hours after which a user may withdraw again
     */
    'timer' => 0, // hours

    /**
     * Block anyone except this referrer from accessing the page.
     * Set it to NULL to disable the check.
     */
    'referrer' => NULL,
);
