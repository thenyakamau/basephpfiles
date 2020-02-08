<?php

require_once 'connect.php';

$sql = "SELECT * FROM status_table ORDER BY status_table.id DESC";

$response = mysqli_query($conn, $sql);
$result = array();

while($row = mysqli_fetch_array($response)){

	date_default_timezone_set("Africa/Nairobi");

array_push($result, array("post_name" => $row[1], "post_email" => $row[2], "post_status" => $row[3] , "post_photo" => $row[4], "post_image" => $row[5], "post_time" => date("l d/m/y  h:i a",$row[6]) ));

}

echo json_encode(array("tipInfo"=> $result));

?>