<?php

require_once 'connect.php';

$id =  $_POST['id'];
$title = $_POST['title'];
$post = $_POST['post'];
$color = $_POST['color'];

$sql = "UPDATE test_table SET title = '$title', post = '$post' ,color ='$color' WHERE id = '$id'";

if(mysqli_query($conn, $sql)){

    $response['success'] = true;
$response['message'] = 'successful';


    
}else{

    $response['success'] = false;
$response['message'] = 'failure';


}

echo json_encode($response);
    mysqli_close($conn);


?>