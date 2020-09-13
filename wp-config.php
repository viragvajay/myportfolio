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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/* this line below is only in case if you are a MAC user!! */
/*This allows you to download plugins and themes on XAMPP on a MAC */
define( 'FS_METHOD', 'direct' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password - !!! in case of LOCALHOST ,PASSWORD SHOULD BE EMPTY!!! */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '.0HZseGfb^h%*|L+-Y]~(Z(Fu__d)*=Ky!BFjR]#|{+M#K}k~J7y<<+Q%u[+Ot?I');
define('SECURE_AUTH_KEY',  'b}3z8.i%EEi0Mzayw)zE}q&p7}[Or<R;-&k8)P--bSiW^<q)Y&fv64Fyo/b`9WSI');
define('LOGGED_IN_KEY',    ',&%|_L<}O|HYFVK]*i|*qk<t[]~4~(PYnIq_x4I99Ov:|-vk{|i|id:LNi<XnvE9');
define('NONCE_KEY',        '0$X{/el-VwbyE+@ZC;Rj|<>TGjxc<(-htO,``-XfzqS]-!eDzHL}OZfZ/3<Qb|k2');
define('AUTH_SALT',        '-hGR%-CuyqWv.c;(>9.A+@b5#;Jg=d10+*BXch{-/taM%@z~?zGv<oJ$Y+mU*Vi!');
define('SECURE_AUTH_SALT', '+eD5nDgmcpAHs(i~1|q:w0++t~}sdh7-^9sDD??}!/H7ygB|7w{hg,]|Ne-0-@sJ');
define('LOGGED_IN_SALT',   '`7jvt+@HKRhw-Cvcvts%+_jH47SdSOLvzZs;<XE/ODK(0GUQ4-jf)i0CC9B7x^4,');
define('NONCE_SALT',       '#:C_(+ii*la%P1{PH]EoFR+_[1j41j*[oUD%XSUx_d:p.s$B;&J|H}-$}36}(p>#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'myportfoliowp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
