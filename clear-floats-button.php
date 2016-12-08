<?php
/*
Plugin Name: Clear Floats Button
Plugin URI: https://github.com/Graffino/clear-floats-button
Description: Adds a clear floats button to TinyMCE
Version: 1.0.10
Author: Graffino
Author URI: http://graffino.com

Originally by: http://www.peix.org

Released under the GPL v.2, http://www.gnu.org/copyleft/gpl.html

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

// Load the TinyMCE plugin: editor_plugin.js
function add_clear_floats_plugin( $plugin_array ) {
    $plugin_name = preg_replace('/\.php/','',basename(__FILE__));
    $plugin_array['clear'] = WP_PLUGIN_URL . '/' . $plugin_name . '/mce/clear/editor_plugin.js';

    return $plugin_array;
}
// Register button
function register_clear_floats( $buttons ) {
    array_push($buttons, 'separator', 'clearboth');
    return $buttons;
}

// Add button
function clear_floats_addbutton() {
    // Add only in Rich Editor mode
    if ( get_user_option('rich_editing') == 'true') {
        add_filter('mce_external_plugins', 'add_clear_floats_plugin');
        add_filter('mce_buttons', 'register_clear_floats');
    }

    // Enqueue needed CSS
    wp_register_style('clear_floats_addbutton', plugins_url('/mce/clear/css/clearfix.css', __FILE__), false, '1.0.6', 'all');
    wp_enqueue_style('clear_floats_addbutton');
}
add_action('init', 'clear_floats_addbutton');

// Add custom tags to allowed tags to prevent them from being stripped by TinyMCE
// Default allowed tags: class|id|style|title|role
function clear_floats_before_init( $options ) {

    if ( ! isset( $options['extended_valid_elements'] ) ) {
        $options['extended_valid_elements'] = '';
    } else {
        $options['extended_valid_elements'] .= ',';
    }

    $options['extended_valid_elements'] .= 'div[clear|class|id|style|title|role]';

    return $options;
}
add_filter('tiny_mce_before_init', 'clear_floats_before_init');
