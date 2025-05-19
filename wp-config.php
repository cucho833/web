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
define( 'DB_NAME', 'Cuchito' );

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
define( 'AUTH_KEY',         'vy[~5I!&-Ne^*U!.W>Nr3pZY8iouf%btpzyLt_g,/9d3sVtZ`^# R`%v1e~O]n?R' );
define( 'SECURE_AUTH_KEY',  'kQUh|yyOL[-vH&_/MN|I).W]zwe -x4$)aoUqTRefO>/}I}w7R9#hpFv:UT>U@7^' );
define( 'LOGGED_IN_KEY',    '~J9cQoszQa{v(rr&>Wt;wBIP3a&hn,w:kTPhEgb:)FcuE,<tBdf=O2qkm<v@y%n#' );
define( 'NONCE_KEY',        'zcim@W:eVQfrS8 I4$mRaxg{>5rmAc!@6#Zh3p K1!yjmvavsTTUY@g<$hEs>d&!' );
define( 'AUTH_SALT',        'l@(oqa7D`(NG_j<k_!$IO$xIc26OXv=&Bn6eA)!MM:r)XT/I}RcsUlT@>6%UN=D=' );
define( 'SECURE_AUTH_SALT', '.vsa/mLUY%nM:+K@g&fq>kUV`t!{`fPofCH>{<$f=UWsdA^gl|7n9c[&MjaU~nt~' );
define( 'LOGGED_IN_SALT',   'e(Zec  RZxFt/h~x|3|LFSB[zUUmhB?d(Ev[3Pj4!)$f$bA9wcAD_9<1@$rZwx2>' );
define( 'NONCE_SALT',       'hzVmJTvUIS1=Vzh(!>lsz7&VHN 0G+]fMG!Jk2pRn4,?HszgS8;&e!kDrq %bUDW' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
