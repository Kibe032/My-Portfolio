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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'TKNx4 AOYTNX8>4[_0(lR&adl)}0cg4AWu{OG<i/HL$;XCh|sI&q0w^w L{[(C73' );
define( 'SECURE_AUTH_KEY',   'r07VsL@CT*LIE5&nM% MG^z8F7GY~},$:[ELZ*->W}@j@v3NOznsB^R0~yVv #b[' );
define( 'LOGGED_IN_KEY',     '[<J[ 7h0!-;VE&O8Tiv)nEeA!TAk|:y[YWUpfEXI<]>M:eV[#i7Pa)s{EUsD6=sf' );
define( 'NONCE_KEY',         'LqG5mZ).tsC%W=b5i8DNp 8r/wA_+gUZrZbuoE<C-^opJ~=/m$7m;M ojU$jT+z-' );
define( 'AUTH_SALT',         '[TGH|d(aYggxt #jApC=_O&}LJUN/zCz|j[xs4N;z&H>!rJ.eL$3M`( [kMx/w+k' );
define( 'SECURE_AUTH_SALT',  'NW,dDGQOpK0y*93c+m~8Gy(3ldc_<{P*hO;a3KDzcm9Z-OmFzU@0PVmExkc*);UM' );
define( 'LOGGED_IN_SALT',    'NsD[<BY.IR>+1}|G$AQmjY= fjBQzQ)-| )>kA}Z%W57>SY[qB=vYJD=zm Vzxt{' );
define( 'NONCE_SALT',        '?6ix ;L0*0D!Z&WP/7_Xmb)Ptdqe-U3AuTDx5+W Xx?pW]UXW!p?iQgD*{jgYYP(' );
define( 'WP_CACHE_KEY_SALT', 'yOH%#=h]Kfz/#%z^!} XeR552+t.48sYjc Ld/X_bpMUr>Ez@0b74vAm( *|apjv' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
