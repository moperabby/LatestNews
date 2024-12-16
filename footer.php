<?php global $themesbazar; ?>

	        <!------------ Footer Section Start -------------->

	        <section class="footer_section">
			
	        	<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
				
	        			<div class="footer-border">
		                    <div class="row">
		                    
		                        <div class="col-xs-4 col-sm-2 col-md-2">
		                            <div class="footer-menu">
		                                
		                                    <?php
											wp_nav_menu( array('theme_location' => 'footermenuone',
											)); ?>
		                                
		                            </div>
		                        </div>
		                        <div class="col-xs-4 col-sm-2 col-md-2">
		                            <div class="footer-menu">
		                                
		                                    <?php
											wp_nav_menu( array('theme_location' => 'footermenutwo',
											)); ?>
		                                
		                            </div>
		                        </div>
		                        <div class="col-xs-4 col-sm-2 col-md-2">
		                            <div class="footer-menu">
		                                
		                                    <?php
											wp_nav_menu( array('theme_location' => 'footermenuthree',
											)); ?>
		                                
		                            </div>
		                        </div>
		                        <div class="col-xs-4 col-sm-2 col-md-2">
		                            <div class="footer-menu">
		                                
		                                    <?php
											wp_nav_menu( array('theme_location' => 'footermenufour',
											)); ?>
		                                
		                            </div>
		                        </div>
		                        <div class="col-xs-4 col-sm-2 col-md-2">
		                            <div class="footer-menu">
		                                
		                                    <?php
											wp_nav_menu( array('theme_location' => 'footermenufive',
											)); ?>
		                                
		                            </div>
		                        </div>
		                        <div class="col-xs-4 col-sm-2 col-md-2">
		                            <div class="footer-menu">
		                               
		                                    <?php
											wp_nav_menu( array('theme_location' => 'footermenusix',
											)); ?>
		                                
		                            </div>
		                        </div>

		                    </div>
		                </div>

		                <div class="row">
		                    <div class="footer-text">
		                        <div class="col-md-6 col-sm-6 menu-border">
		                            <div class="editorial-text">
		                                <?php echo $themesbazar['editorial']?>
		                            </div>
		                        </div>
		                        <div class="col-md-6 col-sm-6">
		                            <div class="address-text">
		                                <?php echo $themesbazar['editorial-tow']?>
		                            </div>
		                        </div>
		                    </div>
		                </div>
	        	</div>
	        </section>




        <!--==================================
               footer-scrool-section start
         ===================================-->
         <?php if($themesbazar['footer_scroll'] == 1 ): ?>
		 
        <div class=" footer-scrool">                          
            <div class=" footer-scrool-1">
               <?php echo $themesbazar['footer_scroll_title'] ?>
            </div>
            <div class="footer-scrool-2">
                <?php if($themesbazar['footer_scroll_set'] ==1 ): ?>
					
				<marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">
					<?php 
					$theme_sbazar = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => $themesbazar['how_ftr_scroll'],
					));
					while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
					<i class="<?php echo $themesbazar['footer-scrool-icon'] ?>" aria-hidden="true"></i>
					<a href="<?php the_permalink()?>"><?php the_title();?></a>
					<?php endwhile; ?>
					</marquee>
				
				<?php endif; ?>
				<?php if($themesbazar['footer_scroll_set'] == 2 ): ?>
				
				<marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">
					<?php 
					$category_name = get_the_category_by_id($themesbazar['ftr_scroll_cat']);
					$theme_sbazar = new WP_Query(array(
					'post_type' => 'post',
					'category_name' => $category_name,
					'posts_per_page' => $themesbazar['how_ftr_scroll'],
					));
					while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
					<i class="<?php echo $themesbazar['footer-scrool-icon'] ?>" aria-hidden="true"></i>
					<a href="<?php the_permalink()?>"><?php the_title();?></a>
					<?php endwhile; ?>
					</marquee>

			   <?php endif; ?>
			   <?php if($themesbazar['footer_scroll_set'] == 3 ): ?>
			   <marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()"><?php echo $themesbazar['ftr_scroll_content'] ?></marquee>
			   <?php endif; ?>
            </div>
        </div> 
		
		<?php endif; ?> 
 <?php if($themesbazar['footer_scroll'] == 2 ): ?>
	   <?php endif; ?>


        <script>
			window.onscroll = function() {myFunction()};

			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction() {
			  if (window.pageYOffset > sticky) {
			    header.classList.add("sticky");
			  } else {
			    header.classList.remove("sticky");
			  }
			}
		</script>

				
				
				

	</body>
</html>