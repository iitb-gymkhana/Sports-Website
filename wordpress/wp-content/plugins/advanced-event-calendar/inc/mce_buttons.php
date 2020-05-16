<?php 



// Hooks your functions into the correct filters
function getw_ppm_tinymce() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'getw_ppm_tinymce_button' );
		add_filter( 'mce_buttons', 'getw_ppm_tinymce_register_button' );
	}
}
add_action('admin_head', 'getw_ppm_tinymce');

// Declare script for new button
function getw_ppm_tinymce_button( $plugin_array ) {
	$plugin_array['getw_tinymce_btn'] = plugin_dir_url( __FILE__ ) .'/js/mce-button.js';
	return $plugin_array;
}



// Register new button in the editor
function getw_ppm_tinymce_register_button( $buttons ) {
	array_push( $buttons, 'getw_tinymce_btn' );
	return $buttons;
}


// Custom scrollbar tinymce button CSS

function getw_tiny_mce_button_css() {
	wp_enqueue_style('getw-tiny-mce-btn-css', plugins_url('/css/my-mce-style.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'getw_tiny_mce_button_css' );




?>