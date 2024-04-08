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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Ug)Y}_O.f{sat87Q71)F7X6I=J<m<v0_Ba8TeG$*!UZ:jv7CaXb9]lbjt@y(QgWO' );
define( 'SECURE_AUTH_KEY',   'V{Dj^AUp7tC_34$l:w,S(3C+cCEbWz>SSHbnCE0lq&L6Z:FGG>?L4^1|_}~$r+xV' );
define( 'LOGGED_IN_KEY',     '[V2<qW)gvlSn6!<,1YWt=yhGvK+PQ@P}w33X?@,lv;g CK#*vuhTbR5q->B,)R0q' );
define( 'NONCE_KEY',         'SwT=-:UL@BtX?Y|;7WU(Y,# }gCy)PQXkOb=aFr^cxdl#kk*h|r:#3V$$.DIhspK' );
define( 'AUTH_SALT',         '*JZP)L^g-%A]g^V;#|Zk3k}+.V.-[<Osu[g(kD<K;,D=sjUUr<Y<hpL[3&We>@_j' );
define( 'SECURE_AUTH_SALT',  's3o3?%ZxD2An:C<^g(mw&6pH&`4HHs]e/?5nuA)9xul?bTw[d<Iv4!:Bsj/>+bhQ' );
define( 'LOGGED_IN_SALT',    '1:B9wN<cie)*gQq=0EvYqu}YDw2tJQs!q0!^nz%%6Fm|Bd|T9/Vl7N.kh5{30@MH' );
define( 'NONCE_SALT',        ' ,}d]/?DMT,pT/ /Mm/:,L@yfc9@;:O9>UZ{|}OeB[ad&0A;|7F7Y3ST;2w`pr&*' );
define( 'WP_CACHE_KEY_SALT', 'V?{)UW#4j{Aan.)i=COE]+2ax@16}=C2jZGM$)<U}J>Wh^|1ZV)6ac/4/)%Bx;!R' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
