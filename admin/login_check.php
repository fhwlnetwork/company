	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

	 <?php  
	 header("Content-Type: text/html; charset=utf8");
	    if(isset($_POST["login_submit"]))  
	    {  
	        $user = $_POST["username"];  
	        $psw = $_POST["password"];  
	       
	         
	        if($user == "" || $psw == "")  
	        {  
	            echo "<script>alert('用户名或密码为空'); history.go(-1);</script>";  
	        }  
	        else  
	        {  
	            mysql_connect("localhost","root","root");  
	            mysql_select_db("ts_zzyd");  
	            mysql_query("set names 'utf-8'");  
	            $sql = "select username,password from ts_usermember where username = '$_POST[username]' and password = '$_POST[password]'";  
	            $result = mysql_query($sql);  
	            $num = mysql_num_rows($result);  
	            if($num)  
	            {  
	                $row = mysql_fetch_array($result);  
	                 echo "<meta http-equiv=\"refresh\" content=\"2;URL=all.php\">";  
	            }  
	            else  
	            {  
	                echo "<script>alert('用户名或密码不正确');history.go(-1);</script>";  
	            }  
	        }  
	    }  
	    else  
	    {  
	        echo "<script>alert('未成功'); history.go(-1);</script>";  
	    }  
	  
	?>   
	

</body>
	</html>