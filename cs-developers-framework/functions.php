<?php
// Functions Main File 
include_once('library/inc.php');
include_once('library/settings.php');
include_once('library/nav_walker.php');


// Theme Support 
if ( ! isset( $content_width ) )
	$content_width = 1200;

 // Register Theme Features
function CS_custom_features()  {
	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'F1F1F1',
		'default-image'          => '',
		'default-repeat'         => 'no-repeat',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	}

add_action( 'after_setup_theme', 'CS_custom_features' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'cs-developers-framework' ),
) );


function wp_title_filter( $title ){

if(  is_home() || is_front_page() ) {
    return get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
  }else{
	$title =  get_the_title() . ' | ' .  get_bloginfo('name');
return $title;
}
}
add_filter('wp_title','wp_title_filter');


add_action( 'after_setup_theme', 'text_domain_Setup' );
function text_domain_Setup(){
    load_theme_textdomain('cs-developers-framework');
}
// Set content width value based on the theme's design

function cs_login_url() {  return home_url(); }

function cs_login_title() { return get_option( 'blogname' ); }

add_filter( 'login_headerurl', 'cs_login_url' );
add_filter( 'login_headertitle', 'cs_login_title' );

function cs_login_form_style() {
    wp_register_style( 'admin_login', get_stylesheet_directory_uri() . '/assets/css/login.css' );
	wp_enqueue_style('admin_login');
}
add_action('login_enqueue_scripts', 'cs_login_form_style');

?>