<?php
function get_web_software_php_tutorials_post()
{
	register_post_type('php_tutorials',array(
	'labels'=>array(
	'name'=>'PHP TUTORIALS',
	'menu_name'=>'PHP TUTORIALS MENU',
	'all_items'=>'All PHP TUTORIALS',
	'add_new'=>'Add New PHP TUTORIALS',
	'add_new_item'=>'Add New PHP TUTORIALS '
	),
	'public'=>true,
	'supports'=>array('title','editor','custom_post','revisions','page-attributes','thumbnail')
	));
}
add_action('init','get_web_software_php_tutorials_post');
?>