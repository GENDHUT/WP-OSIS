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
define( 'DB_NAME', 'osis_db' );

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
define( 'AUTH_KEY',         'S;{ 5fdB3C*6u;u{5Fj/B;b!~EIrXM6z$_=fw$~lN4ktTzG``6 |&37%LK/Qha_E' );
define( 'SECURE_AUTH_KEY',  'I20a2oC*UX*$$k1:A=V8d);9b;RZsR$Y)hAs(6(HsM]I?TD&}y5;([DEzDE-iGd-' );
define( 'LOGGED_IN_KEY',    '-Zh#?3a]L X)(~wf@@-fE]bdzQ| K~55a%0&R$EWp~8xw;#loCRiOLp79``5BCD1' );
define( 'NONCE_KEY',        ',:)>6{Q1!-HY#gU7Fu>JY$4@>x7dA,WohuN2[N4^@d8u.S)]-{kaiZTmTBH0u2[c' );
define( 'AUTH_SALT',        'YREVT}Kf[V`/l@2sb]2L)7xyYJFeU?Y,G.4ZNR!QR5LFcgvTQ3S(Hx6]B0jn`w3+' );
define( 'SECURE_AUTH_SALT', 'fg}7F}<hU;$C9I8w,++XgsT1IBX:;jD>[YU(ZbFspDUF&V>H@0cG[:Gdk(J`4e|@' );
define( 'LOGGED_IN_SALT',   'R:zntIIonqisW]o/XY/)%4xYMGoHaDtt8l4=NtNB+r^3lZX,(XHBzhH!+!CIBfRy' );
define( 'NONCE_SALT',       'e0=D$Cr+[>t{R)Cps$jb{_EEuN1]FHym4H2=^[MFTVd=;b(c{3?Bl~j_l+3M7:^}' );

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
