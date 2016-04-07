<?php
/**
 * Template Name:service page

 */

get_header(); ?>
  <section>
    <div class="banner"> <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/banner.png" alt="banner">
      <div class="container">
        <div class="ban_con">
          <div class="row">
            <div class="col-sm-4">
			<?php 
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
			?>
              <h2><?php echo $term->name; ?></h2>
            </div>
            <div class="col-sm-8"> <img style="padding-top:15px" class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/spring_girl.png" alt="man"> </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="contnt">
      <div class="container">
        <div class="main">
          <div class="col-sm-4">
            <div class="lft_sdbar">
              <h2>Services Provided</h2>
              <ul>			  
			  <li><a href="javascript:void(0)">commercial Cleaning</a></li>
                <li><a href="javascript:void(0)">window Cleaning</a></li>
                <li><a href="javascript:void(0)">green Cleaning</a></li>
                <li><a href="javascript:void(0)">residential Cleaning</a></li>
                <li><a href="javascript:void(0)">restaurant Cleaning</a></li>
                <li><a href="javascript:void(0)">ceramic tile Cleaning</a></li>
                <li><a href="javascript:void(0)">floor care Cleaning</a></li>
                <li><a href="javascript:void(0)">other special Services</a></li>
              </ul>
			  <?php if ( ! dynamic_sidebar( 'more_info' ) ) : ?>
			                <div class="con_info">
               <h3>MORE INFORMATION</h3>
                <p>Tim Wilson,<br>
                  New Street CA 7854, Park Avenue<br>
                  Sydney 25.<br>
                  +(01) 800 527 4800<span>timwilson@gmail.com</span></p>				  
              </div>
			  <?php endif;?>
            </div>
          </div>


<div class="col-sm-8">

<?php 

$i = 1;
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php if ($i == 1) { ?>
           <div class="windw_contnt">
              <h2><?php the_title();?></h2>
			  <?php the_post_thumbnail('full');?>
			  <?php the_content(); ?>
			  </div>	
<div class="row">
<?php } elseif ($i == 2) { ?>

              <div class="col-sm-6">
					<div class="wnd_cnt">	
					<?php the_post_thumbnail('medium');?>
					  <h3><?php the_title();?></h3>
						<?php the_content(); ?>
					</div>
              </div>  
<?php } else { ?>			
				<div class="col-sm-6">
					<div class="wnd_cnt">
					<?php the_post_thumbnail('medium');?>
					  <h3><?php the_title();?></h3>
					 <?php the_content();?>
					</div>
              </div>
			  
			  <div class="wnd_btn"> <br /><br /><br /><a href="<?php the_permalink();?>">Schedule your window cleaning estimate today!sfsdfsd</a> </div>		
			  
			  </div>
<?php } ?>
    <?php $i++; ?>
    <?php endwhile; ?>
<?php endif; ?>
		   
		  

    	    


		  
        </div>
		
		
      </div>
    </div>
  </section>
  <section>
<?php get_footer();?>
