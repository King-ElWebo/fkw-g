<?php
/*
Template Name: Vision Page
*/

get_header();
$page_id = get_queried_object_id();

$uberschrift_1 = get_field('vision_uberschrift_1', $page_id);
$text_1        = get_field('vision_text_1', $page_id);
$bild_1        = get_field('vision_bild_1', $page_id);

$uberschrift_2 = get_field('vision_uberschrift_2', $page_id);
$text_2        = get_field('vision_text_2', $page_id);

$uberschrift_3 = get_field('vision_uberschrift_3', $page_id);
$text_3        = get_field('vision_text_3', $page_id);
$bild_2        = get_field('vision_bild_2', $page_id);

$uberschrift_4 = get_field('vision_uberschrift_4', $page_id);
$text_4        = get_field('vision_text_4', $page_id);

$uberschrift_5 = get_field('vision_uberschrift_5', $page_id);
$text_5        = get_field('vision_text_5', $page_id);
$bild_3        = get_field('vision_bild_3', $page_id);
?>

<?php if (current_user_can('edit_posts')) : ?>
    <div class="container mt-2">
        <a href="<?php echo esc_url(admin_url('post.php?post=' . $page_id . '&action=edit')); ?>" class="btn btn-outline-secondary btn-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1" aria-hidden="true"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            Seite bearbeiten
        </a>
    </div>
<?php endif; ?>

<!-- Seiten-Header -->
<section class="section-compact" style="background-color: var(--fkw-surface-subtle); border-bottom: 1px solid var(--fkw-border);">
    <div class="container py-3">
        <nav aria-label="Breadcrumb" class="small text-muted mb-2">
            <a href="<?php echo esc_url(home_url('/')); ?>">Startseite</a> &rsaquo; <span>Unsere Vision</span>
        </nav>
        <h1 class="mb-2">Unsere Vision</h1>
        <p class="lead mb-0" style="max-width: 65ch;">
            Würdevolle, sichere und bezahlbare Pflege zu Hause &ndash; heute und für die Generationen von morgen.
        </p>
    </div>
</section>

<!-- Abschnitt 1 -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Grundsatz</span>
                <h2 class="fw-bold mb-3"><?php echo esc_html(!empty($uberschrift_1) ? $uberschrift_1 : 'Unsere Vision für die Pflege daheim'); ?></h2>
                <div class="text-secondary">
                    <?php echo fkw_render_content($text_1); ?>
                </div>
            </div>
            <div class="col-lg-5">
                <?php 
                $img1_src = fkw_get_image_src($bild_1, get_template_directory_uri() . '/assets/images/hands-1846428_1920.jpg');
                $img1_alt = fkw_get_image_alt($bild_1, 'Unsere Vision – Pflege daheim');
                if (!empty($img1_src)): ?>
                    <div class="fkw-card p-2 shadow-sm rounded-4 overflow-hidden">
                        <img src="<?php echo esc_url($img1_src); ?>" 
                             alt="<?php echo esc_attr($img1_alt); ?>" 
                             class="img-fluid rounded-3 w-100" 
                             style="max-height: 420px; object-fit: cover;"
                             loading="lazy">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Abschnitt 2 -->
<section class="section section-bg">
    <div class="container">
        <div class="mx-auto" style="max-width: 820px;">
            <h2 class="fw-bold mb-3"><?php echo esc_html(!empty($uberschrift_2) ? $uberschrift_2 : 'Herausforderungen der häuslichen Betreuung'); ?></h2>
            <div class="text-secondary">
                <?php echo fkw_render_content($text_2); ?>
            </div>
        </div>
    </div>
</section>

<!-- Abschnitt 3 -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 order-2 order-lg-1">
                <?php 
                $img2_src = fkw_get_image_src($bild_2, get_template_directory_uri() . '/assets/images/holding-hands-8288239_1920.jpg');
                $img2_alt = fkw_get_image_alt($bild_2, 'Gemeinsam mehr bewirken');
                if (!empty($img2_src)): ?>
                    <div class="fkw-card p-2 shadow-sm rounded-4 overflow-hidden">
                        <img src="<?php echo esc_url($img2_src); ?>" 
                             alt="<?php echo esc_attr($img2_alt); ?>" 
                             class="img-fluid rounded-3 w-100" 
                             style="max-height: 420px; object-fit: cover;"
                             loading="lazy">
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-7 order-1 order-lg-2">
                <span class="badge bg-secondary-subtle text-dark border px-3 py-1 mb-2" style="font-size: 0.85rem;">Gemeinsamkeit</span>
                <h2 class="fw-bold mb-3"><?php echo esc_html(!empty($uberschrift_3) ? $uberschrift_3 : 'Stärkung pflegender Angehöriger'); ?></h2>
                <div class="text-secondary">
                    <?php echo fkw_render_content($text_3); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Abschnitt 4 (Wiederherstellung von vision_punkt_1..4) -->
<section class="section section-bg">
    <div class="container">
        <div class="mx-auto" style="max-width: 820px;">
            <h2 class="fw-bold mb-3"><?php echo esc_html(!empty($uberschrift_4) ? $uberschrift_4 : 'Schwerpunkte unserer Vision'); ?></h2>
            <div class="text-secondary mb-4">
                <?php echo fkw_render_content($text_4); ?>
            </div>

            <?php 
            $punkte = [];
            for ($i = 1; $i <= 4; $i++) {
                $p = get_field("vision_punkt_$i", $page_id);
                if (!empty($p)) {
                    $punkte[] = $p;
                }
            }
            if (!empty($punkte)):
            ?>
                <ul class="list-unstyled mb-0 ps-1">
                    <?php foreach ($punkte as $punkt): ?>
                        <li class="d-flex align-items-start gap-3 mb-3 p-3 bg-white rounded-3 border shadow-sm">
                            <span class="text-danger fw-bold fs-5" style="line-height: 1;">&bull;</span>
                            <span class="text-secondary"><?php echo esc_html($punkt); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Abschnitt 5: Beitrittsaufruf -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Mitwirken</span>
                <h2 class="fw-bold mb-3"><?php echo esc_html(!empty($uberschrift_5) ? $uberschrift_5 : 'Gemeinsam die Zukunft der Pflege gestalten'); ?></h2>
                <div class="text-secondary mb-4">
                    <?php echo fkw_render_content($text_5); ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="fkw-card text-center p-4 p-md-5 shadow-sm rounded-4 border bg-white">
                    <?php 
                    $img3_src = fkw_get_image_src($bild_3, get_template_directory_uri() . '/assets/images/team-4529717_1920.jpg');
                    $img3_alt = fkw_get_image_alt($bild_3, 'Werden Sie Teil unserer Initiative');
                    if (!empty($img3_src)): ?>
                        <img src="<?php echo esc_url($img3_src); ?>" 
                             alt="<?php echo esc_attr($img3_alt); ?>" 
                             class="img-fluid rounded-3 mb-3 w-100" 
                             style="max-height: 220px; object-fit: cover;"
                             loading="lazy">
                    <?php endif; ?>
                    <h3 class="h5 fw-bold text-navy mb-2">Werden Sie Teil unserer Initiative</h3>
                    <p class="small text-muted mb-3">
                        Die Mitgliedschaft in der Friedrich-Karl-Weniger Gesellschaft ist <strong>vollständig kostenlos</strong> und stärkt unsere gemeinsame Stimme.
                    </p>
                    <a class="btn btn-danger w-100 py-2" href="<?php echo esc_url(home_url('/mitglied-werden')); ?>">
                        Jetzt Mitglied werden (PDF) &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
