Payments
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## List Payments ##

`POST /payments/all.json` will list all payments.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`application` is a valid Application ID<br />

```
	
$fields = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'application' =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/payments/all.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Get Payment ##

`POST /payments/get.json` will get a payment.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* id` is a valid Payment ID<br />
`* type` is a valid Payment Type

```
	
$fields = array(
    'account'    =>  999,
    'key'        =>  '1RBrXUqIpUcyKma5',
    'id'         =>  999,
    'type'       =>  'inbound'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/payments/get.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
