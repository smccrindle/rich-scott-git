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
define('DB_NAME', 'localdb');

/** MySQL database username */
define('DB_USER', 'azure');

/** MySQL database password */
define('DB_PASSWORD', '6#vWHD_$');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:55107');

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
 define('AUTH_KEY',         '-<s<)l_W/_h$%Y!Pqb!bJXH01Up z>U 2c0Ktkb]f<`|/q!uQBPkY3C6Uz-TAA3$');
 define('SECURE_AUTH_KEY',  'mq=oYFI>>O *WJVFt)*Hp;9zA=1#=_M+tsrY.2.XZNGn[F||Ab7_3.H.%4j-7w/n');
 define('LOGGED_IN_KEY',    'b3@ id+sf;H/a43|q}r3d7cwx:/)O-v#O5L-KT0pyV^BaUx-ZK;zHZ>%JL-HnZ&R');
 define('NONCE_KEY',        'me8B|Y>rC?vtWIx{,|,o-Q+bluSsNQY8q#=1R|`vs8|.Q89n17Jw6Y6stGBAN*Np');
 define('AUTH_SALT',        'v+~}]zhO|{]N9Ld27Q2b3|74H# =jLa7T.!)[&|zg=0]gpj!s2NtWAfg+)z(g.w`');
 define('SECURE_AUTH_SALT', 'dKK(d~:80E|ZY(ZB%#-hSd=Jz~SCDftUd8-b7Jw&0XU8v [mH6LOZs`h^j>-P!2.');
 define('LOGGED_IN_SALT',   'NS X|(+E++vm1I7!!|^ucl,;e.82WrKxG_J8F#3&+R7?iJ1yMOct~gab1!wFXUP+');
 define('NONCE_SALT',       'L5q!~8u+JsmF}=|E<~++Q}&jP?p^S!bEv,2 DcCp}>G5G^QqD|SgVCl;]LYHP@b8');

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
