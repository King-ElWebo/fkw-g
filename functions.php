<?php
/**
 * Funktionen und Definitionen für Mein-Theme (FKW-G)
 * Friedrich-Karl-Weniger Gesellschaft
 */

if (!defined('ABSPATH')) {
    // Falls direkt aufgerufen (z.B. Syntax-Test)
}

function mein_theme_setup() {
    // Unterstützung für automatische Title-Tags
    add_theme_support('title-tag');

    // Beitragsbilder
    add_theme_support('post-thumbnails');

    // HTML5-Unterstützung für moderne Semantik
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Responsive Embeds
    add_theme_support('responsive-embeds');

    // Menüs registrieren
    register_nav_menus(array(
        'hauptmenu' => 'Hauptmenü Navigation',
        'footermenu' => 'Footer Navigation'
    ));
}
add_action('after_setup_theme', 'mein_theme_setup');

function mein_theme_enqueue_assets() {
    // Google Fonts (Merriweather für würdevolle Überschriften)
    wp_enqueue_style(
        'fkw-fonts',
        'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap',
        array(),
        null
    );

    // Bootstrap 5.3 CSS (lokal für DSGVO-Konformität und Ausfallsicherheit, Fallback auf CDN)
    $local_bs_css = get_template_directory() . '/assets/css/bootstrap.min.css';
    $bs_css_url = file_exists($local_bs_css) 
        ? get_template_directory_uri() . '/assets/css/bootstrap.min.css' 
        : 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';

    wp_enqueue_style(
        'bootstrap-css',
        $bs_css_url,
        array(),
        '5.3.3'
    );

    // Haupt-Theme CSS (style.css im Theme-Ordner mit Cache-Busting via filemtime)
    $style_file = get_stylesheet_directory() . '/style.css';
    $style_ver = file_exists($style_file) ? filemtime($style_file) : '2.0.0';
    wp_enqueue_style(
        'mein-theme-style',
        get_stylesheet_uri(),
        array('bootstrap-css', 'fkw-fonts'),
        $style_ver,
        'all'
    );

    // Bootstrap 5.3 JS mit Popper.js (im Footer)
    $local_bs_js = get_template_directory() . '/assets/js/bootstrap.bundle.min.js';
    $bs_js_url = file_exists($local_bs_js) 
        ? get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js' 
        : 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';

    wp_enqueue_script(
        'bootstrap-js',
        $bs_js_url,
        array(),
        '5.3.3',
        true
    );

    // Eigenes schlankes Vanilla-JavaScript (im Footer)
    $js_file = get_template_directory() . '/assets/js/main.js';
    $js_ver = file_exists($js_file) ? filemtime($js_file) : '2.0.0';
    wp_enqueue_script(
        'fkw-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $js_ver,
        true
    );
}
add_action('wp_enqueue_scripts', 'mein_theme_enqueue_assets');

// ACF Options Page (erhalten)
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'  => 'Website Einstellungen',
        'menu_title'  => 'Website Einstellungen',
        'menu_slug'   => 'website-einstellungen',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ]);
}

/**
 * Hilfsfunktion: Prüft aktive Seite für Navigations-Zustände (aria-current & active-Klasse)
 */
function fkw_nav_active_attr($slug) {
    if (is_front_page() && ($slug === '/' || $slug === 'home' || $slug === '')) {
        return ' class="nav-link active" aria-current="page"';
    }
    if (is_page($slug)) {
        return ' class="nav-link active" aria-current="page"';
    }
    // Fallback: URL-Vergleich
    $current_uri = trim($_SERVER['REQUEST_URI'] ?? '', '/');
    if ($current_uri === trim($slug, '/')) {
        return ' class="nav-link active" aria-current="page"';
    }
    return ' class="nav-link"';
}

/**
 * Hilfsfunktion: Generiert Monogramm/Initialen aus Personennamen (z.B. Dr. Sabine Rödler -> SR)
 */
function fkw_get_monogram($name) {
    if (empty($name)) return 'FKW';
    // Entferne akademische Titel wie Dr., Mag., etc. für Initialen
    $clean_name = preg_replace('/^(Dr\.|Mag\.|Prof\.|Ing\.|Dipl\.-Ing\.|BSc|MSc)\s+/i', '', trim($name));
    $parts = explode(' ', $clean_name);
    $initials = '';
    $sub = function($str, $start, $len) {
        return function_exists('mb_substr') ? mb_substr($str, $start, $len) : substr($str, $start, $len);
    };
    if (count($parts) >= 2) {
        $initials = $sub($parts[0], 0, 1) . $sub(end($parts), 0, 1);
    } else {
        $initials = $sub($clean_name, 0, 2);
    }
    return strtoupper($initials);
}

/**
 * Universeller ACF-Bild-Quellpfad-Helper:
 * Unterstützt Array (['url']), Attachment-ID (numerisch) oder String-URL
 */
function fkw_get_image_src($field, $default = '') {
    if (empty($field)) return $default;
    if (is_array($field) && !empty($field['url'])) {
        return $field['url'];
    }
    if (is_numeric($field)) {
        $url = function_exists('wp_get_attachment_image_url') ? wp_get_attachment_image_url((int)$field, 'large') : '';
        return $url ?: $default;
    }
    if (is_string($field) && trim($field) !== '') {
        return $field;
    }
    return $default;
}

/**
 * Universeller ACF-Bild-Alt-Text-Helper:
 * Liefert den Alt-Text aus Array, Attachment-Metadaten oder Fallback
 */
function fkw_get_image_alt($field, $default = '') {
    if (empty($field)) return $default;
    if (is_array($field) && !empty($field['alt'])) {
        return $field['alt'];
    }
    if (is_numeric($field) && function_exists('get_post_meta')) {
        $alt = get_post_meta((int)$field, '_wp_attachment_image_alt', true);
        if (!empty($alt)) return $alt;
    }
    return $default;
}

