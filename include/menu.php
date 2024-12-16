<?php 

if(function_exists('register_nav_menus')){
		
		register_nav_menus(array(
		  'main-menu' => __('Main menu','news'),
		  'footermenuone' => __('Footer Menu One','news'),
		  'footermenutwo' => __('Footer Menu Two','news'),
		  'footermenuthree' => __('Footer Menu Three','news'),
		  'footermenufour' => __('Footer Menu Four','news'),
		  'footermenufive' => __('Footer Menu Five','news'),
		  'footermenusix' => __('Footer Menu Six','news'),
		
		));
		
	}
	
	function default_main_menu(){
		echo "<ul class=\"nav navbar-nav\">";
		
		
		
			if(is_user_logged_in()){
			echo '<li><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">Creat a menu</a></li>';
		}
		else{
			echo '<li><a href="'.esc_url(home_url()).'">Home</a></li>';
		}
		

		echo "</ul>";
	}
	
	
	
	function default_footer_men(){
		echo "<ul class=\"list-inline\">";
		if(is_user_logged_in()){
			echo '<li><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">Creat a menu</a></li>';
		}
		else{
			echo '<li><a href="'.esc_url(home_url()).'">Home</a></li>';
		}
		

		echo "</ul>";
	}

?>