<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         'u=zi[w5o/^Y?g&=C/~bA(#*t^7xoHd?Y|g0_|mbxY3-BwNpI*}n*&&z~}}{-pY3.');
define('SECURE_AUTH_KEY',  '^osH#mvWLB7+LU<jFwM?SB=}.96N&;Ozt-qD;)b~r8u9Y=|.8X.oF3/S0/[!&=6J');
define('LOGGED_IN_KEY',    '=w(!9@o,A;AS|lQV#TyW_GS&zA|Ve+;}b1_@|[P|G0mv355mF;*MIF;.R0w(QQVl');
define('NONCE_KEY',        'Rp)gzvbRks3`_U^9PjQ|YPNIc5+B9^5*NN!n#L?q`?S=Fg&4O%Bl_Py*46M%*xh(');
define('AUTH_SALT',        '{Kp@!8 9|Kg2b~>J)7gmBy2{_~Gq1gPjo^Ln%Ip@%?Xyc-jH?r1Uzw{h6q[xK$F^');
define('SECURE_AUTH_SALT', '+m4SZmzl|epzU7Y^8|@RF0.Dl5Jcy^w/VLx=LZ-49H_o~_uG$vDdS,?nvSpob!(p');
define('LOGGED_IN_SALT',   'Ct!l.=MtU.J+5)3V<sR4>DhyjjJf~1=CiheHXQFx7I^&DU:t$.Jb`?N ]$S~oK5m');
define('NONCE_SALT',       '?BQ3fvku{GXV^&O=pm$SB`ngGCa5_w;ATM9%e72CUui 6)EJgTsw-wqy:=stVlrp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
