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
		add_filter( 'give_form_api_register_form', array( $this, 'register_forms' ) );
	}


	/**
	 * Render all fields supported by Form API.
	 *
	 * @since  1.0
	 * @access public
	 *
	 * @param array $forms
	 *
	 * @return array
	 */
	public function register_forms( $forms ) {
		include 'includes/forms/form-all-fields.php';
		include 'includes/forms/form-display-style-reveal.php';
		include 'includes/forms/form-display-style-modal.php';
		include 'includes/forms/form-display-style-button.php';
		include 'includes/forms/form-display-style-stepper.php';
		include 'includes/forms/form-section-simple.php';
		include 'includes/forms/form-nested-sections.php';

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
