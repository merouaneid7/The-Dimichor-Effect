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
define( 'DB_NAME', 'cmsminiprojet' );

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
define( 'AUTH_KEY',         '4Nd1ePTfps|B j[TIL7aER?c37&yDW`|FY5Z+g-o9(Y?V)Sq?2TZ`#5pv%2_a fa' );
define( 'SECURE_AUTH_KEY',  'qqY5%H@*<g(rKy$g-:HjuS,/JcO5+=v!;5:F-ce5V>E,(cRGos4DLuohH@%3%`#.' );
define( 'LOGGED_IN_KEY',    'Q B ]0,NAdXhr=BkF-.X<^yxr;Fk9jA=<(t:4zjX-Ta]tG$SzdS[3W BE,R{8L2B' );
define( 'NONCE_KEY',        'vxR2%jM)Pi#6ah ?%iFy( ch@-97J3Q<j;44+``1U/fY9`ZBDA+I^K*7@Iig=>_@' );
define( 'AUTH_SALT',        'k`US|E4llVYq@lZe^440TF}(Q[4o>oOG|m~z?)vv MQ&!/`N}=!&D,L7A}HW=&u*' );
define( 'SECURE_AUTH_SALT', '(5R(zOwa=D2On@6>;{{aWK2&Jm:8ay70-@jv$Q>T{kdzEFDQ/Xisq-T5D(BGdx{R' );
define( 'LOGGED_IN_SALT',   '2-`WZ?Kyypi/ 8M>KOlhi595Y/|UzNG+ y`}h+*raj*j4SN<V)T_T008;0k}2`l|' );
define( 'NONCE_SALT',       '[g6b>N]hi&Mc*Y|odJ?u(W^]9Doz4UdYsML6ms+B*^|F<o^,<~9=f#b+^5kGcUa8' );

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
