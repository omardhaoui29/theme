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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'wXpO P8=hffcF.ADuv@1`?hY-NE|5t~p&9zCGa7JBdHIeRo*_+<v.)ds=E:KX%_w' );
define( 'SECURE_AUTH_KEY',  '~q*s0e2cm~0oSJ+Vmj*DF(~C>)ISvm<)3P)*Zqx$^2Z5>s6J!}`nQm28,nYQ}5bP' );
define( 'LOGGED_IN_KEY',    '^AI1c]:yQyp.aXiqJ!W]ko4HM-pJE]Kx`6?mB {:Ahf(olB3g.9XE>6I[aN0KTvh' );
define( 'NONCE_KEY',        'mUaIjc>e|x}Xnf_IcYrz`Y7#4QwiZ?B2|c+m+gDdQ~vnG3UnqPzX?Xo<!gbR*H<s' );
define( 'AUTH_SALT',        '9&[H2O`auaKZ.+a=>m>*Cub9[^5EC@p*{+S&~mPyy|c%-@|U49(MzX}6jA5ypU(w' );
define( 'SECURE_AUTH_SALT', 'BAL,Aj_`#^4Vv:n&u_bsFv!%;]6?rBQhT>M,%iZ/*efXeEJ//~W(RR4.i+vc3JQa' );
define( 'LOGGED_IN_SALT',   '(v)uIt~a{0Z$>O&5=h3vV$OZ;*c,}vY9J~tadJ+)T-6I_E8tgUf/H^m/7[;8~#=]' );
define( 'NONCE_SALT',       '&+q)kwA[PDa{DYAKRkl^?0_0l=4X&R/X.Yfp|HAP@L2U{6Q^PnK zHG,)w|j#gP-' );

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
