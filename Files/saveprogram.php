<?php
 include "connect.php";

  $ptype=$_POST['select'];
  $pname=$_POST['pname'];
  date_default_timezone_set("Asia/Calcutta"); 
  $uniqeno=date("ymdHms");

  $sql="insert into pro_schedule(schedule_ID,schedule_name) values('".$uniqeno."','".$pname."')";
  if(mysqli_query($link,$sql)==1)
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
                $durfrom=$_POST['durationfm'];
                $durto=$_POST['durationto'];
                $venue=$_POST['venue'];
                if($durfrom=="")
                    $durfrom="Dates to be decided";
                if($durto=="")
                    $durto="Dates to be decided";
                
                $query="insert into regional(title,durationfrom,durationto,venue,type_id,scheduleID) values('".$pname."','".$durfrom."','".$durto."','".$venue."',".$ptype.",'".$uniqeno."')";
            }
          else
              $query="nana";
          
          if(mysqli_query($link,$query)==1){
              echo "<head><script>alert('Programme Added ');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=addprogram.php'>";
          }
          else{
               echo "<head><script>alert('Programme Added Failed');</script></head></html>";
             echo "error: ".mysqli_error($link);
              $query3 = "DELETE FROM pro_schedule WHERE schedule_ID='".$uniqeno."'";
             mysqli_query($link,$query3);
          }

  }
  else{
      echo "<head><script>alert('Programme Added Failed');</script></head></html>";
      echo "error: ".mysqli_error($link);
  }

  

?>