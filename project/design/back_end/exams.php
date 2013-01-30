<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ADD User</title>
    
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
         <link rel="shortcut icon" href="assets/ico/favicon.png">

  </head>
  
  
  

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php

include "nav.php";

?>
        </div>
      </div>
    </div>

  
  
<header class="jumbotron subhead" id="overview">



  <div class="container">
	  <form method="post" action="<?php echo "index.php"?>">
      <input type="submit" value="ADDNext">
      <button type="button" onClick="edit_user();">Update</button>
      <button type="button" onClick="cance_user();">Cancel</button>
      <button type="button" onClick="finish_user();">Finish</button>
       
        <label>Subject:</label><input rdtype="text" name="username" value="" />
        <br/>
        <label>Description:</label><input type="text" name="Description" value="" />
        <br/>
         <label class="form_label">Full Marks:</label>
        <input class="form_input" type="text" name="Email" value="" />
        <br/>
         <label class="form_label">Pass Marks:</label>
        <input class="form_input" type="text" name="First Name" value="" />
        <br/>
         <label class="form_label">Start Time:</label>
        <input class="form_input" type="text" name="MiddleName" value="" />
        <br/>
         <label class="form_label">End Time:</label>
        <input class="form_input" type="text" name="LastName" value="" />
        <br/>
         <label class="form_label">Date:</label>
        <input class="form_input" type="text" name="Phone" value="" />
        <br/>
         <label class="form_label">Created At:</label>
        <input class="form_input" type="text" name="Address" value="" />
        <br/>
         
    </form>
</header>
 </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>



  </body>
</html>
