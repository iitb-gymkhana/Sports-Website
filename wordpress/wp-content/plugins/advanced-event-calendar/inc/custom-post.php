<?php

// Registering Custom Post
add_action( 'init', 'adv_event_calender_custom_post' );
function adv_event_calender_custom_post() {
	register_post_type( 'event-calendar',
		array(
			'labels' => array(
				'name' => __( 'Events Calendar' ),
				'singular_name' => __( 'Event Calendar' ),
				'add_new_item' => __( 'Add New Event' )
			),
			'public' => true,
			'supports' => array('title', 'editor'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'event-calendar'),
			'menu_icon' => 'dashicons-calendar',
			'menu_position' => 20,
		)
	);
	
}

// Registering Custom post's category
add_action( 'init', 'adv_event_calender_custom_post_taxonomy'); 
function adv_event_calender_custom_post_taxonomy() {
	register_taxonomy(
		'event_cat',  
		'event-calendar',
		array(
			'hierarchical'          => true,
			'label'                         => 'Events Calendar Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'event-category',
				'with_front'    => true
				)
			)
	);
}

?>