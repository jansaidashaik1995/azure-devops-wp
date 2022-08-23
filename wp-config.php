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
define('DB_NAME', 'northcott-db');

/** MySQL database username */
define('DB_USER', 'northcottdbuser');

/** MySQL database password */
define('DB_PASSWORD', 'MrML54ktPr%1');

/** MySQL hostname */
define('DB_HOST', 'norhtcott-db.mysql.database.azure.com');

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
define('AUTH_KEY',         'f>0w<(nptS/%)S5e4T66[T!:6*2>0?)62~<g+)jI4D_=kBC!z!$@|O+@PWm%Mcxf');
define('SECURE_AUTH_KEY',  '<MX|=@`?qBDv$j1fpAI~3+.6%n|-|LrZ7gEs:9Vuc*7sKy_-OfRCZS4d/i%)$+Yn');
define('LOGGED_IN_KEY',    '>nozBPsJnsG^.*Zfp1F$*0Fb`8M1}MkXT@Pn17[MNP[_ui<]I^H_P_a@R(w@;L]q');
define('NONCE_KEY',        'vb5)+U]:8^<n)-6=BWj;ND9<Np+?szY>@4Usgqgy$d+r+IhH%bfSk=7Od{JLdSYG');
define('AUTH_SALT',        '%|o=3UJCKP?t,^A7+*t#xD.kVB:<OOO*>u*>3zZ_O/3bXKy5I$6Jw%/hI;hSX+SL');
define('SECURE_AUTH_SALT', 'c,@@h;z]6*6|IVIW$-*#@oD%@E,TH.<bE$~<_@@Iqk|KQtzb:C{&3|-b#&%4[jI]');
define('LOGGED_IN_SALT',   '+PisGHtcm^(&G+a9WINlEKqthbJajvkq;{ugPe*[QrDS!h?La$c&Twdn,L> -a$F');
define('NONCE_SALT',       'E~&ydj6*Pz~xg&-P>oI;c3$cx/G[>9_U$0h8u5+)0q Hu#$@Jf6$:vZH_=}j;%cj');

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
