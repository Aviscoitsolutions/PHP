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
define('DB_NAME', 'tourism');

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
define('AUTH_KEY',         'oQ`+gu,TUnJJuxo<~}<YP at5%n^N*&%xgzq:9bveLZYDp!WI?fE-qA}*`p~~tF-');
define('SECURE_AUTH_KEY',  'wh^ndI*tp37.$;.j X/E)wj}4++gt(8PGHz16Rat-}DH{}$03E...MRis3mi;&~>');
define('LOGGED_IN_KEY',    '0/FUL4Sz9ELs1^Z9IB?6<zE~d|0k|cfPiOO(sRx}:=tY75EliTRgMl4bi9`Cxr4%');
define('NONCE_KEY',        'izNP_MTF,,i,R%$w8q./X*[0Rh<:e0<DUInz@l.%ns/+P4gg<M-!{v/@QO^1p[PK');
define('AUTH_SALT',        'Do11p)/T&;q3zTkWg=CtS!)r*D*,Ud8OGxmN,+rIx^h?MpSyo[qTEjf}go|ZfJA=');
define('SECURE_AUTH_SALT', '1qM$%OvH/r,[;x$~V-;Qc}u(4Q|Zyn}~MJ3s/b_P+~7GdT`yXkhCV]XJ9D[ l/Ie');
define('LOGGED_IN_SALT',   'z2`Nh.1,v;X%Yu>w/+P=it 6.e36iTJ%Kl:BMP9.O8@reor%RJRNJ5UK7lqh`}.[');
define('NONCE_SALT',       ']1jSpebl@H*E9O|IqkF_tTYOYmU[rBya[d+9M:kBYwqX3gxpp7`r*-opikI,L87B');

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
