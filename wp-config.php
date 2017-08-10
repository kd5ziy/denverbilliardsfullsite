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
//define('DB_NAME', 'mon1131411321692');
define('DB_NAME', 'pmmojo_bca');

/** MySQL database username */
//define('DB_USER', 'mon1131411321692');
define('DB_USER', 'pmmojo_bca');

/** MySQL database password */
//define('DB_PASSWORD', '138d08cf44cd');
define('DB_PASSWORD', '3^cJ#erPM11oGlo');

/** MySQL hostname */
//define('DB_HOST', 'mon1131411321692.db.6578821.hostedresource.com');
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
define('AUTH_KEY',         'Ah(Nq6m%Ky$q3!T#r3tf');
define('SECURE_AUTH_KEY',  'qzB)@wSpbc0jJ76V40XO');
define('LOGGED_IN_KEY',    'RVwEpQKb8$K4Y12y29!-');
define('NONCE_KEY',        '3Hp4YzC1I3PrD(-KBU#U');
define('AUTH_SALT',        '(sgMWd$wEUVOdrvY(@*2');
define('SECURE_AUTH_SALT', 'yh##YhwA pZXES!/Rdja');
define('LOGGED_IN_SALT',   'n3Xyk0mpK/v5UMkbapn=');
define('NONCE_SALT',       'Psc+VYbQ2bBtz2S#Ly#W');

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
 */
define('WP_DEBUG', false);

/**
 * Assign the URL when running on localhost
 */
//if(in_array($_SERVER['HTTP_HOST'], array('5280pool.monkeyhigh.org', 'monkeyhigh.org'))) {
    /*
    function WP_LOCATION () {
        //phpinfo();exit;
        $script_path = realpath(dirname($_SERVER['SCRIPT_FILENAME']));
        $wp_base_path = realpath(dirname(__FILE__));
        $web_subfolder = substr( $script_path, strlen($wp_base_path)); 
        $wp_path = $web_subfolder ? substr( dirname($_SERVER['SCRIPT_NAME']), 0, -strlen($web_subfolder) ) : dirname($_SERVER['SCRIPT_NAME']) ;
        $retval = 'http' . ($_SERVER['HTTPS'] ? 's' : null) . '://' . $_SERVER['HTTP_HOST'] . $wp_path ;
        return $retval;
    }
    $wpLocation = WP_LOCATION();
    define('WP_HOME',$wpLocation);
    define('WP_SITEURL',$wpLocation);
    define('WP_CONTENT_URL',$wpLocation."/wp-content");
     */
//}

define('WP_HOME', 'http://localhost/');
define('WP_SITEURL', 'http://localhost/');
define('WP_CONTENT_URL', 'http://localhost/wp-content');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
