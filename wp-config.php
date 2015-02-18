<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'divezone_wp5');

/** MySQL database username */
define('DB_USER', 'divezone_wp5');

/** MySQL database password */
define('DB_PASSWORD', 'H#UGPQk[Zn81()8');

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
define('AUTH_KEY',         'NnH1EKuMt4J6G9ThIAHdl3C3b9Jxv0i67STZu2BDHUO5CvvYaLuGysuXI5TGaQUl');
define('SECURE_AUTH_KEY',  'MKgoUltK8Hux1QNBEE3PjdZubwUVUsBgOuQR16npOEENpZgJD7GuMHSCpAA9GwxM');
define('LOGGED_IN_KEY',    'HAGRUkcO20OIXj5DeudA2nAbafQ134OXpybjbislQ7VV4HpQLp0fMSJS1eGXj8nu');
define('NONCE_KEY',        'X6vBSv8X8IlXu5v6MoaOlloBWHsEkksrwy8zSjKzuQ4S0mGgczgOC2DXobBhBabv');
define('AUTH_SALT',        'bkGziQn1QnsSMYWa55KkBHF4C56OAH5DdSsSiLdm0WzxfF3WjneJQlb555YUMlJS');
define('SECURE_AUTH_SALT', 'LyUnZ5b14XqH4nJQmsFduCAwA00H8iPkqCmipxYqwLrq3fFXEzmq145wmvxzZr9S');
define('LOGGED_IN_SALT',   'NJZKLpohxIxU3jAFG3zoPgCHDtEm08uorkAT84qL6vBZwIkJhr2zh8MKd8NyY7hM');
define('NONCE_SALT',       'j8YrRHBB3veMMsAavxYKCKWTnL2n7ErjeOJbNUun3F5Pb9thl4smBOkfwQmpE9Oc');

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
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
