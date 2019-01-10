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
define('DB_NAME', 'babythedude');

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
define('AUTH_KEY',         'pQ*j<} FhPAUBG##c=`p]*+*fKu?aG:<qJ$|R HFr89+j#aHv5L%@uv<%6yh%L-U');
define('SECURE_AUTH_KEY',  ')2No=*D2+Q123f1_Yd,|h[&/UF#>-PhnXgidbl?*L>&&5}] ?iEM;#C+K1Yd%?**');
define('LOGGED_IN_KEY',    '$WYSN~FL9:F>4KG-UCAdf/:)d|Ii0]~g{%bxhY|k}^T-Ms&)$an.npO95nH$6}Sd');
define('NONCE_KEY',        '8-EqiY0Ntdy<.?+,UgO:K3tYp{jQ/iVM&vxKk=JR3G$i6|CRxTQVJVwi];L#[xtN');
define('AUTH_SALT',        'I2O|D*[r 70]=FMRg%reg=1=@muPSw>9;k;-TMOtr3Q8i.sS.9`O@3effq`:sBZR');
define('SECURE_AUTH_SALT', 'D.yQ2W-?o7Z#p.e*.h:epQwHFF0t4y+%7=Bopx:m>#^i x%s.k}0,0[UKz;A+0u^');
define('LOGGED_IN_SALT',   'JQ|9hvA>s72:[tsYskg {U4P}@]t49TKRc$dvX>dF/n_{UURrZ.y%`S~40E~R*fn');
define('NONCE_SALT',       ',+c *xzn)%5x8DSG`FCpiX_Ol%_A_G V:WSI;;5+D$9LIp{Se[Z~nhoHW[v5IHgb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
