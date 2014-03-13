Documents
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## List Documents ##

`POST /documents/all.json` will list all documents.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* product_id` is a valid product ID<br />

```
	
$fields = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'product_id'  =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/documents/all.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Get Document ##

`POST /documents/get.json` will get a document.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* document` is a valid Document ID<br />
`* application` is a valid Application ID<br />
`* user` is a valid User ID

```
	
$fields = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'document'    =>  999,
    'application' =>  999,
    'user'        =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/documents/get.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
