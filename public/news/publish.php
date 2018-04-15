<?php 
$conn=mysql_connect('localhost','root','root')or die('链接数据库出错'.mysql_error());//链接数据库

mysql_select_db('ts_zzyd',$conn)or die('找不到数据库'.mysql_error());//选择数据库 
 
$title=trim($_POST['title']); 
$contents=trim($_POST['contents']);
$author=trim($_POST['author']); 
echo "$title";

$sql="INSERT INTO ts_news VALUES ('','$title','$author','$contents',now())"; 
$res=mysql_query($sql,$conn);//执行sql语句
if($res){ 
echo "发布成功!<br>"; 
echo "<a href='list.php'>返回文章列表</a>"; 
}else{ 
echo "发布失败!<br>"; 
echo "<a href='list.php'>返回文章列表</a>";}

mysql_close($conn);//关闭数据库

?>