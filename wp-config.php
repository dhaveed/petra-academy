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
define( 'DB_NAME', 'mactavi1_wp126' );

/** MySQL database username */
define( 'DB_USER', 'mactavi1_wp126' );

/** MySQL database password */
define( 'DB_PASSWORD', '1,RM]GN&0~_k' );

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
define( 'AUTH_KEY',         '/xH=Z)v&)p~cB=<nv7J6m_Abl]f7U2#?oX/]!5$q#P*N3jov0{j:!l5v,#<2>dcZ' );
define( 'SECURE_AUTH_KEY',  '??c>O(S6zM!_`Ko6Ybj3.{TvjG}yDMlaA8s+o?GVo1Hqre{Zc+%Errzt7@dd !rr' );
define( 'LOGGED_IN_KEY',    'Kq8/sW h0Co2`g~I&0HZ|)_4%LWsM3=f1#vm7dXa|hn33%f/*w2Y@iwXb<y&k_Ni' );
define( 'NONCE_KEY',        'Vj8iITU(gYgG*h&yOD7$e?Z&jkI,Jeg7Q#WD^6A?K,s#^KWI+XEPH$gk_:amc)]F' );
define( 'AUTH_SALT',        'N?X|hTJ1.aY(PIHtGL^87~>heHK$itMEH025{3+SjLHz[s_(Q`{p+IFy`7am^Qk<' );
define( 'SECURE_AUTH_SALT', 'S%Vn%lz@wiaZuvwM#aiWeN<,S9,Hgb3M]}cNVV*GjWUt{|sD;RQHsY_u8.Q|;:G+' );
define( 'LOGGED_IN_SALT',   'Y4hgVes?p^#f)~?B`&[15z5O@Xg}$ %zKpG<23 @ZaQ*=F(s-W24? 8P![KG~dDn' );
define( 'NONCE_SALT',       '=Cmt}J^/5W-uf-xA`C2H`Yj_D#9#j{Ss^42Va?hTMnE|=u{.6PNYx}{Uxcey}U8W' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq4_';

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
