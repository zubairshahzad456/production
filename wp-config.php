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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         'a/(rej9RB*@$bYfp^H,D9lU[J^~Q|K|%d?]z!?ffO6|Wx+8Nat_I[dJ8eCBT<.j5' );
define( 'SECURE_AUTH_KEY',  'r4}j3aD%i+{3k:RDjyxU!zDh3mKPqm|kOIDdec`i?<v==j@2}bXBYKpm3Y taFy}' );
define( 'LOGGED_IN_KEY',    ':T%%rQb]-N^a+ijdLMxA6bU>,/O%[AMTSftn0&n5?k=d{K.ACV;(,cTMBmq0 Uly' );
define( 'NONCE_KEY',        'ho:qNj|X~B %bM.;@!Ea0?f9b=~KpeZBAys/NFb{y,7x]f!|KrMPRaX4H#sN;cw3' );
define( 'AUTH_SALT',        'F]UQ%Dbu8:-g_$<;|C5y*tyft@/<0u9`yK/Eb{_iT<qN!_,G`<(zU7*M -u3$FD3' );
define( 'SECURE_AUTH_SALT', '&5#K25&9[DrWr~rP3O*5vzN!K6aO}xxu*D$=Jn(-BwZs*Ckh<RXgdu  8W*]j@Sc' );
define( 'LOGGED_IN_SALT',   '[{k5RSuK8[HpxxB(?&22lZk/.RJ.$M;:1[&+3<4ncIGhe{Y91>J0>v`Isa{CbA4Q' );
define( 'NONCE_SALT',       'JJjseD)o}80{hSZU+.AN)|R9$K:mi/Y98N[,]>%Zo7%``qyouSU5}9aJg>tk~uBK' );

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
