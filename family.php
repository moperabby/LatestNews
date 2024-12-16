<?php /* Template Name: Famaily */ ?>
<?php
show_category_list();
?>



<section class="singlepage-section">

        <?php global $themesbazar ?>
		
		
		<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
			<div class="container-fluid">
		
			<?php endif; ?>   
		<?php if($themesbazar['full-body-website'] == 2 ): ?>
			
			<div class="container">
					
			<?php endif; ?>
			
			
<!---news option******************--->
			<div class="row">
			    <?php 
							$family = new WP_Query(array(
								'post_type' => 'family',
								'posts_per_page' => 500,
								'offset'     =>0,
								'order'     => 'ASC',
							));
							while($family->have_posts()) : $family->the_post(); ?>	
							
				<div class="col-md-3">
					<div class="profile_news">
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?>
						<h4 class="family"><?php the_title() ?></a></h4>
					</div>
				</div>
				
				<?php endwhile ?>
					</div>
			</div>
			</div>
	</section>
				
	
			
	<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>