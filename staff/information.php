<?php
  $seat = 2;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=640,target-densitydpi=device-dpi, minimum-scale=0.5,maximum-scale=2,user-scalable=no">
<title>饿了么2017年度盛典</title>
<!-- <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script> -->
<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body class="index">

<section class="p-ct">
  <div class="translate-back">
    <div class="m-page">
      <section class="swiper-slide map">
        <a class="back" href="staff_menu.html"></a>
        <img src="img/map_point.png" class="map_point">
      </section>
    </div>

    <div class="m-page f-hide">
      <section class="swiper-slide seat">
        <a class="back" href='staff_menu.html'></a>
        <!-- 到时候按照$seat变量的值来取图片 -->
        <img src="img/seat/<?php echo $seat?>.jpg" class="seat_detail">
      </section>
    </div>

  </div>
</section>

<div class="arrow"></div>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script src="js/zepto.js"></script> -->
<script src="js/main.js"></script>
</body>
</html>