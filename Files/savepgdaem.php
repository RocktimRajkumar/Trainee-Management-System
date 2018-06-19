<?php
require 'connect.php';



    $batch = $_POST['batch'];
    $state = $_POST['state'];
    $canname = $_POST['canname'];
    $canid=$_POST['id'];
    $designation = $_POST['designation'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $qualification = $_POST['qualification'];
    $discipline = $_POST['discipline'];
    $lenofservice = $_POST['lenofservice'];
    $semester=$_POST['semester'];


   //Inserting data into plan table
    $query="insert into pgdaem(batch,state,semester,canname,designation,address,phoneno,email,qualification,discipline,lenofservice,canId) values('$batch','$state','$semester','$canname','$designation','$address',$phoneno,'$email','$qualification','$discipline','$lenofservice','$canid')";
   
   

	 if(mysqli_query($link,$query)==1){
        
        echo "<head><script>alert('PGDAEM CANDIDATE ADDED ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=pgdaem.php'>";
       
      }

    else{
        echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
        echo "error".mysqli_error($link);
      }

?>
