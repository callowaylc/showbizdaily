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

require '/etc/wordpress/config-default.php';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_showbizdaily');#showbiz_wp');

/** MySQL database username */
define('DB_USER', 'showbizdaily');#showbiz_mv');

/** MySQL database password */
define('DB_PASSWORD', 'fe5180zz');#siscom20');

/** MySQL hostname */
define('WP_SITEURL','http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME','http://' . $_SERVER['HTTP_HOST']);
define('RELOCATE',true);
define('DB_HOST', 'database');#localhost');

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
define('AUTH_KEY',         '-W>,st7c+-CMU+DGR4S1=#uRD?=l{*aF*UHPh<jhSvre/>NSdldRk0]6p%C/5E-E');
define('SECURE_AUTH_KEY',  'O[2Etc:{^eXA@|tWVNC8F||QeZ*>2vi{u]Oe%x^[39hQ%rZH~S&0Ve-PlLDoom>!');
define('LOGGED_IN_KEY',    '~2QZ@Vy8uGb>~3EI.s)5G);M#5U|~hbp?>$C4;C(2+B4Tn,Xns *GY-82;.xGvN-');
define('NONCE_KEY',        '.YRDdRXn:$X3?r;,[|_-LI*xh-OorqWnaG;PLv6{v&9{phOr*:M<41?3!Ta0|M#x');
define('AUTH_SALT',        'Mh^w?2v0I=@xea5M]{3hbM|.zE+`R2>k>s-+>gJzV<nFY?qzQ}W%LHk-(>QsUk0t');
define('SECURE_AUTH_SALT', '}:`HtPnzWh)>lg!BuQvg$,`D$g|D~UCAj@TzTn^![31BzG{~B;6K0R&X`ibYAE*!');
define('LOGGED_IN_SALT',   'R>oz:m1pgqKYW9b/cNfuPJmJ:+-Q2Z_jO{eLj2+|7i5v(h+c{j1s!{wHUpY*}$-8');
define('NONCE_SALT',       '`?NR13BZ; -DNb/802dh|6OE5Xr<?BjiaAlq$46BVA!I4Rxe+FOZJuym!yTd+@hi');

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
