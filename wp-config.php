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
define('DB_NAME', 'masondog(2)');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':`5M1#Om>+W+~do7l}uB_/Wa7$3.5[|:[HdmY^~,L?%q=|BA^u-Oi OTj+muTb0t');
define('SECURE_AUTH_KEY',  ':|1dO.*pzf=-a YXj`J_j+JEz.Pj6hRO?RU.j{<Bz#~;=fWI(sVTBIw,KuN6y&o*');
define('LOGGED_IN_KEY',    '-34S5wNo|W.f$_kxOMg;mZE9QN0P IthreA:$@ra_nBbMLNXg<q=+I06v1CFp&g^');
define('NONCE_KEY',        'yekv3SMYokCMCY`PFCRD<lO<@Ud[y%2@fPH%P-W]hMp:^:&_$k-/ucl=3V[fMU*]');
define('AUTH_SALT',        'OD0E~l7-8,G>RZxY*ES+O5jpz(V,jgtm}D)9|b:h/5^1E H:NfiT#?| {%pq=C}W');
define('SECURE_AUTH_SALT', 'F54(M#;}!l/`{S7Gj3i+@EAWTUHYb|]_#[^4JrRMByU)0+=YdbCzT?)phB1?!L,%');
define('LOGGED_IN_SALT',   ')KS%YF^[9~l=J_ND6ku>QR[I8b%]b%&Lo#&{WPkJ5q6Df+!TUM]f+I%3rcf@7Asg');
define('NONCE_SALT',       'p4IWz;)tqstuiFDc<9{~/~9)I.8j[X+fa7<1zun?;.GOX~S-fUZG3vDvt7#3}ir-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
