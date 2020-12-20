<?php get_header(); ?>
<div id=content>
	<?php
		if(have_posts()):
			while(have_posts()):
				the_post();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role=article>
		<header class=header-post>
			<h1>
				<?php if(!is_singular()): ?>
					<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" rel=bookmark><?php the_title(); ?></a>
				<?php else: ?>
					<?php the_title(); ?>
				<?php endif; ?>
			</h1>
			<ul class=meta-post>
				<li><time class=date-created><i class="fa fa-calendar"></i> <?php the_time('发表于 Y年n月j日'); ?></time></li>
				<li><time class=date-modified><i class="fa fa-calendar"></i> <?php the_modified_time('修改于 Y年n月j日'); ?></time></li>
				<li><i class="fa fa-user"></i> <?php the_author(); ?></li>
				<li><i class="fa fa-bookmark"></i> <?php the_category('、'); ?></li>
				<li><i class="fa fa-tag"></i> <?php the_tags('','、'); ?></li>
				<li><?php edit_post_link('<i class="fa fa-edit"></i> 编辑本文'); ?></li>
			</ul>
		</header>
		<section class=content-entry><?php the_content('了解详情 &raquo;'); ?></section>
	</article>
	<?php endwhile; ?>
	
	<nav id=nav-content role=navigation>
		<?php if(!is_singular()): ?>
			<span class=nav-previous><?php posts_nav_link(' ',' ','<i class="fa fa-angle-double-left"></i>
 上一页');?></span>
			<span class=next><?php posts_nav_link(' ','下一页 <i class="fa fa-angle-double-left"></i>
',' ');?></span>
		<?php else: ?>
			<span class=nav-previous><?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>
	 %title', TRUE);?></span>
			<span class=nav-next><?php next_post_link('%link', '%title <i class="fa fa-angle-right"></i>
	', TRUE);?></span>
		<?php endif; ?>
	</nav>
	<?php endif; ?>
</div>

<?php
	if(is_singular()||is_archive()):
		get_sidebar();
	endif;
	
	get_footer();
