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
define( 'DB_NAME', 'rwsbhawarna' );

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
define( 'AUTH_KEY',         '-oAndGUO7xWLI[D72Zj$mYd^oU!_BMNZ,o<)ip&nSr[d]|c`jQQS8lZ0Ibbg7f=K' );
define( 'SECURE_AUTH_KEY',  'k##R2ORE6d3UZ]bcy;YW?W+V)}`2aZTz=TuB$S$=3FDm:^f.YK ).d:^i._b#CGB' );
define( 'LOGGED_IN_KEY',    'gy_MLc>IFN=aO~>YPb}?7i&Hfirsrm7XD2h=,T, )]KkB[H1NO`xq/L|y{psK1i>' );
define( 'NONCE_KEY',        ',2; L2QA8?:|)+mE%VOtty7mI>&B}T2f#P8mT`!r-XDj^Jy/ji5f d&Dy5hJ4`zL' );
define( 'AUTH_SALT',        '#$/;aeFaN3M3y_e:z~$.fY1cZoVxs#ot/+Vc,x1>z(piq}rJb<Qb%8v+bv/@lIL(' );
define( 'SECURE_AUTH_SALT', 'W]RwTOd*c]XikRqpz:$FT21PBR8fbr3-XO$#ldM{y/$6S5ySszQG36ZA,poc)2IO' );
define( 'LOGGED_IN_SALT',   '@csPm.|L`?}O~-8z2D*oH!/k*+m)a(qj,_zuA_$I4Ww*5L@3-$~x=?%t`K%55Pk3' );
define( 'NONCE_SALT',       'O$3}1nY6NR|AeX7F%@:@.9xkwRwUa@&7YY OUvu& M!?%X uvP9:c^/OT-%BFLq8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
