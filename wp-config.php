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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hello$143' );

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
define( 'AUTH_KEY',         'EB$p&4cm!9)}e;?H~X_T{SJmK[OCE#yF?HecOM`#( 7^un.>tE^V0VQBZqSs(p#J' );
define( 'SECURE_AUTH_KEY',  '!w1{:8v}fxte8cJ2T>X#8ey!OZ1@Jv!Hlb8IW_YRV@Ou=YZTO?5AthnF,.XW73in' );
define( 'LOGGED_IN_KEY',    'J^rvm:Eh(UvFz;wa,NPr-~b(_1!,d6!c@b7PRXk!qAS&<!/=|%j3zWirn.i&@BTw' );
define( 'NONCE_KEY',        '3.;v<%s;X+#AuU76/V/q<#Vb3h-g2woDW{_zEL(s:uL%k4h wiSB43.R0T0K*dgI' );
define( 'AUTH_SALT',        '3N^v=t>T-^Fm0t^z$_,7-9!A~PZ#`5]m3=I*x^Kz74S<3$T}{hnv=m/8R^7*|`<i' );
define( 'SECURE_AUTH_SALT', 'XTFd;6T&.`R/RwnPla-r4?@-z;$Oxof^Xf~#S|2Bd]<f{4$H) B[$ZsbV??I4Qth' );
define( 'LOGGED_IN_SALT',   'ckO1*bWm5(g_aOWu#!koUnY$*mz}Lm )LOG&TSDZuwaLb%(JPN>5Np_m6y!5cQdc' );
define( 'NONCE_SALT',       '-AI3B746m<y}>.cjj[9)0o768}H&%C$_K,1p|83m3Q- zZyhn[MVq>Hx;83k3?o;' );

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
