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
define('DB_NAME', 'db545081514');

/** MySQL database username */
define('DB_USER', 'dbo545081514');

/** MySQL database password */
define('DB_PASSWORD', 'yi6WTfEf');

/** MySQL hostname */
define('DB_HOST', 'db2023.perfora.net:3306');

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
define('AUTH_KEY',         'Z2cLUAxKg#cUM1Ug9TIdRqWVrX9Az(CNMZF7ww41xFilOIILgx*tpeh4mHMNChta');
define('SECURE_AUTH_KEY',  '^Hi&cu(6bJbInqxZ*!Jcgd!%8Dg%NPjljjDlGF3Gguzs!)oYoP!SjyiaRqNLkyY&');
define('LOGGED_IN_KEY',    'DLJ*)ZQIS#093GFXs9ke5bBZEHSP(9GQ1MV)$tRTbDTZYB!Pk1Y7VO#O6*ohmOQx');
define('NONCE_KEY',        'S$U*Gvujwg(2eWp2*o&9nM)YHPFVe7k!Dc%QFmo#K#$G)qMLQI9XK8m*H0x9Uxf5');
define('AUTH_SALT',        'O5NY4TOtjMMcUpG)DU2F&oR%s9zXnpA^11Vcw%Dns!Rp2x0y*U##I)1ZC!2GWHs2');
define('SECURE_AUTH_SALT', 'bDFu8rOwew8YaMSPbl(J5Br1w5!aVketYOqF%2#tkh0qQG!D$7X23436414zdrwt');
define('LOGGED_IN_SALT',   '4O(Vqry5D8kYbAfBnf@306Ub)k*d*tloCPFMEjSfpZ!4mJlsLB45Vi$1Vf%qbOUv');
define('NONCE_SALT',       '#@tHAhPmB(*dH$8kCTo7rD6O87c^AbEguClkC)Y%w0LSv#1MA9ErrR9ZjiYBd@T)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'n80dxendud';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Disable the Plugin and Theme Editor.
 *
 * Occasionally you may wish to disable the plugin or theme editor to prevent
 * overzealous users from being able to edit sensitive files and potentially crash the site.
 * Disabling these also provides an additional layer of security if a hacker
 * gains access to a well-privileged user account.
 */
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
