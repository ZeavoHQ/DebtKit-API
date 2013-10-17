DebtKit
=======

You can pass leads from your own site or application to DebtKit, by using HTTP Post. The example below shows a PHP-based application using cURL to pass the lead details to DebtKit.

You will be required to provide your DebtKit Account ID and API Key, which can be retrieved under Options -> API in DebtKit. Only administrators can retieve this information.

You must also pass the name, phone and email parameters for each lead although these parameters can be empty.

```

// Set the host
$url 	= 'http://api.debtkit.co.uk/';

// Set the POST parameters
$fields = array(
	'account'	=>	'YOUR ACCOUNT ID HERE',
	'key'		=>	'YOUR API KEY HERE',
	'name' 		=> 	urlencode( 'John Smith' ),
	'phone' 	=> 	urlencode( '08001234567' ),
	'email' 	=> 	urlencode( 'john.smith@gmail.com' ),
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

```


HTTP Response Codes


200 - All OK, lead successfully added to DebtKit

403 - Missing or incorect Account ID and/or API Key

500 - Server Error or Missing Lead Data

For developer support, email us at support@zeavo.com
