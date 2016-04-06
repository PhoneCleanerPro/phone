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
				<!--<?php wp_list_categories(array('taxonomy' => 'themes_categories'));?>-->
                <li><a href="javascript:void(0)">House Cleaning</a></li>
                <li><a href="javascript:void(0)">commercial Cleaning</a></li>
                <li><a href="javascript:void(0)">window Cleaning</a></li>
                <li><a href="javascript:void(0)">green Cleaning</a></li>
                <li><a href="javascript:void(0)">residential Cleaning</a></li>
                <li><a href="javascript:void(0)">restaurant Cleaning</a></li>
                <li><a href="javascript:void(0)">ceramic tile Cleaning</a></li>
                <li><a href="javascript:void(0)">floor care Cleaning</a></li>
                <li><a href="javascript:void(0)">other special Services</a></li>
              </ul>
              <div class="con_info">
                <h3>MORE INFORMATION</h3>
                <p>Tim Wilson,<br>
                  New Street CA 7854, Park Avenue<br>
                  Sydney 25.<br>
                  +(01) 800 527 4800<span>timwilson@gmail.com</span></p>
              </div>
            </div>
          </div>


<div class="col-sm-8">
		<?php 	$i=0;	while (have_posts()) : the_post();?>

		   
		  
 <?php if($i==1) {  ?>
            <div class="windw_contnt">
              <h2><?php the_title();?></h2>
			  <?php the_post_thumbnail();?>
			  <?php the_content(); ?>

            </div>
			    
 <?php }if($i==2){ ?>
<div class="row">
              <div class="col-sm-6">
                <div class="wnd_cnt"><a href="javascript:void(0)"> <img  src="<?php echo get_stylesheet_directory_uri();?>/images/spring_grl.png" alt="window"></a>
                  <h3><a href="javascript:void(0)">Quidem rerum facilis est et expedita distinctio</a></h3>
                  <p>Voluptatem sequi nesciunt. Neque porro quis quaml est, quilas dolorem ipsum quia dolor sit amet, consectetur, adipisci velitar sed quia non numquam eius modi tempora.</p>
                </div>
              </div>             
 <div class="col-sm-6">
                <div class="wnd_cnt"><a href="javascript:void(0)"> <img  src="<?php echo get_stylesheet_directory_uri();?>/images/spring_grl.png" alt="window"></a>
                  <h3><a href="javascript:void(0)">Quidem rerum facilis est et expedita distinctio</a></h3>
                  <p>Voluptatem sequi nesciunt. Neque porro quis quaml est, quilas dolorem ipsum quia dolor sit amet, consectetur, adipisci velitar sed quia non numquam eius modi tempora.</p>
                </div>
              </div>


<?php }?> 
        

        


   
		  
		  		<?php 	$i++; endwhile;?>			
				<?php wp_reset_query();?>     
		           <div class="wnd_btn"> <a href="javascript:void(0)">Schedule your window cleaning estimate today!</a> </div>
          </div>
		  
        </div>
      </div>
    </div>
  </section>
  <section>
<?php get_footer();?>
