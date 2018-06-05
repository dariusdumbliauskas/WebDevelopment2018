<!-- index.php pasirupina blog postu puslapiu -->
<?php get_header(); ?>

	<div class="row">
		<div class="col-xs-12 col-sm-8">
			<div class="row text-center">
		    <?php 
				if( have_posts() ): ;
				while(have_posts() ): the_post(); ?>
			  
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
						<?php if( has_post_thumbnail() ): ?>				
							<div class="pull-left single-post-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
						<?php endif; ?>		
							<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
							<?php the_excerpt(); ?>
					</article>
			  
			<?php
				endwhile;
				endif;
			?>
			
			</div> 
		</div>

		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar();?>
		</div>
	</div> 
	
	<!--/blog loop row -->
<?php get_footer(); ?>