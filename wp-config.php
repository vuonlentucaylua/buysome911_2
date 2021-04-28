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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VAicalonak1996@@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ',E54Xh5.58LO0J qhpIlU9II?FxnCYs~Ra-F*9X6mz=CMyfrSJe^>-8?Q-lu8sPg' );
define( 'SECURE_AUTH_KEY',  '@d3zK({/wKLzcQc;ndVY8d84-Gx|@+htb]A+p1w*FbU:^VK$$l-j#xk5vpisnHuA' );
define( 'LOGGED_IN_KEY',    'v^u.[!N|+:Jpaw?3gTvZnin-R&K[487WWHt2n{5y*9pEff1Kq`/-Az?&sLm|6-;P' );
define( 'NONCE_KEY',        '[=)72=V~A|pCLVo{nUIP({|LKH{+fk~HVG+~g1du.z^O;kC?6k:p@3Dh{.:+Y3.x' );
define( 'AUTH_SALT',        'qL-;}^01l|_:tPd ,8?FE~GJR6AGt2G EABk-?X;VsqNi|r2j@0JIJI{A)]RNCep' );
define( 'SECURE_AUTH_SALT', 'JN<Tv5qUBGvls1$!&Ap+^~5|c..!7Q^+r+b&5v$=]PN4#z>;~cBuR>9VD0+t15be' );
define( 'LOGGED_IN_SALT',   '.l#$UC>QF0U]Q3X3/$x4(>TwPlWUVsL+yfCFr^p2#ew?m|BZVnq4v`$:))|OSj#x' );
define( 'NONCE_SALT',       '2A&]D-lAttdn>v$; Pnt <|`Bp1UaD~by^Ib,>HLArQ4m(}u@*Z)79=nLkdz0Q.w' );

/**#@-*/

define( 'WP_HOME', 'http://buysome911.store/' );
define( 'WP_SITEURL', 'http://buysome911.store/' );

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
