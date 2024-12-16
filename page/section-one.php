<?php global $themesbazar; ?>

        <!------------ Section One Start -------------->


        <section class="section_one">

				<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
				
        		<div class="row">

        			<div class="col-md-6 col-sm-6">
					
					<?php
						$category_name = get_the_category_by_id($themesbazar['cat-one']);
						$themes_bazar = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' =>1,
							'offset' => 0,
							'category_name' => $category_name,

						));
						while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
        				<div class="Name">
							<div class="image"> 
								<a href="<?php the_permalink()?>">
									<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?></a>
								<h4 class="overly_hadding_1"> <a href="<?php the_permalink()?>"><?php the_title() ?></a> </h4>
							</div>
                        </div>
						
					<?php endwhile?>
						
	        		</div>
	        		<div class="col-md-6 col-sm-6">
	        			<div class="overly_section">
	        				<div class="row">
							
							<?php
								$category_name = get_the_category_by_id($themesbazar['cat-one']);
								$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>2,
									'offset' => 1,
									'category_name' => $category_name,

								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						
	                            <div class="col-md-6 col-sm-6">
	                                <div class="Name">
										<div class="image"> 
											<a href="<?php the_permalink()?>">
												<?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
												<?php } ?></a>
											<h4 class="overly_hadding_2"> <a href="<?php the_permalink()?>"><?php the_title() ?></a> </h4>
										</div>
	                                </div>
	                            </div>
	                            
								<?php endwhile?>
								
	                        </div>

	                        <div class="row">
							
							<?php
								$category_name = get_the_category_by_id($themesbazar['cat-one']);
								$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>2,
									'offset' => 3,
									'category_name' => $category_name,

								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						
	                            <div class="col-md-6 col-sm-6">
	                                <div class="Name">
										<div class="image"> 
											<a href="<?php the_permalink()?>">
												<?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
												<?php } ?></a>
											<h4 class="overly_hadding_2"> <a href="<?php the_permalink()?>"><?php the_title() ?></a> </h4>
										</div>
	                                </div>
	                            </div>
	                            
								<?php endwhile?>
								
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
		                        <?php dynamic_sidebar('widget_area_01')?>
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_02')?>
		                    </div>
		                </div>
		            </div>
	            </div>
            </section>

        <!--------------add option close---------------->


         <!------------ Section One Close -------------->