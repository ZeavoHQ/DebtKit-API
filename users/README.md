Users
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## List Users ##

`POST /users/all.json` will list all users.

`* account` is your Account ID<br />
`* key` is your API Key

```
	
$fields = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/users/all.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Get User ##

`POST /users/get.json` will get a user.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* id` is a valid User ID

```
	
$fields = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'id'          =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/users/get.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
