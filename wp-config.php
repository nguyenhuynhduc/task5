<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task5' );

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
define( 'AUTH_KEY',         'tFpP{s6 q,X/pHrue#C9AcDvm Q+{w15L4a:3X8[J~>jSS9q1i)FC.|uxbg}y$dz' );
define( 'SECURE_AUTH_KEY',  '-u$>coz}BtWYx;?i3LgL4AU)w5D9^QI2mV^i%Zq3y5%(!Cs(T3FTrD@q;u7&C+4o' );
define( 'LOGGED_IN_KEY',    '?|NL6]I^Q`xR:M)JH/d=4g(tkL7Hv>Ra|S0Gj@+u{{j%N~oQ*?R2 9:z^J50df#^' );
define( 'NONCE_KEY',        ';r6$U_b.-i Ge;dPU%`@Ls)qolp=sKLALz:}S*HNfBir;#Os=q2mKMd;Hq3Zjr$M' );
define( 'AUTH_SALT',        '5FtX5@xpPhgUvrW8pkSe<e+t^+IWsm!Zv.AI7O^k%<OR/. 3 KLs=&.getW:}V0]' );
define( 'SECURE_AUTH_SALT', 'wB5(ujl>hMsNDfEoUjJp**;f2w9q(+!sGv+K~Y?S%xa(rWY{9lCA<n$GL9=uyiDJ' );
define( 'LOGGED_IN_SALT',   'jvm4b+`vhEQpb;zW6<G)@<(b9dh9,I6)X)3pR[tK4^BK~{vQ|T^[}sH[vhmRPkw%' );
define( 'NONCE_SALT',       'gjPQF0/o*4@n@_S@~4qsiV:0<{,T:|T}W}+L;qq{zJ]uG1yH0,]]%7IniMS7XDyF' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
