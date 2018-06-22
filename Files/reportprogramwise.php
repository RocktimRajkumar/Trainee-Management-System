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
#programtype,#print{
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

<input align="center" style="margin-left:auto; margin-right:auto" type="button" class="a1-btn a1-blue" value="PRINT" id="print" onclick="myFunction()"/>
<div id=printreport>

<table id="programtype" border=1 class=""  align="center" style="margin-top:10px; width:1000px">


		
				
		</table></div>
		
</body>
</html>
<script> 

	 function myProgramName(str){
    if (str == "0") {
        document.getElementById("programName").innerHTML = "";
        document.getElementById("programtype").innerHTML = "";
		var trainee=document.getElementById('programtype');
		trainee.style.display="none";
        document.getElementById("print").display="none";
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
		trainee.style.display="table";
        document.getElementById('print').style.display="block";
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
        xmlhttp.open("GET","reporttraineedetail.php?q="+str+"&t="+type,true);
        xmlhttp.send();
    }
    }
    
	
	function myFunction()
	{
		var prt=document.getElementById("printreport");
		var WinPrint=window.open('','','left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prt.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		setPageHeight("297mm");
		setPageWidth("210mm");
		setHtmlZoom(100);
		//window.location.replace("index.php?query=");
	}
</script>
