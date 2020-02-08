<?php

require_once 'connect.php';

$femail = $_POST['femail'];
$temail = $_POST['temail'];

$sql = "SELECT * FROM sent_table WHERE femail = '$femail' and temail = '$temail'";

$response = mysqli_query($conn, $sql);
$result = array();

while($row = mysqli_fetch_array($response)){

    array_push($result, array("message" => $row[4], "result" => $row[5]));

}

echo json_encode(array("message" => $result));
mysqli_close($conn);

?>