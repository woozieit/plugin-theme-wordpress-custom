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
define( 'DB_NAME', 'plugin-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'LWRzh4IlyIyV7KjQsI9UWaxVYQaIJjysTT9ZsArziYlZNTBtscisQnF6NBDrVgWn' );
define( 'SECURE_AUTH_KEY',  'o1VppABKPcqDDVAvxySVQxKxbESTo7ns2j8STMa3OmfwIgtLiq9HeTXRAPlaLOtW' );
define( 'LOGGED_IN_KEY',    'VzX3laYwWI8yQsbih0XPkhbAT3fkGgciViue9ajakGAlolIGk62vSjbyCLdwxbQD' );
define( 'NONCE_KEY',        'D846GDoynbb4GiaPHcmXFhaLBgjeIE2tib5FKbC1Q04Bz2ekYROaZUxn9iNDrTx6' );
define( 'AUTH_SALT',        'jQN5BsYoKYQXLUUKGQcISpx69lAzhPbVfAtAYgJJnfZhkWQRGMWmc0dQpoKWETQU' );
define( 'SECURE_AUTH_SALT', 'jRXLwKZjFlqOxI1TbyzaxgOYmMFGn32DlQTF0JMEVW0FgufAMcyiw1MR9OU0I712' );
define( 'LOGGED_IN_SALT',   'nxNAekGFH2ORQXyiz54mvSgzTvjYnFbNg5JM86dPtklc2znxJjtbFAIzm7iXaLWn' );
define( 'NONCE_SALT',       'Kv58WnO8fg8SRorVsE5gWdBJ8AK3Ui3dj0B43Pzc3iKrWjhH5VSOWOxQ2ITEuFK2' );

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
