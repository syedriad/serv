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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aservice' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '[h_yE],*gbibPwwNi)HwyGi^|dGm9Uap5|]#J]%pHxEfp98%rZu8>AZ[:~W59;/+' );
define( 'SECURE_AUTH_KEY',  '(aQ%k3.bj5#J&[LX!HL=g)6:2C_mSVdZp|Ml27l@UxdHnV^9uS9-xz{1[@WDGg!t' );
define( 'LOGGED_IN_KEY',    'DaG`ceM0YtE3?cabmpad3m,U^)=r7<-5O51`jx?0N~cSgwi/q^l-g<o]D&=VV3#E' );
define( 'NONCE_KEY',        'aF`q%,,gs6.InP`?!.ufQ2:/Q_6=cq[n)`~K8N3>Bu**B<&A9?SWpui4$^Uwn*P0' );
define( 'AUTH_SALT',        '1Y^)X;B,=<fP{kUau_/SPkNCPS|&[[bLY4N/jL{Xl$y=!?nf/~IB>:01V1j>z2_+' );
define( 'SECURE_AUTH_SALT', '+<Sttp{w%!9Xi%inT0NpLqY8K6x-c_Rj:$!}B[:rkO=sj>3.}MY0/_EH?Up?6HgD' );
define( 'LOGGED_IN_SALT',   'X]8O}nVsp!PuO=|X%AUXmvT!Z>P#yFzJz# jV@0suo%s;d>due1+&Jk.)MNW~i=i' );
define( 'NONCE_SALT',       'zb)!:Aouh)4TG>_?b4]xr1A-)[#Vpo<olPHsB;gCis?+u7DfSLfI9dM2Wm4#SDk4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
