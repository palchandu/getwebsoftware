<?php
function get_web_software_php_interview_post()
{
	register_post_type('php_interview',array(
	'labels'=>array(
	'name'=>'PHP INTERVIEW',
	'menu_name'=>'PHP INTERVIEW Menu',
	'all_items'=>'All PHP INTERVIEW',
	'add_new'=>'Add New PHP INTERVIEW',
	'add_new_item'=>'Add New PHP INTERVIEW Item'
	),
	'public'=>true,
	'supports'=>array('title','editor','custom_post','revisions','page-attributes','thumbnail')
	));
}
add_action('init','get_web_software_php_interview_post');
?>