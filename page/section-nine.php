<?php global $themesbazar; ?>





		    <!-------------- section nine start ------------------>


		    <section class="section_nine">
			
		    	<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
				
		    		<div class="row">
		    			
		    			<div class="col-md-6 col-sm-6">
							
							<?php if($themesbazar['catagory-style'] ==1 ): ?>						

								<div class="cat_title">
									<p> <i class="fa fa-camera" aria-hidden="true"></i>
									<?php echo $themesbazar['photo']?> </p>
								</div>
								
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 2 ): ?>
								
									
									<div class="cat_title_two">
										<div id="pointer">
											<i class="fa fa-camera"></i>  <?php echo $themesbazar['photo']?>
										</div>
									</div>
									
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 3 ): ?>
													
									
								<div class="cat_title_three">
									<i class="fa fa-camera"></i>  <?php echo $themesbazar['photo']?>
								</div>
							
								<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 4 ): ?>
																
									
							<div class="cat_title_four">
								  <span><i class="fa fa-camera"></i> <?php echo $themesbazar['photo']?> </span>
							</div>
							
							
						<?php endif; ?>
						
	                        
	                     
	                        <div class="photo_gallary">
	                            <div id="myCarousell" class="carousel slide" data-ride="carousel">
	                              <!-- Wrapper for slides -->
	                                <div class="carousel-inner" role="listbox">
									
									<?php 
									$gallary_active = new WP_Query(array(
										'post_type' => 'photogallery',
										'posts_per_page' => 1,
										'offset'     =>0,
									));
									while($gallary_active->have_posts()) : $gallary_active->the_post(); ?>
									
	                                    <div class="item active">
	                                        <div class="Name">
	                                            <?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
												<?php } ?>
	                                            <h4 class="overly_hadding_1"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
	                                        </div>
	                                    </div>
										
										<?php endwhile?>
										
										<?php 
										$how_post= $themesbazar['how-photo'];
										$total_how_post=$how_post-1;
										$themes_bazar = new WP_Query(array(
											'post_type' => 'photogallery',
											'posts_per_page' => $total_how_post,
											'offset'     =>1,
										));
										while($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
										
	                                    <div class="item">
	                                        <div class="Name">
	                                            <?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
												<?php } ?>
	                                            <h4 class="overly_hadding_1"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
	                                        </div>
	                                    </div>
										
	                                    <?php endwhile?>
										
	                                </div>
	                                                          <!-- Controls -->
	                                 <a class="left carousel-control" href="#myCarousell" role="button" data-slide="prev">
	                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	                                <span class="sr-only">Previous</span>
	                                 </a>
	                                 <a class="right carousel-control" href="#myCarousell" role="button" data-slide= "next">
	                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	                                    <span class="sr-only">Next</span>
	                                 </a>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-md-3 col-sm-3">
	                    	
							<?php if($themesbazar['catagory-style'] ==1 ): ?>
					
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-thirteen']);
								$category_name_link = get_category_link($themesbazar['cat-thirteen']);
								?>
								
								<div class="cat_title">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?></a>
								</div>
								
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 2 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-thirteen']);
								$category_name_link = get_category_link($themesbazar['cat-thirteen']);
									?>
									
									<div class="cat_title_two">
										<div id="pointer"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php echo $category_name;?> </a></div>
									</div>
									
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 3 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-thirteen']);
								$category_name_link = get_category_link($themesbazar['cat-thirteen']);
									?>
									
								<div class="cat_title_three">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a>
								</div>
							
								<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 4 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-thirteen']);
								$category_name_link = get_category_link($themesbazar['cat-thirteen']);
									?>
									
								<div class="cat_title_four">
									<span> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a></span>
								</div>
							
							<?php endif; ?>
					
							<?php
								$category_name = get_the_category_by_id($themesbazar['cat-thirteen']);
								$how_cat= $themesbazar['how_post_thirteen'];
								$total_how_cat=$how_cat-0;
								$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' => $total_how_cat,
									'offset' => 0,
									'category_name' => $category_name,

								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
										
                            <div class="small-img tab-border">
                                <?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
                               <h4 class="hadding_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
							</div>
                            
							<?php endwhile?>

                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="more_news"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3 col-sm-3">
	                    	
							<?php if($themesbazar['catagory-style'] ==1 ): ?>
					
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-fourteen']);
								$category_name_link = get_category_link($themesbazar['cat-fourteen']);
								?>
								
								<div class="cat_title">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?></a>
								</div>
								
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 2 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-fourteen']);
								$category_name_link = get_category_link($themesbazar['cat-fourteen']);
									?>
									
									<div class="cat_title_two">
										<div id="pointer"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php echo $category_name;?> </a></div>
									</div>
									
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 3 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-fourteen']);
								$category_name_link = get_category_link($themesbazar['cat-fourteen']);
									?>
									
								<div class="cat_title_three">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a>
								</div>
							
								<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 4 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-fourteen']);
								$category_name_link = get_category_link($themesbazar['cat-fourteen']);
									?>
									
								<div class="cat_title_four">
									<span> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a></span>
								</div>
							
							<?php endif; ?>
					
							<?php
								$category_name = get_the_category_by_id($themesbazar['cat-fourteen']);
								$how_cat= $themesbazar['how_post_fourteen'];
								$total_how_cat=$how_cat-0;
								$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' => $total_how_cat,
									'offset' => 0,
									'category_name' => $category_name,

								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
										
                            <div class="small-img tab-border">
                                <?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
                               <h4 class="hadding_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
							</div>
                            
							<?php endwhile?>

                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="more_news"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
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
		                        <?php dynamic_sidebar('widget_area_17')?>
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_18')?>
		                    </div>
		                </div>
		            </div>
	            </div>
            </section>

        <!--------------add option close---------------->