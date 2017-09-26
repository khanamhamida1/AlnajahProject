<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'alnajah');

/** MySQL database username */
define('DB_USER', 'alnajah');

/** MySQL database password */
define('DB_PASSWORD', 'hunt1233#');

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
define('AUTH_KEY',         'X4~Pa ;8AP;2m-luJnJmAf1?&KSS^5j/Ey>ZtG!ffczt7KAX)).TX6Fd>[DF4f7w');
define('SECURE_AUTH_KEY',  'C:& Fo,+ [}69uu@TT5q<1iEDR$9PQX~Q0}Z|E7Ooy!JA7sbbdXR.`FU~+vE_]Hm');
define('LOGGED_IN_KEY',    'B@*3(6a6Fxp,%+JlrWR062PIw(5fQ7r:[MCW*L;N&/_F$zrqQx9_BzZi_m,5[Up8');
define('NONCE_KEY',        'K|iJQy(vJ;9<]ySZY-).{q~)q-)H(.5&mC`8%k@GU[Z[Sf |T4|}V`<dS&sEL:xY');
define('AUTH_SALT',        't6i!S4<b[;SIi{Ih,{/)<U1Y:kXBa:u4Qj.*W]i&%F|L@FFvL|6a^:Hb4 jp1yEk');
define('SECURE_AUTH_SALT', 'V8u7Y$tchs_&/cATVUjNls&K%@^OP^uaplY+#J#_!>r},LGbnH%pW#pXK(@QKaBM');
define('LOGGED_IN_SALT',   '1_OS)bngoutYlv~MwfztjS4Oh? VU!1E*uL)jT19G/mi&RIx}@}G=)j`ezsFd@.6');
define('NONCE_SALT',       'up&n~[`qlHvOM|YG|jl^v]jq$ m)@{vR@)Z[{R^H.~3C.kVH/{A+#=jg1Jg8YSOY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'an_';

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
