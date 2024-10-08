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
define( 'DB_NAME', 'losciend_training' );

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
define( 'AUTH_KEY',         'ER7d|qitUwAZ;PSMA=T<=1HY[@HxJtrDX,b]t@QS`/O~G/`c!Jo9yAQw#$A?2<p6' );
define( 'SECURE_AUTH_KEY',  'X(b bsX$*F NZlKfzo%[$62?6iKea#1fmWB:]@WuOoV!DL=U5Tos0kJh2.Y.df*p' );
define( 'LOGGED_IN_KEY',    'o9&jZ:skGYWO#relm1JjOL&h0Asd59+1UqZ$qu$>`%vYPqM/94P6:#^+qIE]S8!`' );
define( 'NONCE_KEY',        'OHH-JcIBju.QL;JQQR.i)e@qYzVn:Z#1sE#ia:KHOfvdOZjV6.$G?R$*O5Sw6m>/' );
define( 'AUTH_SALT',        's_q=D|9Kt<uJs$8,sT-~}K$#AGez3t9>//O2)*q^_<E9aw~Iz`M$Vu,,Z[(a[NSE' );
define( 'SECURE_AUTH_SALT', '1QRJpe`Yx` QV4OE5?M XI>H&(YZ0 _cO![}<;3C^4i_ivH]&B,t*+j~(AvXAUDO' );
define( 'LOGGED_IN_SALT',   'cdVd,1}f0$w-ax$]z7ue>ewE!2?qRaD)t*[J?m#dbizs&!oZGv$B=V$Ve(wg-+mi' );
define( 'NONCE_SALT',       'B|20.+>SE4]ZE$_?sbj@R5v8s-MR{lw{_!!Uc,D=EZ?8[=R_LZ)@DNw~h`xGAwe?' );

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
