Customers
=======

## Get Customer ##

`POST /customers/get.json` will retrieve a customer.

```

$data = array(
    'key'                => '1RBrXUqIpUcyKma5',
    'reference'          => 'ABC12345'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1.1/customers/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Create Customer ##

`POST /customers/create.json` will create a new customer.

```

$data = array(
    'key'                => '1RBrXUqIpUcyKma5',
    'title'              => 'Mr',
    'first_names'        => 'John',
    'surname'            => 'Smith',
    'mobile_number'      => '07123 456789',
    'home_number'        => '0161 123 4567',
    'email_address'      => 'john.smith@debtkit.co.uk',
    'postal_code'        => 'A123BC',
    'introducer_id'      => 0,
    'lead_group_id'      => 0,
    'lead_type_id'       => 0,
    'debt_level'         => 1000,
    'custom' => array(
        'key1'     => 'value1',
        'key2'     => 'value2',
        'key3'     => 'value3'
    )
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/customers/create.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Update Status ##

`POST /customers/status-insert.json` will update the status of an existing customer.

```

$data = array(
    'key'                => '1RBrXUqIpUcyKma5',
    'reference'          => 'ABC123',
    'stage_id'           => 1,
    'status_id'          => 0,
    'user_id'            => 0,
    'comments'           => 'This is a comment'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/customers/status-insert.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Post Online Application Data ##

`POST /customers/edit-online-application.json` will post the fields from an online application to an existing customer.

```

$data = array(
    'key'                => '1RBrXUqIpUcyKma5',
    'reference'          => 'ABC123',
    'custom' => array(
        'key1'     => 'value1',
        'key2'     => 'value2',
        'key3'     => 'value3'
    )
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/customers/edit-online-application.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Set Custom JSON ##

`POST /customers/json-set.json` will store any custom JSON stored against a existing customer.

```

$data = array(
    'key'         => '1RBrXUqIpUcyKma5',
    'reference'   => 'ABC123',
    'custom_json' => array(
        'key1'     => 'value1',
        'key2'     => 'value2',
        'key3'     => 'value3'
    )
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/customers/json-set.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
