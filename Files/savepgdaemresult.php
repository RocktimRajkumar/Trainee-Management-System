<?php
require 'connect.php';



    $batch = $_POST['batch'];
    $state = $_POST['state'];
    $semester=$_POST['semester'];

    $targetfolder = "./pgdaemresult/";

    $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

    {

    echo "The file ". $targetfolder. " is uploaded";

   

   //Inserting data into pgdaemresult table
    $query="insert into pgdaemresult(batch,state,semester,result) values('$batch','$state','$semester','$targetfolder')";
   
   

	 if(mysqli_query($link,$query)==1){
        
        echo "<head><script>alert('Result Uploaded ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=uploadpgdaem.php'>";
       
      }

    else{
        echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
        echo "error".mysqli_error($link);
      }
    }

else {

echo "Problem uploading file";

}

?>
