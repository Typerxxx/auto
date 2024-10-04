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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'auto' );

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
define( 'AUTH_KEY',         'AWHUYF]J=<GZ)M{vBt#?;[%)KWA}?O1ri@;U?+;A{svT1/q`G~MX=SrgI#H%rF2N' );
define( 'SECURE_AUTH_KEY',  'EV;8}_svp<)+t2dEAQ}5mE?|^QyQ4Ew0ZG=Dx!J07rNl)P%i9wE``S#iMpdVZPpX' );
define( 'LOGGED_IN_KEY',    '}nC9AG!Y,o@4g(y^Ep]5QjaJTP,a58(8@ovJ&M*&GN$*vg<!<o=y5DGC<>Z/P$cX' );
define( 'NONCE_KEY',        '67h=vv3{w`4%E~%(@Gg4g-1G[#twg]JH]6?Wc6}AD9NjSX[14q?P]~3dXJ@]vzI.' );
define( 'AUTH_SALT',        '}^z>&}U<eYG38*]MvE2-v_3JYy2{PA<{P+j>gS;+rcM(skc2Nb<m d^C4t[7eL1{' );
define( 'SECURE_AUTH_SALT', 'k-30I5P1A/ItOA9`%YSPJQbl|,3j}u#}_FMEGG!pn?:UZ%&uypF%K_5E(.V!.8F{' );
define( 'LOGGED_IN_SALT',   ';g1/B.IerN{0=sQpVOFe}&!G!/hE^==3]veh9_f_e(R./2j#wIj17FU>uebeL ;0' );
define( 'NONCE_SALT',       '{~qLvU;i j (753V(FJraeR?sUBah`WkzDuxYjGq8:]E4jh>>qyr`eYq*-{~hU8(' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
