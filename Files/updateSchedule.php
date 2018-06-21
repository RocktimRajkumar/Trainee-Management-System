<?php

include "connect.php";

//$q=intval($_GET['q']);
//echo $q;

$arr = $_REQUEST["q"];
$sday=$_GET['day'];
$prid=$_GET['prname'];
$arr=substr($arr,2,-2);
$hashvalue=(explode('","',$arr));
$array1=array_values($hashvalue);

for($i=0,$j=0;$i<sizeof($array1);$i++,$j++){
    $sql="update pschedule set time='".$array1[$i]."',psession='".$array1[$i+1]."',methods='".$array1[$i+2]."',facilitator='".$array1[$i+3]."' where schedule_ID='".$prid."' and pdays=".$sday." and sn=".$j."";
    
     if(mysqli_query($link,$sql)){
     
        echo "<head><script>alert('Schedule Updated ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=editschedule.php'>";   
     }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($link);
   }
    
    $i=$i+3;
}

?>