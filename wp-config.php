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
define('DB_NAME', 'bookmyguitar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':M6#^[[.|68:B|#L*#+B|,PvnD_yY)q;?H|1]|?h}s`)ZMFzT4h%^4G~_t?TwDd{');
define('SECURE_AUTH_KEY',  'u%0VL=_RB^+?-zYVAOpzcB& /%qm6PJt;~:w3Xv_q!Zp:7Rq7JW96?>Hh,f:zDQX');
define('LOGGED_IN_KEY',    'C<s7(sF d&Z;S#tAAfn-(kt62@TSp^`$=RF=b!3[}w>|:~CiuJ|D#<bg,lVyc>|l');
define('NONCE_KEY',        'gn90:%TLcgA%I#x*iyeGTP33tVN7GY/1-YtV(t{Ft4](#01dyLZ632Mh/ZG1XAsB');
define('AUTH_SALT',        'R6YFKMiK3hQ*|urt-F)m6c3r.L&`u]Rtd[^lV/N@[]%^l]2-g %Er:<VQ4Vf|U }');
define('SECURE_AUTH_SALT', 'D~W6}1Mg`B(^au q:1^~g}j>8$1P2Nm3HIQ4)]tUsW4IF+Ggr&x<I{+HjWk(|7jA');
define('LOGGED_IN_SALT',   'q7ke*=A2YyBqb%-7Z]nKSK)=Vn}vy9k0jlKh}(].4+0^Bl0E7|+3Q{6_qH!9kCKP');
define('NONCE_SALT',       'mG}~+iV>a%UbE_+!*AR-v[|POl|Y]+ZYN)_}e.GGg_MsVB3M,e<`,E0^_S]WKMc[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_bookmyguitar_';

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
