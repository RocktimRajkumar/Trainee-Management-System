<?php
require 'connect.php';


$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
	
	$query1="DELETE  FROM offcampus WHERE scheduleID=$msgid";
   if(mysqli_query($link,$query1)==1)
   {
						 $query2= "delete from pro_schedule where schedule_ID=$msgid";
							if(mysqli_query($link,$query2)==1)
								{
									$query3 = "delete from pschedule where schedule_ID=$msgid";
													if(mysqli_query($link,$query3)==1)
													{
												echo "<html><head><script>alert('Program Deleted');</script></head></html>";
													echo "<meta http-equiv='refresh' content='0; url=editprogram.php'>";
													}
													else
													{
														echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
														echo "error".mysqli_error($link);
													}
							
								}
							else
							{
									echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
									echo "error".mysqli_error($link);
							}
							
							
   }
   else 
	{
		echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
		echo "error".mysqli_error($link);
	}
	} 			
	else {
			echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
			 echo "error".mysqli_error($link);
	}

?>
