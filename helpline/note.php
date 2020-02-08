<?php

header("Content-type:application/json");
require_once 'connect.php';

$sql = "SELECT * FROM test_table ORDER BY test_table.id DESC";

$result = mysqli_query($conn, $sql);
$response = array();

while($row = mysqli_fetch_array($result)){

    date_default_timezone_set("Africa/Nairobi");
    array_push($response, array("id" => $row['0'], "title" => $row['1'], "post"=>$row['2'], "date" =>date("l d/m/y  h:i a", $row['3']), "color" => $row['4']));

}

echo json_encode($response).mysqli_error($conn);

?>