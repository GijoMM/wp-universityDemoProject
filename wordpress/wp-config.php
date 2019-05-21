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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '8GFy*Bo__g8oX/x!_6^Yb.epl5sZ!f/NZS@NT^dY1ygwL=h~E.Sr$[@QQRaz*5uC' );
define( 'SECURE_AUTH_KEY',   'S]NKg3k.StBj2t49<W^4D0D]bt@InE#?Uv2>CVAMuy&0/34?f~01qf=gq~{2<ybx' );
define( 'LOGGED_IN_KEY',     ' ],pt$^Vn5t${3gA#LhE%+VNsIW$p9Lj8 6@CppMXqw_nW l7Ka;wl(rk)Z9D1Nb' );
define( 'NONCE_KEY',         ')<[AjCGt{E!p<R]OEi=YY-%5#u&{1@]j3SkG6dA|0z~1H[Say|sNsvKUQd~&G(K=' );
define( 'AUTH_SALT',         'SXQhW4|A.Q=kXAvlBxtVCq@cPvuPVOUS{+fO%Q!`*]A[-wg#+TLmir=8o x;@LA(' );
define( 'SECURE_AUTH_SALT',  'ANU(0AU3[<s_T$J=LLgPH!mT2h%0pbh9Tvy&^M?{@@?c%I#}Kd+~:LX7XrSn[eP1' );
define( 'LOGGED_IN_SALT',    'Y>fp^(.wX(kn{W[ysDY)a>is<pc#^#%)dr{Y5`vD>q?rg-TF9bAD51@(~uM`|<*4' );
define( 'NONCE_SALT',        ' `DXv3@h[>mG*vi0:&`qLf]dEFq-bq*{}y)dLk#kQPne>9W+;MS5+kpn_#0ckZ$4' );
define( 'WP_CACHE_KEY_SALT', 'x`!&*C/$d5Xy`n1tfDk?-^T~YSl&D+hU#|3@kFTG.wvq5,^YF%j(&rbq/Z8lJhC>' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
