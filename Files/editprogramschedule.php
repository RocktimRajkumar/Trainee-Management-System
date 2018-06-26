<?php

$sn=$_GET['id'];
$scheID=$_GET['schid'];
$t=$_GET['ptype'];
include "connect.php";
session_start();
 if(!isset($_SESSION["adminlogin"]))
{
	header("location:index.php");
}
if($t==1){
    $sql="SELECT * FROM oncampus where scheduleID=".$scheID;   
}
else if($t==2){
    $sql="SELECT * FROM offcampus where scheduleID=".$scheID;
}
else if($t==3){
    $sql="SELECT * FROM regional where scheduleID=".$scheID;
}



$result=mysqli_query($link,$sql);

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
    var value=x.options[i].value;
    var sched=document.getElementById("sched").value;

     if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("viewSchedule").innerHTML=this.responseText;
                
            }
        };
       
        
        xmlhttp.open("GET","scheduleEditView.php?q="+value+"&sid="+sched,true);
        xmlhttp.send();
    
}
    
</script>

<style>

    #table-2, #table-3{
        display:none;
    }    
</style>

</head>

<body bgcolor="#B8FDB5">
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<div id="status">
    
</div>
<table align="center">
 <tr>
           	   <td height="35">SCHEDULE DAY:</td>
           	   <td height="35"><select  name="select" id="select">

               <?php
                   while($row=mysqli_fetch_assoc($result)){
    
                    $d1=$row['durationfrom'];
                    $d2=$row['durationto'];


                    $daysLeft = abs(strtotime($d2) - strtotime($d1));
                    $days = $daysLeft/(60 * 60 * 24);
                    $days+=1;
                    for($i=1;$i<=$days;$i++)
                            echo '<option value='.$i.'>'.$i.'</option>';
    
    
                    }
                   ?>
                                   
                   <input type="hidden" value='<?php echo $scheID?>' id="sched">
            
										
                </select>&ensp;<input type="button" href="scheduleEditView.php" target="ouriframe" class="a1-btn a1-blue"  name="search" onclick="myProgram1();"  id="search" value="SEARCH"></td>
         </tr>
    </table>
    
    <form action="">
    <table id="viewSchedule" border="1" cellspacing="0" align=center>
        
        
    </table>
    </form>
    
    <script>
         // Update Schedule
    function sumbit() {
        var myTab = document.getElementById('viewSchedule');
        var values = new Array();
        
        // LOOP THROUGH EACH ROW OF THE TABLE.
        for (row = 1; row < myTab.rows.length - 1; row++) {
            for (c = 0; c < myTab.rows[row].cells.length; c++) {   // EACH CELL IN A ROW.

                var element = myTab.rows.item(row).cells[c];
                if (element.childNodes[0].getAttribute('type') == 'text') {
                    values.push(element.childNodes[0].value);
                }
                
            }
        }
        console.log(values);
        
         if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("status").innerHTML=this.responseText;
                
            }
        };
        var x=document.getElementById("select");
        var i=x.selectedIndex;
        var dayvalue=x.options[i].value;
        
        var provalue=document.getElementById("sched").value;

        xmlhttp.open("GET","updateSchedule.php?q="+JSON.stringify(values)+"&day="+dayvalue+"&prname="+provalue,true);
        xmlhttp.send();
    }
    
        
     //Delete Schedule
    function delsche() {
         if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("status").innerHTML=this.responseText;
                
            }
        };
        var x=document.getElementById("select");
        var i=x.selectedIndex;
        var dayvalue=x.options[i].value;
        
        var provalue=document.getElementById("sched").value;

        xmlhttp.open("GET","deleteSchedule.php?day="+dayvalue+"&prname="+provalue,true);
        xmlhttp.send();
    }
        
</script>


</body>
</html>
