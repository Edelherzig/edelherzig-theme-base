<?php
/**
 * Edelherzig-spezifische Anpassungen
 *
 * @package Edelherzig_Base
 */

/**
 * Theme Setup
 */
function edelherzig_base_setup() {
    // Text Domain laden
    load_theme_textdomain( 'edelherzig-base', EDELHERZIG_BASE_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'edelherzig_base_setup' );

/**
 * Eigene Assets enqueuen
 */
function edelherzig_base_enqueue_assets() {
    // Eigenes Stylesheet (nach EDELHERZIG)
    wp_enqueue_style(
        'edelherzig-base-custom',
        EDELHERZIG_BASE_URI . '/assets/css/edelherzig-custom.css',
        array( 'edelherzig-style' ),
        EDELHERZIG_BASE_VERSION
    );

    // Eigenes JavaScript
    wp_enqueue_script(
        'edelherzig-base-custom',
        EDELHERZIG_BASE_URI . '/assets/js/edelherzig-custom.js',
        array(),
        EDELHERZIG_BASE_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'edelherzig_base_enqueue_assets', 20 );

/**
 * Editor-Einschränkungen
 */
function edelherzig_base_editor_settings( $settings ): array
{
    // Custom Farben deaktivieren
    $settings['__experimentalFeatures']['color']['custom'] = false;
    $settings['__experimentalFeatures']['color']['customGradient'] = false;

    // Custom Font-Größen deaktivieren
    $settings['__experimentalFeatures']['typography']['customFontSize'] = false;

    // Custom Spacing deaktivieren
    $settings['__experimentalFeatures']['spacing']['customSpacingSize'] = false;

    return $settings;
}
add_filter( 'block_editor_settings_all', 'edelherzig_base_editor_settings' );

/**
 * Inline-Styles cleanup
 */
function edelherzig_base_cleanup_inline_styles() {
    // Hier später weitere Optimierungen
}
add_action( 'wp_enqueue_scripts', 'edelherzig_base_cleanup_inline_styles', 999 );
