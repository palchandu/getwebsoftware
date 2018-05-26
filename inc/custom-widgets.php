<?php
function getwebsoftware_widgets()
{
	register_sidebar(array(
	'name'=>'GetWeb Custom Sidebar',
	'id'=>'getweb_sidebar'
	));
}
add_action('widgets_init','getwebsoftware_widgets');
?>