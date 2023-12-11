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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'nvY&&#m0]aZT2DOIV,4$|sUaT@5p0,*COx^%<7KKFPG*W<>}>(fJMJARts%edwYd' );
define( 'SECURE_AUTH_KEY',   '|~AV^>[khoYXv6Q[hB&jOY_NC]i5bWo}RU[Z@/uQNACoRFCiK={x}7;!O2:2Wz0z' );
define( 'LOGGED_IN_KEY',     'lwIDUkd1(LB> y0-p&|{5E{07_pmdG?:?Oph%3]qd=Gqp2J0A>I&!VgR/Kj~sVz&' );
define( 'NONCE_KEY',         '}1{f;GU)~S{aIzxwg;TYcru,kKf=]se^F+kAa`UaQY$iUY1^)]R,&vj,}*S{q0Sb' );
define( 'AUTH_SALT',         'HXBi[Mdtcp8!j}e.#]4i0~ d&Xc<{GRC$cYqKg:HsoZ@qDj_g+s/!.Rqq9[nHfD=' );
define( 'SECURE_AUTH_SALT',  '!SdP}6x$>YTwK0rO)8pOpVQp!Y3QeQ9=~9]oFF  M^%6Vwh=--GdAV|~)X?e6JLw' );
define( 'LOGGED_IN_SALT',    '7?_O_>&lo@.VH#J9-e=8_TH9B>;)xk3f_[W~PO|$0&UZ67(R!J_y+<(QQCXTt`qi' );
define( 'NONCE_SALT',        'rV:3_<PPMQqUonbZQq|H~]n)P<VR;lY$:=_n[+EhGE]@Kwv!tvJOnKW(<o<gO{NS' );
define( 'WP_CACHE_KEY_SALT', 'GwUfRVx~!,zf#x0CV.nO1q3?C9o_Idu&4-M;i!V@!|#&]9vrd4y~#2y__)Wu=Wgz' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
