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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '@N(|)!F{!{+lrnRZ7FA-E5q@kV1- wsLRSNQ!w-o[ut5Ol<&,_R`                                                                                                             }V^;`=(jVAYp');
define('SECURE_AUTH_KEY',  ' p/L3EP3ch`rW9D r4|7+`1q3% m~e|!B:EsC+xLDx*db)Z=hI?a                                                                                                             R9B[!)Ra81a-');
define('LOGGED_IN_KEY',    '!-bUt>~&#W,yh4:X&c|4K|VtzCcqxgoPqf++D=YZ+OWLr.&~+WSx                                                                                                             cLQ[YwL=*8sE');
define('NONCE_KEY',        '8}Dd)/HWbK9+?`8>tIlL?$0c0oAnvNzLf)faP8,G0B0_`_E]Q5bv                                                                                                             !>PQ4g`/|auM');
define('AUTH_SALT',        'S|;TO;!r35PQAt7E+e*<w|D#i@:8`-$]18g4%!R>Tb.T=-[KGy3T                                                                                                             zlLF,caF(k`-');
define('SECURE_AUTH_SALT', 'U 1t}9S#q)65&<|A}#5%fCX=-|,~||W|E-:Kf7|5@l69L:{H$Ml                                                                                                              B)H9L|OeK-}%');
define('LOGGED_IN_SALT',   '_[d]l&nHM|l9 5s,Bf1hoB*2c5.ZX6wSG5PLQ0U5[}$NSP|hh-:Y                                                                                                             4G9PV[-Vi1^w');
define('NONCE_SALT',       '_2}Q*zq=+8id=jb }ELu:8Zj`: :NR|.*%si6S+tSuu0/e@^J4[g                                                                                                             ->#qhVT]n0Yt');


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
