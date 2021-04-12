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
define( 'DB_NAME', 'shopTheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Y#yA_>&`&?Mft|q$d%=d3}&9uKe|I%i95!{nbH.T|sy</T^#87!sKs2Y;*!BeL68' );
define( 'SECURE_AUTH_KEY',  '_U!V[QAcH`71CNe-!#RCU:/c<K2p3k]>&$%4<d/N{#SFa?YAJL}h4NnpaD[xejfr' );
define( 'LOGGED_IN_KEY',    'dx8}Cos@Fv!x~D^6XbKg&G2SktZSRNqpH}!= ;Ce>nvD-hAx6$P/^}nPIMdFE_au' );
define( 'NONCE_KEY',        '@.8LZI9]GVv$%I(V2dh/+jN+N`cyAo?p6}Vv^=wZUfc?3QR%/rK!%FMoNew{&7U#' );
define( 'AUTH_SALT',        '+E}uU]X?).&1Mng`4v$@A*!afD*K{euWpbk^p4.~pMGpU7MY$^FLHEls=Ws|*R>d' );
define( 'SECURE_AUTH_SALT', 'K~sp~+i+9BuL.>.Itq{6Xx>Ro/`iC4vA9C)kLKOMa3anIMI|>b4]N_ulZTg+;22p' );
define( 'LOGGED_IN_SALT',   '@F*]*;c]W,SFfn99Uq[5p|o^6fgPAAMr3j*Q]M`2[[om;?0M859e:r]S>{$j(@8|' );
define( 'NONCE_SALT',       '`*1LFj*4H2z!*)({#`GRPAqvMu$8{b;<;Oqe[+6Hj?wxr$YLSzVdqxwW#&0*1dSk' );

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
