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
define( 'DB_NAME', 'id18859686_wp_1a7bc2d606491ce4f91b69e160e12122' );

/** MySQL database username */
define( 'DB_USER', 'id18859686_wp_85dbbe5bd682c0ae26139bce102c8e30' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f7fcb565aa30a274759c3b99cec93876730e275a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '&eFykOKu[p_U=aDE^m-g0vgz;Yp<a)9?je3,o5mwZWJvDJ{pdP}f=2{p0!V5_G3#' );
define( 'SECURE_AUTH_KEY',   'O  ZVYXq-8vf@J[RAS~;;E8xBv6oK63p1H6a?k!ZTr13L,}^H%eEwZ]&@b-Na }k' );
define( 'LOGGED_IN_KEY',     'wvCwY_`W&XljB6Z}S-prQSFdVM{Z>KIC/Pw<[_PP$Lpb{-0]M!sIKozT&OL(L|Rb' );
define( 'NONCE_KEY',         ']PyK3_%|!ATllC~$/+r([if7E;#v{`m/hVb>L 0z|ck99j-3ob(z-l@LiMI7@bt:' );
define( 'AUTH_SALT',         '/xE{nOLLh!TDJKC>f=N-X8?@`eoQfv>7Gp1ZfWq?/pE!PAx:tvp)H44Q2e !*BFG' );
define( 'SECURE_AUTH_SALT',  'Aq06gEw{Noo Ivvr%K3<;D<P4d}=ji8b0O<]TE7;+I+$!9@*<p)k[o5uot_dziS7' );
define( 'LOGGED_IN_SALT',    '7[wj7jk*]t`EE;rGL.`<Ae <CM5KnxVUHo<1D)^Nj:&B1FJP=k#d46Rr,Xe`509|' );
define( 'NONCE_SALT',        'jPQ1B[C7N&+kdg-)X~$Q(uIjV71AX;/Ss0!^mn%e+_|Baj*&<:Hf2V_qvAW|S=-0' );
define( 'WP_CACHE_KEY_SALT', 'G!:Lv+6WM4$be=SfPP2|]7,dIQV}HBiIO0_m:nGvd|E8smHX[45VYmnA>Tgz<;yS' );

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
