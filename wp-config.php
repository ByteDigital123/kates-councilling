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
define( 'DB_NAME', 'kumodnb' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', '8qP4tOFkxHvuBKkvbhT8' );

/** MySQL hostname */
define( 'DB_HOST', '64.227.41.194' );

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
define( 'AUTH_KEY',         '&:y6XSi`5<D}Q=p1QE{ Awr&sS[^k1)os0cB)Xn7CjmKgwe.W|Y9WxV1|G3:G)aB' );
define( 'SECURE_AUTH_KEY',  '@u2OV<JP9r:Rgf;!=$o9IOZ(g4+-khd|ZW,IC 5(P,?{<^39eC3=Y$T?t@z021_u' );
define( 'LOGGED_IN_KEY',    'pUz.1U&JI{%YMoBLEwg*NMPvyes]=r?zkd!:)qDkO Y=)!MU`x=B]P)[M]/8FLQN' );
define( 'NONCE_KEY',        '5Y]4##_eFl8]xluJ(bAVst[L*,BylI(op$m.|D%6g]j4P3&l2b+&iB*^MLBOF[9,' );
define( 'AUTH_SALT',        'pcJ-V{x;yh^!LP(4@el.O!u1##lKfcm3qhX<&&jWQ1PgLA..f(2q%Pli@c1Z 7Wl' );
define( 'SECURE_AUTH_SALT', 'wGm]nPL-I6Y$sll-&MH10;8s1xO*@}>`Vm3zk;JA;e;C?zVvK,_@CLk`EUKgOf,*' );
define( 'LOGGED_IN_SALT',   '`$mOHA0Y/Zq@ HZl#Z/Ja#w4zLbJ;@+H+yD$ecg6xG;Il))$~W%Lc/NJ3Jq3[zr:' );
define( 'NONCE_SALT',       '?wq[k0~&9pqsm&yv~v$,Tpf&bSO.VBT#|i@GkZ0o-#y: ?W2sk53%N~GRB^T{J5x' );

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
