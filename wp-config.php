<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food_receipes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Wx_j|V{{lN5rV$d3PhQJONy;2C:jT%5H6[9~xT[u_}6/kC@&5+S(fgMGfF]J9.Ff' );
define( 'SECURE_AUTH_KEY',  'RN469qX+~(ccl7e!%2JYLajc~/;*b`ytsHyMPdQbquO6%wSI!j1?p]uj?uRACiJ~' );
define( 'LOGGED_IN_KEY',    'o lz(:bk)jD1j%H!3eUdY[|ffgW1V1{Z9#G{axG]mZ7JM/]_T:$!OYK*poXF|QV.' );
define( 'NONCE_KEY',        'VA`iWvL}rXmx{$nZ)W}X9P#D6Sid%$u5FDf88!avU1xd~:[,?0JR0v$%yULq:AeQ' );
define( 'AUTH_SALT',        'V53l,pJol:aER/*Dt`o>rZ7<a:#`wDg=VE3=qci-l:X(K0305@^`l6=@L,^r|{kM' );
define( 'SECURE_AUTH_SALT', 'fYUhT1[(e^Ow$27&EDHM:[#)A#/#8GiU+1ivB?p%h2V ix@2G!&-S<dtZ!n,@`9@' );
define( 'LOGGED_IN_SALT',   'GH;L6+dM_Ac#5p`DRap%TYzaR@=uY)XnA~ugPg&}~<+jGWl,j#FSqlSM@D[JBv>D' );
define( 'NONCE_SALT',       'v$dx=FW!?mdT)Q75xU^vPp(KaUV}@35xGAsL@FaOYq2dfPsUAYe{rly#N3Gez!hl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */

//  ini_set('display_errors','Off');
//  ini_set('error_reporting', E_ALL );
 define('WP_DEBUG', true);
 define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
