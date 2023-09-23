<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://lotusinterworks.com
 * @since             1.0.0
 * @package           Simplia
 *
 * @wordpress-plugin
 * Plugin Name:       Simplia
 * Plugin URI:        https://lotusinterworks.com
 * Description:       This Plugin is used for replacing the wordpress branding with simplia and remove the notifications and updations of the wordpress
 * Version:           1.0.0
 * Author:            Ritu Kaushal
 * Author URI:        https://lotusinterworks.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simplia
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0.
 */
define( 'SIMPLIA_VERSION', '1.0.0' );



/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-simplia-activator.php
 */
function activate_simplia() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simplia-activator.php';
	Simplia_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-simplia-deactivator.php
 */
function deactivate_simplia() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simplia-deactivator.php';
	Simplia_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_simplia' );
register_deactivation_hook( __FILE__, 'deactivate_simplia' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-simplia.php';

/**
 * Begins execution of the plugin.
 *
 *
 * @since    1.0.0
 */
function run_simplia() {

	$plugin = new Simplia();
	$plugin->run();

}
run_simplia();
