<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xphp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中电数通</title>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/menu-css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	.message{
		margin-left:10px;
		
		float:left; 
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
<div class="b"><img src="images/ly_30.jpg" /></div>
<div class="c"></div>
</div>





<!-- 放点留言-->
<div class=message>
<?php include '../public/leave_message.php'?>
<?php

    $conn=mysql_connect('localhost','root','root')or die('链接数据库出错'.mysql_error());//链接数据库

mysql_select_db('ts_zzyd',$conn)or die('找不到数据库'.mysql_error());//选择数据库
    $sql="select * from ts_message order by id desc";
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
<table width="740" cellspacing="0" >
    <tr height="20">
   
    <!--   <td width="200" height="40">标题</td>
      <td width="300">内容</td>
      <td width="100">作者</td>
      <td width="200">时间</td> -->
      
 
        
    </tr>

    

    <?php
     
    for ($i=0; $i <$pageSize ; $i++):
        $row=mysql_fetch_assoc($result);
         if ($row) :
?>
    
    <tr height="20">
        <td width="50" height="191"> <?php  echo "<a href=\"../public/news_show.php?id=$row[id]\">"; echo $row['username']; echo "</a></td>";?>
        <td width="450" height="191"><?php echo $row['content']?></td>
        <td width="50" height="20"><?php echo $row['tel']?></td>
        <td width="250" height="20"><?php echo $row['time']?></td>
        
              
</td>
    </tr>
 
    <?php
        endif;
    endfor;
    ?>
    <tr>
        <td colspan="3">
            共<?php echo $num ?>条
            共<?php echo $pageCount ?> 页
            每页 <?php echo $pageSize ?>条
            <a href="../web/leave.php?page=1">首页</a>
            <a href="../web/leave.php?page=<?php echo $pagePrev ?> ">第一页</a>
            <a href="../web/leave.php?page=<?php echo $pageNext?>">下一页</a>
            <a href="../web/leave.php?page=<?php echo $pageCount?>">最后一页</a>
 
        </td>
    </tr>
 
</table>


</div>
</div>
</div>

<?php include '../public/foot.php'?>
</body>
</html>
