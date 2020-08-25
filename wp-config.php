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
define( 'DB_NAME', 'lanway_db' );

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
define( 'AUTH_KEY',         'DpSIsDCj8o6iV+-XosmOG6NtL0)9u`XF.i4MZ/Hu|(n`Q|2Ct:0?%oKR4f8>{rh+' );
define( 'SECURE_AUTH_KEY',  'S[&_4^$bFdFZ@}U};`Q?hHI^{t.AeU=&yqz]yJ <C%eU/Op2@XC9>z,TvpC5;`^?' );
define( 'LOGGED_IN_KEY',    '=&cp3Ip-q98PQ_PGhROA}m@i9C:y/K>iALrOs;7^I@@P}r)0d@2.7X 5]oR=?P:G' );
define( 'NONCE_KEY',        'N-n&!g.h!J22X[Mju.HpO^L,*xPiumxK^{(hlc$aYsc2!3_Pw<5D$6I.Eim%%G.?' );
define( 'AUTH_SALT',        'DV^xK/MgN@o!o*iUO0$xEQkOTQ8^m`,0!f?5TcBka5Y>)Do5*O`rDawe(=RB#+~s' );
define( 'SECURE_AUTH_SALT', 'kJEv_-| U{ZpcqyOr+@:dnJ5SGEHh7~<%C4%)y#HVXCg&SwC[{)2kLcf#H`q[gjv' );
define( 'LOGGED_IN_SALT',   '}93sJ.(63v-aB;Jy/zH+cOSU:bn+jEf*DOMY<T+KzT0]pa_*4XWsQ?bBZGg4!b}u' );
define( 'NONCE_SALT',       'U`iZxgeMK~ssP6}%++EUg[.1a-_W<^Q.%7aPSwNi$}Bg05Njh?{(08TSR8+H7nYY' );

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
