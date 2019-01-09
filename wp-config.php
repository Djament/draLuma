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
define('DB_NAME', 'luma');

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
define('AUTH_KEY',         'z[gD`_0a,q=y,l63)ilO#8V*VA|Ak; =A +r&iwWSKrG#)Go7l48>Z#N+{%Pz,si');
define('SECURE_AUTH_KEY',  'ubW$J@PYezSavgm o^vo`y3_pi{)P3$DHGy5u%e7PxaDVu~7-ATLpGc;^S|21bw ');
define('LOGGED_IN_KEY',    '<EhME?XDi|*2;`$6$AK!^6NE{oI{$g~S(WMupEjs;_%)T/V(JmM*,W+-qBGd}TsQ');
define('NONCE_KEY',        '_P,g h!;oegWI31nxUfY/~lBYhODjAodY#@%{(p!Z!|ASDd~R3cb^h%9b@T}eyR$');
define('AUTH_SALT',        '(m|A&~o)`%S.R[s9e$%>c~2ki]:4Y)7([Mf+9-O{ uV~.KIL>?+=A8=!y>(eeE(D');
define('SECURE_AUTH_SALT', '6b].NQ4=LW,f9Y`]sCx{2j]?]2EoeF5./7lpK`3O2syPA5*r^F:Z(;*n_}HKo{H>');
define('LOGGED_IN_SALT',   'It.B[bn,Sc#O+pf:JU74lw4m+p`ui!cJxn+!{]$FVbB.{hcUV;QEzRY2 hHCDVtu');
define('NONCE_SALT',       '+n.,D,U&go`&%&.pl(L.J!r+&X^yOpM0rt[>fy$pc]^sdqw-_Lk<(>Yb1,bMC|<:');

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
