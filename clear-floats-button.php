<?php
/*
Plugin Name: Clear Floats Button
Plugin URI: https://github.com/Graffino/clear-floats-button
Description: Adds a clear floats button to TinyMCE
Version: 1.1.3
Author: Graffino
Author URI: http://graffino.com

Originally by: http://www.peix.org

Released under the GPL v.2, http://www.gnu.org/copyleft/gpl.html

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

/**
 * Load the TinyMCE plugin: editor_plugin.js
 *
 * @since 1.0.0
 * @param array $plugin_array Plugin array
 */
function add_clear_floats_plugin( $plugin_array ) {
    $plugin_name = preg_replace( '/\.php/','',basename( __FILE__ ) );
    $plugin_array['clear'] = WP_PLUGIN_URL . '/' . $plugin_name . '/mce/clear/editor_plugin.min.js';

    return $plugin_array;
}

/**
 * Register button
 *
 * @since 1.0.0
 * @param  array $buttons Buttons array
 * @return array          Updated buttons array
 */
function register_clear_floats( $buttons ) {
    array_push( $buttons, 'separator', 'clearboth' );
    return $buttons;
}

add_action( 'init', 'clear_floats_addbutton' );
/**
 * Add button
 *
 * @since 1.0.0
 */
function clear_floats_addbutton() {
    // Add only in Rich Editor mode
    if ( get_user_option('rich_editing'  ) == 'true' ) {
        add_filter( 'mce_external_plugins', 'add_clear_floats_plugin' );
        add_filter( 'mce_buttons', 'register_clear_floats' );
    }
}

add_filter( 'tiny_mce_before_init', 'clear_floats_before_init' );
/**
 * Add custom tags to allowed tags to prevent them from being stripped by TinyMCE
 * Default allowed tags: class|id|style|title|role
 *
 * @since 1.0.0
 * @param  array $options Options array
 * @return array          Updated options array
 */
function clear_floats_before_init( $options ) {

    if ( ! isset( $options['extended_valid_elements'] ) ) {
        $options['extended_valid_elements'] = '';
    } else {
        $options['extended_valid_elements'] .= ',';
    }

    $options['extended_valid_elements'] .= 'br[clear|class|id|style|title|role]';

    return $options;
}

add_action( 'init', 'myplugin_load_textdomain' );
/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function myplugin_load_textdomain() {
  load_plugin_textdomain( $plugin_name, false, basename( dirname( __FILE__ ) ) . '/languages' );
}