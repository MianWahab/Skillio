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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Web-1' );

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
define( 'AUTH_KEY',         '`M0D}ep2b~o@$~p[M@|GTrIlk+q9g:x,j=F<o5[j<K3Y>7I_i]-c2@T:5*GB/lYp' );
define( 'SECURE_AUTH_KEY',  'hpl|,qV~kz!pKN!< &dsB^j-&(rTdK]Mg,N@aT8V: bBI!E>z{EO]N o][/1^lD+' );
define( 'LOGGED_IN_KEY',    'r*?UM1MY=V`*KefZ6n >c>wQ~NN}7d03l$s,G5=)N4E_?0L6E9C5</7vW{B=wMm<' );
define( 'NONCE_KEY',        'yVVBe N@`W-:~ hA^y|aNj|F&8Diq?o7p5nv,/2n$c;}Sm;o>4oDFGoWpkrXHFeO' );
define( 'AUTH_SALT',        'vaQ^9//!lSjZ_gLnu-+q;<_@ZUsVR>=%$n(/RT-U:0|Pl6PHu0?yakJ0d]lh;R5v' );
define( 'SECURE_AUTH_SALT', 'xL>>6o#/}j$(5!3$#L=s@vg.jUKVE)[|N=8{>w7bZsEXv=Av)* LICVmKAZ%~R_!' );
define( 'LOGGED_IN_SALT',   'ml;.M4lJp~3jP(30(r[$g:$@-&hS-5bGBDWT?5i~dQOpK<VNfG*(A~8Kulcj9AA;' );
define( 'NONCE_SALT',       'IXJD0{D>R6of{fl^:]M6%jlBjQ1*Nn;{J+}=&,!MBNWB(N|>/VZGbS?+FD,lgsnk' );

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
