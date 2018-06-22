<?php
include'connect.php';
$ptype=$_GET['q'];
$sn=$_GET['t'];

$query  = "select * from trainee where type_id=$sn and sn=$ptype";
					//echo $query;
					$result = mysqli_query($link, $query);
					
$tablename="";
if($sn==1)
	$tablename="oncampus";
else if($sn==2)
	$tablename="offcampus";
else if($sn==3)
	$tablename="regional";
//echo 'hello'.$tablename;
					
		if (mysqli_affected_rows($link) != 0){


echo '<tr>
					<th>S No:</th>
					<th>Trainee ID:</th>
					<th>Trainee Name:</th>
					
					<th>Designation:</th>
					<th>Date of reporting:</th>
					<th>Qualification:</th>
					<th>Email:</th>
					<th>Discipline:</th>
					<th>ACTION</th>
				</tr>
				
				<tbody>';
					


					
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					        $msgid = $row['tid'];
					        
					         echo "<tr><td>" . $sno . "</td>";
					        
					        echo "<td>".$row['tid']."</td>";
					        echo "<td>" . $row['tname'] . "</td>";
							echo "<td>" . $row['degisnation'] . "</td>";
							
							echo "<td>" . $row['DOR'] . "</td>";
					        echo "<td>" . $row['qualification'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['discipline'] . "</td>";
					        $sno++;
					         echo "<td><form action='edittrainee.php' method='post'><input type='hidden' name='sn' value='" . $ptype . "'/><input type='hidden' name='tb' value='" . $tablename . "'/><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' class='a1-btn a1-blue' id='boxxe' value='Edit Trainee ' class='btn btn-info'/></form><form action='deltrainee.php' method='post' onsubmit='return ConfirmDelete()'><input type='hidden' name='sn' value='" . $ptype . "'/><input type='hidden' name='tb' value='" . $tablename . "'/><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Delete Trainee' width='20px' id='boxxe' class='a1-btn a1-orange'/></form></td></tr>";

					        
							$msgid = 0;
					    }
					    
					}

																					
				echo '</tbody>';
		}
		else{
			echo "No Data found";
		}
?>