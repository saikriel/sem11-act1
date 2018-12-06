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
define('DB_NAME', 'sem11act1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ']_wE|!2}O/3Eg0Y`z[{%fL:l)OEw}h]_-S1c-=ayhxK9u*?<#XK](}@^^%]QpJPi');
define('SECURE_AUTH_KEY',  'N:0%5I:b[LoT[$D|F@}zmueE5P;]vCz$3gzM~L#[&S1 tn-utb@2Yo8Ug;fYZ;Rt');
define('LOGGED_IN_KEY',    'Sw4L!Px[i<XgTr3{(VOQ{7fB.9GqUzugpla$R nUFAewTN3z$c@3O%P-)DU|?uV=');
define('NONCE_KEY',        'lYxMZ--m@5)^lD9?-L!7bqnZ4p)-**uOHG|xO}NjeBcpXXG^ps`h*qAUT|JwHa{.');
define('AUTH_SALT',        'P.x]a$o$S^F|0+pD*4]>R9w8?,T {&HpW;2V@W>ICHHjR4L30EK/JqiweB=3rS&n');
define('SECURE_AUTH_SALT', '$];$>&eMY61ly9w^(+w/!e36tqDGC)T(SGBJZ8wVHnM 3Nq{A%+2r#VJ#U+P6b4i');
define('LOGGED_IN_SALT',   '*woJNHUb&x.{$Zlg/-nq0-@#v{tRJwaY <%TKZo%LFy9b<u4pRu-CCoYjeE^pQW@');
define('NONCE_SALT',       ':wcwfq$JW3$`^-ZDa0z/ZB)>rAuwM%W{Z</gBJ43}A>!8 AN/@.)]NwRg{n!ejNZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl';

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
