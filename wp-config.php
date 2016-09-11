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
define('DB_NAME', 'namlimxanh2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0ruer]p(=^W*Zq&@d]EpmF]N{e~,+T@nb}#s^wNcZ_~=*owooUd6{p[q#L~PEkiH');
define('SECURE_AUTH_KEY',  '~~t4Jhr=6#^}8zDhtnpOb4cuBTc>l!v&q2Q]4DK{p]nU:%+4Rk|QYT/MmvXC/!|A');
define('LOGGED_IN_KEY',    '5-] c]<fJ=x+8{9d9u5d!,?Xs7{{Em#)!F~~0AwP3@OZ|*;BC41gVh`ojC]/@(#m');
define('NONCE_KEY',        ']b#FyMNh-1%hIk`cyF2.k=g$vC^0[SpA8ahTjvXo65M57<IdZ][|#iYE(}9rn1;.');
define('AUTH_SALT',        'IJ%u-XA_LM[]bRcfhk})]65^p8G({A]FPj-j/[2i_f&3c-y/ke{ !egU;uS%uaKu');
define('SECURE_AUTH_SALT', 'w-@}v=66(lVrSFzu=Z[<Tim:[i^06/{gDM|[Y/M614!q]#!Q&(s1`1LxnOPRon)$');
define('LOGGED_IN_SALT',   '[(Ou^B-Y`m!61Z@o9kz4V+Ys]x!Al}Fqe%!v,K!bkC@I^]M975i56+O~d{!,(;pQ');
define('NONCE_SALT',       '5i_<Y$w)+W?@6a0$6{?`;gwy8yHH+z!P#VE&Xvo)]-a#u&|IYi?]8!f{AJ1++GX;');

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
