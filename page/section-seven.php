<?php global $themesbazar; ?>

<!-------------- section seven start ------------------>

		    <section class="section_seven">
			
		    	<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
		    		
		    		<div class="row">
	                    <div class="col-md-12">
	                        <div class="custom-tab manu-tavn">
	                            <ul class="tab_list">
								
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-one']);
									?>
									
	                                <li class="active"><a data-toggle="tab" href="#custom-tab-1"><?php echo $category_name;?></a></li>
									
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-two']);
									?>
									
	                                <li><a data-toggle="tab" href="#custom-tab-2"><?php echo $category_name;?></a></li>
									
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-three']);
									?>
									
	                                <li><a data-toggle="tab" href="#custom-tab-3" href=""><?php echo $category_name;?></a></li>
									
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-four']);
									?>
									
	                                <li><a data-toggle="tab" href="#custom-tab-4" href=""><?php echo $category_name;?></a></li>
									
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-five']);
									?>
									
	                                <li><a data-toggle="tab" href="#custom-tab-5" href=""><?php echo $category_name;?></a></li>
									
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-six']);
									?>
									
	                                <li><a data-toggle="tab" href="#custom-tab-6" href=""><?php echo $category_name;?></a></li>
									
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-seven']);
									?>
									
	                                <li><a data-toggle="tab" href="#custom-tab-7" href=""><?php echo $category_name;?></a></li>
									
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-eight']);
									?>
									
	                                <li><a data-toggle="tab" href="#custom-tab-8" href=""><?php echo $category_name;?></a></li>
									
									<?php
								$category_name = get_the_category_by_id($themesbazar['tab_cat-nine']);
									?>
									
	                                <li><a data-toggle="tab" href="#custom-tab-9" href=""><?php echo $category_name;?></a></li>
	                                
	                            </ul>  

	                            <div class="tab-content">
	                                
	                                <div id="custom-tab-1" class="tab-pane fade in active">

	                                   <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-one']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-one']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>


	                                </div>

	                                <div id="custom-tab-2"  class="tab-pane fade in ">
	                                
	                                   <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-two']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-two']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

	                                    
	                                </div>

	                                <div id="custom-tab-3"  class="tab-pane fade in ">
	                                    
	                                    <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-three']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-three']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>
	                                    
	                                </div>

	                                <div id="custom-tab-4"  class="tab-pane fade in ">
	                                    
	                                    <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-four']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-four']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>
	                                                                      
	                                </div>

	                                <div id="custom-tab-5"  class="tab-pane fade in ">
	                                    
	                                    <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-five']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-five']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>
	                                                                      
	                                </div>

	                                <div id="custom-tab-6"  class="tab-pane fade in ">
	                                    
	                                    <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-six']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-six']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>
	                                                                      
	                                </div>

	                                <div id="custom-tab-7"  class="tab-pane fade in ">
	                                    
	                                    <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-seven']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-seven']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>
	                                                                      
	                                </div>

	                                <div id="custom-tab-8"  class="tab-pane fade in ">
	                                    
	                                    <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-eight']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-eight']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>
	                                                                      
	                                </div>

	                                <div id="custom-tab-9"  class="tab-pane fade in ">
	                                    
	                                    
	                                    <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-nine']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 0,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
		                                </div>

		                                <div class="row">
									   
									   <?php
											$category_name = get_the_category_by_id($themesbazar['tab_cat-nine']);
											$themes_bazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' =>4,
												'offset' => 4,
												'category_name' => $category_name,

											));
											while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
									
		                                	<div class="col-md-3 col-sm-3">
			                                    <div class="exclisive_news">
				                                    <div class="exclisive_news_image">
				                                        <a href="<?php the_permalink()?>">
														<?php if(has_post_thumbnail()){ 
														the_post_thumbnail();}
														else{?>
														<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
														<?php } ?></a>
				                                    </div>
			                                        <div class="content-padding">
			                                            <h4 class="hadding_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
			                                        </div>
			                                    </div>
			                                </div>
											
											<?php endwhile?>
			                                
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
		                        <?php dynamic_sidebar('widget_area_13')?>
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_14')?>
		                    </div>
		                </div>
		            </div>
	            </div>
            </section>

        <!--------------add option close---------------->