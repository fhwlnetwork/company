<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="new.css">
	<title>新闻</title>


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
		$result = mysql_query("SELECT * FROM ts_news where id=".$id."" );
	    $row = mysql_fetch_array($result);
			
 
			
         echo "<table width=\"800\" border=\"1\">
  			<tbody>
    			<tr>
      				<td width=\"333\" align=\"center\">";
      				echo "<h1>";
      				echo $row['title']. "</td>";
      				echo "</h1>";
    			echo "</tr>
   				 <tr>
      				<td align=\"right\">";echo $row['author'];
      				echo "&nbsp;"; echo $row['time']; echo " </td>
   				 </tr>";
   				echo "<tr>";
   							echo "<td align=\"center\">";
   							echo $row['content'];
   							echo " </td>
   				 </tr>
    
  			</tbody>
			</table>";

mysql_close($con);
?>
</div>
</body>
</html>