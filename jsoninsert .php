<?php
include 'conn.php';
//Insert data into database

$get = json_decode(stripcslashes($_POST['r']));

$name = $get->name;
$email = $get->email;
$status = $get->status;

$sql = "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, '$name', '$email', '$status');";
if ($connection->query($sql)) {
	$msg = array("status" =>1 , "msg" => "Your record inserted successfully" , "id"=> $connection->insert_id);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
} 

$json = $msg;

header('content-type: application/json');
echo json_encode($json);


@mysqli_close($conn);