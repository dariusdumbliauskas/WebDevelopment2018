<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('post',get_post_format()); ?>
			
			<?php endwhile; ?>
			
		<div class="col-xs-6 text-left">
				<?php next_posts_link('« Older Posts'); ?>
			</div>
			<div class="col-xs-6 text-right">
				<?php previous_posts_link('Newer Posts »'); ?>
			</div>
		
		<?php endif;
				
		?>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>