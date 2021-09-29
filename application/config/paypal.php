<?php
/** set your paypal credential **/

 
$config['client_id'] ='AYVnbpAeZ8ehARVPVSzVdo6hnpqS_uKKTqox5TDWgunSMvRA50uKYyF0bC0ROXzVrc_iJF5PE_4Zypp8';
$config['secret'] = 'EHRv8mbgEmZ1YG4KCs4gcRjT3pqLeR46vMstj0nV0qtg0qFk8WXDz7y4E0H2ebRR0KbSYqz_fni_nca8';



$config['stripe_key'] = 'pk_test_aZoBrp3bzNn6nQ6i5mfaB8xF00AyfTUKLC';

$config['stripe_secret'] = 'sk_test_ex7RJRDA6kMMbRX2YEyd6maR00bui0poU3';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'live',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => false,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);
