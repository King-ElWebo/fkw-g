<?php
/**
 * Template Name: Download
 * 
 * Template for FKW-G Download & Document Library page.
 * Preserves ACF field: seiteninhalt and transforms all document links into
 * accessible, structured cards with instant search and clear file type badges.
 */

get_header();
$page_id = get_queried_object_id();
$seiteninhalt = get_field('seiteninhalt', $page_id);
if (empty($seiteninhalt)) {
    $seiteninhalt = get_the_content();
}
?>

<?php if (current_user_can('edit_posts')) : ?>
    <div class="position-fixed top-0 end-0 m-3" style="z-index: 9999;">
        <a href="<?php echo esc_url(admin_url('post.php?post=' . $page_id . '&action=edit')); ?>" class="btn btn-sm btn-dark shadow-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg> Seite bearbeiten
        </a>
    </div>
<?php endif; ?>

<div class="fkw-editorial-page">
    <!-- Header / Hero -->
    <header class="fkw-page-header py-5 bg-white border-bottom">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <span class="fkw-badge mb-3">Dokumente &amp; Formulare</span>
                    <h1 class="fkw-page-title mb-3"><?php the_title(); ?></h1>
                    <p class="fkw-lead-text mx-auto mb-4" style="max-width: 760px;">
                        Offizielle Vereinsunterlagen der Friedrich-Karl-Weniger Gesellschaft, Antragsformulare für Pflegegeld in Österreich sowie Merkblätter und Leitfäden zur 24h-Betreuung.
                    </p>
                    
                    <!-- Instant Search Bar -->
                    <div class="mx-auto" style="max-width: 580px;">
                        <div class="input-group input-group-lg shadow-sm">
                            <span class="input-group-text bg-white border-end-0 text-muted">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            </span>
                            <input type="search" 
                                   id="docSearchInput" 
                                   class="form-control border-start-0 ps-0" 
                                   placeholder="Dokument oder Stichwort suchen..." 
                                   aria-label="Dokumente durchsuchen">
                        </div>
                        <div class="form-text text-muted text-start mt-2 small">
                            Tipp: Filtern Sie z.&nbsp;B. nach <em>Statuten</em>, <em>Mitglied</em>, <em>Pflegegeld</em>, <em>PVA</em> oder <em>SVS</em>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Section: Render ACF seiteninhalt with auto-card formatting -->
    <section class="py-5 bg-warm-light">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php if (!empty($seiteninhalt)): ?>
                        <div class="fkw-acf-downloads-wrap">
                            <?php echo wp_kses_post($seiteninhalt); ?>
                        </div>
                    <?php else: ?>
                        <!-- Fallback Document Library if ACF is not populated -->
                        <div class="row g-4">
                            <!-- Vereinsdokumente -->
                            <div class="col-md-6 js-doc-item">
                                <div class="fkw-doc-card">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="doc-badge-pdf">PDF</span>
                                            <span class="text-muted small">Vereinsunterlage</span>
                                        </div>
                                        <h3 class="h5 fw-bold text-navy mb-2">Mitgliedsantrag FKW-G</h3>
                                        <p class="text-secondary small mb-3">Kostenlose Beitrittserklärung zur Friedrich-Karl-Weniger Gesellschaft.</p>
                                    </div>
                                    <a href="<?php echo esc_url(get_template_directory_uri() . '/pdf/mitglied.pdf'); ?>" download class="btn btn-fkw-primary w-100">
                                        Herunterladen (PDF)
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 js-doc-item">
                                <div class="fkw-doc-card">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="doc-badge-pdf">PDF</span>
                                            <span class="text-muted small">Vereinsunterlage</span>
                                        </div>
                                        <h3 class="h5 fw-bold text-navy mb-2">Vereinsstatuten FKW-G</h3>
                                        <p class="text-secondary small mb-3">Offizielle Satzung mit Präambel und Vereinszweck.</p>
                                    </div>
                                    <a href="<?php echo esc_url(get_template_directory_uri() . '/pdf/Statuten mit Logo-Deckblatt.pdf'); ?>" download class="btn btn-fkw-outline w-100">
                                        Herunterladen (PDF)
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Callout Box -->
    <section class="py-5 bg-white border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="fkw-contact-callout p-4 text-center">
                        <h3 class="h5 fw-bold text-navy mb-2">Benötigen Sie Unterstützung bei einem Antrag?</h3>
                        <p class="text-secondary mb-3">
                            Wenn Sie Fragen zu den Formularen oder zur Einstufung des Pflegegelds haben, stehen wir Ihnen gerne ehrenamtlich zur Seite.
                        </p>
                        <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 mb-2">
                            <span class="fkw-email-badge">
                                <strong>team@fkw-g.at</strong>
                            </span>
                            <button type="button" class="btn-copy js-copy-email" data-email="team@fkw-g.at">
                                Adresse kopieren
                            </button>
                        </div>
                        <span class="copy-feedback" role="status" aria-live="polite">✓ Kopiert!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
get_footer();
