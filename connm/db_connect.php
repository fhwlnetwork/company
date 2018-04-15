<?php
	$con = new mysqli('localhost','root','root','ts_zzyd');
	if (mysqli_connect_errno()){
		echo 'erro:could not connect to your database.please check your demo';
		exit;
	}
?>