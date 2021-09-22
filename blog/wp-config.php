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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ams' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Xbfb()zuhNgBuQz3DfMF/h6%lr5#VLARSpgDzCnaB4R{+gXZfI{]GJa`T>Ha_Xv|' );
define( 'SECURE_AUTH_KEY',  'QwqR+GtM3+7lDjSTac hU_W@2-iC.l;vPZtu6<Spj{lclL=Cfg;5H.1uyPhzVm1y' );
define( 'LOGGED_IN_KEY',    'W HWCx3yE;gRoN3&{-@&.?JrNE-:K)%NBXez-Y^gopIhK7S$f&ulw$JxVVL_Ch2T' );
define( 'NONCE_KEY',        'e|`{3!{+U{r[zHtl$JH&!#WZyl9J,?X73Rs#Iw 3D<En.bf2p+bJ 9UH;4wWSVV6' );
define( 'AUTH_SALT',        'WbvkmO 0,*6DCEfaSm,${bs->+u,T ;)HL7R8IY_G}B`EjoguD}@ fGfmisG2^23' );
define( 'SECURE_AUTH_SALT', ']!%z2s)+m/Z1z,&Eb@dT%$+ZvSTFlA)8.(!$$Go;X4[~.#T/_dVrgG1tej764XX{' );
define( 'LOGGED_IN_SALT',   ':4_8&1yC4&1n]}wB8k~-=bfoi4/lh/AVj|ETL7lp;w:D;]r)5i)ap{GCrfuy+6#I' );
define( 'NONCE_SALT',       '[qdDmOVs4zdKu(&Q`R>HF9:Y)gqlBpdAm(%xhxq.!jg^2qQkHC{^70m,,!ZvGh%~' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
