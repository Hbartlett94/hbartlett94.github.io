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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'WQ?Iaj)(H(8KLlLYjs?b/rM#MPD!KN:^i+%nKw:v^io7*xE*eiJ8xC4&[J+Fn.BA' );
define( 'SECURE_AUTH_KEY',   'I,1)K6UIQ2u!z7B2|5.X-eEH|rLuEvD.MOnz}.(cK1IFfXAk4Ky3p|vmb!WPkb9J' );
define( 'LOGGED_IN_KEY',     'ij|l44t3lOarm~bY!nVJ7K)hx:7;fj[NLg@`T84TxiC4GzD1r!_OQOL{A_^W9D^i' );
define( 'NONCE_KEY',         'g)ty.n}<{RnqDu6oIexz;f^^39Vz*6PE|96y~t<W^F]~k$>.y2hM:f Pd+w6cJI/' );
define( 'AUTH_SALT',         '`*!Tz3deBN..bQb(?kLg0=0H)k*K#%;ZNg~a~GJCW}]m?HmLW#80kgct{N%BzSkL' );
define( 'SECURE_AUTH_SALT',  '|:o7%3=ec4[+C19s=;:kYa}#_Y@$=ygYz6`DX/+W{L*aXWtid>0ll}mPV._mCYW2' );
define( 'LOGGED_IN_SALT',    'sR!a`OcO&g40sP_N;gSnF*UQ6E/PKR.5nP^%K;DA<]r5?uL3/#$%o[`H8XCCbVM[' );
define( 'NONCE_SALT',        '#=,U5BbZhQ>/}L=Y,PrLAC}]${Zw2/?5^@7?MZeO;f_F%t.lg--Fl~GQ#/+dU%D=' );
define( 'WP_CACHE_KEY_SALT', 'O-%dJB^t^=ztT)K]v i`S~QREPcVSu:,lYzjZU^ZY{nVf(.x=,cm[iCF55l`3%9#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
