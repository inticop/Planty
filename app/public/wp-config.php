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
define( 'AUTH_KEY',          'bO#ohU|xh?va{1&US8q|ZB`i~w =DB!z{K#6YP;DLx;wNEge6y;*({W^s+8^O?P|' );
define( 'SECURE_AUTH_KEY',   'A~c/G4$n%+vV(pi=:>(yPqS~tpKCM#]-OvMB1C.qRJ1g37[.cDsNDF%h2:d^&4S8' );
define( 'LOGGED_IN_KEY',     'Ds4}DMDOTA[G>[L*4>TwVj$i(c9iZ$n|v5P}$P[3J!Ss&6Vj-F)CmC@G8Ui>Vz2U' );
define( 'NONCE_KEY',         ':&gr}C8S|cnu:Wnz*=*Ye 3Xy[|%pRAl8<F&1E#F|uL<c*; >gIF_%/%<MONqG?6' );
define( 'AUTH_SALT',         'y[7K((L/1>`zMWy:5A[66II1l:-)6yKcWu|r}ts{;&bt8e ]w%U?ie/X-}2.h:G/' );
define( 'SECURE_AUTH_SALT',  'HUR>;-euHm[tp@el]ye8md4!%#Uxls#XboyoT9K#rk+k8kB6{3y)ne_su_g&0jw8' );
define( 'LOGGED_IN_SALT',    '2p H1jbkNK564.~3DVnJNeM%r`k[fNE855DE~UDX,`hJE#ER$O-8L%2X=`=4{F8}' );
define( 'NONCE_SALT',        '+ig.>:^-84>*FGG#p;UE5=qwpI6W}>kY[4:sak9G7!OLw/nI.&XEk6T]hp5S5~Yu' );
define( 'WP_CACHE_KEY_SALT', 'Wv[`#L2Tv`9wfhc4hLB=Mw5G(^.RE7Y8LJO3s}74YIEUlZYlx<THk(D_;w1RuQ(3' );


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
