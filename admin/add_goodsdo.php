<?php
 header ( 'Content-Type:text/html; charset=utf-8;' );
    $allowtype = array("gif", "png", "jpg");   //设置允许上传的类型为gif, png和jpg
    $size = 1000000;                           //设置允许大小为1M（1000000字节）以内的文件
    $path = "./uploads";                       //设置上传后保存文件的路径

    //1. 判断文件是否可以成功上传到服务器，$_FILES['myfile']['error'] 为0表示上传成功
if($_FILES['myfile']['error'] > 0) {    
        echo '上传错误: ';
switch ($_FILES['myfile']['error']) {
            case 1:  die('上传文件大小超出了PHP配置中的约定值：upload_max_filesize');  
            case 2:  die('上传文件大小超出了表单中的约定值：MAX_FILE_SIZE');  
            case 3:  die('文件只被部分上载'); 
            case 4:  die('没有上传任何文件'); 
            case 6:  die('找不到临时文件夹');
            case 7:  die('文件写入失败');
            default: die('末知错误');
        }
    } 
//2. 判断上传的文件是否为允许的文件类型,通过文件的后缀名
$tuming= explode(".", $_FILES['myfile']['name']);
    $hz = array_pop($tuming); //array_pop() 函数弹出数组中的最后一个元素

//3. 通过判断文件的后缀方式，来决定文件是否是允许上传的文件类型
if(!in_array($hz, $allowtype)) {
        die("这个后缀是<b>{$hz}</b>,不是允许的文件类型!");
    }
    //4. 判断上传的文件是否为允许大小
if($_FILES['myfile']['size'] > $size ) {
        die("超过了允许的<b>{$size}</b>字节大小");
    }
    //5. 为了系统安全，也为了同名文件不会被覆盖，上传后将文件名使用系统定义
    $filename = date("YmdHis").rand(100,999).".".$hz;
    //6. 判断是否为上传文件
if (is_uploaded_file($_FILES['myfile']['tmp_name'])) { 
if (!move_uploaded_file($_FILES['myfile']['tmp_name'], $path.'/'.$filename)) {  
            die('问题: 不能将文件移动到指定目录。');
        }
}else{
        die("问题: 上传文件{$_FILES['myfile']['name']}不是一个合法文件: ");
    }
    //7. 如果文件上传成功则输出
    echo "文件{ $filename }上传成功,保存在{$path}中，大小为{$_FILES['myfile']['size']}字节";   



  $name=$_POST['textfield'];
  $price=$_POST['textfield2'];
  $content=$_POST['textarea'];

  $mysqli = new mysqli('localhost','root','root','ts_zzyd');
  //数据库连接时发生的错误
  if(mysqli_connect_errno()){
    echo '数据库连接出现了错误，错误的信息是：'.mysqli_connect_error();
    exit();
  }
  //设置一下编码
  $mysqli -> set_charset('utf8');
  //创建一句 SQL ，获取数据库的表的数据
 $sql = "insert into ts_goods values('','$name','$price','$content','$filename')";
  //执行 SQL 语句，把结果集赋给 $_result
 $result = $mysqli -> query($sql);
  if($result){
    echo "发表成功！";
  }
  $mysqli->close();

  ?>

