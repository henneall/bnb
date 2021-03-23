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
 * @link https://localhost/bnb
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bosesngb_ayan' );

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
define( 'AUTH_KEY',         '|]~![Y0DTo`[,GxY[V`JJ`unK]XF=2PxBa1fLec0V9{1kjE1=JI^9pA21%r(g0zy' );
define( 'SECURE_AUTH_KEY',  'vxZiek&-@Zz%,y<r?fc~J^d64_mvY,W/=6.  /qW:exwO}Tjs*IO|!h8ew=WwX`v' );
define( 'LOGGED_IN_KEY',    'PPWOI?}w*~$xR/[O~U_Jmw#N!*aox[vl%XmJX0C$MZX8+Iwu1yJm}1Lefr$_Nw?D' );
define( 'NONCE_KEY',        '#B:=6xuOZbH-IAg56Oo&t2wkI$YDd{pv6Jk9TZl1[ER%vK,6`xRtb,!(&ddpFYgC' );
define( 'AUTH_SALT',        'Qfc8<vUs0|INE iQ.V%V]*Q^_+5,WpEs^X8W^Jb&BJlB?zw?zzthHF %utV21c44' );
define( 'SECURE_AUTH_SALT', 'F22t6HE.{&Ex%tpu?K}Tg2AH^*v1{srDLdjg%V5E)P U]`{}l12WF>cLfR<B7g|P' );
define( 'LOGGED_IN_SALT',   '^9LIGeBxA[Ze:jcRZxH 3>n@7%FuD#[IPDrZ3*!pSFB;rj/e:tN2H:) 9e;qvqe]' );
define( 'NONCE_SALT',       '{1<e;Gx}e@&v*,W84M3y:@ 6>=F58nx1Lo*5nRKY3KzDR_v6TSI%%yk<s0~?j]*4' );

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
