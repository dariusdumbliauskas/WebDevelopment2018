<h3 class="blog-title">Aside post : <?php the_title(); ?></h3>
	  	<small>Posted on: <?php the_time('F j, Y');?>  at <?php the_time('g:i a');?> , in <?php the_category(); ?> </small>
		  	<div class="thumbnail-img"> 
		  	</div>
		  	
		  			  	<div class="thumbnail-img"> 
			  	
			  	<?php 
				  	if (has_post_thumbnail() ) {
				  	the_post_thumbnail('medium'); 
				  	}
				  	?> 
		  	</div>
	  	<p><?php the_content(); ?></p>
	  	<?php echo 'This is the format ' . get_post_format();?>
	  	<hr>