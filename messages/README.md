Messages
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## List Messages ##

`POST /messages/get.json` will list all Email and SMS messaging methods for an application.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* id` is a valid Application ID

```
	
$fields = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'id'          =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/messages/get.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
