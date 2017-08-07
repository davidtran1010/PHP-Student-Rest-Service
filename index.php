<?php
$conn = mysqli_connect("localhost", "root", "", "service") or die(mysqli_error());
/* 
// insert data
 
$sql = "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, 'Jatin', 'jatin@122.d', '123dfsdfsf');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}  */

 /* 
// get data
$getData = "select * from user";
$qur = mysqli_query($conn, $getData);

while($r = mysqli_fetch_assoc($qur)){
	print_r($r);
}
 */
 
 // UPDATE
/* $query = "UPDATE `user` SET `name`='jony' WHERE  `status`='123dfsdfsf'";
if (mysqli_query($conn, $query)) {
    echo "Record updated";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
} */

/* 
// Detele
$query = "DELETE FROM `user` WHERE   `id`='2'";
if (mysqli_query($conn, $query)) {
    echo "Record deleted";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
} */


// Multiple INSERT
$query = "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, 'shubu', 'shubu@122.d', '12');";
$query .= "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, 'panku', 'jatin@122.d', '3');";
$query .= "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, 'Jatin', 'jatin@122.d', '123d');";
if (mysqli_multi_query($conn, $query)) {
    echo "Record Added success.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

@mysqli_close($conn);