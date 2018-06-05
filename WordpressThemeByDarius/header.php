<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
		<title><?php bloginfo( 'name' )?><?php wp_title(' | ');?></title>
		<meta name="description" content="<?php bloginfo( 'description' );?>">
    <?php wp_head(); ?>
</head>

<?php 
//wordpressui home page yra tas kuriame yra blog postai todel reiketu naudoti is_front_page

	if(	is_front_page() ):
		$awesome_classes = array('home-klase');
	else:
		$awesome_classes = array('ne-home-page-klase');
	endif;
	
?>
		
<body <?php body_class($awesome_classes);?>>
	<!-- printinam meniu headeryje -->

			<div class="row">
				
				<div class="col-xs-12">
					
					<nav class="navbar navbar-default navbar-fixed-top">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">MKG</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right',
									
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
				
				
				
			</div>
			
			<div class="col-xs-12">
				<div class="search-form-container">
					<div class="container">
					<?php 
					/*
						Kaip isideti ir pacustomazinti search forma:
						-isidedam funkcija get_search_form()
						-per funkcijas pridedam jai HTML5 markupa (optional)
						-sukuriam searchform.php ir per ten ka uzrasysim bus naujasis Search form
					*/
					get_search_form()
					;?>
					</div>
				</div>
			</div>

<div class="container">


			    
    