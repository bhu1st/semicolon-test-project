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
$action = $_GET['action'];
$id = $_GET['examid'];
$course_id_for_url = $_GET['course_id'];
 //echo $course_id_for_url ."sdafasdf";
$name = $data['name'];
$description = $data['description'];
$full_marks = $data['full_marks'];
$pass_marks = $data['pass_marks'];
$start_time = $data['start_time'];
$end_time = $data['end_time'];
$date = $data['date'];
$course_id = $data['course'];
$created_at = time();

//server side validation of input data
if($action=="delete"){
	$sql ="delete from `exam` where id=$id";
}
else if($action=="update"){
 $sql = "UPDATE `exam` SET `name` = \"$name\", `description` = \"$description\", `full_marks` = \"$full_marks\", `pass_marks` = \"pass_marks\", `start_time` = \"$start_time\",
	  `end_time` = \"$end_time\", `date` = \"$date\", `created_at` = \"$created_at\", `course_id` = \"$course_id\" WHERE `exam`.`id` = $id  LIMIT 1;";

}
else{
//build query
 $sql = "INSERT INTO `exam` (`id`, `name`, `description`, `full_marks`, `pass_marks`, `start_time`, `end_time`, `date`, `course_id`, `created_at`) 
			        VALUES (NULL, \"$name\", \"$description\", $full_marks, $pass_marks, $start_time, $end_time, $date,$course_id, $created_at);";
}
mysql_query	($sql);				

header ("Location: ../exam.php?id=$course_id_for_url");

	
						
			
?>