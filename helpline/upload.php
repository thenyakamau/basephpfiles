<?php

require_once 'connect.php';

$id = $_POST['id'];
$photo = $_POST['photo'];

$path = "profile_image/$id.jpeg";
$finalpath = "http://thenyakamau.000webhostapp.com/helpline/".$path;

$sql = "UPDATE helpline_table SET photo = '$finalpath' WHERE id = '$id' ";

if(mysqli_query($conn, $sql)){

if(file_put_contents($path, base64_decode($photo))){

$result['success'] = "1";
$result['message'] = "success";

echo json_encode($result);
mysqli_close($conn);

}else{

echo "error ".mysqli_error($conn);

}

}

?>