<?php
session_start();
 if(!isset($_SESSION["adminlogin"]))
{
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Research | Upload Report</title>
    <link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
</head>
<body bgcolor="#B8FDB5">
  <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>


<div class="a1-container a1-small a1-padding-32" style="margin-top:4%; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:400px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>UPLOAD SCHEDULE REPORT</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="scheduleupload.php"  enctype="multipart/form-data">
         <table width="100%" border="0" align="center">
         <tr>
            <td height="35"><label for="program">Program:</label></td>
            <td height="35"><select name="pro" id="">
                
                <option value="oncampus">OnCampus</option>
                <option value="offcampus">OffCampus</option>
                <option value="regional">Regional Workshop</option>
                
            </select></td>
        </tr>
        
        <tr><td height="35">FILE:</td>
		<td height="35" colspan='2'><input type="file" name="file" size="50"/>
        </td></tr>
        
        <tr>
		<td>&ensp;</td>
            <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" value="upload"></td>
        </tr>
         </table>
       </form>
    </div>
    </div>   



  
    
    
</body>
</html>