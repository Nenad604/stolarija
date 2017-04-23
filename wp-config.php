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
define('DB_NAME', 'stolar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$F`RB,5rj<YmdPO?>WE0kAFH2-W>SWD&f#f@KH$^J*~dd>.rn9hyF7Za9~b%}k]}');
define('SECURE_AUTH_KEY',  '~~&q#fy||[Y+F<Sv8ms5ai:_/Avs@Q-csBy8(+,i5Oq^d[]{om&)C8-!ssJ+2UXM');
define('LOGGED_IN_KEY',    'B<?^Y OVvi3%Y>K+NZO/tc19<gS>.WI1e,xLlFl11Ex/kFI(CdJU4,7Aq$z=lCD0');
define('NONCE_KEY',        'c.^RA%ErCQt>U8_zG0P!xMu;F{q+3@EtYWcXa+87rp{i!0XF2m0go1#;WpfmD?*p');
define('AUTH_SALT',        'e?eg`d2B##X=6&whytq;&IBdb.G.Hk5uo4ge lDz@!npGaG3EwvD2t>^p$Pz|8|d');
define('SECURE_AUTH_SALT', '<5Y`Qv}oxfGr(tJn`<lq&|K|#]a!EWk8c%a-  NXH6`WI1%-]X^Mnr@MUbok W]{');
define('LOGGED_IN_SALT',   '54@9(t;;vs/zK4)!X&z7;b2R&WvyKI,W0!y00_X,9_TgvMNsF[h$C-mnv/C~e>x{');
define('NONCE_SALT',       'byuk@d|iL hzGOdMiE{W>#dP^[-)kw>-Huwrv/2U%vzL$3Kg(=zwLaohn@@jHxiX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_s';

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
