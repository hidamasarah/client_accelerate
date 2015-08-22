<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'client_accelerate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '1(Z+2]qOlwQPep]jn8i!i:+.R^$]|#4HP{B!H7BPdp`fZN3NgFFn.9Jg x~x?)J0');
define('SECURE_AUTH_KEY',  '~W^nPNDM)4e-t~}l[[^Y7erDyl8@eg_d!<OJ:m(0:Ht[x;<&(jv[|d0(hNL4U)bR');
define('LOGGED_IN_KEY',    'q+|4~~L7dbIlw?qf`6+)M9&yz{h`!,_zZ)Qr*~/j<+QR2[1WkaUDVV;Z!8>A1CHW');
define('NONCE_KEY',        '5 k=sw_Wf*2;?bIzWhs=xJ+dyY#4/Y!mQoI%ekTj?)bFD>o1FRz+|EAhbvH;(w&)');
define('AUTH_SALT',        'm(|SxTw@9wb/:YT|T|15^fv@8}aa91Dd^?k4U5qG)|-Cy2V7(.>vNqQ;B=7u#%l%');
define('SECURE_AUTH_SALT', 's5&W{W1F)A8jB%A!sx3=4QKEyOdrclM@Y$B)K9x]8J#-2(NF|M`2K0Q*!+TYM|;s');
define('LOGGED_IN_SALT',   'dWih1&<Ug6}+-;}h1NgC=79WDC5]CtRoJeW=NyXD1X&a22KOn|VB|1JN*SoSX8qN');
define('NONCE_SALT',       '+r,h)0@/b1*HZBUPbDXjFSJVZb.;1gzoe[XJP.Oxn/g[fm-6!]?@|@d$eM aqq{R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
