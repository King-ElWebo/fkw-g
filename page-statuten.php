<?php
/**
 * Template Name: Statuten
 * 
 * Template for FKW-G Official Association Statutes.
 * Preserves all ACF fields: statuten_bild_1, statuten_bild_2, statuten_text_1, statuten_text_2
 * and provides verified PDF download link.
 */

get_header();
$page_id = get_queried_object_id();

$bild1 = get_field('statuten_bild_1', $page_id);
$bild2 = get_field('statuten_bild_2', $page_id);
$text1 = get_field('statuten_text_1', $page_id);
$text2 = get_field('statuten_text_2', $page_id);
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
                    <span class="fkw-badge mb-3">Rechtliche Grundlagen</span>
                    <h1 class="fkw-page-title mb-3">Vereinsstatuten</h1>
                    <p class="fkw-lead-text mx-auto" style="max-width: 760px;">
                        Statuten der Friedrich-Karl-Weniger Gesellschaft zur Förderung von Verbesserungen im System der „Pflege daheim“ mit Schwerpunkt 24h-Betreuung.
                    </p>
                    <div class="mt-4">
                        <a href="<?php echo esc_url(get_template_directory_uri() . '/pdf/Statuten mit Logo-Deckblatt.pdf'); ?>" 
                           download="Statuten mit Logo-Deckblatt.pdf" 
                           class="btn btn-fkw-primary px-4 py-2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            Statuten als PDF herunterladen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Optional Images Gallery -->
    <?php if ((!empty($bild1) && isset($bild1['url'])) || (!empty($bild2) && isset($bild2['url']))): ?>
        <section class="py-4 bg-warm-light border-bottom">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <?php if (!empty($bild1) && isset($bild1['url'])): ?>
                        <div class="col-md-5 text-center">
                            <img src="<?php echo esc_url($bild1['url']); ?>" 
                                 alt="<?php echo esc_attr(!empty($bild1['alt']) ? $bild1['alt'] : 'Statuten Dokument Seite 1'); ?>" 
                                 class="img-fluid rounded shadow-sm border" 
                                 style="max-height: 420px; object-fit: contain;">
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($bild2) && isset($bild2['url'])): ?>
                        <div class="col-md-5 text-center">
                            <img src="<?php echo esc_url($bild2['url']); ?>" 
                                 alt="<?php echo esc_attr(!empty($bild2['alt']) ? $bild2['alt'] : 'Statuten Dokument Seite 2'); ?>" 
                                 class="img-fluid rounded shadow-sm border" 
                                 style="max-height: 420px; object-fit: contain;">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Full Statute Text Content -->
    <section class="py-5 bg-white">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- Präambel Callout -->
                    <?php if (!empty($text2)): ?>
                        <div class="p-4 p-md-5 rounded-3 border bg-warm-light mb-5">
                            <span class="badge bg-secondary-subtle text-dark border px-3 py-1 mb-3 text-uppercase fw-bold small">
                                Präambel
                            </span>
                            <div class="fkw-prose fst-italic">
                                <?php echo nl2br(esc_html($text2)); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Statutentext -->
                    <?php if (!empty($text1)): ?>
                        <div class="fkw-prose">
                            <h2 class="h3 fw-bold text-navy mb-4 pb-2 border-bottom">Wortlaut der Vereinsstatuten</h2>
                            <div class="lh-lg">
                                <?php echo nl2br(esc_html($text1)); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Bottom PDF Download Bar -->
                    <div class="statuten-download-card">
                        <h3 class="h4 fw-bold mb-2">Statuten als PDF herunterladen</h3>
                        <p class="text-muted mb-3" style="max-width: 56ch; margin-left: auto; margin-right: auto;">
                            Die offiziellen Vereinsstatuten der Friedrich-Karl-Weniger Gesellschaft stehen Ihnen als druckbares PDF mit Deckblatt zur Verfügung.
                        </p>
                        <a href="<?php echo esc_url(get_template_directory_uri() . '/pdf/Statuten mit Logo-Deckblatt.pdf'); ?>" 
                           download="Statuten mit Logo-Deckblatt.pdf" 
                           class="btn btn-danger btn-lg">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            Statuten als PDF herunterladen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
get_footer();
