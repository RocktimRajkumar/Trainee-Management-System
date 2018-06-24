<?php
include'connect.php';
$state=$_GET['state'];
$batch=$_GET['batch'];
$sem=$_GET['sem'];

$query  = "select * from pgdaem where state='".$state."' and batch='".$batch."' and semester='".$sem."'";
					//echo $query;
					$result = mysqli_query($link, $query);
					



					
 if (mysqli_affected_rows($link) != 0){
 
 echo '<tr><td colspan=11><h4 align="center" >PROGRAM WISE REPORT OF PGDAEM</h4></td></tr>';
echo '<tr>
					<th>S No</th>
					<th>Trainee ID</th>
					<th>Trainee Name</th>
					<th>Phone No</th>
					<th>Designation</th>
					<th>Semester</th>
					<th>Qualification</th>
					<th>Email</th>
					<th>Discipline</th>
					<th>State</th>
                    <th>Length Of Service</th>
				</tr>
				
				<tbody>';
					


					
					$sno    = 1;

					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					     
					        
					         echo "<tr><td>" . $sno . "</td>";
					        
					        echo "<td>".$row['canID']."</td>";
					        echo "<td>" . $row['canname'] . "</td>";
                            echo "<td>".$row['phoneno']."</td>";
							echo "<td>" . $row['designation'] . "</td>";
							
							echo "<td>" . $row['semester'] . "</td>";
					        echo "<td>" . $row['qualification'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['discipline'] . "</td>";
                            echo "<td>".$row['state']."</td>";
                            echo "<td>".$row['lenofservice']."</td>";
					        $sno++;
                            
					        
					
					    }
					    
				echo '</tbody>';
		}
		else{
			echo "No Data found";
		}
?>