<?php

// Helper: Get plugin file URI
function wp_plugin_boilerplate_file_uri( $file = '' ) {
	$file = ltrim( $file, '/' );
	$uri  = dirname( plugin_basename( __FILE__ ) );

	return $uri . '/' . $file;
}
