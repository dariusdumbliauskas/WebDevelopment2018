<article id="post-<?php the_id(); ?>" class"<?php post_class();?>">
<!-- the_id() Display the ID of the current item in the WordPress Loop. -->
<!-- lygiai taip pat post_class duoda unikalia reiksme kiekvienam postui -->


	<header class="entry-header">
		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>'); 

/*
 idetinskas uzrasymo variantas tik maziau saugesnis <h1><a href="<?php echo the_permalink();?>"> <?php the_title(); e?> </a></h1>
 sprintf — Return a formatted string
 esc_url del saugumo
 the_permalink Displays the permalink for the current post.
*/

?>


		<small>Posted on: <?php the_time('F j, Y');?>  at <?php the_time('g:i a');?> , in <?php the_category(); ?> </small>
	</header>
	
<div class="row">
		
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-xs-12 col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('medium_large'); ?></div>
			</div>
			<div class="col-xs-12 col-sm-8">
				<?php the_content(); ?>
			</div>
		
		<?php else: ?>
		
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
		
		<?php endif; ?>
	</div>
	  	<hr>

</article>