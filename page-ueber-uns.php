<?php
/**
 * Template Name: ueber uns
 * 
 * Template for FKW-G Board & About Us page.
 * Preserves ACF fields: ueber_hauptuberschrift, ueber_text_1, ueber_name_$i, ueber_position_$i, ueber_bild_$i
 */

get_header();
$page_id = get_queried_object_id();

$hauptuberschrift = get_field('ueber_hauptuberschrift', $page_id);
if (empty($hauptuberschrift)) {
    $hauptuberschrift = 'Über die Friedrich-Karl-Weniger Gesellschaft';
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
    <!-- Hero / Breadcrumb Header -->
    <header class="fkw-page-header py-5 bg-white border-bottom">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <span class="fkw-badge mb-3">Organisation &amp; Vorstand</span>
                    <h1 class="fkw-page-title mb-3"><?php echo esc_html($hauptuberschrift); ?></h1>
                    <div class="fkw-lead-text mx-auto" style="max-width: 780px;">
                        <?php 
                        $text1 = get_field('ueber_text_1', $page_id);
                        if (!empty($text1)) {
                            echo wp_kses_post($text1);
                        } else {
                            echo '<p>Wir setzen uns ehrenamtlich und unabhängig für Verbesserungen im System der häuslichen Pflege und 24h-Betreuung ein.</p>';
                        }
                        ?>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                        <a href="<?php echo esc_url(home_url('/statuten/')); ?>" class="btn btn-fkw-outline">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                            Vereinsstatuten einsehen
                        </a>
                        <a href="<?php echo esc_url(home_url('/mitglied-werden/')); ?>" class="btn btn-fkw-primary">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                            Kostenlos Mitglied werden
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Board Members Grid -->
    <section class="py-5 bg-warm-light">
        <div class="container py-lg-4">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="h2 fw-bold text-navy mb-2">Unser Vorstand &amp; Team</h2>
                    <p class="text-muted">Ehrenamtliches Engagement mit Fachkompetenz, Empathie und persönlicher Erfahrung.</p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                <?php 
                $has_members = false;
                for ($i = 1; $i <= 8; $i++): 
                    $name = get_field("ueber_name_$i", $page_id);
                    $position = get_field("ueber_position_$i", $page_id);
                    $bild = get_field("ueber_bild_$i", $page_id);

                    // Skip empty slots if not configured
                    if (empty($name) && empty($position) && empty($bild)) {
                        continue;
                    }
                    $has_members = true;
                ?>
                    <div class="col">
                        <div class="team-member-card">
                            <div class="team-member-img-wrap">
                                <?php if (!empty($bild) && isset($bild['url'])): ?>
                                    <img src="<?php echo esc_url($bild['url']); ?>" 
                                         alt="<?php echo esc_attr(!empty($bild['alt']) ? $bild['alt'] : ($name ?: 'Vorstandsmitglied')); ?>" 
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="team-member-placeholder">
                                        <div class="team-monogram">
                                            <?php echo fkw_get_monogram($name ?: 'Mitglied ' . $i); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="team-member-body text-center">
                                <h3 class="team-member-name text-navy"><?php echo esc_html($name ?: 'Vorstandsmitglied'); ?></h3>
                                <?php if (!empty($position)): ?>
                                    <p class="team-member-role"><?php echo nl2br(esc_html($position)); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

                <?php if (!$has_members): ?>
                    <!-- Graceful fallback if no ACF member is configured yet -->
                    <div class="col-12 text-center py-4">
                        <div class="fkw-info-card p-4 mx-auto" style="max-width: 600px;">
                            <h3 class="h5 fw-bold text-navy mb-2">Dr. Sabine Rödler</h3>
                            <p class="text-muted mb-0">Präsidentin der Friedrich-Karl-Weniger Gesellschaft</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Legal & Transparency Facts -->
    <section class="py-5 bg-white border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="fkw-card p-4 p-md-5">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-7">
                                <span class="badge bg-light text-dark border px-3 py-2 mb-3">Transparenz &amp; Vereinsregister</span>
                                <h3 class="h4 fw-bold text-navy mb-3">Eingetragener Verein in Österreich</h3>
                                <p class="text-secondary mb-2">
                                    Die <strong>Friedrich-Karl-Weniger Gesellschaft</strong> ist ein gemeinnütziger, unabhängiger Verein zur Förderung von Verbesserungen im System der „Pflege daheim“ mit Schwerpunkt 24h-Betreuung.
                                </p>
                                <ul class="list-unstyled text-secondary small mb-0">
                                    <li class="mb-1"><strong>ZVR-Zahl:</strong> 1102604139</li>
                                    <li class="mb-1"><strong>Zuständige Behörde:</strong> Landespolizeidirektion Wien – Vereinsbehörde</li>
                                    <li><strong>Sitz:</strong> Hütteldorfer Straße 248, 1140 Wien, Österreich</li>
                                </ul>
                            </div>
                            <div class="col-md-5 text-md-end text-start">
                                <a href="<?php echo esc_url(home_url('/statuten/')); ?>" class="btn btn-fkw-outline w-100 mb-2">
                                    Statuten lesen (PDF)
                                </a>
                                <a href="mailto:team@fkw-g.at" class="btn btn-fkw-secondary w-100">
                                    Vorstand kontaktieren
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
get_footer();