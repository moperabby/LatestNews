<?php
// show_category_list();
get_header();
?>


         <!--==================================
               archive-page-section start
         ===================================-->

         <section class="archive-page-section">
		 
		 <?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
            
                    <div class="row">
                
                        <div class="col-md-8 col-sm-8">
							<?php 
			    if(is_paged()){?>
			        
			      <?php				
$obj = get_queried_object();
$categroy_name = $obj->name;
?>
<div class="category_info">
<a href="<?php bloginfo(url);?>"><i class="fa fa-home" aria-hidden="true"></i> 
							</a> <i class="fa fa-chevron-right"></i> <?php echo $categroy_name;?></div>

			        <?php if(have_posts()) : ?>
                     <?php
                     while(have_posts()) : the_post();?>
                      <?php $word = $themesbazar['word-archive']; ?>
                      <div class="archive_page archive_back">
				<div class="col-md-4 col-sm-4">
				    <!-- Post Image Code Start--> 
					<?php if(has_post_thumbnail()){ 
						the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<!-- Post Image Code Close-->
					</div>
					
					<div class="col-md-8 col-sm-8">
				    <h3 class="archive_title01"><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>
                       <?php echo excerpt($word); ?> 
                       <h4 class="archvie_more"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></h4>
				</div></div>
                <?php endwhile; ?>
                    <?php endif; ?>  
			        
			    <?php }else{ ?>
			    <!--Next Pages Close--->

<?php				
$obj = get_queried_object();
$categroy_name = $obj->name;
?>
<div class="category_info">
<a href="<?php bloginfo(url);?>"><i class="fa fa-home" aria-hidden="true"></i> 
							</a> <i class="fa fa-chevron-right"></i> <?php echo $categroy_name;?></div>

			   
		<div class="row archive_page">
		    <div class="col-md-8 col-sm-8">
		         <?php 
// Example for adding WP PageNavi to a new WP_Query call
$args = array('post_type' => 'post','category_name'=> $categroy_name,'posts_per_page' => 1);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <?php $word = $themesbazar['word-archive']; ?>
    <?php if(has_post_thumbnail()){ 
						the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					
					<h3 class="archive_title01"><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>
                       <?php echo excerpt($word); ?> <span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span>
     <?php endwhile; ?>
		    </div>
		    <div class="col-md-4 col-sm-4">
		        
		        <?php 
// Example for adding WP PageNavi to a new WP_Query call
$args = array('post_type' => 'post','offset'=> 1,'category_name'=> $categroy_name,'posts_per_page' => 2);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <?php $word = $themesbazar['word-archive']; ?>
    <?php if(has_post_thumbnail()){ 
						the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					
					
					<h3 class="archive_title02"><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>
    
     <?php endwhile; ?>
     
     
		    </div>
		</div>	
		
			<div class="row archive_page">	
		 <?php 
// Example for adding WP PageNavi to a new WP_Query call
$args = array('post_type' => 'post','offset'=> 3,'category_name'=> $categroy_name,'posts_per_page' => 3);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    ?>
		   <?php $word = $themesbazar['word-archive']; ?>
		   

		    <div class="col-md-4 col-sm-4">
		        <!-- Post Image Code Start--> 
					<?php if(has_post_thumbnail()){ 
						the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<!-- Post Image Code Close-->
				   <h3 class="archive_title02"><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>	
		    </div>
			    
	 <?php endwhile; ?>	
	 
	 	</div>
	 
		 <?php 
// Example for adding WP PageNavi to a new WP_Query call
$args = array('post_type' => 'post','offset'=> 6,'category_name'=> $categroy_name,'posts_per_page' => 4);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    ?>
		   <?php $word = $themesbazar['word-archive']; ?>
		   
		<div class="archive_page archive_back">
		    <div class="col-md-4 col-sm-4">
		        <!-- Post Image Code Start--> 
					<?php if(has_post_thumbnail()){ 
						the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<!-- Post Image Code Close-->
					
		    </div>
		    <div class="col-md-8 col-sm-8">
		        <h3 class="archive_title01"><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>
							
                       <?php echo excerpt($word); ?> <h4 class="archvie_more"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></h4>
                       
		    </div>
		</div>
			    
	 <?php endwhile; ?>	
	 

                   <?php }?> 
                    
                <div class="row"><div class="col-md-12 col-sm-12"><?php wp_bootstrap_pagination(); ?></div></div>
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

