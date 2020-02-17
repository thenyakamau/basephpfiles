<?php

require_once 'connect.php';

$token = $_POST['token'];
$message = $_POST['notification'] ;

$data = array(
    
    'title' => "Updated Loan Amount",
    'body' => $message
    
);

$apikey = "Insert Your own legacy server key";



$fields = array('to'=> $token, 'notification' => $data);

    $fields = json_encode ( $fields );

    $headers = array (
            'Authorization: key=' .$apikey, 
            'Content-Type: application/json'
    );

 $url = 'https://fcm.googleapis.com/fcm/send';

    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, $url );
    curl_setopt ( $ch, CURLOPT_POST, true );
    curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

    $result = curl_exec ( $ch );
    echo $result;
    curl_close ( $ch );


return json_decode($result, true);


$response['message'] = "Connection Successful";

echo json_encode($response);

?>
