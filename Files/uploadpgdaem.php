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
</head>
<body>
  <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
   <form action="savepgdaemresult.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label for="program">Program:</label></td>
            <td><input name='program' type="text" value='PGDAEM' readonly></td>
        </tr>
        <tr>
            <td><label for="batch">Batch:</label></td>
            <td><select name="batch" id="batch">
                <option value="2014-15">2014-15</option>
                <option value="2015-16">2015-16</option>
                <option value="2016-17">2016-17</option>
                <option value="2017-18">2017-18</option>
                <option value="2018-19">2018-19</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="state">State:</label></td>
            <td><select name="state" id="state">
                <option value="assam">Assam</option>
                <option value="nagaland">Nagaland</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="semester">Semester</label></td>
            <td><select name="semester" id="semester">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
            </select></td>
        </tr>
        
        <tr><td colspan='2'><input type="file" name="file" size="50"  accept="application/PDF"/>
        </td></tr>
        
        <tr>
            <td><input type="submit" value="upload"></td>
        </tr>
    </table>
</form>
    
    
</body>
</html>