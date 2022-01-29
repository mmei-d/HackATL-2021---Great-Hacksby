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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i6835678_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6835678_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H.P4VTUtLwCS7MAyCUl04' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7iID6U4LU7P9xoTynWXKRxNxMHY2u2MMiFHqGWs914UEakoTCGckOaLV2BtuqlCl');
define('SECURE_AUTH_KEY',  'JEZ58DSpKvNV0MjHgSi3pxKgRz440g1DURMADZTgHw1YWEPBzTFwX9qvqaoJxl5D');
define('LOGGED_IN_KEY',    '7V5RRqIY3FrlttlvhIPxCbgm0s7oyxrM0jdFfjDyRTzfaqe2vLS94b2QPmLwrQJW');
define('NONCE_KEY',        'vsb2beQLRVwpVliy8MTSsI9ltbYj3EyHTLRa23HFESsLF6vjSX9qx5TEKAkD28ob');
define('AUTH_SALT',        'joHb2llLofaZz9yLKp0K1MGVjLKRDT7Rqqeg9TE97oKnJEdCz7oSOUDOuGlhZwEo');
define('SECURE_AUTH_SALT', 'r23eopuMXDP3IsQQRIC42cgrqNZnDBnsSLENFepbpCSWDeIxlN3t5QCQku12sEFo');
define('LOGGED_IN_SALT',   '1wd4TLR9Xjfx56RkOEXFtR5C6lb5pPPwCvi4dQbmndcr562OgIeMLobQUzmEZCgT');
define('NONCE_SALT',       'hsGSnzkfgqiNvq1hDl5oSjtOW6XOo3ntEtWQNpAsgm8YGVchJ23Jhru9CtktzItp');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
