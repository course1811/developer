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
define( 'DB_NAME', 'codeanddesign' );

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
define( 'AUTH_KEY',         '1z2&)Cw7ZH?CFhlTbN?!;GR#NqS0NEZg]LZ %=x(bk1-YUuP3>6A#D0QoK.e/WgQ' );
define( 'SECURE_AUTH_KEY',  'PeF OAtD<3tay]6OCS,Tby$gF*[u=9:ya W[VYLv=Q}~f7z_sX)57E(MEs=N3&o~' );
define( 'LOGGED_IN_KEY',    'UxV,o3bJ?CFTHzOaKq>^llr>K%]=`<A5pk+RB]eq{]rPuoB9N20w.!KkQj^ODF![' );
define( 'NONCE_KEY',        'l*62_/ae7Qsa9TEucQ;hZmHm#SL)/{o>X4& }:Kr1z0GjDARLML/y0!/lnt7Xo9=' );
define( 'AUTH_SALT',        'MI(EcMcCP4dzWx5_eA-S8E!PySrB%e[DLkm^SjG6)l!Zj}Y&]3VSGs48A?Kc#I<&' );
define( 'SECURE_AUTH_SALT', 'N!xIp B(.OQcT/H@yOL3pHN;+q %,{pOoNF;pX~*t;0)>wq2*/}g$hEW>F_4RExU' );
define( 'LOGGED_IN_SALT',   'cTw]08_s9[&])PN[Zdc8w%vgBspuz-TPr8?kw MYGJ5=As1[e}egTftyDVK+PsX&' );
define( 'NONCE_SALT',       '7!cb,/T~$RRKHQyD|IeY5lwhKLr;}dO0U0 SqDhkeO(Z4+ftEP4D#iVmr%,<d<Bb' );

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
