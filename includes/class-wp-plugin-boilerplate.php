<?php

if ( ! class_exists( 'WP_Plugin_Boilerplate' ) ) {

	class WP_Plugin_Boilerplate {

		private static WP_Plugin_Boilerplate $instance;

		public static function get_instance() {
			if ( empty( self::$instance ) ) {
				self::$instance = new WP_Plugin_Boilerplate();
			}

			return self::$instance;
		}

		public function __construct() {
			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
		}

		public function load_textdomain() {
			load_plugin_textdomain( 'wp-plugin-boilerplate', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		}

	}

}
