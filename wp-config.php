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
define( 'DB_NAME', 'latinphilo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fwU>$*?U<7?)$}AYYU<_UOF-wFdM<Gguh|moa{=m+RJg|nnLe%RqTd(N;7p[PhZ ' );
define( 'SECURE_AUTH_KEY',  'PPEAXIpTf=bsq;t6S0xpKfW*R8I!}+%%+:?-DaklcQ8,VAe$L!D)C~1LahFNO*/4' );
define( 'LOGGED_IN_KEY',    'f|#o6}) 3/3>kdQ/(Um}mj=MKdF@;c$s98lv89y9j0+Up5.|cEZq7WKF={__gAFf' );
define( 'NONCE_KEY',        '9JCLKMkixr<R:. 7wYs qRxTC`:?LJ}4rqR1#gQbg#M2<*I%4dKRY[X3*S`bALL>' );
define( 'AUTH_SALT',        '.+kDMK_/--HFcE </NiHom&$B0mOR?zjXmrDOOMR9=28F&fa<=p-[4N5R^#Fodre' );
define( 'SECURE_AUTH_SALT', 'rbc*=4*L*7k4%TrcQt23]rZceBye{@fG)U2B?LjZS`mc !9C9n$@*1Cowc4D;eKU' );
define( 'LOGGED_IN_SALT',   'X4>:_>Qe,a)YZ5XKD^nTW2_e/:RF5tjg7l-Kq*m9d?xwc.UV,Gh4rjM=#ct0E!NE' );
define( 'NONCE_SALT',       '0k6)S<ypa{Bp&!:ljm*?q-Y<`_r:[+*v; K;F0s4dB9FD9X_BNofJ$jUG(T|)!_$' );

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
