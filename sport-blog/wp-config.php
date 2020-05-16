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
define('DB_NAME', 'sports');

/** MySQL database username */
define('DB_USER', 'sports');

/** MySQL database password */
define('DB_PASSWORD', 'sports09');

/** MySQL hostname */
define('DB_HOST', '10.105.177.5');

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
define('AUTH_KEY',         'tXSoEw?o>j T}vRMgc<M.6_=}bm~*]#Z_kTjFRgy0?CU}M,rcEdqwe6r]&S`y yx');
define('SECURE_AUTH_KEY',  'tLm}?En`><HT,vOjl*^EWA.&a|HW*?]]nYW8_r3t]RaV[jvm4K[Tb88X;l#K8eI8');
define('LOGGED_IN_KEY',    'j477`GsUV` &o+!)56!;VB6g58=4-JtB9*e,<|b.M*P$W]R7%]WIqezBl?4M&V88');
define('NONCE_KEY',        '2=ZB2!t1xQ_13cnC:2|SM3VP:[1jmt2gzGxL@O3A,JZWFJQ_]aGG@m#l~QHEU78A');
define('AUTH_SALT',        '>8&[L 1zhRetBVVb[Lm4/UZG-aft4ax>49$p0pMn05A8fsxT)qIxbQpzrK(x6Icj');
define('SECURE_AUTH_SALT', '~y (yI`EyG|&B- 8R6wFQ`X(4+9HM4zEJ%O2pv7Ay2MUCJr_&b^k6{[?V6N(aCBE');
define('LOGGED_IN_SALT',   'K1nc`}X?f-Ce`IRaK]mI2L?c_r0/j!`iyVtz;7cBD}{4@Z9Vr=S=f:o~BJ]?)~) ');
define('NONCE_SALT',       '~lxb7F0!mMOdx0!fE1ML/2@)2qT~bcKv>f:=N4sp]5x7a20O}/;mA;Y2rRZN^Jdk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sportblog';

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
