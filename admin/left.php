<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中电数通</title>
<!-- <link href="style/css.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/menu-css.css" rel="stylesheet" type="text/css" /> -->
<style type="text/css">
		.ctrl{
		text-align: center;
		 list-style-type:none;  
            width:150px; 
            list-style:none; 
             text-decoration:none;
    color:#0000FF
	}
	.menu ul li {
	display:block;
	width:190px;
	padding-top:2px;
	margin-bottom:5px;
	/*background: url(../images/zakladka.png) top left no-repeat;*/
	list-style:none;
	overflow:visible;
}
.menu ul li a {
	display:block;
	height:34px; width:200px;
	margin-top:0px;
	padding-top:10px;
	font-size:14px;
	color:#82846f;
	outline:none;
}
/*.menu ul li .active {
	background:url(../images/on.png) top right no-repeat;
}

.menu ul li .inactive {
	background:url(../images/off.png) top right no-repeat;
}*/
.menu ul li ul {
	display:none; 
	margin-top:-4px;
	margin-bottom:20px;   
}
.menu ul li ul li ul {
	margin-bottom:5px;
}
.menu ul li ul li {
	display:block;
	background:none;
	font-size:12px;
	list-style:circle;
	color:#8f9d4c;
	margin-bottom:0px;
	margin-top:0px;
	padding-top:0px;
	padding-bottom:0px;
	padding-left:1px;
	margin-left:35px;
}
.menu ul li ul li a {
	background:none;
	font-size:12px;
	height:15px;
	color:#8f9d4c;
	padding-left:0px; 
}
	</style>
</head>

<body>

<div class="banner"> 
      
      
      
      
      
      <script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script> 
        <script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script> 
        <script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script> 
        
        <!-- Init Skitter --> 
        <script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('.box_skitter_large').skitter({label: false, numbers: false, theme: 'square'});
			$('.box_skitter_small').skitter({label: false, numbers: false, interval: 1000, theme: 'clean'});
			$('.box_skitter_medium').css({width: 500, height: 500}).skitter({show_randomly: true, dots: true, interval: 4000, numbers_align: 'center', theme: 'round'});
			$('.box_skitter_normal').css({width: 400, height: 600}).skitter({animation: 'blind', interval: 2000, hideTools: true, theme: 'minimalist'});
		});
	</script>
      


<script type="text/javascript" src="js/menu_min.js"></script>

<script type="text/javascript">
$(document).ready(function (){ 
  
  $(".menu ul li").menu();
  
}); 
</script> 



<div class="banner"> 
      
      
      
      
    
      <script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script> 
        <script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script> 
        <script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script> 
        
        <!-- Init Skitter --> 
        <script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('.box_skitter_large').skitter({label: false, numbers: false, theme: 'square'});
			$('.box_skitter_small').skitter({label: false, numbers: false, interval: 1000, theme: 'clean'});
			$('.box_skitter_medium').css({width: 500, height: 200}).skitter({show_randomly: true, dots: true, interval: 4000, numbers_align: 'center', theme: 'round'});
			$('.box_skitter_normal').css({width: 400, height: 300}).skitter({animation: 'blind', interval: 2000, hideTools: true, theme: 'minimalist'});
		});
	</script>
     
<div class="main">
<div class="main_1">
<div class="left">
<div class="left_1">

<div class="left_list">

<script type="text/javascript" src="js/menu_min.js"></script>

<script type="text/javascript">
$(document).ready(function (){ 
  
  $(".menu ul li").menu();
  
}); 
</script> 

<div class="menu">
<ul>
	<li>
	
	<a href="#">新闻信息</a>
		<ul>
			<li><a href="add_news.php" target="myframe">发布新闻</a></li>
			<li><a href="show_news.php" target="myframe">预览新闻</a></li>
			<li><a href="reset_news.php" target="myframe">修改新闻</a></li>
			<li><a href="del_news.php" target="myframe">删除新闻</a></li>
			
		</ul>				
	</li>
	
	<li><a href="#">产品管理</a>
		<ul>
			<li><a href="add_goods.php" target="myframe">添加产品</a></li>
			<li><a href="reset_goods.php" target="myframe">修改产品</a></li>
			<li><a href="del_goods.php" target="myframe">删除产品</a></li>
			
		</ul>				
	</li>
	<li><a href="#">留言管理</a>
		<ul>
			<li><a href="shoe_message.php" target="myframe">查看留言</a></li>
			
			<li><a href="del_message.php" target="myframe">删除留言</a></li>
			
		</ul>				
	</li>
	<li><a href="#">招聘信息管理</a>
		<ul>
			<li><a href="add_job.php" target="myframe">发布招聘信息</a></li>
			<li><a href="reset_job.php" target="myframe">修改招聘信息</a></li>
			<li><a href="del_job.php" target="myframe">删除招聘信息</a></li>
		
			
		</ul>				
	</li>
	<li><a href="#">用户管理</a>
		<ul>
			<li><a href="add_user.php" target="myframe">增加用户</a></li>
			<li><a href="show_user.php" target="myframe">查看用户</a></li>
			<li><a href="del_user.php" target="myframe">删除用户</a></li>
			<li><a href="change_userpasswd.php" target="myframe">修改用户密码</a></li>
			
		</ul>				
	<li><a href="#">我又不知道干嘛了</a>
		<ul>
			<li><a href="#subb1">算了不写了</a></li>
			
			
		</ul>				
	</li>
		
			
		</ul>	
    </li>
</ul>
</div>


</div>
</div>



</div>
</div>

</body>
</html>
