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
define('DB_NAME', 'new-wp');

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
define('AUTH_KEY',         'oKvFE$Ut|=ytz6o1R*XGkJp<R@Dm[mT#%R9#2G4*gcR.iSq$Z4,x O*>GCdSfEGm');
define('SECURE_AUTH_KEY',  'G2da)F;#*;,.E@qPga9?#0/vqa*3u=!Gm1e7s}8>bA@Itr`LNAzFR&Zh_EENIvBt');
define('LOGGED_IN_KEY',    '[J]rk4M6z#[U+bfyzw*<7!2HFXrJNo$-7MO|PmI)l~%i9k;y$0z=2i6kJeVQ5)1z');
define('NONCE_KEY',        'v#w%-yOml`6ht4wLE)<1pYK|pb?M~oIx%~uCF&K= 9}HB{?Yy@}%D=@[g=Uh5,{L');
define('AUTH_SALT',        'g<,#$(3hZPrbcWy%Ud=Uax:RCBgm36G@rN3cIqx7VN^+s6=-{#JP|C%]WNg-[h>8');
define('SECURE_AUTH_SALT', 'wI7<yd<i_FaEq-Tt+izb4{%zZb`~meHSN_9B%R_{jf/|+B%K-=B:7y~6kGWkT!A+');
define('LOGGED_IN_SALT',   'OZmzH#V~Fg{CBQM6Exn9s}~ 4yKD1s|E!dRUH%w!wtjT-;J|`-SE k8DR[snniU(');
define('NONCE_SALT',       'orMn~Y3&uT^ M`9&s=xR1^c&qbGOl{kiEh5|%=`,#Kcr:7Id] D$8I^$pGxl0vzb');

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