/**
 * Flexibler Inhalts-Renderer für Text- und Textarea-/WYSIWYG-Felder:
 * Gibt formatiertes HTML (falls HTML-Tags enthalten) oder sauberes nl2br() aus
 */
function fkw_render_content($content, $default = '') {
    $text = !empty($content) ? $content : $default;
    if (empty($text)) return '';
    // Enthält der Text HTML-Tags?
    if (preg_match('/<[a-z][\s\S]*>/i', $text)) {
        return function_exists('wp_kses_post') ? wp_kses_post($text) : $text;
    }
    return nl2br(function_exists('esc_html') ? esc_html($text) : htmlspecialchars($text, ENT_QUOTES, 'UTF-8'));
}

/**
 * Button-Link-Helper:
 * Bereinigt und formatiert Links (z.B. "#wir", "wir", "/was-wir-tun" oder externe Links)
 */
function fkw_esc_button_link($link, $default = '#') {
    if (empty($link)) return $default;
    $trimmed = trim($link);
    if ($trimmed === '' || $trimmed === '#') return $default;
    // Wenn reiner Anker ohne Hash übergeben wurde (z.B. "vision" oder "wir")
    if (preg_match('/^[a-zA-Z0-9_\-]+$/', $trimmed)) {
        // Prüfe ob bekannter interner Slug oder reiner Sprunganker
        $known_slugs = ['vision', 'was-wir-tun', 'geschichte', 'ueber-uns', 'mitglied-werden', 'download', 'spenden', 'news', 'statuten', 'impressum', 'datenschutz'];
        if (in_array(strtolower($trimmed), $known_slugs)) {
            return function_exists('home_url') ? esc_url(home_url('/' . strtolower($trimmed))) : '/' . strtolower($trimmed);
        }
        return '#' . $trimmed;
    }
    if (strpos($trimmed, '#') === 0 || strpos($trimmed, '/') === 0 || preg_match('/^https?:\/\//i', $trimmed) || strpos($trimmed, 'mailto:') === 0) {
        return function_exists('esc_url') ? esc_url($trimmed) : $trimmed;
    }
    return function_exists('esc_url') ? esc_url($trimmed) : $trimmed;
}

/**
 * SEO & Schema.org Structured Data
 */
function fkw_output_seo_and_schema() {
    // Nur ausgeben, wenn kein dediziertes SEO-Plugin aktiv ist
    if (defined('WPSEO_VERSION') || class_exists('RankMath') || defined('AIOSEO_VERSION')) {
        return;
    }

    $site_name = 'Friedrich-Karl-Weniger Gesellschaft (FKW-G)';
    $site_desc = 'Gemeinnütziger Verein zur Förderung von Verbesserungen im System der Pflege daheim mit Schwerpunkt 24h-Betreuung in Österreich.';
    $page_desc = $site_desc;

    if (is_page('vision')) {
        $page_desc = 'Unsere Vision: Pflege daheim und 24h-Betreuung in Österreich leistbar, würdevoll und machbar für Familien gestalten.';
    } elseif (is_page('was-wir-tun')) {
        $page_desc = 'Was wir tun: Unterstützung bei der Suche nach Pflegelösungen, Aufzeigen von Missständen und gemeinsame Hilfestellung für Betroffene.';
    } elseif (is_page('geschichte')) {
        $page_desc = 'Unsere Geschichte: Warum Friedrich Karl Weniger und persönliche Pflegeerfahrung der Anlass für die Vereinsgründung waren.';
    } elseif (is_page('ueber-uns')) {
        $page_desc = 'Über uns: Das Team und der Vorstand der Friedrich-Karl-Weniger Gesellschaft rund um Präsidentin Dr. Sabine Rödler.';
    } elseif (is_page('mitglied-werden')) {
        $page_desc = 'Kostenlose Mitgliedschaft in der Friedrich-Karl-Weniger Gesellschaft: Gemeinsam die Anliegen pflegender Angehöriger stärken.';
    } elseif (is_page('download')) {
        $page_desc = 'Tipps & Infos: Offizielle Anträge für Pflegegeld, Behindertenpass, Parkausweis und Leitfäden zur 24h-Betreuung in Österreich.';
    } elseif (is_page('spenden')) {
        $page_desc = 'Spendenkonto der FKW-G: Unterstützen Sie unsere unabhängige, gemeinnützige Arbeit für pflegende Angehörige (Bank Austria IBAN AT22 1200 0100 4406 6537).';
    } elseif (is_page('statuten')) {
        $page_desc = 'Die offiziellen Statuten des Vereins Friedrich-Karl-Weniger Gesellschaft (ZVR: 1102604139).';
    }

    echo '<meta name="description" content="' . esc_attr($page_desc) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr(wp_get_document_title()) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($page_desc) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";

    // JSON-LD Organization Schema
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'NGO',
        'name' => 'Friedrich-Karl-Weniger Gesellschaft',
        'alternateName' => 'FKW-G',
        'description' => $site_desc,
        'url' => home_url('/'),
        'logo' => get_template_directory_uri() . '/assets/images/LOGO_Verein_Weniger_Reinzeichnung_Pfade.png',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Hütteldorfer Straße 248',
            'addressLocality' => 'Wien',
            'postalCode' => '1140',
            'addressCountry' => 'AT'
        ],
        'email' => 'team@fkw-g.at',
        'identifier' => [
            '@type' => 'PropertyValue',
            'name' => 'ZVR-Zahl',
            'value' => '1102604139'
        ]
    ];
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'fkw_output_seo_and_schema', 1);
?>