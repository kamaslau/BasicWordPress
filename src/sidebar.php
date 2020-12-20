<aside id=sidebar>
<?php
	if(is_single()):
	global $post;
	$categories = get_the_category();
	foreach($categories as $category):
?>
	<div class=container-sidebar>
	    <li class="widget widget_recent_entries" id="<?php $category->term_id;?>-posts">
	        <h2 class=widgettitle><?php echo $category->name; ?></h2>
	        <ul>
	        <?php
				$posts = get_posts('numberposts=10&category='. $category->term_id);
				foreach($posts as $post) :
	        ?>
	            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	        <?php endforeach; ?>
	        </ul>
	    </li>
	</div>
<?php endforeach;endif; ?>

</aside>
