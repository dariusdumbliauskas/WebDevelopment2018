<?php 
/*
 Template name: Services	
*/
?>

<?php get_header(); ?>
  
  <?php 
	  if( have_posts() ): 
	  
	  while(have_posts() ): the_post(); ?>
	  	<h1>I provide a lot of services!</h1>
	  	<p><?php the_content(); ?></p>
	  	<h3><?php the_title(); ?></h3>
	  	<hr>
	  
	  <?php endwhile;
	  
	endif;
	?>
  
<?php get_footer(); ?>
