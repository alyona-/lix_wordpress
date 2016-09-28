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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'A:\home\localhost\www\lixnew\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'lixnew');

/** MySQL database username */
define('DB_USER', 'lixnew');

/** MySQL database password */
define('DB_PASSWORD', 'lixnew');

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
define('AUTH_KEY',         ')D!<5Mn>E%U;Ci&=^];pt(P6,cZo%l=`h5}m#r:pfMo@E!z3|Zf~vY&|4<T.<n2E');
define('SECURE_AUTH_KEY',  '?Q[09n`-aV>[B3~dq/]w@40Y[3[Qzs+gj!BP[!t@=/a#QNjNggbZ3f(<C~JpPBz_');
define('LOGGED_IN_KEY',    'b%FsRF5y,Fo=cG+x)YP2uRny{aMxpPv<$;4[/3%2xTY+;q%kUy6*p( _qM9L5.Y$');
define('NONCE_KEY',        '*q+R=F{>`bcs@<DhoG5=>Hc&vdH$}H`mm*K=)AqpId[yI,jG]781YCO=7gK@_uP6');
define('AUTH_SALT',        '3wvN{`J0dmd155XkL#<U;PBzVU?<OlNKr9vtpr>R?#AHV(G2.clBM {A</h q[j>');
define('SECURE_AUTH_SALT', 'r+N-Yhfx]K72|{}1L5H$b^sDk-Lgb.P@Q*?#cl[MYR$&ep[SSbztb{h/Fg?q6tPL');
define('LOGGED_IN_SALT',   'z8P34XPJybX-j*u3J;wrZ!P}4xX9#L3y7O i$k^C9%XV~l=r0tpVt)CzL*kdqY8Q');
define('NONCE_SALT',       '!gtUX;_R]oZzVN3p[ZsNRD<z;T[Oot>nsq-,.IWF}1zc,.}Bzvc5x1`zt&9kwn{H');

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

//-WP Tuner Plugin by MrPete------------
//--------------------------------------
$wpTunerStart = microtime();					// get start time as early as we can
if ( function_exists( 'getrusage' ) ) { $wpTunerStartCPU = getrusage(); }
@include_once(dirname(__FILE__).'/wp-content/plugins/wptuner/wptunertop.php'); // fire up WPTuner
//--------------------------------------
//-END WP Tuner Plugin------------------
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
