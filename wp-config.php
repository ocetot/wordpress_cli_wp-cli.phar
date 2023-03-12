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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'api3' );

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
define( 'AUTH_KEY',         'HtbrV|[&IHP%@FFiboYlR=ut.4ihu]BZjC]>3sMfv1Mh]L@-F63c_me?>!+L<.y|' );
define( 'SECURE_AUTH_KEY',  'aaug?c{@s-wy%B&,pN$Q`lOwM|Hboo@&N3=d2-.HehS8emcXx{mM[e/as{AJux:N' );
define( 'LOGGED_IN_KEY',    '+=|f%isX&B-qA9B!}[=k=Jz^&N{>|VN:APOh!S{< 1X4}pN%&]rwA9&v:-se)FS?' );
define( 'NONCE_KEY',        'DhG-<^U9|C@A$as<Y>@!V<]Md.2->GRB&wCwUL].BvtZ;]v+] eSK%LOH0%p`6R-' );
define( 'AUTH_SALT',        'IZEDVf04B;fJ=Q/qROy:=}q@uJ@>.(eI|F%aftN;erPFe-vi^s=jt<Tu1d[-$=BL' );
define( 'SECURE_AUTH_SALT', '}-sRy[!s-C#*~hp7dQ+Ls1Orth`i.4`qIXpzYv&9FiAOc:U}d.4&]?q<x%gPD~`:' );
define( 'LOGGED_IN_SALT',   '{rauST5~N2<A&6Xa K;jc$PMGR$dMDW`m;?o5A8,0 =5Ttx8g~[r@kc9bj]_/nSn' );
define( 'NONCE_SALT',       ',7<8&I6|H2ku_tce+1 [r`[Y5P1#[6)4Q9-JpF^S:]Gna}2SJcqaKe7NBs[A8p&.' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
