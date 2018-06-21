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
	width:250px;
}
</style>
</head>
<?php 
$id=$_GET['id'];
		$sql="Select * from oncampus o Where o.sn=$id";
		$res=mysqli_query($link, $sql);
		
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
							  
?>

<body>
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>EDIT PROGRAM</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="saveeditprogramoncampus.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
			 
 
<td height="35">PROGRAM TYPE:</td><input type="hidden" name="pass" value=<?php echo $id; ?>/>
           	   <td height="35"><input name="pname" id="boxxe" type="text" value="ONCAMPUS" size="30" readonly></td>
         	   </tr>
			   
			   <tr>
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><textarea id="" rows="5" name="pname"  style="margin: 0px; width: 249px; height: 72px; resize:none;"><?php echo $row['title'] ?></textarea></td>
             </tr>
             <tr id="durationfrom">
               <td height="35">DURATION FROM:</td>
               <td height="35"><input name="durationfm" id="boxxe" type="date" value="<?php echo $row['durationfrom'] ?>" size="30"></td>
             </tr>
             
             <tr id="durationto">
               <td height="35">DURATION TO:</td>
               <td height="35"><input name="durationto" id="boxxe" value="<?php echo $row['durationto'] ?>" type="date" size="30"></td>
             </tr>
             
             <tr id="venue">
               <td height="35">VENUE:</td>
               <td height="35"><input name="venue" id="boxxe" value="<?php echo $row['venue'] ?>" type="text" size="30"></td>
             </tr>
          
            
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="UPDATE" >
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
