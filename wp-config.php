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
define( 'DB_NAME', 'fekuhaar_wp763' );

/** MySQL database username */
define( 'DB_USER', 'fekuhaar_wp763' );

/** MySQL database password */
define( 'DB_PASSWORD', '!ES7d]]up5.52z' );

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
define( 'AUTH_KEY',         'odltbjq4mybjjqosjl5mahg3j9sqrmpipeua6enzxthite5rcjmxfyemhkmeoipq' );
define( 'SECURE_AUTH_KEY',  'ixj91dcejq9jqj3lwn0xjwsdnlbl8wd20n5va65f9uwwcswzmtxuhmwqqcey0klu' );
define( 'LOGGED_IN_KEY',    'hgbatdyypixxwgxkrk2wmw8raprwqozpivlqfjsowsm4zoevmlsxzbtrk5uhesia' );
define( 'NONCE_KEY',        'hdovcjlvqndxrbd0xjut71e1vhireps2o046i9boyzgjepfkezvropmts3txfead' );
define( 'AUTH_SALT',        'ztrqcw1hn1qrptv2oontyyyogub2xvgoblypre7ue5knqol6omy6g4m8depkxeeh' );
define( 'SECURE_AUTH_SALT', 'jvyry8kknt3bkqgp1nad4hzkppdslzy1tdhsbtl6y39eqbhdlduhobchyjoxp3ob' );
define( 'LOGGED_IN_SALT',   'qq8bbqh3yukckg6wz5hw4rodfw1dvocfhnpmtllumydchgrg7vchzjzso3unymyw' );
define( 'NONCE_SALT',       'k7bhgn0v4xmbczuss3vzomzwyoti0sg7gblnvge1uqfecbb56lo7quxyf0c09wg9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkv_';

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
