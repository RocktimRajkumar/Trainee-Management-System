<?php
 include "connect.php";

  $ptype=$_POST['select'];
  $pname=$_POST['pname'];
  date_default_timezone_set("Asia/Calcutta"); 
  $uniqeno=date("ymdHms");

  $sql="insert into pro_schedule(schedule_ID,schedule_name) values('".$uniqeno."','".$pname."')";
  if(mysqli_query($link,$sql)==1)
  {
      $sql1="insert into pschedule(schedule_ID) values('".$uniqeno."') ";
      if(mysqli_query($link,$sql1)==1)
      {
           $query="";
            if($ptype=="1"){
                $durfrom=$_POST['durationfm'];
                $durto=$_POST['durationto'];
                $venue=$_POST['venue'];
                if($durfrom=="")
                    $durfrom="Dates to be decided";
                if($durto=="")
                    $durto="Dates to be decided";
     
                $query="insert into oncampus(title,durationfrom,durationto,venue,type_id,scheduleID) values('".$pname."','".$durfrom."','".$durto."','".$venue."',".$ptype.",'".$uniqeno."')";
      
            }
            else if($ptype=="2"){
                $durfrom=$_POST['durationfm'];
                $durto=$_POST['durationto'];
                $venue=$_POST['venue'];
                if($durfrom=="")
                    $durfrom="Dates to be decided";
                if($durto=="")
                    $durto="Dates to be decided";
                
                $query="insert into offcampus(title,durationfrom,durationto,venue,type_id,scheduleID) values('".$pname."','".$durfrom."','".$durto."','".$venue."',".$ptype.",'".$uniqeno."')";
            }
            else if($ptype=="3"){
                $conduct=$_POST['conduct'];
                $issue=$_POST['issue'];
                
                $query="insert into researchstudy(title,conductby,issue,type_id,scheduleID) values('".$pname."','".$conduct."','".$issue."',".$ptype.",'".$uniqeno."')";
            }
            else if($ptype=="4"){
                $durfrom=$_POST['durationfm'];
                $durto=$_POST['durationto'];
                if($durfrom=="")
                    $durfrom="Dates to be decided";
                if($durto=="")
                    $durto="Dates to be decided";
                
                $query="insert into pgdaem(title,durationfrom,durationto,type_id,scheduleID) values('".$pname."','".$durfrom."','".$durto."',".$ptype.",'".$uniqeno."')";
            }
          else
              $query="nana";
          
          if(mysqli_query($link,$query)==1){
              echo "<head><script>alert('Programme Added ');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=addprogram.php'>";
          }
          else{
               echo "<head><script>alert('Programme Added Failed');</script></head></html>";
             echo error: ".mysqli_error($link);
              $query3 = "DELETE FROM pro_schedule WHERE schedule_ID='".$uniqeno."';
             mysqli_query($con,$query3);
          }
    }
    else{
      echo "<head><script>alert('Programme Added Failed');</script></head></html>";
       echo error: ".mysqli_error($link);
      $query3 = "DELETE FROM pro_schedule WHERE schedule_ID='".$uniqeno."';
             mysqli_query($con,$query3);
    }
  }
  else{
      echo "<head><script>alert('Programme Added Failed');</script></head></html>";
      echo "error: ".mysqli_error($link);
  }

  

?>