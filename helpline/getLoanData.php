<?php

require_once 'connect.php';

$sql = "SELECT * FROM myTable ORDER BY id";
$result = mysqli_query($conn, $sql);
$response = array();

while($row = mysqli_fetch_array($result))

array_push($response, array("id"=>$row[0], "first_name"=> $row[1], "last_name"=>$row[2], "address"=>$row[3]
,"loan"=>$row[4], "n_id"=>$row[5], "number"=>$row[6]));

echo json_encode($response).mysqli_error($conn);
mysqli_close($conn)


?>