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
define( 'DB_NAME', 'designer_info' );

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
define( 'AUTH_KEY',         'nbvH/R;NW}Q:4MJJK>hMWrnnH9md]d:PrAbAQ>mXDkcLns%?lGQgM)W]+=p^Y$j+' );
define( 'SECURE_AUTH_KEY',  '2k_w~vr <^#qu4UYa1y^PKZ!L~T;5]/:>=Yn~L{_j#grTY1bEv`fsx(o}9d0kGxo' );
define( 'LOGGED_IN_KEY',    '>#f)Ze**_K^5F-lFq`trF+cI}!.])6x@&O_zm(0d%Vn[b-$@{a*<]qxN6|sXJtJd' );
define( 'NONCE_KEY',        '(x%bm+NElcjthIeec?#cUfZHOLQ@j[<i~}[l/U[9{v}TJQV?7OkAdIxpBb}JUesf' );
define( 'AUTH_SALT',        'Np@WtV=KRdl]=b5Y9>XE1 !?IKulUt*e=D>U8:/9~~}l3>5Xg%PKFv%!Aud9nP{.' );
define( 'SECURE_AUTH_SALT', 'zRe(Iqk&-K>k_*2.b]%$?+:@aiWr%uKG.s:=`yJd~}UD>(wpR,^0>7v3${F$*r=b' );
define( 'LOGGED_IN_SALT',   't~hCBVyMp*`BE}rvP2M_0-nGc}==:5pG}w-AryT,Xm2hSy1F*+&E}#o&:aK/DZh-' );
define( 'NONCE_SALT',       'v848CmF94DXz<5g/2HZf(wBA6rjI{$`^})~Zy@EX_c(PrR0};]|-1 OOn_:.[w!2' );

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
