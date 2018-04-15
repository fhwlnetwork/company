<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中电数通</title>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/menu-css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include '../public/top.php'?>

<div class="nav">
<?php include '../public/leader.php' ?>
</div>

<?php include '../public/lunbo.php'?>
      
      
      

      
       </div>
</div>
</div>
<div class="main">
<div class="main_1">
<div class="left">
<div class="left_1">
<div class="left_title"><img src="images/zs.jpg" /></div>
<div class="left_list">

<script type="text/javascript" src="js/menu_min.js"></script>

<script type="text/javascript">
$(document).ready(function (){ 
  
  $(".menu ul li").menu();
  
}); 
</script> 

<?php include '../public/achieve_show.php' ?>

</div>
</div>

<?php include '../public/connect.php'?>

<div class="right">
<div class="rigth_1">
<div class="right_title"><img src="images/gs.jpg" /></div>
<div class="right_list"><img src="images/gstp.jpg" /><span>宁夏中电数通科技有限公司成立于2016年，是一家集产品研发、生产和销售为一体的国家级高新技<br/><br/>术企业，公司致力于成为国内领先的远程管理控制和智能化网络的解决方案提供商。[<a href="intr.php" style="color:#F00">详细</a>]</span></div>
<div class="right_z">
<ul>
<li>公司文化：用心呈递</li>
<li>公司精神：成就客户，合作共赢</li>
</ul>
</div>
</div>
<div class="right_2">
<div class="right_title2"><img src="images/new.jpg" /></div>
<div class="right_list2">
<!--<ul>
<li><a href="#">新闻列表新闻列表</a></li>
<li><a href="#">新闻列表新闻列表</a></li>
<li><a href="#">新闻列表新闻列表</a></li>
<li><a href="#">新闻列表新闻列表</a></li>
<li><a href="#">新闻列表新闻列表</a></li>
<li><a href="#">新闻列表新闻列表</a></li>
<li><a href="#">新闻列表新闻列表</a></li>-->
<?php include '../public/newsright.php'?>
</ul>
</div>
</div>

</div>
<div class="right_3">
<div class="right_title3"><a href="#" class="more"><img src="images/more.jpg" /></a></div>
<div class="right_list3">
<div id="demo">
            <div id="indemo">
              <div id="demo1">
                <div id="demo1_1"><a href="#"><img src="images/cp_cp.jpg" />图片名字</a></div>
                <div id="demo1_1"><a href="#"><img src="images/cp_cp.jpg" />图片名字</a></div>
                <div id="demo1_1"><a href="#"><img src="images/cp_cp.jpg" />图片名字</a></div>
                <div id="demo1_1"><a href="#"><img src="images/cp_cp.jpg" />图片名字</a></div>
                <div id="demo1_1"><a href="#"><img src="images/cp_cp.jpg" />图片名字</a></div>
              </div>
              <div id="demo2"></div>
            </div>
          </div>
           

<script>var speed=20;
var tab = document.getElementById("demo");
var tab1 = document.getElementById("demo1");
var tab2 = document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
    if(tab2.offsetWidth-tab.scrollLeft<=0)
        tab.scrollLeft-=tab1.offsetWidth
    else{
        tab.scrollLeft++;
    }
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
</script> 
</div>
</div>





</div>
</div>
<?php include '../public/foot.php'?>
</body>
</html>
