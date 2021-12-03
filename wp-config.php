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
define( 'DB_NAME', 'dodo_db' );

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
define( 'AUTH_KEY',         '((3}wnoxkeJ;Mx%zj{v62r 217mTT!^M`N+N*Ms+|Dos=~yxMT&+~{+0`7q2jk~3' );
define( 'SECURE_AUTH_KEY',  '2$hq9]n#~k3[QgwGb>tk+:aJyU>F&}k5hZR=:1%&11DA>ckT)sZ@7Cj;GRkj[4(l' );
define( 'LOGGED_IN_KEY',    'L58=_|=H!X]YRL*?K|k(;K-/M/?q6<B$MTqrsk@r*y-u4rY;(& mj8zssV jF3 }' );
define( 'NONCE_KEY',        'im8:@HWz@f$.t$[H236@wwEE-w$N=h`@8y#ewZ7)FS8&Aa/|ukOSuKU>=-A_t.4[' );
define( 'AUTH_SALT',        'D~TsUyoqQ98G^4:jJ#$C^m-fJ F,.JNS3(2oT[c}(X|Pk r,~z4* )j4l%c/pM:^' );
define( 'SECURE_AUTH_SALT', 'Z.y^3H^M1(5c)MeQMV-O=8=qaM5&L;nY<Wk)lBBD nnh;r:B#`WmsGDX|idD<F|b' );
define( 'LOGGED_IN_SALT',   ' .V+a~XK$3yIlT]XXla9#cvsZ?P8xHTijQEH*kj3Xq/M/,FLr-nrbt$l|v#qlCSs' );
define( 'NONCE_SALT',       ',-*3@H !~{[H[:YpuaFa.ap2qB&xUJJ#5VE lLNlA^S)]t<${G,F84Y-}eP[ ?>A' );

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
