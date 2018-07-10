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

<style>
    #addRow,#bt{
        display:none;
    }
    
</style>

</head>

<body bgcolor="#B8FDB5">
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<div id="status">
    
</div>

<div class="a1-container a1-small a1-padding-32" style="margin-top:4%; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:800px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>ADD SCHEDULE</h6>
        </div>
       <form id="form1" name="form1" class="a1-container">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">PROGRAM TYPE:</td>
           	   <td height="35"><select name="select" id="select" onchange="myProgramName(this.value)">
           	   <option value="0">--Please Select--</option>
           	   <?php
			   
			  while($row = mysqli_fetch_assoc($result)) 
											{
												echo '<option value='.$row["type_id"].'>'.$row["type"].'</a></option>';
												
												
											}
											?>
                </select></td>
         	   </tr>
			   
			   <table id="programName" width="100%" border="0" align="center">
			       
			   </table>
		
			   <table id="programDay" width="100%" border="0" align="center">
			       
			   </table>
			   
           </table></td>
         </tr>
         
         <table id="crschedule">
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="button" name="submit" id="submit" value="Create Schedule" onclick="createschedule();">
             </td>
         </table>
         
         <div id="cont">
             
         </div>
         <tr>
         <td>
        <input type="button" id="addRow" value="Add New Row" onclick="addRows();"/>
             </td>
             <td><input type="button" id="bt" value="Sumbit Data" onclick="sumbit()" /></td>
       </tr>
         </table>
       </form>
    </div>
    </div>   
      
    
<script>   
    function myProgramName(str){
    if (str == "0") {
        document.getElementById("programName").innerHTML = "";
        document.getElementById("programDay").innerHTML = "";
        document.getElementById("crschedule").style.display="none";
        document.getElementById("addRow").style.display="none";
        document.getElementById("bt").style.display="none";
        document.getElementById('cont').style.display="none";
        return;
    } else { 
        document.getElementById("programDay").innerHTML = "";
        document.getElementById('cont').style.display="none";
        document.getElementById("crschedule").style.display="none";
        document.getElementById("addRow").style.display="none";
        document.getElementById("bt").style.display="none";
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("programName").innerHTML=this.responseText;
                
            }
        };
        xmlhttp.open("GET","programSchedule.php?q="+str,true);
        xmlhttp.send();
    }
    }
        
        
  function myProgramDay(str,type){
    if (str == "0") {
        document.getElementById("programDay").innerHTML = "";
        document.getElementById("crschedule").style.display="none";
        document.getElementById("addRow").style.display="none";
        document.getElementById("bt").style.display="none";
        document.getElementById('cont').style.display="none";
        return;
    } else { 
        document.getElementById('cont').style.display="none";
        document.getElementById("crschedule").style.display="none";
        document.getElementById("addRow").style.display="none";
        document.getElementById("bt").style.display="none";
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("programDay").innerHTML=this.responseText;
                
            }
        };
        xmlhttp.open("GET","programDay.php?q="+str+"&t="+type,true);
        xmlhttp.send();
    }
    }
        
  function showcreatebutton(str){
      document.getElementById("addRow").style.display="none";
      document.getElementById("bt").style.display="none";
      document.getElementById('cont').style.display="none";
      var createschedule=document.getElementById("crschedule");

      if(str=='0'){
          createschedule.style.display="none";
      }
      else{
          createschedule.style.display="table-row";
      }
      
  }
    
    // ARRAY FOR HEADER.
    var arrHead = new Array();
    arrHead = ['Action', 'Time', 'Session/Topic', 'Methods','Facilitator/Resource Person'];      // SIMPLY ADD OR REMOVE VALUES IN THE ARRAY FOR TABLE HEADERS.
    
  function createschedule(){
     // FIRST CREATE A TABLE STRUCTURE BY ADDING A FEW HEADERS AND
    // ADD THE TABLE TO YOUR WEB PAGE.
      document.getElementById("addRow").style.display="inline";
       
      document.getElementById('cont').style.display="inline";
         var div = document.getElementById('cont');
         div.innerHTML="";
        var empTable = document.createElement('table');
        empTable.setAttribute('id', 'empTable');            // SET THE TABLE ID.
        empTable.style.border="solid 2px black";
        empTable.style.borderSpacing="0px";
        empTable.style.width="726px";
        var tr = empTable.insertRow(-1);

        for (var h = 0; h < arrHead.length; h++) {
            var th = document.createElement('th'); 
            th.style.border="solid 1px black";
            // TABLE HEADER.
            th.innerHTML = arrHead[h];
            tr.appendChild(th);
        }

       
        div.appendChild(empTable);    // ADD THE TABLE TO YOUR WEB PAGE.

  }
    
 // ADD A NEW ROW TO THE TABLE.s
    function addRows() {
         document.getElementById("bt").style.display="inline";
        var empTab = document.getElementById('empTable');

        var rowCnt = empTab.rows.length;        // GET TABLE ROW COUNT.
        var tr = empTab.insertRow(rowCnt);      // TABLE ROW.
        tr = empTab.insertRow(rowCnt);

        for (var c = 0; c < arrHead.length; c++) {
            var td = document.createElement('td');          // TABLE DEFINITION.
            td = tr.insertCell(c);

            if (c == 0) {           // FIRST COLUMN.
                // ADD A BUTTON.
                var button = document.createElement('input');

                // SET INPUT ATTRIBUTE.
                button.setAttribute('type', 'button');
                button.setAttribute('value', 'Remove');

                // ADD THE BUTTON's 'onclick' EVENT.
                button.setAttribute('onclick', 'removeRow(this)');

                td.appendChild(button);
            }
            else {
                // CREATE AND ADD TEXTBOX IN EACH CELL.
                var ele = document.createElement('input');
                ele.setAttribute('type', 'text');
                ele.setAttribute('value', ' ');
                td.appendChild(ele);
            }
        }
    }
    
    
     // DELETE TABLE ROW.
    function removeRow(oButton) {
        var empTab = document.getElementById('empTable');
        empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
    }

    // EXTRACT AND SUBMIT TABLE DATA.
    function sumbit() {
        var myTab = document.getElementById('empTable');
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
        var x=document.getElementById("scheduleday");
        var i=x.selectedIndex;
        var dayvalue=x.options[i].value;
        
        var x=document.getElementById("proname");
        var i=x.selectedIndex;
        var provalue=x.options[i].value;
        
        xmlhttp.open("GET","addroutine.php?q="+JSON.stringify(values)+"&day="+dayvalue+"&prname="+provalue,true);
        xmlhttp.send();
    }
    
</script>


</body>
</html>
