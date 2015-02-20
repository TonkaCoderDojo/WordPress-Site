<?php
/** Enable W3 Total Cache Edge Mode */
define('WP_CACHE', true); //Added by WP-Cache Manager
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache
define('WP_DEBUG', true);

//The entry below were created by iThemes Security to disable the file editor
define( 'DISALLOW_FILE_EDIT', true );
define('WP_HOME','http://tonkacd.org');
define('WP_SITEURL','http://tonkacd.org');
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
define('DB_NAME', 'coderdojo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'penguinKing');

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
define('AUTH_KEY',         '1ZC6izI=Q(cF<W(-1+apPg/UJ 6qNBV~0CaRW{Q;L2uy}&]y.#Db27Ss[_U{IxGr');
define('SECURE_AUTH_KEY',  'Ib(&H0BeRm-3]ho6Kv1XQ}g^mJ}csS/S1bJV/#VOci}Jm#[6ou}5R81g%i1jV`d+');
define('LOGGED_IN_KEY',    'e9ofSryH>M[$FD|24tuhc4Z:%G_f1bVbPK#fp}-M*8C}[&b8sYQ_77d;^p&dF%n$');
define('NONCE_KEY',        'M&B9^mKWho_ad-rpS=Ww|x@7)CMKg0:sId8+*tVAvoq4IqHr8b$u)hf{$2@2mwDO');
define('AUTH_SALT',        'IRnE hK65:}]e!r!C.nAyx)1z!D|In03xopvQp*%= roBi6-.D@3=UO>R{+U,_W8');
define('SECURE_AUTH_SALT', 'wbaZW`|zwNoaM-.~zvYGnoK8>~]Ke0;VFBv2C}-L:eQ96CD)?XG2:g]v=Rx?+FxW');
define('LOGGED_IN_SALT',   '<+T+>8j$@TAxk8@-;]7w>Klvsy3g++A_^Zqf5zvI)aSGRe/3hn*R$+O(-~u2(XWW');
define('NONCE_SALT',       '[9.w*p+)uV*H5kuK&D-0Ss!:0/=&ok5u;k%R)EW%&}?X^r%+FIC4RyGf3(/HNz`L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cpl_';

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
;

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
