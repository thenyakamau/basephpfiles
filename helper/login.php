<?php

require_once('connect.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM helper_table WHERE email = '$email' AND password = '$password'";

$response = mysqli_query($conn, $sql);

$result = array();
$result['login'] = array();

if(mysqli_num_rows($response)===1){

$row = mysqli_fetch_assoc($response);

$index['id'] = $row['id'];
$index['name'] = $row['name'];
$index['email'] = $row['email'];
$index['photo' ] = $row['photo'];

array_push($result['login'], $index);

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