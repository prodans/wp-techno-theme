<?php
/**
 * Theme functions and definitions
 *
 * @package Techno
 */

function theme_load() {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
    require_once dirname( __FILE__ ) . '/classes/bs5_walker_nav_menu.php';


    add_theme_support( 'post-thumbnails' );
    register_nav_menu( 'main', 'Main Menu' );
}
add_action( 'after_setup_theme', 'theme_load' );

function theme_enqueue_scripts() {
    wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', [], wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', [], wp_get_theme()->get( 'Version' ) );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
