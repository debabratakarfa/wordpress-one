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
define( 'DB_NAME', 'wordpress-two' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3mW%dR}9rWZHRMEo:}bwo0xkBwcCd(d|H<$g,oPHJmz})]a=5vH$U.C}.dUcfH5:' );
define( 'SECURE_AUTH_KEY',   '>2/?4z!hB=<G18+S!*S|rw4&*vX%`xcUiX5>qtSS9Y,No<W-( SkfrG(6$wL-J.5' );
define( 'LOGGED_IN_KEY',     '(jg^g{%Eu&C(epi} nWvmK:F;uu{.`jsP7Uu]wFC3c[,eYnaH+<hKGn#P&4[`a^y' );
define( 'NONCE_KEY',         'pa)<fsiO_t%ePuf wux{6tn][7z[eloL!mEk879QIn?{mekq:i~=t.(}B*fDFzlB' );
define( 'AUTH_SALT',         ',$t9)rI_]Ye?}85nKwmQd{Gq_o?cGxlL6CCR7Kc6#d%L~OF7W9 ,XXLvv&De{8QH' );
define( 'SECURE_AUTH_SALT',  '!zN<dl/N=`%LGL;RFkRdmeq:tn_y~/7iq!qNs&X!hz?aEhX+o~0)xUUG:$Rq#[un' );
define( 'LOGGED_IN_SALT',    'Y%]XESiFrrC/$e!?pQJ77@HmhJ])5(Jr&bff9XFcuHVC!v5W([oz(7;6$N_yd5q$' );
define( 'NONCE_SALT',        'h]=oWBiyYvhVEL)yA DXvP|x{d{K@.Qu$h2W82mZKk4b=d=G=Eqrec:EZnBMdC{!' );
define( 'WP_CACHE_KEY_SALT', 'dPur6Y!O@9(ssQ1.`h]7BhQ!ZT^#D*7*?.[s2fbO|LVtuA0lTZv.t<-xuV{:,`Of' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
