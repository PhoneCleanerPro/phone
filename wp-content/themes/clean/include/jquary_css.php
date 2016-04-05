<?php
function clean_style_js(){
	
	wp_register_style('theme_style',get_template_directory_uri() . 'style.css',array(),'1.0','all');
	wp_register_style('style',get_template_directory_uri() . '/css/style.css',array(),'1.0','all');
	wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.css',array(),'3.3.6','all');
	wp_register_style('bootstrap_theme',get_template_directory_uri() . '/css/bootstrap-theme.css',array(),'3.3.6','all');

	
	
	wp_enqueue_style('theme_style');
	wp_enqueue_style('style');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('bootstrap_theme');

	


	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js',array('jquery'),'3.3.6',true);
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','clean_style_js');





?>