<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database' );

/** Database username */
define( 'DB_USER', 'dems' );

/** Database password */
define( 'DB_PASSWORD', 'dems' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'DxU% *g9_if!4@)<pg}0.!XH];E?p( H8u|0((F$X~gvYa-6)f^d=Odteoy|rrnj' );
define( 'SECURE_AUTH_KEY',   'W0=$0{ms)7($,~i9uvU-mW,K|z;M;88Mnz$nI;;b4Zqiz:b-zEl|/QQ4{B=UE_;#' );
define( 'LOGGED_IN_KEY',     '[FC=HW^+JL>Lo#C7O-G)zSX&NaxidFmKX.8[QeO~SVkIZ3+WBb=%lT<,)-^H4i))' );
define( 'NONCE_KEY',         'PhF8ThmP_Pv4$$j,nyMldT>>v7rpwV`,HuW[9-v#@Og]`HLF$RBm1fO7m:G2TLH~' );
define( 'AUTH_SALT',         '7VRH3wTTTK%C_I4kyG7{RD&}h:Oh0|KAKouplpKueU>nE0DbWJv! hGMFdoGSlAB' );
define( 'SECURE_AUTH_SALT',  '}t8/Yb?|^,vnH1GL,IF53gbnP$Qvs,,{JARFS_kMQVr> ![1M0x|PAYX?|#q9Diu' );
define( 'LOGGED_IN_SALT',    ']e}-37z,`YifN<=nzLt4D`S>0ua_WrA%w$e6I/m7~ZwKX#X8&Ve9+M^my1?IXY>H' );
define( 'NONCE_SALT',        '9<`]CT3Qk5_+?h*|2eLZ9q)$v,^juQ2 GhcU*!yd_L5AabuqzX9O4etl}_EHoQpu' );
define( 'WP_CACHE_KEY_SALT', '{jQ.6>RICnwG3tKaY`1Sy{n|n`>Z>iB*j/NWt?>O)(#h&>;0m{)0K536gbC8 aGc' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
