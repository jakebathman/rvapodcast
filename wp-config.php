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
define('DB_NAME', 'rvapodcast');

/** MySQL database username */
define('DB_USER', 'rvapodcast');

/** MySQL database password */
define('DB_PASSWORD', 'FQp3rKebxh78GsNQPQe6KQN8Uszi6fHc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zmyh*ZuSzdEw}DU*aT`LOWC4QLGO<n.8>7p2aCzib#Gq]yJ+ys^T3fu 67awrj<e');
define('SECURE_AUTH_KEY',  '0SL>,[$dA6g,cEwDARPQbK-+W}]^r6Q</7%CgXNrb>B&B4woLHZr[HqX7iwS5kfi');
define('LOGGED_IN_KEY',    'cP`@H|y66 K+{z/36bfGKYLpwhdKzF4_!U)A<k5PL{)`O82N2k=CB~@*l]F5MF$b');
define('NONCE_KEY',        'g|dDT7?a(&h{f,0*>^Z!bQ~| Rzm1XnMW(Vd_a+(x)CB3)r(BE)6m4JeOiqVLFM7');
define('AUTH_SALT',        ':^/AB]DOFO4rbGKbQRbUOSfIKft9`fx9qp#6#]qU[5}4sSCRf+QzP8FTKaN<EZ:1');
define('SECURE_AUTH_SALT', ' .yoP<9ld.Zn<yIjn<Tnw%w0xCG[gJS&8IiP([Gz-}>#z.x2I4Z%>4lR)h%S$E^&');
define('LOGGED_IN_SALT',   '&`s7j2zH[`0s^L?q3Y#,C@2cxY1o4$mzkn*c)Wn^0 KQ[6l/Zpu V;3=YKd%recs');
define('NONCE_SALT',       '#}YL`d~_AQ[f=`q} |+Ost5U$#:9.gn+j?7`+!r*>f|i#{gA$c_VXzG,Yl>tq2hG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// This fixes an issue where WP asks for FTP credentials 
// every time you install/update using the web interface
define('FS_METHOD', 'direct');

