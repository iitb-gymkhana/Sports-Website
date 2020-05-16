<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class WordPress_Plugin_Template_Settings {

	/**
	 * The single instance of WordPress_Plugin_Template_Settings.
	 * @var 	object
	 * @access  private
	 * @since 	1.0.0
	 */
	private static $_instance = null;

	/**
	 * The main plugin object.
	 * @var 	object
	 * @access  public
	 * @since 	1.0.0
	 */
	public $parent = null;

	/**
	 * Prefix for plugin settings.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $base = '';

	/**
	 * Available settings for plugin.
	 * @var     array
	 * @access  public
	 * @since   1.0.0
	 */
	public $settings = array();

	public function __construct ( $parent ) {
		$this->parent = $parent;

		$this->base = 'wpt_';

		// Initialise settings
		add_action( 'admin_init', array( $this, 'init_settings' ) );

		// Register plugin settings
		add_action( 'admin_init' , array( $this, 'register_settings' ) );

		// Add settings page to menu
		add_action( 'admin_menu' , array( $this, 'add_menu_item' ) );

		// Add settings link to plugins page
		add_filter( 'plugin_action_links_' . plugin_basename( $this->parent->file ) , array( $this, 'add_settings_link' ) );
	}

	/**
	 * Initialise settings
	 * @return void
	 */
	public function init_settings () {
		$this->settings = $this->settings_fields();
	}

	/**
	 * Add settings page to admin menu
	 * @return void
	 */
	public function add_menu_item () {
		$page = add_options_page( __( 'Event Settings', 'wordpress-plugin-template' ) , __( 'Event Settings', 'wordpress-plugin-template' ) , 'manage_options' , 'wordpress_plugin_template_settings' ,  array( $this, 'settings_page' ) );
		add_action( 'admin_print_styles-' . $page, array( $this, 'settings_assets' ) );
	}

	/**
	 * Load settings JS & CSS
	 * @return void
	 */
	public function settings_assets () {

		// We're including the farbtastic script & styles here because they're needed for the colour picker
		// If you're not including a colour picker field then you can leave these calls out as well as the farbtastic dependency for the wpt-admin-js script below
		wp_enqueue_style( 'farbtastic' );
    	wp_enqueue_script( 'farbtastic' );

    	// We're including the WP media scripts here because they're needed for the image upload field
    	// If you're not including an image upload then you can leave this function call out
    	wp_enqueue_media();

    	wp_register_script( $this->parent->_token . '-settings-js', $this->parent->assets_url . 'js/settings' . $this->parent->script_suffix . '.js', array( 'farbtastic', 'jquery' ), '1.0.0' );
    	wp_enqueue_script( $this->parent->_token . '-settings-js' );
	}

	/**
	 * Add settings link to plugin list table
	 * @param  array $links Existing links
	 * @return array 		Modified links
	 */
	public function add_settings_link ( $links ) {
		$settings_link = '<a href="options-general.php?page=wordpress_plugin_template_settings">' . __( 'Event Settings', 'wordpress-plugin-template' ) . '</a>';
  		array_push( $links, $settings_link );
  		return $links;
	}

	/**
	 * Build settings fields
	 * @return array Fields to be displayed on settings page
	 */
	private function settings_fields () {

		$settings['standard'] = array(
			'title'					=> __( 'General', 'wordpress-plugin-template' ),
			//'description'			=> __( 'These are fairly standard form input fields.', 'wordpress-plugin-template' ),
			'fields'				=> array(
				
				array(
					'id' 			=> 'font_size',
					'label'			=> __( 'Font Size' , 'wordpress-plugin-template' ),
					'description'	=> __( 'This is custom font size in pixel', 'wordpress-plugin-template' ),
					'type'			=> 'number',
					'default'		=> '11',
				),
				array(
					'id' 			=> 'font_weight',
					'label'			=> __( 'Font Weight', 'wordpress-plugin-template' ),
					//'description'	=> __( 'A standard select box.', 'wordpress-plugin-template' ),
					'type'			=> 'select',
					'options'		=> array( 'normal' => 'Normal', 'bold' => 'Bold'),
					'default'		=> 'normal'
				),
				
				array(
					'id' 			=> 'font_style',
					'label'			=> __( 'Font Style', 'wordpress-plugin-template' ),
					//'description'	=> __( 'A standard select box.', 'wordpress-plugin-template' ),
					'type'			=> 'select',
					'options'		=> array( 'normal' => 'Normal', 'italic' => 'Italic'),
					'default'		=> 'normal'
				),
				
				array(
					'id' 			=> 'arrow_button_color',
					'label'			=> __( 'Aarrow button color', 'wordpress-plugin-template' ),
					'description'	=> __( 'default #3399ff', 'wordpress-plugin-template' ),
					'type'			=> 'color',
					'default'		=> '#3399ff'
				),
				array(
					'id' 			=> 'arrow_button_hover_color',
					'label'			=> __( 'Arrow button hover color', 'wordpress-plugin-template' ),
					'description'	=> __( 'default #CC8C09', 'wordpress-plugin-template' ),
					'type'			=> 'color',
					'default'		=> '#CC8C09'
				),
				array(
					'id' 			=> 'month_week_day_color',
					'label'			=> __( 'Month Week Day button color', 'wordpress-plugin-template' ),
					'description'	=> __( 'default #3399ff', 'wordpress-plugin-template' ),
					'type'			=> 'color',
					'default'		=> '#3399ff'
				),
				array(
					'id' 			=> 'month_week_day_active_color',
					'label'			=> __( 'Month Week Day button active color', 'wordpress-plugin-template' ),
					'description'	=> __( 'default #187de4', 'wordpress-plugin-template' ),
					'type'			=> 'color',
					'default'		=> '#187de4'
				),
				array(
					'id' 			=> 'current_date_color',
					'label'			=> __( 'Current date color', 'wordpress-plugin-template' ),
					'description'	=> __( 'default #fcf8e3', 'wordpress-plugin-template' ),
					'type'			=> 'color',
					'default'		=> '#fcf8e3'
				),

			)
		);


		$settings = apply_filters( 'wordpress_plugin_template_settings_fields', $settings );

		return $settings;
	}

	/**
	 * Register plugin settings
	 * @return void
	 */
	public function register_settings () {
		if( is_array( $this->settings ) ) {
			foreach( $this->settings as $section => $data ) {

				// Add section to page
				add_settings_section( $section, $data['title'], array( $this, 'settings_section' ), 'wordpress_plugin_template_settings' );

				foreach( $data['fields'] as $field ) {

					// Validation callback for field
					$validation = '';
					if( isset( $field['callback'] ) ) {
						$validation = $field['callback'];
					}

					// Register field
					$option_name = $this->base . $field['id'];
					register_setting( 'wordpress_plugin_template_settings', $option_name, $validation );

					// Add field to page
					add_settings_field( $field['id'], $field['label'], array( $this, 'display_field' ), 'wordpress_plugin_template_settings', $section, array( 'field' => $field ) );
				}
			}
		}
	}

	public function settings_section ( $section ) {
		$html = '<p> ' . $this->settings[ $section['id'] ]['description'] . '</p>' . "\n";
		echo $html;
	}

	/**
	 * Generate HTML for displaying fields
	 * @param  array $args Field data
	 * @return void
	 */
	public function display_field ( $args ) {

		$field = $args['field'];

		$html = '';

		$option_name = $this->base . $field['id'];
		$option = get_option( $option_name );

		$data = '';
		if( isset( $field['default'] ) ) {
			$data = $field['default'];
			if( $option ) {
				$data = $option;
			}
		}

		switch( $field['type'] ) {

			case 'text':
			case 'password':
			case 'number':
				$html .= '<input id="' . esc_attr( $field['id'] ) . '" type="' . $field['type'] . '" name="' . esc_attr( $option_name ) . '" placeholder="' . esc_attr( $field['placeholder'] ) . '" value="' . $data . '"/>' . "\n";
			break;

			case 'text_secret':
				$html .= '<input id="' . esc_attr( $field['id'] ) . '" type="text" name="' . esc_attr( $option_name ) . '" placeholder="' . esc_attr( $field['placeholder'] ) . '" value=""/>' . "\n";
			break;

			case 'textarea':
				$html .= '<textarea id="' . esc_attr( $field['id'] ) . '" rows="5" cols="50" name="' . esc_attr( $option_name ) . '" placeholder="' . esc_attr( $field['placeholder'] ) . '">' . $data . '</textarea><br/>'. "\n";
			break;

			case 'checkbox':
				$checked = '';
				if( $option && 'on' == $option ){
					$checked = 'checked="checked"';
				}
				$html .= '<input id="' . esc_attr( $field['id'] ) . '" type="' . $field['type'] . '" name="' . esc_attr( $option_name ) . '" ' . $checked . '/>' . "\n";
			break;

			case 'checkbox_multi':
				foreach( $field['options'] as $k => $v ) {
					$checked = false;
					if( in_array( $k, $data ) ) {
						$checked = true;
					}
					$html .= '<label for="' . esc_attr( $field['id'] . '_' . $k ) . '"><input type="checkbox" ' . checked( $checked, true, false ) . ' name="' . esc_attr( $option_name ) . '[]" value="' . esc_attr( $k ) . '" id="' . esc_attr( $field['id'] . '_' . $k ) . '" /> ' . $v . '</label> ';
				}
			break;

			case 'radio':
				foreach( $field['options'] as $k => $v ) {
					$checked = false;
					if( $k == $data ) {
						$checked = true;
					}
					$html .= '<label for="' . esc_attr( $field['id'] . '_' . $k ) . '"><input type="radio" ' . checked( $checked, true, false ) . ' name="' . esc_attr( $option_name ) . '" value="' . esc_attr( $k ) . '" id="' . esc_attr( $field['id'] . '_' . $k ) . '" /> ' . $v . '</label> ';
				}
			break;

			case 'select':
				$html .= '<select name="' . esc_attr( $option_name ) . '" id="' . esc_attr( $field['id'] ) . '">';
				foreach( $field['options'] as $k => $v ) {
					$selected = false;
					if( $k == $data ) {
						$selected = true;
					}
					$html .= '<option ' . selected( $selected, true, false ) . ' value="' . esc_attr( $k ) . '">' . $v . '</option>';
				}
				$html .= '</select> ';
			break;

			case 'select_multi':
				$html .= '<select name="' . esc_attr( $option_name ) . '[]" id="' . esc_attr( $field['id'] ) . '" multiple="multiple">';
				foreach( $field['options'] as $k => $v ) {
					$selected = false;
					if( in_array( $k, $data ) ) {
						$selected = true;
					}
					$html .= '<option ' . selected( $selected, true, false ) . ' value="' . esc_attr( $k ) . '" />' . $v . '</label> ';
				}
				$html .= '</select> ';
			break;

			case 'image':
				$image_thumb = '';
				if( $data ) {
					$image_thumb = wp_get_attachment_thumb_url( $data );
				}
				$html .= '<img id="' . $option_name . '_preview" class="image_preview" src="' . $image_thumb . '" /><br/>' . "\n";
				$html .= '<input id="' . $option_name . '_button" type="button" data-uploader_title="' . __( 'Upload an image' , 'wordpress-plugin-template' ) . '" data-uploader_button_text="' . __( 'Use image' , 'wordpress-plugin-template' ) . '" class="image_upload_button button" value="'. __( 'Upload new image' , 'wordpress-plugin-template' ) . '" />' . "\n";
				$html .= '<input id="' . $option_name . '_delete" type="button" class="image_delete_button button" value="'. __( 'Remove image' , 'wordpress-plugin-template' ) . '" />' . "\n";
				$html .= '<input id="' . $option_name . '" class="image_data_field" type="hidden" name="' . $option_name . '" value="' . $data . '"/><br/>' . "\n";
			break;

			case 'color':
				?><div class="color-picker" style="position:relative;">
			        <input type="text" name="<?php esc_attr_e( $option_name ); ?>" class="color" value="<?php esc_attr_e( $data ); ?>" />
			        <div style="position:absolute;background:#FFF;z-index:99;border-radius:100%;" class="colorpicker"></div>
			    </div>
			    <?php
			break;

		}

		switch( $field['type'] ) {

			case 'checkbox_multi':
			case 'radio':
			case 'select_multi':
				$html .= '<br/><span class="description">' . $field['description'] . '</span>';
			break;

			default:
				$html .= '<label for="' . esc_attr( $field['id'] ) . '"><span class="description">' . $field['description'] . '</span></label>' . "\n";
			break;
		}

		echo $html;
	}

	/**
	 * Validate individual settings field
	 * @param  string $data Inputted value
	 * @return string       Validated value
	 */
	public function validate_field ( $data ) {
		if( $data && strlen( $data ) > 0 && $data != '' ) {
			$data = urlencode( strtolower( str_replace( ' ' , '-' , $data ) ) );
		}
		return $data;
	}

	/**
	 * Load settings page content
	 * @return void
	 */
	public function settings_page () {

		// Build page HTML
		$html = '<div class="wrap" id="wordpress_plugin_template_settings">' . "\n";
			$html .= '<h2>' . __( 'Event Settings' , 'wordpress-plugin-template' ) . '</h2>' . "\n";
			$html .= '<form method="post" action="options.php" enctype="multipart/form-data">' . "\n";

				// Setup navigation
				$html .= '<ul id="settings-sections" class="subsubsub hide-if-no-js">' . "\n";
					$html .= '<li><a class="tab all current" href="#all">' . __( 'All' , 'wordpress-plugin-template' ) . '</a></li>' . "\n";

					foreach( $this->settings as $section => $data ) {
						$html .= '<li>| <a class="tab" href="#' . $section . '">' . $data['title'] . '</a></li>' . "\n";
					}

				$html .= '</ul>' . "\n";

				$html .= '<div class="clear"></div>' . "\n";

				// Get settings fields
				ob_start();
				settings_fields( 'wordpress_plugin_template_settings' );
				do_settings_sections( 'wordpress_plugin_template_settings' );
				$html .= ob_get_clean();

				$html .= '<p class="submit">' . "\n";
					$html .= '<input name="Submit" type="submit" class="button-primary" value="' . esc_attr( __( 'Save Settings' , 'wordpress-plugin-template' ) ) . '" />' . "\n";
				$html .= '</p>' . "\n";
			$html .= '</form>' . "\n";
		$html .= '</div>' . "\n";

		echo $html;
	}

	/**
	 * Main WordPress_Plugin_Template_Settings Instance
	 *
	 * Ensures only one instance of WordPress_Plugin_Template_Settings is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @static
	 * @see WordPress_Plugin_Template()
	 * @return Main WordPress_Plugin_Template_Settings instance
	 */
	public static function instance ( $parent ) {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self( $parent );
		}
		return self::$_instance;
	} // End instance()

	/**
	 * Cloning is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __clone () {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), $this->parent->_version );
	} // End __clone()

	/**
	 * Unserializing instances of this class is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __wakeup () {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), $this->parent->_version );
	} // End __wakeup()

}