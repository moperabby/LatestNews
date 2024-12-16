<?php
show_category_list();
?>

			

	
			
	<!-- Section 06 (top two div) #################################--> 	
	<section class="search-page-padding">
	
	<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
			<div class="container-fluid">
		
			<?php endif; ?>   
		<?php if($themesbazar['full-body-website'] == 2 ): ?>
			
			<div class="container">
					
			<?php endif; ?>
					
		<!--gellary open--->	
		<div class="row">
			<div class="col-md-8 col-sm-7">
				
 		  <?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

   
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <?php $word = $themesbazar['word-archive']; ?>
				<div class="archive_page archive_back">
		    <div class="col-md-4">
		        <!-- Post Image Code Start--> 
					<?php if(has_post_thumbnail()){ 
						the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<!-- Post Image Code Close-->
					
		    </div>
		    <div class="col-md-8">
		        <h3 class="archive_title01"><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>
							
                       <?php echo excerpt($word); ?> <h4 class="archvie_more"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></h4>
                       
		    </div>
		</div>
    <?php endwhile; ?>

    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts Found, Please Try Again.' ); ?></p>
<?php endif; ?>   
                
                
         
                 
               
                
			</div>	
		

			<div class="col-md-4 col-sm-5">
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

							
                </div>
		</div>			
		</div>			
		</section>			

	
			
	<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>