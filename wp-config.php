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
define( 'DB_NAME', 'niteware_change' );

/** MySQL database username */
define( 'DB_USER', 'niteware_web' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lJ[9j1-8CImt3P' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.r+<2anc5RFv]{Z]Q)q<mwu4#cSH/Qwe-.9]9kdOZC~&I8F)) ,> OIF+21K/Qf5' );
define( 'SECURE_AUTH_KEY',  'O28`B>JHoB6g`!O`TvNdlK)d6]w>XyC)>COuz^=5>E(LAXPM.~1x0/$*`3F-<^Ga' );
define( 'LOGGED_IN_KEY',    'F4(p6V[>*0vw>R<c?g~^%}uE42*5b`Z:Ghn%&ie1eblCDEJ;* dTC<ByRj/v+Hqg' );
define( 'NONCE_KEY',        'E0[zDaL&r<[:!sysp,[-<59CmRHA1X9P)%3:hA^ccj<KOI-Ke0k2Ba(iY+^]=V1o' );
define( 'AUTH_SALT',        'Oo_k0tv@1?f:eu~sMMR^R>kl/zW;w)8gLCWMB?f1IXQCkQ/XmYWi9ZHj1U5$C+(&' );
define( 'SECURE_AUTH_SALT', 'Q{y>jtWAfyqp.bz/0I)wBu6NqQz:KN,Ce^f;pqB48vBq6CJhyKe7Ak!0nj3uh{{w' );
define( 'LOGGED_IN_SALT',   ')J3~j^AO&*k!bT:8^}]3mgXOT3YD?mhWY#*gd7ZVJh7N9%oX5hPKtXG+ov|  9~J' );
define( 'NONCE_SALT',       '}T6hB@Yj%@+~l)T8iQW:Heb5&*~nvPn^LOh,>n-^{IeiyD*g=m2U/oa3yZ</Qy2|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('ALLOW_UNFILTERED_UPLOADS', true);

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