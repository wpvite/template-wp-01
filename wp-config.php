<?php
// Load Composer’s autoloader
require_once (__DIR__.'/content/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// App Environment
define( 'APP_ENV', $_ENV['APP_ENV'] );

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', APP_ENV == 'production' ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', APP_ENV == 'production' ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Enforce SSL
// END iThemes Security - Do not modify or remove this line

define( 'WP_HOME', $_ENV['SITE_URL'] );
define( 'WP_SITEURL', WP_HOME .'/wp' );

// Move the location of the content dir
define('WP_CONTENT_DIR', dirname(__FILE__).'/content');
define('WP_CONTENT_URL', WP_HOME .'/content');

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'c-QHq6k{*f5bB~Ro_QC9i08ctL*t~fFikhA8W%LJipcC*QN=Pi0t%8uXDBUAJVIe' );
define( 'SECURE_AUTH_KEY',  'o3MxJ|<xO^<HNFiU{Vw~e]#w%54D$.Fb~Q4k^b,v^RoemhMVQL^CW0<X3lb/_UO?' );
define( 'LOGGED_IN_KEY',    'kDvSWt})<{grIxHZX6E[r`P4KI_Aj*P[u2ElQW0AzFu(q`,5)l VQ/OaWi LU#%w' );
define( 'NONCE_KEY',        '}pI<Iou,<yrLjB5)!Di.YfwxN_!p/0tb/%(nDkr4QbnzQ1hMhL.0X((Z3V}Q!<=Y' );
define( 'AUTH_SALT',        ')D, ILLTo~i@Ptq}Kpc<j@s`S?l%<8UGtR+8Y#sp:3a]6I-|I6a~P-K]eRY0W5h.' );
define( 'SECURE_AUTH_SALT', '=Y~L[*<;m+B#!8wxWh`@ 7`h{]_^LEFLt:7cad(b,mUSua1uFtqR2Ffj`k6df!|g' );
define( 'LOGGED_IN_SALT',   'm]Tas[~h3drA*w2<;E2Z;CLFqraimG$XdH/ZCZRZ6z#lO+YlksRE!dAdaO8K*n7w' );
define( 'NONCE_SALT',       'KKN.G:As`Ea>M,+}T8Zuv%ANBP2?K`~[SSi5b+I[MgY8s%.+V_2qU6pWvQ>R,1uQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = $_ENV['TABLE_PREFIX'];

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
// define( 'WP_DEBUG', $_ENV['WP_DEBUG'] );
define( 'WP_DEBUG', (bool)$_ENV['WP_DEBUG'] );

/* Add any custom values between this line and the "stop editing" line. */

/** -------------------------------------------------------------
 * WP Offload Media Lite
 * S3 configuration
 */
define( 'AS3CF_SETTINGS', serialize( array(
	'provider' => 'aws',
	'access-key-id' => $_ENV['S3_ACCESS_KEY_ID'],
	'secret-access-key' => $_ENV['S3_SECRET_ACCESS_KEY'],
	'bucket' => $_ENV['S3_BUCKET'],
) ) );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';