<?php
/*
Template Name: Geschichte
*/

get_header();
$page_id = get_queried_object_id();

$haupttitel = get_field('geschichte_hauptuberschrift', $page_id);
$uberschrift_1 = get_field('geschichte_uberschrift_1', $page_id);
$text_1        = get_field('geschichte_text_1', $page_id);
$bild_1        = get_field('geschichte_bild_1', $page_id);

$uberschrift_2 = get_field('geschichte_uberschrift_2', $page_id);
$text_2        = get_field('geschichte_text_2', $page_id);

$uberschrift_3 = get_field('geschichte_uberschrift_3', $page_id);
$text_3        = get_field('geschichte_text_3', $page_id);

$uberschrift_4 = get_field('geschichte_uberschrift_4', $page_id);
$text_4        = get_field('geschichte_text_4', $page_id);

$uberschrift_5 = get_field('geschichte_uberschrift_5', $page_id);
$text_5        = get_field('geschichte_text_5', $page_id);
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
            <a href="<?php echo esc_url(home_url('/')); ?>">Startseite</a> &rsaquo; <span>Unsere Geschichte</span>
        </nav>
        <h1 class="mb-2">
            <?php echo !empty($haupttitel) ? nl2br(esc_html($haupttitel)) : 'Unsere Geschichte'; ?>
        </h1>
        <p class="lead mb-0" style="max-width: 65ch;">
            Die Wurzeln unseres Vereins, der persönliche Anlass und unser Weg zu einer starken Stimme für pflegende Angehörige.
        </p>
    </div>
</section>

<!-- Abschnitt 1: Der Namensgeber & Entstehung -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Persönlicher Hintergrund</span>
                <h2 class="fw-bold mb-3"><?php echo esc_html(!empty($uberschrift_1) ? $uberschrift_1 : 'Friedrich Karl Weniger'); ?></h2>
                <div class="text-secondary">
                    <?php echo fkw_render_content($text_1); ?>
                </div>
            </div>
            <div class="col-lg-5">
                <?php 
                $img_src = fkw_get_image_src($bild_1, get_template_directory_uri() . '/assets/images/Foto Friedrich Karl Weniger.jpg');
                $img_alt = fkw_get_image_alt($bild_1, 'Friedrich Karl Weniger – Namensgeber des Vereins');
                if (!empty($img_src)): ?>
                    <div class="fkw-card p-3 text-center shadow-sm rounded-4 border bg-white">
                        <img src="<?php echo esc_url($img_src); ?>" 
                             class="img-fluid rounded-3 mb-3 w-100" 
                             alt="<?php echo esc_attr($img_alt); ?>" 
                             style="max-height: 420px; object-fit: cover;"
                             loading="lazy">
                        <p class="small text-muted mb-0"><strong>Friedrich Karl Weniger</strong> &ndash; Namensgeber des Vereins</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Abschnitte 2 & 3: Entstehung & Realität der Pflege daheim -->
<section class="section section-bg">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="fkw-card h-100 p-4 p-md-5 bg-white border rounded-4 shadow-sm">
                    <h2 class="h4 fw-bold text-navy mb-3"><?php echo esc_html(!empty($uberschrift_2) ? $uberschrift_2 : 'Die Realität der häuslichen Pflege'); ?></h2>
                    <div class="text-secondary">
                        <?php echo fkw_render_content($text_2); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fkw-card h-100 p-4 p-md-5 bg-white border rounded-4 shadow-sm">
                    <h2 class="h4 fw-bold text-navy mb-3"><?php echo esc_html(!empty($uberschrift_3) ? $uberschrift_3 : 'Hürden und Bürokratie überwinden'); ?></h2>
                    <div class="text-secondary">
                        <?php echo fkw_render_content($text_3); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Abschnitte 4 & 5: Aus Erfahrung lernen & Weitergehen -->
<section class="section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-4 h-100" style="background-color: var(--fkw-surface-subtle); border: 1px solid var(--fkw-border);">
                    <h2 class="h4 fw-bold text-navy mb-3"><?php echo esc_html(!empty($uberschrift_4) ? $uberschrift_4 : 'Aus Erfahrungen lernen'); ?></h2>
                    <div class="text-secondary">
                        <?php echo fkw_render_content($text_4); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-4 h-100" style="background-color: var(--fkw-surface-subtle); border: 1px solid var(--fkw-border);">
                    <h2 class="h4 fw-bold text-navy mb-3"><?php echo esc_html(!empty($uberschrift_5) ? $uberschrift_5 : 'Unser Weg nach vorn'); ?></h2>
                    <div class="text-secondary">
                        <?php echo fkw_render_content($text_5); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo esc_url(home_url('/ueber-uns')); ?>" class="btn btn-outline-dark me-2 mb-2">
                Das Vorstandsteam kennenlernen
            </a>
            <a href="<?php echo esc_url(home_url('/mitglied-werden')); ?>" class="btn btn-danger mb-2">
                Kostenlos Mitglied werden &rarr;
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
