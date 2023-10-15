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


define('AUTH_KEY',         '5EbqNXCtT8mdrjd/TCuxN0l2IbGPfUtp1sMwMfcA0zoWanwh2g9Uxg7gzxzRrSODddylxK7qTpDf9T1V226lzA==');
define('SECURE_AUTH_KEY',  'XMq3D/m1CnMaMX426DT8md79PiCYCZTkUX+mLDnAxQUpch0E1n60U+F+qxiZSwVsre77i5GxxlszvzGzNugVRQ==');
define('LOGGED_IN_KEY',    'b5guUK1f40rDVdenXTJ8jSCNlzPK0R3JuSaf9z9Zjx084SaQfYkRbg1WmxBNZpXe15GRJQVw5QAsl9BCzO6rhg==');
define('NONCE_KEY',        'g2n4liK/JgLBfvTehSe2pVz6GLOHRgqHjt0dX52X2x1KYgXb3ynmUUzO48dSOexuKfleM+mNSHXf2igZG8UYSQ==');
define('AUTH_SALT',        '5Pd/iYpGFJefr0el33btIZn7UZWdLfCIXHeykGnsbLA5fAAoZ8b0ycwxZqW/eRq5NjE1O4IplID4KZAXUClMcA==');
define('SECURE_AUTH_SALT', 'csXZtTWk+vy3IPU4zoAdoMbxFLTHIoW1i/yAeO1tpP5wWyU9fMKYaBrmwkf4hmBi78tmu6NAdI677BglIe4OwA==');
define('LOGGED_IN_SALT',   'hoFENuzivvoOAShlioo96gnt/nctdzOJpmE8zff9wWNykLJrOU3Z96fR6HT5ZFWc8rPXgtU2dt+jlDBbeuR5Kw==');
define('NONCE_SALT',       'EqbZ4y3sBvE9Vq3krJOgBgxyG6FlWgKSznwA8fr+JL1B7ctXbJ5GG76n8OlxM5t8ndUymaVzsMHTZG9DdS95vQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
