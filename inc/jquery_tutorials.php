<?php
function get_web_software_jquery_tutorials_post()
{
	register_post_type('jquery_tutorials',array(
	'labels'=>array(
	'name'=>'JQUERY TUTORIALS',
	'menu_name'=>'JQUERY TUTORIALS MENU',
	'all_items'=>'All JQUERY TUTORIALS',
	'add_new'=>'Add New JQUERY TUTORIALS',
	'add_new_item'=>'Add New JQUERY TUTORIALS '
	),
	'public'=>true,
	'supports'=>array('title','editor','custom_post','revisions','page-attributes','thumbnail')
	));
}
add_action('init','get_web_software_jquery_tutorials_post');
?>