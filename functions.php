<?php

function koleso_scripts() {
 wp_enqueue_style( 'bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css');
 wp_enqueue_style( 'bootstrap-theme.min', get_template_directory_uri().'/css/bootstrap-theme.min.css');
 wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), false, true);
 wp_enqueue_style( 'styles', get_stylesheet_uri() );
 wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', array('jquery'), false, true );
 }

add_action( 'wp_enqueue_scripts', 'koleso_scripts' );

add_filter( 'pre_option_link_manager_enabled', '__return_true' ); // добавление ссылок в админку

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function js_scripts() {
	wp_enqueue_script( 'scrollup', get_template_directory_uri().'/js/scrollup.js');
}
add_action( 'wp_enqueue_scripts', 'js_scripts' );


?>