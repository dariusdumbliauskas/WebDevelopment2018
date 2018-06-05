<h3 class="blog-title">Image post : <?php the_title(); ?></h3>
		  	<div class="thumbnail-img"> 
			  	
			  	<?php 
				  	if (has_post_thumbnail() ) {
				  	the_post_thumbnail('large'); 
				  	}
				  	?> 
		  	</div>
	  	<hr>