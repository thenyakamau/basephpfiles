<?php

require_once 'connect.php';

$tname = $_POST['fname'];
$temail = $_POST['femail'];

$sql = "SELECT DISTINCT fname, femail, fphoto FROM sent_table WHERE tname = '$tname' AND temail = '$temail' ORDER BY sent_table.id DESC";

$response = mysqli_query($conn, $sql);
$result = array();

while($row = mysqli_fetch_array($response)){

array_push($result, array("t_name" => $row[0], "t_email" => $row[1], "f_photo" => $row[2]));

}

echo json_encode(array("server_response" => $result));
mysqli_close($conn);

?>