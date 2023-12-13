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
define('DB_NAME', 'mysql-plugin');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'qmd!-1E5w}9.$<N!}-gdvw|qQ+j5Y! _q2,h8opO>ai^8Lw[Fp1anQFhL%UMks%[');
define('SECURE_AUTH_KEY',  '=bk+ChOl,s>G(7C)+0==`1Io:<J=p`)*<A!tDB(*fdN,ZsyuejPQ.fHVJm;q>f{N');
define('LOGGED_IN_KEY',    '7B4k1of%w*{#D3i]`48`VCm}F[BphJiRdger[H!g8PA>b2ryEo8iVNf*Rk9A45uk');
define('NONCE_KEY',        'TnMN-C}A-mNG58CcPS>x/=f8f]WZ.kY]6]},gwZ9SVg&o x)B-;)QzaJq.,qEMWD');
define('AUTH_SALT',        'B3VQTrFT)G(6jDUPHd.X&[+B_4bsbd<sM-==@>MdG7Mj Q_#gdxfHTa1$%1bX2Dj');
define('SECURE_AUTH_SALT', 'lGhD-^5/[ sr6g90=s[^)/w1;pN(Y+3-I/DJ~n+cAVCsVn$Leb2E;/:+*[O zD3R');
define('LOGGED_IN_SALT',   'Oj4-QOyt6@rb(e<]:74W9X&{35/|h,JPRXp2H!^]:qI8ch*E(?c^};!v}Jn~WYuj');
define('NONCE_SALT',       'r0o~&,qX}qQA|Wt@.2zIF?Kdzmw6WnjO&[?L6.RzR:>`jE=|MX{n%%E7zZX@=p~5');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

/**
 * SECRETS
 * username: Watheq
 * email: watheq.alshowaiter@gmail.com
 * password: N8B6%ZrvoF9Iu$ADi*
 */

define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
