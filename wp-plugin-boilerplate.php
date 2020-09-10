<?php
/**
 * Plugin Name: WP Plugin Boilerplate
 * Description: Boilerplate for WordPress plugins
 * Version: 0.1.0
 * Author: Le Web simple
 * Author URI: https://lewebsimple.ca
 * Text Domain: wp-plugin-boilerplate
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WP_PLUGIN_BOILERPLATE_VERSION', '0.1.0' );

// Plugin activation
register_activation_hook( __FILE__, 'activate_wp_plugin_boilerplate' );
function activate_wp_plugin_boilerplate() {
	// TODO Set default plugin options
}

// Plugin deactivation
register_deactivation_hook( __FILE__, 'deactivate_wp_plugin_boilerplate' );
function deactivate_wp_plugin_boilerplate() {
}

// Instantiate plugin
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-plugin-boilerplate.php';
WP_Plugin_Boilerplate::get_instance();
