<?php

require_once 'connect.php';

$sql = "SELECT * FROM MOCK_DATA";
$result = mysqli_query($conn, $sql);
$response = array();

while($row = mysqli_fetch_array($result))

array_push($response, array("id"=>$row[0], "first_name"=> $row[1], "last_name"=>$row[2], "email"=>$row[3]
,"gender"=>$row[4], "ip_address"=>$row[5]));

echo json_encode($response).mysqli_error($conn);
mysqli_close($conn)


?>