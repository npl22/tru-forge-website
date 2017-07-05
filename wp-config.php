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
define('DB_NAME', 'truforge_wordpress9c9');

/** MySQL database username */
define('DB_USER', 'truforge_word9c9');

/** MySQL database password */
define('DB_PASSWORD', '9kL89kIJxzvo');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'zO_Z*uKn=(tBdZ(RdUebH=;_LN%c+^j@s}WAa&]_IEI/m)SY<&zt)}wLlQlfLQaoNiZfa}@Qt]&LCo*p_}D{^UVco*Z-zG=VHGioeFIDW{ZB$X+XcquOIEWF)L&RP|=?');
define('SECURE_AUTH_KEY', 'k[de&T+m)AG=AUnCRdr+lhGB&//ptrzzThKBGhEPl&xqbJV!tpZHmKIalxlAkR-%TC+o*+JF=VOyzs|piq$DH^i])!&GjBbFZsEdgsaem;QOeXPG&t|v_jS;R}xsm{}V');
define('LOGGED_IN_KEY', '|Utp>pOK?UMuqu{mAoe$ukqDr)mhI;$vBDUQrYjslt+&Onvk%a)zi!yLVrltnDxrB+}HiaY<]Q>suAgMxTU(tdv=cW[r_{}O$PRJ*p/B}KB]H/|ZI)PbSSAj%&oTEAyB');
define('NONCE_KEY', 'toaf{/CbuKaOK^XR^W[;w)ux?hDt+<Fk&JLJIF&mAv?vMWtLnlkXwA$@s<lnDu?yAvWHi;_n(eHlIYfNp[%dZTa/Do^_cLaJnx!cIkqBL;C^^qBxT/)WqfNx?{-@Jd*X');
define('AUTH_SALT', 'EKx)B@y!wz]*CC=h$pu}(it$CJamVgM/ZzYCSL]MK&mLCs-%}@DqkJ{$dm[l*e%AGjqkt=[a]Us=oqYvuHSg@RRH_FSxU+TXFcjM*nZB+CUIU;Zc$RePOpyspDBOiWWj');
define('SECURE_AUTH_SALT', 'VlH??)_XsjaVVmxUOpi}+in!hb?Fj[%m!]H}uo;(zwr;%=_]aS&MO)HXg$^RFgKL?MqhFAH^o<-Xk>iPQ-OUzl_Wsa*L*gumMXKAmX[qO;h)LCt/l/kslYtQ}vzf&{G&');
define('LOGGED_IN_SALT', 'K|@iSat)FOfhO;*Ky!s)U@;j=Su%/;Vcv@U=YMt+{-TrQUTV(Dkxs}d_Ee^NbrJ@aWrLsuq;*e&wdSqNIUTyS<l]BJ@)sx=bQApPDW@PQHg@|ncAv!!@Y/pJ]jM%M&)r');
define('NONCE_SALT', 'PhKdkN{cEAA[-l^g{j)*(<xrq-EXIEby$zUf^-W${rB<YWYD;zzN)W%=>aaBJ$ES)d^N!+>DX=QdwQ+SIkylF*=-<%@xvW<Ib+!rYnNAG??Jld+qSYu?H$zkoGveuvaH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ndwe_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
