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
define( 'AUTH_KEY',          '8T^duj)mV@#C=.GSVa0K[)1R/1$< xsZWI*@>]3T-lafiin|_FmN[ BMK&lf%h#6' );
define( 'SECURE_AUTH_KEY',   '}5Qh:>L%Kv#[-tA`NT;/O`@mqQb{R%W/-1iO#Nc=4w!9~Qp#E_w)TLjN1k>,p~eo' );
define( 'LOGGED_IN_KEY',     '}e5YjY13GYqs04_zHgy0i,2HM|_&]g9Z=t@WKnV1sTP1cmF7z4-Zj-0!LTs/#jin' );
define( 'NONCE_KEY',         '{&G!Pi/1XP z}Oan0{F(qlHxWs5a EiIcXN:cT&*!#79f;+j<-vruL8<g;K? r{;' );
define( 'AUTH_SALT',         'GPuu3=74a=l15f-oxn8qCzQM`+T1}L$`V&wyfTfX8@.SKLhT;(=[%|`j0$:a]TZs' );
define( 'SECURE_AUTH_SALT',  'E3%0#VYk1QdnLiYx$6HIYBXmT/qB}OeqL*$O,xgqhE3vfSWE9nLP !J->nMjHv?}' );
define( 'LOGGED_IN_SALT',    'zM7~%[zFIP}c(c2At75@>ji]7K@y=}KEthIRR$oK _k{YN[|l@LLSrxU.>(*0!1]' );
define( 'NONCE_SALT',        'lU nC#@PyYC@/H}D/lJOtREXBS2<(N+ICE_XC+w:=D_+Gkg(uFe$qBwg!TjlL2-C' );
define( 'WP_CACHE_KEY_SALT', 'f*7FKHur7Eih9dF94e]Vea90[59vK%4!Nn@-pk>73h>oP5guj5<haC7< RyI}4r9' );


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
