<?php get_header();
 global $themesbazar; ?>

         <!--==================================
               national-section start
         ===================================-->

         <section class="singlepage-section">
		 
		 <?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
					
            <div class="row">
                <div class="col-md-8 col-sm-8">
				
					<div class="add">
						 <?php dynamic_sidebar('single_top')?>
					</div>
					
				
                    <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
                    <div class="single-cat-info">
                        <div class="single-cat-home">
                            <a href="<?php bloginfo(url);?>"><i class="fa fa-home" aria-hidden="true"></i> <?php echo $themesbazar['home'];?> </a>
                        </div>
                        <div class="single-cat-cate">
                            <i class="fa fa-bars" aria-hidden="true"></i>  <?php the_category(', '); ?> 
                        </div>
                    </div>

                    <div class="single-title">
                        <h3><?php the_title();?></h3>
                    </div>

					
					
				 <!--========= reporter image title section start ===========-->	
					

					<div class="view-section">
					 <div class="row">
                        
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <div class="reportar-img">
								
								<?php 
								$rimg = get_post_meta(get_the_ID(),'reporter_img', true);
								
								if($rimg){ ?>
								<img src="<?php echo get_post_meta(get_the_ID(),'reporter_img', true); ?>">
								<?php }
									else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimagee.gif" width="100%" />
								<?php } ?>
								
								
                                    
									
                                </div>
                            </div>
                            <div class="col-md-11 col-sm-11 col-xs-10">
                                <div class="reportar-sec">
                                    <div class="reportar-title">
										
										
										<?php 
								$rname = get_post_meta(get_the_ID(),'reporter_name', true);
								
								if($rname){ ?>
								<?php echo get_post_meta(get_the_ID(),'reporter_name', true); ?>
								<?php }
									else{?>
									
								<?php echo $themesbazar['reporter']?>
								
								<?php } ?>
								
								
								
                                    </div>
                                    <div class="sgl-page-views-count">
                                        <ul>
                                            <li> <i class="fa fa-clock-o"></i>  
											<?php echo $themesbazar['update'];?> 
											<?php if($themesbazar['site-content'] ==1 ): ?>
											<?php 
											$currentDate = get_the_time("l, j F, Y");
											$engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
											$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
											বুধবার','বৃহস্পতিবার','শুক্রবার' 
											);
											$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
											echo "$convertedDATE";
											?>
											<?php endif; ?>
													<?php if($themesbazar['site-content'] == 2 ): ?>
											<?php echo get_the_time("l, F j, Y"); ?>
											<?php endif; ?>
											</li>
											
											<!-- *(view-tab show or hide open)*-->	
											<?php if($themesbazar['view-tab'] ==1 ): ?>	
												<!-- *(view-tab show or hide open)*-->
							
											<li class="active"> 
											<i class="fa fa-eye"></i> 
											<?php if($themesbazar['site-content'] ==1 ): ?>
												<?php setPostViews(get_the_ID()); ?>
												<?php $view= getPostViews(get_the_ID()); 
												echo bn_number($view);
												?>
											<?php endif; ?>
									   
											<?php if($themesbazar['site-content'] == 2 ): ?>
												<?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?>
												<?php endif; ?>
											<?php echo $themesbazar['count'];?>  
											</li>
												
												<?php endif; ?> 
										 <?php if($themesbazar['view-tab'] == 2 ): ?>
											   <?php endif; ?>
									<!-- *(view-tab show or hide close)*-->
				
                                        </ul>
                                    </div>                                 
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<!--========= reporter image title section close ===========-->	
					
					

                    <div class="single-img">
                        <!-- Post Image Code Start--> 
						<?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<!-- Post Image Code Close-->
							<?php 
							$caption = get_post(get_post_thumbnail_id())->post_excerpt;
							if ($caption): ?>
							<div class="caption">
								<?php echo $caption ?> 
							</div>
						<?php endif; ?> 
                    </div>

                    <div class="single-dtls">
                        <?php the_content();?>
                    </div>
					
					<div class="add">
						 <?php dynamic_sidebar('single_middle')?>
					</div>
					
				
					
					<?php if($themesbazar['social_share'] == 1 ): ?>
					
                    <div class="sgl-page-social-title">
                        <h4><?php echo $themesbazar['social_title'] ?></h4>
                    </div>

                    <div class="sgl-page-social">
                        <ul>
							<li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="ffacebook" target="_blank"> <i class="fa fa-facebook"></i> Facebook</a></li>

							<li><a href="https://twitter.com/share?text=<?php echo urlencode( get_the_title() ); ?>" class="ttwitter" target="_blank"> <i class="fa fa-twitter"></i> Twitter</a></li>

							<li><a href="http://digg.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" class="digg" target="_blank"> <i class="fa fa-digg"></i> Digg </a></li>
							
							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" class="linkedin" target="_blank"> <i class="fa fa-linkedin"></i> Linkedin </a></li>

							<li><a href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" class="reddit" target="_blank"> <i class="fa fa-reddit"></i> Reddit </a></li>
							
							<li><a href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" class="google-plus" target="_blank"> <i class="fa fa-google-plus"></i> Google Plus</a></li>

							<li><a href="http://www.pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&media=<?php if(has_post_thumbnail()) echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php echo urlencode( get_the_title() . ' - ' . get_permalink() ); ?>" class="pinterest" target="_blank"> <i class="fa fa-pinterest"></i> Pinterest </a></li>

							<li><a onclick="myFunction()" class="print" target="_blank"> <i class="fa fa-print"></i> Print </a></li>
						</ul>
						
                    </div>
					
					<script>
					function myFunction() {
						window.print();
					}
					</script>
					
					<?php endif; ?> 
			 <?php if($themesbazar['social_share'] == 2 ): ?>
				   <?php endif; ?>
				   
				   <!-- *(view-tab show or hide open)*-->	
			<?php if($themesbazar['coment'] ==1 ): ?>	
					   <?php comments_template(); ?>
					<?php endif; ?> 
			 <?php if($themesbazar['coment'] == 2 ): ?>
				   <?php endif; ?>
				<!-- *(view-tab show or hide close)*-->
				
					
					<?php endwhile;?>
				<?php endif;?>

                    <div class="sgl-cat-tittle">
                       <?php echo $themesbazar['more-news-category']?>
                    </div>
                    <div class="row">
					
						<?php $orig_post = $post;
							global $post;
							$categories = get_the_category($post->ID);
							if ($categories) {
							$category_ids = array();
							foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

							$args=array(
							'category__in' => $category_ids,
							'post__not_in' => array($post->ID),
							'posts_per_page'=> 3, // Number of related posts that will be shown.
							
							);

							$my_query = new wp_query( $args );
							if( $my_query->have_posts() ) {

							while( $my_query->have_posts() ) {
							$my_query->the_post(); ?>
	
                        <div class="col-sm-4 col-md-4">
                            <div class="Name-again box-shadow">
                                <div class="image-again"> 
								<a href="<?php the_permalink()?>">
								<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?></a>
                                    <h4 class="sgl-hadding"> <a href="<?php the_permalink()?>"><?php the_title() ?>	</a> </h4>
                                </div>
                            </div>
                        </div>
                       
					   <?php
						}    }    } 
						$post = $orig_post;
						wp_reset_query(); ?>
	
                    </div>
                    <div class="row">
                        
						<?php $orig_post = $post;
							global $post;
							$categories = get_the_category($post->ID);
							if ($categories) {
							$category_ids = array();
							foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

							$args=array(
							'category__in' => $category_ids,
							'post__not_in' => array($post->ID),
							'posts_per_page'=> 3, // Number of related posts that will be shown.
							'offset'=> 3,
							
							);

							$my_query = new wp_query( $args );
							if( $my_query->have_posts() ) {

							while( $my_query->have_posts() ) {
							$my_query->the_post(); ?>
	
						<div class="col-sm-4 col-md-4">
                            <div class="Name-again box-shadow">
                                <div class="image-again"> 
								<a href="<?php the_permalink()?>">
								<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?></a>
                                    <h4 class="sgl-hadding"> <a href="<?php the_permalink()?>"><?php the_title() ?>	</a> </h4>
                                </div>
                            </div>
                        </div>
                        
						<?php
						}    }    } 
						$post = $orig_post;
						wp_reset_query(); ?>
	
                    </div>
					
					<div class="add">
						 <?php dynamic_sidebar('single_bottom')?>
					</div>
					
					
                </div>
                <div class="col-md-4 col-sm-4">
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
					
					<div class="add">
						 <?php dynamic_sidebar('single_sidebar')?>
					</div>
							
                </div>
            </div>
			
            </div>
         </section>        




        <!---------  body-section close --------->        
		<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>
			

