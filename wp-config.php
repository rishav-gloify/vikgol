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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vikgol' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!hx9@i!Z>&XKtLrX{rY9J>g044TzO EbNq^IjNjc3+8LbF[q`*,<WqD<@i/WKMlx' );
define( 'SECURE_AUTH_KEY',  'QyiV~|o_8/^ct9mR+[qw7=^Q|zhWk9;e-6/rI~j`Inj6Nq.N(F#H^JW#UrbYFoLY' );
define( 'LOGGED_IN_KEY',    '{1WEFVava#U+? 4s6+7ss>HwTr13Dt)teNrV+=pNcJ}]2AZFQHuT]mu]5NGBI/my' );
define( 'NONCE_KEY',        '/wgYds5=QDoG357C%__:XdZjpwP^@n@L;3(Qs9^@d^_30MSCuvDb:T/|UvL^aS}.' );
define( 'AUTH_SALT',        'mAk*%!.~.0V`@f[0JOu99|9m>#o4[1x:v?)V!YW}>kdT[?&76pV6@NII9hz#=(&B' );
define( 'SECURE_AUTH_SALT', 'Fc.c:s<^$F(t`g}.f8<dyV~E?-d~*mxQ.7Y2)0i%J _q23t@pbdUBZ6LHa/rxO+|' );
define( 'LOGGED_IN_SALT',   'mEf/;w7;?]>RALeAc@~.vi6Sh) ,^g&l {a:J&8~{R};Of$%t^jV6D)YW%0s=9eA' );
define( 'NONCE_SALT',       ':Dt|m/k053C.o8Ed(8Y/^_L:=ssiihw>Q!`H.a*i`qiW2cyJQL5!}HIUwT&n*2sq' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
