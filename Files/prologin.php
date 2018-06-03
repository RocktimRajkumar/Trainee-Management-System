<?php
session_start();

	if(isset($_POST["submit"]))
		 
	{
		
		$usernm=$_POST["usernm"];
		$pass=$_POST["pass"];
		if($usernm=="admin" || $pass="admin")
		{
			$_SESSION['adminlogin']=$usernm;		
            echo $_SESSION['adminlogin'];			
			header("location:admin.php");
			
		}
			else
			{
				header("location:index.php?pwd=0");
			}
		
		
		
    }

?>
