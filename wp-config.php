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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'Tqk+ZI8en5Npj3!Z9<6){5Aq4z? B)8}lh<k@N:n1q7:2&y=m>]eZG{qs++i>0rS' );
define( 'SECURE_AUTH_KEY',  'v`h^:v&Jj7GzbIMz>Z*%ETtE1/>t_gS]qb`TmD6:bcz2?A@Pe1%=&iiA!v%C?UF^' );
define( 'LOGGED_IN_KEY',    'W&}:AZr+br=TR(kwX6XKY&=KnbF&Z-.&1wwl,~(3,.=OMCUL9D=9utHtY-0<;d_]' );
define( 'NONCE_KEY',        'nU:bn-g@lm~Sqnb%&/3xB4z?)Z~MH.+fV8%+^0uyGG8+we!su`Lh&S,2h BqCPJ ' );
define( 'AUTH_SALT',        'fJccoG/ps6_74L2l5m*P3Q;>]k+8[gPeUW!UD)9vr6R5!,cR h0yn/Hd3ht8#<V)' );
define( 'SECURE_AUTH_SALT', '~>O.>4~LY*@L?knVQiu3fgp,[U=vbx<VzSL;Y *f)3]vqkV^2 >.H_jB4*.y|2eN' );
define( 'LOGGED_IN_SALT',   '={bOGb8>W6`ez7AIn_>K<<&B3%z.Ou7W0B8S|;*%!g*yPEL;S3^!bOf2H+gZrwiJ' );
define( 'NONCE_SALT',       '8-Rk^4ZU)e)4WqO?#M^IeBB~OAezsC ^oHOc(ptQH5Di8B l$-w6(6=YNV#-N5br' );

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
