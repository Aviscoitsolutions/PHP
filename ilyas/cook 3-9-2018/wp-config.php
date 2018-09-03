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
define('DB_NAME', 'cook');

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
define('AUTH_KEY',         'b3ju&~d;lt/%I~naNP-@!8NZWkIxFX{c/}gB^cRl,P8+6bfzYlFeN^{FG4|~4,9b');
define('SECURE_AUTH_KEY',  'q*DM=oEC(?G#|x#Wv?a(AKy` d{+&%0Y!$lHbJr%*c0Nq&MogyCT<@pUsOKBAl7,');
define('LOGGED_IN_KEY',    '0MyzXFd4.3HRCZ#:zg.;]p[0.|bcL0M9D!GkbwFQnVX+Z8#U%&me{4.,iRk+u=3S');
define('NONCE_KEY',        '}J^1W1Z.z^fVlQmdN#Eu6N#OV5k7zXQ!8|#?Yig:I%RS5:Y#:&ldr:]*Ry?(n#sD');
define('AUTH_SALT',        'm/wU_aqL3f1Tt0<*H~cK}C*D>>0D@3RQ@*)]lkd8[#(@O!4h/GSDuW,uv(_pG2$t');
define('SECURE_AUTH_SALT', '9[;,_xd@BPi6OOM}Y{k+l6XMO$o$|Z%svC(<$sq(C!ZS]T=70Yrkk^>RyGw8O9KR');
define('LOGGED_IN_SALT',   'k4q4X(^6%n8?G7vDB!T_CLj*UaqNTpT5!MY me.%g:{L#v&sci-Ud5L;2lb}6EV_');
define('NONCE_SALT',       'OT/y5h`p[.r-4GZ5OLiJVT#u[*XI1mW$cE.oJi#QlgKl5K>|W@rZoB^?9>^J3Ttl');

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
