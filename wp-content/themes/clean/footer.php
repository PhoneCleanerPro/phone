<section>
    <footer>
      <div class="container">
        <div class="ftr_tp">
		<?php global $data;?>
		<?php if($data['footer_des']):?>
		 <p><?php echo $data['footer_des']?><span><?php echo $data['call']?></span></p>		
		<?php else:?>
		 <p>contact us now for a free non obligation quote and to discuss your requirements<span>CALL NOW: 0788 876 8563</span></p>
		<?php endif;?>
		
		
		
         
        </div>
        <div class="ftr_md">
          <div class="row">
            <div class="col-sm-3">
              <h2>cleaning services</h2>
              <ul>
<?php
global $query_string;
query_posts($query_string . "post_type=service&post_status=publish&posts_per_page=10");
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>	
<?php endwhile;
endif; ?>

              </ul>
            </div>
            <div class="col-sm-3">
              <h2>Help</h2>
              <ul>
				<li><?php wp_list_pages('sort_column=menu_order&include=18,20,14,16,&title_li=&depth=1' ); ?></li>
              </ul>
            </div>
            <div class="col-sm-3">
              <h2>page links</h2>
              <ul>			 
			  <li><?php wp_list_pages('sort_column=menu_order&include=2,7,14,16,&title_li=&depth=1' ); ?></li>			  
              </ul>
            </div>
            <div class="col-sm-3">
              <h2>follow us</h2>
              <ul class="social">
			  <?php global $data;?>
			  <?php if($data['social_link']):?>			  
			  	<li><a href="#"><img src="<?php echo $data[''];?>" alt="twitter"></a></li>

 
			  <?php else:?>

			  <?php endif;?>
			  
			  
			  
			  
			  

              </ul>
            </div>
          </div>
        </div>
		<?php global $data;?>
		<?php if($data['copy']):?>
		  <p><?php echo $data['copy'];?></p>
		<?php else:?>
		  <p>Copyright &copy; 2016 Tim & Wilson. Powered by NinjaAnimations.com</p>
		<?php endif;?>      
      </div>
    </footer>
  </section>
</div>
<?php wp_footer();?>
</body>
</html>