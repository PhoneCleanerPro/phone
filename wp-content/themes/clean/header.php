<?php
/**
Theme Name: Clean
Theme URI: https://codingavatar.com
Author: GRAND SOFT TECHNOLOGY
Author URI: https://codeavater.com/
Description:Clean business theme 
Version: 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta <?php bloginfo( 'charset' ); ?>>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if (is_single() || is_page()) { wp_title('',true); } else { bloginfo('description'); } ?> <?php bloginfo('name');?></title>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
<?php wp_head(); ?>
</head>
<body>
<div class="mainwrapper">
  <section>
    <header>
      <div class="header_top">
        <div class="container">
          <h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clock.png" alt=""> Working Hours: Mon-Sat(8:00AM-6:00pm)</h4>
        </div>
      </div>
      <div class="header_logo">
        <div class="container">
          <div class="col-sm-6">
            <div class="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" alt="logo"></a></div>
          </div>
          <div class="col-sm-6">
            <div class="mob_con"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/mobile.png" alt="logo">
              <p>Call to Schedule your free !<br>
                <span>07832 967 952</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="header_menu">
        <div class="container">
          <div class="main_nav">
            <nav class="navbar navbar-default">
              <div class="container-fluid"> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php
						wp_nav_menu(array(
						'menu_class' => 'nav navbar-nav',
						'container' => false, 	
						'theme_location' => 'menu_name',
						'fallback_cb' => 'false', 
						'walker' => new wp_bootstrap_navwalker(),
						'depth' => 0
						));
				?>	
                  <div class="seach"> <a data-toggle="modal" data-target=".bs-example-modal-sm" href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/search.png" alt="search"></a> </div>
                </div>
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content srch">
                      <input type="text" placeholder="Search">
                    </div>
                  </div>
                </div>
                
                <!-- /.navbar-collapse --> 
              </div>
              <!-- /.container-fluid --> 
            </nav>
            <div class="ab_ttl">
              <p>Free instant Quote</p>
            </div>
          </div>
        </div>
      </div>
    </header>
  </section>
