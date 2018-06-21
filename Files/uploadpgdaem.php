<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PGDAEM | Upload Result</title>
    <link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
<style> #boxxe{ width:200px; }</style>
</head>
<body>
  <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>



<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:400px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>UPLOAD PGDAEM RESULT</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="savepgdaemresult.php">
         <table width="100%" border="0" align="center">
         <tr>
            <td height="35"><label for="program">Program:</label></td>
            <td height="35"><input id="boxxe" name='program' type="text" value='PGDAEM' readonly></td>
        </tr>
        <tr>
            <td height="35"><label for="batch">Batch:</label></td>
            <td height="35"><select id="boxxe" name="batch" id="batch">
                <option value="2014-15">2014-15</option>
                <option value="2015-16">2015-16</option>
                <option value="2016-17">2016-17</option>
                <option value="2017-18">2017-18</option>
                <option value="2018-19">2018-19</option>
            </select></td>
        </tr>
        <tr>
            <td height="35"><label for="state">State:</label></td>
            <td height="35"><select id="boxxe" name="state" id="state">
                <option value="assam">Assam</option>
                <option value="nagaland">Nagaland</option>
            </select></td>
        </tr>
        <tr>
            <td height="35"><label for="semester">Semester</label></td>
            <td height="35"><select id="boxxe" name="semester" id="semester">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
            </select></td>
        </tr>
        
        <tr><td height="35">FILE:</td>
		<td height="35" colspan='2'><input id="boxxe" type="file" name="file" size="50"  accept="application/PDF"/>
        </td></tr>
        
        <tr>
		<td>&ensp;</td>
            <td height="35"><input class="a1-btn a1-blue" type="submit" value="upload"></td>
        </tr>
         </table>
       </form>
    </div>
    </div>     
</body>
</html>
