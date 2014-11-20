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

## Create Customer ##

`POST /customers/create.json` will create a new customer.

```

$data = array(
    'account'            => 999,
    'key'                => '1RBrXUqIpUcyKma5',
    'title'              => 'Mr',
    'first_names'        => 'John',
    'surname'            => 'Smith',
    'phone'              => '0161 123 4567',
    'phone_type'         => 'home',
    'email_address'      => 'john.smith@debtkit.co.uk',
    'postal_code'        => 'A123BC',
    'introducer_id'      => 0,
    'lead_group_id'      => 0,
    'lead_type_id'       => 0,
    'debt_level'         => 12500,
    'custom' => array(
        'monthly_income' => '1800',
        'time_to_call'   => 'Weekday Mornings'
    )
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/customers/create.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
