<?php
include 'conn.php';
//Delete record from database

$id = $_POST['ID'];

$query = "DELETE FROM Student WHERE `ID`='$id'";
if ($connection->query($query)) {
    $msg = array("status" =>1 , "msg" => "Record Deleted successfully");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
} 

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);