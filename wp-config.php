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
define( 'DB_NAME', 'charlesignacio_db' );

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
define( 'AUTH_KEY',         'tbXj7jcDcd]b2>GovjyhwfhRKgE(XDH5[p.71htolmRP|bN<J#V_bK_O^2Ms:glJ' );
define( 'SECURE_AUTH_KEY',  'I7icLxL![_o}q]!+QbJP;QW|%y28`<*8ka%ORbLS5$+LK>!0?_|%L)vFy~ZB_76`' );
define( 'LOGGED_IN_KEY',    'o+4xUU5aE9b#y=XcMv D7Yx%y::fusQ $R6FXMJK`m{hk5bvD*Mhz;S&N5;qrA.{' );
define( 'NONCE_KEY',        '`ik&m5VTRxt,rBR(o{PCi3xQ m/$NTU61<dbsTa`o:cJq:+S*;98[8s{~EAD-wGE' );
define( 'AUTH_SALT',        'Wo<2X=m[[sU/7FSk`Ae40R]J(~jNGrjy!J?jHR~pj]]5$It1!_3[q^9A|4B%%~oM' );
define( 'SECURE_AUTH_SALT', 'C|P$t.sG@6@$=ITdmmpJz3)2n#<hxsNG{XMCp&[oJ_{4FPCL`n/d(#4Gp3<9Rx<a' );
define( 'LOGGED_IN_SALT',   '4{.]QS{-BVstg]U}Y7v>;V^njVDQe=[ >g.o%FV|:!s./W&xl2%-US0[|Ut@qb<I' );
define( 'NONCE_SALT',       '<#~)BlLCr1j47HBY;%@eX<c%dH}g*%yh(|LsLIA1Ni(IG@9.PiL?/hH0t!$9:3Y4' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
