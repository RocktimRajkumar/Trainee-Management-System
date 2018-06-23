<!doctype html>

<?php
 include "connect.php";

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
</style>
</head>
<?php 

		
							  
?>

<body onload="loadtrainee('2018-2019');">
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>

<label for="select">Year :</label>
<select id="select" onchange="loadtrainee(this.value)">
    <option value="2014-15">2014-15</option>
    <option value="2015-16">2015-16</option>
    <option value="2016-17">2016-17</option>
    <option value="2017-18">2017-18</option>
    <option value="2018-19" selected>2018-19</option>
    
</select>

<br>
<input align="center" style="margin-left:auto; margin-right:auto" type="button" class="a1-btn a1-blue" value="PRINT" id="print" onclick="myFunction()"/>
<div id=printreport>

<table id="traineeName" border=1 class=""  align="center" style="margin-top:10px; width:1000px">


		
				
		</table></div>
		
</body>
</html>
<script> 
    
    function loadtrainee(str){
        var print=document.getElementById("print");
        var trainee=document.getElementById("traineeName");
        
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("traineeName").innerHTML=this.responseText;
                
            }
        };
        xmlhttp.open("GET","yearwisetrainee.php?q="+str,true);
        xmlhttp.send();
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
