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
$action = $_GET['action'];
$submit = $data['submit'];

$username = $data['username'];
$password = $data['password'];
$email = $data['email'];
$user_type = $data['usertype'];
$first_name = $data['firstname'];
$mid_name = $data['midname'];
$last_name = $data['lastname'];
$phone = $data['phone'];
$address = $data['address'];
$website = $data['website'];
$created_at = time();

function validation(){
	
	if($username == ""){
	echo "Please enter athe user name";	
	}
	else if($username == ""){
	echo "Please enter athe user name";
	
	}
	else if($username == ""){
	echo "Please enter athe user name";
	
	}
	else if($username == ""){
	echo "Please enter athe user name";
	
	}
	if($username == ""){
	echo "Please enter athe user name";
	
	}
	

}


//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {

			$comments = stripslashes(trim($_POST['message']));
	}

	/*
	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'youremail@yoursite.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	} */
	
}



if ($action=="update") {

$id = $data['userid'];

//server side validation of input data
//build query
 $sql = "update `users` set `username` = \"$username\", `password` = \"$password\", `email` = \"$email\", `first_name`= \"$first_name\", `mid_name` = \"$mid_name\", `last_name` =\"$last_name\", `phone` = \"$phone\", `address` = \"$address\", `website` = \"$website\", `created_at` =$created_at , `user_type`= $user_type where `id` = $id ;";
} else { // insert date

//build query
$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `mid_name`, `last_name`, `phone`, `address`, `website`, `created_at`, `user_type`) VALUES (NULL, \"$username\", \"$password\", \"$email\", \"$first_name\", \"$mid_name\", \"$last_name\", \"$phone\", \"$address\", \"$website\", $created_at, $user_type);";
}
mysql_query	($sql);				
header ("Location: ../users.php");

					
			
?>