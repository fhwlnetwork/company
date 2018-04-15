
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1 style="aligin:center;">增加用户</h1>
<form method="post" action = "public/add_userdo.php">
<table width="740" border="0">
  <tbody>
    <tr>
      <td width="82">  用户名： </td>
      <td width="80"><input type="text" name="username"></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><input type="text" name="passwd"></td>
    </tr>
    <tr>
      <td >email：</td>
      <td><input type="text" name="email">
	  </td>
    </tr>
    <tr>
      <td >联系电话：</td>
      <td><input type="text" name="telp">
    </td>
    </tr>
    <tr>
      <td >qq：</td>
      <td><input type="text" name="qqnum">
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
