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
define( 'DB_NAME', 'aceinstitute' );

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
define( 'AUTH_KEY',         '/UR #~P5z@[ZZ2x}`Qn{J2v m6bI|kUqdG$2^?r/jXm]<*(I)miZEN=&h@o%%2IZ' );
define( 'SECURE_AUTH_KEY',  '+4K:]-!;9$;WuM|w4n,+>1NwDZv?T7_4^h?<1,tp9gdTBtt3;flFsVj@UBPoSKw]' );
define( 'LOGGED_IN_KEY',    'j/]Nz?l!U*N17KDgO=oGD8!Zzl1*$W) xZVbD+DSJ~b``m^)+O>OM&x8(gva/3 a' );
define( 'NONCE_KEY',        '0x}RrKAj~~S@ra)QWnnNUzR5P387u%AY~:+w:12tE6Xsd,Qu^gNI>/Ht.ul!NR*e' );
define( 'AUTH_SALT',        'qsxVz|tegapc^YfbG^bO/A+r$s;c`dOVGuN[%I?HP$3]a^^c*BEkbBF$w7PSH!7s' );
define( 'SECURE_AUTH_SALT', 'nn:B:A3nz{c_3]{K?8P(vf _EToa(s@2j&3H-#!^P(e,t<W&T<@ i4Qa}Jfhd ,P' );
define( 'LOGGED_IN_SALT',   'cu1FY$k$ig)6f>7imk2Wolv>ZUp3]yqG_oA>R~wRp:s0/PZ,*nJA=GovDR%>!b:(' );
define( 'NONCE_SALT',       'Y+WNM.HuWe+2z8.~.d#<QH-z`DlMwz3;!y`y&Tb/GK!U5![[R7*RjU56M+/#x{eJ' );

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
