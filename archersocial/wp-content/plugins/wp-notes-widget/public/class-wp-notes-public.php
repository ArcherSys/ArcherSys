<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      0.1.0
 *
 * @package    WP_Notes
 * @subpackage WP_Notes/includes
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    WP_Notes
 * @subpackage WP_Notes/admin
 */
class WP_Notes_Public {

  /**
   * The ID of this plugin.
   *
   * @since    0.1.0
   * @access   private
   * @var      string    $name    The ID of this plugin.
   */
  private $name;

  /**
   * The version of this plugin.
   *
   * @since    0.1.0
   * @access   private
   * @var      string    $version    The current version of this plugin.
   */
  private $version;

  /**
   * Initialize the class and set its properties.
   *
   * @since    0.1.0
   * @var      string    $name       The name of the plugin.
   * @var      string    $version    The version of this plugin.
   */
  public function __construct( $name, $version ) {

    $this->name = $name;
    $this->version = $version;

  }

  
  /**
   * Register the stylesheets for the public-facing side of the site.
   *
   * @since    0.1.0
   */
  public function enqueue_styles() {

    /**
     *
     * An instance of this class should be passed to the run() function
     * defined in WP_Notes_Public_Loader as all of the hooks are defined
     * in that particular class.
     *
     * The WP_Notes_Public_Loader will then create the relationship
     * between the defined hooks and the functions defined in this
     * class.
     */
    
    wp_enqueue_style( $this->name . '-style', plugin_dir_url( __FILE__ ) . 'css/wp-notes-public.css', array(), $this->version, 'all' );

  }

  /**
   * Register the stylesheets for the public-facing side of the site.
   *
   * @since    0.1.0
   */
  public function enqueue_scripts() {

    /**
     *
     * An instance of this class should be passed to the run() function
     * defined in WP_Notes_Public_Loader as all of the hooks are defined
     * in that particular class.
     *
     * The WP_Notes_Public_Loader will then create the relationship
     * between the defined hooks and the functions defined in this
     * class.
     *
     * Currently there are no scripts to include
     */
    wp_enqueue_style( $this->name . '-fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), $this->version, 'all' );

    //wp_enqueue_script( $this->name, plugin_dir_url( __FILE__ ) . 'js/wp-notes-public.js', array( 'jquery' ), $this->version, false );

  }

}
