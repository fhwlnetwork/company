<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>



<h1 style="aligin:center;">招聘信息</h1>
<form method="post" action = "public/add_jobdo.php">
<table width="740" border="0">
  <tbody>
    <tr>
      <td width="82">
标题：</td>
      <td width="80"><input type="text" name="title"></td>
    </tr>
    <tr>
      <td>用户：</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td >留言内容：</td>
      <td><textarea name="comment" rows=5 cols=60>
			</textarea>
	  </td>
    </tr>
    <tr>
      <td align=right><input type="submit" name="submit1" value="提交留言"></td>
      <td align=center> <input type="reset" name="submit2"></td>
    </tr>
  </tbody>
</table>
</form>


</body>
</html>