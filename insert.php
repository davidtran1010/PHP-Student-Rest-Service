<?php
include 'conn.php';
//Insert data into database
//$id = $_POST['ID'];   auto_increment on db
$fullname = $_POST['FullName'];
$birthday = $_POST['Birthday'];
$idnumber = $_POST['IDNumber'];
$acayear = $_POST['AcaYear'];
$major = $_POST['Major'];

$sql = "INSERT INTO Student (fullname, birthday, idnumber,acayear,major) VALUES ('$fullname', '$birthday','$idnumber','$acayear','$major');";

if ($connection->query($sql)) {
	$msg = array("status" =>1 , "msg" => "Your record inserted successfully");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
} 

$json = $msg;

header('content-type: application/json');
echo json_encode($json);


@mysqli_close($conn);