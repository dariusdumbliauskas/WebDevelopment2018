<?php get_header(); ?>
<div class="row">
	<div class="col-xs-12 col-md-8">
  <?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
					<?php if( has_post_thumbnail() ): ?>
						<div class="single-post-thumbnail pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
					<?php endif; ?>
					<?php the_content(); ?>
					
					<hr>
					<!-- Vaikstom per Postus -->
					<div class='col-xs-6 text-left'>
						<?php next_post_link(); ?> 
					</div>  
				
					<div class='col-xs-6 text-right'>
						<?php previous_post_link(); ?>
					</div> 
					<?php
						/*
						Kaip ijungti komentarus:
						1. Per Blog post nustatymus ijungiam "Discussion parametra"	
						2. Uzrasom zemiau esancia funkcija 'jei ijungti komentarai,uzkrauk komentaru template'
						3. Jeigu Allow comments nustatymas isjungtas tada suveikia 'Else' salyga 
						
						*/
					if (comments_open() ) {
						comments_template();
					} else{
						echo '<h5>Sorry, comments for this blog post are closed </5>';
					}	
					?>
					
				</article>
				<?php endwhile; ?>
			<?php endif; ?>
					
	</div>
	<div class="col-xs-12 col-md-4">
		<?php get_sidebar( );?>
	</div>
</div>
	
  
<?php get_footer(); ?>