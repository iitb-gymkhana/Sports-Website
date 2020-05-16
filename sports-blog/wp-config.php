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
define('AUTH_KEY',         'WU=mfNxMc-S(sI1Fx$eyi?J7(#D1e)L4o@3v3n@<|e?(mrSsahBxEUDOKYak6ds7');
define('SECURE_AUTH_KEY',  'nZ{ULo*-Z_`b-P-%AJ9ViDLoF#Q?G@@uGm].F.Zr8H+WB0#q3VLA3fBLd`TABU+R');
define('LOGGED_IN_KEY',    'UCAxX)NNZyp/3ARzD0SLL2X>3f?W`M19O_S|6N.d?]2e04{L<H-Ha=KffY3<G&LZ');
define('NONCE_KEY',        'L50k=2nYCt3C]:Zfq9{VK93F#;;MY6+U%O>G1wc2{LT9/g^c7`Iaw<98:.RdaRM&');
define('AUTH_SALT',        '`kpVUTDKkKJv%UYyB=Xjr1[Uf;>VK wZRfYIw-0P$}6+8gY[,xJZ6o0|7}34OzJ$');
define('SECURE_AUTH_SALT', 'G+jATsT#n|t9]6Yw3*~9!i8wz1sX_+inSh-_KxqMOyE%we$JcYQzZu((GT8GH*`^');
define('LOGGED_IN_SALT',   '-`@z(7@FJLz S;vBBw*M9T9U5{C?.VN~%o]>t@7mqKA|C<^f7:{h!;g9uq_:!xmC');
define('NONCE_SALT',       'kZt:yY2ANV4:q#fmuE/R>WUSY+dJ8[edD9D6+[p *@c^Q*&O9[;d-m#2 MGles|A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sportsblog';

$protocol = "http://";
$domain = $_SERVER['HTTP_HOST'];

if ( $_SERVER['HTTPS'] == 'on' ) {
 $protocol = "https://";
}

$url = $protocol . $domain;

define('WP_DOMAIN', $domain);
define('WP_HOME', $url);
define('WP_SITEURL', $url);

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
