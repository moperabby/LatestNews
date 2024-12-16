<?php
show_category_list();
?>
	


         <!--==================================
               archive-page-section start
         ===================================-->

         <section class="archive-section">
	
	<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
			<div class="container-fluid">
		
			<?php endif; ?>   
		<?php if($themesbazar['full-body-website'] == 2 ): ?>
			
			<div class="container">
					
			<?php endif; ?>
			
		<!--gellary open--->	
		
		<div class="row">
			<div class="col-md-8 col-sm-8">


					<?php if(have_posts()) : ?>
                     <?php
                     while(have_posts()) : the_post();?>
                      <?php $word = $themesbazar['word-archive']; ?>
					  
				   <div class="archive-page-post">
                        <div class="col-md-4 col-sm-4">
                            <div class="archive-img">
                                <?php  
								the_post_thumbnail();
								 ?>
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8">
                            <div class="archive-title">
                                
                                  <a href="<?php the_permalink(); ?>"><?php the_title();?> </a>
                                
                            </div>
                            <div class="archive-content">
                                <?php echo excerpt($word); ?> <a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a>
                            </div>
                        </div>
                    </div>
					
					
						<?php endwhile; ?>
                    <?php endif; ?>  
			        
			    <div class="col-md-12"><?php wp_bootstrap_pagination(); ?></div>
   
                    
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
	
			
	<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>
			