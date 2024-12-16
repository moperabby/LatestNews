<?php global $themesbazar; ?>


		
		

		    
			<!-------------- section eight start ------------------>

			<section class="section_eight">
			
				<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>

					<?php if($themesbazar['catagory-style'] ==1 ): ?>
					
						<?php
						$category_name = get_the_category_by_id($themesbazar['cat-twelve']);
						$category_name_link = get_category_link($themesbazar['cat-twelve']);
						?>
						
						<div class="cat_title">
							<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?></a>
						</div>
						
							<?php endif; ?>   
					<?php if($themesbazar['catagory-style'] == 2 ): ?>
						
						<?php
						$category_name = get_the_category_by_id($themesbazar['cat-twelve']);
						$category_name_link = get_category_link($themesbazar['cat-twelve']);
							?>
							
							<div class="cat_title_two">
								<div id="pointer"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php echo $category_name;?> </a></div>
							</div>
							
							<?php endif; ?>   
					<?php if($themesbazar['catagory-style'] == 3 ): ?>
						
						<?php
						$category_name = get_the_category_by_id($themesbazar['cat-twelve']);
						$category_name_link = get_category_link($themesbazar['cat-twelve']);
							?>
							
						<div class="cat_title_three">
							<a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a>
						</div>
					
						<?php endif; ?>   
					<?php if($themesbazar['catagory-style'] == 4 ): ?>
						
						<?php
						$category_name = get_the_category_by_id($themesbazar['cat-twelve']);
						$category_name_link = get_category_link($themesbazar['cat-twelve']);
							?>
							
						<div class="cat_title_four">
							<span><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a></span>
						</div>
					
					<?php endif; ?>

					<div class="row">
						<div class="col-md-3 col-sm-3">

							<?php
								$category_name = get_the_category_by_id($themesbazar['cat-twelve']);
								$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>2,
									'offset' => 1,
									'category_name' => $category_name,

								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
                            <div class="exclisive_news">
                                <div class="exclisive_news_image">
                                    <?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?>
                                </div>
                                <div class="content-padding">
                                    <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
                                </div>
                            </div>
							
							<?php endwhile?>
							
						</div>
						<div class="col-md-6 col-sm-6">
							
							<?php
								$category_name = get_the_category_by_id($themesbazar['cat-twelve']);
								$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>1,
									'offset' => 0,
									'category_name' => $category_name,

								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
							<div class="exclisive_news">
                                <div class="exclisive_news_image">
                                    <?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?>
                                </div>
                                <div class="content-padding">
                                    <h4 class="hadding_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
                                    <div class="content-dtls">
                                        <?php echo excerpt($themesbazar['excerpt-cat-twelve']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
                                    </div>
                                </div>
                            </div>
							
							<?php endwhile?>

						</div>
						<div class="col-md-3 col-sm-3">
							
							<?php
								$category_name = get_the_category_by_id($themesbazar['cat-twelve']);
								$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>2,
									'offset' => 3,
									'category_name' => $category_name,

								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							
                            <div class="exclisive_news">
                                <div class="exclisive_news_image">
                                    <?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?>
                                </div>
                                <div class="content-padding">
                                    <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
                                </div>
                            </div>
							
							<?php endwhile?>
							
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
		                        <?php dynamic_sidebar('widget_area_15')?>
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_16')?>
		                    </div>
		                </div>
		            </div>
	            </div>
            </section>

        <!--------------add option close---------------->