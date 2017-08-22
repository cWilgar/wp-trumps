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
define('DB_NAME', 'cv_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'anT~SE.?u|LL&(Z~f+I<|ZI+z5I-y3joj1P-l8a*S-U6a70P^!<J:J uOR^6Q+s@');
define('SECURE_AUTH_KEY',  '{O/Gyu+TcIyXx;t*;hy5PR4m-qU!+[;acn|v.,Sb+@l>Fd<OSUTO}W+4]<+!BNb)');
define('LOGGED_IN_KEY',    'WW!VFCB$abgLK<s|_:sc5h.1[c<~dWOei(TBg+5BM#$:w|BL B]g}Q6e<IAi<a`!');
define('NONCE_KEY',        '?J3ZFB_^-5bP|yUUqL+>(8KCnQIM$|!]/HK-1*P}y/-V]Zas1O?pF}5B0+4v1<_%');
define('AUTH_SALT',        'q;F >_}$7rCims&A4J0PT^}^IRfoFvPq!CM@!B`n^4>^^(mNpZUMkW29:<aqmt7R');
define('SECURE_AUTH_SALT', 'fGpl]?:=ke{P+Spj|`md($K3?En-?82x*k&Tyhm2:Qqi~~}TI=]&z#2oP#Tu+5m=');
define('LOGGED_IN_SALT',   't^T]RE|+Ff+B+KO+Q}nY8G157H}m%SnEA[FE|pSc[ (/V8D}x4~ebKx3N?#8XLv ');
define('NONCE_SALT',       '(]#~KKSJSu+e!7B(rbWn ]>^LNm1Hk!{wb3(|N*PSs[)r1DAFp;wxA+-@snC~J8n');

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

/**
 * Wordpress URLs. Update WP_LOCALHOST_ADDRESS to match the address where you 
 * will serve this site locally.
 */
define('WP_LOCALHOST_ADDRESS', 'http://localhost:3000');
define('WP_HOME', WP_LOCAL_ADDRESS);
define('WP_SITEURL', WP_LOCAL_ADDRESS . '/wp');

/* That's all, stop editing! Happy blogging. */

