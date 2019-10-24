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
define( 'DB_NAME', 'apico' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8Rc:Gir=TWs_2!<O$i//%k{e,)<E#vw,8#c-Age5++/I-FT|jeTnk4T%D;5?l}GE' );
define( 'SECURE_AUTH_KEY',  '1G-WQcd%CIF)]7Zf-*I+Ypo}d$T,IRc%a<-kCTYW=:s5eI$scHQ;B}jf4.YV|e~C' );
define( 'LOGGED_IN_KEY',    '21@]GH=]w(afpDr>+K!1M.$EVu`WxlIs)v!$PKnHpNW3TJ+hO@|mLA GE.h.KL=?' );
define( 'NONCE_KEY',        'N$d*wjtQ*ar=W2TG!=v+zFi*eb!](#u/LM-Ag)v2A!x(^6*NQ.Kgl]wMiONuiHS&' );
define( 'AUTH_SALT',        'vlp7y4*EA}NS(&y_gnNiIem:~BhQ6Sge.[]Vi]g5M>pXM@Y|hEkG8mIr]CtDTq.0' );
define( 'SECURE_AUTH_SALT', 'H{_@*jzq./b),3fW8g]4}{K@;=n7%39hmJD%7WW2h2n=QPyJ),<rE{l/K>%715}k' );
define( 'LOGGED_IN_SALT',   'j`;/yxx+c+e|D@m8^=FHxHF+?@FA`W^4lJuMotJy;<r0dLGgWB;GcQOB,AIw($4f' );
define( 'NONCE_SALT',       'sdNPq)]Y%$H]U<4GlSR<^)Nkkqz8|sI[1B2kOdIdKBO/UPlX~[.hw2p@/5bWMg{`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
