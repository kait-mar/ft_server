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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppassword' );

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
define( 'AUTH_KEY',         'kewTzl];{|p+!}9-8RNg/xkTE7aFTz9SccS(>)`[aMpNIxDvdWHA -Ph<}vQ/x]&' );
define( 'SECURE_AUTH_KEY',  'wWNPZ#8p}$*Lg)QS|Q6&u5vN5B$y`/`jl/d[3A}GmYjq4?**ngVDiuM|`<}{UuT!' );
define( 'LOGGED_IN_KEY',    ']=h?9AN/rH.I{(TR%C#sT%~: hlYeHv},*_xKC%;8y|w:-xZx]zhw:&dexL$Tpsd' );
define( 'NONCE_KEY',        'rZ9R#[$4l]LnHS{9XPUr $My/N(:qEmL;/oMoS>frg(AKoQ6?b,{%R,F_%l+BTi0' );
define( 'AUTH_SALT',        '2+5p-d|J26xI||)#gks?.`;:Wkvy0a$z|>%})4{pK[#nI YuA!3C*vjoD_*gC/eu' );
define( 'SECURE_AUTH_SALT', 'aDz`9^CW>lEp+^(V7=v0_}TvI;bc/D+ij]1:!MxsIHng(oJvzKfr S1dLG$Ve2S)' );
define( 'LOGGED_IN_SALT',   '9|.&#`!vG<=n8`kUH%PMklh74achX1qnskoeiqCO%0EL1^F8TJ3pF=@ZP.Nr*p!]' );
define( 'NONCE_SALT',       'g_Ix -&4-zBQe`s~79i;p~sOD@YFQ!{P:~+2?iLb] edlI&Gi*f54DM2MVzvi<1M' );

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
