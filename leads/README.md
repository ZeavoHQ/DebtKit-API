Leads
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, see

## Create Lead ##

`POST /leads/create.json` will create a new lead.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* introducer` is an Introducer ID<br />
`* group` is a valid Lead Group ID<br />
`* data` is the JSON encoded lead data

```
	
$fields = array(
    'account'    =>  999,
    'key'        =>  '1RBrXUqIpUcyKma5',
    'introducer' =>  999,
    'group'      =>  999,
    'data'       =>  json_encode( array( 'name' => $_POST[ 'name' ], 'phone' => $_POST[ 'phone' ], 'email' => $_POST[ 'email' ] ) )
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/create.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```


## List Leads ##

`POST /leads/all.json` will list all leads.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`daterange` is a valid optional Date Range<br />
`stage` is an optional valid Stage ID<br />
`introducer` is an optional Introducer ID<br />
`advisor` is an optional Advisor ID

```
	
$fields = array(
    'account'      =>  999,
    'key'          =>  '1RBrXUqIpUcyKma5',
    'daterange'    =>  'month',
    'stage'        =>  1,
    'introducer'   =>  999,
    'advisor'      =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/all.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Get Lead ##

`POST /leads/get.json` will get a lead.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* id` is a valid Lead ID

```
	
$fields = array(
    'account'      =>  999,
    'key'          =>  '1RBrXUqIpUcyKma5',
    'id'           =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/get.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Update Lead Status ##

`POST /leads/update.json` will update a lead status.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* id` is a valid Lead ID<br />
`* stage` is a valid Stage ID<br />
`* reason` is a valid Reason ID<br />
`* user` is a valid User ID

```
	
$fields = array(
    'account'      =>  999,
    'key'          =>  '1RBrXUqIpUcyKma5',
    'id'           =>  999,
    'reason'       =>  999,
    'stage'        =>  999,
    'user'         =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/update.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
