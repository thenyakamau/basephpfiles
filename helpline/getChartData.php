<?php

require_once 'connect.php';

$sql = "SELECT * FROM data_test ORDER BY data_test.year ASC";

$result = mysqli_query($conn, $sql);
$response = array();

while($row = mysqli_fetch_array($result)){

    array_push($response, array("id" => $row[0], "year" => $row[1], "growth_rate" => $row[2]));

}

echo json_encode($response).mysqli_error($conn);
mysqli_close($conn);

?>