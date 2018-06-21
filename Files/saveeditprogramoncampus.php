<?php
require 'connect.php';

    
    
   $id=$_POST['pass'];
   $pname=$_POST['pname'];
   $duf=$_POST['durationfm'];
   $duto=$_POST['durationto'];
   $venue=$_POST['venue'];
    
    
    $query1="update oncampus set title='".$pname."',durationfrom='".$duf."',durationto='".$duto."',venue='".$venue."' where sn=$id";

   if(mysqli_query($link,$query1)){
     
            echo "<html><head><script>alert('PROGRAM UPDATED SUCCESSFULLY');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=editprogram.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($link);
   }
    

?>
