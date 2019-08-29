<?php
define('CONCATENATE_SCRIPTS', false);
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define('DB_NAME', 'taksttest');

/** MySQL database username */
define('DB_USER', 'idiumtaksttest');

/** MySQL database password */
define('DB_PASSWORD', 'Jq7Xaap7x4vcqY9f');

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
define('AUTH_KEY',         'dZH57asj6SzqEJt&wIrU-{J*PA:ky9&pd>&<?qkeg@<6K-`M`nUJL_4&ean,X^MI');
define('SECURE_AUTH_KEY',  '13,=6;RLh+)ZsYV[og{)!eC<AcfQh3VsNNrs&>Xq;46`r6!FbJ^!W,j!F?-JR0-*');
define('LOGGED_IN_KEY',    ']!9Sgi>1c%KMs+XF?da?fX,j=f()9S5SM%nCVe+[=x2HnwVd*A?_v`K>N$@es?Hi');
define('NONCE_KEY',        'G#AN/~.=N2HrFv>Wf8zL bs74or!i$N7d7-EJ[2AG$rCl,R)$UdHQ4$J:r?o!RF,');
define('AUTH_SALT',        '=i$y`Y^YpbdhYa<f=3LEi)NY6|AA:&:6ML&8p=Vk.C2m~>P8Cs_eTdxCUP1Wp_Ce');
define('SECURE_AUTH_SALT', 'sRp4Ou4YUu;]kYe;$]p f@wClgYH!3T+*;u&#sx}9c!kJ(4W(I8D[D`&yhiT/x!G');
define('LOGGED_IN_SALT',   '`}K8JNP<?W-EgUy.kku/Nb&*:ZQeCv<k#<xs<e3uoY6(?:84FA+f>/yU@z8~`hk1');
define('NONCE_SALT',       ',q6SvU;f8GhSh#r14ft&+p;#$j6x.OqkKU|!!y~uQ%tGziR3ZSw$gD;#0bQrn6jW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '34UyQOp1EU_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');