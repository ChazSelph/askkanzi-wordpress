<div class="container">
	<header class="content-header">
		<h2><?php the_title(); ?></h2>
		<div class="meta mb-3">
			<span class="date">
				<?php  the_date(); ?>
				</span>

			<?php  
				the_tags('<span class="tag">
				<i class="fa fa-tag"></i>', '</span><span class="tag">
				<i class="fa fa-tag"></i>', '</span>');
			?>

		</div>
	</header>


<?php  
	the_content();
?>


<?php  
	comments_template();
?>

</div>