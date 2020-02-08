<?php

require_once 'connect.php';

$fname = $_POST['fname'];
$femail = $_POST['femail'];

$sql = "SELECT DISTINCT tname, temail, tphoto FROM sent_table WHERE fname = '$fname' AND femail = '$femail' ORDER BY sent_table.id DESC";

$response = mysqli_query($conn, $sql);
$result = array();

while($row = mysqli_fetch_array($response)){

array_push($result, array("t_name" => $row[0], "t_email" => $row[1], "t_photo" => $row[2]));

}

echo json_encode(array("server_response" => $result));
mysqli_close($conn);

?>