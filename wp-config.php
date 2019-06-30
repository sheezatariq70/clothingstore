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
define( 'DB_NAME', 'clothingshop' );

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
define( 'AUTH_KEY',         'uxcj-1r4@f8@R?^kZG(a%D5Q(|T?_(2Rev>8A(!Y^?CbCrHBxuME<`xSPw.nf$kp' );
define( 'SECURE_AUTH_KEY',  '_kiKwKZ=z~sM/)ofO]]XNJ@S%~*t*LJrrM}t6!Q?+GO^K49s%C:K$U+~[<E|ZE7q' );
define( 'LOGGED_IN_KEY',    'z}=EO]:;VbnNz/84v=BXr!]p6`yc|My?!~h;9]mZG;8qVU,uiS12?({Kk)VXvP^h' );
define( 'NONCE_KEY',        ':RVFklZK*t]@CiaO#W^1{$XQHU](16PJVneHN]g}fx?56iYV:`%%%`cGR~3;fPXy' );
define( 'AUTH_SALT',        'KsU*^p!|7TnU#`$ULqI0FKhJF%z63a;4(+>~.k6nu6AM.GP_~NOzU,tq$}@2U]T}' );
define( 'SECURE_AUTH_SALT', '+n8N;BDa}x }v^k:QNqcGXxn&5sMDXNA,z<QCk5V9@/l m%r&q|5V+&>L.KXmyA0' );
define( 'LOGGED_IN_SALT',   '|?Pp^!M.?%B^&k<8_P(VW4}iNSGDx)Tnd?/u43 h@9nA2:Z{EyHD)T7?2LcuV-4w' );
define( 'NONCE_SALT',       'v(LAD#I=0|=T]Crs9h7L#TZ$<U ]1z.bl(NAUu}J|Cn~k~k!h>=kffAKT*1/81@z' );

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
