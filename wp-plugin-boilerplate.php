<?php
/**
 * Plugin Name: WP Plugin Boilerplate
 * Description: Boilerplate for WordPress plugins
 * Version: 0.2.0
 * Author: Le Web simple
 * Author URI: https://lewebsimple.ca
 * Text Domain: wp-plugin-boilerplate
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

const WP_PLUGIN_BOILERPLATE_VERSION = '0.2.0';

// Core
require_once __DIR__ . '/includes/core/assets.php';
require_once __DIR__ . '/includes/core/helpers.php';
require_once __DIR__ . '/includes/core/setup.php';
