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
define( 'AUTH_KEY',         'iuJy[q+uub~-O)B@s=GdI/;v)_H[~Z2zZdSf .`5;;H:hCC0AA[~}8r~St=WZa&@' );
define( 'SECURE_AUTH_KEY',  'Pc+->_ER_VL|t3;0@}p~7m#R|-/Hi@#gVb)k[Lo9|;qX3TU J3G3DM`qaa:)%b1D' );
define( 'LOGGED_IN_KEY',    'o|Vxb+umK)NUh#XGu(GUUUis+f@6^iA*TC9gJTkl[HJdusX50g*r,}_r=qJ_+#S$' );
define( 'NONCE_KEY',        '@8=h<j)PI^h?2,apeE{DZbE^+Vd+LFn%g.JUM[PmkSw*O2d~!S<$l@oc<@shML5`' );
define( 'AUTH_SALT',        'x(*hHkIrv_alDm)q<>fs8Tq{th_;1apT+>`a5X8 `|`k)~._65~I{s45|sRi%NYG' );
define( 'SECURE_AUTH_SALT', 'fFRl/*ov>wWWTeCdMQ~3`Rm8Lexn51s5!xe+ge%NxtX4qChiO@^=0W6K8`X<q?z/' );
define( 'LOGGED_IN_SALT',   '{ gRE8qWF93}c2hAfoK5MH:-4R/N9NSaSgQYw|p}}I!Gi[=)#7g!=HhUJX(=teRd' );
define( 'NONCE_SALT',       'c_(m6&u)erNF owp-`&{7pS?M%`nI`yY|^0QL4vJdR!mkz]}*9*?gDU8l<$F c0;' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
