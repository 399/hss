<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<title>Hanns Seidel Stiftung</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css">
</head>
<body>
<!--头部导航---->
	<div class="header">
		<div class="container">
			<div class="logo"><a href="#">Hanns Seidel Stiftung</a></div>
			<div class="g-row">
				<ul class="nav">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Learn & Engage</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Events</a></li>
				</ul>
			</div>
		</div>
	</div>
<!--头部导航END-->
<!--幻灯片-->
	<div class="fullSlide">
		<div class="bd">
			<ul>
				<li><a target="_blank" href="#">
				<img src="<?php bloginfo('template_directory'); ?>/img/test/1.jpg"/></a></li>
				<li><a target="_blank" href="#">
				<img src="<?php bloginfo('template_directory'); ?>/img/test/2.jpg"/></a></li>
				<li><a target="_blank" href="#">
				<img src="<?php bloginfo('template_directory'); ?>/img/test/3.jpg"/></a></li>
				<li><a target="_blank" href="#">
				<img src="<?php bloginfo('template_directory'); ?>/img/test/4.jpg"/></a></li>
			</ul>
		</div>
		<div class="hd"><ul></ul></div>
		<a class="prev" href="javascript:void(0)"><i class="iconfont hd_i">&#xe611;</i></a>
		<a class="next" href="javascript:void(0)"><i class="iconfont hd_i">&#xe606;</i></a>
	</div>
	<script type="text/javascript">
		jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"leftLoop", vis:"auto", autoPlay:true, autoPage:true,});
		jQuery(".slideTxtBox").slide({effect:"left",easing:"easeInQuint",delayTime:100});
	</script>
<!--幻灯片END-->
</body>
</html>