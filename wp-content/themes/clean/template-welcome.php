<?php get_header();
/*
Template Name: Font-Page Template
*/
?>
  <section>
  <?php global $data;?>
<?php if($data['banner_image']) :?>
<div class="main_banner"> <img class="img-responsive" src="<?php echo $data['banner_image'];?>" alt="bannera">
<?php else: ?>
<div class="main_banner"> <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/banner.png" alt="banner">
<?php endif;?>    
      <div class="container">
        <div class="ban_con_main">
          <div class="row">
            <div class="col-sm-8">			
<?php global $data;?>
<?php if($data['switch_ex4']) :?>
<h2><?php echo $data['fast_title'];?></h2>
<h3><?php echo $data['sec_title'];?></h3>
<p><?php echo $data['description'];?></p>		
<?php else: ?>
<?php endif;?> 

              <div class="col-sm-6 cnt_tp_pad">
                <div class="con_sld_tp">
                  <h3>Quick Contact Form <span>Call Us anytime !</span></h3>
                </div>
					<?php echo do_shortcode( '[contact-form-7 id="43" title="Quick Contact Form"]' );?>
              </div>
            </div>
			  <?php global $data;?>
			<?php if($data['banner_top_image']) :?>
			<div class="col-sm-4"> <img style="padding-top:14px" src="<?php echo $data['banner_top_image'];?>" alt="banner_top_image"> </div>
			<?php else: ?>
			<div class="col-sm-4"> <img style="padding-top:14px" src="<?php echo get_stylesheet_directory_uri();?>/images/main_ban.png" alt="banner_top_image"> </div>
			<?php endif;?> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="contnt_main">
      <div class="container">
        <div class="contnt_main_ttl"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/brush.png" alt="brush">
          <h2>Services we offer</h2>
        </div>
      </div>
      <div class="container-fluid">
	  
<?php 
if (function_exists('get_wp_term_image'))
{
    $meta_image1 = get_wp_term_image(7); 
    $meta_image2 = get_wp_term_image(6); 
    $meta_image3 = get_wp_term_image(9); 
    $meta_image4 = get_wp_term_image(8); 
}
?>

<?php
$texonomy_id='themes_categories';
$queried_term = get_query_var($texonomy_id);
$term= get_terms($texonomy_id, 'slug='.$queried_term);
if ($term) {
  foreach($term as $terms) {
   $cat_name[]=$terms->name;

  }
}
?>

       <div class="col-sm-3">
          <div class="main_img"> <img src="<?php echo $meta_image1;?>" alt="">
            <div class="main_bdr">
              <h3>home spring cleaning</h3>
              <a href="<?php echo get_term_link( 6);?>">view details</a> </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="main_img"> <img src="<?php echo $meta_image2;?>" alt="baby">
            <div class="main_bdr">
              <h3>general cleaning</h3>
              <a href="<?php echo get_term_link( 7);?>">view details</a> </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="main_img"> <img src="<?php echo $meta_image3;?>" alt="baby">
            <div class="main_bdr">
              <h3>oven cleaning</h3>
              <a href="<?php echo get_term_link( 9);?>">view details</a> </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="main_img"> <img src="<?php echo $meta_image4;?>" alt="baby">
            <div class="main_bdr">
              <h3>proffessional office cleaning</h3>
              <a href="<?php echo get_term_link( 8);?>">view details</a> </div>
          </div>
        </div>
		
      </div>
    </div>
  </section>
  <section>
    <div class="contnt_ofr">
      <div class="container">
        <div class="col-sm-4">
<?php global $data;?>
		<?php if($data['media_upload_356']) :?>
				<div class="contnt_ofr_lft"> <img src="<?php echo $data['media_upload_356'];?>" alt="main_women"> </div>
		<?php else: ?>
				<div class="contnt_ofr_lft"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/main_women.png" alt="main_women"> </div>
<?php endif;?>
        </div>
        <div class="col-sm-8">
          <div class="contnt_ofr_rgt">
		  <?php global $data;?>
		<?php if($data['special_title']) :?>
				<h2><?php echo $data['special_title'];?></h2>
		<?php else: ?>
			<h2>special offer</h2>
		<?php endif;?> 
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/big_brush.png" alt="main_women">
		 
		<?php if($data['special_desc']):?>
		<p><?php echo $data['special_desc'];?><br>
		<?php else:?>
           <p>Sign up for a contract for 3 months or more and you get 10% off your fee for the 1st month<br>
			<b>New customers only</b></p>
		<?php endif;?>
		
		
		
		
		


            <div class="cnt_frm">
              <h2><?php echo $data['special_title'];?></h2>
              <p>It’s free and takes less than 30 seconds.</p>
				  <!--<div class="cnt_contact">
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Name">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Phone">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Email">
					</div>
					<div class="form-group chk_bx">
					  <input type="checkbox" class="form-control">
					  <p>I agree to the <a href="#">Terms of Use.</a></p>
					  <div class="btn_sbmt"> <a href="#">SUBMIT</a> </div>
					</div>
				  </div>-->
				 <?php echo do_shortcode( '[contact-form-7 id="42" title="special offer"]' );?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="ofr_stf">
      <div class="container">
        <div class="main">
          <div class="col-sm-3">
            <div class="stf_dtls">			
			<?php global $data;?>
		<?php if($data['staff_title']) :?>
					 <h2><?php echo $data['staff_title'];?></h2>
			<?php else: ?>
					 <h2>Clever Staffs</h2>
		<?php endif;?>

		<?php global $data;?>
		<?php if($data['staff_desc']) :?>
					 <p><?php echo $data['staff_desc'];?></p>
			<?php else: ?>
              <p>Totam rem aperiam, eaque ipsa quae inventore veritatis quasi architech beatae vitae dicta sunt exleo. nemo enim ipsam voluptatem quia.</p>
		<?php endif;?>
		</div>
          </div>
		  
		  
		  
		<?php
			global $post;
					$args = array('post_type' => 'Staffs','posts_per_page' => '3','order' => 'ASC');
					$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ) ;?>	
				  <div class="col-sm-3">
					<div class="stf_img"> 
						<?php the_post_thumbnail('staffs_image');?>
					</div>
				  </div>

		<?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="serve">
      <div class="container">
        <div class="main">
          <div class="col-md-6">
            <div class="serve_dtls">
			<?php global $data;?>
			<?php if($data['serve'] and $data['serve_desc']):?>
					<h2><?php echo $data['serve'];?></h2>
					<p><?php echo $data['serve_desc'];?></p>
			<?php else:?>
					<h2>industries we serve</h2>
					<p>Architecto beatae vitae dicta sunt explicabo. Nemo emi sai ispam voluptatem quia voluptas sit aspernatur aut odit aut fugit dolores eos qui ratione.</p>
			<?php endif;?>
              <ul>
                <li><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/airport.png" alt="airport"></span>Airports & Airlines</li>
                <li><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/school.png" alt="Schools"></span>Schools & Universities</li>
                <li><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/auto.png" alt="Auto"></span>Auto Dealerships</li>
                <li><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/pen.png" alt="Medical"></span>Medical Facilities</li>
                <li><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/sport.png" alt="Sports"></span>Sports & Fitness Centers</li>
                <li><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/venues.png" alt="Venues"></span>Entertainment Venues</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer()?>	