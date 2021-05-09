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
define( 'DB_NAME', 'alidesigner' );

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
define( 'AUTH_KEY',         'Z8J?k,)jWT1-%6Ou?Nr^`u+n=fH|$M1$dcNTm#{ fMZ( 2(9.MAnSvlppvlh~6$3' );
define( 'SECURE_AUTH_KEY',  'AcYBsYl[c}4vGuuHo4D|%mZ0a(dp!1U5k6?&rDHkd]%~*R7: tKc}m3l-8x(8&AP' );
define( 'LOGGED_IN_KEY',    'L$hV[Ed#+3=o$K$fwmXMO>/r?^.V-e)@,tY At96:y=5*uRC_f0=n3GgUAbBU2p+' );
define( 'NONCE_KEY',        'Q[gLO6$.c1W63#jK=h1L{`G:OCd2u~R!n_JHkO.:6]j[C-c>0;gIowMa]o-P&HDy' );
define( 'AUTH_SALT',        'aE!wEc(HcZs}wKN{Hg+jG-E4a[m;6?rus@i^KcFaP$f[A&~hI1#;zt}F+SXT~<Wm' );
define( 'SECURE_AUTH_SALT', '& lR4>J6V5t(?!0hSFOo9K#{>]zDG|[AiT(xCeEf9J]*44J[fFszT& [Q9`>?OEL' );
define( 'LOGGED_IN_SALT',   'SG]*mNR}~@9e`Zmu||BAB.&NOFZOtJ*~eo@!*HB@VN[OR;[41{}M[3EnoLH3FN~<' );
define( 'NONCE_SALT',       'c.{&o`J]XA&6w/-OGv^[3Rz[|~pYptrQ<U*4T)o#<$nJ;PA(45Tq]wjSE0<]iq]&' );

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

define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
