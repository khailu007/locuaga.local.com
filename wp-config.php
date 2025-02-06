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
define( 'DB_NAME', 'khachhang_wp_locuaga' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'd@t@base' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

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
define( 'AUTH_KEY',         '}N&v5oH>YHOE:6{K.{N0^)J Mpwoq.y~CQ39=NE~V+u7zp![PERr0<LQBwpt=`4T' );
define( 'SECURE_AUTH_KEY',  '`B57n`o7~kj{C:pBv>Vz~iIy@i ;)yc|D?N#[h4puSHCJD;m>Pir*0(D56aArG&E' );
define( 'LOGGED_IN_KEY',    'ps!cU)>5=}TL$a*)*V&7|s:l|czj3J6PN}M&%u%lqJ5qgB[3Y_i3%Uo{?^d0|~D=' );
define( 'NONCE_KEY',        'v|OG_@Kri]O[5;=|pc, @rMq4]?ZxWPy#`m2h)wE?@_{,KB9f1E /7bsHm}YjB=h' );
define( 'AUTH_SALT',        '];P,wcS]t+wnCfD~i{;0I@I#+o(/LOhy@%xi(|^ktFOl8wczMmv%Xls5bhBO>?[;' );
define( 'SECURE_AUTH_SALT', '_{!bIy^bQI}_X9n$-L,uNZT-5$rblt;Su5x!uxP_g+k<!JF>:LA0_tD6#2M( Z2T' );
define( 'LOGGED_IN_SALT',   '112u|Xyp@Ge^**#|^-Z!|.B&X)D7q=n=9y@hOW~TFBb^BAdC;^YI{!-}EU*SQQfl' );
define( 'NONCE_SALT',       '[J[$0wGYoPXDp5ZMBG|1qV{S|617Z7yNR+;?~E7mQa}@G;vXij5MCSAzfeOK{_r.' );

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
