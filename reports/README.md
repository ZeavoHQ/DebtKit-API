Reports
=======

## List View ##

`POST /reports/list-view.json` will retrieve results from a report based on instructions you send.

```

$data = array(
    'key'         => '1RBrXUqIpUcyKma5',
    'daterange'   => 'today',
    'page'		  => '1',
    'pagination'  => '1',
    'merge_lists' => '1',
    'meta'        => '{"from":"customers","select":"","where":[],"group":"","order":"","event":"","logic":"all"}'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/reports/list-view.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
