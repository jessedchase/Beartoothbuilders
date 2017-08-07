<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'btbuilde_NewSite');

/** MySQL database username */
define('DB_USER', 'btbuilde_newYeti');

/** MySQL database password */
define('DB_PASSWORD', '8FCR7XCAYEcj');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'b_YDV&lJBH>y8E!wN^*Km|6@%LsFP42GA5diO/7k]RvSuqg{9;?pMxZn`.$r3eUC ');
define('SECURE_AUTH_KEY', '#L%vG*(]U|)gxStf5RE@Qy[P`CHb!0J?Zo_YXA$^u.IM&>~eDp2l<id8wq}T;K1j ');
define('LOGGED_IN_KEY', 'Q|C7#x_*8>vsMfi%D}[/IW:$6(PX1hp.;On?BSkAHJeE3t5VwTq~@<Rro{l^mU4b ');
define('NONCE_KEY', 'l*ucrA&X(W$?QxYV<sE#v6;t5%Pij)B0|1Lf3o`y,hGb/em78M{gqDz_RaOJFI]U ');
define('AUTH_SALT', '{:^YH[C}iah1?eX<%Bl,(D!n8;$wq4f2bWMFyEsjt|GTuS3/gQk`d0N.KxI&@R6# ');
define('SECURE_AUTH_SALT', '.JL)9vM[t8w4#c{sXVe?dnByF6>IYNh15(3Oj_Q:T$2qS&Cmi<%HP0R/ZlU]~@Dk ');
define('LOGGED_IN_SALT', 'e>VJI0BUMw:xqf3`D<?{$igd;8,FLy4^#!pYcEm*Njb/r21R5tX9K7QSOTz)~lGs ');
define('NONCE_SALT', 'Bz;t#N%]v$)myP9l.jM`d}x8pO_0LR>I!ZbwDQ@^WGq5*YEc3o~XkS|:&u1f?(/n ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
