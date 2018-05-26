<?php
function get_web_software_mysql_tutorials_post()
{
	register_post_type('mysql_tutorials',array(
	'labels'=>array(
	'name'=>'MYSQL TUTORIALS',
	'menu_name'=>'MYSQL TUTORIALS MENU',
	'all_items'=>'All MYSQL TUTORIALS',
	'add_new'=>'Add New MYSQL TUTORIALS',
	'add_new_item'=>'Add New MYSQL TUTORIALS '
	),
	'public'=>true,
	'supports'=>array('title','editor','custom_post','revisions','page-attributes','thumbnail')
	));
}
add_action('init','get_web_software_mysql_tutorials_post');
?>