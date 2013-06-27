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
define('DB_NAME', 'franksdt_nuevowordpress');

/** MySQL database username */
define('DB_USER', 'franksdt_franky');

/** MySQL database password */
define('DB_PASSWORD', 'frank123');

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
define('AUTH_KEY',         'iYa.unPn$>+o+!c5K;!~-~YY|Psh]T=dZq?P++}SPzHIkdU&1QAp-s1(I,>%RKG$');
define('SECURE_AUTH_KEY',  'GtW_(:*+Rp_2r2R(<hOm?E&NxjZ_Q8Fub~yp6hd|pWFW_jc)i$Cq$QrT-fHHk|gF');
define('LOGGED_IN_KEY',    'KhAP-op~-YQ~-F?!:+S8m+$DEcVeTgyq:i!]Z}U7wuwcc!EpcDNMv|-=?@mmR5<)');
define('NONCE_KEY',        'oe76n=vSn-_ZbTQ?`[PmQdlpgR3ml|4$#s@~~ K!|c9WMmYX3Z|?!|vh4@NdC^?d');
define('AUTH_SALT',        'bQ{,EJ(AaX2R=;*^)JQ09$qvwAz%+0o<=%qV}3*ODyyR.`)/A!n,KTh~TC%nTR@-');
define('SECURE_AUTH_SALT', '^m%z>zqOi-=JKm7SY6B(-3;B?;|<N%gDH/6^p`&/x]m>iZ|~S YsF(+k$1kb Q6R');
define('LOGGED_IN_SALT',   '-hV,Szc;q>y(`e5r?9-6jb)5O2~{<h~_10Zl9Mr q/.wR_%jWI x9(a@_7Go7p^9');
define('NONCE_SALT',       'X2C*PL5{Y(rZbG8Yo9hW!Lxtot<H-l2t|CC0!J(2v@Y83zKw:&>,#cq7?QBM,<tW');

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


