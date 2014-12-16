<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'therefi2_wrd1');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZUCLI3z0bzV3MpshCkA3AkBSQAahYrQ7rFZ0UBZz6uXmDq3QKkBbilONP65sAtUY');
define('SECURE_AUTH_KEY',  'zOteTp7McU5IhOc5t8hEvJr55ICPcL5fm4onkbFgxf4PiW8Y3JpsRTlxdfSUB43z');
define('LOGGED_IN_KEY',    'naykTNn4xez309uQqGd7ctp1yqFCISwc7mCfUQTKoHHnoQZRw0UsYriyidDvTWE1');
define('NONCE_KEY',        'N6j0ZCMMzgfoxitKvlwWs323amJqUsqyvvYgWdjKD0shO0lNEupjfcQ0pBTD7you');
define('AUTH_SALT',        'Mmwob9wPOOuX2kRtgrwUkA6LA58QvKa81LgeUD7XK7U1UPQjvmlLbfReGumPV6eC');
define('SECURE_AUTH_SALT', 'PKnselaqJjenuhvFCyLojtdCDCFwSEFnD4IxxVghnbzCFqycIaOAXyB6Fl6JBv5t');
define('LOGGED_IN_SALT',   'KMsi8NSTLvlxo23tarHsU8b84GQdw6b5NcphXrt0udkR6qavjkH3EkurjBs5qL0E');
define('NONCE_SALT',       'aemfFlbMtbegvlJXPAXfzuXzVGEfR4RRkLbrpOOew61baEUPA5ICtqTKCPPAHDUs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
