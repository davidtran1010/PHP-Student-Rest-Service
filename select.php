<?php
include 'conn.php';
//Select data from database


$getData = "select * from Student";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){
	
	$msg[] = array("ID" => $r['ID'],"FullName" => $r['FullName'], "Birthday" => $r['Birthday'],"IDNumber" => $r['IDNumber'],"AcaYear" => $r['AcaYear'], "Major" => $r['Major']);
}
$convert = array("result" => $msg);
$json = $convert;

header('content-type: application/json');

echo json_encode($json);


@mysqli_close($conn);