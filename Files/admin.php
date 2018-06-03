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
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
</head>

<body>
<?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<img src="images/lock.png" width="156" height="152" class="center">
<div class="welcome" style="margin-top:15px" align="center"><h1>WELCOME ADMIN</h1></div>
</body>
</html>
