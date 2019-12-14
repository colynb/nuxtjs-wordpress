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
define('AUTH_KEY',         'GH2uJoIrR/kzgblvJ+X4Fjdw2UJHW/Kw8dBcDlECeDJUBz+Z9tf50NSsO1B4gKos1RszzYl+9Ba0zcR++2XPew==');
define('SECURE_AUTH_KEY',  '5Nz/ox8SoXUifFt1xqsGMGXXtVqOleDUJXvw6Ea6GQJW4q4RaJfIARM/tUkO89OLKz4PJG0me36ejr56UpMREw==');
define('LOGGED_IN_KEY',    'uvpxq8k+f6e5VXYue4ObHL1nam752eDbPF4OJerSCDGZjPM0F/odoHGus1Pp4vGApApy6wfckXzdRbdTo9kQUg==');
define('NONCE_KEY',        'wq3JXRxgd2E+3mX7bz9wiTgF0BjxMn7kOyxXlMbGUBTQFRwZF1NlKFIv4n1rBOYdqTiDNPjPl0AMu7LQ58wHqQ==');
define('AUTH_SALT',        'uZvxXR2GyTV71hwxRcwOG+s1Ab2S8q1M/94K7MQ9t3X/I1G2bQlrNZ410A/ZumiDmX0aJ6frojTon2sJMHzqqA==');
define('SECURE_AUTH_SALT', 'UOJgqR8l+LzOsw6JfMbrjzgLuvrwV4/i/EJYqW8xepKpr94ag0nawAmNnOefJKfm+OuoO9NdJm9/j/HBeo3pSQ==');
define('LOGGED_IN_SALT',   'mKs2dZmgZZTw1e5LyHyeYJEwIk+xiy7+Fzl38A2WCu+xu9aON5G5120rvocOQKxxyoBi34PBfUj9PD0EBkWapA==');
define('NONCE_SALT',       'BgI5s727O2IdHyY3h0SVhG41Sp/V7bimLlhPW5CY2G7Aw6M7bSdBHzKxQ/B8T2Ar8jO++/9kXzOtwVJXCgu7pA==');

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
