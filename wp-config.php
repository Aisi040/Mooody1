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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Moodystore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'W4wJa3i40kvIf0Qp1pZKdTG7l8u4Q89bGq73t2sH4Uki1yxfPu9dMMX4d3r6kkhG' );
define( 'SECURE_AUTH_KEY',  'j2MgR6qwHzOIgAJ3U11DDf2fzcW9nLZBJvYjoLO6DSJxVirpa7xQ3ZMjSE2MDe6k' );
define( 'LOGGED_IN_KEY',    'KcEb89d859tYtsyT8pQ73inwsVVSkiwFO6M9LsKziZQd239DoAZDjx2CTXGlhH3k' );
define( 'NONCE_KEY',        'nODh1m6g4CVKEEjwCghWDDpw17CAvyHSa4hxQIEUSOq2hS4Le1A6RElIx2em6nV1' );
define( 'AUTH_SALT',        '56jwHTEP0q0Ingxo2UPxxIDeTySrzedxkZbYIQWuum3ZngI8X7ttfu4wEX1XgvBW' );
define( 'SECURE_AUTH_SALT', '3O5nZeNhJ9V32RSTtemsKF0Ehe0wIJKIeiV40rXa78k6exgy7Qc9PAXwZNnFC9Kw' );
define( 'LOGGED_IN_SALT',   'gcyOsLHpJ6P9Qc5nxNjk8BnVZ1GdvQBIquigKyxOKJNLpVPXLo8BIAmmh5GHsyZ9' );
define( 'NONCE_SALT',       'Fx5FjaEO4Z6OhRFBjOAqoM0kIATp1at47BTzIigapuoR6TD533VU5LUj4XItqixv' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
