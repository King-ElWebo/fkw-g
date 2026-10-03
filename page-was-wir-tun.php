<?php
/*
Template Name: Was wir tun
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
            <a href="<?php echo esc_url(home_url('/')); ?>">Startseite</a> &rsaquo; <span>Was wir tun</span>
        </nav>
        <h1 class="mb-2">
            <?php 
            $haupttitel = get_field('was_hauptuberschrift', $page_id);
            echo !empty($haupttitel) ? esc_html($haupttitel) : 'Was wir tun';
            ?>
        </h1>
        <p class="lead mb-0" style="max-width: 65ch;">
            Hilfestellung für Familien, Erfahrungsaustausch und das Aufzeigen von Missständen im Pflegesystem.
        </p>
    </div>
</section>

<!-- Abschnitt 1 -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="fw-bold mb-3"><?php echo esc_html(get_field('was_uberschrift_1', $page_id)); ?></h2>
                <div class="text-muted">
                    <?php the_field('was_text_1', $page_id); ?>
                </div>
            </div>
            <div class="col-lg-5">
                <?php 
                $bild1 = get_field('was_bild_1', $page_id);
                if (!empty($bild1) && is_array($bild1) && isset($bild1['url'])): ?>
                    <div class="fkw-card p-2">
                        <img src="<?php echo esc_url($bild1['url']); ?>" alt="<?php echo esc_attr($bild1['alt'] ?? 'Was wir tun'); ?>" class="img-fluid rounded" style="width: 100%; height: auto; max-height: 420px; object-fit: cover;">
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
            <h2 class="fw-bold mb-3"><?php echo esc_html(get_field('was_uberschrift_2', $page_id)); ?></h2>
            <div class="text-muted">
                <?php the_field('was_text_2', $page_id); ?>
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
                $bild2 = get_field('was_bild_2', $page_id);
                if (!empty($bild2) && is_array($bild2) && isset($bild2['url'])): ?>
                    <div class="fkw-card p-2">
                        <img src="<?php echo esc_url($bild2['url']); ?>" alt="<?php echo esc_attr($bild2['alt'] ?? 'Erfahrungen teilen'); ?>" class="img-fluid rounded" style="width: 100%; height: auto; max-height: 420px; object-fit: cover;">
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-7 order-1 order-lg-2">
                <h2 class="fw-bold mb-3"><?php echo esc_html(get_field('was_uberschrift_3', $page_id)); ?></h2>
                <div class="text-muted">
                    <?php the_field('was_text_3', $page_id); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Abschnitt 4 -->
<section class="section section-bg">
    <div class="container">
        <div class="mx-auto" style="max-width: 820px;">
            <h2 class="fw-bold mb-3"><?php echo esc_html(get_field('was_uberschrift_4', $page_id)); ?></h2>
            <div class="text-muted">
                <?php the_field('was_text_4', $page_id); ?>
            </div>
        </div>
    </div>
</section>

<!-- Abschnitt 5: Spendenaufruf -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="fw-bold mb-3"><?php echo esc_html(get_field('was_uberschrift_5', $page_id)); ?></h2>
                <div class="text-muted mb-3">
                    <?php the_field('was_text_5', $page_id); ?>
                </div>
                <div class="text-muted mb-4">
                    <?php the_field('was_text_6', $page_id); ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="fkw-card text-center p-4">
                    <?php 
                    $bild3 = get_field('was_bild_3', $page_id);
                    if (!empty($bild3) && is_array($bild3) && isset($bild3['url'])): ?>
                        <img src="<?php echo esc_url($bild3['url']); ?>" alt="<?php echo esc_attr($bild3['alt'] ?? 'Freiwillige Spende'); ?>" class="img-fluid rounded mb-3" style="max-height: 240px; object-fit: cover;">
                    <?php endif; ?>
                    <h3 class="h5 mb-2">Unterstützen Sie unsere Arbeit</h3>
                    <p class="small text-muted mb-3">
                        Ihre Spende hilft uns, Leitfäden zu drucken, Beratungsanfragen zu bearbeiten und Familien beizustehen.
                    </p>
                    <a class="btn btn-danger w-100" href="<?php echo esc_url(home_url('/spenden')); ?>">
                        Freiwillig spenden
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
