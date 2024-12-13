<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amadi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';5P,E&I8>%dSc-(GH*7,:llpXVfMg9{:vkR-*Vq<s<|QA:o 6)Z]~VkbH%+/hL9X' );
define( 'SECURE_AUTH_KEY',  '-{E1tW:%fV)%FQ=$[U8FZo?F)?PiZnwaY0J%DpoSVG:m-rZ<ixIoL7=EL[{3rTQ*' );
define( 'LOGGED_IN_KEY',    '|QVf*;R>h8>?)y^?@v-{ OqOj}Br9T pbn|9]rT0cHJ#>U4hMq1=ih{y;IfHF.FT' );
define( 'NONCE_KEY',        'G*,ikmj;5AW1;B<O?BSrlB|i w{1j)zW_W-n^EA!z+g=*mm=MV1lj}J=J/1J[m[V' );
define( 'AUTH_SALT',        '6@4WUr>#(jt}z*1*5x6j%=$MGP=%7(;%VI9pgu+8y4Q[!0Pt)U^-7gFXT;#p%PVq' );
define( 'SECURE_AUTH_SALT', ' 1Q^St`spt|:#M{)K&*,g_*`e@$hipZMgs)P%zMsKOK7)wKJR%9Q1{-7V}Ib._lD' );
define( 'LOGGED_IN_SALT',   'iZa50`cr@X|{y@%?3&CEDbU8J?<Z,WJxOW9p&CSx;o%{,?(q7!$!Ym/KdrU#=;uQ' );
define( 'NONCE_SALT',       ' h:=;+yjS/EP)AniN*`9-WqTm%Fbb)s)R=zlU!G7qXvZyz@ZyQ@WS4C=gonYklzz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
