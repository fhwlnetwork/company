<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

<form action="add_goodsdo.php"  method="post" enctype="multipart/form-data">
<table width="600" border="0" align="center">
  <tr>
    <td colspan="2" align="center">发布商品</td>
    </tr>
  <tr>
    <td width="143" align="right">产品名称</td>
    <td width="441"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
  </tr>
  <tr>
    <td align="right">价格</td>
    <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
  </tr>
  <tr>
    <td align="right">详情</td>
    <td rowspan="3"><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td align="right">上传图片</td>
    <td><input type="file" name="myfile"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="button" type="submit" id="button" value="提交" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>



</body>
</html>