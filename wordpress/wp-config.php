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
define( 'DB_NAME', 'a8c-test' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'n2~B=m3Q/ec *k_BmaY0^&?!yHD`4X%xq?o7&`2V^0hH9,:6trdk8wBg_D||37kg' );
define( 'SECURE_AUTH_KEY',   '1rPD~-UztN^Ivp=VJ-A}jCzHuW[8&3]1PKi(DCMU3>`fQv4PqR_5e;P7z`Eb`~J6' );
define( 'LOGGED_IN_KEY',     '<u:m*u|4{r@xFvPKO:-&eV_plyGJ,1^U(OFg`dcPI@Ssno9ng(bbKKgII&<WT{r~' );
define( 'NONCE_KEY',         'iV-TJDHY*Em8<H`b;{O1&8Z]aApE$0cD[^8zTt]9s@Y/jYHVz z9.#Yp`6PlY6$_' );
define( 'AUTH_SALT',         '#qa!s]pj y;Y5sL9ww8= /$,2<K&p/AR#ZujKPbz;rBZTon=arNdP3c</Hr0k*jb' );
define( 'SECURE_AUTH_SALT',  'NCQPZI60HRJ|s8r6>YSnxAjDAOBWsjAJLP/;vvFuJ9=S/J~2_^G|6=jV}%hntO#*' );
define( 'LOGGED_IN_SALT',    '5pkzgXrA_9LOQ( eCTKn4p]lKBcg]jIYWh,alD_ehT{vy=kwqV/Lg7qiCE!B^da:' );
define( 'NONCE_SALT',        'Sbk?N}artz:jyYu#o&K:.CO.z//VsFoPHrozWOImNz%+0z1!Et8cH+hR*X1 )aWO' );
define( 'WP_CACHE_KEY_SALT', 'sNumCc=kemOU!(M@n`7]Ns~K4p]f]X?by6[j*gzH}Z)iZ;3sk+c-a0GEj},[@K#8' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
