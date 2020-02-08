<?php

require_once 'connect.php';

$help_header = $_POST['title'];
$help_info = $_POST['post'];
$color = $_POST['color'];
$time = time();

$sql = "INSERT INTO test_table (title, post, time, color) VALUES ('$help_header', '$help_info', '$time', '$color')" ;

if(mysqli_query($conn, $sql)){

$response['success'] = 'true';
$response['message'] = 'successful';

echo json_encode($response);
mysqli_close($conn);

}else{

$response['success'] = 'false';
$response['message'] = 'failure';

echo json_encode($response).mysqli_error($conn);
mysqli_close($conn);


}

?>