Tasks
=======

## Get Tasks ##

`POST /tasks/get.json` will retrieve a list of tasks based on optional filters you send.

```

$data = array(
    'key'             => '1RBrXUqIpUcyKma5',
    'reference'       => 'ABC123',
    'status'          => 'overdue', // overdue, upcoming or completed
    'type'            => 'other', // callback or other
    'date'            => '2015-01-31', // YYYY-MM-DD
    'user_id'         => 0,
    'user_profile_id' => 0
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/tasks/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
