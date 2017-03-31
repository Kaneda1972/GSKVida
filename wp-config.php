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
define('DB_NAME', 'gskwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'quinu.9466');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Xj!x2k;(yV9tuG.yTn5},a?tF&6*;8~0e,2}OKNYfE{Iag3%tGZn>42HOK*6)B{l');
define('SECURE_AUTH_KEY',  'P.i7=>zk(Y(M(MheX=eM6{i;|.j1;v?uN<FZ5;u|yn$N:ovN*Kn?2/[>Zs}vnl?&');
define('LOGGED_IN_KEY',    '5>3ZoY*|,2VW)oc>.6:!5NK~h9@.AWfc-@}8XnI1E6@V&6ERkKxv&4<AeHSj: )$');
define('NONCE_KEY',        '[F$-  $1[p9<5zu=O rMj={$EJ|R<kVVga$u%Ma`0QozAweb_FOb%W%TQ&1u )n1');
define('AUTH_SALT',        '~Rys]_*+6B>2+SOHy@}TN]H[HfR@K*;.>dA:Z~k0Zwaz6Dvbz$MT;kL}h?e|n}(p');
define('SECURE_AUTH_SALT', '-V;=jhZGt!d3B$9#./ATc>b-&FqC $]:2:pXJ9)$nc($z+a-pOWpYSIQ)h{bx/ z');
define('LOGGED_IN_SALT',   '<i[{|Pp0C5d$lB&o`5H8%o=|AP lrBBK]r=:YQ@(J!+0|w{3Q0}<bX8?&crXrIW.');
define('NONCE_SALT',       'eX%;):*|Q:<)g95:_0[]Gb+_|[JneAVjGwgC:53_EH*B:c4Lti^k]P[jVvbhKr(o');

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
