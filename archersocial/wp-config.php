<<<<<<< HEAD
<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
@ini_set("max_execution_time", 18000);
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\archersocial\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'acoserver_acoserver');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'aco1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k.i3Q6G8S+GbqMu+e,&h*HyrrM!]2#6nTgS=]+8xlsXnNpa3WNlDQB@w<aT/z8q:');
define('SECURE_AUTH_KEY',  'CNK,qHe&s;8~d5WprB]un+-.5):LMP]^LY60kCL]-n5LHY%&p~2R&yOF^N$B?i^<');
define('LOGGED_IN_KEY',    'zhdpMLAHk;IT8QI.4N+xSy.UOT0p}K^u+4H-X ))4+ gfNV.0kd`^q@2us;H^S0&');
define('NONCE_KEY',        'xqbUeTHGY|^:Pdm~;1udtE?=u9xiK*o+,k+R#/5j*4Lz@j=lVF>s8mK3|c6@lR.!');
define('AUTH_SALT',        'JQ.ptvuOaP9ko-xz iknN;1Sa|Dx8NG,+2)s47+*8U1ljxRWt(GZlA}>KmzWIwi:');
define('SECURE_AUTH_SALT', 'wSezl(4oSq?;BVCV-.I?.eH8BC}$-nAIs).X?}bbZNhzt?.[~f~zWmA}~BC%](M@');
define('LOGGED_IN_SALT',   '(9MUbiuI|+2RBl|L$yczcyKzi%bv,j(qkd>eSj|0e0(VRSP<V!dH.qKLB%2t-Y!1');
define('NONCE_SALT',       'm<vJQt?0[uN+SS+t-3+-;Uqr)r- ,?,.Gsl<sr,|YyZy+F$oH(|k}*F4EG*-#R%{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
=======
<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
@ini_set("max_execution_time", 18000);
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\archersocial\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'acoserver_acoserver');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'aco1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k.i3Q6G8S+GbqMu+e,&h*HyrrM!]2#6nTgS=]+8xlsXnNpa3WNlDQB@w<aT/z8q:');
define('SECURE_AUTH_KEY',  'CNK,qHe&s;8~d5WprB]un+-.5):LMP]^LY60kCL]-n5LHY%&p~2R&yOF^N$B?i^<');
define('LOGGED_IN_KEY',    'zhdpMLAHk;IT8QI.4N+xSy.UOT0p}K^u+4H-X ))4+ gfNV.0kd`^q@2us;H^S0&');
define('NONCE_KEY',        'xqbUeTHGY|^:Pdm~;1udtE?=u9xiK*o+,k+R#/5j*4Lz@j=lVF>s8mK3|c6@lR.!');
define('AUTH_SALT',        'JQ.ptvuOaP9ko-xz iknN;1Sa|Dx8NG,+2)s47+*8U1ljxRWt(GZlA}>KmzWIwi:');
define('SECURE_AUTH_SALT', 'wSezl(4oSq?;BVCV-.I?.eH8BC}$-nAIs).X?}bbZNhzt?.[~f~zWmA}~BC%](M@');
define('LOGGED_IN_SALT',   '(9MUbiuI|+2RBl|L$yczcyKzi%bv,j(qkd>eSj|0e0(VRSP<V!dH.qKLB%2t-Y!1');
define('NONCE_SALT',       'm<vJQt?0[uN+SS+t-3+-;Uqr)r- ,?,.Gsl<sr,|YyZy+F$oH(|k}*F4EG*-#R%{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
