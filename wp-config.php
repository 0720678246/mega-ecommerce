<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mega-ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mL]@OV$GstD)mkc))}e%Oz{-mRp^;riQ]2M]u0)}*eO$`.rx^fje&-1k1vSC3%]4' );
define( 'SECURE_AUTH_KEY',  '47eL?x?Ys(}jNBJIJ!y!2hoBrqu|#12hTlzR~0^ppfs0t^iFGGv,7IeOcEW=]|GY' );
define( 'LOGGED_IN_KEY',    '=h5^$DL&mwE8gSt3*TU[+nfhcgBZx4|e?/SO;X}K#+_Eb8#5FAw/WM|6Kr5c-59*' );
define( 'NONCE_KEY',        'w0QOo2;eNthmX[8-,z4y_gS#OQ$s7b9|j,clVYN8TIogyJ.p?t6?A[*}F?-u].8o' );
define( 'AUTH_SALT',        'v#hzm+H4%dy7Ng M{oyfm-w<^oX_!$K~MDL&]RTac^V5l-.G~@B.#Goi2S_4vV<Q' );
define( 'SECURE_AUTH_SALT', '.;;<*+eT5{}AkLz}TK.gc]8I>v#*A!_eRf1DInwo!<clbDduc:(lP S9tD7%gtHf' );
define( 'LOGGED_IN_SALT',   'G6|UR_mc--UbK|dBZfUwLBAVoqNBHBQJu-#jFR&k[NH>-|TmIF9hXD>{LDlx@$E#' );
define( 'NONCE_SALT',       'zylR@JL;)7ELdFqh:Jh:Uv:;bh1Luh Ft^yHvRYqcYHe@.>.{PqXvgFqFVD6&tz2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
