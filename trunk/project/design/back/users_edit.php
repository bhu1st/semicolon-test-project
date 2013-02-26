<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Examination System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

    <?php
			   include "nav.php";
	?>
        

    <div class="container">

	<h1>Add Users</h1>
      <p>From here you can add users of Online Examination System.</p>
	  <br/>  <br/>      
	  
	   <?php 
	  
	  $id = $_GET['id'];
	   	   
	   if ($id != ""){     
		 
					include "actions/connection.php";									
					$sql = "select * from users where `id`= $id";											
					$result = mysql_query($sql);	
					$users = mysql_fetch_assoc($result);				
					
		?>
		
		  <form class="form-horizontal" action="actions/users.php?action=update" method="POST">
		  <input type="hidden" id="userid" name="userid" placeholder="" value="<?php echo $users['id']; ?>">
	  <div class="control-group">
		<label class="control-label" for="username">Username</label>
		<div class="controls">
		  <input type="text" id="username" name="username" value ="<?php echo $users['username']; ?>" placeholder="">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
		  <input type="password" id="password" name="password" value ="<?php echo $users['password']; ?>" placeholder="">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
		  <input type="text" id="email"  name="email" value ="<?php echo $users['email']; ?>" placeholder="">
		</div>
	  </div>
	  
	  
	  <div class="control-group">
		<label class="control-label" for="usertype">User Type</label>
		<div class="controls">
		  <select name="usertype">
				  <option value="1"><?php echo $users['user_type']; ?></option>
						  
		   <select>
		</div>
	  </div> 
				
	  
	  <div class="control-group">
		<label class="control-label" for="firstname">First Name</label>
		<div class="controls">
		  <input type="text" id="firstname" name="firstname" value ="<?php echo $users['first_name']; ?>" placeholder="">
		</div>
	  </div>
	  
		<div class="control-group">
		<label class="control-label" for="midname">Middle Name</label>
		<div class="controls">
		  <input type="text" id="midname" name="midname" value ="<?php echo $users['mid_name']; ?>" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group">
		<label class="control-label" for="lastname">Last Name</label>
		<div class="controls">
		  <input type="text" id="lastname" name="lastname" value ="<?php echo $users['last_name']; ?>" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group">
		<label class="control-label" for="phone">Phone</label>
		<div class="controls">
		  <input type="text" id="phone" name="phone" value ="<?php echo $users['phone']; ?>" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group">
		<label class="control-label" for="address">Address</label>
		<div class="controls">
		  <input type="text" id="address" name="address" value ="<?php echo $users['address']; ?>" placeholder="">
		</div>
	  </div>
	  
	  
	  <div class="control-group">
		<label class="control-label" for="website">Website</label>
		<div class="controls">
		  <input type="text" id="website" name="website" value ="<?php echo $users['website']; ?>" placeholder="">
		</div>
	  </div>
	  
	  
	  <div class="control-group">
		<div class="controls">
		  <input type="submit" class="btn btn-success" name="submit" value="Update User">
		</div>
	  </div>
	</form>

	 <?php } else {  ?>   
	 	    No course available to edit.
	 <?php }  ?>
	  	  

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
	
	
  </body>
</html>
