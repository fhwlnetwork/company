<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="new.css">
    <title>新闻</title>


<style type="text/css">  
body{margin:auto;width:800px; border:solid 1px #000;}
</style>


</head>
<body >
<div class="">

 <?php
        $id=$_GET['id'];
       
        $con = mysql_connect("localhost","root","root");
        if (!$con)
            {
                die('Could not connect: ' . mysql_error());
            }
        mysql_select_db("ts_zzyd", $con);
        $result = mysql_query("select * FROM ts_usermember where id=".$id."" );
        $row = mysql_fetch_array($result);
            mysql_close($con);
?>

<form method="post" action = "changenewsdo.php">
<input type="hidden" name="id" value="<?php echo "$id"?>">
<table width="740" border="0">
  <tbody>
    <tr

      <td width="82">
用户名：</td>
      <td width="80"><?php echo $row['username']?></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><input type="text" name="passwd" value="<?php echo $row['password']?>"></td>
    </tr>
    <tr>
      <td >留言内容：</td>
      <td >
                <?php echo $row['email']?>
            
      </td>
    </tr>
    <tr>
      <td align=right><input type="submit" name="submit1" value="提交修改"></td>
      <td align=center> <input type="reset" name="submit2"></td>
    </tr>
  </tbody>
</table>
</form>
</div>
</body>
</html>