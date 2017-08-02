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
define('DB_NAME', 'carnetnepal');

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
define('AUTH_KEY',         'yHwb+<66.qBGa96)J83~eK.gf=IzU@c[{2$ikwd=n-st-<RZcpNd?ecE@wxZ]Slf');
define('SECURE_AUTH_KEY',  '3Yh^Ox#ibkQrBm9WavNv7omrC=vp]H]bDI{7K|am9bB(7d#}9| PnD`AE;)>rD$Q');
define('LOGGED_IN_KEY',    'mX7C!6kr(H;[EeX[hhp/zC}%%hm93:}#5dx+<D0vCJxwknm/|XQMh~H hE=e?ciM');
define('NONCE_KEY',        ';%vmer^oS4l7>wb$[eQl$%LcKrpK5Zf[uMtHJ`D]_i.IS.1`&,$e4}!8{I1J4tCI');
define('AUTH_SALT',        'Mo&|VX3351_2h9rF8x_iw_P_wFF557Dx?/UyK9Ee,)@ zqA0d(XbCUO;3QO!#V_D');
define('SECURE_AUTH_SALT', 'cstIzL3dIU?-CrPJ%8G8.UGgxJkfH8VZ[#70fVEP%Ia6&]=Z?}dP8f_62<C,!1xa');
define('LOGGED_IN_SALT',   'uEim7T~dgGLJV@2k#DP7g|GHPpNdN<CS$pu$=Zr$?Ge8sr^eoS*RhgRYf}307AtC');
define('NONCE_SALT',       '?D54_hive_$MQ1/|-4(L,ctvv-YA6Q:{&/tU!<LDB+(x?fNGJB|6);5~>HUHDNwb');

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
