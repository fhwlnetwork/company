<!DOCTYPE html>
<html>
<head>

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
      $('.box_skitter_medium').css({width: 500, height: 200}).skitter({show_randomly: true, dots: true, interval: 4000, numbers_align: 'center', theme: 'round'});
      $('.box_skitter_normal').css({width: 400, height: 300}).skitter({animation: 'blind', interval: 2000, hideTools: true, theme: 'minimalist'});
    });
  </script>
        <div style="width:985px;margin:0 auto;">
          <div class="box_skitter box_skitter_large">
            <ul>
              <li><a href="#cubeRandom"><img src="images/banner.jpg" class="cubeRandom"/></a></li>
              <li><a href="#block"><img src="images/banner2.jpg" class="block" /></a></li>
              <li><a href="#cubeStop"><img src="images/banner3.jpg" class="cubeStop" /></a></li>
            </ul>
          </div>
        </div>
</body>
</html>