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

include(dirname(__FILE__) . '/config.php');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define( 'DB_NAME', 'wordpress-sample' );

/** Database username */
// define( 'DB_USER', 'root' );

/** Database password */
// define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
// define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '0TtZWY_Li)<++m%6@rn&=B:N-IOfTQd#k2x>Zy3AyWzF.*4o4m(ip5bZ)ZNq&}m5' );
define( 'SECURE_AUTH_KEY',  'm&sL:xVkWxW2P;Y>|%8a#ZOR]mddl@SJ), |F/rXE&fRRsN^zo[/a4(iEuqS{%1)' );
define( 'LOGGED_IN_KEY',    '~C5E*)FET~}.C<Yw1/k62l,v6+KfPC{WgjWtgfR>ybVn2,n|wyJ~V= cE:(G,d94' );
define( 'NONCE_KEY',        'L3f_=H4+X>(5q]:XZljA-PNN!WGu_-(Vc;*)L5?U%j)gr1aprwz<Ldpn_,/~8X({' );
define( 'AUTH_SALT',        'hX{c8DlHzZ)^)I`uvG_i=po{5F!+Dst |{q]o-~x].oiaCLXDWG!j!g0LY]p_YaT' );
define( 'SECURE_AUTH_SALT', '%PzpNuhJZ, 6)KN<[oHRkyPKMvli5J_Cued*z;4PF3zb- 06A/&3.{NEF,bL4]=u' );
define( 'LOGGED_IN_SALT',   '6ujR_( h}4kYpNhbXp-e`{RIv8wYcZqs;n gNb{/by!z#&d`;sg=/ml8zk17rU>f' );
define( 'NONCE_SALT',       '_(HL{MSLc&y@QNRB#V[>rMB_JO6|#ZUd%C$Bg,8M^W{e*%A!%$ YkE6ZE$G>N~+T' );

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
// define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
