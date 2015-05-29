<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'E^/4A&n5v6N]cOrF?W88/dcdX4$FFkF_m&fBQAr$Q|y7d|NTy1+QHeuS,?:v=wO!');
define('SECURE_AUTH_KEY',  '0A,$Rp!roRAY+K]*U@j-i%oT>lPsDG~]d#+%2q>h(3S_UAc|Y56R=;o%9I,=Y&wb');
define('LOGGED_IN_KEY',    '9%UL)s_np<b0r`-ESZ9Ljw7gd#)C@Y%AZPL+:N+l29utIj^y8?Z)AV&p8TweE4@/');
define('NONCE_KEY',        'J!MCZ+F_~W#erFb#)(P3+La~)-nk#9%?-D6kQ$Q=XuV[fJKb|E^{+^KIfJh^px!4');
define('AUTH_SALT',        'q?_:>z1`kgv|I:SF-m|RV8FlXl2n4IneAGmShN&??JTPz~Abzne)_9x,dodr@`J?');
define('SECURE_AUTH_SALT', 'T;r[+5DV/6P?y?).<[/)Naa$]=s}UB0-6-vPye[5F*z?^b= e%8FT9SOFOO9^`-C');
define('LOGGED_IN_SALT',   '6p-?c%FqsB%`X]AxDEMvTPC@c|Y(C?o@G+A)1Qk$^zbN1ZUNfA!`sq-*#eBw=BZ|');
define('NONCE_SALT',       'TM4Zk::LrvCYUX{SR^&EGW-o!~Ul|5-(U>F GW->vZP*9YIGTjI==FC=$^OUb)ie');

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
