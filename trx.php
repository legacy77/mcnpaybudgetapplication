<?php 
$rawData = file_get_contents("php://input");


if(isset($_POST['submit']) || $rawData)
{
    $data = json_decode($rawData);
    $url = "http://localhost/mcnplay/api.php?function=new_trx";

    $fields = array(
        'amount'=>$data->amount,
        'type'=>$data->type
    );
    $client = curl_init();
    curl_setopt($client, CURLOPT_URL, $url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($client, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($client, CURLOPT_POST, count($fields));
    curl_setopt($client, CURLOPT_POSTFIELDS, $fields);

    $response = curl_exec($client);
    curl_close($client);

}

return 'ok';