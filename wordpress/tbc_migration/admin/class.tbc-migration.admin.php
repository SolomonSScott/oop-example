<?php

class TBC_Migration_Admin extends TBC_Migration_Base {

  static $instance = false;

  /**
   * The settings page url
   * @var string
   */
  public $page_url = 'tbc-migration';

  public static function init()
  {
    if ( !self::$instance )
      self::$instance = new self;
    return self::$instance;
  }

  public function __construct()
  {
    add_action( 'admin_menu', array($this, 'create_settings_page') );
  }

  public function create_settings_page()
  {
    add_menu_page(
      __( 'TBC Migration', $this->plugin_name ),
      __( 'TBC Migration', $this->plugin_name ),
      'manage_options',
      $this->page_url,
      array($this, 'output_settings_page')
    );
  }

  public function output_settings_page()
  {
    if( isset( $_POST['tbc_salesforce_form_submitted'] ) ) {
      $this->handle_post_request();
    }

    $salesforce = TBC_MIGRATION_PLUGIN_DIR . '/admin/views/salesforce.php';
    include( $salesforce );
  }

  public function handle_post_request()
  {
    $csv = new parseCSV($_FILES['salesforce_csv']['name']);
    print_r($csv);
    var_dump($_FILES['salesforce_csv']);
  }
}