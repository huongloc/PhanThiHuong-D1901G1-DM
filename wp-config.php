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
define( 'DB_NAME', 'maihuong' );

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
define( 'AUTH_KEY',         '_/md|25tFY;Swt2$%LNlJaMCzDA!NY[IEP/m_ty@Mm)jI~ETKM-:s^zJc!-oX?? ' );
define( 'SECURE_AUTH_KEY',  ']a.oU<`smQ[!?f^qp+p_U()Aku-{=@?oi_5MPb]@eBd794/Oo(lx,z|;3tO#>wJI' );
define( 'LOGGED_IN_KEY',    'cnh+ H?F:R0mmR1N!/zOXxhb~`I:85edd&_LOxc8XdV$)63rEfnV;X/PFZIS{(ut' );
define( 'NONCE_KEY',        'H8DCZ(AuD`#PtC7&WdBD`_Ozo$5/V|b1hYrzO;7F9.Ny5KCC#Ij{_<a1>x6{<nHl' );
define( 'AUTH_SALT',        'Nl#U -5&%u$0nT}i5j1.{=np:Q)o(m3xlbFYixZ%T98e*oRt0@F3`R@gU`)~P-&r' );
define( 'SECURE_AUTH_SALT', '-f^WjhD6,5z3!L}zXH;p-f ]S/[$+Pi/@<{YjA8*sc)XD5R]B7wg!2x^jUte;T,h' );
define( 'LOGGED_IN_SALT',   '/p+*#DQ(U${_5I*^WY^7[p+m:Adeg~i;0=6-<e>QfeC7z;Q=i|5t~m<K.A[Rq#LN' );
define( 'NONCE_SALT',       'zjaT|LN*J*KaFhq>`&;iA5ZM8ktaf*[yXWn[Y&[hQQ=`j#JbqIhk%F6uj8Ri*j0 ' );

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
