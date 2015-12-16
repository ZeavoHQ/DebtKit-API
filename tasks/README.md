Tasks
=======

## Get Tasks ##

`POST /tasks/get.json` will retrieve a list of tasks based on optional filters you send.

```

$data = array(
    'key'             => '1RBrXUqIpUcyKma5',
    'reference'       => 'ABC123',
    'status'          => 'overdue', // overdue, upcoming or completed
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
## Create Task ##

`POST /tasks/create.json` will create a task for an existing customer.

```

$data = array(
    'key'             => '1RBrXUqIpUcyKma5',
    'reference'       => 'ABC123',
    'description'     => 'Requested Callback',
    'date'            => '2015-01-31', // YYYY-MM-DD
    'time'            => '12:30', // HH:MM
    'user_id'         => 0,
    'team_id'         => 0
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/tasks/create.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Update Task ##

`POST /tasks/update.json` will update an existing task.

```

$data = array(
    'key'             => '1RBrXUqIpUcyKma5',
    'task_id'         => 123456,
    'description'     => 'Requested Callback',
    'date'            => '2015-01-31', // YYYY-MM-DD
    'time'            => '12:30', // HH:MM
    'user_id'         => 0,
    'team_id'         => 0
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/tasks/update.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Change Task Completion Status ##

`POST /tasks/change-status.json` will change the completion status of an existing task.

```

$data = array(
    'key'       => '1RBrXUqIpUcyKma5',
    'task_id'   => 123456,
    'completed' => 1
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/tasks/change-status.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```

## Remove Task ##

`POST /tasks/remove.json` will remove an existing task.

```

$data = array(
    'key'     => '1RBrXUqIpUcyKma5',
    'task_id' => 123456
);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://api.debtkit.co.uk/v1/tasks/remove.json' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
$result = curl_exec( $ch );
curl_close( $ch );

```
