<?php

include "connect.php";
$t=intval($_GET['q']);
if($t==1){
    $sql="SELECT * FROM oncampus";   
}
else if($t==2){
    $sql="SELECT * FROM offcampus";
}
else if($t==3){
    $sql="SELECT * FROM regional";
}



$result=mysqli_query($link,$sql);
echo "<tr>
    <td height='35'>PROGRAM NAME:</td>
    <td height='35'><select name='proname' id='proname' onchange='myProgramDay(this.value,".$t.")'>
    <option value='0'>--Please select--</option>";
while($row=mysqli_fetch_assoc($result)){
    
    echo '<option value='.$row["scheduleID"].'>'.$row["title"].'</option>';
    
    
}
echo "</select>";
echo "</td>";
echo "</tr>";
?>