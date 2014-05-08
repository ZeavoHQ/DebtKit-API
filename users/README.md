Users
=======

For more details on the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## List Users ##

`POST /users/all.json` will list all users.

```
	
$data = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/users/all.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Get User ##

`POST /users/get.json` will get a user.

```
	
$data = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'id'          =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/users/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
