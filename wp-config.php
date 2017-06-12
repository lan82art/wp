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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Creation');

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
define('AUTH_KEY',         'o8{13b%1;Z=WuD``Emsqq9?Hheha2>z(.% P#_OIar^(aZ1z|R.e`dZrc&h9@VU ');
define('SECURE_AUTH_KEY',  'ZWurcFovxvz2S!{`|*r@VuW6CEMEnO4UM?|tPPL<4LzGCq2lG4uC:2)-!.<*s^&.');
define('LOGGED_IN_KEY',    'iQc.=WG+[P:sR@=nRE#4)Od0&yen%+]5wOG9`bwMF>EkU-`dcFlsYA#TSqS4fwv5');
define('NONCE_KEY',        'B-[]p5rm&rCZ/-Roj0.Oo.:jc;;W|CeM@)[?%kH_2=~^3|%Kv=o%ZSpB*|O4a>F4');
define('AUTH_SALT',        'XY_<{6paD6_&(`1<fOTm{j`_:=eq,}1*t4nt<OGSDpZ3a2PLFp:*v:`RDd0`v|+_');
define('SECURE_AUTH_SALT', '[o#%{FTxJ UVt{<rGxEl1{YRDiD%Q`J6C<qI,AeZ=$QCtWegsYqPl)g#g!+X+[7K');
define('LOGGED_IN_SALT',   'sv>2`g+W[iOggq2#lT^9$&|FT69PWBCLSi,0 TP)}%TYWgM1E[}8Oj|bBefuiQ7 ');
define('NONCE_SALT',       '3@WJ62Mx-i;zWiNur$X,QucV5!IGBxU]qepbKFPZ*33&==P#X?Q6).^Y&~7y>seJ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
