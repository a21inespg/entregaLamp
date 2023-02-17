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
define( 'DB_NAME', 'presta' );

/** Database username */
define( 'DB_USER', 'prestauser' );

/** Database password */
define( 'DB_PASSWORD', 'prestapw' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'XHo0-3cjkMKHp<p4UPUq]Wg9Frol#S=dKJI& ,{M)Omh*%#G|q{W_Ir Gw(,gc0>' );
define( 'SECURE_AUTH_KEY',  '&!MVig lhZ!VS9i)dGe=D(}6+j{7M>$B ;VrgxPe:x]Vo(&aLZ-G575_dUkfQ&90' );
define( 'LOGGED_IN_KEY',    'v_u]hOXIB=ovC?*sZQ >nK}l.su</iDO 2$8y<&Ef_Y9+&JaldnkaHefP1B<OxOe' );
define( 'NONCE_KEY',        'O!a0Nor0zz{(,.Do1ZD#D?}t(udK/:(^g677?BEMWd1S8bWi@apb2kS=K}(C5wH!' );
define( 'AUTH_SALT',        'sIgR#GUbz$^2VA;Kc#PCyaonqcccG)@(.0CrC2DF.`P&rb{[yY?+23iy4JQ_%b^h' );
define( 'SECURE_AUTH_SALT', '>2uFgTQ?cY/yR4vb?z,U[SvKK(^fkop8nO7VbK2qw{n([<E^F7=H?rg58]Sr!>Y6' );
define( 'LOGGED_IN_SALT',   'd/=-XOh:]f(]KOti#BznBT!jk_ffWzdTCGRIQ1$}6tY5.tavpwZqwJ+ZTeGqYMs#' );
define( 'NONCE_SALT',       '?bU+|0!`}mLF/j09.<1%,]=ex0/nu#NuhG%_E9hhb/2(_Gvbo+e>e`_(.~r33sr~' );

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
