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

	<h1>Add Exam</h1>
      <p>From here you can add exam of Online Examination System.</p>
	  <br/>      <br/>

		<?php 	    
					include "actions/connection.php";									
					$sql = "select id, name from courses";											
					$course = mysql_query($sql);
					
			?>      
	  <form class="form-horizontal" action = "actions/exam_add.php" method = "POST">
	  <div class="control-group">
		<label class="control-label" for="name">Exam Name</label>
		<div class="controls">
		  <input type="text" id="name" name="name"  placeholder="">
		</div>
	  </div>
	 
	  <div class="control-group">
		<label class="control-label" for="description">Exam Description</label>
		<div class="controls">
		 <textarea rows="3" id="description" name="description"></textarea>
		</div>
	  </div>
  
  
	  <div class="control-group">
		<label class="control-label" for="full_marks">Full Mark</label>
		<div class="controls">
		  <input type="text" id="full_marks" name="full_marks" placeholder="">
		</div>
	  </div>
	  
	  
	  <div class="control-group">
		<label class="control-label" for="pass_marks">Pass Mark</label>
		<div class="controls">
		  <input type="text" id="pass_marks" name="pass_marks" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group">
		<label class="control-label" for="start_time">Start Time</label>
		<div class="controls">
		  <input type="text" id="start_time" name="start_time" placeholder="">
		</div>
	  </div>
	  
	 <div class="control-group">
		<label class="control-label" for="end_time">End Time</label>
		<div class="controls">
		  <input type="text" id="end_time" name="end_time" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group">
		<label class="control-label" for="date">Exam Date</label>
		<div class="controls">
		  <input type="text" id="date" name="date" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group">
		<label class="control-label" for="course">Course Name</label>
		<div class="controls">
		  <select id="course" name="course">
		  
		  <option value="0" selected="selected" >-Select Course-</option><br>
		  
				   <?php while($courseres = mysql_fetch_assoc($course)){?>
						  <option value="<?php echo $courseres['id']; ?>"><?php echo $courseres['name']; ?></option><br>
                      <?php    }		?>	
		  </select>
		</div>
	  </div>
	  
	  <div class="control-group">
		<div class="controls">
		  <input type="submit" class="btn btn-success" name="submit" value="Add Exam">
		</div>
	  </div>
	</form>

	  
	  	  

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
