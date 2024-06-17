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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'robin' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'KvgwJ-9L^L$DP/|,{O1$}oIm(oy<_jK<a`hYuMa&^22?{X O/UM5=1MT9GPV]KR2' );
define( 'SECURE_AUTH_KEY',   '<t]@@cNsad7z1;,~NWoA>Q^F->p2+-!`W(`-#Pq:U,nNrRGdE@K%KAQvwUm?e:+Z' );
define( 'LOGGED_IN_KEY',     'DqwkOAIINRfzN|3WnmaxtQ0IOVfcS(&RR&`G34jJE+>aBIqK4#SU0=kMK!Lpk1Y#' );
define( 'NONCE_KEY',         'C+_tHW;D,VJs*?kZUz5Q>dps[#sy.G@vKS%4 g^Yv:d[lXp*ZD+Eu#|{Rs<x4c5{' );
define( 'AUTH_SALT',         '<1G.}Iod/dXaW5(KJ4+TeZJ&(Y]-TCwqX7aG/tCSK1!ny^bI|Bjl;>Ly /TY3/^,' );
define( 'SECURE_AUTH_SALT',  '-|fm5Eo@c:V{yVNZ-lkWUn;)wH`xkFH51-*1cNR1o|w*sKH4H(vO6ORYvPGwpcZk' );
define( 'LOGGED_IN_SALT',    '!P2QYZ1PH<F(#`qpc Ifw/<%=b74Ufjy<}$=uR~/S-bxTZ&$bXJK{Brz=5(c5J7z' );
define( 'NONCE_SALT',        'F0:ddl;JAVA+ `d!Q*f.$dVfVaH!YO};u8{]#_Wjp]7Xc*,0Sqs(t6=rm&aP~nY5' );
define( 'WP_CACHE_KEY_SALT', '~C:hEzj(W]f6z6SY`FqVU`@+v.2Y15H:AIj,KiX.|IF))XR3@>q(c+VEoJ%c`A+h' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
