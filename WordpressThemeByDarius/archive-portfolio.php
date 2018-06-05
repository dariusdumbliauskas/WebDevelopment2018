<!-- index.php pasirupina blog postu puslapiu -->
<?php get_header(); ?>


	<div class="row">
		<div class="col-xs-12 col-sm-8">
			<div class="row ">
                <!-- Show Category or Month -->
                <header class="page-header">
		    	<?php 
                if( have_posts() ): 
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description>', '</div>' );
                ?>
                </header>
                <!-- /Show Category or Month  -->
                
                <?php while(have_posts() ): the_post();?> 
				
                <?php get_template_part( 'archive', 'content' )?>
			<?php endwhile;?>
				<!-- blog pagination -->
				<div class='col-xs-12 text-center'>
					<?php the_posts_navigation(); ?>
                </div>  
                <?php endif; ?>
		</div> 
	</div>

			<div class="col-xs-12 col-sm-4">
				<?php get_sidebar();?>
			</div>
	</div> 
	
	<!--/blog loop row -->
<?php get_footer(); ?>

