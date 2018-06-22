<?php

    if(isset($_GET['download'])){

       $file = $_GET['download'];
       header ("Content-type: octet/stream");
       header ("Content-disposition: attachment; filename=".$file.";");
       header("Content-Length: ".filesize($file));
       readfile($file);
       exit; 
  }
?>


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


<h3 align=center>VIEW UPLOADED RESULTS</h3>

		<hr />

		<table align=center class="table table-bordered datatable" id="table-1" border=1>

			<thead>
				<tr>
					<th>S.No</th>
					<th>Batch</th>
					
					<th>State</th>
					<th>Semester</th>
					<th>Result</th>
					<th>Action</th>
				</tr>
			</thead>		
				<tbody>
					<?php

					include'connect.php';
					$query  = "select * from pgdaemresult";
					//echo $query;
					$result = mysqli_query($link, $query);
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					        
					        
					        
					        echo "<tr><td>" . $sno . "</td>";
					        echo "<td>" . $row['batch'] . "</td>";
					        echo "<td>" . $row['state'] . "</td>";
					        
					        echo "<td>" . $row['semester'] . "</td>";
					        echo "<td>" . $row['result'] . "</td>";
					        
					        $sno++;
					        
                            $file=$row['result'];
                            
					        echo '<td><a href="?download='.$file.'"><input type="button" class="a1-btn a1-blue" id="boxxe" style="width:100%" value="DOWNLOAD" ></a></td></tr>';
					        
							$msgid = 0;
					    }
					    
					}

					?>																
				</tbody>
		</table>

</body>
</html>
