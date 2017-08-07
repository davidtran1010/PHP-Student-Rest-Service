<?php
include 'conn.php';
//Update record in database


$get = json_decode(stripcslashes($_POST['r']));


$name = $get->name;
$email = $get->email;
$status = $get->status;
$id = $get->id;


$query = "UPDATE `user` SET `name`='$name' ,`email`='$email' WHERE  `id`='$id'";
if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "Record Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}


$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);