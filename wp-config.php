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
define( 'DB_NAME', 'wp3' );

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
define( 'AUTH_KEY',         '^,&M*kt_@7yOBO~G-e8Mz9ocu:PcK>fa7c/@jEUMrT}DQp+H(^3{#QF^D8iFI!/N' );
define( 'SECURE_AUTH_KEY',  'z3HfP8Y]>=ksD&~{OGtt^;CdFxy@>eRa!*nu.sYi38KwAy-kN]9K)5 w^b]x{[bZ' );
define( 'LOGGED_IN_KEY',    'Q+z|Zw{m8<u4nW>ZYWz34huM;Dv;w4dgiW|K8SzbN1LAxvRbf;xb>zy&;{>eX$ka' );
define( 'NONCE_KEY',        'yY(N5loD;nCYZKv3siz=9bzsh79iv5?26qp{u;hjRF8ZKN s8YG[V,/teAi7fOmK' );
define( 'AUTH_SALT',        'pQG,JI7cVl59KPElmROsafd7>>?g{`X-,3#3$iM9_e@OXd^!)@6!D9d[}[#VOOs}' );
define( 'SECURE_AUTH_SALT', '#B-,0r=Ki7e:/e5x!X%tO2`!|Pd<6LZ}< cX@l0{A96;J{K59v:zH$X{V`vB)/Ye' );
define( 'LOGGED_IN_SALT',   'b r$UI+2SIIbaTok%]mk[3Q 3^9=j)o{6iQ^d^?htHhQ~g_>0^fX*Z4Ocp*o#/j-' );
define( 'NONCE_SALT',       'Hrok%A&J}w)jiL[cyVF~WLJwpXJ$5(x@Xb%Uv/DT^|*0cI0`c1{d%/`8Rb[^b0|A' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
