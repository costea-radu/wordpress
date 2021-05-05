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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!ll`;D]#9H6dfdjl%5QIJGvk=+jK5V*0<$yuv$N{mpZ=l,qA{:}[$$73n4FS{Kj7' );
define( 'SECURE_AUTH_KEY',  'gLN1NC@ ~l U/xO cf=Fz=m}=0@FA!zsID.FwH/gF1sw r&q/t#3_SItd-~z(QF7' );
define( 'LOGGED_IN_KEY',    'm3RP,5oLk#l]=X/L|5JHeyK*bAEJg_+A|TM_zrJHMG5:wxc_F7t{[MN#I*OA9XJ,' );
define( 'NONCE_KEY',        'iL{7v34*cm(:ZINzG>*3|L5X016-Ji{N(~Ymg+@,+097p:p%R4|no`U=DEMc&)Cc' );
define( 'AUTH_SALT',        ':)-b;4<&_c,+t4k{47KB4QNo>dzX?OP9:e Of8C#u|RS)yl[SUbMEBZ{H}j1{!<V' );
define( 'SECURE_AUTH_SALT', '8#WuM6[[YNX$WC(`uG7@e{Y8=5KDLs1hh%0RUyQL-Y2YVGa-s>,%9cM.Z-_ez+AA' );
define( 'LOGGED_IN_SALT',   'D:aQ~4:bK)un? UWAt@+X$P=pM]4<K&++#3zc_pr|e{olZg.<^I*`DOh;U`7f:eO' );
define( 'NONCE_SALT',       'Qk5`!AJhvqW@+E|I_xYBM=0c?(`Bm$h6c`7w^g-y&HY4}q7TH9<r*rhSCC_2y$I^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
