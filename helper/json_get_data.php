<?php

require_once('connect.php');


$sql = "SELECT * FROM helper_table ORDER BY helper_table.id DESC";
$result = mysqli_query ($conn, $sql);
$response = array();

while($row = mysqli_fetch_array($result)){

array_push($response, array("name"=>$row[1], "email"=>$row[2], "number"=>$row[4], "location"=>$row[5], "photo"=>$row[6]));

}

echo json_encode(array("server_response"=>$response));


mysqli_close($conn);


?>
