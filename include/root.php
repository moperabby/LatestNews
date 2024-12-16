		<?php global $themesbazar; ?>		
			

	         <!--==================================
               bottom footer section start
        ===================================-->

        <section class="root">
		
            <?php if($themesbazar['full-body-website'] == 1 ): ?>
			
					<div class="container-fluid">
				
					<?php endif; ?>   
				<?php if($themesbazar['full-body-website'] == 2 ): ?>
					
					<div class="container">
							
					<?php endif; ?>
					
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="root_01">
                           <?php echo $themesbazar['copyright']?>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="root_02">
                            <?php root(); ?>
                        </div>
                    </div>
                </div>
<div style="display:none"><?php echo $themesbazar['config_theme']; ?></div>
                <!-------------- go to top start---------------->

                <a href="" class="scrollToTop"><i class="fa fa-angle-up"></i></a>

                <!--------------- go to top close---------------->
                <div style="display:none"><?php echo $themesbazar['v_id']; ?></div>

            </div>  
        </section>	