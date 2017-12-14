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
define('DB_NAME', 'wp_portfolio');

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
define('AUTH_KEY',         'q:E[&g4gYz8Xy}D|e`tg/ 5,/>$]{)5AyjlYfxV_arF%_6c%7X-@!K$S;&x;=A(?');
define('SECURE_AUTH_KEY',  '8b&d;^Y>|WcT8~Ee#/xkvl:k<^:2Q=bsh^U8~`)$R)`LZjz(Pnrug]??mw!LVe1-');
define('LOGGED_IN_KEY',    'u(3=@;=3HGaK=,PbVLm<D(K#@2p$!BfO+Aw3:F>2=[=FxL`jYr&62Q;n&{-?R^y}');
define('NONCE_KEY',        'JqzK>h@uE_Jvo%LdD{x[P?ggQ7}>3.00gYe1/WUi6P7Lka9i/#@b>zL;RIt#}!Fm');
define('AUTH_SALT',        '9UKFgq|/:Lx<O$gV+i#r/j?Oqb|0?qKno^_V[]?mi?[:bhTiX*(z7yK@LdD:B8*&');
define('SECURE_AUTH_SALT', 'w=+9}mUEW6 *wD<wxJ07d7Vh<Lh!f~|$^}5SN=(TIX.x?@+qc:,]:}w=f&X0/-m=');
define('LOGGED_IN_SALT',   '2^ <+//KIC`N 0!l?qfw5*uyJ-,%B.[(]wvM7Xm}OPcX=ZalEp^$xC<g[E8Lz*.;');
define('NONCE_SALT',       '8JRpT;+D,]b7NA=oG{{7X:k&9CufM%qE$u$)FK11_$nV$|h6fQl4C<VUc5Cq6EJX');

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
