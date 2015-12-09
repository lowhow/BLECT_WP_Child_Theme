<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Blect_Child_Theme
 * @subpackage Blect_Child_Theme/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Blect_Child_Theme
 * @subpackage Blect_Child_Theme
 * @author     Blect <esme@blect.net>
 */
class Blect_Child_Theme_Public {

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

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Blect_Child_Theme_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Blect_Child_Theme_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_deregister_style('main');
		wp_enqueue_style( 'main', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/skin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Blect_Child_Theme_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Blect_Child_Theme_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_dequeue_script('application-js');
		wp_deregister_script('application-js');
		wp_enqueue_script( 'c-application-js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/application.js', array( 'jquery', 'tweenmax-js-cdn', 'jquery-easing-js', 'vendor-js' ), $this->version, true );

	}

}
