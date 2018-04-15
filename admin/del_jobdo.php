<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>无标题文档</title>
<meta charset="utf-8">
</head>
<!-- <?php

$id=$_GET['id'];
$link=mysql_connect("localhost","root","root");
mysql_query("set names 'utf8'");
mysql_select_db('ts_zzyd',$link);
$sql="delete from ts_message where id='.$id'";

mysql_query($sql);
mysql_close($link);
echo "删除成功";

?> -->


    <?php
     $id=$_GET['id'];

    $con = mysql_connect("localhost","root","root");
    if (!$con)
      {
      die('could not connect: ' . mysql_error());
      }

    mysql_select_db("ts_zzyd", $con);

    mysql_query("delete from ts_recruit where id='$id'");

    mysql_close($con);

     echo "<meta http-equiv=\"refresh\" content=\"2;URL=del_job.php\">";
    ?>



