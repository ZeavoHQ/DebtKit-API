Leads
=======

## Create Lead ##

`POST /leads/create.json` will create a new lead.

```
	
$fields = array(
    'account'   	=>  999,
    'key'       	=>  '1RBrXUqIpUcyKma5',
    'introducer'	=>  999,
    'group'		    =>  999,
    'data'      	=>  json_encode( array( 'name' => $_POST[ 'name' ], 'phone' => $_POST[ 'phone' ], 'email' => $_POST[ 'email' ] ) )
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/create.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

#### Lead Group IDs ####

1 - Web

2 - Hotkey

3 - Data


## Get Leads ##

`POST /leads/get.json` will list all leads.

```
	
$fields = array(
    'account'   	=>  999,
    'key'       	=>  '1RBrXUqIpUcyKma5'
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/leads/get.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
