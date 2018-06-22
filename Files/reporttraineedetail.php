<?php
include'connect.php';
$ptype=$_GET['q'];
$sn=$_GET['t'];

$query  = "select * from trainee t INNER JOIN address ad on t.tid=ad.tid where type_id=$sn and sn=$ptype";
					//echo $query;
					$result = mysqli_query($link, $query);
					
$tablename="";
if($sn==1)
	$tablename="oncampus";
else if($sn==2)
	$tablename="offcampus";
else if($sn==3)
	$tablename="regional";
					
		if (mysqli_affected_rows($link) != 0){


echo '<tr>
					<th>S No:</th>
					<th>Trainee ID:</th>
					<th>Trainee Name:</th>
					<th>Phone No:</th>
					<th>Designation:</th>
					<th>Date of reporting:</th>
					<th>Qualification:</th>
					<th>Email:</th>
					<th>Discipline:</th>
					<th>City</th>
				</tr>
				
				<tbody>';
					


					
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					     
					        
					         echo "<tr><td>" . $sno . "</td>";
					        
					        echo "<td>".$row['tid']."</td>";
					        echo "<td>" . $row['tname'] . "</td>";
                            echo "<td>".$row['phn']."</td>";
							echo "<td>" . $row['degisnation'] . "</td>";
							
							echo "<td>" . $row['DOR'] . "</td>";
					        echo "<td>" . $row['qualification'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['discipline'] . "</td>";
                            echo "<td>".$row['city']."</td>";
					        $sno++;
                            
					        
					
					    }
					    
					}

																					
				echo '</tbody>';
		}
		else{
			echo "No Data found";
		}
?>