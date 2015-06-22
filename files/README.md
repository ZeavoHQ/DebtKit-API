Files
=======

## Get Files ##

`POST /files/get.json` will retrieve a list of files based on optional filters you send.

```

$data = array(
    'key'                => '1RBrXUqIpUcyKma5',
    'reference'          => 'ABC123',
    'extension'          => 'pdf',
    'type'               => 'export', // upload, attachment, export, signature
    'starred'            => 'starred', // starred or unstarred
    'debt_id'            => 0,
    'parent_template_id' => 0,
    'user_id'            => 0,
    'date'               => '2015-01-31' // YYYY-MM-DD
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/files/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Download File ##

`POST /files/download.json` will retrieve a file based on the file ID you send.

```

$data = array(
    'key' => '1RBrXUqIpUcyKma5',
    'id'  => 0
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/files/download.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Upload File ##

`POST /files/upload.json` will upload a file to a specific customer you define.

```

$data = array();

$data[ 'json' ] = json_encode( array(
    'key'       => '1RBrXUqIpUcyKma5',
    'reference' => 'ABC123',
    'debt_id'   => 0,
    'user_id'   => 0
) );

$data[ 'file' ] = "@file.pdf;filename='file.pdf';type=application/pdf"

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/files/upload.json' );
curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
$result = curl_exec( $ch );
curl_close( $ch );

```
