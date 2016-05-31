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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'ShSJF>/p*hx.P+-tva^Vs~IGy4zk5ys?zBw&aA9D/E}[RFrSzAT8<jbgW[B+1)t+');
define('SECURE_AUTH_KEY',  '$v.uJWyxxa:ttm /_6pREzzrBx$H~9;E|G8XP! 4&>Nq /gz#:Vhf)4b1fK1Xa:-');
define('LOGGED_IN_KEY',    'I~6sYDMa4#x0}bR+mwTR=]=L2Z#Sn2]{RnM+^-W+g0@FrqpFtzl[_t~a$|%{Cngo');
define('NONCE_KEY',        'K)aLUO]^;oA?AE,i=~I_Tm;={7X.q0n;v+({gT$F-&xI3E:0Hxe5tyskVC?mzGlC');
define('AUTH_SALT',        ')!>AT?=FNdI?BAjMGi;pIWI]PVG^YArAv+LTNN0yDaBq4g63#R-v,pfg-~G?2Vm!');
define('SECURE_AUTH_SALT', '9WUh+-U1WVe-cs_DJ*GbDsj3qn`Y{S75}wD_O@ss-N~XDBuDc{DiEh>:rkIOzQg5');
define('LOGGED_IN_SALT',   '}Y9KTj(E3O<Bex++qyEZn= +=1[h/@QfjpbAw*r#a4XEbl=QL!.mo$SDwXR](g|4');
define('NONCE_SALT',       'j?(ej(zO5;.KNvC&TYCP|]hUe,,92ID55LLgk#Yw_|Qey&)GZ8K{wd)k:K<u%:X^');

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
