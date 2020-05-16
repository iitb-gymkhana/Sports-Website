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

define('WP_HOME','https://gymkhana.iitb.ac.in/~sports/wordpress');
define('WP_SITEURL','https://gymkhana.iitb.ac.in/~sports/wordpress');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8!yM|9#6hJ=9Ot8rFH~u!h+ ~;Sq3do~AU/AHfyR0%$v*?ig`L9Fg]@li(AmJ6Sx');
define('SECURE_AUTH_KEY',  ' 5C/>5_l;U5e9Z%S<ctSaKuUX6d@4omU{DV~mq*u)t#Cm-#]~;m90K[{S+-{K%|2');
define('LOGGED_IN_KEY',    'S!a;tk092O+F_p~HS)<+-WE+K:s8f$a(/s]1@ZFYrg[#-_/^f9b(493qBS[VCci-');
define('NONCE_KEY',        'XeRQ*K.o2suK8nFT+IWv|IHD@0wFut=FiqaqfFyl4&7h#L{B0vu1$.94eF4^PXGA');
define('AUTH_SALT',        'EjyoE+C`Dv}nj>orG fKD~YI5raju8@A-Xd.#L!2EmR&j,MLAD:2~KMZ.|svy{pX');
define('SECURE_AUTH_SALT', 'g.;R7(7UTN1~Bdwuo@RQaSFl~&3K`m/K`U@1~*a;-q2,_LpB&m=FuLn%HZW<p.EL');
define('LOGGED_IN_SALT',   'mN!E_h ^3Eqole<?:b+_/>FR4QnNltEBm-A*$8^.l ;Nmw7w@6|Fg(p8Yy&2JCCy');
define('NONCE_SALT',       'eqG+uUev9k2hhw.</OaPnDcOfPPy[O %d=:E]+DiVah@y[O^$.T$T]G{6?zVCfAy');

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
