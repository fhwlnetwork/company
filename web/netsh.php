<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xphp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中电数通</title>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/menu-css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include '../public/top.php'?>
<div class="nav">
<?php include '../public/leader.php' ?>
</div>
<?php include '../public/lunbo.php'?>
      
       </div>
</div>
</div>
<div class="main">
<div class="main_1">
<div class="left">
<div class="left_1">
<div class="left_title"><img src="images/zs.jpg" /></div>
<div class="left_list">

<script type="text/javascript" src="js/menu_min.js"></script>

<script type="text/javascript">
$(document).ready(function (){ 
  
  $(".menu ul li").menu();
  
}); 
</script> 

<?php include '../public/achieve_show.php' ?>


</div>
</div>

<?php include '../public/connect.php'?>
<div class="a">
<div class="b"><img src="images/w_30.jpg" /></div>
<div class="c"></div>
</div>
<?php
		$con = mysql_connect("localhost","root","root");
		if (!$con)
  			{
  				die('Could not connect: ' . mysql_error());
  			}
 
		mysql_select_db("ts_zzyd", $con);
		$result = mysql_query("SELECT * FROM ts_goods");
 		while($row = mysql_fetch_array($result))
  			{
  				echo "<div class=goods_show>";
  					echo "<div class=img_show>";
  						echo "<a href=\"product_show.php?id=$row[id]\"><img src=\"../public/upload/$row[img]\" width=\"340\"  height=\"200\"/> </a>";

  					echo "</div>";
  					
  						echo "<table width=\"300\"height=\"50\" >";
  							
  								echo "<tr width=\"300\" ><td align=\"center\">";
  									echo "产品名称：". $row['name'];
  								echo "</td></tr>";
  								echo "<tr width=\"300\"><td align=\"center\">";
  									echo "<p>产品价格：".$row['price']."</p>";
  								echo "</td></tr>";
  							
  						echo "</table>";
  					
  					
  				
  					

  				echo "</div>";
  			}
  				
			echo "</table>";
 
			mysql_close($con);
		?>

</div>
</div>

<?php include '../public/foot.php'?>
</body>
</html>
