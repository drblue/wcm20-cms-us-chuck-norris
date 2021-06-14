<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://thehiveresistance.com
 * @since      1.0.0
 *
 * @package    Wcm20_Cnd
 * @subpackage Wcm20_Cnd/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wcm20_Cnd
 * @subpackage Wcm20_Cnd/includes
 * @author     Johan Nordström <jn@thehiveresistance.com>
 */
class Wcm20_Cnd_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wcm20-cnd',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
