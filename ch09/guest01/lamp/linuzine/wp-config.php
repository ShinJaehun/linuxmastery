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
define( 'DB_NAME', 'linuzine' );

/** MySQL database username */
define( 'DB_USER', 'dbadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ppassword' );

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
define( 'AUTH_KEY',         '*J2&4;IM} G#a@]<D`||OD|F={(&@grb0^H}+laraTx[g_)Cds[_m]SE5.06b?,@' );
define( 'SECURE_AUTH_KEY',  'pP.F~KW.DxOjZj %y+>rm|lFnpK4(R1(n#CkdK>/g(*d/wSY|9e|$/:aXQ9^d^?D' );
define( 'LOGGED_IN_KEY',    'xe/Y_^7kY#@}1JmwG`V9[S=FHOoF!N0Jn-V:5w_[|pSzg)ob.jIg#O>~biJ+i^~c' );
define( 'NONCE_KEY',        '0u]ZGrzPI_d3o-=sO1uOx){dTk*TvMc}j_`E1w31QraphehhbSZ,t=av?x 7 i8i' );
define( 'AUTH_SALT',        'Wb/HnOd?)$V%P$7Sjf:m|%b_nS&vh|VSL43:Y*$_pZNb}~4v:9-2@/?yk2.GR>GY' );
define( 'SECURE_AUTH_SALT', 'J@/:gN0{u[%w.8dt6,N/d/-Z6)viNZOcLG!han~PTPncBM7:O*2`C]2cA+x@zi[B' );
define( 'LOGGED_IN_SALT',   'cE7zopyYbhojk)=[VCdNvLCL5tB>3a6>#S9$MX8K=d~@,.oV6gHLZG5b:CetVZYb' );
define( 'NONCE_SALT',       'BiWB$Os3W|bmtP}3i-%>)gY6D|{xgh~:jcL4`(OVuRqrKh63[YzKtShe0L]B=;5<' );

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

define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '10.100.100.1');
define('PATH_CURRENT_SITE', '/linuzine/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

