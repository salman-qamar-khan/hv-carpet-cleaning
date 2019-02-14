<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'loca');

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
define('AUTH_KEY',         'K19L`*{+c6YqF %E(:YhyRyU+2mZ^9~X<A/ BG+mJaCaq(Oqu!U%f8%uhker;x*r');
define('SECURE_AUTH_KEY',  'P{>`:AXQ1  WEpkT.rKIR=ks4nINyWD>?YKGf}v`iXkk@XG[2TE 9m.p,3,!b{CZ');
define('LOGGED_IN_KEY',    'jpROGDhcvB$Y`37VgVIRtSvS&orqlJsE90CjCZ0>=~-( Z5h!qlc#%_f&jQ9w-YD');
define('NONCE_KEY',        '-:0Suwi@#21tEMHU!$?x4eURl%I V,CKoHZ9h<hK$N/<9=z=E)Ne1VOm8!t:jAL?');
define('AUTH_SALT',        '-`Jyk%GFP jrd,}O#mn::?0lW]xnCwJvjv&BLgu~=u<7:V}xh#^uCjJ=8o>|]Bhf');
define('SECURE_AUTH_SALT', '|c=15.QJJ-oDApeOU%4vT2sbN W!2JWFg|+ TCNH$GE5TyuQP>RPZ}7 LVCmBkNC');
define('LOGGED_IN_SALT',   '/},G?UC(e/qZQay>gS_GAEvo2VU-.#Y);-RoX_n_KUEjt5JulKT6Gr,LNLF8 to8');
define('NONCE_SALT',       '7;>+7>f3Y[YC_zQ]ZVs*viVfS_^P;v]v&FI0jjSXP?ds~f#/`~#y;K& -{%lw&D,');

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
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
