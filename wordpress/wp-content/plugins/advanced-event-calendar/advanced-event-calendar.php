<?php
/*
Plugin Name: Advanced Event Calendar
Plugin URI: http://wpeffects.com/
Description: Advanced Event Calendar wordpress plugin will show event calendar with the best and beautifull way on your site. Its fully responsive plugin. 
Author: Noor E Alam
Author URI: http://wpeffects.com/
Version: 2.0.0
*/


if ( ! defined( 'ABSPATH' ) ) exit;


/* Adding Latest jQuery from Wordpress */
function adv_event_calender_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'adv_event_calender_jquery');

/* Adding text domain for translation */
load_plugin_textdomain( 'adv_event_calender_textdomain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

/*Define files path*/
define('adv_event_calender_dir_path', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );



/* Including all css and scripts */
function adv_event_calender_styles_scripts() {
	
	wp_enqueue_script('adv_event_calender_moment_js', adv_event_calender_dir_path. 'assets/js/moment.min.js' , array('jquery'), 1.0, true);
	wp_enqueue_script('adv_event_calender_fullcalendar_js', adv_event_calender_dir_path. 'assets/js/fullcalendar.min.js' , array('jquery'), 1.0, true);
	wp_enqueue_script('adv_event_calender_google-calendar_js', adv_event_calender_dir_path. 'assets/js/google-calendar.js' , array('jquery'), 1.0, true);
	wp_enqueue_script('adv_event_calender_remodal_js', adv_event_calender_dir_path. 'assets/js/jquery.remodal.js' , array('jquery'), 1.0, true);
	wp_enqueue_style('adv_event_calender_fullcalendar_css', adv_event_calender_dir_path. 'assets/css/fullcalendar.css');
	wp_enqueue_style('adv_event_calender_fullcalendar_print_css', adv_event_calender_dir_path. 'assets/css/fullcalendar.print.css', array(), 1.0, true, 'print');
	wp_enqueue_style('adv_event_calender_remodal_css', adv_event_calender_dir_path. 'assets/css/jquery.remodal.css');
	
}

add_action( 'wp_enqueue_scripts', 'adv_event_calender_styles_scripts' );






/* Calling custom post and texonomy */
require_once ('inc/custom-post.php');


/* Loading calender shortcode */
require_once ('inc/shortcode.php');


/* Loading calender metaboxes */
require_once ('inc/options/metaboxes.php');

/* Loading plugin settings */
require_once ('inc/settings/settings.php');


// Hooks your functions into the correct filters
function get_adv_tinymce() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'get_adv_tinymce_button' );
		add_filter( 'mce_buttons', 'get_adv_tinymce_register_button' );
	}
}
add_action('admin_head', 'get_adv_tinymce');

// Declare script for new button
function get_adv_tinymce_button( $plugin_array ) {
	$plugin_array['getw_tinymce_btn'] = plugin_dir_url( __FILE__ ) .'/assets/js/mce-button.js';
	return $plugin_array;
}



// Register new button in the editor
function get_adv_tinymce_register_button( $buttons ) {
	array_push( $buttons, 'getw_tinymce_btn' );
	return $buttons;
}


function get_adv_tiny_mce_button_css() {
	wp_enqueue_style('get-tiny-mce-btn-css', plugins_url('/assets/css/mce-style.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'get_adv_tiny_mce_button_css' );

?>