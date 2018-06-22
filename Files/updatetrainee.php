<?php
include 'connect.php';

$tid=$_POST['traineeID'];
$fname=$_POST['fname'];
$tid=$_POST['traineeID'];
$desg=$_POST['designation'];
$dor=$_POST['dor'];
$add=$_POST['add'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$pno=$_POST['pno'];
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$discipline=$_POST['discipline'];
$ptype=$_POST['ptype'];
$pname=$_POST['pname'];

$query1="update trainee set tname='".$fname."',degisnation='".$desg."',phn='".$pno."',qualification='".$qualification."',email='".$email."' ,discipline='".$discipline."' where tid=$tid";

									if(mysqli_query($link,$query1)==1)
									{
										
									$query2="update address set pin='".$pin."',city='".$city."',state='".$state."',streetname='".$add."' where tid=$tid";	
									 if(mysqli_query($link,$query2)==1)
									 {
										 echo "<html><head><script>alert('TRAINEE DETAILS UPDATED SUCCESSFULLY');</script></head></html>";
											echo "<meta http-equiv='refresh' content='0; url=managetrainee.php'>";  
									 }
									 else
									 {
										 echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
									echo "error".mysqli_error($link);
									 }
									}
									
									else
									{
									echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
									echo "error".mysqli_error($link);
										}
    



?>