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
define( 'DB_NAME', 'examen-2' );

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
define( 'AUTH_KEY',         'AEsa/4G{DnP|hN/pBR6x|s;1/jcaI5ZwH)JOuT9:cOpzPra!vtSv`ej-i)CA!k%z' );
define( 'SECURE_AUTH_KEY',  'd7p~lLyk&+Ko!t@Hx-/<uU<MGMl/EK%wF+3foXdwZQe)a::D%-8>yy_S,YFyvr95' );
define( 'LOGGED_IN_KEY',    'S)91pnFKUBpy.4pp*0X=rUfqG;AEB2M*-._T^=(M1H&b;3V;O.dc#6nh<Z_|/daW' );
define( 'NONCE_KEY',        ' cKRvp8AdCk^O4Wc6(icB^FHqGJL/_X>ll[C:($+4O0mA@L(TE4?Wei=oAa~UHyr' );
define( 'AUTH_SALT',        '5g2z!7IpLeX5kG`AHsXK[ZmU/0~JC$O7c])_~ iQ$mU-?Mk$A.>uJV%@1~J7#E]:' );
define( 'SECURE_AUTH_SALT', '_3v?`<fZ{t~=Nub{]].`s((]eeClkLC/))|5e,Uz--]D^</stRe=KaUhwu{83#Va' );
define( 'LOGGED_IN_SALT',   'eI)O|]XU-R;(Bwd!nc9-e;abq|^{q97fYUc}wMMv[TR]qUI(:tyTB+zx|?-Ca8G]' );
define( 'NONCE_SALT',       'dEi9MyX.hY!YxHps0+&eE%iK@@IYqBf5]N>]$1d(B=)/2F?Kq5nUDzUm)1&=&A|v' );

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
