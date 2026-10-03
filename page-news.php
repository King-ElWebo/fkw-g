<?php
/**
 * Template Name: News Seite
 * 
 * Template for FKW-G News & Reports page.
 * Preserves the full ACF news loop (titel_1..15, text_1..15, bild_{1..15}a..h)
 * and ensures readable, left-aligned typography with responsive image galleries.
 */

get_header();
$page_id = get_queried_object_id();
?>

<?php if (current_user_can('edit_pages')) : ?>
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
                    <span class="fkw-badge mb-3">Aktuelles &amp; Einblicke</span>
                    <h1 class="fkw-page-title mb-3">Neuigkeiten &amp; Berichte</h1>
                    <p class="fkw-lead-text mx-auto" style="max-width: 760px;">
                        Veranstaltungen, Aktivitäten und aktuelle Informationen rund um den Verein und Entwicklungen im Bereich der 24h-Betreuung und Pflege daheim.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- News Content Section -->
    <section class="py-5 bg-warm-light">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php 
                    $has_articles = false;
                    for ($i = 1; $i <= 15; $i++): 
                        $titel = get_field("titel_$i", $page_id);
                        $text = get_field("text_$i", $page_id);
                        $bilder = [
                            get_field("bild_{$i}a", $page_id),
                            get_field("bild_{$i}b", $page_id),
                            get_field("bild_{$i}c", $page_id),
                            get_field("bild_{$i}d", $page_id),
                            get_field("bild_{$i}e", $page_id),
                            get_field("bild_{$i}f", $page_id),
                            get_field("bild_{$i}g", $page_id),
                            get_field("bild_{$i}h", $page_id),
                        ];
                        $valid_bilder = array_filter($bilder, function($b) {
                            return !empty($b) && isset($b['url']);
                        });

                        if (!empty($titel) || !empty($text) || !empty($valid_bilder)):
                            $has_articles = true;
                    ?>
                        <article class="news-article-card mb-5">
                            <header class="mb-4">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-danger-subtle text-danger px-3 py-1 rounded-pill small fw-semibold">
                                        Vereinsbericht
                                    </span>
                                </div>
                                <?php if (!empty($titel)): ?>
                                    <h2 class="news-title h3 fw-bold text-navy mb-0">
                                        <?php echo esc_html($titel); ?>
                                    </h2>
                                <?php endif; ?>
                            </header>

                            <?php if (!empty($valid_bilder)): ?>
                                <div class="news-gallery mb-4">
                                    <?php foreach ($valid_bilder as $bild): ?>
                                        <figure class="m-0">
                                            <img src="<?php echo esc_url($bild['url']); ?>" 
                                                 alt="<?php echo esc_attr(!empty($bild['alt']) ? $bild['alt'] : ($titel ?: 'Bild zum Beitrag')); ?>" 
                                                 class="img-fluid rounded" 
                                                 loading="lazy">
                                            <?php if (!empty($bild['caption'])): ?>
                                                <figcaption class="small text-muted mt-1 fst-italic">
                                                    <?php echo esc_html($bild['caption']); ?>
                                                </figcaption>
                                            <?php endif; ?>
                                        </figure>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($text)): ?>
                                <div class="fkw-prose">
                                    <?php echo wp_kses_post($text); ?>
                                </div>
                            <?php endif; ?>
                        </article>
                    <?php 
                        endif;
                    endfor; 
                    ?>

                    <?php if (!$has_articles): ?>
                        <div class="card p-5 text-center bg-white border shadow-sm">
                            <div class="mb-3 text-muted">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 20H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h10l6 6v10a2 2 0 0 1-2 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                            </div>
                            <h3 class="h4 fw-bold text-navy mb-2">Aktuell keine Beiträge hinterlegt</h3>
                            <p class="text-secondary mb-0">Neue Mitteilungen und Termine werden hier veröffentlicht.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
get_footer();
