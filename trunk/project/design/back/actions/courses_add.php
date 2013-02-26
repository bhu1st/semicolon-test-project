<?php
include "connection.php";

//get user input from GET / POST method

$action = $_GET['action'];


$data= $_POST;
$submit = $data['submit'];

if ($action=="update") {

$coursename = $data['coursename'];
$description = $data['description'];
$id = $data['courseid'];

//server side validation of input data
//build query
$sql = "update `courses` set `name` = \"$coursename\", `description` = \"$description\" where `id` = $id ;";

} else { // insert date

$coursename = $data['coursename'];
$description = $data['description'];
//server side validation of input data

//build query
$sql = "INSERT INTO `courses` (`id`, `name`, `description`) VALUES (NULL, \"$coursename\", \"$description\");";
}

mysql_query	($sql);				
header ("Location: ../course.php");


						
			
?>