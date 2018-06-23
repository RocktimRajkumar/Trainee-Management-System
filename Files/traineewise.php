<?php
include'connect.php';
$tname=$_GET['q'];
$query  = "select * from trainee t
INNER JOIN programme p on t.type_id=p.type_id
INNER JOIN address ad on t.tid=ad.tid
where t.tname like '%".$tname."%'";
$result = mysqli_query($link, $query);
					


					
if (mysqli_affected_rows($link) != 0){
 
 echo '<tr><td colspan=10><h4 align="center" >Trainee Wise Report</h4></td></tr>';
echo '<tr>
					<th>S No:</th>
					<th>Trainee ID:</th>
					<th>Trainee_Name:</th>
					<th>Designation:</th>
					<th>Program Type:</th>
					<th>Qualification:</th>
					<th>Email:</th>
					<th>Discipline:</th>
					<th>City</th>
                    <th>Action</th>
				</tr>
				
				<tbody>';
					


					
					$sno    = 1;

				
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					     
					        
					         echo "<tr><td>" . $sno . "</td>";
					        
					        echo "<td>".$row['tid']."</td>";
					        echo "<td>" . $row['tname'] . "</td>";
							echo "<td>" . $row['degisnation'] . "</td>";
							
							echo "<td>" . $row['type'] . "</td>";
					        echo "<td>" . $row['qualification'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['discipline'] . "</td>";
                            echo "<td>".$row['city']."</td>";
                            
                            $tid=$row['tid'];
                            $sn=$row['sn'];
                            $tablename=$row['type'];
                            
                            echo '<td><a href=traineeviewall.php?tid="'.$tid.'"&sn="'.$sn.'"&tname="'.$tablename.'"><input type="submit" value="View All"></a></td>';
					        $sno++;
                            
					        
					
					    }
					    

																					
				echo '</tbody>';
		}
		else{
			echo "No Data found";
		}
?>