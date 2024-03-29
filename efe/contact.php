<!DOCTYPE html>
<html lang="en">
  <head>

<style> 
form {border-style:dotted;
border-width:1px; }

</style>

    <meta charset="utf-8">
    <title>IIIT-D Car Pool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/log.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	
  </head>

  <body>


    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">IIITD Car Pool</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
                         <?php
session_start();
if(!isset($_SESSION['userid']))
{
	 echo "<li><a href='index.php'><i class='icon-home icon-white'></i>Home</a></li>";
	 	echo "<li><a href='about.php'>About</a></li>";
      echo   "<li class='active'><a href='contact.php'>Contact Us</a></li>";
	  	   echo   "<li><a href='faq.php'>FAQ</a></li>";

}
else
{
	echo "<li><a href='dashboard.php'><i class='icon-home icon-white'></i> Home</a></li>";
	echo "<li><a href='about.php'>About</a></li>";
	echo "<li><a href='profile.php'>Profile</a></li>";
		echo "<li><a href='index.php'>Logout</a></li>";
      echo   "<li class='active'><a href='contact.php'>Contact Us</a></li>";
	  	   echo   "<li><a href='faq.php'>FAQ</a></li>";

}
?>
                          <li>
 
</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container span4 offset4">
    <h1> <div align="left"> Contact Us</div></h1>
	
<br>


	<form>
	<h4> <div align="left"> Postal Address</div></h4>
	<br>
	<?php echo "IIIT-Delhi" ?> <br>
<?php echo"	
Okhla Industrial Estate Phase III"?><br>
<?php echo "(Near Govind Puri Metro Station)"?><br>
<?php echo "New Delhi, India - 110020 " ?> <br><br>

</form>


<form>
<h4> <div align="left"> Email Address <br><br></div></h4>
	<?php echo"Write us at:"?> <br>
	 <a href="mailto:car-pool-grp9@googlegroups.com"> car-pool-grp9@googlegroups.com</a>
<br> <br>
	
    </form>
	
    
  </div>


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
