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

define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'www.keck-warren.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define( 'SUNRISE', 'on' ); // domain mapping

// ** MySQL settings - You can get this info from your web host ** //

if(is_file('../../wp-config-local.php')){
    require_once('../../wp-config-local.php');
} else if(is_file('../wp-config-local.php')){
    require_once('../wp-config-local.php');
} else if(is_file('../../../wp-config-local.php')){
    require_once('../../../wp-config-local.php');
}

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
define('AUTH_KEY',         ')D0rG0y_Tr(oOXn:!1*#/q}&TT,xJb-!|M3|(_Xl)~Mf/`FI&s@&SEETJ+vo5CFQ');
define('SECURE_AUTH_KEY',  'PP}e5{}}cK&$9on$SeRw5V:$<Yj+R}l)!|LC@kN_!7=Xt5{@$U#`x+Pv]$h:Z[lj');
define('LOGGED_IN_KEY',    '-}3_ *-b[Q+|`<%e6hUgb_YoM+o[ww,[Mh_(,0m`,oHyMhsoOD2!}?a/^V$tW+ac');
define('NONCE_KEY',        'o`j+k^Gs]t56F-$<)(>+HW^F`Y<.b(mG%qn3]TDQ1+S5$Zh| lldZ-xL6D,T5g9t');
define('AUTH_SALT',        'ARM$&sdLci3Aj :w`u=H%+ <&YeUhxI0.6Bh|tHVlKyEij?!del^UeEG)iHlpT_Q');
define('SECURE_AUTH_SALT', 'v{PtP3S`W;@&pS0=L|-0y`*>YW[e[%9!J=|gqGf8@!b>0|b 6K,T93LI(L-e~m0q');
define('LOGGED_IN_SALT',   'Cw}B9/XlDQ9NK`(8A?|C4~W[5w~g62Kz04FJiCk,XX,e-uihB]I|OA[=?fYv:WE)');
define('NONCE_SALT',       '+$x R%D;|$e*I,AGpS|Z|)Zpe=@&@QZ y<-)JW&d+Qhj=v>(XY+>N4rLeD,Wl$Dh');

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
