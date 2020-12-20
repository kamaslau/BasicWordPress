<?php
	//激活缩略图支持
	add_theme_support('post-thumbnails');
	add_image_size( 'archive-thumb', 200, 9999 );
	
	//激活边栏小工具
	if(function_exists('register_sidebar')){
		register_sidebar();
	}
	
	//去除header里的wordpress generator标记
	remove_action('wp_head', 'wp_generator');
	function remove_wordpress_version() { return ''; }
	add_filter('the_generator', 'remove_wordpress_version');

	/*去除谷歌字体*/
	//替换字体
	function wpdx_replace_open_sans() {
	  wp_deregister_style('open-sans');
	  wp_register_style( 'open-sans', '//fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,300,400,600' );
	  if(is_admin()) wp_enqueue_style( 'open-sans');
	}
	add_action( 'init', 'wpdx_replace_open_sans' );
	