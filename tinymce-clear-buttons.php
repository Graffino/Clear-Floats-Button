<?php
/*
Plugin Name: TinyMCE Clear Floats
Plugin URI: http://graffino.com
Description: Adds a TinyMCE clear button
Version: 1.0
Author: Graffino
Author URI: http://graffino.com

Originally by: http://www.peix.org

Released under the GPL v.2, http://www.gnu.org/copyleft/gpl.html

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

function tinymce_clear_addbuttons() {
   // Don't bother doing this stuff if the current user lacks permissions
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
 
   // Add only in Rich Editor mode
   if ( get_user_option('rich_editing') == 'true') {
     add_filter("mce_external_plugins", "add_tinymce_clear_plugin");
     add_filter('mce_buttons', 'register_tinymce_clear_buttons');
   }
}
 
function register_tinymce_clear_buttons($buttons) {
   array_push($buttons, "separator", "clearboth");
   return $buttons;
}
 
// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_tinymce_clear_plugin($plugin_array) {
  $plugin_name = preg_replace('/\.php/','',basename(__FILE__));
  $plugin_array['clear'] = WP_PLUGIN_URL .'/'.$plugin_name.'/mce/clear/editor_plugin.js';
   return $plugin_array;
}
 
add_action('init', 'tinymce_clear_addbuttons');

function tinymce_clear_buttons_before_init( $init ) {
    // do not remove empty divs
    $init['extended_valid_elements'] .= ',div[clear|style|class]';
    return $init;
}

add_filter('tiny_mce_before_init', 'tinymce_clear_buttons_before_init');
