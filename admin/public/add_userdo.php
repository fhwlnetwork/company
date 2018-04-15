<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="1;url=../show_user.php">
	
</head>
<body>

<?php 

	$conn=mysql_connect('localhost','root','root')or die('链接数据库出错'.mysql_error());//链接数据库

	mysql_select_db('ts_zzyd',$conn)or die('找不到数据库'.mysql_error());//选择数据库 
 	
 	$username=trim($_POST['username']);
	$password=trim($_POST['passwd']);
	$email=trim($_POST['email']); 
	$telp=trim($_POST['telp']);
	$qqnum=trim($_POST['qqnum']);  
 	$sql="INSERT INTO ts_usermember VALUES ('','$username','$password','$email','$telp','qqnum')"; 
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