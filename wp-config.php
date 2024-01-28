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
define( 'DB_NAME', 'tunnaduong_spr' );

/** Database username */
define( 'DB_USER', 'tunnaduong_spr' );

/** Database password */
define( 'DB_PASSWORD', 'Tunganh2003' );

/** Database hostname */
define( 'DB_HOST', '103.81.85.224' );

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
define( 'AUTH_KEY',         '>7z~6C^d:pbI,x3A&jDf(M-,,tfqNHjff`(aswj#h5R}&lS#mQEZ4R%c9mSko_=C' );
define( 'SECURE_AUTH_KEY',  'mgl=>0?kP@K,vyD&G#BDIo4rkB Q,p@X 4Fp]OvwEfs-2FB%E8@e:;lweT&GGO,/' );
define( 'LOGGED_IN_KEY',    '{F`S;Z!Hcj26st!OvF|7XqzHU_LH}|N-R!Z)m00u*c)68t Ih+4~KeeECV3O~oZ]' );
define( 'NONCE_KEY',        'tSN)LBZS0H>CzhAyr5q)drs!!!`gE<CGK;ln$tgzph]n?<}Da$:D}ra{_UC#TPRF' );
define( 'AUTH_SALT',        '*oQ~{dAmH%ug@zXwFs<fthGQ!EhV]VMCgJ]x{=A1Yn.3_5tId.EB9=87}7*1au!O' );
define( 'SECURE_AUTH_SALT', '4d@s+* WA-Wf:Qzu8aYjsm%,Q+i9PX@O=sGh!{rU:P!Sh$(=ba&H~FgW<{6ywhpb' );
define( 'LOGGED_IN_SALT',   'I=HSrgPaZ.Ih?%8cpLi;2O-sLP$GOCaEHjrXF=zdH*7ZY0RDn!y7GlF6PJ$n{ S}' );
define( 'NONCE_SALT',       'YcgS{&%1S^%(!(}>U)2zoO@m^CY@I$][f?YVF(QY[-&Fa=[g_*mB*/ar bliz:$E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'spr_wp_';

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
