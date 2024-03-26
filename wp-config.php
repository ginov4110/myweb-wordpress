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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_myweb' );

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
define( 'AUTH_KEY',         ';G$7Qyp Km2b#mH,[KfFZ)R~R1G~=RP]%D:Rq[+FapkTqSw qo/JiTgBRZ0{^)?e' );
define( 'SECURE_AUTH_KEY',  '9Cz4 4_=.d/9xbr2<<}Wk:;a]_1I/exZ~S)[8Tp|x$Jctm|(70g]VkT}[X}?l+(u' );
define( 'LOGGED_IN_KEY',    'mP>s|t. EU|3ytw>Z+fT}jLb(0aMx( amJ7}K< Il(czs4H (LbX>;d?cjiWN2}|' );
define( 'NONCE_KEY',        'G|c6gJrXJ~GAnq-J98XrqJs*E]TMP_{JXRiq6c.9B=`o]}t(1B:za-X(.x:4]iiS' );
define( 'AUTH_SALT',        'rv6LGjvr!0hh,4L*@F|gINv@yyq)3|~QG%hwZX@TJD_Pr~rkn)$`ECjYQQFkhnlt' );
define( 'SECURE_AUTH_SALT', 'VMBtPGM}_`kx0t_6ulQ*b54by;i3]5MB~o!eqtL9Lw2A&yf61THl1g_,O9vb:g))' );
define( 'LOGGED_IN_SALT',   'J]K1WS5>[&b =g5{^zAoA}QPrv/+3TuXd:+eo)k5]Xor(sE@1bv-+JHbae9^}I7z' );
define( 'NONCE_SALT',       '17.AYgSe*2m#F)sVFP<Z,}Z#0,}k=7X0tn:3dM%EWh&sD?FA#:wK)BKkCxn3j9W_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
