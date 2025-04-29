<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myweb' );

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
define( 'AUTH_KEY',         'pi+JJTR}K=VBHUY;WYtwM,N+HO?onNLnv5hCpu!|-3d1x>glUdBMc^C9g9L%e!S$' );
define( 'SECURE_AUTH_KEY',  '(SC g^O]?FR)T!5w_j5!e{bY,G|&b><c:ydlb4db@Ekn<SV@3Z6-b|?qEyE4$y}R' );
define( 'LOGGED_IN_KEY',    'X2x1gsJz4ZA]rBKc9 BqPhPW3G1Qi,|IOYguqG5ZOuHb5^F*jq(YCO.s&w//sxKR' );
define( 'NONCE_KEY',        'EEz kJAM,xhtnD}Uv-215yh3lCPj>B 3?uE3&C<4|N`M*Wny6^XEM1Q=8#ytz[9S' );
define( 'AUTH_SALT',        'W^k[d%V;Vot~Yoz* ##ML<+]x;:{NgDJPqP1[ sK.j.MjsIl1<tX_iV6E!~%+};!' );
define( 'SECURE_AUTH_SALT', 'jU|7?iL2n3/E~**4q<4;D} u]6l!zN]hnq@Wu;N5b@T(xSyHK|S2f7#q~=Q0^F0*' );
define( 'LOGGED_IN_SALT',   'O}).%z;AZN]HZ|Yb+#fY?lbhK5$g_Nf;@t01N)2ldJJp]lnu6YZxbk#wu{aP9uuC' );
define( 'NONCE_SALT',       'Wc,+VH[Tw=m7M5k>v^t6gGz 2Ys3e3S)c)zR+_<8HSdTGuGBqM0 ;u8_(d_;ztQy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
