<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing-medicine' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '|s6lQJo,O^MN=crw0^J6k/-L^9oj1n?|DShaIkl,r8?Lb7[7GbyyEr14zk%8{+tV' );
define( 'SECURE_AUTH_KEY',  '_gi4H3p^;CbFnT}wTBGstP-mvckE#2%WxUb]26JT}c#WP)C^TvI|eo7{j-1QGA#E' );
define( 'LOGGED_IN_KEY',    '=[S@dZr;N(J4>$)[byT2ZObRK6Zb]MHuVR)mQd$Kb,@!t c]-b5Q:Dy0W7&PWJII' );
define( 'NONCE_KEY',        '^Ec~k9e@!@-*H4dFxn7C=Ppc9<.)SC8PGY<vsle)9ullxu!C ly[|Q+cjH3wo]XQ' );
define( 'AUTH_SALT',        '*Ok*FBnQ@>Vc8y|dn5XK_CIV/[`?6Si5n!@G$p}^pz0UA)iQhAk#>}A4J3+yE<_:' );
define( 'SECURE_AUTH_SALT', '2wKZUoC#*>@c0{cHlsq}X37o{1z<0`2rAg`$A<_SQ,iv*oyLWs~cQ8tgH,9J?_.@' );
define( 'LOGGED_IN_SALT',   'u{f,M~pvFqglH6t-2Z-:zO7;3UYiXU?hr8uG4&yn-V7,S*2:Wv@wX+h/T^U]@VM2' );
define( 'NONCE_SALT',       'P,7uO#B w$4_F!#4>p}uk&g*Cy<>qjrs=^;.s6(VJ|M}j>0vza+PKx 5QTDl~/_1' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
