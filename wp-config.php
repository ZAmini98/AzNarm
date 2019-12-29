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
define( 'DB_NAME', 'Photography' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'p|k9==nax+-5_+j 92qtsOq!-$wGH0%%gcq(PZ]W-jb-r7dj)T[81k4[O$4.AH 1');
define('SECURE_AUTH_KEY',  '---<m<{sLDeFm;qBLg+q-:L&jjRju>+}/ 7?ab-rmVD4b4*pe-RI-2BcTE!Rhsh6');
define('LOGGED_IN_KEY',    'TSUif^[%rRH 8`ETPy$Lj5+/+gY$Ei)ikW_Hn8(b}AXv P$;#63v^x2[73om[&k]');
define('NONCE_KEY',        'qpY3z%+UT,|+QRgmncUj*|![&Iw|uu-$=t_sEoIuy,YLE$4d{Z+rRDC`9Wv[0Kcy');
define('AUTH_SALT',        '|G*z<`?CB6U1gQuHv!Lb)nJ$M+=NVi>DlG>nAS_oJ&j-T_AMHHu_F$Y$)3|HCO|-');
define('SECURE_AUTH_SALT', 'Xld|*+W`.P>2R<,0Xz^ROxjYAn56f@,;{nA1{CG?ye@jA%<|.PIfe-V[2`ACy2A8');
define('LOGGED_IN_SALT',   '8vw@8c_un S-9pLw#DXA-;B2Gh,;o0+06lr%OsC(v7}jdd=?[t9:Vo`H| C)0:_K');
define('NONCE_SALT',       ']oh43t;2_.MZu?r.pD$,:/VsruX:]W{;z6^%evnj(y>72U?q|@A%_S]*$*sZSNO%');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pdb_';

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
