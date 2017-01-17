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
define('DB_NAME', 'viddoc-uk');

/** MySQL database username */
define('DB_USER', 'viddoc-uk');

/** MySQL database password */
define('DB_PASSWORD', 'mus4mus');

/** MySQL hostname */
define('DB_HOST', 'cust-mysql-123-19');

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
define('AUTH_KEY',         'S tRe{-5*tT_+.x6|~Trj+Hu1Q:3bg`~*j{:+-U-rmQ-G]qqX@tXHuz>!jxe[ge?');
define('SECURE_AUTH_KEY',  'p?5^Ur3,&ZbK;1)w&Nx&7YEJId#/st-Z-4|QH3fW26JRp4$c-<{SxAx<|b8+`#%B');
define('LOGGED_IN_KEY',    'nlX(5!,V{G,NRj-N(CP1SZ+F,rmwob<14p*C9Pf.f%B|Ne|Pr2+DmldWil/qj`XM');
define('NONCE_KEY',        '.Kl7;;M%rV~-brj[TwlE?wED>EY}vCMK#&Kc8#7.##jB*n2k}:Z;91d#iaFzzb:#');
define('AUTH_SALT',        'k3Aj4NKz1Y7P|_dq=$rxySj[LcTH?8%u`s]^NP*{OL21kc2X4qprV23>Y+K(vhH4');
define('SECURE_AUTH_SALT', 'gEozwKT#C/dQ;zVNs9y8[$:PGq<=Pm_#]d>1B${I+z@<>*q>`|-L3IE yQ9P=PNM');
define('LOGGED_IN_SALT',   'pa<Y]TV]qiCT;T|?]k0;z4;;),Y/eMk:gC~ NL0vEf=H2h+b)+8o3BG>eu+6xHJ[');
define('NONCE_SALT',       'l1cH/K_bzH-:r~h-;l`#8,M<4hx6g[?+/iT;a^GHZDa~,LQEc NV3!3l-Zl]{{dk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vd_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
