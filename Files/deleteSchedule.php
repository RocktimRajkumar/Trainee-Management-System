<?php

include "connect.php";

$sday=$_GET['day'];
$prid=$_GET['prname'];

$sql="delete from pschedule where schedule_ID='".$prid."' and pdays='".$sday."'";

if(mysqli_query($link,$sql)){
    echo "<meta http-equiv='refresh' content='0; url=editschedule.php'>";
}
else{
    echo "error".mysqli_error($link);
}

?>