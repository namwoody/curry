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
define('DB_NAME', 'curryclubli');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'D7Hpk2lRsx');

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
define('AUTH_KEY',         '1ZsXU=<=A$c&4ZQ(j;Oa=F4OOOY!;|WGmuB$+#H^~KMAu{!m^Eun7pY3./&=_Zpz');
define('SECURE_AUTH_KEY',  'eo.H@Mn8#dh&+~4=yac,U ^XMa|M=Q5+mL-dV8{omI^M6/w30Zgn&!w*{F,|.Ui.');
define('LOGGED_IN_KEY',    'v:nNwhk1LY+]::q+<[*}|d:F*A~{.%Q:J!YqwL!$tmFXz6[Eix=uO?oRQ fWF;g5');
define('NONCE_KEY',        '(;^oKBS+Lc=;Qiu}#/XYQ7L0s1-M0Q-NNEw`-l}F!.R.pw(qCD!1`[A)`j-il?tK');
define('AUTH_SALT',        'asNhs#J$Bg+6C;Gcw*c/8N0q2Fv*E]!NA}6E-K!(-|$+-a!JQ*$%9Zw-{=5]*+B]');
define('SECURE_AUTH_SALT', 'Nk/dXj(T-x.cz,#KkA0x-E6,:]+FDqt|@D+BJ={owXe@A< tV|%K-O79u6MpH.F:');
define('LOGGED_IN_SALT',   '&(EgB^uK@?pQZPNf&E+@TsE$$aKP-Ge`md-T>-fI0GxR&aPCrtu(TwPR BC6NZUQ');
define('NONCE_SALT',       'N@+JLG82%2fhR+!cSg0v+mO.J(53jG]paHb-`grFNP0D03j#/7Jl:#&.tcvOpTtd');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
