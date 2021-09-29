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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'splitstudios_db' );

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
define( 'AUTH_KEY',         'J^Wtv3Bs52Cr2}F6dJ-EmJ>b>8M%`u^GvXRF&D.o#RI$J^^M[wDjQW-zty;17%O ' );
define( 'SECURE_AUTH_KEY',  'V}e0Q6qRqa}pAXb.>5niHJLEY-K<pu4~KU#2%]]@ >Kg-Pu.z?h@lz*?|qIo5)ra' );
define( 'LOGGED_IN_KEY',    'iHran$:oV/+_Nw>!SL?`rOPb8@A8#KT<}$FY4s;[i~eyXBYkf1D$Cd$s]L:Fw!V{' );
define( 'NONCE_KEY',        'F#NJYWt95AZQVmC@0!:d+9,nx<Bo9DBgN*qqyshT]i)7T_#`xG)4=kW=$FJHR%)S' );
define( 'AUTH_SALT',        'We?SXJ%:)@BJp@fjU ](Gr|u}5>kVh {!<|Oq]TYM-dyj4.0e(jmZ!<17V9!xBE{' );
define( 'SECURE_AUTH_SALT', 'G#^S3h9&O6FgI4}6Szv$k|0apCzCF1T^:|^Nhc;1W;wpy`.5Xnik#LN(_!i|B;m.' );
define( 'LOGGED_IN_SALT',   '$w;f0d!9fGwgwrtHbs5Aw?dEM#,WA;l}xnjU5kV*rI:)|`LSe6US<|9;k9FMu7uu' );
define( 'NONCE_SALT',       'H(](:hfZt=1IECI|by#eZ^?4P=ES J]IqU6YiR.rtO<h<f>l`cJ+.$ +cV9_u><g' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
