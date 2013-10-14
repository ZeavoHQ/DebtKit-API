<?php

// Set the host
$url    = 'http://api.debtkit.co.uk/';

// Set the POST parameters
$fields = array(
    'account'   =>  'YOUR ACCOUNT ID HERE',
    'key'       =>  'YOUR API KEY HERE',
    'name'      =>  urlencode( 'John Smith' ),
    'phone'     =>  urlencode( '08001234567' ),
    'email'     =>  urlencode( 'john.smith@gmail.com' ),
);

// Initialise the cURL request
$ch = curl_init();

// Set the cURL options
curl_setopt( $ch,CURLOPT_URL, $url );
curl_setopt( $ch,CURLOPT_POST, count($fields) );
curl_setopt( $ch,CURLOPT_POSTFIELDS, http_build_query( $fields ) );

// Execute the cURL request
$result = curl_exec($ch);

// Close the cURL request
curl_close($ch);

?>
