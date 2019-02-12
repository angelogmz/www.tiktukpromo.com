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
define('DB_NAME', 'tiktukpromo');

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
define('AUTH_KEY',         '3DYYa:$X}UjR6q4A,7J>xiGOf3#Rj=P;NSHbli]3A+EU@(7Ov4Gr8&]CnLW.i/31');
define('SECURE_AUTH_KEY',  '0ihE[wkK$0v3=PFa,0Bk4PVo|(;ptc9Xom~X-n%/i/o1LN,>,{Cl5G(;f@A6}XGz');
define('LOGGED_IN_KEY',    '*G#/7Pgp/!9VkF?r/:~>R/::#Y2%J>W+U&|/ZZv`IBQ8L7-%GF*|[E_KY>}tE3 g');
define('NONCE_KEY',        'O;] ?D5S6xp{6$|`tF}y4iG-mEDOw8:V>p~i:_Lo&M*jz!`Pdr6[|%VsG$l*KD{/');
define('AUTH_SALT',        '6Sbk#sa55hg)Crn4eK6y$G0#HGFiT=J;ZHGGmh6NSx`A;bRPX-ea>0i^8%W}?|tw');
define('SECURE_AUTH_SALT', 'M3Og3?,LgKy3O`3/9()b3sL[<J|]l|d/xchz~SArr|=tO4]eua;b~TR]r $d:NB8');
define('LOGGED_IN_SALT',   'o4%Yk+h%^L+m%*#Crw34!oiJ6bhyy/Lu~vGr-+T#Jp8D!x%#Hp44Y5-+u(x`/aUy');
define('NONCE_SALT',       ']SS_fnJx#K?&w%joPyH!HF<0#S1RwdPz Uf!5Yh5]>yvMNTb(.!8 !YOA`!WO*wt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tiktuk';

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
