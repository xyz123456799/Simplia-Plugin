<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://lotusinterworks.com
 * @since      1.0.0
 *
 * @package    Simplia
 * @subpackage Simplia/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Simplia
 * @subpackage Simplia/public
 * @author     Ritu Kaushal <ritukaushal999@gmail.com>
 */
class Simplia_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public  function simplia_frontend_filter_gettext( $text ) {
		/**
		 * This function is provided for replace the words purposes only.
		 *
		 */
		$text = str_replace('WordPress', 'Simpila', $text);

		return $text;

	}
	
	  
	

}
