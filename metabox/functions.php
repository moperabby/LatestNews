<?php

function metabox_product_team(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'first-section',
			'title' => 'Extra Fields',
			'object_types' => array('post'),
			'fields' => array(
					
					array(
						'id' => 'reporter_img',
						'name' => 'Upload Reporter Image',
						'type' => 'file',
						
					),
					
					array(
						'id' => 'reporter_name',
						'name' => 'Reporter Name Text',
						'type' => 'text',
						
					),
					
					
			)

	);
	
	return $product_meta;	
}
add_filter('cmb2_meta_boxes','metabox_product_team');





/*
function metabox_product(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'first-section',
			'title' => 'Fist Metabox',
			'object_types' => array('product', 'post'),
			'fields' => array(
					array(
						'id' => 'developer',
						'name' => 'Developer Version',
						'type' => 'text',
						
					),
			)

	);
	
	return $product_meta;
}
add_filter('cmb2_meta_boxes','metabox_product');


Output=========
<?php echo get_post_meta(get_the_ID(),'developer', true); ?>

*/