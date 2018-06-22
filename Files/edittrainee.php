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
<title>TMS | Edit Trainee</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
</head>

<body>

<?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>EDIT TRAINEE</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="updatetrainee.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
              <?php 
			  $id= $_POST['name'];
			  $table=$_POST['tb'];
			  $snt=$_POST['sn'];
			 // echo $id.$table.$snt ;
			  $query="select * from trainee t INNER JOIN address a ON t.tid= a.tid
				    INNER JOIN $table abc ON abc.type_id=t.type_id where  t.tid=$id and abc.sn=$snt"; 
		
			  
			  $res=mysqli_query($link, $query);
		
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
			  ?>
               <tr>
           	   <td height="35">TRAINEE ID:</td>
           	   <td height="35"><input name="traineeID" type="text" id="one" size="45" value="<?php echo $row['tid'] ?>" readonly></td>
         	   </tr>
             <tr>
               
           	 <tr>
           	   <td height="35">FULL NAME:</td>
           	   <td height="35"><input name="fname" type="text" id="one" value="<?php echo $row['tname'] ?>" size="45"></td>
         	   </tr>
             <tr>
               <td height="35">DESIGNATION:</td>
               <td height="35"><input name="designation" type="text" id="three" value="<?php echo $row['degisnation'] ?>" size="45"></td>
             </tr>
			 <tr>
               <td height="35">DATE OF REPORTING:</td>
               <td height="35"><input name="dor" type="text" id="three" readonly value="<?php echo $row['DOR'] ?>" size="45"></td>
             </tr>
             
			 <tr>
               <td height="35">ADDRESS:</td>
               <td height="35"><input name="add" value="<?php echo $row['streetname'] ?>" type="text" size="45"></td>
             </tr>
			 
             <tr>
               <td height="35">CITY</td>
               <td height="35"><input name="city" value="<?php echo $row['city'] ?>" type="text" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">STATE:</td>
               <td height="35"><input name="state" value="<?php echo $row['state'] ?>" type="text" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">PIN:</td>
               <td height="35"><input name="pin" type="text" value="<?php echo $row['pin'] ?>"  size="45"></td>
               
             </tr>
             
             <tr>
               <td height="35">PHONE NO:</td>
               <td height="35"><input name="pno" type="text" value="<?php echo $row['phn'] ?>" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">Email:</td>
               <td height="35"><input name="email" value="<?php echo $row['email'] ?>" type="email" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">Qualification:</td>
               <td height="35"><input name="qualification" value="<?php echo $row['qualification'] ?>" type="text" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">Discipline:</td>
               <td height="35"><input name="discipline" value="<?php echo $row['discipline'] ?>" type="text" size="45"></td>
             </tr>

			   <tr id="protype">
               <td height="35">PROGRAM TYPE:</td>
               <td height="35"><input name="ptype" readonly value="<?php echo $table ?>" type="text" size="45"></td>
             </tr>
			 
			 <tr id="ptype">
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><input name="pname" readonly value="<?php echo $row['title'] ?>" type="text" size="45">

			   </td>
             </tr>
             
             
             
             
            
             
             
             
            <table>
              
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="UPDATE" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
               </table></table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
    
<script>   
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

</body>
</html>
