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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         '1TIJY30wO5LcZAIIKNUBl9nfvsr5VPX8FTeZl1mSsAanf2MOFVIcWDGBRrq4zuCyGIl9i/8DNjvFKo/RK/D5NQ==');
define('SECURE_AUTH_KEY',  'aNM2JUqWKp2XX2riN9rxhi0+tGxlQaro7qO/obIJeRLoWdLRF5M4YgbWGG/0CjDzUyg2POnJa3cJ4LR5jJgvGA==');
define('LOGGED_IN_KEY',    'B3Y7VkmfntdxO4+wIEnp2e4VExipEwMHNPYRUCAC71Qk9YDCfnkT3t1n/Ak9TJ3kCznvqqhqBEeBGCi4RjLpgA==');
define('NONCE_KEY',        'xVIz7KgirzJWSVnwRGbAV5E/sPvi4ATsZK5/uhUSmwhRGhSrAZ3rv5HQtKoJBs88vdzaKepOMlwJVqfBluor7g==');
define('AUTH_SALT',        '+s9SmPcT4RVJJAJ4MS7x+eUu2uds/YJovbxVjt46mfo3gH90jIipqwZANdVDmo684CWo5r1UEDUxgSthNgu+gQ==');
define('SECURE_AUTH_SALT', 'QwITedp6+POiAIVQt38cG2F9c6d58BMS7gVO96Q+uov62Aq2pyoXPyLuESHPeMFF7DKUtUEH/TKtnK8oDbHjsA==');
define('LOGGED_IN_SALT',   '10IfTCxP6NZ6J78xznIasMDNdgcz+oDIGWeaDH7IORQSso31k+CYYqz9um0jWVSMqgxKGPfv3AWrRf8UVLxodg==');
define('NONCE_SALT',       'wzIyX3mdXkJL08MI20xsFI/3VY0GnvQ/shu0DjsE1SJXI4DFQX1Zx48zUCsRGCpCyeftpSO8EdNg8vZIkV3sVw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
