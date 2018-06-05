<?php 
/*
 Template name: About me 	
*/
?>

<?php get_header(); ?>
 <div class="row">
	 <div class="col-xs-12 col-md-8">
  <?php 
	  if( have_posts() ): 
	  
	  while(have_posts() ): the_post(); ?>
	  	<h1>Let's contact!</h1>
	  	<p><?php the_content(); ?></p>
	  	<h3><?php the_title(); ?></h3>
	  	<hr>
	  
	  <?php endwhile;
	  
	endif;
	?>
	 </div>
	 <div class="col-xs-12 col-md-4">
		 <?php get_sidebar();?>
	 </div>
 </div>
<?php get_footer(); ?>
