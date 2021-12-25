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
define( 'DB_NAME', 'kelompoktiga_wp_db' );

/** MySQL database username */
define( 'DB_USER', 'ivander' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ivander123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'XE6q!n,w&-WSx,qoSpk+d*L;zg6/ui([*DvB&~GmIfVu*U![0C&`8Q~4f{ 4ZjS*' );
define( 'SECURE_AUTH_KEY',  '=?$So(3p!NNGveZN6tVZ(*.k#YY5O{B;<&~54-RbbK*X@iiFjnjWjtf0_m fPSwm' );
define( 'LOGGED_IN_KEY',    'bJjP/FqI+&`cFiGHWk,(G=A7n]Kn9ft$DR.0rgr}lyS:3AD%)Iex@ZA0|r&,.41$' );
define( 'NONCE_KEY',        '#X`v{~F~}&6gt`UumJc^.9u{K$)c@ v)9K*xKM+M5.j9L[]/M2+UU2F$ybAOA)~e' );
define( 'AUTH_SALT',        ':QyIsIjF<2)3L3k}wj]Z$sW3$zE(VpIa/WF{ZVv_#T,F>X&;?M^wqaK!~/z/i~ym' );
define( 'SECURE_AUTH_SALT', 'W<j.S`y_5F.YMJFeDBFO=;[wz!6Y*~ nCVSa]1HbQvKh!0xa?l~@F2UHH<osPM/%' );
define( 'LOGGED_IN_SALT',   '^ICW1[in+B^bL[>kdw.`1}*vhNKd.t_}#gqTuGyR8OQ3g,o%oCJqd/oQ!/k[3D7M' );
define( 'NONCE_SALT',       '-omSHWPdj%G>KfR$el$qJ;7ct@~;VSdJ/2^rXuA?-Pr75mnMUOgmKV<nv$$aJ3Ff' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
