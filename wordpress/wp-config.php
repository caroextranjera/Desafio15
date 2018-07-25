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
define('DB_NAME', 'desafio15');

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
define('AUTH_KEY',         '`x_:A;3GQTRo.}`&qf$9*$ZU&5stE&Pe<+iFI%b-En*]AbRUjy*|?6R6f8Jo?CRy');
define('SECURE_AUTH_KEY',  'UUV,?Y1s$E-h|8XAhBk,-POwFY&BFG Kbq[o${g7Nyf9-on}T0Yn//_aaa|HfU+D');
define('LOGGED_IN_KEY',    'u[S46T]W6#BRs$gpy?;O0uEfdu~1uYdvneNG&|q:6 gg@v|5/W}2:7gM5zV|B)_~');
define('NONCE_KEY',        '0B7X.c7k+DY*AYy;@[&F8V wUeSa43U.<MCi_#16C6J5#eX%X&Btt;J^ve{6ATL$');
define('AUTH_SALT',        'U9/AVxbuxl-B63%yEoUG=KG{9;1;*lz,  fSxJ;%Nyf+TS^MqutYwvW!i*k-G{ak');
define('SECURE_AUTH_SALT', 'o+d-^K<,jA:gP2TF|5cN2ABz(hk09^J2C/3 8_Afj7%?@z  f2q;7TwW]a+cDQU ');
define('LOGGED_IN_SALT',   'VsByx7Wh..lhC=.y/i K69>(w$_dBJLx9R!Ub?|_Dm%0PKitj,TuUX7%n~(32|3}');
define('NONCE_SALT',       '8|m^GYwqTnZ59[XI?GUols(E&Xh@1%3.^AANuU%D&Q.N@kfn+4R`c@zDu4H/ZTI#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
