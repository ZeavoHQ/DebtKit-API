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

$data = array(
    'account'            => 999,
    'key'                => '1RBrXUqIpUcyKma5',
    'title'              => 'Mr',
    'first_names'        => 'John',
    'surname'            => 'Smith',
    'phone'              => '0161 123 4567',
    'phone_type'         => 'home',
    'email_address'      => 'john.smith@debtkit.co.uk',
    'postal_code'        => 'A123BC',
    'introducer_id'      => 0,
    'marketing_sub_id'   => 'SBrT5RwU',
    'advisor_id'         => 0,
    'lead_group_id'      => 0,
    'lead_type_id'       => 0,
    'custom' => array(
        'Debt Level'     => '3000',
        'Contact Method' => 'Home Phone at Weekends'
    )
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/create.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
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
    'account'       =>  999,
    'key'           =>  '1RBrXUqIpUcyKma5',
    'daterange'     =>	'month',
    'stage_id'      =>  999,
    'status_id'	    =>	999,
    'product_id'    =>	999,
    'lead_group_id' =>  999,
    'lead_type_id'  =>  999,
    'advisor_id'    =>  999,
    'introducer_id' =>  999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/all.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
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
    'account'      => 999,
    'key'          => '1RBrXUqIpUcyKma5',
    'id'           => 999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/get.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
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
    'account'       =>  999,
    'key'           =>  '1RBrXUqIpUcyKma5',
    'id'            =>	999,
    'stage_id'      =>  999,
    'status_id'	    =>	999,
    'user_id'       =>	999
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/leads/update.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
