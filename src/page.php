<?php get_header(); ?>
<div id=content>
	<?php
		if(have_posts()):
			while(have_posts()):
				the_post();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role=article>
		<header class=header-post>
			<h1><?php the_title(); ?></h1>
			<span class=edit><?php edit_post_link('<i class="fa fa-edit"></i> 编辑本文'); ?></span>
		</header>
		<section class=content-entry><?php the_content('了解详情 &raquo;'); ?></section>
	</article>
	<?php endwhile; ?>
	<nav id=nav-content role=navigation>
		<span class=nav-previous><?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>
 %title', TRUE);?></span>
		<span class=nav-next><?php next_post_link('%link', '%title <i class="fa fa-angle-right"></i>
', TRUE);?></span>
	</nav>
	<?php endif; ?>
</div>
<?php
	get_sidebar();
	get_footer();