<?php


require_once ('connect.php');
require_once ('code.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$location = $_POST['location'];

$sql = "INSERT INTO helper_table (name, email, password, number, location, code ) VALUES ('$name', '$email', '$password', '$number', '$location', '$b')";

if(mysqli_query($conn, $sql)){

$result["success"] = "1";
$result["message"] = "success";

echo json_encode($result);
mysqli_close($conn);
}else{

$result["success"] = "0";
$result["message"] = "Error";

echo json_encode($result);
mysqli_close($conn);
}

?>