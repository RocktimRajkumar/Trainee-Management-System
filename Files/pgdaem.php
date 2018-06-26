 <?php
session_start();
if(!isset($_SESSION["adminlogin"]))
{
	header("location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PGDAEM | Add Trainee</title>
    <link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
<style> #boxxe{ width:230px; }</style>
</head>
<body bgcolor="#B8FDB5">
  <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
   
   
   <div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>ADD TRAINEE</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="savepgdaem.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">PROGRAM </td>
           	   <td height="35"><input id="boxxe" name='program' type="text" value='PGDAEM' readonly></td>
         	   </tr>
			   
			   <tr>
               <td height="35">BATCH:</td>
               <td height="35"><select id="boxxe" name="batch" id="batch">
                <option value="2014-15">2014-15</option>
                <option value="2015-16">2015-16</option>
                <option value="2016-17">2016-17</option>
                <option value="2017-18">2017-18</option>
                <option value="2018-19" selected>2018-19</option>
            </select></td>
             </tr>
             <tr>
               <td height="35">STATE:</td>
               <td height="35"><select id="boxxe" name="state" id="state">
                <option value="assam">Assam</option>
                <option value="nagaland">Nagaland</option>
            </select></td>
             </tr>
             
             <tr>
               <td height="35">SEMESTER:</td>
               <td height="35"><select name="semester" id="boxxe">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
            </select></td>
             </tr>
             
             <tr>
               <td height="35">CANDIDATE NAME:</td>
               <td height="35"><input id="boxxe" name='canname' type="text"></td>
             </tr>
           <tr>
               <td height="35">CANDIDATE ID:</td>
               <td height="35"><input type="text" name="id" id="boxxe" readonly value='<?php echo time(); ?>'></td>
             </tr>
			 <tr>
               <td height="35">DESIGNATION:</td>
               <td height="35"><input id="boxxe" type="text" name="designation" id="designation"></td>
             </tr>
			 <tr>
            <td height="35">ADDRESS:</td>
            <td height="35"><input id="boxxe" name='address' type="text" id="address"></td>
			</tr>
            <tr>
            <td height="35">PHONE NO:</td>
            <td height="35"><input id="boxxe" type="text" name="phoneno"></td>
			</tr>
			<tr>
            <td height="35"><label for="email">Email:</label></td>
            <td height="35"><input id="boxxe" type="email" name="email" ></td>
        </tr>
        <tr>
            <td height="35"><label for="qualificationi">Qualification:</label></td>
            <td height="35"><input type="text" id="boxxe" name="qualification" id="qualification"></td>
        </tr>
        <tr>
            <td height="35"><label for="discipline">Discipline:</label></td>
            <td height="35"><input type="text" name="discipline" id="boxxe"></td>
        </tr>
        <tr>
            <td height="35"><label for="lenofservice">Length Of Service:</label></td>
            <td height="35"><input type="text" name="lenofservice" id="boxxe"></td>
        </tr>
			
			
			
             <tr>
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
