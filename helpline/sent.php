<?php

require_once('connect.php');

$fname = $_POST['fname'];
$femail = $_POST['femail'];
$fphoto = $_POST['fphoto'];
$message = $_POST['message'];
$tname = $_POST['tname'];
$temail = $_POST['temail'];
$tphoto = $_POST['tphoto'];

$sql = "INSERT INTO sent_table (fname, femail, fphoto, message, tname, temail, tphoto) VALUES ('$fname',  '$femail', '$fphoto' ,'$message', '$tname', '$temail', '$tphoto')";

if(mysqli_query($conn, $sql)){

$result["success"] = "1";
$result["message"] = "success";

echo json_encode($result);
mysqli_close($conn);

}else{

$result["success"] = "0";
$result["message"] = "error";

echo json_encode($result);
mysqli_close($conn);

}

?>