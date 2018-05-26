<?php
function get_web_software_mysql_interview_post()
{
	register_post_type('mysql_interview',array(
	'labels'=>array(
	'name'=>'MYQSL INTERVIEW',
	'menu_name'=>'MYQSL INTERVIEW Menu',
	'all_items'=>'All MYQSL INTERVIEW',
	'add_new'=>'Add New MYQSL INTERVIEW',
	'add_new_item'=>'Add New MYQSL INTERVIEW'
	),
	'public'=>true,
	'supports'=>array('title','editor','custom_post','revisions','page-attributes','thumbnail')
	));
}
add_action('init','get_web_software_mysql_interview_post');
?>