<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="new.css">
	<title></title>


<style type="text/css">  
body{margin:auto;width:800px; border:solid 1px #000;}
</style>


</head>
<body >
<div class="">

 <?php
        $id=$_GET['id'];
       
		$con = mysql_connect("localhost","root","root");
		if (!$con)
  			{
  				die('Could not connect: ' . mysql_error());
  			}
		mysql_select_db("ts_zzyd", $con);
		$result = mysql_query("SELECT * FROM ts_goods where id=".$id."" );
	    $row = mysql_fetch_array($result);
			
 
			
         echo "<table width=\"800\" border=\"1\">
  			<tbody>
    			<tr>
      				<td width=\"333\" align=\"center\">";
      				echo "<h1>";
      				echo $row['name']. "</td>";
      				echo "</h1>";
    			echo "</tr>
   				 <tr>
      				<td align=\"center\">";echo "<a href=\"../web/index.php\"><img src=\"../public/upload/$row[img]\" width=\"340\"  height=\"200\"/> </a>";  echo " </td>
   				 </tr>";
   				echo "<tr>";
   							echo "<td align=\"center\">";
   							echo $row['contents'];
   							echo " </td>
   				 </tr>
    
  			</tbody>
			</table>";

mysql_close($con);
?>
</div>
</body>
</html>