<?php
/**
 * Plugin Name: Give - Form API Example
 * Plugin URI: https://github.com/WordImpress/Give-Form-API-Example
 * Description: Learn how to use Give Form API.
 * Author: WordImpress
 * Author URI: https://wordimpress.com
 * Version: 1.0
 * Text Domain:
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/WordImpress/Give-Form-API-Example
 */
class Give_Form_API_Example {
	/**
	 * Instance.
	 *
	 * @since  1.0
	 * @access static
	 * @var
	 */
	static private $instance;

	/**
	 * Singleton pattern.
	 *
	 * @since  1.0
	 * @access private
	 * Give_Form_API_Example constructor.
	 */
	private function __construct() {
	}


	/**
	 * Get instance.
	 *
	 * @since  1.0
	 * @access static
	 * @return static
	 */
	static function get_instance() {
		if ( null === static::$instance ) {
			self::$instance = new static();
		}

		return self::$instance;
	}

	/**
	 * Setup plugin.
	 *
	 * @since  1.0
	 * @access public
	 */
	public function init() {
		add_filter( 'give_form_api_register_form', array( $this, 'render_all_form_elements' ) );
	}


	/**
	 * Render all fields supported by Form API.
	 *
	 * @since  1.0
	 * @access public
	 * @return array
	 */
	public function render_all_form_elements() {
		$forms['form-elements'] = array(
			'fields' => array(
				'text-field'         => array(
					'type'             => 'text',
					'label'            => __( 'Text Field' ),
					'field_attributes' => array(
						'placeholder' => __( 'Text Field' ),
					),
				),
				'email-field'        => array(
					'type'             => 'email',
					'label'            => __( 'Email Field' ),
					'field_attributes' => array(
						'placeholder' => __( 'Email Field' ),
					),
				),
				'number-field'       => array(
					'type'             => 'number',
					'label'            => __( 'Number Field' ),
					'field_attributes' => array(
						'placeholder' => __( 'Number Field' ),
					),
				),
				'password-field'     => array(
					'type'             => 'password',
					'label'            => __( 'Password Field' ),
					'field_attributes' => array(
						'placeholder' => __( 'Password Field' ),
					),
				),
				'textarea-field'     => array(
					'type'             => 'textarea',
					'label'            => __( 'Textarea Field' ),
					'field_attributes' => array(
						'placeholder' => __( 'Textarea Field' ),
					),
				),
				'select-field'       => array(
					'type'    => 'select',
					'label'   => __( 'Select Field' ),
					'options' => array(
						'option-1' => __( 'Option 1' ),
						'option-2' => __( 'Option 2' ),
						'option-3' => __( 'Option 3' ),
					),
				),
				'multi-select-field' => array(
					'type'    => 'multi_select',
					'label'   => __( 'Multi Select Field' ),
					'options' => array(
						'option-1' => __( 'Option 1' ),
						'option-2' => __( 'Option 2' ),
						'option-3' => __( 'Option 3' ),
					),
				),
				'radio-field'        => array(
					'type'    => 'radio',
					'label'   => __( 'Radio Field' ),
					'options' => array(
						'option-1' => __( 'Option 1' ),
						'option-2' => __( 'Option 2' ),
						'option-3' => __( 'Option 3' ),
					),
				),
				'checkbox-field'     => array(
					'type'           => 'checkbox',
					'label'          => __( 'Checkbox Field' ),
					'label_position' => 'after',
				),

				'submit' => array(
					'type'  => 'submit',
					'value' => __( 'Submit' ),
				),
			),
		);

		return $forms;
	}
}


// Initialize plugin.
function give_init_form_api_example() {
	if ( class_exists( 'Give' ) ) {
		Give_Form_API_Example::get_instance()->init();
	}
}

add_action( 'plugins_loaded', 'give_init_form_api_example' );
