<!doctype html>

<?php
 include "connect.php";
 $sql = ("select * from programme");

$result = mysqli_query($link,$sql);
session_start();
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
<style>
#boxxe{
	width:180px;
}
#programtype{
	display:none;
}
</style>
</head>
<?php 

		
							  
?>

<body>
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>

<table align=center>

<tr id="protype">
               <td height="35">PROGRAM TYPE:</td>
               <td height="35"><select name="protype" id="select" onchange="myProgramName(this.value)"><?php
			   echo '<option value="0">--Please Select--</option>';
			  while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["type_id"].'>'.$row["type"].'</a></option>';
												
												
											}
											?>
                </select></td>
             </tr>
			 
			
             
             
</table>

<table id="programName" align=center>
</table>


<table id="programtype" border=1 class=""  align="center" style="margin-top:10px; width:1000px">


		
				
		</table>
		
</body>
</html>
<script> 

	 function myProgramName(str){
    if (str == "0") {
        document.getElementById("programName").innerHTML = "";
        document.getElementById("programtype").innerHTML = "";
		var trainee=document.getElementById('programtype');
		trainee.style.display="none";
        return;
    } else { 
	var trainee=document.getElementById('programtype');
		trainee.style.display="none";
        document.getElementById("programtype").innerHTML = "";
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("programName").innerHTML=this.responseText;
                
            }
        };
        xmlhttp.open("GET","myprogramName.php?q="+str,true);
        xmlhttp.send();
    }
    }
       

  
    function myProgramType(str,type){
		var trainee=document.getElementById('programtype');
		trainee.style.display="block";
    if (str == "0") {
        document.getElementById("programtype").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("programtype").innerHTML=this.responseText;
                
            }
        };
        xmlhttp.open("GET","traineedetail.php?q="+str+"&t="+type,true);
        xmlhttp.send();
    }
    }
    
</script>
