<?php
show_category_list();
?>


<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
			<div class="container-fluid">
		
			<?php endif; ?>   
		<?php if($themesbazar['full-body-website'] == 2 ): ?>
			
			<div class="container">
					
			<?php endif; ?>
			
	
			<!----------__________ Single Page start ___________------------>
			
			
				<div class="row">
					<div class="psingle_page">										
						<div class=" col-md-1 col-sm-1"></div>
						<div class=" col-md-10 col-sm-10">
						 
						 <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						
							<div class="ppage_dtails">
								<h4 class="ppage_hadding"><?php the_title();?></h4>
								<?php the_content(); ?>
	
							</div>
				<?php endwhile;?>
                <?php endif;?>							
						</div>
						<div class=" col-md-1 col-sm-1"></div>
					</div>
				</div>
	</div>

	
	<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>

