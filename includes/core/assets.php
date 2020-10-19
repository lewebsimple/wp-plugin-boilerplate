<?php

// Register frontend assets
add_action( 'init', 'wp_plugin_boilerplate_register_frontend_assets' );
function wp_plugin_boilerplate_register_frontend_assets() {
	// Register scripts
	wp_register_script( 'wp-plugin-boilerplate', wp_plugin_boilerplate_file_uri( '/assets/js/wp-plugin-boilerplate.js' ), array( 'jquery' ), WP_PLUGIN_BOILERPLATE_VERSION, true );

	// Register styles
	wp_register_style( 'wp-plugin-boilerplate', wp_plugin_boilerplate_file_uri( '/assets/css/wp-plugin-boilerplate.css' ), array( '' ), WP_PLUGIN_BOILERPLATE_VERSION );
}
