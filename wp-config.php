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
define('DB_NAME', 'tcc');

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
define('AUTH_KEY',         '!%(nWz7mxN^1,`,!;q@J:d{}}=]bauY u]7/P#4c5$l<$abI@GaD,SSQia#vTD7(');
define('SECURE_AUTH_KEY',  'W|TnP3o.2]C&ceD2,$MC /^9mS: M><{.aP4/!3UG%VZgEv!cz.FhhpK0k>KKVaN');
define('LOGGED_IN_KEY',    'Ss8ebBwe4|eeBEe-4BDx*4)T//G0T3SM[=B9!&$(A+09[/*)CD]U1UF=Te|j^4vQ');
define('NONCE_KEY',        '>El%gaUx[VDQqgE}=DhbOc5c;@kw6w/KYIQ7OP!r4-u-YKP2EtE?R)79=E48C[*Y');
define('AUTH_SALT',        '::4n`l@LM9K_lLT=gecH/)T?V~Eu lmk]yk6De^N*zw-cR2Lb`SF^1ifFY=:bg;A');
define('SECURE_AUTH_SALT', '*<@{vqsT-O{aZ(Az,LVDyH8{X[D,27^#Sj6+,nL;qr+t_9PcrBnY%[, WY^h{F=x');
define('LOGGED_IN_SALT',   '0VVSa+3z/3 /)+eyC[QanCn6IB(>|Jt/*O%4k9=30 Sx 8zK2b8^41eM[ 54<^(B');
define('NONCE_SALT',       '$V`a`j3GZQm1h&`7x`W.}l)lU}X_nDOR)$M}K3ri.(>-UeS*-%JJ 7re@9T7d+x*');

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
