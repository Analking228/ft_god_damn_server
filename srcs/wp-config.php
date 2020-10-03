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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cjani_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Filesystem operation method. */
define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y;s{1ScV_}|X%pkeA#DQVHFuTr&w{BGZPlN^~z+R(7d^9-|A~B&*Q9JpkY+N<MVL');
define('SECURE_AUTH_KEY',  'Qh8K+54_SV_xQ*4lK@~7x4]^+M.STB>${,8Fb_9C$NOVKX@NXT5@vu)~?Jpzl>qu');
define('LOGGED_IN_KEY',    'FN<g;00R:,j^!x8}>&S!CeZGUtbBs,9]kY`GfBaUbfaWwZ$|v5uTx~^RYV2?yx!&');
define('NONCE_KEY',        'Rx&Xgd!D1:zE:R1!S d>P|]|KO$bk(^ZR6C1w|+mL9-N,&*MrR(*[W.98t!;+|d6');
define('AUTH_SALT',        '^;1cNZM}6d.O<S:RI<Cb(b,|#dTv)i^mJyyWF3{lD|[)-T: L;7z.ZMuWxpX&qwZ');
define('SECURE_AUTH_SALT', '?aY+(%)+!%TPJ-tv0Y_Y/OE>{hT)v^IW/[x-_+Wz{[Z%i^U-&K8{pLC6gP=}j-sJ');
define('LOGGED_IN_SALT',   'faWLu,^`E9Z3p?+2KER5(N&cc|<-D!M|zO3-z&m,Ku<Op`APObR&&<M~|&8%9%5l');
define('NONCE_SALT',       'L%3+n<LB% Y{B-vZm<C.-]3DhsY;r=f10Ahg+)7jQ4If(zM5|>#su#[aUVS(HWJ^');

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
