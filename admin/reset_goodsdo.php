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

   mysql_connect("localhost","root","root");
   mysql_select_db("ts_zzyd");

    $id=$_POST['id'];
        
        $content=$_POST['comment'];
        $name=$_POST['names'];
         $price=$_POST['price'];



      $query = "UPDATE ts_goods SET contents='$content',name='$name',price='$price' WHERE id='$id' ";
      $result = mysql_query($query);

      if ($result) 
         //echo "<p>更新成功！</p>";
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=reset_goodsshow?id=<?php echo "$id"?>.php\">";
      else 
         echo "<p>更新失败。</p>";

?>

</div>
</body>
</html>