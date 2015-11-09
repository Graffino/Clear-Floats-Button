<?php
/*
Plugin Name: Clear Floats Button
Plugin URI: https://github.com/Graffino/clear-floats-button
Description: Adds a clear floats button to TinyMCE
Version: 1.0.1
Author: Graffino
Author URI: http://graffino.com

Originally by: http://www.peix.org

Released under the GPL v.2, http://www.gnu.org/copyleft/gpl.html

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

function clear_floats_addbutton() {
   // Don't bother doing this stuff if the current user lacks permissions
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
 
   // Add only in Rich Editor mode
   if ( get_user_option('rich_editing') == 'true') {
     add_filter("mce_external_plugins", "add_clear_floats_plugin");
     add_filter('mce_buttons', 'register_clear_floats');
   }
   // Add needed CSS
   wp_register_style('clear_floats_addbutton', plugins_url('/mce/clear/css/clearfix.css', __FILE__), false, '1.0.1', 'all');
   wp_enqueue_style('clear_floats_addbutton');
}
 
function register_clear_floats($buttons) {
   array_push($buttons, "separator", "clearboth");
   return $buttons;
}
 
// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_clear_floats_plugin($plugin_array) {
  $plugin_name = preg_replace('/\.php/','',basename(__FILE__));
  $plugin_array['clear'] = WP_PLUGIN_URL .'/'.$plugin_name.'/mce/clear/editor_plugin.js';
   return $plugin_array;
}
 
add_action('init', 'clear_floats_addbutton');

function clear_floats_before_init($init) {
    // Do not remove empty divs
    if (!isset($init)) {
        $init['extended_valid_elements'] = '';
    } else {
        $init['extended_valid_elements'] = ',';
    }
    $init['extended_valid_elements'] .= 'div[clear|style|class]';
    return $init;
}

add_filter('tiny_mce_before_init', 'clear_floats_before_init');
