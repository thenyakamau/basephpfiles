<?php

require_once ('connect.php');

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$location = $_POST['location'];
$number = $_POST['number'];


$sql = "UPDATE helpline_table SET name = '$name', password = '$password', location = '$location' , number = '$number'  WHERE id ='$id'";


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