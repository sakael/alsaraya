<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'grossmed_alsaraya');

/** MySQL database username */
define('DB_USER', 'grossmed_gros');

/** MySQL database password */
define('DB_PASSWORD', 'SamgrosPRVL5%');

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
define('AUTH_KEY',         '(S,Um:<t] G&e5lw8lSp%UMIot9F_N-{fF3,x}nF 0 aQV^f-H``;LEtk<,6rJOy');
define('SECURE_AUTH_KEY',  'Zw2_-.W-6bp #3j014p<E9`(iSKD?!Ow~j:{D[.CRBY#A-N (e^`;fBQ``T61P,$');
define('LOGGED_IN_KEY',    'i+Px3OPh[;*4]}=Du9hJ:W8by(B?5k*W0]>:Z&ZrhA{+O]_xI7wU8dlfBFNG0W(O');
define('NONCE_KEY',        'y0%`SW!E&}?apT/yC(Hap061~ngB*![=?yGIUbh#c/[T|qw.3/_w?*:7rG*~%&fL');
define('AUTH_SALT',        '-g#jN QYTIJT)NU?*&s-dX^Xk]t~RLt(-3f$9.U%J8?n?qoJyU=f]:wQziOFMK^u');
define('SECURE_AUTH_SALT', ' T(hmrC<ak[{X60-&$aw)wFX^8IaS1dWy!@|OHH}2Q*I`ly. }6msi%k`0^tW2au');
define('LOGGED_IN_SALT',   'dj_{U8UBGF2=!sdXksVOuugU-]:/,4pT/0(%uX#NJ3NA,_(E2k,mg?MJB/E[|CK9');
define('NONCE_SALT',       'x3+!Ku#WV]L;OKSadd,vH];R[}uBsQPUP]gZs#VEdG%;q)hj#(ev&PtO(#22BhUl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'alya_';

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
define( 'WP_MEMORY_LIMIT', '256M' );
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
