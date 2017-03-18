<?php
// Functions Main File 
include_once('library/inc.php');


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




function wp_title_filter(){

if ( is_home() ){
$title = bloginfo('name');
return $title;
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

