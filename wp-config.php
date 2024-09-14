<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3R;`Smgx)um[Ot{`qE1mwRL_v5.9FJ vj7ha+]bDVQ(HQv:<Km4y9n%joldnsXBv' );
define( 'SECURE_AUTH_KEY',   'H4jy )~wWuI6,W+TD4&$K>@=sAocg34G6<t(%p&O7IbVNWOU([+)Hp=Dc<n_nOJj' );
define( 'LOGGED_IN_KEY',     'w.MonvqEq-_s56(u%;=#@.CH#(d#+}L5FL1`YX?UfU.%(`h%aIo5!@} %E3gh6M3' );
define( 'NONCE_KEY',         ';Ol%]gezQV^6veLLBr1VuK0)+5x~?PT?6.wupXJ}&i(Phhs-aUu&Xfoy+n;B))AC' );
define( 'AUTH_SALT',         '*C.y3o{MBs)XxhQqCoGV2U~`[IgaFMkp eLOO`1,t_Gp$ZU*EVU8z9Xa>$lN+24)' );
define( 'SECURE_AUTH_SALT',  '=qq]LRd6qYT`v-7fGiuT:6vdjbLKSG=%5_,,w8q26s9zbZ Q#pbkPR$rzu/.W9c7' );
define( 'LOGGED_IN_SALT',    'Cz0B2LjiL~KJDh$0#GV-bns[l$RyB8*8O}+9,d:qwow@KFvrsjm@vz;l*,<{j#Q%' );
define( 'NONCE_SALT',        '?Z^QG3q9]:/wSKji|Rc>Q:_Ea7HO4L~L,a7$KPU_K@*{_3KrG*t]WO>q3[caj^PX' );
define( 'WP_CACHE_KEY_SALT', 'A<4?RR$d#:xkd0&j<&6teEWUXeAyTwQC:GRje]B+}=JSx[i`n 9J9m[y-I%uH%vt' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
