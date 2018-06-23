<?php
include'connect.php';
$pstate=$_GET['q'];
$query  = "select * from pgdaem where state='".$pstate."'";
$result = mysqli_query($link, $query);
					


					
if (mysqli_affected_rows($link) != 0){
 
 echo '<tr><td colspan=11><h4 align="center" >PGDAEM Trainee of '.$pstate.' Report</h4></td></tr>';
echo '<tr>
					<th>S No:</th>
					<th>Trainee ID:</th>
					<th>Trainee_Name:</th>
					<th>Designation:</th>
					<th>Address:</th>
					<th>Qualification:</th>
					<th>Email:</th>
					<th>Discipline:</th>
					<th>Batch</th>
                    <th>Semester</th>
                    <th>Length of Service</th>
				</tr>
				
				<tbody>';
					


					
					$sno    = 1;

				
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					     
					        
					         echo "<tr><td>" . $sno . "</td>";
					        
					        echo "<td>".$row['canID']."</td>";
					        echo "<td>" . $row['canname'] . "</td>";
							echo "<td>" . $row['designation'] . "</td>";
							
							echo "<td>" . $row['address'] . "</td>";
					        echo "<td>" . $row['qualification'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['discipline'] . "</td>";
                            echo "<td>".$row['batch']."</td>";
                            echo "<td>".$row['semester']."</td>";
                            echo "<td>".$row['lenofservice']."</td>";
                            
					        $sno++;
                            
					        
					
					    }
					    

																					
				echo '</tbody>';
		}
		else{
			echo "No Data found";
		}
?>