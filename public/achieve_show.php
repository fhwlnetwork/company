
<!DOCTYPE html>
<html>
<head>
<link href="style/menu-css.css" rel="stylesheet" type="text/css" />
</head>
<body>

</body>
</html>
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

   <div class="menu">    

    <?php
     
    for ($i=0; $i <$pageSize ; $i++):
        $row=mysql_fetch_assoc($result);
         if ($row) :
?>
    



    <li><a href="href="../public/product_show.php?id=<?php echo $row['id'];?>"></a>
		<ul>
			<li><a href="../public/product_show.php?id=<?php echo $row['id'];?>"><?php echo $row['name']?></a></li>
			
			
		</ul>				
	</li>
        
              
</td>
    </tr>
 
    <?php
        endif;
    endfor;
    ?>
  
 

    
 
</table>

</div>
