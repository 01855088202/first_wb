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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'firstd' );

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
define( 'AUTH_KEY',         ':+HFb#>1+Fs_)Eh>(O!!;v+]pA]f 0$Od:sI8K=~l;YcHNO#c~*A ]O],LRaVP`h' );
define( 'SECURE_AUTH_KEY',  '!apcuH},!4I8&aDB,)5x@,xr?.Nb_?cc5GQyz5}0!KaS7m<X6qZ+u3F|62fO;a%[' );
define( 'LOGGED_IN_KEY',    'gRz&D=Lsf(:!AnUA;Yr|2LcfB:x_>n)LcU{<u5V3G[%/(&M?T6-^1m+gNVG@KwVs' );
define( 'NONCE_KEY',        '{gc.sM&a)J}7Kbgy(O1j5];yxMS?dVv/!${D9MFjxa?b;3<PZ!mEx*zA+UPN}no:' );
define( 'AUTH_SALT',        'r;ojujv|a0@0%3/VSj-QaAH_yanF,hk43#J^Oz=)vivOiQ~YPFGb!i(~DVOpAcj7' );
define( 'SECURE_AUTH_SALT', 'G:P!}8/01Q=n$Q./uH/72:?e)i25]|KNaD9 {A+r|=V:Kp9u5DPmMM$JH0mi|{8y' );
define( 'LOGGED_IN_SALT',   '7AE#m;B6K1S4tGM^VU#*-OJE@[,qB =90W=%efxbs$:c-OpVZ@O X~ain7w+1py/' );
define( 'NONCE_SALT',       ']] (5 FgW %NV[ry&o9~eK`QCyJkYaVnydUNhCEoGy%/rBB*jk30>HTqk.}[L/!8' );

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
