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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tacosconsalsaverde123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'vcM*b`SEhOi$vRk):1ZxDNW)5G}_w52%mHHhm]i<N#v TR>f(}l/(iE[r]{R|Qn-');
define('SECURE_AUTH_KEY',  'w{H$Xy<9@Jk[Z2&T]3k[}dkBgE#(TFU~p91z1Xx.?Jcnoiww]OqM/}P$Hqr&]r0.');
define('LOGGED_IN_KEY',    'U5q/w,$:tP>WF$bT`(dGDG(t^e;ym.|LI!L#5.~W/4GVC;bFb%2|`sSNfdC}/X;O');
define('NONCE_KEY',        '6c]Z{^)/~5Q|LJxK5qNg/?F7r=qv?C[_{Vc6Q&{G,Lz}AT5pnsMEyO4wnaE40[KJ');
define('AUTH_SALT',        '3A!UR{qWNrmB!GR4~wI9u:L|DI[(IMJBt7U/O)%L2|Im^ebMWvJ+M:e6YcuQv87A');
define('SECURE_AUTH_SALT', 'R{(NHSx(x-Izr*8:skV2LXfcF?f+]PH6}hP9USKe MaeC{lz`uOxYGo%*#eKle+J');
define('LOGGED_IN_SALT',   't:5j3* W^E7dui>OJrQ/]^hJrZ9pe;Zuv,m?0G(RZ?@,(W~UHitAhnw.1L- :B7[');
define('NONCE_SALT',       ' l_3#W)H2@ILvu$36b`t?psQA({c)lXm %srx)JMy&]=abHAROt4?6U9yC}/pwAK');


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
/** Add here*/
@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '15M' );
/** To here*/

define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

