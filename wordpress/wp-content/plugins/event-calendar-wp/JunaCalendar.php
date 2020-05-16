<?php
/*
Plugin Name: Juna IT Event Calendar
Plugin URI: http://juna-it.com/index.php/juna-event-calendar/
Description: JUNA EVENT CALENDAR is very easily used plugin calendar, which has lots of advantages.
Version: 1.1.0
Author: Juna-it
Author URI: http://juna-it.com/
License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/

add_action('wp_enqueue_scripts','JunaCalendar_Style');
add_action('widgets_init', function() {
 		register_widget('Juna_IT_Calendar');
 	} );
require_once('Calendar_Widget.php');
require_once('Ajax_in_Calendar.php');

function JunaCalendar_style()
{
	wp_register_style( 'JunaCalendar', plugins_url( 'Style/Style.css',__FILE__ ) );
	wp_enqueue_style( 'JunaCalendar' );	

	wp_register_script('JunaCalendar',plugins_url('Scripts/JunaCalendar.js',__FILE__));
	wp_localize_script('JunaCalendar', 'object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	wp_enqueue_script( 'JunaCalendar' );
	wp_enqueue_script('jquery');
}

add_action("admin_menu", 'JunaCalendar_admin_menu' );

	function JunaCalendar_admin_menu() 
	{
		add_menu_page('JunaCalendar_Admin_Menu','Event Calendar','manage_options','Juna_IT_Calendar','Manage_Juna_IT_Calendar','http://juna-it.com/image/calendar-admin.jpg');

 		add_submenu_page( 'Juna_IT_Calendar', 'JunaCalendar_Admin_Menu', 'Calendar', 'manage_options', 'Juna_IT_Calendar', 'Manage_Juna_IT_Calendar');
		add_submenu_page( 'Juna_IT_Calendar', 'JunaCalendar_Event_Menu', 'Event Category', 'manage_options', 'Calendars_Event_Menu', 'Manage_Events');
		add_submenu_page( 'Juna_IT_Calendar', 'JunaCalendar_Theme_Menu', 'Calendar Theme', 'manage_options', 'Calendars_Theme_Menu', 'Manage_Theme');
		add_submenu_page( 'Juna_IT_Calendar', 'JunaCalendar_Settings_Menu', 'Calendar Settings', 'manage_options', 'Calendars_Settings_Menu', 'Manage_Settings');

	}
	function Manage_Juna_IT_Calendar()
	{
		require_once('Calendar_submenu.php');
	}
	function Manage_Events()
	{
		require_once('Events_submenu.php');
	}
	function Manage_Theme()
	{
		require_once('Theme_submenu.php');
	}
	function Manage_Settings()
	{
		require_once('Setting_submenu.php');
	}
	
	add_action('admin_init', function() {
		wp_register_script('JunaCalendar', plugins_url('Scripts/JunaCalendar_admin.js',__FILE__));
		wp_localize_script('JunaCalendar', 'object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		wp_enqueue_script('JunaCalendar');
		wp_enqueue_script('jquery');

		wp_register_style('JunaCalendar', plugins_url('Style/Admin_Style.css', __FILE__ ));
		wp_enqueue_style('JunaCalendar');	 
	});

	register_activation_hook(__FILE__,'Juna_calendar_wp_activate');
	register_deactivation_hook( __FILE__, 'Juna_calendar_wp_deactivate');

	function Juna_calendar_wp_activate()
	{
		require_once('install_database.php');
	}
	function Juna_calendar_wp_deactivate()
	{
		require_once('Calendar_uninstall.php');
	}
?>