<?php
include "connection.php";
$data=$_POST;
$submit = $data['submit'];
$examid = $_GET['examid'];

$question = $data['question'];
$question_type = $data['question_type'];
$marks = $data['marks'];
$remark = $data['remark'];

 $sql = "INSERT INTO `questions` (`id`, `question`,`exam_id` , `questiontype_id`, `marks`, `remark`) VALUES (NULL, \"$question\", $examid,\"$question_type\", \"$marks\", \"$remark\");";
	
	mysql_query($sql);
	
	header("location: ../question.php?examid=$examid");
						
			
?>