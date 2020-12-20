		</div><!-- #maincontainer .container -->
	</main><!-- #maincontainer -->
	
	<footer id=footer>

	<div class="container">
		<?php wp_list_cats() ?>
	</div>

		<div class="container">
			<p id=copyright>&copy;<?php echo date('Y') ?> <a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name').bloginfo('description') ?>" rel=home><?php bloginfo('name') ?></a> 鲁ICP备XXX号</p>
		</div>
	</footer>

	<a id=totop title="回到页首" href="#header">回到页首</a>

	<?php wp_footer() ?>

</body>
</html>
