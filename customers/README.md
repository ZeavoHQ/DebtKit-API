Customers
=======

## Get Customer ##

`POST /customers/get.json` will retrieve a customer.

```

$data = array(
    'account'            => 999,
    'key'                => '1RBrXUqIpUcyKma5',
    'reference'          => 'ABC12345'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/customers/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
