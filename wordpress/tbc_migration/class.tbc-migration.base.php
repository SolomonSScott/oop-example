<?php
/**
 * The base plugin class.
 *
 * This is used to define the plugin name and version.
 *
 * @since      1.0.0
 * @package    TBC_Migration
 * @author     Solomon Scott <solomon.scott@agencychief.com>
 */
class TBC_Migration_Base {

  /**
   * The unique identifier of this plugin.
   *
   * @since    1.0.0
   * @access   protected
   * @var      string    $plugin_name    The string used to uniquely identify this plugin.
   */
  protected $plugin_name = 'tbc-migration';

  /**
   * The current version of the plugin.
   *
   * @since    1.0.0
   * @access   protected
   * @var      string    $version    The current version of the plugin.
   */
  protected $version = '1.0.0';

}