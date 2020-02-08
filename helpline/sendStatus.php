<?php

require_once 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$image = $_POST['image'];
$status = $_POST['status'];
$time = time();

$sql = "INSERT INTO status_table (name, email, status, image, time) VALUES ('$name', '$email', '$status', '$image', '$time') ";


if (mysqli_query($conn, $sql)) {

$tql = "SELECT * FROM status_table WHERE email = '$email' AND time = '$time' ";

$response = mysqli_query($conn, $tql);
$result = array();
$result['getId'] = array();

if(mysqli_num_rows($response)===1){

$row = mysqli_fetch_assoc($response);

$index['id'] = $row['id'];
$index['status'] = $row['status'];

array_push($result['getId'], $index);

$result['success'] = "1";
$result['message'] = "success";

echo json_encode($result);
mysqli_close($conn);

}else{

$result["success"] = "0";
$result["message"] = "Error";

echo json_encode($result);
mysqli_close($conn);


}


}else{

$result["success"] = "0";
$result["message"] = "Error";

echo json_encode($result);
mysqli_close($conn);

}

?>