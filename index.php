<?php 
   $v_info = $themesbazar['v_id'];
	$vv_info = md5($v_info);
	$vvv_info = v_three();
	if($vv_info == $vvv_info){
	   get_header(); global $themesbazar;
	}else{
	    exit();
	}
    
 ?>





<?php
$layout = $themesbazar['homepage-section']['Show'];
if ($layout): foreach ($layout as $key=>$value) {
     switch($key) {
        case 'section-one': get_template_part('page/section-one');
        break;
 
        case 'section-two': get_template_part('page/section-two');
        break;
 
        case 'section-three': get_template_part('page/section-three');
        break;
 
        case 'section-four': get_template_part('page/section-four');   
        break;  
		
		case 'section-five': get_template_part('page/section-five');   
        break; 
		
		case 'section-six': get_template_part('page/section-six');   
        break; 
				
		case 'section-seven': get_template_part('page/section-seven');   
        break; 
		
		case 'section-eight': get_template_part('page/section-eight');   
        break; 
				
		case 'section-nine': get_template_part('page/section-nine');   
        break; 
		
		case 'section-ten': get_template_part('page/section-ten');   
        break; 
		
		case 'section-eleven': get_template_part('page/section-eleven');
 
 
    }
 }
 endif;
?>	

		
		
		

		    



<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>