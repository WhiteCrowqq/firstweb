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
define( 'DB_NAME', 'fristweb_db' );

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
define( 'AUTH_KEY',         'lbk9uju@BF3JjtW$8`OL]@IT6Fy7FOv5q1eA/tequ!8fHSntqKKYrZi*T>*i2.G2' );
define( 'SECURE_AUTH_KEY',  'P|T~Z+ u`2$O*nA?JfX4Uo3g 4~G;@:,S2udQtk-8<7H`J7SKE07EJf%PB3)JWPm' );
define( 'LOGGED_IN_KEY',    '6P3 ^Brjqb%FB(`RBI94/Ui-?=LChJo:=,AtK&o7Z!ct@b0W{{vHPv<V3xaocIYj' );
define( 'NONCE_KEY',        'rO2uO(mNo3LX]?Qt#!u#(ncH*I68^RWOC2[pMEqnH0M*m:x27/A@Mb;2j#eY3iyM' );
define( 'AUTH_SALT',        'dXD~J22a(;$/K]I=;`rvdQ@kmh68oyp?N-zN;P>Gvo,JWAFHP m`1LAvc]gvTcJ+' );
define( 'SECURE_AUTH_SALT', '`g0hS->*prxXN{x)bA/K/LxwK`@|]FG(u0ZF@T|qh o,T:-qx|DQn`)c_&Hf:9O*' );
define( 'LOGGED_IN_SALT',   '7+pU9 6<*3sj(Gqt/T0{`,q+3~7vm&66}bpxF{n5KsA?3LEs,@;YPh@*.~:_x?#R' );
define( 'NONCE_SALT',       '[yfsfi^pFi|C,:NtNT6xQQ)TzBc4>lS+M(U]A:KRFN^Jm|;;DoCIVkHZCu5C]{? ' );

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
