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
define( 'AUTH_KEY',          '*h1E?du^nE:b!h1b17?_]W3/.+g#CpDY}3Y+9)$#j]ZNyS;>k?ZBE-Bw=::  2[D' );
define( 'SECURE_AUTH_KEY',   'Af&[t0t;D5C9>TA?Vt,23Dl-1P7.Hxk(v0JK;O(L:dE (#PJUJ,H)2bS;RP.#OJ<' );
define( 'LOGGED_IN_KEY',     '~~q}WwcU-brk7,O>@G&r9M_AX FKS*JjV|!M_7|q9ohlTo;kKXk78vtE?{fiwu@u' );
define( 'NONCE_KEY',         'Ln<G=R*wj}eDu8zO>V!<r/BA??T;#rLL3s<2d5qfj0SHCc^l^$aqC%_*jDA8BI{K' );
define( 'AUTH_SALT',         ')(9og0CoNDa%WguDdZ=q`%Nhq8>}-L$lSwO017C8`%~qqxcLHIXicYmUcW.`)U{S' );
define( 'SECURE_AUTH_SALT',  '!o<}Fjtq0~U+p&ibkmuD+ fNpjWydWQ#_A26L6jW)OZEe] /r&RMR:5|~`Xn,/+q' );
define( 'LOGGED_IN_SALT',    'Z8nxOl:(3~@[,oSNGnJ%r5#.oo*4DaY&;%J)DAJ1[-H[zB>Re:14.D<rbPh4oBgr' );
define( 'NONCE_SALT',        '-1!dg0>}(5x?r@]YG.nS=.!v;o$LEFYQZ0XX`FY6S9`#^NYgATt?@!GT(~cVSoWa' );
define( 'WP_CACHE_KEY_SALT', 'X0D yN&u%Y;H`{~DU@s{0Ko$m.si~qf2};b}H1=I%{(Pi/8#H}b&b~# 2(aG7Z#z' );


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
