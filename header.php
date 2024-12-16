<?php global $themesbazar; ?>

<html <?php language_attributes(); ?>>
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5074275371117768"
     crossorigin="anonymous"></script>	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://themesbazar.com">
<title><?php wp_title('');  ?></title>  
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4491754293804190"
     crossorigin="anonymous"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5074275371117768"crossorigin="anonymous"></script>
	
<link rel="icon" href="<?php echo $themesbazar['favicon']['url']?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $themesbazar['favicon']['url']?>" type="image/x-icon" />   


<?php
if (is_front_page() && is_home()){ ?>


<meta property="og:title" content="<?php wp_title('');  ?>" /> 
<meta property="og:description" content="" />  
<meta property="og:image" content="<?php echo $themesbazar['logo_upload']['url']; ?>" /> 
<meta property="og:video" content="" /> 
<meta property="og:image:width" content="620" />  
<meta property="og:image:height" content="200" />  
<meta property="og:video:type" content="application/x-shockwave-flash" />


    
<?php }; if (is_single()){ ?>


 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-thumbnail' ); ?>
<meta property="og:title" content="<?php the_title(); ?>" /> 
<meta property="og:description" content="" />  
<meta property="og:image" content="<?php echo $image[0]; ?>" /> 
<meta property="og:video" content="" /> 
<meta property="og:video:width" content="560" />  
<meta property="og:video:height" content="340" />  
<meta property="og:video:type" content="application/x-shockwave-flash" />

    
<?php };

?>
             

  
        
        <?php wp_head();?>	

<?php include('css/dynamic-css.php'); ?>


    </head>
    <body>
	


<!------------- Archive start --------------->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "yymmdd",       changeMonth: true,
      changeYear: true }).val()
   
       });

   </script> 
		
		<!------------ header section Start -------------->
	
		<section class="header_section">
		
			<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
			
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="header_logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src=" <?php echo $themesbazar['logo_upload']['url']?>" alt="Logo" width="100%"></a> 
						</div>
					</div>				
					<div class="col-md-5 col-sm-5">
						<div class="date">
						 	<i class="fa fa-calendar-o "></i> 
							<?php if($themesbazar['site-content'] ==1 ): ?>						
								<?php 
								date_default_timezone_set('Asia/Dhaka');
								echo bn1_date(date('D, d M Y, h:i a'));
								//__________________________________________
								?>
								<?php endif; ?>
					   
								<?php if($themesbazar['site-content'] == 2 ): ?>
								<?php
								date_default_timezone_set('UTC+6');
								$today = date("F j, Y, g:i a"); 
								echo $today;
								?> 
							<?php endif; ?>
						</div>
					</div>				
					<div class="col-md-4 col-sm-4">
						<div class="top_hdr_social">
	                        <ul>
	                            <li><a href="<?php echo $themesbazar['social-link']['facebook-url']; ?>" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
	                            <li><a href="<?php echo $themesbazar['social-link']['twitter-url']; ?>" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
	                            <li><a href="<?php echo $themesbazar['social-link']['instagram-url']; ?>" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
	                            <li><a href="<?php echo $themesbazar['social-link']['android-url']; ?>" target="_blank" class="android"> <i class="fa fa-android"></i></a></li>
	                            <li><a href="<?php echo $themesbazar['social-link']['googleplus-url']; ?>" target="_blank" class="google_plus"> <i class="fa fa-google-plus"></i></a></li>
	                            <li><a href="<?php echo $themesbazar['social-link']['youtube-url']; ?>" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
	                            <li><a href="<?php echo $themesbazar['social-link']['rss-url']; ?>" target="_blank" class="rss"> <i class="fa fa-rss"></i></a></li>
	                        </ul>
	                    </div>
					</div>				
				</div>
			</div>
		</section>


		<!------------ Menu & Search section Start -------------->

		<section class="menu_section" id="myHeader">
		
           <?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
			
                <div class="row">
                	<div class="col-xs-10 col-md-11 col-sm-11">
                		<div id="menu-area" class="menu_area">
		                    <div class="menu_bottom">
                                <nav role="navigation" class="navbar navbar-default mainmenu">
                            <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <!-- Collection of nav links and other content for toggling -->
                                    <div id="navbarCollapse" class="collapse navbar-collapse">
                                        <?php /* Primary navigation */
											wp_nav_menu( array(
										   'theme_location' => 'main-menu',
										   'menu_class'    => 'nav navbar-nav',
										   'fallback_cb' => 'default_main_menu',
										   'walker' => new wp_bootstrap_navwalker())
											  );
										?>
                                    </div>
                                </nav>
		                                    
		                    </div><!-- /.header_bottom -->

		                </div>
                	</div>
                	<div class=" col-xs-2 col-md-1 col-sm-1">
                		<div class="search-large-divice">
							<div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
								<div class="modal fade bd-example-modal-lg" action="<?php echo home_url( '/' ); ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-md-12">
														<div class="custom-search-input">
															<form>
																<div class="input-group">
																	<input class="search form-control input-lg" placeholder="<?php echo $themesbazar['placeholder']?>" value="<?php the_search_query(); ?>"name="s" type="text">
																	<span class="input-group-btn">
																	<button class="btn btn-lg" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
																</span> </div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                	</div>
                </div>
            </div>
        </section>



		<!------------ scrool Start -------------->


		<section class="scrrol_section">
		
			<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
			
				<div class="row">
					<div class="col-md-12 scrool"> 
						<div class="col-md-2 scrool_1">
							<?php echo $themesbazar['top_scroll_title'] ?>
						</div>
						<div class="col-md-10 scrool_2">
							<?php if($themesbazar['top_scroll_set'] ==1 ): ?>
						
								<marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">
									<?php 
									$theme_sbazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' => $themesbazar['how_top_scroll'],
									));
									while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
									<i class="<?php echo $themesbazar['header-scrool-icon'] ?>" aria-hidden="true"></i>
									<a href="<?php the_permalink()?>"><?php the_title();?></a>
									<?php endwhile; ?>
									</marquee>
								
								<?php endif; ?>
								<?php if($themesbazar['top_scroll_set'] == 2 ): ?>
								
								<marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">
									<?php 
									$category_name = get_the_category_by_id($themesbazar['top_scroll_cat']);
									$theme_sbazar = new WP_Query(array(
									'post_type' => 'post',
									'category_name' => $category_name,
									'posts_per_page' => $themesbazar['how_top_scroll'],
									));
									while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
									<i class="<?php echo $themesbazar['header-scrool-icon'] ?>" aria-hidden="true"></i>
									<a href="<?php the_permalink()?>"><?php the_title();?></a>
									<?php endwhile; ?>
									</marquee>

							   <?php endif; ?>
							   <?php if($themesbazar['top_scroll_set'] == 3 ): ?>
							   <marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()"><?php echo $themesbazar['top_scroll_content'] ?></marquee>
							   <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>