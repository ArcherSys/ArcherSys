<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @since             0.1.0
 * @package           WP_Notes
 *
 * @wordpress-plugin
 * Plugin Name:       WP Notes Widget
 * Description:       'Sticky note' style widget to display short, important, time sensitive information.
 * Version:           0.2.1
 * Author:            Steve Puddick
 * Author URI:        http://webrockstar.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-notes-widget
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-notes-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-notes-deactivator.php';


/** This action is documented in includes/class-wp-notes-activator.php */
register_activation_hook(__FILE__, array( 'WP_Notes_Activator', 'activate' ) );


/** This action is documented in includes/class-wp-notes-deactivator.php */
register_deactivation_hook( __FILE__, array( 'WP_Notes_Deactivator', 'deactivate' ) );


/**
 * Helper functions used throughout the plugin. 
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/wp-notes-helpers.php';


/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-notes.php';




/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_WP_Notes() {

  $plugin = new WP_Notes();
  $plugin->run();

}
run_WP_Notes();
