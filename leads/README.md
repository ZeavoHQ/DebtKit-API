Leads
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## Create Lead ##

`POST /leads/create.json` will create a new lead.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* data` is the JSON formatted lead data

```

$data 	=array(
    'title' => 'Mr',
    'first_names' => 'John',
    'surname' => 'Smith',
    'phone' => '0161 123 4567',
    'phone_type' => 'home',
    'email_address' => 'john.smith@debtkit.co.uk',
    'introducer_id' => 999,
    'advisor_id' => 999,
    'product_id' => 999,
    'custom' => array(
        'Debt Level' => '3000',
        'Contact Method' => 'Home Phone at Weekends'
    )
);
	
$fields = array(
    'account'    =>  999,
    'key'        =>  '1RBrXUqIpUcyKma5',
    'data'       =>  json_encode( $data )
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
