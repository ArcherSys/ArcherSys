<<<<<<< HEAD
<<<<<<< HEAD
<?php
/**
 * Install theme network administration panel.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.1.0
 */

if ( isset( $_GET['tab'] ) && ( 'theme-information' == $_GET['tab'] ) )
	define( 'IFRAME_REQUEST', true );

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! is_multisite() )
	wp_die( __( 'Multisite support is not enabled.' ) );

require( ABSPATH . 'wp-admin/theme-install.php' );
=======
<?php
/**
 * Install theme network administration panel.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.1.0
 */

if ( isset( $_GET['tab'] ) && ( 'theme-information' == $_GET['tab'] ) )
	define( 'IFRAME_REQUEST', true );

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! is_multisite() )
	wp_die( __( 'Multisite support is not enabled.' ) );

require( ABSPATH . 'wp-admin/theme-install.php' );
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<?php
/**
 * Install theme network administration panel.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.1.0
 */

if ( isset( $_GET['tab'] ) && ( 'theme-information' == $_GET['tab'] ) )
	define( 'IFRAME_REQUEST', true );

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! is_multisite() )
	wp_die( __( 'Multisite support is not enabled.' ) );

require( ABSPATH . 'wp-admin/theme-install.php' );
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
