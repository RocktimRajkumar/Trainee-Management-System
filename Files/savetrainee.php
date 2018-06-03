<?php
 include "connect.php";
 $ptype=$_POST['protype'];
 $tid=$_POST['traineeID'];
 $tname=$_POST['fname'];
 $deg=$_POST['designation'];
 $street=$_POST['address'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $pin=$_POST['pin'];
 $phn=$_POST['pno'];
 $pname="";
 $DOR=$_POST['dor'];
 
 if($ptype=="1"){
     $pname=$_POST['pnameOn'];  
 }
 else if($ptype=="2"){
     $pname=$_POST['pnameOff'];
 }
 else if($ptype=="3"){
     $pname=$_POST['pnameRe'];
 }
 else if($ptype=="4"){
     $pname=$_POST['pnamePg'];
 }

  $query="insert into trainee(tid,tname,degisnation,phn,DOR,type_id,sn) values('".$tid."','".$tname."','".$deg."','".$phn."','".$DOR."','".$ptype."','".$pname."')";

  if(mysqli_query($link,$query)==1){
       
      $query1="insert into address(tid,city,state,streetname) values('".$tid."','".$city."','".$state."','".$street."')";
      if(mysqli_query($link,$query1)==1){
          echo "<head><script>alert('Trainee Successfully Added');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=addtrainee.php'>";
      }else{
       echo "<head><script>alert('Trainee Added Failed');</script></head></html>";
       echo "error: ".mysqli_error($link);
       $query3 = "DELETE FROM trainee WHERE tid='$tid'";
       mysqli_query($link,$query3);
    }
  }
  else{
       echo "<head><script>alert('Trainee Added Failed');</script></head></html>";
       echo "error: ".mysqli_error($link);
  }

?>