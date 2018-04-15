<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action = "../public/add_message.php">
<table width="740" border="0">
  <tbody>
    <tr>
      <td width="82">
姓 名：</td>
      <td width="80"><input type="text" name="username"></td>
    </tr>
    <tr>
      <td>联系电话：</td>
      <td><input type="text" name="telp"></td>
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
