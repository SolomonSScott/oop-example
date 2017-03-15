<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           TBC_Migration
 *
 * @wordpress-plugin
 * Plugin Name:       TBC Content Migration
 * Plugin URI:        http://agencychief.com/
 * Description:       The TBC Content Migration helps to pull in content from ExpressionEngine and Salesforce into the Profile post type.
 * Version:           1.0.0
 * Author:            Chief
 * Author URI:        http://agencychief.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tbc-migration
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

/**
 *  Defines constants used throughout the plugin
 */
define( 'TBC_MIGRATION_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'TBC_MIGRATION_PLUGIN_URI', plugin_dir_url( __FILE__ ) );

require( TBC_MIGRATION_PLUGIN_DIR . '/vendor/autoload.php' );

require( TBC_MIGRATION_PLUGIN_DIR . '/class.tbc-migration.base.php' );

require( TBC_MIGRATION_PLUGIN_DIR . '/includes/class.tbc-migration.php' );

TBC_Migration::init();