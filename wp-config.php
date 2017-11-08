<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'assignment2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'R!xaZ_$`Y5Qo1-:a#)ztG-~oCwzDAN+CmmYJr>t.{<c,LDrbH%pExp/Pq5Q(`yV}');
define('SECURE_AUTH_KEY',  '.bp;HGwTeD6k}<(Lga*g@,%?!!RB@T&dboz0HeTzw6N[-GE<#or)xch g9;VUGn6');
define('LOGGED_IN_KEY',    'D)pRFJXAfh`#{JnoJl/5IcSa DoJzrn<h:9=tE,^D21FH8Ur>MOMJJ~|5{LNC^uI');
define('NONCE_KEY',        'OPy`>TriB])=`>Zsd3TC;6{Ru5zTzWhU=fAG@MYyKYIMlTsQrI#{,,sf&dIH&ezY');
define('AUTH_SALT',        '0IO1K}=,C|ynUsqKHZp4-E[Qc6jwY)7|D [W]i/[,3n*)75Y/*ugD53679EA:%nd');
define('SECURE_AUTH_SALT', 'G=d8O-xe_yyuzgU]z,4tq;lKf96oYD3a,HvaC3G+8@W27H+Fn{L*L8,YgTxOa;xQ');
define('LOGGED_IN_SALT',   '7RWp`td2&j`U3H!A.>R%RAEQ24_d.v%^oJW60)IH$FB[4NI_+@M)k+r_n<vFesXw');
define('NONCE_SALT',       '_gsB^TSc%d=i#cNO.Xg+$0;a2d_tQJwJkO07=~G<wAef*XpQj5_9(Fjuv<epJC:V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
