<!doctype html>

<?php
 include "connect.php";
 $sql = ("select * from programme");
session_start();
$result = mysqli_query($link,$sql);
 if(!isset($_SESSION["adminlogin"]))
{
	header("location:index.php");
}
 ?>

<html>
<head>
<meta charset="utf-8">
<title>TMS | Add Program</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
</head>

<body>
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>

<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>ADD SCHEDULE</h6>
        </div>
       <form id="form1" name="form1" class="a1-container">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">PROGRAM TYPE:</td>
           	   <td height="35"><select name="select" id="select" onchange="myProgramName(this.value)">
           	   <option value="0">--Please Select--</option>
           	   <?php
			   
			  while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["type_id"].'>'.$row["type"].'</a></option>';
												
												
											}
											?>
                </select></td>
         	   </tr>
			   
			   <table id="programName" width="100%" border="0" align="center">
			       
			   </table>
		
			   <table id="programDay" width="100%" border="0" align="center">
			       
			   </table>
			   
           </table></td>
         </tr>
         
         <table id="crschedule">
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="button" name="submit" id="submit" value="Create Schedule" >
             </td>
         </table>
         </table>
       </form>
    </div>
    </div>   


    <script>   
    function myProgramName(str){
    if (str == "0") {
        document.getElementById("programName").innerHTML = "";
        document.getElementById("programDay").innerHTML = "";
        document.getElementById("crschedule").style.display="none";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("programName").innerHTML=this.responseText;
                
            }
        };
        xmlhttp.open("GET","programSchedule.php?q="+str,true);
        xmlhttp.send();
    }
    }
        
        
  function myProgramDay(str,type){
    if (str == "0") {
        document.getElementById("programDay").innerHTML = "";
        document.getElementById("crschedule").style.display="none";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("programDay").innerHTML=this.responseText;
                
            }
        };
        xmlhttp.open("GET","programDay.php?q="+str+"&t="+type,true);
        xmlhttp.send();
    }
    }
        
  function showcreatebutton(str){
      var createschedule=document.getElementById("crschedule");

      if(str=='0'){
          createschedule.style.display="none";
      }
      else{
          createschedule.style.display="table-row";
      }
      
  }
    
</script>


</body>
</html>