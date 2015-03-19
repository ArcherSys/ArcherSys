<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'acoserver_admin');

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
define('AUTH_KEY',         '&+{7NK]xKXhDHs1NyiK|rr+klmu({(W+oE(:|zDENR+wEx=+.|Ho-4x8G[0Nr;F]');
define('SECURE_AUTH_KEY',  'YVN63-&|<r{f84bUhR=UW_lvc$wyauoeSoC]8MU|DwyjU^_g!gutnW|TD!N),<v6');
define('LOGGED_IN_KEY',    'eR0:f+ccaXF&4NVUa$wD%h-43PQx:2h)>*@b&(i63qv8FD ~]+My|Li6&K;V&0g|');
define('NONCE_KEY',        '_y[5rC-MC2;<o6gUEVt1${dpOB_x2-3V<q[QPf@6Aq2+5><Lo{xiBK<7$yGI%?@<');
define('AUTH_SALT',        '<}HG+8N[5vFcNp{eu7Jk6Wx?c{U{gs*Bux7ca/cslak$o+0xR%j2o0@!$a-k&VTV');
define('SECURE_AUTH_SALT', 'ffgvU|3?uifqF8um,8D#}/StLoacKq#wA~YP%5/m2R|Z:BW$uTa]%xS<e?$hV[_-');
define('LOGGED_IN_SALT',   '@r.pw~bSx+bsV-EnBa@v_`,pJ]hxSwZP~6;RN+XfGYOVkQu6B4aIy0gHiZvz?JNC');
define('NONCE_SALT',       'wvOKwBOK kT-I*>Z061?,#eS;o$W{0KJ(r;2mR$o!D,~ua//~aRP+#- *a:oZE2G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wma_';

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
