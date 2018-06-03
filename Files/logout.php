<?php
session_start();

	$_SESSION=array();

		
		session_destroy();
		
	header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
	header("Pragma: no-cache"); // HTTP 1.0.
	header("Expires: 0");
	header("location:index.php");
	
	
	
	
?>