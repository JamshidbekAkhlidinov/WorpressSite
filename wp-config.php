<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gE9qJf&?^ii)h_qUd?_Smg|{zK4dD9Z{+IT4e8eZ,`(FC^DvE =:ucGI@zfA>L>q' );
define( 'SECURE_AUTH_KEY',  '`}3Y,oQ|ab`p%BdGFJyp`}XU`kJ1@H0sQL)jEA `2y(w9#C.7xv6=/+pJAA ,DP?' );
define( 'LOGGED_IN_KEY',    'z}nw>?B(rAmefbV=^D#mw_sG54)Eq``Zw=QG`?BMhzhiQ6M$qM~!p!qV3r1J0Ugl' );
define( 'NONCE_KEY',        'bZjTE/WN!IocB3_{SpUZAynO!)&zl@z<R*a%;sw5asb`Ryf~t+;y,=#W0r4$*!La' );
define( 'AUTH_SALT',        'eC-&@Hx9hy z]!Ci? //t1F<jH)(}.JV?a 1 HnD$$eQP>i5Hq]].BOL__icv@[<' );
define( 'SECURE_AUTH_SALT', '%HmxKc<#mA}a1gVyK)}#gGWfhT!ZF?_KNR-t/7%[:?b]v@Nm7|qu +?&FMa4SWwR' );
define( 'LOGGED_IN_SALT',   'faD<PoNtEC5}evUZF;C]A?@0K){c|6RN_l.yvh&U=Kys*xsZlgE<k4bwgm|lt68e' );
define( 'NONCE_SALT',       '1)gzD;P==|,= #_.{LH`/:DIQ4jX5f.V@sceB<aCM^0(iBCs~UagKijp37TiM38I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
