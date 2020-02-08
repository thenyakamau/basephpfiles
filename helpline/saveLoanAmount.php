<?php

require_once 'connect.php';

$id = $_POST['id'];
$loan = $_POST['loan'];

$sql = "UPDATE myTable SET loan = '$loan' WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
    
    $result['success'] = '1';
    $result['message'] = 'success';
    

}else{
    
    $result['success'] = '0';
    $result['message'] = 'failure';
    
    
}

echo json_encode($result);
mysqli_close($conn);

?>