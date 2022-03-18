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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'LN+(r>vrE9iahf6Ho5_,+!j9v<7H]qT85xewa>L24>)LAqdg;Szvt#uZ;m[82NBA' );
define( 'SECURE_AUTH_KEY',  'UliA{St$FGHWy#d#3M?`!QR,y/ldsP!ia|>HA(fN!G$dtLmvDf+(Jr2G]N=J5Ukh' );
define( 'LOGGED_IN_KEY',    'e}>c$UL<6XOye_dy,ONT1Fd!6WD6bIJbfzKsAhY+,eWM#t :1KQQ/%X84p(yp|o&' );
define( 'NONCE_KEY',        '#W;d(M#t<x-4o:xl87)YIU*alpZ<x_yen;X&znE-zJ=^(1{GT,L]@$o5,4:^zxjM' );
define( 'AUTH_SALT',        '/n 1ydA~dC^LtsRw<YW>#e`gixHA*+Eyox/is_`JYc0+]{CGYe-E(jqn8M)N|i<9' );
define( 'SECURE_AUTH_SALT', '$!!eFC:/%8h_<-QN&Y774]Y0aEp6,c!DK>>6.fp|?7=*kmnxqd6vk>Cnx1}u}:[Q' );
define( 'LOGGED_IN_SALT',   'iQXEO ]TrT#ZjuO?QAw?C$>iqA[+m u=[mz5G^*VQt%.6xkPTt4?(Z:Jr-o4#b]S' );
define( 'NONCE_SALT',       '%C2j@yO,Ra^PL(fX!@]l]nAUFg>IxQ;Ae++p}@#q,vAD>{|g8g??mKPQoVWMD8j#' );

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
