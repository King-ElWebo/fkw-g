<?php
/*
Template Name: Geschichte
*/

get_header();
$page_id = get_queried_object_id();
?>

<?php if (current_user_can('edit_posts')) : ?>
    <div class="container mt-2">
        <a href="<?php echo esc_url(admin_url('post.php?post=' . $page_id . '&action=edit')); ?>" class="btn btn-outline-secondary btn-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
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
            <?php 
            $haupttitel = get_field('geschichte_hauptuberschrift', $page_id);
            echo !empty($haupttitel) ? nl2br(esc_html($haupttitel)) : 'Unsere Geschichte';
            ?>
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
                <h2 class="fw-bold mb-3"><?php echo esc_html(get_field('geschichte_uberschrift_1', $page_id)); ?></h2>
                <div class="text-muted">
                    <?php the_field('geschichte_text_1', $page_id); ?>
                </div>
            </div>
            <div class="col-lg-5">
                <?php 
                $bild = get_field("geschichte_bild_1", $page_id);
                if (!empty($bild) && isset($bild['url'])): ?>
                    <div class="fkw-card p-3 text-center">
                        <img src="<?php echo esc_url($bild['url']); ?>" class="img-fluid rounded mb-3" alt="<?php echo esc_attr($bild['alt'] ?? 'Friedrich Karl Weniger'); ?>" style="max-height: 420px; object-fit: cover;">
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
                <div class="fkw-card">
                    <h2 class="h4 fw-bold mb-3"><?php echo esc_html(get_field('geschichte_uberschrift_2', $page_id)); ?></h2>
                    <div class="text-muted">
                        <?php the_field('geschichte_text_2', $page_id); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fkw-card">
                    <h2 class="h4 fw-bold mb-3"><?php echo esc_html(get_field('geschichte_uberschrift_3', $page_id)); ?></h2>
                    <div class="text-muted">
                        <?php the_field('geschichte_text_3', $page_id); ?>
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
                <div class="p-4 rounded-4" style="background-color: var(--fkw-surface); border: 1px solid var(--fkw-border);">
                    <h2 class="h4 fw-bold mb-3"><?php echo esc_html(get_field('geschichte_uberschrift_4', $page_id)); ?></h2>
                    <div class="text-muted">
                        <?php the_field('geschichte_text_4', $page_id); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 rounded-4" style="background-color: var(--fkw-surface); border: 1px solid var(--fkw-border);">
                    <h2 class="h4 fw-bold mb-3"><?php echo esc_html(get_field('geschichte_uberschrift_5', $page_id)); ?></h2>
                    <div class="text-muted">
                        <?php the_field('geschichte_text_5', $page_id); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo esc_url(home_url('/ueber-uns')); ?>" class="btn btn-outline-dark me-2 mb-2">
                Das heutige Team kennenlernen
            </a>
            <a href="<?php echo esc_url(home_url('/mitglied-werden')); ?>" class="btn btn-danger mb-2">
                Initiative durch Mitgliedschaft stärken
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
