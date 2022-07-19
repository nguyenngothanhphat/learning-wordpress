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
define( 'DB_USER', 'thanhphat' );

/** Database password */
define( 'DB_PASSWORD', 'p0937994252' );

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
define( 'AUTH_KEY',         ']ezTuSma7t_kz4VuJ/Rl`5|qF3g#j!x]ejN.zxish{l-!hB,Xu3Vl]jeUgc7fsOg' );
define( 'SECURE_AUTH_KEY',  'mJb}DuvcOH;&RDx-`j09o@h}NR{%=+PH<-~lU{eI)L:A$tKMX;2Mz`rS(];t v-.' );
define( 'LOGGED_IN_KEY',    ':m7QrQ0(6,~Kv*+{!0IM,vaFEo:;dO4:^^kx,~;ZyLo!@[O86g@x0rTIvt((o@gq' );
define( 'NONCE_KEY',        'qk,+>@.aGZ,B#`Lo;:M@lU6`za{:,v~?thXz=i-ermVB$3/%*j8(-sf.1H+-ZQ}$' );
define( 'AUTH_SALT',        'M!4,Sr0Xfn&g.}twC1<|E`L{@}2D!3RB%{x>j)&t~O5 %ao%X]=VN;kM<1-cy}_.' );
define( 'SECURE_AUTH_SALT', '9C-M6aMqM+.`AgV%qxp}JibEN<&Q7Y`xhV-6v{0GN[>kUicrAUf(=,h~n>oQyc/0' );
define( 'LOGGED_IN_SALT',   'F6w6JzYyakm5WmXOI:A[Y}RQ71XQ&os)=ZSUP^,,tylNo3z?T wfRT)ZYPylB:>/' );
define( 'NONCE_SALT',       '=R3wqWrbssnwJ$~(Maf}N{!|TbSC9*Ew&3.f}lp`/+g3Q!RBU98en%a-RN1w.vi,' );

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
