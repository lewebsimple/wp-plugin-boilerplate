<?php

// Setup plugin
add_action( 'plugins_loaded', 'wp_plugin_boilerplate_plugins_loaded' );
function wp_plugin_boilerplate_plugins_loaded() {
	// Load textdomain
	load_plugin_textdomain( 'wp-plugin-boilerplate', false, wp_plugin_boilerplate_file_uri( '/languages' ) );
}

// Plugin activation
register_activation_hook( __FILE__, 'activate_wp_plugin_boilerplate' );
function activate_wp_plugin_boilerplate() {
}

// Plugin deactivation
register_deactivation_hook( __FILE__, 'deactivate_wp_plugin_boilerplate' );
function deactivate_wp_plugin_boilerplate() {
}
