<?php 
include "connect.php";
$day=$_GET['q'];
$scID=$_GET['sid'];

$sql="select * from pschedule where schedule_ID='".$scID."' and pdays=".$day." order by sn";

$result=mysqli_query($link,$sql);

echo "<tr>
    <th>Time</th>
    <th>Session/Topic</th>
    <th>Methods</th>
    <th>Facilitator/Resource Person</th>
</tr>";
while($row=mysqli_fetch_assoc($result)){
  echo "<tr><td><input type='text' value='".$row['time']."'></td>";
  echo "<td><input type='text' value='".$row['psession']."'></td>";
  echo "<td><input type='text' value='".$row['methods']."'></td>";
  echo "<td><input type='text' value='".$row['facilitator']."'></td></tr>";
}

echo "<tr border='0'><td colspan='2' align='right'><input type='button' value='Update' onclick='sumbit()'></td>";
echo "<td colspan='2' align='left'><input type='reset' value='Cancel'><td></tr>";


?>