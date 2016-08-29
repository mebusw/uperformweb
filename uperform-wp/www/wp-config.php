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
define('DB_NAME', 'net86410934');

/** MySQL database username */
define('DB_USER', 'net86410934');

/** MySQL database password */
define('DB_PASSWORD', 'XK58aE2z');

/** MySQL hostname */
define('DB_HOST', 'mysql5-hy01.xincache.cn');

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
define('AUTH_KEY',         'v@sDxY #MQL<`1:1_)=2xYY>x>Vc 0VTY/V_l|]Yca}`/)j:&jMa6I+[(UEA*P6t');
define('SECURE_AUTH_KEY',  'X,jpHIg)[||ut0i+<pyvAApD+`V0 C|}A]TmO:!@4@rU!j6^&Y_([<k@Xo?[`-%|');
define('LOGGED_IN_KEY',    '!v-9Kt$QB5RwU$Z>}0GQ6zm&QPUO,m2-u-v+@tZS#LVCP`#z=3qkLIjKZoGt3sv+');
define('NONCE_KEY',        'yJRmnvQ8?<]WeB4<_O%z+|cq8,rpN/r4{|O[]^GhDK|+Hp#B8G(Re.tX`X}&+MP&');
define('AUTH_SALT',        'g&p)$26|0V[u4n<y::(e.sIH%$,h_wL+?5<;Ush|wNat-FMxp?e?CiXW1K|W^JBz');
define('SECURE_AUTH_SALT', '+on#PK 9+`GPRaUm]M,?E||.EUV4r9D=M9VxwSB*$R(@Y`S--T(;1.4eIaNhlqnc');
define('LOGGED_IN_SALT',   '$A<[)7t1W9z6snF+mcu]+XnH[.$@{HP#K bte,T[ag;[TQfR$;jDjkLT{zBm ^2|');
define('NONCE_SALT',       'KZfRu|c|AF$j@h6YhxY+G|sx>5=v&W|l!aZ#(5OLULlg{YGZ|x0ul N:##]+3Sa6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
