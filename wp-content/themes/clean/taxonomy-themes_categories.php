<?php
/**
 * Template Name:service page

 */

get_header(); ?>

	<h1>Taxonomy archive page </h1>

	<h1><?php the_title();?></h1>
	<?php the_post_thumbnail('medium');?>
	
	
	<?php if (class_exists('MultiPostThumbnails')) :
    MultiPostThumbnails::the_post_thumbnail(
        get_post_type(),
        'secondary-image'
    );
endif; ?>	



<?php get_footer();?>
