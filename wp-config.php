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
define('DB_NAME', 'clean');

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
define('AUTH_KEY',         'F89lIH>3cZ=~|>pU5{ZiMK3R+iLx5[7l*YHR-N-.s%:{h&.=PqB@ihr(plxEA.ob');
define('SECURE_AUTH_KEY',  'fT+iH$x)!:!>E+-1ZsI3mO-A[O|o$vb,!zD>3$+qT8dbv<675s}|peBLX2k`qpUD');
define('LOGGED_IN_KEY',    'h-1dAjS@h]_~g6n=bX*m-T<9Jqs0uR#/8~P[$+}1`89N/zRfxdhC|dp<*~f/<;B?');
define('NONCE_KEY',        'QRj|KA=?Sm2:$En0 nLGq.=IfdF2 |n8txAE{mN,Y#})U65o=efn>U_x/Q#^#$5^');
define('AUTH_SALT',        'Qw[<8FVF!)k9H9|7>9x4D:7 E8!3H^btIDHgjU}CvPJ796h]@HaOd0+960BhV.[x');
define('SECURE_AUTH_SALT', '+V<f8+,KGULR=yM1-T|X)(q_.E1fRr5oh=ow5|!3L?,c~f%2n*5tMda,zyUsU!Jz');
define('LOGGED_IN_SALT',   'v:DC:b-D^c[Sv&FbxOysW[^E=2%x*ciU5:sV4z-~yzF+F(Gyk#gI-;.;v}v=pmm/');
define('NONCE_SALT',       'A6M$~+5D8v$G7BH([u[fJ[j/KdKmtUy(.MBu~_fx)RRG+zSX>I{twy;Pvv*nm&$]');

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
