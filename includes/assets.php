<?php

namespace Jamalnow_ASP;

if ( ! defined( 'ABSPATH' ) ) {
	wp_die( 'Not Allowed!' );
}

class Assets {
	public static function styles() {
		\wp_enqueue_style( 'asp_style', ASP_URI . 'assets/css/style.css', array(), ASP_VERSION );
	}

	public static function scripts() {
		\wp_enqueue_script( 'asp_script', ASP_URI . 'assets/js/main.js', array( 'jquery' ), ASP_VERSION, true );
	}
}
