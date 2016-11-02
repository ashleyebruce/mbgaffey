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
define('DB_NAME', 'madi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'cR4UAhiPmo7KjaVgiO3VNuRiYbGGLTU1ugrBK2F3BOFSSqvqYPvUEdsnrnzS8Ze5');
define('SECURE_AUTH_KEY',  'vccquZVnSBoKXZ04H3nUBelh9kCEearbGzflvUteFfl6WD24OhGCQMpHSe2GqMz6');
define('LOGGED_IN_KEY',    'UPMG2XxjxdiWPsFpl72jOetLNX2I4HMFLzHsJTqmkcbDBVR2QDFbAQGYq4Vt8GPU');
define('NONCE_KEY',        'SKlbPdd8aFwkTz54KZsWYboVAH5H7BIuSGf38KXAt05FCSjlBWlnd2WtdftLUtq7');
define('AUTH_SALT',        'c4sLCyOnxGQocXnGRYM2wf5upqcibziJ1I6u3BGwRYH7qXVdQNzUcLIGjjbrqAzU');
define('SECURE_AUTH_SALT', 'QqXE709GzJMd0xxRRHRhivt2TQywnr2XhsTuUTRCGBIP5EziJ2LtmPluM4dm2wSC');
define('LOGGED_IN_SALT',   'xalvvrxQl3Ps2e5aEcgQCHSIn9e2SvoMDSpODHCYqOxJyrHciBpW2FGJ8FMoSTiK');
define('NONCE_SALT',       'teuY3c9Jj0tVX2aeriJUH2JGrmjBlFa1TlsuizWoBWJqnsW3xbG10OE8XXTksneE');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
