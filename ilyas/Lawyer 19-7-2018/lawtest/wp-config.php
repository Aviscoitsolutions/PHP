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
define('DB_NAME', 'lawtest');

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
define('AUTH_KEY',         'TT}ND_O^a@|;$4Pg} |OR!K7#1kk#I/,Z9tv(k&OF83~d1&q||jCEJHa(tc;O=+Q');
define('SECURE_AUTH_KEY',  'cYOP:[RaFE.HVg/i^x@Be1F,2r6JsZ[`q^X]Z$t0EI/ =6ZnBHflnulXu>IRE@M|');
define('LOGGED_IN_KEY',    'ch*jk07Z#,f;oHs8 }yD@M RWL}o,F{1sZLzn_<-QLMVj5*XYGa0->36mwQ]Z:Qn');
define('NONCE_KEY',        'Cr@]BcNUkHa{?Jj]2/YmWNuG9Ey52d]jJrR%=_f)MzubYQP(;vPgrI^zX$bicrqN');
define('AUTH_SALT',        '*kk4|{W<[ef6BtWaUIF!VB6xKvj~pU+E_kGS|E>7%7%fGux0$cm5x^kh4vHs`a.K');
define('SECURE_AUTH_SALT', 'sI0R.k2M})SCeiMw`^/RkSe)5K.0cs8J)D|g9=K!2)1X&m;g,l|2NAPKALrI3@ac');
define('LOGGED_IN_SALT',   '?+U Ug*}8rAO1y(cD`2Wv$ZkZ?0F<SM98N!)GWHI?s(FFt|~7hAz+I| .1J$9(} ');
define('NONCE_SALT',       'pS]2-IbSr$aKC[1;}PZrmPJM4R`dO6;~e76yx4$+q4[M)7`Y.A~-PE8MoJuxCJ[V');

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
