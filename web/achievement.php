<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中电数通</title>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/menu-css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  .pagecontrol{
    width: 300px;
    height: 50px;
    float:left;
    margin-top: 20px;
    margin-left: 100px;
  }
</style>
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
<div class="b">
  <p><img src="images/zs.jpg" /></p>
</div>
<div class="ache1">
  <span><span>
</div>
<div class="c"></div>

</div>
<!--放点货物-->
<div class="news_table">
	<?php
		// $con = mysql_connect("localhost","root","root");
		// if (!$con)
  // 			{
  // 				die('Could not connect: ' . mysql_error());
  // 			}
 
		// mysql_select_db("ts_zzyd", $con);
		// $result = mysql_query("SELECT * FROM ts_goods");
 	// 	while($row = mysql_fetch_array($result))
  // 			{
  // 				echo "<div class=goods_show>";
  // 					echo "<div class=img_show>";
  // 						echo "<a href=\"../public/product_show.php?id=$row[id]\"><img src=\"../public/upload/$row[img]\" width=\"340\"  height=\"200\"/> </a>";

  // 					echo "</div>";
  					
  // 						echo "<table width=\"300\"height=\"50\" >";
  							
  // 								echo "<tr width=\"300\" ><td align=\"center\">";
  // 									echo "产品名称：". $row['name'];
  // 								echo "</td></tr>";
  // 								// echo "<tr width=\"300\"><td align=\"center\">";
  // 								// 	echo "<p>产品价格：".$row['price']."</p>";
  // 								// echo "</td></tr>";
  							
  // 						echo "</table>";
  					
  					
  				
  					

  // 				echo "</div>";
  // 			}
  				
		// 	echo "</table>";
 
		// 	mysql_close($con);
		?>

<?php

    $conn=mysql_connect('localhost','root','root')or die('链接数据库出错'.mysql_error());//链接数据库

mysql_select_db('ts_zzyd',$conn)or die('找不到数据库'.mysql_error());//选择数据库
    $sql="select * from ts_goods order by id desc";
    $result=mysql_query($sql);
    $num=mysql_num_rows($result);                   //页总数
    $pageSize=5;                                    //页尺寸
    $pageCount=ceil($num/$pageSize);                //总页数
    $pageNo=isset($_GET['page'])?$_GET['page']:1;   //页码
    $pageNext=$pageNo+1;                            //下一页
    $pagePrev=$pageNo-1;                            //上一页
     
    //判断页码越界
    if($pageNext>$pageCount)  $pageNext=$pageCount;
    if($pagePrev<1)        $pagePrev=1;
    if($pageNo>$pageCount)    $pageNo=$pageCount;
    if($pageNo<1)              $pageNo=1;
 
    $offset=($pageNo-1)*$pageSize;                  //偏移量 
    mysql_data_seek($result, $offset);              //将结果指针移至offset处
?>
 
<style type="text/css">
    tr{background-color:#ffffff; font-size:12px;}
    td{text-align:center;height:30px;}
 
</style>

    <?php
     
    for ($i=0; $i <$pageSize ; $i++):
        $row=mysql_fetch_assoc($result);
         if ($row) :
?>


      <div class=goods_show>
           <div class=img_show>
             <a href="../public/product_show.php?id=<?php echo $row['id'];?>">
                        <img src="../public/upload/<?php echo$row['img']?>" width="340"  height="200"> </a>

           </div>
            
            <table width="300" height="50" >
                
               <tr width="400" ><td align="center">
                 产品名称：<?php echo $row['name'];?>
                  </td></tr>
                   <tr width="200"><td align="center">
                  <p>产品价格：<?php echo $row['price'];?></p>
                   </td></tr>
                
            </table>
          

         </div>
 
    <?php
        endif;
    endfor;
    ?>
    <div claa=pagecontrol>
    <table>
    <tr>
        <td colspan="3">
            共<?php echo $num ?>条
            共<?php echo $pageCount ?> 页
            每页 <?php echo $pageSize ?>条
            <a href="../web/achievement.php?page=1">首页</a>
            <a href="../web/achievement.php?page=<?php echo $pagePrev ?> ">第一页</a>
            <a href="../web/achievement.php?page=<?php echo $pageNext?>">下一页</a>
            <a href="../web/achievement.php?page=<?php echo $pageCount?>">最后一页</a>
 
        </td>
    </tr>
 
   </table>
 </div>
</div>
</div>
</div>
<?php include '../public/foot.php'?>
</body>
</html>
