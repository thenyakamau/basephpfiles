<?php

require_once('connect.php');


$sql = "SELECT * FROM info_table";
$response = mysqli_query ($conn, $sql);
$result = array();

while($row = mysqli_fetch_array($response)){

array_push($result, array("help_header"=>$row[1], "help_info"=>$row[2]));

}

echo json_encode(array("server_response"=>$result));
mysqli_close($conn);


?>
