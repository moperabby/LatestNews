<?php global $themesbazar; ?>


	        <!------------ Section Four Start -------------->

	        <section class="section_four">
			
	        	<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
					
	        		<div class="row">
	                    <div class="col-md-4 col-sm-4">
						
						
						<?php if($themesbazar['catagory-style'] ==1 ): ?>
					
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-five']);
								$category_name_link = get_category_link($themesbazar['cat-five']);
								?>
								
								<div class="cat_title">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?></a>
								</div>
								
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 2 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-five']);
								$category_name_link = get_category_link($themesbazar['cat-five']);
									?>
									
									<div class="cat_title_two">
										<div id="pointer"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php echo $category_name;?> </a></div>
									</div>
									
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 3 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-five']);
								$category_name_link = get_category_link($themesbazar['cat-five']);
									?>
									
								<div class="cat_title_three">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a>
								</div>
							
								<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 4 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-five']);
								$category_name_link = get_category_link($themesbazar['cat-five']);
									?>
									
								<div class="cat_title_four">
									<span><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a></span>
								</div>
							
							<?php endif; ?>
						
	                        <div class="box-shadow">
							
								<?php
									$category_name = get_the_category_by_id($themesbazar['cat-five']);
									$themes_bazar = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' =>1,
										'offset' => 0,
										'category_name' => $category_name,

									));
									while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
										
                                <div class="border_image">
                                	<a href="<?php the_permalink()?>">
									<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?></a>
                                </div>
	                            <div class="sec_four_padding border_again">
	                                <h4 class="hadding_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
	                                <div class="content-dtls">
	                                    <?php echo excerpt($themesbazar['excerpt-cat-five']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
	                                </div>
									
									<?php endwhile?>
									
									
									<?php
										$category_name = get_the_category_by_id($themesbazar['cat-five']);
										$how_cat= $themesbazar['how_post_five'];
										$total_how_cat=$how_cat-1;
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' => $total_how_cat,
											'offset' => 1,
											'category_name' => $category_name,

										));
										while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							
	                                <div class="little_img border">
	                                    <?php if(has_post_thumbnail()){ 
											the_post_thumbnail();}
											else{?>
											<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
											<?php } ?>
	                                    <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
	                                </div>
									
									<?php endwhile?>
	                                
	                            </div>

	                            <div class="row">
	                                <div class="col-sm-12 col-md-12">
	                                    <h4 class="more_news"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
	                                </div>
	                            </div>

	                        </div>
	                    </div>

	                    <div class="col-md-4 col-sm-4">
						
						
						<?php if($themesbazar['catagory-style'] ==1 ): ?>
					
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-six']);
								$category_name_link = get_category_link($themesbazar['cat-six']);
								?>
								
								<div class="cat_title">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?></a>
								</div>
								
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 2 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-six']);
								$category_name_link = get_category_link($themesbazar['cat-six']);
									?>
									
									<div class="cat_title_two">
										<div id="pointer"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php echo $category_name;?> </a></div>
									</div>
									
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 3 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-six']);
								$category_name_link = get_category_link($themesbazar['cat-six']);
									?>
									
								<div class="cat_title_three">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a>
								</div>
							
								<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 4 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-six']);
								$category_name_link = get_category_link($themesbazar['cat-six']);
									?>
									
								<div class="cat_title_four">
									<span><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a></span>
								</div>
							
							<?php endif; ?>
						
	                        <div class="box-shadow">
							
								<?php
									$category_name = get_the_category_by_id($themesbazar['cat-six']);
									$themes_bazar = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' =>1,
										'offset' => 0,
										'category_name' => $category_name,

									));
									while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
										
                                <div class="border_image">
                                	<a href="<?php the_permalink()?>">
									<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?></a>
                                </div>
	                            <div class="sec_four_padding border_again">
	                                <h4 class="hadding_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
	                                <div class="content-dtls">
	                                    <?php echo excerpt($themesbazar['excerpt-cat-six']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
	                                </div>
									
									<?php endwhile?>
									
									
									<?php
										$category_name = get_the_category_by_id($themesbazar['cat-six']);
										$how_cat= $themesbazar['how_post_six'];
										$total_how_cat=$how_cat-1;
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' => $total_how_cat,
											'offset' => 1,
											'category_name' => $category_name,

										));
										while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							
	                                <div class="little_img border">
	                                    <?php if(has_post_thumbnail()){ 
											the_post_thumbnail();}
											else{?>
											<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
											<?php } ?>
	                                    <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
	                                </div>
									
									<?php endwhile?>
	                                
	                            </div>

	                            <div class="row">
	                                <div class="col-sm-12 col-md-12">
	                                    <h4 class="more_news"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
	                                </div>
	                            </div>

	                        </div>
	                    </div>





	                    <div class="col-md-4 col-sm-4">
						
						
						<?php if($themesbazar['catagory-style'] ==1 ): ?>
					
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-seven']);
								$category_name_link = get_category_link($themesbazar['cat-seven']);
								?>
								
								<div class="cat_title">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?></a>
								</div>
								
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 2 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-seven']);
								$category_name_link = get_category_link($themesbazar['cat-seven']);
									?>
									
									<div class="cat_title_two">
										<div id="pointer"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php echo $category_name;?> </a></div>
									</div>
									
									<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 3 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-seven']);
								$category_name_link = get_category_link($themesbazar['cat-seven']);
									?>
									
								<div class="cat_title_three">
									<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a>
								</div>
							
								<?php endif; ?>   
							<?php if($themesbazar['catagory-style'] == 4 ): ?>
								
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-seven']);
								$category_name_link = get_category_link($themesbazar['cat-seven']);
									?>
									
								<div class="cat_title_four">
									<span><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a></span>
								</div>
							
							<?php endif; ?>
						
	                        <div class="box-shadow">
							
								<?php
									$category_name = get_the_category_by_id($themesbazar['cat-seven']);
									$themes_bazar = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' =>1,
										'offset' => 0,
										'category_name' => $category_name,

									));
									while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
										
                                <div class="border_image">
                                	<a href="<?php the_permalink()?>">
									<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?></a>
                                </div>
	                            <div class="sec_four_padding border_again">
	                                <h4 class="hadding_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
	                                <div class="content-dtls">
	                                    <?php echo excerpt($themesbazar['excerpt-cat-seven']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
	                                </div>
									
									<?php endwhile?>
									
									
									<?php
										$category_name = get_the_category_by_id($themesbazar['cat-seven']);
										$how_cat= $themesbazar['how_post_seven'];
										$total_how_cat=$how_cat-1;
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' => $total_how_cat,
											'offset' => 1,
											'category_name' => $category_name,

										));
										while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							
	                                <div class="little_img border">
	                                    <?php if(has_post_thumbnail()){ 
											the_post_thumbnail();}
											else{?>
											<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
											<?php } ?>
	                                    <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
	                                </div>
									
									<?php endwhile?>
	                                
	                            </div>

	                            <div class="row">
	                                <div class="col-sm-12 col-md-12">
	                                    <h4 class="more_news"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
	                                </div>
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
		                        <?php dynamic_sidebar('widget_area_07')?>
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_08')?>
		                    </div>
		                </div>
		            </div>
	            </div>
            </section>

        <!--------------add option close---------------->