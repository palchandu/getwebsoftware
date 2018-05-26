<?php
function get_web_software_css_tutorials_post()
{
	register_post_type('css_tutorials',array(
	'labels'=>array(
	'name'=>'CSS TUTORIALS',
	'menu_name'=>'CSS TUTORIALS MENU',
	'all_items'=>'All CSS TUTORIALS',
	'add_new'=>'Add New CSS TUTORIALS',
	'add_new_item'=>'Add New CSS TUTORIALS '
	),
	'public'=>true,
	'supports'=>array('title','editor','custom_post','revisions','page-attributes','thumbnail')
	));
}
add_action('init','get_web_software_css_tutorials_post');
?>