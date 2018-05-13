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
define('DB_NAME', 'ejemplo_tutorial');

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
define('AUTH_KEY',         '(>,QAbp<@a=UfGrYR(|uSFv2)|]=L&N64WOgtZD5Z-bK;sK]J8 V&2DDih0;u/[h');
define('SECURE_AUTH_KEY',  'LH@wX[7g.Oq&+5rxSxQU88r9jk}BIvLcmwhb5,qOFX<V,3lC[Y?+nwuCX5(BC;#Z');
define('LOGGED_IN_KEY',    '<HOWf2YgRi+@TQPZhOF)Q/UjLIpYGKWmHF$l]GMCv32.8l4:]Q3Jnf{G?gkCT*IT');
define('NONCE_KEY',        '}mI(Cw&-D%m2?rj `t-+V5j*J2EEbGTv0|9Ofj/`yDv 8D5LFt-Q#C4Riq>SF/i=');
define('AUTH_SALT',        ' Xw&N2u3>saUrw*]H6&jM!.Dtn`JA|Qc^k~xBVswz0t3$9|(F}?SbU3dXZi,VLT4');
define('SECURE_AUTH_SALT', 'qXdP/BV%9Dh]z|l~z7Ak3Ft*UrRWX*J1#y7Hs=).:XS|88MWQd7O{fnkHC9?@iRi');
define('LOGGED_IN_SALT',   'J;fLd9DwFlKlwi*]>;Y vJn!i{,ehFBX3&+38[RMQR2`u6:I)!O7z*p#n%r,Hu%#');
define('NONCE_SALT',       '-%!e=AwF(p]G2;9.t#(%9?16-Z;V2NKi?@gWUx;hqh7pu(dhWg>&8y>K36FQqkae');

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
