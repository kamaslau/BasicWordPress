<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset=<?php bloginfo('charset'); ?>>
	<meta http-equiv=x-dns-prefetch-control content=on>
	<link rel=dns-prefetch href="https://cdn.liuyajie.com/">
	<title><?php if(is_home()){bloginfo('name');echo ' - ';bloginfo('description');}else{wp_title('|',true,'right');bloginfo('name');echo ' - ';bloginfo('description');} ?></title>
	<meta name=version content="revision2020018">
	<meta name=author content="刘亚杰">
	<meta name=copyright content="刘亚杰">
	<meta name=contact content="kamaslau@dingtalk.com">
	<meta name=viewport content="width=device-width">

	<!--
	<script src="https://cdn.liuyajie.com/js/jquery/new.js"></script>
	-->
	
	<!--
	<link rel=stylesheet media=all href="https://cdn.liuyajie.com/css/reset.css">
	-->
	
	<link rel=stylesheet media=all href="<?php bloginfo('stylesheet_url') ?>">

	<!--
	<link rel="shortcut icon" href="http://images.key2all.com/logo/brand/3_32x32.png">
	<link rel="apple-touch-icon" href="http://images.key2all.com/logo/brand/3_120x120.png">
	-->
	
	<link rel=canonical href="<?php bloginfo('url'); ?>">

	<meta name=format-detection content="telephone=yes, address=no, email=no">
	
	<!-- 苹果设备优化 -->
	<meta name=apple-mobile-web-app-capable content=yes>
	<meta name=apple-mobile-web-app-status-bar-style content=black-translucent>
	<?php wp_head() ?>
</head>
<?php
	// 将head内容立即输出，让用户浏览器立即开始请求head中各项资源，提高页面加载速度
	ob_flush();flush();
?>
<body <?php body_class() ?>>
	<header id=header role=banner>
		<div class=container>
			<h1>
				<a id=logo href="<?php bloginfo('url') ?>" title="<?php bloginfo('name').bloginfo('description') ?>" rel=home><?php bloginfo('name') ?></a>
			</h1>
			<nav id=nav-header role=navigation>
				<ul>
					<li<?php if(is_home()){echo ' class=current-menu-item';} ?>><a href=<?php bloginfo('url') ?> title=<?php bloginfo('name').bloginfo('description') ?> rel=home>首页</a></li>
					<?php wp_list_categories('title_li=&orderby=id'); ?>
					<?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
				</ul>
			</nav>
			<div id=search-header role=search>
	            <form method=get action="<?php bloginfo('url') ?>">
	                <input id=searchword name=s type=search placeholder="搜索……" required>
					<button type="submit">开始</button>
	            </form>
			</div>
		</div>
	</header>
	<div id=maincontainer role=main>
		 <div class=container>
