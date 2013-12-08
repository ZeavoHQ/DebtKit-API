<?php

// Set the host
$url    = 'https://api.debtkit.co.uk/';
	
// Set the POST parameters
$fields = array(
    'account'   	=>  1,
    'key'       	=>  '1RBrXUqIpUcyKma5',
    'introducer'	=>	1,
    'data'      	=>  json_encode( array( 'name' => $_POST[ 'name' ], 'phone' => $_POST[ 'phone' ], 'email' => $_POST[ 'email' ] ) )
);
	
// Initialise the cURL request
$ch = curl_init();
	
// Set the cURL options
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
	
// Execute the cURL request
$result = curl_exec( $ch );
	
// Close the cURL request
curl_close( $ch );

?>
