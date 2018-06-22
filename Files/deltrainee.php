<?php

include'connect.php';
			
			  $tid=$_POST['name'];
			  
			  
			  $query1="DELETE  FROM trainee WHERE tid=$tid";
			  if(mysqli_query($link,$query1)==1)
			  {
				  
				 
											echo "<html><head><script>alert('TRAINEE DETAILS DELETED SUCCESSFULLY');</script></head></html>";
											echo "<meta http-equiv='refresh' content='0; url=managetrainee.php'>";  
				  
			  }
			  else
									{
									echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
									echo "error".mysqli_error($link);
										}
?>