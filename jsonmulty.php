<?php
include 'conn.php';
//Insert Multyple record into database

$get = json_decode(stripcslashes($_POST['r']));

$name = $get->name;
$email = $get->email;
$status = $get->status;
$name1 = $get->name1;
$email1 = $get->email1;
$status1 = $get->status1;
$name2 = $get->name2;
$email2 = $get->email2;
$status2 = $get->status2;


$query = "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, '$name', '$email', '$status');";
$query .= "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, '$name1', '$email1', '$status1');";
$query .= "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, '$name2', '$email2', '$status2');";

 if ($connection->multi_query($query)) {
 $msg = array("status" =>1 , "msg" => "All Records Inserted successfully");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);