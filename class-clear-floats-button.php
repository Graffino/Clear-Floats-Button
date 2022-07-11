<?php
/*
Plugin Name: Clear Floats Button
Plugin URI: https://github.com/Graffino/clear-floats-button
Description: Adds a clear floats button to TinyMCE
Version: 1.2.5
Author: Graffino
Author URI: http://graffino.com

Originally by: http://www.peix.org

Released under the GPL v.2, http://www.gnu.org/copyleft/gpl.html

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/

class Clear_Floats_Button {


	public function __construct() {
		add_action( 'init', array( $this, 'clear_floats_addbutton' ) );
		add_filter( 'tiny_mce_before_init', array( $this, 'clear_floats_before_init' ) );
		add_action( 'init', array( $this, 'myplugin_load_textdomain' ) );
	}

	/**
	 * Create plugin name
	 *
	 * @since  1.1.3
	 * @return string Plugin name.
	 */
	public function get_plugin_name() {
		$plugin_name = preg_replace( '/\.php/', '', basename( __FILE__ ) );
		$plugin_name = preg_replace( '/class-/', '', $plugin_name );
		return $plugin_name;
	}

	/**
	 * Load the TinyMCE plugin: editor_plugin.js
	 *
	 * @since 1.0.0
	 * @param array $plugin_array Plugin array
	 */
	public function add_clear_floats_plugin( $plugin_array ) {
		$plugin_name           = $this->get_plugin_name();
		$plugin_array['clear'] = WP_PLUGIN_URL . '/' . $plugin_name . '/mce/clear/editor_plugin.min.js';

		return $plugin_array;
	}

	/**
	 * Register button
	 *
	 * @since  1.0.0
	 * @param  array $buttons Buttons array
	 * @return array          Updated buttons array
	 */
	public function register_clear_floats( $buttons ) {
		array_push( $buttons, 'separator', 'clearboth' );
		return $buttons;
	}

	/**
	 * Add button
	 *
	 * @since 1.0.0
	 */
	public function clear_floats_addbutton() {
		// Add only in Rich Editor mode
		if ( get_user_option( 'rich_editing' ) == 'true' ) {
			add_filter( 'mce_external_plugins', array( $this, 'add_clear_floats_plugin' ) );
			add_filter( 'mce_buttons', array( $this, 'register_clear_floats' ) );
		}
	}

	/**
	 * Add custom tags to allowed tags to prevent them from being stripped by TinyMCE
	 * Default allowed tags: class|id|style|title|role
	 *
	 * @since  1.0.0
	 * @param  array $options Options array
	 * @return array          Updated options array
	 */
	public function clear_floats_before_init( $options ) {

		if ( ! isset( $options['extended_valid_elements'] ) ) {
			$options['extended_valid_elements'] = '';
		} else {
			$options['extended_valid_elements'] .= ',';
		}

		$options['extended_valid_elements'] .= 'br[clear|class|id|style|title|role]';

		return $options;
	}

	/**
	 * Load plugin textdomain.
	 *
	 * @since 1.0.0
	 */
	public function myplugin_load_textdomain() {
		$plugin_name = $this->get_plugin_name();
		load_plugin_textdomain( $plugin_name, false, basename( dirname( __FILE__ ) ) . '/languages' );
	}
}

new Clear_Floats_Button();
