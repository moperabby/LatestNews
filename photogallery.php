<?php /* Template Name: PhotoGallery Page */ ?>

<?php
show_category_list();
?>

			
			<!----------__________ photogallary start ___________------------>
			
			<?php if($themesbazar['full-body-website'] == 1 ): ?>
			
			<div class="container-fluid">
		
			<?php endif; ?>   
		<?php if($themesbazar['full-body-website'] == 2 ): ?>
			
			<div class="container">
					
			<?php endif; ?>
			
			
				<div class="row">
					<div class="photogallary">				
						
						<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'photogallery',
            'paged' => $paged
        ); $the_query = new WP_Query($args); if( $the_query->have_posts() ) : ?> 
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
						<div class="col-md-3 col-sm-3">
							<div class="gallary">
							<a href="<?php the_permalink();?>">
								<?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
									else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								</a>
								<h4 class="photo_title"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h4>
							</div>
						</div>
						
						<?php endwhile; ?>


					


    <!-- options -->
    <div class="col-md-12 options border-bottom">

        <!-- pagination -->
        <ul class="pagination pull-left">
		<li><?php echo get_previous_posts_link( '<span class="glyphicon glyphicon-backward"></span>' ); ?></li>
            <li><?php echo get_next_posts_link( '<span class="glyphicon glyphicon-forward"></span>', $the_query->max_num_pages ); ?></li>
            
        </ul>

    </div>
    <!-- /.options -->  

    <?php wp_reset_postdata(); ?>

    <?php else:  ?>

    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

    <?php endif; ?>
						
					</div>
				</div>
		</div>

		<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>