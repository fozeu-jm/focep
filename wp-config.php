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
define( 'DB_NAME', 'focep' );

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
define( 'AUTH_KEY',         'CYr73nfln5w91TF4P17m`[!14z_cQNiaG{K`9v<%mfNdtdYo.?e:dIJdw fH|.9V' );
define( 'SECURE_AUTH_KEY',  'yk*&~7du0Q)}?KR30uY~^`mkR@1]C}e%%`%I3$aO%$&dj!hPpB)Nkw|vpaq%E#F0' );
define( 'LOGGED_IN_KEY',    '}vzZaT1t /Y$hF<7ZYZF@cV*-6>3TflJ=e CxI}v|.[*p9k?*TS}KGA&z9 EuO>T' );
define( 'NONCE_KEY',        'K^eb(3,L!8U|fa;mS;2byV4l1i%n}vQ9^`w?@Z$#3I{u1O<:!3VJG+y%)0;<;w$=' );
define( 'AUTH_SALT',        '6{4yc`=|/)O4k1|wFP(V`fwIF*8[FsIRCF)3|AF.,&gIQh>h#;-xa-UwMo.lRYB6' );
define( 'SECURE_AUTH_SALT', 'O8fljW:`j0kP6)8.DFJvb)s2#1&i^ptaWqh*`X:C*Gp~wnm}dej-U09l7, OQ,n{' );
define( 'LOGGED_IN_SALT',   '-eN0Ls.4@,Lb `KAY}!9#-]kKuHXE4FJJ8MYju=jR_N HaYS@%n%bUQ/;fLw/2L&' );
define( 'NONCE_SALT',       'P`,nW~msa.LEw0LtN+wE<B5^/?3Y9@|I,oiBcy%~mJ%$gQkOaU!V^{ jR@TUkMz)' );

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
