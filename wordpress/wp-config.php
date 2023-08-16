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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'panty_worpdress' );

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
define( 'AUTH_KEY',         'gg G:{4c0d`]n+;?F*ykN:Nk|H8gJ[7I6%;Y%8KV~wgo._E1^5l_VeNxzt<u5iY;' );
define( 'SECURE_AUTH_KEY',  '%Q-Q{v9*75@6yMo{ocA4_.|b~o@-D 0(P-rg<V>JM5P;G]X&|Mh&+hf8c4Qu[sPQ' );
define( 'LOGGED_IN_KEY',    '4]x&|snKW Pu_h-@sb_at}35^@(I=8;3C`s6><DTokEtRwhh^ 3N?:hDY>/5&^/@' );
define( 'NONCE_KEY',        'fis:cN;(X},~N_g6:wIJ=Rq3H%V-8aS%LtHahW-[gwtqb[_c5sfWsZq=XWr?vycx' );
define( 'AUTH_SALT',        'dLm?#6L$}xApJ8&TvTG?K`v(qVN=*Cs:xnPq%!wZyw|0t=$dBR7`JYN8slNLVT+n' );
define( 'SECURE_AUTH_SALT', 'V`jdSnwI+Iyg$um6Rm$,ZXtM{k)B@kFK^~MC~xAkJRFh8RTM)M4Pj_6#qe:CD2^o' );
define( 'LOGGED_IN_SALT',   'gz:wQ;YfqY$;)zvy9s7Yd|)l|CFRm6>CE63i3H>~*akDLMf{OHG+,}]:RQlh6n*T' );
define( 'NONCE_SALT',       '1 jG1 *!6=^-R^n@aS:g~51==Z{N~?.RQDbSh#0L7~0UB!{T?}lA5/cG.S&S+h-s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ctwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
