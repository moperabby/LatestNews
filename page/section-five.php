<?php global $themesbazar; ?>

	 <!-------------- section five start ------------------>


		    <section class="section_five">
			
		        <?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
				
		            <div class="row">
		                <div class="col-md-8 col-sm-7">
						
						<?php
						$category_name = get_the_category_by_id($themesbazar['cat-eight']);
						$category_name_link = get_category_link($themesbazar['cat-eight']);
							?>
							
						<div class="gallery-title">
							<a href="<?php echo esc_url($category_name_link);?>"><?php echo $category_name;?></a>
						</div>
		                    

		                    <div class="slider-padding">
		                        <div class="slide-img">
								
								<?php
									$category_name = get_the_category_by_id($themesbazar['cat-eight']);
									$how_cat= $themesbazar['how_post_eight'];
									$total_how_cat=$how_cat-0;
									$themes_bazar = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' => $total_how_cat,
										'offset' => 0,
										'category_name' => $category_name,

									));
									while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
									<div class="mySlides" style="width:100%">
										<div class="row">
											<div class="col-md-5">
												<div class="photo-title">
													<a href="<?php the_permalink()?>"><?php the_title() ?></a>
												</div>
												<div class="photo-content">
													  <?php echo excerpt($themesbazar['excerpt-cat-eight']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
												</div>
											</div>
											   
											<div class="col-md-7">
												<div class="slide-img">
													<?php if(has_post_thumbnail()){ 
													the_post_thumbnail();}
													else{?>
													<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
													<?php } ?>
												</div>               
											</div>               
										</div>
									</div>
										
									<?php endwhile?>
										
		                        </div>
		                                    
		                    </div>

		                    <div class="row">
		                        <div class="col-md-12">
		                            <div class="slider-content-pic owl-carousel">      
		                                
									<?php
									$x=1;
									$category_name = get_the_category_by_id($themesbazar['cat-eight']);
									$how_cat= $themesbazar['how_post_eight'];
									$total_how_cat=$how_cat-0;
									$themes_bazar = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' => $total_how_cat,
										'offset' => 0,
										'category_name' => $category_name,
									));
									while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									<?php $xx=$x++ ?>
									
		                                 <div class="slide-small-img">
		                                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="image" style="width:100%" onclick="currentDiv(<?php echo $xx; ?>)">
		                                    <div class="small-pto-title">
		                                       <?php echo the_title();?>
		                                    </div>
		                                </div>
		                                
										<?php endwhile?>

		                            </div>
		                        </div>
		                    </div>

		        <!--==================================
		                clickable  jquary  start
		        ===================================-->

		                    <script>
		                            var slideIndex = 1;
		                            showDivs(slideIndex);

		                            function plusDivs(n) {
		                              showDivs(slideIndex += n);
		                            }

		                            function currentDiv(n) {
		                              showDivs(slideIndex = n);
		                            }

		                            function showDivs(n) {
		                              var i;
		                              var x = document.getElementsByClassName("mySlides");
		                              var dots = document.getElementsByClassName("demo");
		                              if (n > x.length) {slideIndex = 1}
		                              if (n < 1) {slideIndex = x.length}
		                              for (i = 0; i < x.length; i++) {
		                                 x[i].style.display = "none";
		                              }
		                              for (i = 0; i < dots.length; i++) {
		                                 dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
		                              }
		                              x[slideIndex-1].style.display = "block";
		                              dots[slideIndex-1].className += " w3-opacity-off";
		                            }
		                        </script>

		        <!--==================================
		               clickable  jquary  close
		        ===================================-->

		                </div>
		                <div class="col-md-4 col-sm-5">
		                    <div class="video-bg">
		                        
								<?php
							$category_name = get_the_category_by_id($themesbazar['cat-nine']);
							$category_name_link = get_category_link($themesbazar['cat-nine']);
							?>
							
							<div class="gallery-title">
								<a href="<?php echo esc_url($category_name_link);?>"><?php echo $category_name;?></a>
							</div>

		                        <div class="normal-img">
									
									<?php
										$category_name = get_the_category_by_id($themesbazar['cat-nine']);
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' =>1,
											'offset' => 0,
											'category_name' => $category_name,

										));
										while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
		                            <a href="<?php the_permalink()?>">
									<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?></a>
		                            <h4 class="defalt_hadding"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
									
									<?php endwhile?>
													
									
									<?php
										$category_name = get_the_category_by_id($themesbazar['cat-nine']);
										$how_cat= $themesbazar['how_post_nine'];
										$total_how_cat=$how_cat-1;
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' => $total_how_cat,
											'offset' => 1,
											'category_name' => $category_name,

										));
										while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
								
		                            <div class="little-img border">
		                                <?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
										else{?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
										<?php } ?>
		                                <h4 class="defalt_hadding"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
		                            </div>
		                            
									<?php endwhile?>
									
		                        <div class="video-more-news">
		                            <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?></a>
		                        </div>
		                    </div>

		                </div>
		            </div>
		        </div>
		    </section>
			
			
			<!--------------add option start-------------->

            <section class="widget_section">
	            
				<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
					
		            <div class="row">
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_09')?>
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_10')?>
		                    </div>
		                </div>
		            </div>
	            </div>
            </section>

        <!--------------add option close---------------->