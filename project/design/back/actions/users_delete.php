<?php
include "connection.php";

//get user input from GET / POST method

$id= $_GET['id'];

if ($id) {

//build query
$sql = "delete from `users` where `id`=$id limit 1;";

mysql_query	($sql);				

header ("Location: ../users.php");

}	
	
	
			
?>