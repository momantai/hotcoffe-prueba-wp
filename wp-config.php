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
define( 'DB_NAME', 'wpchido' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'momantai' );

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
define( 'AUTH_KEY',         '^CV`]9IXn9>HK>nh_ON($a@#]lLoaH=_W<aH!oj~m2>4;0UhC~)-JCUPs= )P$`W' );
define( 'SECURE_AUTH_KEY',  'e^*e9f=i`uH)V,adcGXMucJIOHeL)#g.YW+w>$q$=ZS7KNRb!M~O*UN<GIa,WQH}' );
define( 'LOGGED_IN_KEY',    '-LA(mlqA-M=!qW{?,!HBW}{@nQLk%?4I&I2Z^##C`Xm>A)!Ky7^%.@oibQ9yGrbb' );
define( 'NONCE_KEY',        '@3VaAXD{*bQ(=t<|4TAgvNe7dM1BnU]Vwy CB rA02L-WZP+V[LzM^Lb%j*PIFF~' );
define( 'AUTH_SALT',        '6EF#0k1-|sPvqc!<h?U=`qC//U*%@~!W::-w<3}{YU_Ds>S;K5;(|w0#ZOEp@BH7' );
define( 'SECURE_AUTH_SALT', '1|XA[$o(5YwN#ysBAl$;iHl@)Sf3M8Ac7JKF?w6v<BnYX:@M^pkSWW})$sHEX,3M' );
define( 'LOGGED_IN_SALT',   '&o5G]6Wn+JCo.|5)x?}}z73soo=pwvv#iaoF;WH*w:0I<U7]lf:unLm2>@8,$)kp' );
define( 'NONCE_SALT',       'YsPzUz=cW{IH XNIzbrL}%PTmp{UxzMXEam*Oz(VRwDg4!{=-xq 6Blp[/5@Y{o{' );

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

