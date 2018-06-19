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
<title>TMS | Add Trainee</title>
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
        	<h6>ADD TRAINEE</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="savetrainee.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
              
               <tr>
           	   <td height="35">TRAINEE ID:</td>
           	   <td height="35"><input name="traineeID" type="text" id="one" size="45" value="<?php echo time(); ?>" readonly></td>
         	   </tr>
             <tr>
               
           	 <tr>
           	   <td height="35">FULL NAME:</td>
           	   <td height="35"><input name="fname" type="text" id="one" size="45"></td>
         	   </tr>
             <tr>
               <td height="35">DESIGNATION:</td>
               <td height="35"><input name="designation" type="text" id="three" size="45"></td>
             </tr>
             <tr>
               <td height="35">ADDRESS</td>
               <td height="35"><input name="address" type="text" id="two" size="45"></td>
             </tr>
             <tr>
               <td height="35">CITY</td>
               <td height="35"><input name="city" type="text" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">STATE:</td>
               <td height="35"><input name="state" type="text" size="45"></td>
             </tr>
             
             <tr>
               <td height="35">PIN:</td>
               <td height="35"><input name="pin" type="text"  size="45"></td>
               
             </tr>
             
             <tr>
               <td height="35">PHONE NO:</td>
               <td height="35"><input name="pno" type="text" size="45"></td>
             </tr>

			   <tr id="protype">
               <td height="35">PROGRAM TYPE:</td>
               <td height="35"><select name="protype" id="select" onchange="myProgram()"><?php
			   
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
             
             
             <tr id="regional">
               <td height="35">PROGRAM NAME:</td>
               <td height="35"><select name="pnameRegional" id="select" onchange="myProgramType(this.value,3)">
                       <option value="0">--Please select--</option>
                       <?php 
							$sql = ("select * from regional");
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
             
            <table>
              <tr id="dor">
			  
               <td height="35">DATE OF REPORTING:</td>
               <td height="35"><input name="dor" type="date" size="45" required></td>
             </tr>
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Register" >
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
