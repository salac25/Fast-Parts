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
define( 'AUTH_KEY',          'JMK6&kWq{wh&rj%)C@0JT1$f(2q4S%rSda>fWl-U`DX4P?T;HhkqXgXZTwc=Uv,E' );
define( 'SECURE_AUTH_KEY',   '4zpV /Yc64Z:Pll./A>,Jkz!JvA=@FQWUA~8 V]:;UyG;+0*8Aj@L|^uOQ)T%-yw' );
define( 'LOGGED_IN_KEY',     '>ah^RM8sb+g]D1n,-50< ]7xOi!2pRyAV&QKI4J:Eb~iM&0_D_F?;9V{Psf^#Vd+' );
define( 'NONCE_KEY',         ';=I1c++PRyxP[8JPE^R[U@9uKS.V]>*}3||Uer:T{pj}6XlKry?59/1?x?;~oc3b' );
define( 'AUTH_SALT',         'E})XdqYL]q~G9(zp`55;stm8y|}*[Kfo +xzBh_*z1AfwkudE}=bdAdiu?T:KZ=[' );
define( 'SECURE_AUTH_SALT',  '_Bqln~o81Fp$G`V-L*R4MuZy|<~uj~MN7 kh2:rq7rHpb@~J_r|[KCv_[1mB<}#Z' );
define( 'LOGGED_IN_SALT',    'GU|AC,qWZz|,V%EFp5fa;WPYw%DniC>W02QQOo#g2Uy42qM&RH*JSn9o,P2T@L><' );
define( 'NONCE_SALT',        'Ji;oJW]9&*EEz!vJ9Lrt>V^|yZ}YxmJs}k,y(zwh/[nHuAS0&!<I<!/KSBz7HS T' );
define( 'WP_CACHE_KEY_SALT', 'v/-{:TIpT1@kJoJj1GBnyIqg5a)h: 6=(tW(9*F&R0]]i I1ZC7;hj>KV%Aglnzb' );


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
