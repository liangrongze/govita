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
define('DB_NAME', 'govita');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'F}Kf_.,3S[:M!G +1.!h:!wi*G<-E5R]+8bFT35T[~n_ JZsM(wV`S|Q9H<+KDj^');
define('SECURE_AUTH_KEY',  ' }/=Zn!Kwc(Dvt|q!%TOGfIrfHMCO0y|Z2(:2dCv4--LbYt`,cU)NKGB33R+=*57');
define('LOGGED_IN_KEY',    ',+4zZr.K-EhC]R|GMrfbrj=,3:7!_K9Z&S!HE3qZPsx@(29[*TwK,#MypkoyN}]i');
define('NONCE_KEY',        'o+sLH||<72mL5NeAS7;3{&ySNw%(e-}(AF?]3gN=uJy+3nK2K@srQ@#^T&oYzu5N');
define('AUTH_SALT',        'wnQ0tl.E&l.]p&>`j^tj#Pxhyv;Fi51qS3l5bdG0CJ,Fv*uu2T?Ov,C|1$r%{=H ');
define('SECURE_AUTH_SALT', ',t4HY$7^1RMgw.M%Sd,F-Hj iM=dZ>X%NlRc*c-d,s^d*63Ob0btB=w1fqpa;V:#');
define('LOGGED_IN_SALT',   'h&uoW(qH/8}R4yhao $f4@-M%,OFH9J9+>+V;3eSg-:0hG+mpCrt0aLstWma6fkF');
define('NONCE_SALT',       'QD0sdLq|9CH@ymQjnsQ 0N2m,UDRs{M>+`:ZB$zEQw;5m2dluE*!wcHqhGJ--KF6');

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
