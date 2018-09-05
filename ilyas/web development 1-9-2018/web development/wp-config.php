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
define('DB_NAME', 'valera');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$rA].0v!l1U1VTWRo6Wo|!^)QR,8{O%K(#jw`wEt%M-K}C3S}@OC)Kf)ce~n|kzg');
define('SECURE_AUTH_KEY',  '!U}NM@@DdjaE?f7y<X>iBw:vVa:4zJT,f&XUNMZx,m:$ZTiY|<%NV<0:p9}i`G{E');
define('LOGGED_IN_KEY',    ']fI*XTm:YE~<2euk$$0@m-4Xk/ORQ^x$)Ra`e5|en<,5%)lXds49D-:6m6C`_Rz0');
define('NONCE_KEY',        'qgzA{[U>3^,2Ik%(~JZ RL[JmW;o`Fg$SONuZel-w75bJGQ4!^EFNL~jdK7w+fIC');
define('AUTH_SALT',        '4|tqVm7|m?xH@}!ht<+}8[ACvA^AnI%,Mzv3:?/#JF_4fg9PrNJtnb_8CUI+}VIW');
define('SECURE_AUTH_SALT', 'OFCx !BF~agOSjiSG,hG>u]pl1w?x]4CUv~ [Tp]yva>G>n,x3qLVcJ%1v7oguxG');
define('LOGGED_IN_SALT',   '-T@lpO-g:)>|T9Q~~NRF?lW]v>6%KXI:N^&(YhaPYYzor*9= B(u$XmLOYg9pN<Z');
define('NONCE_SALT',       '<<G$TR<Aq^x&r?Nca93af@Whye=5=4, c.Lv+{X~>M~7D(`]P_~:{Ydao+ds,u/Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
