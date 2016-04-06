<?php
//Basic Setting 
function clean_default_function(){
	add_theme_support('title_tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('custom-header');

} 
add_action('after_setup_theme','clean_default_function');

//Include stylesheet and JavaScript all file 
include_once('include/jquary_css.php');

//Menu Dynamic 
function clean_theme_menu(){
	register_nav_menus(array(
		'menu_name'=>'Main Menu'
	));
}
add_action('init','clean_theme_menu');

function default_menu(){
		echo '<ul class="nav navbar-nav navbar-right">';		
		if ('page' != get_option('show_on_front')) {
		echo '<li><a href="'. site_url() . '/">Home</a></li>';			
		}
		wp_list_pages('title_li=');
		echo '</ul>';
}
require_once('wp_bootstrap_navwalker.php');

//Services Custom Post 
include_once('include/custom_post.php');
//Services Custom Post  Taxonomy
include_once('include/taxonomy.php');
// Image Crop resize 
add_image_size('staffs_image',253,253 ,true);

// Activate Theme Options 
require_once('Admin/index.php');


if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Secondary Image',
'id' => 'secondary-image',
'post_type' => 'service'
 ) );
 new MultiPostThumbnails(array(
'label' => 'Secondary Image2',
'id' => 'secondary-image2',
'post_type' => 'service'
 ) );

 }












?>


