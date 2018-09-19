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
define('DB_NAME', 'vsdental');

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
define('AUTH_KEY',         '@Zdm&:uScP#A0_c]^0VHy-k=f9`iSMR@)?5U2(Hd)<Y:$ICM]`2Y*[h}ghIA~Zk-');
define('SECURE_AUTH_KEY',  '_iT7 (G`wY4S-4#J-^685zh(pQcQ_[a)_fW>Z#<Lv}ts/(:@N!M^qc6L$^AN lQn');
define('LOGGED_IN_KEY',    '_T!x7+Q@*$6z*`z.C1#zk(0.kot=!A0,7eEOm}K%YnX.`&/N2z>TcD[cSM(J$oX^');
define('NONCE_KEY',        '$]1)8{dCIf%o]yrit|S$b?H8Z377n,?Z6XB}yEUFzW^cIiaiT7;<(S[gNI%VXlT;');
define('AUTH_SALT',        '8i`juovPJQj!a@Xi/=omItz3iQA7g|9|m+Fr;5ZM88h+BU`W49(n@Ns7UYrmUJ})');
define('SECURE_AUTH_SALT', '{I!$,ZA|:ZW&0YT=xd#v_Lc^In}9~!g5&OO|K$%jD~qK9_A#=z4yA^%)]z?)1 #B');
define('LOGGED_IN_SALT',   '_5Sh7A!|3rxk$DW5^Ge7Ob KOpx(u-Hmz}6@vTaqh=1usY_}c<;w9mx}r-aK!$o(');
define('NONCE_SALT',       '~u2VQ&RD{%]NL;5z+-5kvkqHUxTh/#angw5n+j;3|b+&+1%@g~wZ  >/8lwW81g%');

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
