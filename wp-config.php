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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Nrye79J0YocD68nzM?hkl~/1FYG<T,&,TfU_7]EFEOtrznIXv)@bB?9C)?AAPB5~');
define('SECURE_AUTH_KEY',  'a<XZNLT=Xb&HgrF)!TA sCmqz_-D,:<uizPzra2lt<uoWjXB08yvp`0XlO`+AeWl');
define('LOGGED_IN_KEY',    '@Xs.a>]XVV,uIo$zLLAmxA0hW>/Wv?2612hFf>SyWCX4xT3@4MfHXS^!IB7%#9}7');
define('NONCE_KEY',        'UY,(Svx.^L&yon*XmIvpZD/G#33xgbNNj0{@(%4`Cv/+m^&B1/Nudd9WYwhgmzY8');
define('AUTH_SALT',        'IO[yc]xH}uHbgSCU8^m4CB2ZKHZ(nn1diizVp4^_;u9]-b|^$)C49lLOtQb-r]fa');
define('SECURE_AUTH_SALT', 'pMWTH<rZk8BSf$:QsVu}ow~UHMyf`t#<}ri]a%mY8uUC(i|hzx_w$_QS5r1K{ 0*');
define('LOGGED_IN_SALT',   'N$`BPp]hd0?QwpW&lbMuhs.$K|93[x#&aH`Y5a9T<7:/Ql&TIHT #vu~u<eY4j3*');
define('NONCE_SALT',       'l?(5[rE}kqjzGpcy7NnGDAhmv4N*kf6ZlzDatg8?rMSfv x6;P|ygL8k)= NW~hD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
