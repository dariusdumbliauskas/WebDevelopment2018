<?php
// WP-config.php debuging turned on. TURN OF BEFORE UPLOADING TO SERVER

/*
	==========================================
	 Add CSS and JS
	==========================================
*/
function theme_script_enqueue(){

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.7', 'all');
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', array(), '1.0', 'all');
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'ionicons', 'https://unpkg.com/ionicons@4.1.2/dist/ionicons.js' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.7', true);
	wp_enqueue_script( 'appjs', get_template_directory_uri() . '/js/app.js', array(), '1.0', true);
	
	
}

add_action( 'wp_enqueue_scripts', 'theme_script_enqueue' );

/*
	==========================================
	 Add Theme support
	==========================================
*/

function awesome_theme_setup(){
	add_theme_support( 'menus');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats' , array('aside','video','image'));
	add_theme_support( 'html5', array('search-form') );
	
	register_nav_menus(array(
      'primary' => __('Primary navigation', 'Wordpresine-tema'),
    ) );
	register_nav_menu( 'secondary','Footer navigation' );
	
}

add_action( 'after_setup_theme', 'awesome_theme_setup');

/*
	==========================================
	 Sidebar Functions
	==========================================
*/

function awesome_widget_setup(){
	register_sidebar( array(
		'name'=> 'sidebar',
		'id' => 'sidebar-1',
		'class' => 'custom', //wordpressas padarys sidebar-custom
		'description' => 'standart sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) 
	);
}

add_action( 'widgets_init', 'awesome_widget_setup');


/*
	==========================================
	 Custom Post Type
	==========================================
*/
function awesome_custom_post_type (){
	
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
}
add_action('init','awesome_custom_post_type');

/*
	==========================================
	 Addition functions
	==========================================
*/
// remove double P tags 
remove_filter( 'the_content', 'wpautop' );
remove_filter('the_excerpt', 'wpautop');

// remove WP version in the head to protect from possible hacks
function remove_version() {
	return '';
}
add_filter( 'the_generator', 'remove_version' );





