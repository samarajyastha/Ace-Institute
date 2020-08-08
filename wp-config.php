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
define( 'DB_NAME', 'ace' );

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
define( 'AUTH_KEY',         '_F9*(t;;,Z:j,l8+ K`0m4bWK!F(}zVasn<]mlz;lHnAWC^[}x_FQr?I0P+,CR?c' );
define( 'SECURE_AUTH_KEY',  'n~3;Cx:av|zemV5+jU#@53Q9{[xt4Q-BA5B*$<.odwL iL3sM(@ txut3~:v$?)G' );
define( 'LOGGED_IN_KEY',    '_PfJZNf+C<Q2!4Ai>t}:<F2bOWCc9m>d/1VFh:l=z`}(,V+ufg] })unUnr$`:9l' );
define( 'NONCE_KEY',        'R~DqszS)SHROFzdu9U#6P2~.Q1tw!;WWM(:9ad%BTEP8jLtggcP,.tc=^7J%L8_e' );
define( 'AUTH_SALT',        'kkDQt-g@v^68PpW]@{VHbWWmZD*(q]3K$g3X_IK}l)=]rPcN(Hy>GqWV^ [ P0RA' );
define( 'SECURE_AUTH_SALT', 'j52|&<07n+mByP]4U|gH]_4pGs&`1EpvG>&U*Iy=7WG=`{r<Gl;k-.$ksV7`Cec9' );
define( 'LOGGED_IN_SALT',   '}VT8>t5yR`0*i7vKNzBR/Z>8Z5?mGjw{F>qJ:0Jx2-U>;&tlz}]((.WpslbP>h W' );
define( 'NONCE_SALT',       'vRk1t}N03&0/hN::iVM/Sd49m@;Q7VBki96GFAL.#LgvbZS5=B).K!.[7#`UV~.q' );

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
