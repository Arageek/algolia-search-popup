<?php

namespace Jamalnow_ASP;

if ( ! defined( 'ABSPATH' ) ) {
	wp_die( 'Not Allowed!' );
}

final class Initiator {
	/**
	 * The unique instance of the plugin.
	 *
	 * @var Initiator
	 */
	private static $instance;

	/**
	 * Gets an instance of our plugin.
	 *
	 * @return Initiator
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function __construct() {
		$this->load_dependencies();
		$this->run_hooks();
	}

	private function load_dependencies() {
		include ASP_PATH . 'includes/shortcode.php';
		include ASP_PATH . 'includes/assets.php';
		include ASP_PATH . 'includes/search-popup.php';
	}

	public function run_hooks() {
		\add_action( 'wp_footer', 'Jamalnow_ASP\Search_Popup::content' );
		\add_action( 'wp_enqueue_scripts', 'Jamalnow_ASP\Assets::styles' );
		\add_action( 'wp_enqueue_scripts', 'Jamalnow_ASP\Assets::scripts' );
		\add_shortcode( 'asp_search_popup', 'Jamalnow_ASP\shortcode::shortcode' );
	}
}
