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
define( 'AUTH_KEY',          'N|u=W$IJH]{i/hS&BgRe] /)=.#n6yf`8?p!%UG_7Iazm]e~W}vp8JdhtFR!gd2E' );
define( 'SECURE_AUTH_KEY',   'l4aXQ[E`s}4,8qoN*mYOb16Ly%AG8Rt-2(cI|_=x)?LUT,RA,+AUw9rKKrFKzP^Q' );
define( 'LOGGED_IN_KEY',     'E-zp|`W{$V;[cWwUZisoi+(v?Rd}*q ~aGm,/,=z3;x+kKnw]/]6N.(Ngr%Yc,En' );
define( 'NONCE_KEY',         '>DbBo)/YRMHSdUU3KHkEL@c@1bnG*mK{GJB Dh09HAzt+C|QibE5v3^%$prYL,Tq' );
define( 'AUTH_SALT',         'Mt=Q%Nn/w&2uU/8/b@A7b&r~Wz=+vA!LV-#+I[^ps6pl1<0$<~paI$6pGU*62tVb' );
define( 'SECURE_AUTH_SALT',  'B9Si<c4)th$-FuSFWOl^*-d/SX2Kg%Y.>H~h,sq-zS7m4-gUh*>JY.K} 1J$R+VQ' );
define( 'LOGGED_IN_SALT',    '1mCGSV&LB5<oOijvCoH[gd%<X!wFv.AtD?WeMc*0@+bKAdB[Jel{[V/IB!%MlPwM' );
define( 'NONCE_SALT',        'L.fdA2KL?fjaAlMCj8k*<J=I3-Op]w(~w)2sZ~=3NLbsxl(2=dh/=oyqV1%^zwj4' );
define( 'WP_CACHE_KEY_SALT', '_=8nZ/tyX:F46qI@Ul&RLNA[JR+6M`.r^Md&F}d1L!vw`t94-jDK3Zd2P~SCI1K;' );

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
