<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://lotusinterworks.com
 * @since      1.0.0
 *
 * @package    Simplia
 * @subpackage Simplia/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 *
 * @package    Simplia
 * @subpackage Simplia/admin
 * @author     Ritu Kaushal <ritukaushal999@gmail.com>
 */
class Simplia_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	
	public function simplia_remove_core_updates(){
		/**
		 * This function is provided for remove the core Updates purposes only.
		 *
		 */

        global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
    }

	public function simplia_hide_all_notifications(){
		/**
		 * This function is provided for remove the all notifications banners purposes only.
		 *
		 */

			remove_all_actions( 'user_admin_notices' );
			remove_all_actions( 'admin_notices' );
   	}
	   public function simplia_custom_text_replace($translated) {
		/**
		 * This function is provided for replace the words purposes only.
		 *
		 */

			$words = array(
				'WordPress' => 'Simplia'
				);
	
		$translated = str_ireplace(  array_keys($words),  $words,  $translated );
		return $translated;

	}
	
	}
