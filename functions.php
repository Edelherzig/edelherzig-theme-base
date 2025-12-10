<?php
/**
 * Edelherzig Base Theme
 *
 * @package Edelherzig_Base
 */

// Theme-Konstanten
const EDELHERZIG_BASE_VERSION = '1.0.0';
define( 'EDELHERZIG_BASE_DIR', get_template_directory() );
define( 'EDELHERZIG_BASE_URI', get_template_directory_uri() );

// Composer Autoloader laden
require_once EDELHERZIG_BASE_DIR . '/vendor/autoload.php';

// Eigene Theme-Funktionen laden
require_once EDELHERZIG_BASE_DIR . '/inc/edelherzig-customizations.php';

/**
 * Core bootstrap aufrufen
 * Composer übernimmt das Laden aller Edelherzig-Klassen automatisch
 */
if ( function_exists( 'Edelherzig\bootstrap' ) ) {
    Edelherzig\bootstrap();
}
