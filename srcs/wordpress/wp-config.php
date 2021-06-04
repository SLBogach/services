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
define( 'DB_USER', 'SLBogach' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql:3306' );
/**define( 'WP_HOME', 'http://192.168.99.101:5050/' ); # EXTERNAL IP
define( 'WP_SITEURL', 'http://192.168.99.101:5050/' ); # EXTERNAL IP
*/
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'grL)xWHZ!kxoqF6rX|pKJ0yoB1F+b08qTV>>U#(;~hu-SEndy4KK _sj]Ug!r^X!');
define('SECURE_AUTH_KEY',  'Z2kSedNs|Y((4fe.xu4f}}WA3g3di*%|qLVOet6y3<JIe9tU6vjMqnNxYQUn~fL_');
define('LOGGED_IN_KEY',    'QK-erA#zB[PV0Y|wH`Ddl/m0LG%:J&<(a/-B#YkbS ]qJ34:)Q7y[k:5m|^6*~h.');
define('NONCE_KEY',        '{5:sW+y`iu:1j+(+;BmBt7mGT%x~lSgKkIZ02#UyZYLAz|L>QG0=1A_,%z9#DLcp');
define('AUTH_SALT',        'TQ-4_* ^4?Ho4/-PVP]kXFV?P.34i:oxNT$7!OCujbnN=B6IKq?FPJ] TEv)ge98');
define('SECURE_AUTH_SALT', '|:V1*v+NW9jc{TJt{c!i$j(`#fK/(Dj$n@q+GU-tl`v^v!HYZ|j0QIl~3q[P3+L:');
define('LOGGED_IN_SALT',   's4|*:HEv8VYYf~L.EQB7c $0ft(?7tBo:zA_#TU^HN1@OA)E>lkOXAs6^a3,]JfU');
define('NONCE_SALT',       '!/6A~z FX9|2gwyFx)^4BjiF5srK}R=jcPE.~!fDh`CA0}-C/A.CAbrrc98A@ByN');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';