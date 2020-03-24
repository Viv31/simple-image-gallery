<?php 
function gallery_custom_post_type(){
register_post_type('gallery-world',
	array(
'labels'=>array(
'name'=>__('Gallery World'),
'Singular_name'=>__('gallery')
),
'supports'=>array('title','editor','thumbnail'),
'public'=>true,
'has_archive'=>true,
'can_export'=>true,
'rewrite'=>array('slug'=>'gallery_world')
));

}
add_action('init','gallery_custom_post_type');
?>