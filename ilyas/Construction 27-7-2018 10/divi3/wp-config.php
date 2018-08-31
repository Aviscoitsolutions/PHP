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
define('DB_NAME', 'divi3');

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
define('AUTH_KEY',         'VDKXP?w}+cA2`i<}C2wa1R*>1CH^U~OP8RPlBwxM5R>3*AB%9yv_NG5+8l<?X.pd');
define('SECURE_AUTH_KEY',  '-:.Fn^r%BlePc_jbc3dx[ro&P[J^`oCSF X$QG;+LuiCoc63~u6P~#v(6v25$-7S');
define('LOGGED_IN_KEY',    '1Yvhi!2Hn%|Zf^3!V^o)gH_<4cI0l}x^(GP>,)^1q$qxLy=4i%EF C|.wX])*G4!');
define('NONCE_KEY',        '`0 acQE6T+g.R/NM{sGc2]y%.;aL0|45VhHhPCmN.?6gd5>&Ia.|Vv^`B!Z|-78]');
define('AUTH_SALT',        '(@#V?&<Z>Ge7oQ^ Nu!igAO(vtZ(dL#5BdvEPwRu2$/(aI#*k8r`v:[vK(M;$q17');
define('SECURE_AUTH_SALT', 'eTVao4*lF$D4HY@$~AWtjYP3:1j &=.*^/0i?/D>WPA&qlJ$vuz qb+H7|T C!x1');
define('LOGGED_IN_SALT',   'y?HoAXmBN/XG18|w%em/S!7su:l~2_uY[}sf-yST?nUAG+p~c_=AmJ+pa{1cR}O7');
define('NONCE_SALT',       '`]krc(5A?D`-=ks)`?b8}J:^P&[zR~i$H.{,.@ACgrY_A^c5h31Fw(XaVxhl.lBU');

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
