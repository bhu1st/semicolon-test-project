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

      <h1>Add New Course</h1>
      <p>From here you can add courses of Online Examination System.</p>
	  
	  </br></br>
	  
	  <?php 
	  
	  $id = $_GET['id'];
	   	   
	   if ($id != ""){     
		 
					include "actions/connection.php";									
					$sql = "select * from courses where `id`= $id";											
					$result = mysql_query($sql);	
					$course = mysql_fetch_assoc($result);				
					
		?>

		
		<form class="form-horizontal" action="actions/courses_add.php?action=update" method="POST">
		  
		   <input type="hidden" id="courseid" name="courseid" placeholder="" value="<?php echo $course['id']; ?>">
		   
		  <div class="control-group">
			<label class="control-label" for="coursename">Course Name</label>
			<div class="controls">
			  <input type="text" id="coursename" name="coursename" placeholder="" value="<?php echo $course['name']; ?>">
			</div>
		  </div>
		 
		  <div class="control-group">
			<label class="control-label" for="description">Course Description</label>
			<div class="controls">
			 <textarea rows="3" id="description" name="description"><?php echo $course['description']; ?></textarea>
			</div>
		  </div>
		  <div class="control-group">
			<div class="controls">
			  <input type="submit" class="btn btn-success" name="submit" value="Update Course">
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
