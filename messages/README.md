Messages
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## Send Message ##

`POST /messages/send.json` will send a template message to a customer.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* app_id` is a valid Application ID<br />
`* template_id` is a valid Message Template ID<br />
`* user_id` is a valid User ID

```
	
$fields = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'app_id'      =>  999,
    'template_id' =>  999,
    'user_id'     =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/messages/send.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
