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
define( 'DB_NAME', 'blogtech' );

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
define( 'AUTH_KEY',         'Xc<2R,nF>^[q!2j1;Gy#x^c&I8sFMvP=K_YHPh7frP3Iox~tac3j.!kZk,q^BAhr' );
define( 'SECURE_AUTH_KEY',  'GWCt+0&~oI|k}O(Zq/KfaL;2j:%Gs&,{-p|D%=YaQ+`>Cb]KY-/i]2D8Kgolo13^' );
define( 'LOGGED_IN_KEY',    'ER22~(O}[R-~=:DdNgc>jf!MR)5w>#^;CTc00,)Uf*10o,^+BTg;{$z^ToLH3f:&' );
define( 'NONCE_KEY',        'pIfTzO,R4!^%vUzX&d1F`%Y*OI$ 53s66iga6GSMpR2_5?#A]5R>u0QZWFCR6fgB' );
define( 'AUTH_SALT',        '}X2mH9Wj(l6-NdRh*NO_ee]L_G?FsRw.Kq2VqM@F N>kr|KHa)N9%B;l7GexS{l9' );
define( 'SECURE_AUTH_SALT', 'Xb+w ^g@SL]lLGEcfe;4uo6h0~[gHM.<ti|5=+TYz(.xRsK,Uv|J=pp`AnGKib[I' );
define( 'LOGGED_IN_SALT',   'fM?o:IS/!z5?lyKRMmp~)-4sT&-7,&G{7Mc+j7QgyAAeftO;Ns|>Esg:<HbU!#)g' );
define( 'NONCE_SALT',       'PJ|>g{G2~!?vX/}*aLMS`}va{W@DVowUT]TzndSY]oZRcVT~dv=<ZVA(if+& mr$' );

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
