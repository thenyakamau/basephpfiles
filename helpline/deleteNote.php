<?php

require_once 'connect.php';

$id =  $_POST['id'];

$sql = "DELETE FROM test_table  WHERE id = '$id'";

if(mysqli_query($conn, $sql)){

    $response["success"] = true;
$response["message"] = 'successful';


    
}else{

    $response["success"] = false;
$response["message"] = 'failure';


}

echo json_encode($response);
    mysqli_close($conn);


?>