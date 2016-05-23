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
define('DB_NAME', 'vivifowper_com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'C?Vqpv1_Q)Bqs[ %)hr.4},otz6`fi@3eDRX$Q0DcCFw)<mrz /k|W]^ t1SE<mB');
define('SECURE_AUTH_KEY',  'pGEAaJVPQ^J<l3;eW._mfLch!P1|c<z7y*Rhb;d1ta6`p[Z67#?4 dUMn],W=rKQ');
define('LOGGED_IN_KEY',    '6$(VlqVY%TOVz*Hy039^S{AGA=MrlhDfvc2k8NTz=p8>}aC@}DT&I9I4O]Y7y&?b');
define('NONCE_KEY',        'm.I_pEaV=Bz BGWRN_9^4E=wyiOY43Tczafi0Sm*8~s,C/>f6aUBtZ>VZ%U::#LH');
define('AUTH_SALT',        'JpW!%*=K,;Nj}+<!-Xm`QI|A1t.WR6}ezy-AZ1WeBcd3B9jw6IGWoy[:==Ned,x}');
define('SECURE_AUTH_SALT', '/LaP=Vjpc5=K^Yusu[CNcClu8Gd;j>,g~MOGwA6(Uuf[ld]+E8*4@PW#:*4FiwBt');
define('LOGGED_IN_SALT',   'Fskwvw2gh=q>Xv|fEW5%2:t`p_ep*eqbFtL6y+a_D/`;Cvk@{QfJLA ZP r8={`T');
define('NONCE_SALT',       'UmIp5/^G|_,<FszPCUnxmD*&-*o%r5V>s(ecpN4%o%$.#f@h.5yk<)?^F=QB_6dI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vivi_';

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


