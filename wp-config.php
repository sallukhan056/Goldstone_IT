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
define( 'DB_NAME', 'goldstone' );

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
define( 'AUTH_KEY',         '26$k--n~f*-qY9uKJ)a%BT5$b jR{Qq$S%!jY#v!(#zcRyq=@`5*[jq_w%dOx+!q' );
define( 'SECURE_AUTH_KEY',  'jIYI;$4`670h797d(1;qd4ExJp!5-%5q`K9N)eZ2n~[J#3ZRq6%,exjISA0~AR~j' );
define( 'LOGGED_IN_KEY',    '%:EV! e6{2 4;DTm:,zw1-j)9lL!l.Q!J9z8VTK+YmQWZM`~^]@gM}65=IpLkoQ.' );
define( 'NONCE_KEY',        'UPFzpd2P%{)Q&>`9GdG 0z/oF>K{4~S1[4iKZqn}aHUp:HQ&y<{-/2.65POmR$eF' );
define( 'AUTH_SALT',        '4yA#vnSX:,&/e+6y2~8Ht0g7a_)ZYdm;e)*Zr<=WhXEdAz-?0Go,>`gmWnLron%l' );
define( 'SECURE_AUTH_SALT', 'iZ@M/0n]i03CbC4)+Id19ZQii8[&diLTB!K<ZL>AzTkiqd|ksClD!%s4t^L=e^I8' );
define( 'LOGGED_IN_SALT',   'A&M~*-V&WMZfdEIp]FxU0L&1c]55ehh&Em:,;WlU~]?)=s?n`eF*{hiAQHwrO6Rk' );
define( 'NONCE_SALT',       '|TEzD6.!@_6Ms:+UK_oBVcv^7@GK@n%q]&,~b|Qt91@l>ES8Dl4a:iX3peWhmc3[' );

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
