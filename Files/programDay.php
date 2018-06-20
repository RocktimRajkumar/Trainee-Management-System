<?php

include "connect.php";
$t=intval($_GET['t']);
$q=$_GET['q'];
if($t==1){
    $sql="SELECT * FROM oncampus where scheduleID=".$q;   
}
else if($t==2){
    $sql="SELECT * FROM offcampus where scheduleID=".$q;
}
else if($t==3){
    $sql="SELECT * FROM regional where scheduleID=".$q;
}



$result=mysqli_query($link,$sql);
echo "<tr>
    <td height='35'>Schedule Day:</td>
    <td height='35'><select name='scheduleday' id='scheduleday' onchange='showcreatebutton(this.value)'>
    <option value='0'>--Please select--</option>";
while($row=mysqli_fetch_assoc($result)){
    
    $d1=$row['durationfrom'];
    $d2=$row['durationto'];


    $daysLeft = abs(strtotime($d2) - strtotime($d1));
    $days = $daysLeft/(60 * 60 * 24);
    $days+=1;
    for($i=1;$i<=$days;$i++)
        echo '<option value='.$i.'>'.$i.'</option>';
    
    
}
echo "</select>";
echo "</td>";
echo "</tr>";
echo "</table>";
?>