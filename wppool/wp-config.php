<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wppool' );

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
define( 'AUTH_KEY',         'V0zilHzsqohB8m22CaxLmWNhwDyV7nOR8mgyD73YGRnhej2AE0CYC1jW7T761Y7m' );
define( 'SECURE_AUTH_KEY',  'Bko2vOay7bnqxYiXbMGHS6ldJlRJa5C8Sd9Yc9YP9xEGEKBhmT1XEDW5w0e8fP35' );
define( 'LOGGED_IN_KEY',    'jLCAjRD87DiN6OkyMNF0QaEBLPXAatJTO3Hnw2VWu9Mn0t3f1ihdp3edk1aEdh1j' );
define( 'NONCE_KEY',        'pnFYXv90BYczth5vsL8nkzmQ0pkvDghbzPL3brUXcKP31g81UCmYPbVYvoPNhV4w' );
define( 'AUTH_SALT',        'NwtPM6aB6RcYjVLSxHz0QUMGvwCz8EIHoNhhxWVSyLK1llNMbx0utXkzRWyqn00t' );
define( 'SECURE_AUTH_SALT', 'aRXBc2mRw7NNnleBbftxcmBFHv949PuuMgB2vvLETr0qgEzqvBiwdm4PY3GgNDRO' );
define( 'LOGGED_IN_SALT',   'AP7wqgex4DaNZdaAIBtGRzBmeLcG4qBK1IkMgXYGeOAY2v8kInJvLu9Mz12Gzzlo' );
define( 'NONCE_SALT',       'ugouCcLmo2rJ0lBV14NmITqTg4Y2M4IRrr7iWu6wCyQ63ON2ZSUB14z4RsGXFmDp' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
