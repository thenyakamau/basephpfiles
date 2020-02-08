<?php

require_once 'connect.php';

$help_header = $_POST['help_header'];
$help_info = $_POST['help_info'];

$sql = "INSERT INTO info_table (help_header, help_info) VALUES ('$help_header', '$help_info')" ;

if(mysqli_query($conn, $sql)){

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