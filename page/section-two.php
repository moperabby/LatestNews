<?php global $themesbazar; ?>

<!------------ Section Two Start -------------->


            <section class="section_two">
			
        	   <?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
			   
	        		<div class="row">

	        			<div class="col-md-9 col-sm-9">
                            <div class="row">

								<?php
									$category_name = get_the_category_by_id($themesbazar['cat-two']);
									$themes_bazar = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' =>3,
										'offset' => 0,
										'category_name' => $category_name,

									));
									while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
								<div class="col-md-4 col-sm-4">
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
                                            <div class="content-dtls">
                                                <?php echo excerpt($themesbazar['excerpt-cat-two']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
							<?php endwhile?>
                                
                            </div>
                            <div class="row">

								<?php
									$category_name = get_the_category_by_id($themesbazar['cat-two']);
									$themes_bazar = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' =>3,
										'offset' => 3,
										'category_name' => $category_name,

									));
									while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
								<div class="col-md-4 col-sm-4">
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
                                            <div class="content-dtls">
                                                <?php echo excerpt($themesbazar['excerpt-cat-two']); ?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
							<?php endwhile?>
                                
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3">
                        	
                        	<div class="tab-header">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs nav-justified" role="tablist">
									<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false"><?php echo $themesbazar['last'] ?></a></li>
									<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true"><?php echo $themesbazar['popular'] ?></a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content ">
									<div role="tabpanel" class="tab-pane in active" id="tab21">

										<div class="news-titletab">
										
										<?php
											$x=1;							 
											$lastnews = new WP_Query(array(
											'post_type' => 'post',
											'posts_per_page' => $themesbazar['lastpost'],
											'offset' =>0,
											));
											while($lastnews->have_posts()) : $lastnews->the_post();?>
											<?php $xx=$x++ ?>
													
											<div class="small-img tab-border">
												<?php if(has_post_thumbnail()){ 
													the_post_thumbnail();}
													else{?>
													<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
													<?php } ?>
												<h4 class="hadding_03"><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h4> 
											</div>
											
											<?php endwhile ?>
											
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="tab22">                                      
										<div class="news-titletab">
											
											<?php
												$x=1;
												$month = date('m');
												$year = date('Y');
												query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&year=' . $year . '&monthnum=' . $month);
												while (have_posts()): the_post(); ?>
												<?php $xx=$x++ ?>
													
											<div class="small-img tab-border">
												<?php if(has_post_thumbnail()){ 
													the_post_thumbnail();}
													else{?>
													<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
													<?php } ?>
												<h4 class="hadding_03"><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h4> 
											</div>
											
											<?php endwhile ?>
											
										</div>                                          
									</div>
								</div>
							</div>
                            
                            
                            <?php if($themesbazar['acrive-calender'] ==1 ): ?>
							
								<div class="archive_calender_sec">
									<div class="archive_title"><?php echo $themesbazar['calender-title']?></div>
									 <form class="example" method="get" action="<?php echo home_url( '/' ); ?>">
										<input type="text" id="datepicker" autocomplete="off" maxlength="64"
										placeholder="<?php echo $themesbazar['select-date']?>" 
										value="<?php the_search_query(); ?>" name="m" required />
										<button type="submit"><?php echo $themesbazar['date-search']?></button>
									</form>
								</div>
										
								<?php endif; ?>
						   <?php if($themesbazar['acrive-calender'] == 2 ): ?>
								<?php endif; ?>
                                
                                

                        		<!-- Facebook Start -->

							<?php if($themesbazar['facebook'] ==1 ): ?>
							
							<div class="facebook_title">
							<?php echo $themesbazar['facebook-title']?>
							</div>
							
								<div class="fb-root">
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
									  fjs.parentNode.insertBefore(js, fjs);
									  }(document, 'script', 'facebook-jssdk'));
									</script>
									<div class="fb-page" data-href="<?php echo $themesbazar['facebook-link']['face-url']; ?>" 		data-tabs="timeline" data-width="<?php echo $themesbazar['facebook-width']?>" data-height="<?php echo $themesbazar['facebook-height']?>" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
							   </div>
						   
						   <?php endif; ?>
						 <?php if($themesbazar['facebook'] == 2 ): ?>
						   <?php endif; ?>
						   
							<!-- Facebook Close -->
								
							
									
							<div class="add">
								<?php dynamic_sidebar('sidebar_widget')?>
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
		                        <?php dynamic_sidebar('widget_area_03')?>
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6">
		                    <div class="add">
		                        <?php dynamic_sidebar('widget_area_04')?>
		                    </div>
		                </div>
		            </div>
	            </div>
            </section>

        <!--------------add option close---------------->