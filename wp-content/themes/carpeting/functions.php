<?php 
function carpet_enqueue_style(){
wp_enqueue_style('bootstrap.min',get_template_directory_uri().'/css/bootstrap.min.css', false);
wp_enqueue_style('font-awesome.min',get_template_directory_uri().'/css/font-awesome.min.css',false);
wp_enqueue_style('style',get_template_directory_uri().'/style.css', false);
}
add_action('wp_enqueue_scripts','carpet_enqueue_style');


function carpet_enqueue_scripts(){

wp_enqueue_script('jquery-3.1.1.min',get_template_directory_uri().'/js/jquery-3.1.1.min.js', false);
wp_enqueue_script('bootstrap.min',get_template_directory_uri().'/js/bootstrap.min.js', false);
wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js',false);
wp_enqueue_script('jquery.easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js',false);
wp_enqueue_script('agency', get_template_directory_uri() . '/js/agency.js',false);

}
add_action('wp_enqueue_scripts','carpet_enqueue_scripts');
//nav
function register_my_menu(){
register_nav_menus(
array(
'header-menu' => __('Header Menu'),
'footer-menu' => __('Footer Menu'),
)

);
}
add_action('init','register_my_menu');
//nav end
//featured img
add_theme_support( 'post-thumbnails' ); 


//widget
register_sidebar( array(
'name' => 'Copyright',
'id' => 'footer-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );