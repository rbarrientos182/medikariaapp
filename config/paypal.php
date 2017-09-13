<?php
return array(
    // set your paypal credential
    'client_id' => 'ARz42nmp9-mKVwL2KN43ekJjm-X8d97zevT8R0GOEnwoUQ1X545CYnZw0sKZ9Zl5DF5PH_81gJy2lC9x',
    'secret' => 'EFmuwkqpEEwVqJXdyBmQHhEfOcOk-w7baSoilesS_px9KD2GsIZO5dLdwWZIC5RWxml-YqYeEPovly-N',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
