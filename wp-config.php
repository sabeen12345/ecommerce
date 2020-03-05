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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'Pr:[w{qlhn{ 41:*?6Q4`~N~Q^[_3K%&[P_F9vOoR3G]gKXx?4s)(lkw9!n^c<@s' );
define( 'SECURE_AUTH_KEY',  'DS[`S^H40S.hQhqRST[u+G*Xrw*^w882U7g5[@%y5eN(3/Z:.FEtm~2|z7vF^lTO' );
define( 'LOGGED_IN_KEY',    'eFhuDz U<6X+^PCz1T~IeRD;MmHZE/A?F_$><9D$:XdA(W<QhW@)Dz+5s{uh|2du' );
define( 'NONCE_KEY',        'Lq+d>4%?7vX};:^a1Ede^@[rj`tRM>YI}nJ}In:{Snt@CmGV%{QMGtR$iseeQ.7g' );
define( 'AUTH_SALT',        's1~h<I?Dk1nF#H.I,V=ZbD3-&zHajZ3`XkRUQz7s^hT|6!`xGVd<URLoIp $Yz+0' );
define( 'SECURE_AUTH_SALT', '!.M[<msQ^%@X /$?S,M>Oi,SRofw|834AcH^71$5s[5Nx O{>/RE}@6Qo.;@s!Qd' );
define( 'LOGGED_IN_SALT',   'QmScsUS;LvAUB5VVZM%|YjDT1W^ q$$|oab>A]v**>G?yh9Hg:t7.<50]ycD pFE' );
define( 'NONCE_SALT',       'P.0mosj8,L%#D5-}e)i#j_qNFmPtC_GeR`OdA*!e).r3{%)JPNvKg!VID>@E*ojK' );

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);