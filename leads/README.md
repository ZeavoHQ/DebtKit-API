Leads
=======

`*` Represents a required variable

For details on what ID variables to pass to the API, contact [support@debtkit.co.uk](mailto:support@debtkit.co.uk)

## Create Lead ##

`POST /leads/create.json` will create a new lead.

`* account` is your Account ID<br />
`* key` is your API Key<br />
`* data` is the JSON formatted API request data

```

$data 	=array(
    'title'              => 'Mr',
    'first_names'        => 'John',
    'surname'            => 'Smith',
    'phone'              => '0161 123 4567',
    'phone_type'         => 'home',
    'email_address'      => 'john.smith@debtkit.co.uk',
    'introducer_id'      => 999,
    'advisor_id'         => 999,
    'product_id'         => 999,
    'custom' => array(
        'Debt Level'     => '3000',
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
`* data` is the JSON formatted API request data

```

$data = array(
    'daterange'     =>	'month',
    'stage_id'      =>  999,
    'status_id'	    =>	999,
    'product_id'    =>	999,
    'advisor_id'    =>  999,
    'introducer_id' =>  999
);
	
$fields = array(
    'account'      =>  999,
    'key'          =>  '1RBrXUqIpUcyKma5',
    'data'         =>  json_encode( $data )
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
`* data` is the JSON formatted API request data

```

$data 	=array(
    'id'           => 999
);
    
	
$fields = array(
    'account'      =>  999,
    'key'          =>  '1RBrXUqIpUcyKma5',
    'data'         =>  json_encode( $data )
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
`* data` is the JSON formatted API request data

```

$data = array(
    'id'            =>	999,
    'stage_id'      =>  999,
    'status_id'	    =>	999,
    'user_id'       =>	999
);
	
$fields = array(
    'account'      =>  999,
    'key'          =>  '1RBrXUqIpUcyKma5',
    'data'         =>  json_encode( $data )
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/update.json' );
curl_setopt( $ch, CURLOPT_POST, count( $fields ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
