
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
<title>TMS | Add Program</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
<script>
function myProgram1(){

    var x = document.getElementById("select");
    var i = x.selectedIndex;
    var oncampus=document.getElementById("oncampus");
    var offcampus=document.getElementById("offcampus");
    var research=document.getElementById("research");
    var pgdaem=document.getElementById("pgdaem");
    
    switch(x.options[i].value){
        
        case "1":oncampus.style.display="table-row";
                 offcampus.style.display="none";
                 research.style.display="none";
                 pgdaem.style.display="none";
            break;
        case "2":oncampus.style.display="none";
                 offcampus.style.display="table-row";
                 research.style.display="none";
                 pgdaem.style.display="none";
            break;
            
        case "3":
                oncampus.style.display="none";
                 offcampus.style.display="none";
                 research.style.display="table-row";
                 pgdaem.style.display="none";
            break;
        
        case "4":oncampus.style.display="none";
                 offcampus.style.display="none";
                 research.style.display="none";
                 pgdaem.style.display="table-row";
            break;
    }
}
    
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
</head>

<body>
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>


<table class="table table-bordered datatable" id="table-1" border=1 align="center" style="margin-top:10px; width:1020px">

			<th>
				<tr>
					<th>S.No</th>
					<th>PROGRAM TYPE</th>
					<th>PROGRAM NAME:</th>
					<th>DURATION FROM:</th>
					<th>DURATION TO:</th>
					<th>VENUE:</th>
					<th>Action</th>
				</tr>
			</th>		
				<tbody>
					<?php


					$query  = "select * from offcampus";
					//echo $query;
					$result = mysqli_query($link, $query);
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					        $msgid = $row['sn'];
					        
					        
					        echo "<tr><td>" . $sno . "</td>";
					        echo "<td> OFFCAMPUS </td>";
					        echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['durationfrom'] . "</td>";
							echo "<td>" . $row['durationto'] . "</td>";
							echo "<td>" . $row['venue'] . "</td>";
					        
					        $sno++;
					        
					        echo '<td><a href=editprogramdetails.php?id="'.$row['sn'].'"><input type="button" class="a1-btn a1-blue" id="boxxe" style="width:100%" value="Edit Program" ></a><form action="deleleteprogram.php" method="post" onSubmit="return ConfirmDelete();"><input type="hidden" name="name" value="' . $msgid .'"/><input type="submit" id="button1" value="Delete Program" class="a1-btn a1-orange"/></form></td></tr>';
					        
							$msgid = 0;
					    }
					    
					}

					?>																
				</tbody>
		</table>
		
		
		
		
		<table class="table table-bordered datatable" id="table-1" border=1 align="center" style="margin-top:10px; width:1020px">

		
				<tr>
					<th>S.No</th>
					<th>PROGRAM TYPE</th>
					<th>PROGRAM NAME:</th>
					<th>DURATION FROM:</th>
					<th>DURATION TO:</th>
					<th>VENUE:</th>
					<th>Action</th>
				</tr>
		
				<tbody>
					<?php


					$query  = "select * from oncampus";
					//echo $query;
					$result = mysqli_query($link, $query);
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					        $msgid = $row['sn'];
					        
					        
					        echo "<tr><td>" . $sno . "</td>";
					        echo "<td> ONCAMPUS </td>";
					        echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['durationfrom'] . "</td>";
							echo "<td>" . $row['durationto'] . "</td>";
							echo "<td>" . $row['venue'] . "</td>";
					        
					        $sno++;
					        
					        echo '<td><a href=editprogramdetails.php?id="'.$row['sn'].'"><input type="button" class="a1-btn a1-blue" id="boxxe" style="width:100%" value="Edit Program" ></a><form action="deleleteprogram.php" method="post" onSubmit="return ConfirmDelete();"><input type="hidden" name="name" value="' . $msgid .'"/><input type="submit" id="button1" value="Delete Program" class="a1-btn a1-orange"/></form></td></tr>';
					        
							$msgid = 0;
					    }
					    
					}

					?>																
				</tbody>
		</table>
		
		
		<table class="table table-bordered datatable" id="table-1" border=1 align="center" style="margin-top:10px; width:1020px">

		
				<tr>
					<th>S.No</th>
					<th>PROGRAM TYPE</th>
					<th>PROGRAM NAME:</th>
					<th>DURATION FROM:</th>
					<th>DURATION TO:</th>
					<th>VENUE:</th>
					<th>Action</th>
				</tr>
				
				<tbody>
					<?php


					$query  = "select * from regional";
					//echo $query;
					$result = mysqli_query($link, $query);
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					        $msgid = $row['sn'];
					        
					        
					        echo "<tr><td>" . $sno . "</td>";
					        echo "<td> REGIONAL WORKSHOP </td>";
					        echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['durationfrom'] . "</td>";
							echo "<td>" . $row['durationto'] . "</td>";
							echo "<td>" . $row['venue'] . "</td>";
					        
					        $sno++;
					        
					        echo '<td><a href=editprogramdetails.php?id="'.$row['sn'].'"><input type="button" class="a1-btn a1-blue" id="boxxe" style="width:100%" value="Edit Program" ></a><form action="deleleteprogram.php" method="post" onSubmit="return ConfirmDelete();"><input type="hidden" name="name" value="' . $msgid .'"/><input type="submit" id="button1" value="Delete Program" class="a1-btn a1-orange"/></form></td></tr>';
					        
							$msgid = 0;
					    }
					    
					}

					?>																
				</tbody>
		</table>







</body>
</html>
