<?php
include "connection.php";

//get user input from GET / POST method
/*
echo "<pre>";
print_r($_POST);
var_export($_POST);
echo "</pre>";
*/

$data= $_POST;

$submit = $data['submit'];

if ($submit) {

$username = $data['username'];
$password = $data['password'];
$email = $data['email'];
$usertype = $data['usertype'];
$first_name = $data['firstname'];
$mid_name = $data['midname'];
$last_name = $data['lastname'];
$phone = $data['phone'];
$address = $data['address'];
$website = $data['website'];
$created_at = time();

//server side validation of input data

//build query
$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `mid_name`, `last_name`, `phone`, `address`, `website`, `created_at`, `user_type`) VALUES (NULL, \"$username\", \"$password\", \"$email\", \"$first_name\", \"$mid_name\", \"$last_name\", \"$phone\", \"$address\", \"$website\", $created_at, $usertype);";

mysql_query	($sql);				

header ("Location: ../users.php");

}	
						
			
?>