<?php get_header();?>
  <section>
    <div class="banner"> <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/banner.png" alt="banner">
      <div class="container">
        <div class="ban_con">
          <div class="row">
            <div class="col-sm-4">
              <h2><?php the_title();?>|Single Post</h2>
            </div>
            <div class="col-sm-8"> <img style="padding-top:15px" class="img-responsive" src="#" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="contnt">
      <div class="container">
        <div class="main">
          <div class="col-sm-12">  
			<?php while(have_posts()): the_post();?>
			<?php the_content();?>
			<a href=" <?php echo  the_permalink(); ?> ">ReadMore</a> 
			<small>Posted:<?php the_time('d M y'); ?> |</small>
			<?php comments_popup_link( 'No comments yet', '1 comment', '% comments');?>
				<?php the_content(); ?>
			<?php endwhile;?>
          </div>
        </div>
      </div>
    </div>
  </section> 
 <?php get_footer();?>