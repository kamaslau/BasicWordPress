<?php get_header(); ?>
	<!--
	<ul id=content-home class=container>
		<li>
			<h2>新闻动态</h2>
			<ul id=services>
				<?php $my_query = new WP_Query('category_name=news&showposts=5'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li>
					<h4><a rel=bookmark title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</li>
				<?php endwhile; ?>
			</ul>
		</li>
		<li>
			<h2>解决方案</h2>
			<ul id=about-us>
				<?php $my_query = new WP_Query('category_name=about-us&showposts=5'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li>
					<h4><a rel=bookmark title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</li>
				<?php endwhile; ?>
			</ul>
		</li>
		<li>
			<h2>成功案例</h2>
			<ul id=join-us>
				<?php $my_query = new WP_Query('category_name=join-us&showposts=5'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li>
					<h4><a rel=bookmark title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</li>
				<?php endwhile; ?>
			</ul>
		</li>
	</ul>
	-->
<?php
	get_footer();