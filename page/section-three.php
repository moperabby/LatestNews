<?php global $themesbazar; ?>

  

	        <!------------ Section Three Start -------------->


	        <section class="section_three">
			
	        	<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>

	                <div class="row">
	                    <div class="col-md-6 col-sm-6">
	                        <div class="section_three_bg">
							
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-three']);
								$category_name_link = get_category_link($themesbazar['cat-three']);
									?>
							
	                            <div class="fixed_cat_title">
	                                <span><a href="<?php echo esc_url($category_name_link);?>"><?php echo $category_name;?></a></span>
	                                <span2><a href="<?php echo esc_url($category_name_link);?>"><?php echo $themesbazar['all_news']?> <i class="fa fa-angle-double-right"></i></a></span2>
	                            </div>

	                            <div class="row">
	                                <div class="col-md-6">
									
										<?php
										$category_name = get_the_category_by_id($themesbazar['cat-three']);
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' =>1,
											'offset' => 0,
											'category_name' => $category_name,

										));
										while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
	                                    <div class="leadnews">
	                                    	<div class="leadnews_image">
	                                        	<?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
												<?php } ?>
	                                        </div>
	                                        <div class="content-padding">
	                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
	                                            <div class="content-dtls">
	                                                <?php echo excerpt($themesbazar['excerpt-cat-three']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
	                                            </div>
	                                        </div>
	                                    </div>
										
										<?php endwhile?>
										
	                                </div>
	                                <div class="col-md-6">
									
									<?php
										$category_name = get_the_category_by_id($themesbazar['cat-three']);
										$how_cat= $themesbazar['how_post_three'];
										$total_how_cat=$how_cat-1;
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' => $total_how_cat,
											'offset' => 1,
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
	                    </div>

	                    <div class="col-md-6 col-sm-6">
	                        <div class="section_three_bg">
							
								<?php
								$category_name = get_the_category_by_id($themesbazar['cat-four']);
								$category_name_link = get_category_link($themesbazar['cat-four']);
									?>
							
	                            <div class="fixed_cat_title">
	                                <span><a href="<?php echo esc_url($category_name_link);?>"><?php echo $category_name;?></a></span>
	                                <span2><a href="<?php echo esc_url($category_name_link);?>"><?php echo $themesbazar['all_news']?> <i class="fa fa-angle-double-right"></i></a></span2>
	                            </div>

	                            <div class="row">
	                                <div class="col-md-6">
									
										<?php
										$category_name = get_the_category_by_id($themesbazar['cat-four']);
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' =>1,
											'offset' => 0,
											'category_name' => $category_name,

										));
										while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
	                                    <div class="leadnews">
	                                    	<div class="leadnews_image">
	                                        	<?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
												<?php } ?>
	                                        </div>
	                                        <div class="content-padding">
	                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
	                                            <div class="content-dtls">
	                                                <?php echo excerpt($themesbazar['excerpt-cat-four']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
	                                            </div>
	                                        </div>
	                                    </div>
										
										<?php endwhile?>
										
	                                </div>
	                                <div class="col-md-6">
									
									<?php
										$category_name = get_the_category_by_id($themesbazar['cat-four']);
										$how_cat= $themesbazar['how_post_four'];
										$total_how_cat=$how_cat-1;
										$themes_bazar = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' => $total_how_cat,
											'offset' => 1,
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
		                        <?php dynamic_sidebar('widget_area_05')?>
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_06')?>
		                    </div>
		                </div>
		            </div>
	            </div>
            </section>

        <!--------------add option close---------------->
			
