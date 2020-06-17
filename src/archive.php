<?php get_header(); ?>
<div id=content>
	<?php if(have_posts()):while(have_posts()):the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role=article>
		<header class=header-post>
			<h1>
				<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" rel=bookmark><?php the_title(); ?></a>
			</h1>
			<span class=edit><?php edit_post_link('<i class="fa fa-edit"></i> 编辑本文'); ?></span>
		</header>
		<section class=content-entry>
			<?php
				if(has_post_thumbnail()):
					the_post_thumbnail('archive-thumb');
				endif;
				if(has_excerpt()):
					the_excerpt();
				else:
					the_content('了解详情 &raquo;');
				endif;
			?>
		</section>
	</article>
	<?php endwhile; ?>
	<nav id=nav-content role=navigation>
		<span class=previous><?php posts_nav_link(' ',' ','&laquo; 上一页');?></span>
		<span class=next><?php posts_nav_link(' ','下一页 &raquo;',' ');?></span>
	</nav>
	<?php endif; ?>
</div>
<?php
	get_sidebar();
	get_footer();