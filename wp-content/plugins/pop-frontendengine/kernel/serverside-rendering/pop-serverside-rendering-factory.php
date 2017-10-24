<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class PoP_ServerSideRendering_Factory {

	protected static $instance;

	public static function set_instance($instance) {
		self::$instance = $instance;
	}

	public static function get_instance() {

		return self::$instance;
	}
}
