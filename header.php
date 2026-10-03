<?php
/**
 * Header Template für FKW-G
 * Friedrich-Karl-Weniger Gesellschaft
 */

$homepage_id = get_option('page_on_front');
$logo_bild = get_field('logo_bild', $homepage_id);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    if (function_exists('burst_statistics_script')) {
        burst_statistics_script();
    }
    ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>

<!-- Skip-Link für Barrierefreiheit / Tastaturnutzer -->
<a class="skip-link" href="#main-content">Zum Hauptinhalt springen</a>

<!-- Obere Service- und Reassurance-Leiste -->
<div class="site-topbar">
    <div class="container d-flex flex-wrap justify-content-between align-items-center py-1">
        <div class="d-flex align-items-center gap-3">
            <span class="d-none d-sm-inline opacity-75">Gemeinnütziger Verein in Österreich</span>
            <span class="badge bg-secondary-subtle text-dark border d-none d-md-inline" style="font-size: 0.75rem;">ZVR: 1102604139</span>
        </div>
        <div class="d-flex align-items-center gap-2 ms-auto" style="font-size: 0.825rem;">
            <span class="d-none d-sm-inline"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><a href="tel:+436763424341">+43 676 3424341</a></span>
            <span class="d-none d-sm-inline text-muted opacity-50">|</span>
            <span><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg><a href="mailto:team@fkw-g.at">team@fkw-g.at</a></span>
        </div>
    </div>
</div>

<!-- Haupt-Header & Navigation -->
<header class="site-header">
    <nav class="navbar navbar-expand-xl" aria-label="Hauptnavigation">
        <div class="container">
            <!-- Vereins-Logo -->
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Friedrich-Karl-Weniger Gesellschaft Startseite">
                <?php 
                $logo_src = fkw_get_image_src($logo_bild, get_template_directory_uri() . '/assets/images/LOGO_Verein_Weniger_Reinzeichnung_Pfade.png');
                $logo_alt = fkw_get_image_alt($logo_bild, 'Friedrich-Karl-Weniger Gesellschaft Logo');
                ?>
                <img src="<?php echo esc_url($logo_src); ?>" alt="<?php echo esc_attr($logo_alt); ?>">
                <span class="navbar-brand-tagline">
                    <strong>FKW-G</strong><br>
                    Für würdevolle Pflege daheim
                </span>
            </a>

            <!-- Mobile Menü-Button -->
            <button class="navbar-toggler d-xl-none" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Navigation umschalten">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menü-Inhalt (Desktop & mobiler Drawer) -->
            <div class="collapse navbar-collapse" id="navbarNav" role="dialog" aria-modal="false" aria-label="Menünavigation">
                <button class="nav-close-btn d-xl-none" type="button" aria-label="Menü schließen">&times;</button>
                
                <ul class="navbar-nav mx-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a<?php echo fkw_nav_active_attr('vision'); ?> href="<?php echo esc_url(home_url('/vision')); ?>">Unsere Vision</a>
                    </li>
                    <li class="nav-item">
                        <a<?php echo fkw_nav_active_attr('was-wir-tun'); ?> href="<?php echo esc_url(home_url('/was-wir-tun')); ?>">Was wir tun</a>
                    </li>
                    <li class="nav-item">
                        <a<?php echo fkw_nav_active_attr('geschichte'); ?> href="<?php echo esc_url(home_url('/geschichte')); ?>">Unsere Geschichte</a>
                    </li>
                    <li class="nav-item">
                        <a<?php echo fkw_nav_active_attr('ueber-uns'); ?> href="<?php echo esc_url(home_url('/ueber-uns')); ?>">Über uns</a>
                    </li>
                    <li class="nav-item">
                        <a<?php echo fkw_nav_active_attr('mitglied-werden'); ?> href="<?php echo esc_url(home_url('/mitglied-werden')); ?>">Mitglied werden</a>
                    </li>
                    <li class="nav-item">
                        <a<?php echo fkw_nav_active_attr('news'); ?> href="<?php echo esc_url(home_url('/news')); ?>">News</a>
                    </li>
                    <li class="nav-item">
                        <a<?php echo fkw_nav_active_attr('download'); ?> href="<?php echo esc_url(home_url('/download')); ?>">Tipps &amp; Infos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:team@fkw-g.at" title="E-Mail an team@fkw-g.at senden">Kontakt</a>
                    </li>
                </ul>

                <div class="nav-actions">
                    <a class="btn btn-danger btn-sm" href="<?php echo esc_url(home_url('/spenden')); ?>">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="me-1" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        Spenden
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Hauptinhaltsbereich -->
<main id="main-content">
