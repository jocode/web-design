<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'm2JOUq uSiN%[XGIaZM54@$i;js.V3,iIs]qNfG6*yd_%ikiTGhl-1n{MZT{19.&');
define('SECURE_AUTH_KEY', '0n)6{vfdpNoH#AgG$|9ixRCF#31Es{}^^s%r%_+FVnO2Y0_t.3@cw8,lHIo8zUtZ');
define('LOGGED_IN_KEY', 'eQ;}Kq;Sbc:)^~F]q6R_NtscEr$Q.6}Sl/P4xpYed<fW{#N]2G1Fx14M u|,o_iq');
define('NONCE_KEY', '5W&{q_2!WBZ:-;2D`f&5kD2FcPvg%aF<Cp!1e-i{rrP.@?HOLy@y[CC!:y_S^?DF');
define('AUTH_SALT', '.H(}, U2j0$HXxO {9JxWKjq 4v|q*$:i~szs#~#c[j~^s=Ne,f9nob[X.s/*;fH');
define('SECURE_AUTH_SALT', 'CXr6dHr;7Mg@^@P^[{g-$5Cu~hv7z/h.@X9{H,v~9]fQuKOvGt{6@wiDR6b5V+p>');
define('LOGGED_IN_SALT', 'Y#wXR%?1d+f<S fa$2!>4m&![KG!~*>HW!h?y>M}B7)0*>WKV2|=|s{=7</^%`R[');
define('NONCE_SALT', 'B! 7SF}{{wfE!aq,w$3Sdbj>m=$D;b^]2D}7LsXjN9fSy${UI~*y8`78vKB/j2l8');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

