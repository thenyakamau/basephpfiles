<?php

require_once 'connect.php';

$id = $_POST['id'];
$status = $_POST['status'];


$sql = "UPDATE status_table SET status = '$status' WHERE id = '$id' ";


if (mysqli_query($conn, $sql)) {

$tql = "SELECT * FROM status_table WHERE id = '$id'  ";

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