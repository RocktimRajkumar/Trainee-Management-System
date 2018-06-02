<!doctype html>

<?php
 include "connect.php";
 $sql = ("select * from programme");
$result = mysqli_query($link,$sql);
 
 ?>

<html>
<head>
<meta charset="utf-8">
<title>TMS | Add Program</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
</head>

<body>
<div class="a1-container a1-black">
	<div class="a1-bar a1-black" style="width:800px; margin:0 auto;">
   	  <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="index.php">Home</a></div>
      <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="addprogram.php">Add Program</a></div> 
      <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="addtrainee.php">Add Trainee</a></div>  
	   <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="manageschedule.php">Manage Schedule</a></div>  	  
          <div class="a1-bar-item a1-hover-blue"><a style="text-decoration:none;" href="logout.php">Logout</a></div>  
    </div>
</div>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>ADD PROGRAM</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="savetrainee.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">PROGRAM TYPE:</td>
           	   <td height="35"><select name="select" id="select" onchange="myFunction()"><?php
			   
			  while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["type_id"].'>'.$row["type"].'</a></option>';
												
												
											}
											?>
                </select></td>
         	   </tr>
			   
			   <tr>
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><input name="venue" type="text" id="two" size="30"></td>
             </tr>
             <tr id="durationfrom">
               <td height="35">DURATION FROM:</td>
               <td height="35"><input name="duration" type="date" id="three" size="30"></td>
             </tr>
             
             <tr id="durationto">
               <td height="35">DURATION TO:</td>
               <td height="35"><input name="duration" type="date" id="three" size="30"></td>
             </tr>
             
             <tr id="venue">
               <td height="35">VENUE:</td>
               <td height="35"><input name="venue" type="text" id="two" size="30"></td>
             </tr>
             
            <tr id="conduct_by">
               <td height="35">Conduct By: </td>
               <td height="35"><input name="conduct" type="text" id="two" size="30"></td>
             </tr>
             
             <tr id="issue_by">
               <td height="35">Issue By: </td>
               <td height="35"><input name="issue" type="text" id="two" size="30"></td>
             </tr>
            
            
             
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