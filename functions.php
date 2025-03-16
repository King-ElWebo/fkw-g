<?php
function mein_theme_enqueue_assets() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        array(), // Keine Abhängigkeiten
        null     // Automatische Version
    );

    // Haupt-Theme CSS (style.css im Theme-Ordner)
    wp_enqueue_style(
        'mein-theme-style',
        get_stylesheet_uri(),
        array('bootstrap-css'),
        filemtime(get_stylesheet_directory() . '/style.css'),
        'all'
    );

    // Bootstrap JS mit Popper.js (für Dropdowns, Modals etc.)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        null,
        true
    );
}
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'  => 'Website Einstellungen',
        'menu_title'  => 'Website Einstellungen',
        'menu_slug'   => 'website-einstellungen',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ]);
}


add_action('wp_enqueue_scripts', 'mein_theme_enqueue_assets');
?>