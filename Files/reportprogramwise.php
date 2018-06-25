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
#programtype,#print,#proPGDAEM{
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
                echo '<option value="PGDAEM">PGDAEM</option>';
                </select></td>
             </tr>
			 
			
             
             
</table>

<table align=center id="proPGDAEM">
    <tr>
        <td><label for="batch">BATCH:</label></td>
        <td><select name="batch" id="batch">
            <option value="2014-15">2014-15</option>
                <option value="2015-16">2015-16</option>
                <option value="2016-17">2016-17</option>
                <option value="2017-18">2017-18</option>
                <option value="2018-19" selected>2018-19</option>
        </select></td>
    </tr>
    <tr>
               <td height="35">STATE:</td>
               <td height="35"><select id="state" name="state" id="state">
                <option value="assam">Assam</option>
                <option value="nagaland">Nagaland</option>
            </select></td>
             </tr>
             
             <tr>
               <td height="35">SEMESTER:</td>
               <td height="35"><select name="semester" id="sem">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
            </select></td>
             </tr>
    <tr>
        <td colspan="2"><input type="button"  value="Search" class="a1-btn a1-blue" onclick="searchpgdaem();"></td>
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

    function searchpgdaem(){
        
        var batch=document.getElementById("batch");
        var batchi=batch.selectedIndex;
        var batval=batch.options[batchi].value;
        
        var state=document.getElementById("state");
        var statei=state.selectedIndex;
        var stateval=state.options[statei].value;
        
        var sem=document.getElementById("sem");
        var semi=sem.selectedIndex;
        var semval=sem.options[semi].value;
        
        var trainee=document.getElementById('programtype');
		trainee.style.display="table";
        
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("programtype").innerHTML=this.responseText;
                
            }
        };
        xmlhttp.open("GET","pgdaemtraineedetail.php?batch="+batval+"&state="+stateval+"&sem="+semval,true);
        xmlhttp.send();
        
    }
    
	 function myProgramName(str){
          document.getElementById("print").style.display="none";
    if (str == "0") {
        document.getElementById("programName").innerHTML = "";
        document.getElementById("programtype").innerHTML = "";
		var trainee=document.getElementById('programtype');
		trainee.style.display="none";
        document.getElementById("proPGDAEM").style.display="none";      
        return;
    }else if(str=="PGDAEM"){
        document.getElementById("programName").innerHTML = "";
        document.getElementById("programtype").innerHTML = "";
		var trainee=document.getElementById('programtype');
		trainee.style.display="none";
      document.getElementById("proPGDAEM").style.display="table";  
    } 
         
        else { 
            document.getElementById("proPGDAEM").style.display="none";
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
        
    if (str == "0") {
        document.getElementById("programtype").innerHTML = "";
        document.getElementById('print').style.display="none";
        return;
    } else { 
        document.getElementById('print').style.display="block";
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
