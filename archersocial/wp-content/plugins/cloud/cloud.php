<?php
/*
Plugin Name: WP Cloud
Plugin URI: http://wpgov.it
Description: Give every user a personal web-space with WP Cloud, the most advanced plugin to make WordPress a cloud platform!
Version: 0.2.3
Author: Marco Milesi
Author Email: milesimarco@outlook.com
Author URI: http://marcomilesi.ml
License:
Copyright 2013 Marco Milesi (milesimarco@outlook.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'admin_menu', 'register_wpcloud_menu_page' );

function register_wpcloud_menu_page(){
    add_menu_page('Cloud', 'Cloud', 'manage_options', 'wpcloud', 'wp_cloud_panel', 'dashicons-cloud', 50);
	add_submenu_page('wpcloud', 'Settings', 'Settings', 'manage_options', 'wpcloud_settings', 'wpcloud_settings_panel');
	add_submenu_page('wpcloud', 'System', 'System', 'manage_options', 'wpcloud_sys', 'wpcloud_sys_panel');
	//add_submenu_page('wpcloud', 'Users quota', 'Users quota', 'manage_options', 'wpcloud_syst', 'wpcloud_test_panel');
	add_submenu_page( 'null', 'Public Cloud Iframe', 'Public Cloud Iframe', 'manage_options', 'wpclod_iframe', 'wpcloud_iframe_callback' ); 
}

add_action('admin_init', 'wpcloud_reg');
function wpcloud_reg() {
    register_setting( 'wpcloud_options_group', 'wpcloud_version');
    update_option( 'wpcloud_version', '0.2.3' );
	
}

require_once(plugin_dir_path(__FILE__) . 'handler.php');
require_once(plugin_dir_path(__FILE__) . 'panels/users_quota.php');
require_once(plugin_dir_path(__FILE__) . 'panels/users_actions.php');
require_once(plugin_dir_path(__FILE__) . 'panels/iframer.php');
require_once(plugin_dir_path(__FILE__) . 'settings_panel.php');
require_once(plugin_dir_path(__FILE__) . 'panel.php');
require_once(plugin_dir_path(__FILE__) . 'sys_panel.php');
require_once(plugin_dir_path(__FILE__) . 'setup_utilities.php');
require_once(plugin_dir_path(__FILE__) . 'shortcodes/shortcodes.php');

function wpcloud_test_panel() {
    require_once(plugin_dir_path(__FILE__) . 'test.php');
}
register_activation_hook( __FILE__, 'wpcloud_activate' );
register_deactivation_hook( __FILE__, 'wpcloud_deactivate' );

function wpcloud_activate() {
    $namesToCopy = array("index.php");

    for ($i=0; $i<1; $i++) {
	$srcfile = WP_PLUGIN_DIR . '/cloud/includes/php/' . $namesToCopy[$i] . '.null';
	$dstfile= ABSPATH . 'cloud/' . $namesToCopy[$i];
	mkdir(dirname($dstfile), 0755, true);
	copy($srcfile, $dstfile);
	chmod($dstfile, 0755);
    }
}

function wpcloud_deactivate() {
    unlink(ABSPATH . 'cloud/index.php');
}
		
?>