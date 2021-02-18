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
define( 'DB_NAME', 'baolab_db' );

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
define( 'AUTH_KEY',         '/AdEROF3vFyy8 ;lyZ_mfz*j)gyd0T]Df*H$cl;hYP4j:@xJJeEYBf:D`bbm>926' );
define( 'SECURE_AUTH_KEY',  'C}>kE~d~L_1#.ME^HZ,:y&3i` Y`Qw[sw;hAqk,5!&7EF33DK[/-%%ll[ES$MKxQ' );
define( 'LOGGED_IN_KEY',    'u$|c!:@@+$An%pi,>^x1?lsu=,mP/O4xHjQ;^f))U[pIQwbYx0l/#!+sviO[V9)5' );
define( 'NONCE_KEY',        'R2iDr#laV3,)*Q<6,$Q2j`FAg}*iG?Z*.*Phe.dD(XsWz{qLKIXJVd3HG_Ak[c]/' );
define( 'AUTH_SALT',        '`>cGPN,$#{G&{wldnu{utrme]{1O8t:V.tI~AA^l1$50U?sP:PS1h3;G1EpNa[5U' );
define( 'SECURE_AUTH_SALT', '`G$:rCx?kvsQyT<lg3n+5wb-)7wsxGDXD}pp3(@M#CgjyEObw5kIPbEfT1+N{59x' );
define( 'LOGGED_IN_SALT',   '~p(KGRP,=3( Twkg46~lc{6f:91){-Ut=4@0qWU$VZYt)+(cZR!U,}K[saMo:gd8' );
define( 'NONCE_SALT',       '<v@AF-I5m(SKy3M96I&[C.>,x!hl8#?YavaE.),8 &::X@/sCnzNq(i4 }2{|Hk5' );

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
