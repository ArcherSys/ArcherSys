<<<<<<< HEAD
<?php
/**
 * Network Freedoms administration panel.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.4.0
 */

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! is_multisite() )
	wp_die( __( 'Multisite support is not enabled.' ) );

require( ABSPATH . 'wp-admin/freedoms.php' );
=======
<?php
/**
 * Network Freedoms administration panel.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.4.0
 */

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! is_multisite() )
	wp_die( __( 'Multisite support is not enabled.' ) );

require( ABSPATH . 'wp-admin/freedoms.php' );
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
