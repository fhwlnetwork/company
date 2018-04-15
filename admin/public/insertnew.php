<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="1;url=../add_news.php">
	
</head>
<body>

<?php 

	$conn=mysql_connect('localhost','root','root')or die('链接数据库出错'.mysql_error());//链接数据库

	mysql_select_db('ts_zzyd',$conn)or die('找不到数据库'.mysql_error());//选择数据库 
 	
 	$title=trim($_POST['title']);
	$name=trim($_POST['username']);
	$content=trim($_POST['comment']); 




	$sql="INSERT INTO ts_news VALUES ('','$title','$name','$content',now())"; 
	$res=mysql_query($sql,$conn);//执行sql语句
		if($res){ 
			echo "发布成功!<br>"; 

			}else{ 
		echo "发布失败!<br>"; 


	mysql_close($conn);//关闭数据库
}
?>
</body>
</html>