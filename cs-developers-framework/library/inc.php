<?php  
add_action( 'wp_enqueue_scripts', 'register_CS_styles' );
add_action( 'wp_enqueue_scripts', 'register_CS_scripts');
/**
 * Register style sheet.
 */
function register_CS_styles() {
    wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_register_style( 'rtl-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap-rtl.min.css' );
    wp_register_style( 'font', 'https://fonts.googleapis.com/css?family=Lato:400,700' );    
    wp_register_style( 'font_awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_register_style( 'main_style_sheet', get_stylesheet_directory_uri() . '/assets/css/app.css' );
	wp_enqueue_style( 'bootstrap' );
    if (is_rtl()){
        wp_enqueue_style( 'rtl-bootstrap' );    
    }
    wp_enqueue_style( 'font' );
    wp_enqueue_style( 'font_awesome' );
    wp_enqueue_style( 'main_style_sheet' );
}
function register_CS_scripts() {
    wp_register_script('jquery_local', get_stylesheet_directory_uri() . '/assets/js/jquery-2.2.4.min.js','','vendor',true);
    wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery_local' , 'vendor' , true );
    wp_dequeue_script('jquery');
    wp_enqueue_script('jquery_local');
    wp_enqueue_script('bootstrap');
}