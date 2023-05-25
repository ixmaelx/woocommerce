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
define( 'DB_NAME', 'pgalarce_woocommerce' );

/** Database username */
define( 'DB_USER', 'pgalarce_woocommerce' );

/** Database password */
define( 'DB_PASSWORD', 'woocommerce12345' );

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
define( 'AUTH_KEY',         '~mVE{}b[=Q(g:Sd,(KcO+(l9||m]G7q[fq;+/dxLlebvxt8P1gp`G!GB{L%EjD2,' );
define( 'SECURE_AUTH_KEY',  'R{=-gb_Mp$4aDy;W/hjhqK>XXnYQwL.jc(t9k(pK+@P<Gi%_5D?B s.mQI:W}qxi' );
define( 'LOGGED_IN_KEY',    '=[n/-4,c>OBWRoXXiVqAdcY;$p!|IJs|YS7/*7I3h;vz:!@7C_!|z:Zh0]vegzfW' );
define( 'NONCE_KEY',        '1BCd8_uCWZibM-n`a{;#cM-LOZ#OJ7iPnkw.as-%wzqY^sbJy}np$#akW {b0uSe' );
define( 'AUTH_SALT',        '{f1xy&tIqvHmw@e8!xO{Blfu]+}2am`.NM`qgq*zqrF`@)^~V.Xk)]/qLer-4dtO' );
define( 'SECURE_AUTH_SALT', 'Y0RRl`R71n&aha_U1 d489uQU/>2[4@+3PiY5C(>,!(PeB)3Hc5_LGLch6cuc/|g' );
define( 'LOGGED_IN_SALT',   '=v;/KWu~f!3i_dA~/Tt+GSFTi2>G0}u,WPq{m.e{Kq1~=,upXWY;dtj=ST.Qe}} ' );
define( 'NONCE_SALT',       'Pmw4(b=s$ .RLkHDGB)uaZuN:E+#Ba0# zTG$*Ho(]fZBBn.3:Rj1sXxPB{u(Opl' );

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
