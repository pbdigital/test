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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'p_S?a]9h>AhVfXvO7?rj05rt5jy}@.].jf8 foWxLTESE/g:iP[t ,~FK-vsm|b4' );
define( 'SECURE_AUTH_KEY',   '&aDhHJG?nt:Md!1KK9~HIqA%<kv%w2nEs;=c}IXZ(4rwcI7B#jkaz6b-&A%M9mD7' );
define( 'LOGGED_IN_KEY',     'BQKN1)Pa&u3{Y#(I-)JbEWh]Q{r[gMy:6-+~IaFBLi.IDVIwF}m7CGue9o`G%4!7' );
define( 'NONCE_KEY',         'x~Tb*?dixfq-=T#;vM@ctU3uWStcOuriUfV{[uw-W<WD|SzS^ _XW-Z:}/EP. [S' );
define( 'AUTH_SALT',         '#i=zuHbYt4 ZL2*MQjc^d~w5c8-)M@`F 4tMJK/R#tQ7>IP,LSy_U #1D@_1JHlx' );
define( 'SECURE_AUTH_SALT',  '|?6CE10M5z:nAn5:ZbDEZ7H-:fm!XV ,T?wviv7K6XQz`J@/6TxeYHk&@J=3yn~p' );
define( 'LOGGED_IN_SALT',    '!)(lZUU,=v O6QQ<GdL><E>z Xg:29C*ScJ+r?j@P(j*A-@xqOOqTiKX_J^GD/3e' );
define( 'NONCE_SALT',        '9N8Q/tYmPL6.qit/bCL2WKM$Af[AfFK<,4Ot3,P.e]%f{z.=gUd,5qT $@(nW&2H' );
define( 'WP_CACHE_KEY_SALT', '3=IXl^ zwv0.>Y`6!+/%y~;ITs~(S`$&&D2 }AFDeEftxEhavoP29#ICR/s(KY~|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
