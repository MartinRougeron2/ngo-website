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
define( 'DB_NAME', 'wwordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '_+0u[5E#29N5*Au_qR>O~G2D(Vj#g6>an,O: -6|R0PR.{3eS*Z$fu*[j;ST0~@i' );
define( 'SECURE_AUTH_KEY',  'a=-:zKUlh!Cx+`g,GBO8L0&iM3 D}/nm >0w*3GL4GE%egjz xp=Rjb8_mZV/-7|' );
define( 'LOGGED_IN_KEY',    '[BV=C%L#$2=9K <%%tPa<px*TG57Zw#J+gW@9xR.b#Wd6zF*O:8xUFoKMh}j{S&_' );
define( 'NONCE_KEY',        '/K;bxF&Xfzk/rtJmqTR-Dz6_?3t?nwOUxO<[.t%}(<YO0p$GVKUeGdH6~Pd_asf*' );
define( 'AUTH_SALT',        'F1^!2(ZNO($UL:Is f4w[NmlEHIYk+0t=@X1*0`uiAz61vgVz,Yr{S{^VBhPR0y]' );
define( 'SECURE_AUTH_SALT', 'zud_Waa.6>-nMpg%&4Obi(coU]]%I+fa!VK8mpO*Nt@vEfQIHnoDd*E+ET|%Gn{F' );
define( 'LOGGED_IN_SALT',   '[Pn1)^)#e/~7MMG|D0Jl^V/ZV)9^A0^];I*: [32es3{>9sfJZ&u]Wf{U2t$Pb->' );
define( 'NONCE_SALT',       'doY(zM2,U uTzb_AX,E8`6:_dC9_smDrPL 17.|bw=7z?GW*E$Vdv$`ua-_hzGc,' );

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
