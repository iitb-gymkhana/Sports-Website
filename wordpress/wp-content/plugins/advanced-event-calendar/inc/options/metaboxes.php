<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'adv_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['adv_google_event'] = array(
		'id'         => 'adv_google_event',
		'title'      => __( 'Event calendar data', 'cmb' ),
		'pages'      => array( 'event-calendar', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(

			array(
				'name' => __( 'Event start date ', 'cmb' ),
				'desc' => __( 'Select event start date', 'cmb' ),
				'id'   => $prefix . 'event_start_date',
				'type' => 'text_date'
			),
			array(
				'name' => __( 'Event start time ', 'cmb' ),
				'desc' => __( 'Select event start time ', 'cmb' ),
				'id'   => $prefix . 'event_start_time',
				'type' => 'text_time'
			),
			array(
				'name' => __( 'Event end date ', 'cmb' ),
				'desc' => __( 'Select event end date', 'cmb' ),
				'id'   => $prefix . 'event_end_date',
				'type' => 'text_date'
			),
			array(
				'name' => __( 'Event end time ', 'cmb' ),
				'desc' => __( 'Select event end time', 'cmb' ),
				'id'   => $prefix . 'event_end_time',
				'type' => 'text_time'
			),
			
			
			array(
				'name' => __( 'Event Custom Link', 'cmb' ),
				'desc' => __( 'put a link if you don not want modal popup', 'cmb' ),
				'id'   => $prefix . 'event_link',
				'type' => 'text_medium'
			),
			
			/*
			array(
				'name' => __( 'Enable Modal Popup', 'cmb' ),
				'desc' => __( 'Keep blank Event Custom Link field if you want modal popup', 'cmb' ),
				'id'   => $prefix . 'adv_event_modal',
				'type' => 'checkbox'
			),
			*/
			
			array(
				'name' => __( 'Event color', 'cmb' ),
				'desc' => __( 'You can change individual event color form here.', 'cmb' ),
				'id'   => $prefix . 'adv_event_color',
				'type' => 'colorpicker',
				'default' => '#cf00ea'
			)
		),
	);






	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
