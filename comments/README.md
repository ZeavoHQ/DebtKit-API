## Post Comment ##

`POST /comments/post.json` will post a comment to an existing customer's timeline.

```

$data = array(
    'key'                => '1RBrXUqIpUcyKma5',
    'reference'          => 'ABC123',
    'comments'           => 'This is a comment',
    'user_id'            => 0,
    'debt_id'            => 0
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/comments/post.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
