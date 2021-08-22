<?php
/**
 * Plugin Name: Algolia search popup
 * Plugin URI: https://github.com/Arageek/algolia-search-popup
 * Description: Add popup search form compatible with algolia autocomplete and wp search
 * Author: Ahmad Wael
 * Version: 1.0
 * Text Domain: asp
 * Domain Path: /languages/
 * Author URI: https://github.com/devwael
 */

if ( ! defined( 'ABSPATH' ) ) {
	wp_die( 'Not Allowed!' );
}

define( 'ASP_VERSION', '1.0.0' );
define( 'ASP_PATH', plugin_dir_path( __FILE__ ) );
define( 'ASP_URI', plugin_dir_url( __FILE__ ) );

require ASP_PATH . 'includes/Initiator.php';

Jamalnow_ASP\Initiator::get_instance(); //run plugin core
