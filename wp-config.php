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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_wordpress' );

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
define( 'AUTH_KEY',         'FGAoV#I&xgBYLS &%ur|NO9Ngx?O5t/l_s+Szs+6u:}&?$Nn8$Mt`5#|bQ4 x,qo' );
define( 'SECURE_AUTH_KEY',  ':E3-|:P+CAY@{<%ddmzifC?_cAL[Vij${ICo>=11KI=Zry~dk<Kmt-o~owxh%9Ak' );
define( 'LOGGED_IN_KEY',    'q1As]TaMB:#Yq,;/Lvd<c3A75]NFC4<V#R!1)R!3fgKt]Y!%D.MPO$R!Qm=6vZX1' );
define( 'NONCE_KEY',        'nrB|C?%BrHVLpKd=Y9,N`Uz8=-kGfw1H3TEJ/0iQiSpA(grLxE<j[,%{Ox{VTt3=' );
define( 'AUTH_SALT',        ']frN(GRj-L#nIAlSF% z[W;SQYm.waf~ico)YGlP>{&QpFU6+G/,|;~Fk6Z5aT,p' );
define( 'SECURE_AUTH_SALT', 'kU/RGh}GVIB:+0|hCZSczSBdKs~g#gh$^b!c1*Sba,ea{V9%rE?ayRj.O0VE>!N{' );
define( 'LOGGED_IN_SALT',   'K14Raj-8=mr)3,QQ(@DMcHIV|WO0}T{/li$,~VBCJ@EER*@nvk)h)>J=2hfH6%sH' );
define( 'NONCE_SALT',       '=~<GL4PbH!)ucnP8j|G$mdg+tx/b}Ke21pk;>c/0I1cIS%>cDr;XUM~2RwQgF%F%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
