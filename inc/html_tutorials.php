<?php
function get_web_software_html_tutorials_post()
{
	register_post_type('html_tutorials',array(
	'labels'=>array(
	'name'=>'HTML TUTORIALS',
	'menu_name'=>'HTML TUTORIALS MENU',
	'all_items'=>'All HTML TUTORIALS',
	'add_new'=>'Add New HTML TUTORIALS',
	'add_new_item'=>'Add New HTML TUTORIALS '
	),
	'public'=>true,
	'supports'=>array('title','editor','custom_post','revisions','page-attributes','thumbnail')
	));
}
add_action('init','get_web_software_html_tutorials_post');
?>