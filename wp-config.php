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
define( 'DB_NAME', 'task' );

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
define( 'AUTH_KEY',         ']}}Oe[AX]x9)@R&u#}m7pSxlnIQKX*|wUj>)^=1!#b#PK+0C{|@&npD/]hoDuuoV' );
define( 'SECURE_AUTH_KEY',  'B[s)2P&Bz4xyghto8[e_^mZ)hi81XOYZB@|0%Blj I)[x|2nxAlX!7N>HipP0c~v' );
define( 'LOGGED_IN_KEY',    '1(lU/[%1RKT^nGRn&_qkX+~YmVM]sD1oKzhm;?Ao-[LExXM F%0iVgm[Yp{C`+/B' );
define( 'NONCE_KEY',        'I1eL;~%idz5l=3>rPDJ|(!I_E4PF;}cdw3]scR_[C8tM@t{dsA#ul-[)EiK7qG9V' );
define( 'AUTH_SALT',        '~L((}wI1Zn=?o7&%}fop),H^<wmUn^NERO{-94XmPk)!dcvceF0E)8D&z3=@ku,D' );
define( 'SECURE_AUTH_SALT', 'y4 7!/7H?%U)cG%Ofie?Y8m:&(Xd6(JK8|a~|FL6eiqc8Uou9)D`2jXj(@:TvJv?' );
define( 'LOGGED_IN_SALT',   'NAV,tMXk%*p_svD#-SnL*ZLPG<-hf8gs}N9#90pO~m_9*`}TBgQ4%B_A 00QDBsf' );
define( 'NONCE_SALT',       '?)27vv296O?4{WM!k<#yehHk-LK[,x)@azIGl=`}?!cbbJl@G#o#:`tOnJ^C8BTB' );

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
