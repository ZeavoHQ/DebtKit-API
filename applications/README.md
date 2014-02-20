Applications
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## List Applications ##

`POST /applications/all.json` will list all applications.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`solution` is a product/solution<br />

```
	
$fields = array(
    'account'    =>  999,
    'key'        =>  '1RBrXUqIpUcyKma5',
    'solution'   =>  'iva'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/applications/all.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Get Application ##

`POST /applications/get.json` will get an application.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* id` is a valid Application ID

```
	
$fields = array(
    'account'    =>  999,
    'key'        =>  '1RBrXUqIpUcyKma5',
    'id'         =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/applications/get.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Update Application ##

`POST /applications/update.json` will update an application status.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* id` is a valid Application ID<br />
`* status` is a valid Status ID<br />
`* user` is a valid User ID

```
	
$fields = array(
    'account'    =>  999,
    'key'        =>  '1RBrXUqIpUcyKma5',
    'id'         =>  999,
    'status'     =>  1,
    'user'       =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/applications/update.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
