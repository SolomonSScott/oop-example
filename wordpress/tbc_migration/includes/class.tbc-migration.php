<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    TBC_Migration
 * @subpackage TBC_Migration/includes
 */
class TBC_Migration extends TBC_Migration_Base {

  static $instance = false;

  public static function init()
  {
    if ( !self::$instance )
      self::$instance = new self;
    return self::$instance;
  }

  public function __construct()
  {
    $this->load_dependencies();
    $this->admin_init();
  }

  /**
   * Load the required dependencies for this plugin.
   *
   * Include the following files that make up the plugin:
   *
   * - Plugin_Name_Loader. Orchestrates the hooks of the plugin.
   * - Plugin_Name_i18n. Defines internationalization functionality.
   * - Plugin_Name_Admin. Defines all hooks for the admin area.
   * - Plugin_Name_Public. Defines all hooks for the public side of the site.
   *
   * Create an instance of the loader which will be used to register the hooks
   * with WordPress.
   *
   * @since    1.0.0
   * @access   private
   */
  private function load_dependencies()
  {
    /**
     * The class used for setting up admin actions and hooks
     */
    require_once( TBC_MIGRATION_PLUGIN_DIR . '/admin/class.tbc-migration.admin.php' );
  }

  private function admin_init()
  {
    TBC_Migration_Admin::init();
  }
}