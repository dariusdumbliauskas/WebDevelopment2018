<?php 
/*
 Template name: Contact	
*/
?>

<?php get_header(); ?>
  
  <?php 
	  
	  if( have_posts() ): 
	  
	  while(have_posts() ): the_post(); ?>
	  	<h1><?php the_title(); ?></h1>
	  <div class="row">
		  <div class="col-xs-12 col-md-8">
	  	<p><?php the_content(); ?></p>
	  	  </div>
	  	<hr>
	  	<div class="col-xs-12 col-md-4">
	  	<?php echo do_shortcode( '[contact-form-7 id="246" title="Contact form 1"]')?>
	  	</div>
	  </div>
	  <?php endwhile;
	  
	endif;
	?>
  <?php get_footer(); ?>

