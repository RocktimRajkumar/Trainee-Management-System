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
<title>TMS | View Trainee</title>
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

<body>
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div><br><br>


<input align="center" style="margin-left:645px; margin-right:auto" type="button" class="a1-btn a1-blue" value="PRINT" id="print" onclick="myFunction()"/><br><br>
 <div id=printreport>
 <table width="50%" border="1" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
              <?php 
			  
			  $id= $_GET['tid'];
			  $sn=$_GET['sn'];
			  $tname=$_GET['tname'];
			  

			  $query="select * from trainee t INNER JOIN address a ON t.tid= a.tid INNER JOIN $tname abc ON abc.type_id=t.type_id where  t.tid=$id and abc.sn=$sn"; 

		
			  
			  $res=mysqli_query($link, $query);
		
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
			  ?>
			  <tr><td colspan=2><h4 align="center" >Detail of <?php echo $row['tname']?></h4></td></tr>
               <tr>
           	   <td height="35">TRAINEE ID:</td>
           	   <td height="35"><input name="traineeID" type="text" id="one" size="45" value="<?php echo $row['tid'] ?>" readonly></td>
         	   </tr>
             <tr>
               
           	 <tr>
           	   <td height="35">FULL NAME:</td>
           	   <td height="35"><input name="fname" type="text" id="one" readonly value="<?php echo $row['tname'] ?>" size="45"></td>
         	   </tr>
             <tr>
               <td height="35">DESIGNATION:</td>
               <td height="35"><input name="designation" type="text" id="three" readonly value="<?php echo $row['degisnation'] ?>" size="45"></td>
             </tr>
			 <tr>
               <td height="35">DATE OF REPORTING:</td>
               <td height="35"><input name="dor" type="text" id="three" readonly value="<?php echo $row['DOR'] ?>" size="45"></td>
             </tr>
             
			 <tr>
               <td height="35">ADDRESS:</td>
               <td height="35"><input name="add" readonly value="<?php echo $row['streetname'] ?>" type="text" size="45"></td>
             </tr>
			 
             <tr>
               <td height="35">CITY</td>
               <td height="35"><input name="city" readonly value="<?php echo $row['city'] ?>" type="text" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">STATE:</td>
               <td height="35"><input name="state" readonly value="<?php echo $row['state'] ?>" type="text" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">PIN:</td>
               <td height="35"><input name="pin" type="text" readonly value="<?php echo $row['pin'] ?>"  size="45"></td>
               
             </tr>
             
             <tr>
               <td height="35">PHONE NO:</td>
               <td height="35"><input name="pno" type="text" readonly value="<?php echo $row['phn'] ?>" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">Email:</td>
               <td height="35"><input name="email" readonly value="<?php echo $row['email'] ?>" type="email" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">Qualification:</td>
               <td height="35"><input name="qualification" readonly value="<?php echo $row['qualification'] ?>" type="text" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">Discipline:</td>
               <td height="35"><input name="discipline" readonly value="<?php echo $row['discipline'] ?>" type="text" size="45"></td>
             </tr>
				<tr><td colspan=2><h5 align="center" >Program enrolled in:</h5></td></tr>
			   <tr id="protype">
               <td height="35">PROGRAM TYPE:</td>
               <td height="35"><input name="ptype" readonly value="<?php echo "oncampus" ?>" type="text" size="45"></td>
             </tr>
			 
			 <tr id="ptype">
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><input name="pname" readonly value="<?php echo $row['title'] ?>" type="text" size="45">

			   </td>
             </tr>
			  <tr id="ptype">
               <td height="35">VENUE:</td>
               <td height="35"><input name="pname" readonly value="<?php echo $row['venue'] ?>" type="text" size="45">

			   </td>
             </tr>
             
             
             
             
             
            
             
             
             
               </table></td></tr></table></div>







		
</body>
</html>
<script> 
    
    function searchtrainee(str){
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
        xmlhttp.open("GET","traineewise.php?q="+str,true);
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
