Documents
=======

## List Documents ##

`POST /documents/all.json` will list all documents.

```
	
$data = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'product_id'  =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/documents/all.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Get Document ##

`POST /documents/get.json` will get a document.

```
	
$data = array(
    'account'     =>  999,
    'key'         =>  '1RBrXUqIpUcyKma5',
    'document'    =>  999,
    'application' =>  999,
    'user'        =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/documents/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
