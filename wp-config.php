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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'Jn#+s{`G !#Y5{Ssr3p]b;3/JG#qH)OJK{zN$mp&Ft5k-RIIJ[;mMq)s czNG9;I' );
define( 'SECURE_AUTH_KEY',  'pWT3w)UMhqK?s:jNq]R+545H@!@>dm6+Q,BJ_J*1Ki%],m/NDe3K}NaQi7QSyl(l' );
define( 'LOGGED_IN_KEY',    '7[RJaA?9_U2K1DLFGj]R2QX<[zOd^8LUi&[DI-;<j/7/j tskKk~8%n8ZGC%DDhP' );
define( 'NONCE_KEY',        'AVBrem].Rz+aJ,gW2d+<Rs@t}#yR6xrU0>[T+:ktO<yg`ES(kYhYCPCo8w)tT4:m' );
define( 'AUTH_SALT',        '[*@NV:QdxBkppMZD2 Rd3%q=7r1+nWRaCM5C5lwoh!m4u3=`b|v3/&e.!%d>nTJs' );
define( 'SECURE_AUTH_SALT', 'E3JK0j;[k5xuFzV$-)u)5j?l}4wwpi`#82T3y>1 |%5NouZST]h&p$8lq)fg GUQ' );
define( 'LOGGED_IN_SALT',   'c*SzHC_FF!a~ZK!OPXZ=l),p`iAXB|2&@LHV5Jb}*jM`YY7%p@|~CxF9&TgvSrHn' );
define( 'NONCE_SALT',       'Nzzg8S!!:f969f/2PzdtC;QM7jX0X?=&7l9y7AGRI+xP-ux~/e`YKj#[T8P w5uv' );

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
