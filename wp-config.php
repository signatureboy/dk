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
define( 'DB_NAME', 'tophatclassics' );

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
define( 'AUTH_KEY',         'G9LT({(+Z92lg4T}8;4TfVuYHAl~(suFf9RxUuL<T2M5N{[ >HN6KmQ_r_2.IO!u' );
define( 'SECURE_AUTH_KEY',  'YKA;oj=q.O^-^&yjs#DN}d,X_7jbmy{N~6zIlTw^}v Z0.^z@Z s.4y,f-M>U%(/' );
define( 'LOGGED_IN_KEY',    'IQ#;>&gO[0H5C{XI_Bwn_ 00ii4D!T.lY4Psu08Ia9yKn(ULp$YlekeYQZ{h2+3-' );
define( 'NONCE_KEY',        '<;7,(6%ZxbQNMCqL=:C4>#b[A<[z Vk;2m[#RDjO0dGcfb(JgwLvO -oySTJD-7(' );
define( 'AUTH_SALT',        '&,7GHm$5RrU|{5#s?D`8:@$^[A0]4:^M^4NG1yxcu^}+z8F!$psFthG`.Phc(W> ' );
define( 'SECURE_AUTH_SALT', '9~#B3QOT%)/+a8Z|v./^mNG})`9# /WBi<7?{CO8 9z}8`6nfx`jgWyL#`[Al7Ef' );
define( 'LOGGED_IN_SALT',   'GkgL?I8GHx{b^eGdn~%C7{3@TC2+|Djt_MmqDm/;<T,Qkv^;5LCnJyRnLsD2q*]:' );
define( 'NONCE_SALT',       'qZ>JO-!7:U2ySe,LZLt(2n=GDhuQ.0q8mvv=Y0{WSjOP1*LWlR>wA|%R@:isBKV3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dk_';

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
