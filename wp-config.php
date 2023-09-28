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
define( 'DB_NAME', 'u900825059_T4RB0' );
/** Database username */
define( 'DB_USER', 'u900825059_sZHwV' );
/** Database password */
define( 'DB_PASSWORD', 'IFSA5UEw1V' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
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
define( 'AUTH_KEY',          'B-`xp%7N~vIwHT;n-=y}$lQ!+F{QHw%O-O3|Z9m+/DIe Z&PmD8<#96@rNVJe<lp' );
define( 'SECURE_AUTH_KEY',   '?1Z.hG@S;D^@EA)FM0heylKzeb16=)Mg}T0!lt@Z0||/if`w%*}x%f**#/;.f][z' );
define( 'LOGGED_IN_KEY',     'nZcn1GnBX{-2j>qSq>6uy,NZGlcwjuQL*;39E+=DE%lxS3V8eR(?0ILe|XCd>iIL' );
define( 'NONCE_KEY',         'S].9OHRN_a6m]~BFuxuH:.Hl#GAOWL%K: h _U^r~8^Za(I~c2g`7 OI;Ky!NI~*' );
define( 'AUTH_SALT',         '#Aik~vS-A05-6k4U<FWt%@K##vtCy| 0jMQ}W.<*BshIJR/qURccRKq}{1z;?Gvk' );
define( 'SECURE_AUTH_SALT',  'e`g(x/aIi3wkLZODuo ty%w$V_,nK,Jg_@49+#0|1d<~w?}XI~tRFiOYnE]MfU7l' );
define( 'LOGGED_IN_SALT',    '?EyuU3}T}hC8}#$|=eR.mN(3xiU6k:[ZyiyyE-s+cM_r}mBldbs6X#,^nwaGDl:|' );
define( 'NONCE_SALT',        'Hhw!+6{Z+={-sES_hS:nT@>QWDX0:d&c-lO0QS3$~I&8/Y/Q<5nv^Y*X:2[VL}xc' );
define( 'WP_CACHE_KEY_SALT', '+b%vZf8@.GQ:!V!I/olG9O^O<i7yFvBPl{pE1H@hcE0v g<`+298TylQn22~>li2' );
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
define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';