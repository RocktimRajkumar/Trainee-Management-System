
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
<script>
function myProgram1(){

    var x = document.getElementById("select");
    var i = x.selectedIndex;
    var oncampus=document.getElementById("oncampus");
    var offcampus=document.getElementById("offcampus");
    var research=document.getElementById("research");
    var pgdaem=document.getElementById("pgdaem");
    
    switch(x.options[i].value){
        
        case "1":oncampus.style.display="table-row";
                 offcampus.style.display="none";
                 research.style.display="none";
                 pgdaem.style.display="none";
            break;
        case "2":oncampus.style.display="none";
                 offcampus.style.display="table-row";
                 research.style.display="none";
                 pgdaem.style.display="none";
            break;
            
        case "3":
                oncampus.style.display="none";
                 offcampus.style.display="none";
                 research.style.display="table-row";
                 pgdaem.style.display="none";
            break;
        
        case "4":oncampus.style.display="none";
                 offcampus.style.display="none";
                 research.style.display="none";
                 pgdaem.style.display="table-row";
            break;
    }
}
    
    function myProgramType(str,type){
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
        xmlhttp.open("GET","programdetail.php?q="+str+"&t="+type,true);
        xmlhttp.send();
    }
    }
</script>
</head>

<body>
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>EDIT</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="saveprogram.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr id="protype">
               <td height="35">PROGRAM TYPE:</td>
               <td height="35"><select name="protype" id="select" onchange="myProgram1()"><?php
			   
			  while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["type_id"].'>'.$row["type"].'</a></option>';
												
												
											}
											?>
                </select></td>
             </tr>
               
               <tr id="oncampus">
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><select name="pnameOn" id="select" onchange="myProgramType(this.value,1)">
               <option value="0">--Please select--</option>
                      <?php 
							$sql = ("select * from oncampus");
                        $result = mysqli_query($link,$sql);
                        while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["sn"].'>'.$row["title"].'</option>';
												
												
											}
											?></select>

			   </td>
             </tr>
             
             
             <tr id="offcampus">
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><select name="pnameOff" id="select" onchange="myProgramType(this.value,2)">
                       <option value="0">--Please select--</option>
                       <?php 
							$sql = ("select * from offcampus");
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["sn"].'>'.$row["title"].'</option>';
												
												
											}
											?></select>

			   </td>
             </tr>
             
             
             <tr id="research">
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><select name="pnameRe" id="select" onchange="myProgramType(this.value,3)">
               <option value="0">--Please select--</option>
                    <?php 
							$sql = ("select * from researchstudy");
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["sn"].'>'.$row["title"].'</option>';
												
												
											}
											?></select>

			   </td>
             </tr>
             
             
             <tr id="pgdaem">
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><select name="pnamePg" id="select" onchange="myProgramType(this.value,4)">
               <option value="0">--Please select--</option>
                   <?php 
							$sql = ("select * from pgdaem");
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["sn"].'>'.$row["title"].'</option>';
												
												
											}
											?></select>

			   </td>
             </tr>
               
             <table id="programtype" width="100%" border="0" align="center">

             
             </table>
            
            
             
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Register" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
</body>
</html>
