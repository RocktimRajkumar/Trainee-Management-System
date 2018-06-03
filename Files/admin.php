<!doctype html>
<?php
session_start();
if(!isset($_SESSION["adminlogin"]))
{
	header("location:index.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>TMS</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="a1-container a1-black">
	<div class="a1-bar a1-black" style="width:800px; margin:0 auto;">
   	  <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="index.php">Home</a></div>
      <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="addprogram.php">Add Program</a></div> 
      <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="addtrainee.php">Add Trainee</a></div>
          <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="manageschedule.php">Manage Schedule</a></div>  
          <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="logout.php">Logout</a></div>  
    </div>
</div>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<img src="images/lock.png" width="156" height="152" class="center">
<div class="welcome" style="margin-top:15px" align="center"><h1>WELCOME ADMIN</h1></div>
</body>
</html>
