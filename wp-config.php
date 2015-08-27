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
define('DB_NAME', 'client_accelerate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%;*P+.{S$56l<^;}SwE9gp4w#%.Z@hF++CV-OY+!h!?;r&4{p]V`yx%h*B-O2kJw');
define('SECURE_AUTH_KEY',  '=-lsVO`T{_8_7wLDn?Nz~rCnJx)X_hmFQk?^J&>hlb9-_q-1j(Ar#16jv+qf?TTg');
define('LOGGED_IN_KEY',    '2he1AQLxkhbzi03f`(*Nk&u>7Kf>c_X$~w|`.U&LXHEJCY/WFK!4%+R&2#jdS$^G');
define('NONCE_KEY',        'e++d/+@vK]N{rT|]tTBxD5U),F+Ev!e /zK|ZR^-hsMM5&y!WT00KU0RXE7>8SBK');
define('AUTH_SALT',        'Nv}N p1f[AK:Vsyp/E-#$PHE][#yPxPQ}Do/HKS>t_$cW3,>M{a*Q%zQi)!(uhj%');
define('SECURE_AUTH_SALT', 'Yx-BTh/U^hF$TYf;}^#]$el7[Kjz0 -B_!`J~%%_Qa(INyM(jtuq+sg})iSKJujE');
define('LOGGED_IN_SALT',   'h!ZJ7;,x5vDJ[W=P&;2;cXAB2EO@*<yfb2M^)G<H+*z<g~D~S1w/{k1g6h-.Y+?@');
define('NONCE_SALT',       'rEuY:QAZKEM)L!t4h~b]~]}5=`b607eX5}usxzpJ8/`c/)c!_+qr@,kf]((: (Cd');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
