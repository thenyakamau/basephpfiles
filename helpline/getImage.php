<?php

require_once 'connect.php';

$id = $_POST['id'];

$sql = "SELECT * FROM status_table WHERE id = '$id'";

$response = mysqli_query($conn, $sql);
$result = array();
$result['getImage'] = array();

if(mysqli_num_rows($response)===1){

$row = mysqli_fetch_assoc($response);

$index['photo'] = $row['photo'];

array_push($result['getImage'], $index);

$result['success'] = "1";
$result['message'] = "success";

echo json_encode($result);
mysqli_close($conn);


}else{

$result['success'] = "0";
$result['message'] = "error";

echo json_encode($result).mysqli_error($conn);
mysqli_close($conn);

}

?>