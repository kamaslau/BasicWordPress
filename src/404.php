<?php get_header(); ?>
	<div id=content>
		<article <?php post_class(); ?> role=article>
			<header class=header-post>
				<h1>404</h1>
				<p>您访问的链接不是一个有效链接，请检查链接拼写是否正确，<a href="javascript:history.go(-1);">返回上一页</a>，或<?php echo date('Y'); ?> <a href=<?php bloginfo('url'); ?> title=<?php bloginfo('name').bloginfo('description'); ?> rel=home>回到首页</a>。</p>
			</header>
			<section class=content-entry>
				<script src="http://www.qq.com/404/search_children.js"></script>
			</section>
		</article>
	</div>
<?php get_footer();