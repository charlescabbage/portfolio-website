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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'uw3[.ZA2B5Sn=*PMhZ^*i<737HyX1cfk@s1jmIxhcf u*`8sMi1T_Cnz0f)+d7!(' );
define( 'SECURE_AUTH_KEY',  '*DtJ <?e#CxsE^,x%NL<)+6_ruUHtu.qQ/CI_-:I$L8@Rp(:<a@crMX?so~e@Dc|' );
define( 'LOGGED_IN_KEY',    ']VqKi(5HN+z#re3^)+k+Km%#S8qKir6zwZ1T6P*zv3}#(@%iB.ooA!OoBN=/IXjU' );
define( 'NONCE_KEY',        'MT(UD>OPm#He$2l]fK77/_fpww7,,-2INj AJ5@:&5XlN?fGp;L<,L9_w^g7w**)' );
define( 'AUTH_SALT',        'N7+_~G8[SwSM|W90X%;j#r$OAx/~wCnT;b/<:0eB#=jC65-}B3jXTv~zW[f5)w]!' );
define( 'SECURE_AUTH_SALT', '!^pw4My#DdU{ZKe|]!-jkA-<P*~d{T=Jf0Ob#8vQ8d>pky a7WGTT*%d7jnr|SQ[' );
define( 'LOGGED_IN_SALT',   ']{6;[{O$:a=>e3&)1)l#X#yN@X/_Wyv~Hv6iMi{2VaAB+}p .x.RhC@,l{Q+Rm:k' );
define( 'NONCE_SALT',       '`1^I;00&LL%{;{ &Q2E2ir4`$KSC>3yhGoOn@&Z%Kp~[/&9A3 u|+,%I{4^);EeP' );

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
