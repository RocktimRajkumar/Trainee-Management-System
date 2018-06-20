<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Research | Upload Report</title>
    <link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
</head>
<body>
  <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
   <form action="saveresearchreport.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label for="program">Program:</label></td>
            <td><input name='program' type="text" value='RESEARCH' readonly></td>
        </tr>
        
        <tr><td colspan='2'><input type="file" name="file" size="50"/>
        </td></tr>
        
        <tr>
            <td><input type="submit" value="upload"></td>
        </tr>
    </table>
</form>
    
    
</body>
</html>