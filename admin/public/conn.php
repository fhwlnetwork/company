<?php

$conn=mysql_connect('localhost','root','root')or die('链接数据库出错'.mysql_error());//链接数据库

mysql_select_db('ts_zzyd',$conn)or die('找不到数据库'.mysql_error());//选择数据库
?>

