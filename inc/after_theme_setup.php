<?php
function pm_theme_init()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('portfolio_img',720,540,true);
	add_image_size('thumbnail-search',330,220);
	add_image_size('sidebar_img',80,80);
	register_nav_menus(array(
	'primary_menu'=>'Primary Menu'
	));
}
add_action('after_setup_theme','pm_theme_init');

function add_pm_css_js()
{
	/*Styls*/
	wp_enqueue_style('bootstrao_min',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',null,'v1.1.0','all');
	wp_enqueue_style('font1','https://fonts.googleapis.com/css?family=Noto+Serif:400italic,400',null,'v1.1.0','all');
	wp_enqueue_style('font2','http://fonts.googleapis.com/css?family=Raleway:400,600',null,'v1.1.0','all');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',null,'v1.1.0','all');
	wp_enqueue_style('magnific_poup',get_template_directory_uri().'/assets/css/magnific-popup.css',null,'v1.1.0','all');
	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.min.css',null,'v1.1.0','all');
	wp_enqueue_style('style_skyblue',get_template_directory_uri().'/assets/css/skin/skin-skyblue.min.css',null,'v1.1.0','all');
	wp_enqueue_style('style_custome',get_template_directory_uri().'/assets/css/custom.css',null,'v1.1.0','all');
	wp_enqueue_style('style_imp',get_stylesheet_uri());
	/*Scripts*/
	wp_enqueue_script('min_js',get_template_directory_uri().'/assets/plugins/jquery.min.js',null,'v1.0',true);
	wp_enqueue_script('bootstarp_min_js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',null,'v1.0',true);
	wp_enqueue_script('scriptsui_js',get_template_directory_uri().'/assets/js/jquery-ui-1.10.4.custom.js',null,'v1.0',true);
	wp_enqueue_script('gallery_js',get_template_directory_uri().'/assets/plugins/jquery.justifiedGallery.min.js',null,'v1.0',true);
	wp_enqueue_script('magnific_js',get_template_directory_uri().'/assets/plugins/jquery.magnific-popup.min.js',null,'v1.0',true);
	wp_enqueue_script('images_js',get_template_directory_uri().'/assets/plugins/imagesloaded.pkgd.min.js',null,'v1.0',true);
	wp_enqueue_script('isotopes_js',get_template_directory_uri().'/assets/plugins/jquery.isotope.min.js',null,'v1.0',true);
	wp_enqueue_script('masonry_js',get_template_directory_uri().'/assets/plugins/masonry.pkgd.min.js',null,'v1.0',true);
	wp_enqueue_script('navigation_js',get_template_directory_uri().'/assets/js/navigation.js',null,'v1.0',true);
	wp_enqueue_script('skip_link_js',get_template_directory_uri().'/assets/js/skip-link-focus-fix.js',null,'v1.0',true);
	wp_enqueue_script('scripts_js',get_template_directory_uri().'/assets/js/script.js',null,'v1.0',true);
	wp_enqueue_script('scriptstar_js',get_template_directory_uri().'/assets/js/star-rating.js',null,'v1.0',true);
	
}
add_action('wp_enqueue_scripts','add_pm_css_js');

?>