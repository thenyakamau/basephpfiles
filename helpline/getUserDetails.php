<?php

require_once('connect.php');

$id = $_POST['id'];

$sql = "SELECT * FROM helpline_table WHERE id = '$id'";

$response = mysqli_query($conn, $sql);

$result = array();
$result['userDetails'] = array();

if(mysqli_num_rows($response)===1){

$row = mysqli_fetch_assoc($response);


$index['name'] = $row['name'];
$index['email'] = $row['email'];
$index['password'] = $row['password'];
$index['location'] = $row['location'];
$index['number'] = $row['number'];
$index['photo'] = $row['photo'];


array_push($result['userDetails'], $index);

$result['success'] = "1";
$result['message'] = "success";

echo json_encode($result);
mysqli_close($conn);

}else{

$result['success'] = "0";
$result['message'] = "error";

echo json_encode($result);
mysqli_close($conn);

}


?>