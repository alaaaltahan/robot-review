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
define('AUTH_KEY',         'bB6EZ2IfxLue0j6uu6dbFSsnM81O7z8MvT4pR+23bx13q6t8iuMlOZ3zss778qEfnbQUfDC0L9+HzcdpWp+sTg==');
define('SECURE_AUTH_KEY',  'Wn0B7YhRKyWQ9xP2Hd+5+v0E7d/+KXyuHUfV1LKjmigZ3c77Ps328XqThZy0LhDandEMm8L+58/Cbm2uT+pxIw==');
define('LOGGED_IN_KEY',    'wXlBUfKtAU9NP/7bkz+ONFhKO0QMkDecNRjuaQtCzq31vd2nEb3FQNg7QwT94C0r5/YGqawxdaYqEKhZeP6OFw==');
define('NONCE_KEY',        '4BzIUGA+jvT485xMsNBFGk54E4rVy356B+IjmrPHazRFxGQXR/ij+LM/VCHsp33FJ8NqSvuN7YasrJ4nSD633w==');
define('AUTH_SALT',        'ODSRXHYzv0fjG+XsMo7hYGFhagexJPB6B5LqjBwqLN8PwJsBz54NiE1XXE+xUnwxhja4sEpIxQVpXyXL3dfpzQ==');
define('SECURE_AUTH_SALT', 'zABeNKk7IT/WhMCo8Y+m3Ge+0sQ40vyy43qnDJn7rWBcvooaudMdgYDHPZ9E63VjlbLd2lTxA059B54cH7l7nA==');
define('LOGGED_IN_SALT',   'uQRxs9A483ldrOqLMzNbwfk6vkpAW0dv/M+gmQaFHjacYKeuawjoMHS9ZP/KcHydgiaAFD6ZPEAKYMyoDwK/Zg==');
define('NONCE_SALT',       'K9BzaT/iTIk4lW3z3u87xAo2saB7IQnHhM6jIkPtn7GUsoxQGQi/92pVXmeT+sH0W10czIY4hdapSf570PrWBg==');


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
