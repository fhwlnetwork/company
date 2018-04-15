<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>


<?php

    $conn=mysql_connect('localhost','root','root')or die('链接数据库出错'.mysql_error());//链接数据库

mysql_select_db('ts_zzyd',$conn)or die('找不到数据库'.mysql_error());//选择数据库
    $sql="select * from ts_usermember order by id desc";
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
   
    
   
      <td width="200" height="40">用户名</td>
      <td width="300">密码</td>
      <td width="100">电话</td>
      <td width="200">邮箱</td>
      <td width="200">qq</td>
      
 
   
      
 
        
    </tr>

    

    <?php
     
    for ($i=0; $i <$pageSize ; $i++):
        $row=mysql_fetch_assoc($result);
         if ($row) :
?>
    
    <tr height="20">
        <td width="200" height="191"> <?php echo $row['username']?></td>
        <td width="300" height="191"><?php echo $row['password']?></td>
        <td width="100" height="20"><?php echo $row['email']?></td>
        <td width="200" height="20"><?php echo $row['tel']?></td>
        <td width="180" height="20"><?php echo $row['qq']?></td>
        <td width="90"><a href="change_uspasswdshow.php?id=<?php echo $row['id']?>">修改密码</a></td>
        
              
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

</body>
</html>