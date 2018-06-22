<?php

include "connect.php";

//$q=intval($_GET['q']);
//echo $q;

$arr = $_REQUEST["q"];
$sday=$_GET['day'];
$prid=$_GET['prname'];
echo "first".$arr."<br>";
$arr=substr($arr,2,-2);
echo "second".$arr."<br>";
$arr=str_replace('" "','"-"',$arr);
$arr=str_replace("'","\'",$arr);
echo "third".$arr."<br>";
$hashvalue=(explode('","',$arr));
$array1=array_values($hashvalue);
print_r($array1);

for($i=0,$j=0;$i<sizeof($array1);$i++,$j++){
    $sql="insert into pschedule(schedule_ID,sn,pdays,time,psession,methods,facilitator) values('".$prid."',".$j.",".$sday.",'".$array1[$i]."','".$array1[$i+1]."','".$array1[$i+2]."','".$array1[$i+3]."')";
    echo $sql;
     if(mysqli_query($link,$sql)){
     
        echo "<head><script>alert('Schedule Uploaded ');</script></head></html>";
//        echo "<meta http-equiv='refresh' content='0; url=addSchedule.php'>";   
     }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($link);
   }
    
    $i=$i+3;
}

?>
