<?php
include 'conn.php';
//Update record in database


$id = $_POST['ID']; 
$fullname = $_POST['FullName'];
$birthday = $_POST['Birthday'];
$idnumber = $_POST['IDNumber'];
$acayear = $_POST['AcaYear'];
$major = $_POST['Major'];

$query = "UPDATE `Student` SET `FullName`='$fullname',`Birthday`='$birthday',`IDNumber`='$idnumber',`AcaYear`= $acayear,`Major`='$major' WHERE  `id`='$id'";
if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "Record Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}


$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);