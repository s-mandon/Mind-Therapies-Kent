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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C1OkEtZPU5/bEeDkqll4B1sOf/Vf0PJKT5VBHgbuyym+wlW2LO2zgbD2adIUC6eXEaemoUC72DGz2WKaY+hbdg==');
define('SECURE_AUTH_KEY',  '6L7HR+4a3jpjjUmiw0AZWth6/al1KF4IXE/X617jILxMWb8HjO6eaEYusMOxyqMtuUtWgnYSeNqa7x3r76/Y6A==');
define('LOGGED_IN_KEY',    'NZLXD9Dpcyp/XaG32e1yUuyxPFEzFQT+NEu/hUpA1Mw8O0/6o/YaeQKCyXMQHwJ3cjJQWzWaflvCT6h5HNzwvw==');
define('NONCE_KEY',        'mA0gqIMPepAJEH+ISYw8rY3324+8DiONUB0EI3v6BdcjS5qUjrJaiowhnyPiEMQfhPXQkUznr2h2qhqlihY1qA==');
define('AUTH_SALT',        '8Hfy+WkgUgLez5/o9WCWd2lhCPNS0HLsfx/kTwtiL0nDPTQqeYZCwHR/A+zKxk/LfiezVtgD+8LxnbN4ZC8c9g==');
define('SECURE_AUTH_SALT', 'WI4gYKIJ7EUr0Dyd7/FzOufQ84xf44dJzWI2tGH1IrT5mcZQXpgLJ/IxN+WWeC3ez0YnKDkSn952OahHji1+zg==');
define('LOGGED_IN_SALT',   'h5IfdFAUsV5PvZOWXvBEWDR5f0Ax/Ay2P13nM2N9V3W+KmNcJRP1M+YgaEgf5GqDfWCHdVQskUMJWqXUDMQKtw==');
define('NONCE_SALT',       'v2H6g7oSvZY1y4Z9S9/Ol0MKmBRpeYmRWt8g0UxvY1zJBuIav/9bGXf63J1+VOLjpyCwGNOCmRzShpUCxmXdhg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
