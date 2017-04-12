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
		add_action( 'give_forms_api_loaded', array( $this, 'register_forms' ) );
	}


	/**
	 * Render all fields supported by Form API.
	 *
	 * @since  1.0
	 * @access public
	 *
	 * @return array
	 */
	public function register_forms() {
		require_once 'includes/forms/form-all-fields.php';
		require_once 'includes/forms/form-display-style-reveal.php';
		require_once 'includes/forms/form-display-style-modal.php';
		require_once 'includes/forms/form-display-style-button.php';
		require_once 'includes/forms/form-display-style-stepper.php';
		require_once 'includes/forms/form-section-simple.php';
		require_once 'includes/forms/form-nested-sections.php';
	}
}


// Initialize plugin.
function give_init_form_api_example() {
	if ( class_exists( 'Give' ) ) {
		Give_Form_API_Example::get_instance()->init();
	}
}

add_action( 'plugins_loaded', 'give_init_form_api_example' );
