<?php
/**
 * Template Name: Mitglied werden
 * 
 * Template for FKW-G Membership Application page.
 * Preserves all ACF fields: mitglied_hauptuberschrift, mitglied_bild_1, 
 * mitglied_uberschrift_1, mitglied_text_1, mitglied_uberschrift_2, mitglied_text_2, mitglied_text_3
 * Preserves PDF application download and direct contact workflow.
 */

get_header();
$page_id = get_queried_object_id();

$hauptuberschrift = get_field('mitglied_hauptuberschrift', $page_id);
if (empty($hauptuberschrift)) {
    $hauptuberschrift = 'Kostenlos Mitglied werden';
}
$bild1 = get_field('mitglied_bild_1', $page_id);
$uberschrift1 = get_field('mitglied_uberschrift_1', $page_id);
$text1 = get_field('mitglied_text_1', $page_id);
$uberschrift2 = get_field('mitglied_uberschrift_2', $page_id);
$text2 = get_field('mitglied_text_2', $page_id);
$text3 = get_field('mitglied_text_3', $page_id);
$vorteil_1 = get_field('mitglied_vorteil_1', $page_id);
$vorteil_2 = get_field('mitglied_vorteil_2', $page_id);
$vorteil_3 = get_field('mitglied_vorteil_3', $page_id);
$vorteil_4 = get_field('mitglied_vorteil_4', $page_id);
$vorteile = array_filter([$vorteil_1, $vorteil_2, $vorteil_3, $vorteil_4]);
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
                    <span class="fkw-badge mb-3">Gemeinschaft &amp; Unterstützung</span>
                    <h1 class="fkw-page-title mb-3"><?php echo esc_html($hauptuberschrift); ?></h1>
                    <div class="fkw-lead-text mx-auto" style="max-width: 760px;">
                        <p class="mb-0">
                            Die Mitgliedschaft in der Friedrich-Karl-Weniger Gesellschaft ist <strong>vollständig kostenlos</strong>. 
                            Werden Sie Teil unserer Gemeinschaft und stärken Sie unsere Stimme für pflegende Angehörige und Betroffene in Österreich.
                        </p>
                    </div>
                    <div class="mt-4">
                        <a href="#mitgliedsantrag" class="btn btn-fkw-primary me-2 mb-2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            Zum Mitgliedsantrag (PDF)
                        </a>
                        <a href="<?php echo esc_url(home_url('/statuten/')); ?>" class="btn btn-fkw-outline mb-2">
                            Vereinsstatuten einsehen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Section 1: Motivation & Details -->
    <section class="py-5 bg-warm-light">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                <div class="<?php echo (!empty($bild1) && isset($bild1['url'])) ? 'col-lg-7' : 'col-lg-10 mx-auto'; ?>">
                    <?php if (!empty($uberschrift1)): ?>
                        <h2 class="h2 fw-bold text-navy mb-4"><?php echo esc_html($uberschrift1); ?></h2>
                    <?php else: ?>
                        <h2 class="h2 fw-bold text-navy mb-4">Warum Ihre Mitgliedschaft einen Unterschied macht</h2>
                    <?php endif; ?>

                    <div class="fkw-prose">
                        <?php 
                        if (!empty($text1)) {
                            echo wp_kses_post($text1);
                        } else {
                            echo '<p>Als gemeinnütziger Verein setzen wir uns für eine spürbare Entlastung von Familien ein, die Angehörige zu Hause pflegen. Je mehr Menschen hinter unseren Anliegen stehen, desto wirksamer können wir Verbesserungen im System der 24h-Betreuung und Pflege daheim anstoßen.</p>';
                        }
                        ?>
                    </div>

                    <?php if (!empty($vorteile)): ?>
                        <div class="row g-3 mt-4">
                            <?php foreach ($vorteile as $vort): ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-start gap-3 p-3 bg-white rounded border shadow-sm h-100">
                                        <span class="badge bg-success-subtle text-success p-2 rounded-circle" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            ✓
                                        </span>
                                        <div>
                                            <p class="small fw-semibold text-navy mb-0"><?php echo esc_html($vort); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="row g-3 mt-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start gap-3 p-3 bg-white rounded border shadow-sm h-100">
                                    <span class="badge bg-success-subtle text-success p-2 rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        ✓
                                    </span>
                                    <div>
                                        <h3 class="h6 fw-bold mb-1">100 % beitragsfrei</h3>
                                        <p class="small text-muted mb-0">Keine Mitgliedsbeiträge, keine versteckten Kosten.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start gap-3 p-3 bg-white rounded border shadow-sm h-100">
                                    <span class="badge bg-danger-subtle text-danger p-2 rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        ♥
                                    </span>
                                    <div>
                                        <h3 class="h6 fw-bold mb-1">Gemeinsame Stimme</h3>
                                        <p class="small text-muted mb-0">Stärkung der Interessen von Familien und Betroffenen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <?php 
                $m_img_src = fkw_get_image_src($bild1, get_template_directory_uri() . '/assets/images/holding-hands-8288239_1920.jpg');
                $m_img_alt = fkw_get_image_alt($bild1, 'Mitgliedschaft Friedrich-Karl-Weniger Gesellschaft');
                if (!empty($m_img_src)): ?>
                    <div class="col-lg-5">
                        <div class="fkw-img-frame shadow-sm rounded-4 overflow-hidden border">
                            <img src="<?php echo esc_url($m_img_src); ?>" 
                                 alt="<?php echo esc_attr($m_img_alt); ?>" 
                                 class="img-fluid rounded-3 w-100" 
                                 style="max-height: 420px; object-fit: cover;"
                                 loading="lazy">
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Section 2: How to apply & PDF Download -->
    <section id="mitgliedsantrag" class="py-5 bg-white border-top border-bottom">
        <div class="container py-lg-4">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <?php if (!empty($uberschrift2)): ?>
                        <h2 class="h2 fw-bold text-navy mb-3"><?php echo esc_html($uberschrift2); ?></h2>
                    <?php else: ?>
                        <h2 class="h2 fw-bold text-navy mb-3">So einfach werden Sie Mitglied</h2>
                    <?php endif; ?>
                    <p class="text-muted">In drei Schritten zu Ihrer kostenlosen Vereinsmitgliedschaft:</p>
                </div>
            </div>

            <!-- 3 Steps -->
            <div class="row g-4 justify-content-center mb-5">
                <div class="col-md-4">
                    <div class="card h-100 border p-4 text-center bg-warm-light">
                        <div class="step-num mx-auto mb-3" style="width: 44px; height: 44px; border-radius: 50%; background: var(--fkw-crimson); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.2rem;">
                            1
                        </div>
                        <h3 class="h5 fw-bold text-navy mb-2">PDF herunterladen</h3>
                        <p class="text-secondary small mb-0">Laden Sie den offiziellen Mitgliedsantrag der Friedrich-Karl-Weniger Gesellschaft herunter.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border p-4 text-center bg-warm-light">
                        <div class="step-num mx-auto mb-3" style="width: 44px; height: 44px; border-radius: 50%; background: var(--fkw-crimson); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.2rem;">
                            2
                        </div>
                        <h3 class="h5 fw-bold text-navy mb-2">Ausfüllen &amp; Unterschreiben</h3>
                        <p class="text-secondary small mb-0">Füllen Sie das einseitige Formular mit Ihren Kontaktdaten aus und unterschreiben Sie es.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border p-4 text-center bg-warm-light">
                        <div class="step-num mx-auto mb-3" style="width: 44px; height: 44px; border-radius: 50%; background: var(--fkw-crimson); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.2rem;">
                            3
                        </div>
                        <h3 class="h5 fw-bold text-navy mb-2">Absenden</h3>
                        <p class="text-secondary small mb-0">Senden Sie uns den Scan oder ein gut lesbares Foto per E-Mail an <a href="mailto:team@fkw-g.at" class="fw-semibold text-danger">team@fkw-g.at</a>.</p>
                    </div>
                </div>
            </div>

            <!-- Download Action Box -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="fkw-card p-4 p-md-5 text-center bg-white border shadow-sm">
                        <?php if (!empty($text2)): ?>
                            <div class="mb-4 text-secondary">
                                <?php echo wp_kses_post($text2); ?>
                            </div>
                        <?php endif; ?>

                        <div class="d-inline-flex flex-column align-items-center">
                            <a id="mitglied" 
                               href="<?php echo esc_url(get_template_directory_uri() . '/pdf/mitglied.pdf'); ?>" 
                               download="Mitgliedsantrag-FKW-G.pdf" 
                               class="btn btn-fkw-primary btn-lg px-4 py-3 shadow-sm mb-3">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                Mitgliedsantrag herunterladen (PDF)
                            </a>
                            <span class="text-muted small">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                                Offizielles Antragsformular &bull; Format: PDF &bull; Kostenlos
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Questions & Contact -->
    <section class="py-5 bg-warm-light">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="fkw-badge mb-3">Fragen &amp; Kontakt</span>
                    <h2 class="h2 fw-bold text-navy mb-3">Haben Sie Fragen zur Mitgliedschaft?</h2>
                    
                    <div class="fkw-prose mb-4">
                        <?php 
                        if (!empty($text3)) {
                            echo wp_kses_post($text3);
                        } else {
                            echo '<p>Wir sind gerne persönlich für Sie da. Ob Fragen zum Ablauf, zu den Vereinszielen oder zur Rücksendung des Antrags – schreiben Sie uns jederzeit unkompliziert per E-Mail.</p>';
                        }
                        ?>
                    </div>

                    <div class="fkw-contact-callout p-4 mx-auto text-center" style="max-width: 600px;">
                        <p class="mb-3 text-secondary">Sie erreichen unser Team direkt unter:</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 mb-3">
                            <span class="fkw-email-badge">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                <strong>team@fkw-g.at</strong>
                            </span>
                            <button type="button" class="btn-copy" data-copy="team@fkw-g.at" aria-label="E-Mail-Adresse in die Zwischenablage kopieren">
                                Adresse kopieren
                            </button>
                        </div>
                        <span class="copy-feedback" role="status" aria-live="polite">✓ In die Zwischenablage kopiert!</span>
                        <div class="mt-3">
                            <a href="mailto:team@fkw-g.at?subject=Mitgliedschaft%20FKW-G" class="btn btn-fkw-outline btn-sm">
                                E-Mail-Programm öffnen &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
get_footer();
