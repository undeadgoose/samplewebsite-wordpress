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
define( 'DB_NAME', 'sample_db' );

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
define( 'AUTH_KEY',         ';0[k[]5ZtQ):f6~$UBjbbHhG|!]q_/o^(}V>B~$ Ez1;xi,C&lPblc2w[(T.,0<Q' );
define( 'SECURE_AUTH_KEY',  'c_/y7rRph3>L;mzWxc>TgOh^PfI[.jBI087O9oXTn}w~/hqk|VJhdiVP@@UXS8^M' );
define( 'LOGGED_IN_KEY',    '&@sD)(_HM{+Zy}#V(v6]Yiosx EsE^]6>a@ZqH^V3Tas4~DVN txV{Y4zV~fi(mW' );
define( 'NONCE_KEY',        'utPB-Cnk:2_B&HC<d*1eAC$;t9uq:{0Z<jOzCHUU!3bqjF;t[i&)=9nV7v}ne32@' );
define( 'AUTH_SALT',        'TO|IK>,9z3Ht?+;@c<Y36686T|;[T)d[g6>}ec&[c*%`_5#u1Wn*M?z@x(qxJ/f+' );
define( 'SECURE_AUTH_SALT', 'M0vWHQQWk_,zk[:gFN6G+R&}5b3qkd&lEq2|w!idpD9,%%F8>D`D~*eZ%{QiN(W6' );
define( 'LOGGED_IN_SALT',   '<i2Zzzjd7$uemz)YgUE,O,2og-)xG(b((IW+mM+`G3j<5#e*MYq!;xC&9%?xB2[1' );
define( 'NONCE_SALT',       '6c)m?mx-%WnFCJDhj_u>Z:x`^ZGefFspt9.D!p[>j|gONP#$%R=22Ozn!#.)cL8k' );

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
