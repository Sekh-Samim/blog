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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' |&3!dJpHB9ibaJ<pV~+TVAaT:k(e8J<$4ydCf5kJ]~l*BT.g=gKUq2wZFFiQ_rI' );
define( 'SECURE_AUTH_KEY',  'fVn/ds%KX}8<vp=V4O@*Q~L${faTp LsxX#TRO4ys4$s!=43Lnd_^PJ%r%wtIE[o' );
define( 'LOGGED_IN_KEY',    'V*:/L!4Q&f?7vLlC]hUjW{)4!=roc-2qBD^*C,qXn:#cuG:rLKW}V6an(1QmBL1H' );
define( 'NONCE_KEY',        'WB:M>bqCGIlDp4<>fNl]%.(o4^32}boF:t4{&$gO<n: jQf<M<!Vrm<=)}jv~j`%' );
define( 'AUTH_SALT',        'sBB;`q->{f$!%9~t5,?0nI8X/F(t<?HKCafX:lNi1q;_kv|YylnqCnWtRlU)q5K`' );
define( 'SECURE_AUTH_SALT', 'W{~Az4m0`z nMZp%09S]U/P(`i}#naP{Nr!nXK3[f(R2#Z>?[(Fa|~))~]QLZt,b' );
define( 'LOGGED_IN_SALT',   ',pvN$1[sk/Wi%llc5LHQ~&vnjS*<;?IguVFCXTX!-l$_7L306XBZ7NJ3NP]D?(~S' );
define( 'NONCE_SALT',       'n^dFJ2k.&j!^B{|nOQ89J+AsEcq,kbU>_+cibS>xisnDxWBz*+N!}VTXP$;!4,b%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
