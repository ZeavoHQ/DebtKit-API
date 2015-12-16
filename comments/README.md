Comments
=======

## Get Comments ##

`POST /comments/get.json` will retrieve a list of comments based on optional filters you send.

```

$data = array(
    'key'       => '1RBrXUqIpUcyKma5',
    'reference' => 'ABC123',
    'debt_id'   => 0,
    'user_id'   => 0,
    'date'      => '2015-01-31' // YYYY-MM-DD
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/comments/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Post Comment ##

`POST /comments/post.json` will post a comment to an existing customer's timeline.

```

$data = array(
    'key'       => '1RBrXUqIpUcyKma5',
    'reference' => 'ABC123',
    'comments'  => 'This is a comment',
    'user_id'   => 0,
    'debt_id'   => 0
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/comments/post.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Edit Comment ##

`POST /comments/edit.json` will edit an existing comment.

```

$data = array(
    'key'        => '1RBrXUqIpUcyKma5',
    'comment_id' => 123456,
    'comments'   => 'This is a comment'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/comments/edit.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Remove Comment ##

`POST /comments/remove.json` will remove an existing comment.

```

$data = array(
    'key'        => '1RBrXUqIpUcyKma5',
    'comment_id' => 123456
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/comments/remove.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
