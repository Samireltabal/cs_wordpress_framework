<?php
require_once('settings_form.php');
function theme_settings_page(){
    ?>
	    <div class="wrap">
	    <h3 class='dashicons-before dashicons-dashboard'>Social Settings</h3>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("social");
	            do_settings_sections("social-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
		<div class="wrap">
	    <!--<h3 class='dashicons-before dashicons-dashboard'>Colors Settings</h3>-->
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("colors");
	            do_settings_sections("colors-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
		<div class="wrap">
	    <!--<h3 class='dashicons-before dashicons-dashboard'>Colors Settings</h3>-->
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("cs_general");
	            do_settings_sections("cs_general-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
	// changing footer of settings page 
		// Custom Backend Footer
		function cs_admin_custom_footer() {
			_e( '<span id="footer-thankyou">Developed With <span class="dashicons dashicons-heart"></span> by <a href="http://codeshop.host" target="_blank">Codeshop EGYPT</a></span>. Built using <a href="http://codeshop.host/framework" target="_blank">Codeshop FrameWork</a>.', 'cs-developers-framework' );
		}
		// adding it to the admin area
		add_filter( 'admin_footer_text', 'cs_admin_custom_footer' );
		add_filter('update_footer', 'right_admin_footer_text_output', 11); //right side
		function right_admin_footer_text_output($text) {
			$text = "<a href='http://soly.online'>Samir eltabal</a>";
			return $text;
		}
}

function add_theme_menu_item()
{
    $title = __('Theme Settings','cs-developers-framework');
    $name = __('Theme Settings','cs-developers-framework');
    $capability = 'manage_options';
    $menu_slug = 'cs-settings';
    $function = 'theme_settings_page';
	add_theme_page($title, $name, $capability, $menu_slug, $function, null, 99);
}

function display_theme_panel_fields()
{
	// adding sections 
	add_settings_section("social", "Social Settings", null, "social-options");
	add_settings_section("colors", "Colors Settings", null, "colors-options");
	add_settings_section("cs_general", "general Settings", null, "cs_general-options");
	
	// input text field add 	
	add_settings_field("twitter_url", "Twitter Profile Url", "display_input_element", "social-options", "social",'twitter_url');
    add_settings_field("facebook_url", "Facebook Profile Url", "display_input_element", "social-options", "social",'facebook_url');
	// select field add
	$arrd = array(		
		'rtl' => 'right to left',
		'ltr' => 'left to right'
	);
	$args = array('select_test',$arrd);	
	add_settings_field("select_test", "select option input", "display_select_element", "cs_general-options", "cs_general",$args);	
	// color field add
	$color_data = array ('color_field','#000');
	add_settings_field("color_field", "Color Picker", "display_color_picker", "colors-options", "colors",$color_data);
    // social settings
	register_setting("social", "twitter_url");	
    register_setting("social", "facebook_url");
	// color settings
	register_setting("colors", "color_field");
	// select settings
	register_setting("cs_general", "select_test");
}

add_action("admin_init", "display_theme_panel_fields");

add_action("admin_menu", "add_theme_menu_item");

?>

