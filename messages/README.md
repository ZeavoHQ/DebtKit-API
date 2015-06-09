Messages
=======

## Get Messages ##

`POST /messages/get.json` will retrieve a list of messages based on optional filtes you send.

```

$data = array(
    'key'             => '1RBrXUqIpUcyKma5',
    'reference'       => 'ABC123',
    'direction'       => 'outbound', // outbound or inbound
    'method'          => 'sms', // sms or email
    'read'            => 'unread', // unread or read
    'starred'         => 'unstarred', // unstarred or starred
    'date'            => '2015-01-31', // YYYY-MM-DD
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/messages/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
