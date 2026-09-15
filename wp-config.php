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
define( 'DB_NAME', "project15" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '7&Yt@6?YZXbNk0ZZaFmYO?Ht3lD8h %a!M@)e|: rn0^e/iai%A#nDU]n%^ik[,O' );
define( 'SECURE_AUTH_KEY',  'zJ=z&RZ}X`)DJk#+^ZQ1b:8+Q,Lj(EQe=p4c$m^UilQ~3|j>w4!YKVP5x:q#Khev' );
define( 'LOGGED_IN_KEY',    ' txei;t]!Q3Z0-~Lt6zZ): J!i`qM()5>c,};I<@ZVW*5s#s|7YoKI+S80C3uAjL' );
define( 'NONCE_KEY',        'NunvZSmcq|,xe72vo)F}FYT5%i?^dGE>1MFK^4,mDL?#U!JWZg`+wb,{X<vUWw_C' );
define( 'AUTH_SALT',        'h5Y1.zVMa^!o/A#<N:g0KwZv{Ydc;KFvG1)9/BM|{*i{8g~^tG)F|*73s+7.MWkn' );
define( 'SECURE_AUTH_SALT', '9&:<)^XHm^+`:GX@~{7CAvj{Wm8~we-5k-wcwgY,oY]+=tq)6Zqy)e#.]2MysDba' );
define( 'LOGGED_IN_SALT',   '2B&;h=s>76oC]aN/J?(Gd*KF:(k`E)^nBeWpc%lRGp[#mNJg#<KEvnv;QG;_1IgF' );
define( 'NONCE_SALT',       '[&_dg_~H9AB1ZXxpw_%G<o<)E)R@%C9:qNO|vkVLD+=!77gXrv<i8[W~SIPj3A4X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



define( 'DUPLICATOR_AUTH_KEY', '#9W?2MrHO70OuQB~jM`BF)9O!_KQP9&UOeSdM ;gXzja}{D9!y#Z~#O;gVD].*P~' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
