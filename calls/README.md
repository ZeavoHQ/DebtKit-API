Calls
=======

## Log Call ##

`POST /calls/log.json` will log a phone call to a customer.

```

$data = array(
    'key'                   => '1RBrXUqIpUcyKma5', // mandatory
    'reference'             => 'ABC12345', // mandatory
    'datetime_call_started' => '2015-01-01 00:00:00', // mandatory
    'datetime_call_ended'   => '2015-01-01 00:00:00',
    'user_id'               => 0,
    'call_length'           => 120, // integer in seconds
    'phone_number'          => '07123 456789',
    'call_outcome'          => 'NA',
    'manual_automatic'      => 'automatic' // manual or automatic
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/calls/log.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```