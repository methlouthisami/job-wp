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
define( 'DB_NAME', 'job1' );

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
define( 'AUTH_KEY',         '<>%s,h3jK*kYZJsMk8t,]FG:6[{rzc!s<3N/:lEkXGNwB[|IXo,Gw;+8R|0.-@C0' );
define( 'SECURE_AUTH_KEY',  'ZvM+cPbabU#o3afx U>DhohQe3a5.+T~dR:6ufH#ZRjHV4y+ju_yh#4iGyzd`1ip' );
define( 'LOGGED_IN_KEY',    'fPA-^i~tsP[?By^;)B59a~>&fw/^/3MueV]?(qRzF,_175qN%^AutAPj#hAcVtlj' );
define( 'NONCE_KEY',        '>uCIx@*tSp7&*Z}Vw9lu+9s&$]/$](%)/$!. *A8U}j;a2PrYZ]_f%XhE;XnwKih' );
define( 'AUTH_SALT',        'fy]qf_!l^.5?EMPr~aeM[KlD6mwgt F3r17(Vg^weB%Zf6vE~tL62Q8E>oT86BAt' );
define( 'SECURE_AUTH_SALT', '|o9i.7U.g:NjfcG<>t[ _Il2b6:An&)]P#irf~x%5dBegBT$TknD|k0/VN7Ix<,W' );
define( 'LOGGED_IN_SALT',   'E}>kf=i$01>MU dU{<C2YX,pXRY([Du`U{.Y4a;`+RUP!eQpaWII]t_-|*@gwpAW' );
define( 'NONCE_SALT',       '16uU5@>4P(|V@LH%]+~lKvU8Fa4RegL[]&>f+/%yZtdY|6b2} urw:8xo6tF/BUw' );

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
define( 'FS_METHOD', 'direct' );
