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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',          '(IQ<HLJM?GU$B9y^5*^+5Se=V1p?tqYui/JbtyJmXn{P^,M~<u?1ZZ8j5Uo6R> Q' );
define( 'SECURE_AUTH_KEY',   'V2S. Z$FOv;];]B,*/B{ 5$P;J^-ju;WI$u3{;fVPB3pR=/>%ES^<@bvka64J=ST' );
define( 'LOGGED_IN_KEY',     'B_9[P/NFC+Pj[b@h,W=j-i$]TO^iRZS$@t Pp3asdyO%S#V*fbp`0gwen9q(~W|w' );
define( 'NONCE_KEY',         'Zkw2^&. #}S{(N}II:C2VRcwtY<1GnCq{KrLY,Zc&&99Dy|5^jA;;0D*%KC.#pg_' );
define( 'AUTH_SALT',         'hf4iwI_wk4>n,=%=~?n<wMP,sTHmRmW[/Ec25=PlQF/X1P?OKg ICB^{YY~qognO' );
define( 'SECURE_AUTH_SALT',  '=-~W@/h~a!y8V =xbmt^_Y>i*n26&Mv9:-0@zr_BZJdRvcVt@u:NsE0!YHIICV)?' );
define( 'LOGGED_IN_SALT',    'UGF ;Ly6=lsA}8fw[OH/XUJ5clB1v0D#5T-hWT$|V#l|[e]! >obs$k]]Y!^Q%}<' );
define( 'NONCE_SALT',        '<1SjAA!-{]#_Ji3MAr/JVt5w9C#5N7JJK(ckvU^u]C/fr?v4EZNRI}pR-Rqj:A`C' );
define( 'WP_CACHE_KEY_SALT', '(]HbT[|xIyDTB^>{7H*SJJsPws[)_l~8bb]c$dSWF6(D(GDw4]]6*CAAo3tzw<VM' );


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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', '/debug/debug.log' );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
