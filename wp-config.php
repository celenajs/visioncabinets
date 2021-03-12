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
define( 'DB_NAME', 'sam_visioncabinets' );
// define( 'DB_NAME', 'w4523787_wp1' );
// 
/** MySQL database username */
define( 'DB_USER', 'sam_dev' );
// define( 'DB_USER', 'w4523787_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S/852*963.' );
// define( 'DB_PASSWORD', 'B.3ImcukgssutwjaS1g87' );


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// // SET DEFAULT SITE URL
// if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
//     define('WP_HOME','http://visioncabinets.local'); 
// 	define('WP_SITEURL','http://visioncabinets.local');
// 	define( 'WP_DEBUG', false );
// 	define( 'WP_DEBUG_LOG', false );
// }else{
//     define('WP_HOME','http://visioncabinets.createmywordpress.com'); 
//     define('WP_SITEURL','http://visioncabinets.createmywordpress.com');
// 	define( 'WP_DEBUG', false );
// 	define( 'WP_DEBUG_LOG', false );
// }

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V@1H&M@VXP-g2,DA-!b8OQ|?yz+wQtBz$[Lgc1.td$I4|uo)T~A-AO%onm_Jz8Ga');
define('SECURE_AUTH_KEY',  'M^2tb]oCPH3 4EhW)kD@TDJ|UAm.RRBE1[@q`<R[ Ck@Y V:&oo~GFI}bbhMG2ax');
define('LOGGED_IN_KEY',    '3Uizabx&+xiz6&H(;NuL<~8buQC^D9NR#aq7zgoy0,~xG2.J?VbOn_ C3&3NU}=R');
define('NONCE_KEY',        '+*zT4Lv.$L)q%n rhBmEl!+t;+T%@c3`wcFIYe.&@5^wqohXryQpu[z&Fq)AB]aj');
define('AUTH_SALT',        'vz,=gfDC+gT!]),S-%6XGmWw!{}#|;tW`H?CS;5tY}fw<bqe$hBq!wk;x6,#{0UB');
define('SECURE_AUTH_SALT', '&Mxxt%L+zx{`:+^r,&>)(F+Ov^*@3KH4*3qQrX!G4gIWS}@,w^u1;=19tk8>Ze~j');
define('LOGGED_IN_SALT',   '(}+H0sf?qd@;ux_S|c&N*=a7]B*ggNAEzd(|<]F4a)Yb2(>F?~p+Ba.TT{!2S3s6');
define('NONCE_SALT',       'BV0v$*k}ljP^3`&v0{F^^J;A6t~q|d ?{E$NU^jqJQ5K%Ti|/g|K#~_H@+G+:1vl');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
