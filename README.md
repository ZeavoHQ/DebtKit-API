DebtKit
=======

You can pass leads from your own site or application to DebtKit, by using HTTP Post. The example below shows a PHP-based application using cURL to pass the lead details to DebtKit.

You will be required to provide your DebtKit Account ID and API Key, which can be retrieved under Options -> API in DebtKit. Only administrators can retieve this information.

An Introducer ID and Lead Group ID must also be passed to assign the lead to a particular introducer in DebtKit. The Introducer ID can be found under Options->Introducers in DebtKit. Lead Group IDs are below.

The lead data must be provided as a valid JSON string with keys. The name, phone and email fields are all mandatory.

Custom fields can also be sent with the leads by adding to the JSON string.

```

// Set the host
$url    = 'https://api.debtkit.co.uk/';
	
// Set the POST parameters
$fields = array(
    'account'   	=>  1,
    'key'       	=>  '1RBrXUqIpUcyKma5',
    'introducer'	=>  1,
    'group'		=>  1,
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


```


HTTP Response Codes


200 - All OK, lead successfully added to DebtKit

403 - Missing or incorect Account ID and/or API Key

500 - Server Error or Missing Lead Data

Lead Group IDs

1 - Web
2 - Hotkey
3 - Data

For developer support, email us at support@zeavo.com
