<?php
include 'conn.php';
//Select data from database

$get = json_decode(stripcslashes($_POST['r']));



$id = $get->id;


$getData = "select * from user WHERE `id` = '$id'";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){
	
	$msg[] = array("name" => $r['name'], "email" => $r['email'], "status" => $r['status']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);