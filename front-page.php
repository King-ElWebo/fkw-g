<?php
/*
Template Name: Homepage
*/

get_header();
$page_id = get_queried_object_id();

// ACF Felder abrufen
$hero_uberschrift = get_field('hero_uberschrift', $page_id);
$hero_text = get_field('hero_text', $page_id);
$hero_hintergrund = get_field('hero_hintergrund', $page_id);
$hero_img_url = !empty($hero_hintergrund['url']) ? $hero_hintergrund['url'] : (!empty($hero_hintergrund) && is_string($hero_hintergrund) ? $hero_hintergrund : get_template_directory_uri() . '/assets/images/LOGO_Verein_Weniger_Reinzeichnung_Pfade.png');

$ziel_uberschrift = get_field('ziel_uberschrift', $page_id);
$ziel_text = get_field('ziel_text', $page_id);

$vision_uberschrift = get_field('vision_uberschrift', $page_id);
$vision_text = get_field('vision_text', $page_id);

$geschichte_uberschrift = get_field('geschichte_uberschrift', $page_id);
$geschichte_text = get_field('geschichte_text', $page_id);

$uns_uberschrift = get_field('uns_uberschrift', $page_id);
$uns_text = get_field('uns_text', $page_id);

$freiwillige_uberschrift = get_field('freiwillige_uberschrift', $page_id);
$freiwillige_text = get_field('freiwillige_text', $page_id);
?>

<?php if (current_user_can('edit_posts')) : ?>
    <div class="container mt-2">
        <a href="<?php echo esc_url(admin_url('post.php?post=' . $page_id . '&action=edit')); ?>" class="btn btn-outline-secondary btn-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            Seite bearbeiten
        </a>
    </div>
<?php endif; ?>

<!-- 1. Hero Sektion: Würdevoll, menschlich, klar strukturiert -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7">
                <div class="hero-badge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    Gemeinnützige Initiative in Österreich
                </div>

                <h1 class="hero-title">
                    <?php 
                    if (!empty($hero_uberschrift)) {
                        echo nl2br(esc_html($hero_uberschrift));
                    } else {
                        echo 'Daheim gut betreut &ndash; Unterstützung und Orientierung für die Pflege zu Hause';
                    }
                    ?>
                </h1>

                <div class="hero-lead">
                    <?php 
                    if (!empty($hero_text)) {
                        echo wp_kses_post($hero_text);
                    } else {
                        echo '<p>Nicht mehr allein bei Problemen der „Pflege daheim“. Gemeinsam bündeln wir Erfahrungen und Kräfte, um verlässliche Lösungen für pflegebedürftige Menschen und ihre Angehörigen zu schaffen.</p>';
                    }
                    ?>
                </div>

                <!-- Handlungsaufforderungen: Klar getrennt nach Bedarf -->
                <div class="hero-actions">
                    <a href="mailto:team@fkw-g.at" class="btn btn-danger">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                        Anliegen schildern / Kontakt
                    </a>
                    <a href="<?php echo esc_url(home_url('/download')); ?>" class="btn btn-outline-dark">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        Tipps & Anträge ansehen
                    </a>
                    <a href="<?php echo esc_url(home_url('/mitglied-werden')); ?>" class="btn btn-subtle">
                        Kostenlos Mitglied werden
                    </a>
                </div>

                <!-- Reassurance Notiz -->
                <p class="small text-muted mt-3 mb-0">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1 text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    Kostenlose, unabhängige Erstorientierung. Die Mitgliedschaft im Verein ist 100% kostenlos.
                </p>
            </div>

            <div class="col-lg-5">
                <div class="hero-image-wrapper">
                    <img src="<?php echo esc_url($hero_img_url); ?>" alt="Pflege daheim &ndash; Hände halten sich gegenseitig" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Erste Orientierung: „Wo fange ich an?“ speziell für belastete Angehörige -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-secondary-subtle text-dark border px-3 py-2 mb-2" style="font-size: 0.85rem;">Orientierung für Angehörige</span>
            <h2 class="h1">Wo fange ich an?</h2>
            <p class="lead mx-auto" style="max-width: 65ch;">
                Wenn eine Pflegesituation plötzlich eintritt oder sich verschlechtert, ist der bürokratische Aufwand oft erdrückend. Diese vier Schritte bringen erste Klarheit:
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="orientierung-step">
                    <div class="orientierung-number">1</div>
                    <div>
                        <h3 class="h5 mb-2">Pflegebedarf einschätzen</h3>
                        <p class="small text-muted mb-0">
                            Welche Unterstützung ist im Alltag tatsächlich nötig? Notieren Sie tägliche Hilfsbedarfe für die ärztliche Einstufung.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="orientierung-step">
                    <div class="orientierung-number">2</div>
                    <div>
                        <h3 class="h5 mb-2">Pflegegeld beantragen</h3>
                        <p class="small text-muted mb-0">
                            Das Bundespflegegeld sichert wesentliche finanzielle Hilfen. Formulare für PVA, SVS und BVAEB finden Sie direkt bei uns.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="orientierung-step">
                    <div class="orientierung-number">3</div>
                    <div>
                        <h3 class="h5 mb-2">Betreuungsmodell wählen</h3>
                        <p class="small text-muted mb-0">
                            Stundenweise Hauskrankenpflege, Tageszentren oder eine 24h-Betreuung zu Hause: Wir helfen beim Klären der Möglichkeiten.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="orientierung-step">
                    <div class="orientierung-number">4</div>
                    <div>
                        <h3 class="h5 mb-2">Gemeinsam entlasten</h3>
                        <p class="small text-muted mb-0">
                            Pflegende Angehörige dürfen nicht allein gelassen werden. Tauschen Sie sich mit uns aus und werden Sie Teil unserer Initiative.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="<?php echo esc_url(home_url('/download')); ?>" class="btn btn-outline-dark">
                Zu den Formularen und Leitfäden &rarr;
            </a>
        </div>
    </div>
</section>

<!-- 3. Vereinsziel & Mission (id="wir", erhalten) -->
<section id="wir" class="section section-bg">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-6">
                <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Unser Auftrag</span>
                <h2 class="mb-3">
                    <?php 
                    if (!empty($ziel_uberschrift)) {
                        echo esc_html($ziel_uberschrift);
                    } else {
                        echo 'Unser Ziel: Pflege daheim muss für alle leistbar sein';
                    }
                    ?>
                </h2>
                <div class="text-muted">
                    <?php 
                    if (!empty($ziel_text)) {
                        the_field('ziel_text', $page_id);
                    } else {
                        echo '<p>Wir setzen uns mit gebündelten Kräften und persönlicher Erfahrung dafür ein, dass Menschen in Österreich auch im Alter und bei Pflegebedürftigkeit gut, sicher und bezahlbar in ihren eigenen vier Wänden betreut werden können.</p>';
                    }
                    ?>
                </div>
                <div class="mt-4">
                    <a href="<?php echo esc_url(home_url('/was-wir-tun')); ?>" class="btn btn-danger">
                        Mehr darüber: Was wir tun
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="fkw-card">
                            <h3 class="h5 mb-2">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2 text-danger"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                Hilfestellung für Betroffene & Angehörige
                            </h3>
                            <p class="small text-muted mb-0">
                                Wir begleiten Familien bei praktischen und bürokratischen Fragen rund um 24h-Betreuung, Pflegegeld und Förderungen.
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="fkw-card">
                            <h3 class="h5 mb-2">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2 text-danger"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                Probleme aufzeigen bei den Entscheidungsträgern
                            </h3>
                            <p class="small text-muted mb-0">
                                Gesetzliche Rahmenbedingungen müssen praxistauglich sein. Wir sprechen gezielt Missstände und Lücken im Pflegesystem an.
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="fkw-card">
                            <h3 class="h5 mb-2">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2 text-danger"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                Wissensaustausch & gegenseitige Stärkung
                            </h3>
                            <p class="small text-muted mb-0">
                                Die Erfahrungen anderer pflegender Angehöriger sind ein unschätzbarer Erfahrungsschatz, der vielen Familien Orientierung gibt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Unsere Vision (id="vision", erhalten) -->
<section id="vision" class="section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="p-4 rounded-4" style="background-color: var(--fkw-surface-subtle); border: 1px solid var(--fkw-border);">
                    <blockquote class="blockquote mb-0">
                        <p class="mb-3 fst-italic" style="color: var(--fkw-text);">
                            „Gemeinsam mit gebündelten Kräften und Wissen schafft man leichter und mehr. Jeder Tipp, jedes Gespräch kann für den Einzelnen enorme Erleichterung bringen.“
                        </p>
                        <footer class="blockquote-footer text-muted mt-2">Aus unserer Initiative für Pflege daheim</footer>
                    </blockquote>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <span class="badge bg-secondary-subtle text-dark border mb-2" style="font-size: 0.85rem;">Blick in die Zukunft</span>
                <h2 class="mb-3">
                    <?php 
                    if (!empty($vision_uberschrift)) {
                        echo esc_html($vision_uberschrift);
                    } else {
                        echo 'Unsere Vision';
                    }
                    ?>
                </h2>
                <div class="text-muted">
                    <?php 
                    if (!empty($vision_text)) {
                        the_field('vision_text', $page_id);
                    } else {
                        echo '<p>Ein System häuslicher Pflege, das pflegende Angehörige nicht überfordert, sondern ihnen den Rücken stärkt – mit fairen, bezahlbaren und transparenten Rahmenbedingungen für alle Beteiligten.</p>';
                    }
                    ?>
                </div>
                <div class="mt-4">
                    <a href="<?php echo esc_url(home_url('/vision')); ?>" class="btn btn-outline-dark">
                        Unsere Vision im Detail lesen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Unsere Geschichte (id="geschichte", erhalten) -->
<section id="geschichte" class="section section-bg">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7">
                <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Hintergrund</span>
                <h2 class="mb-3">
                    <?php 
                    if (!empty($geschichte_uberschrift)) {
                        echo esc_html($geschichte_uberschrift);
                    } else {
                        echo 'Unsere Geschichte';
                    }
                    ?>
                </h2>
                <div class="text-muted">
                    <?php 
                    if (!empty($geschichte_text)) {
                        the_field('geschichte_text', $page_id);
                    } else {
                        echo '<p>Die Entstehung der Friedrich-Karl-Weniger Gesellschaft beruht auf persönlicher Erfahrung und dem Erleben, vor welchen oft unüberwindbar scheinenden Hürden Familien stehen, wenn Angehörige rund um die Uhr Betreuung brauchen.</p>';
                    }
                    ?>
                </div>
                <div class="mt-4">
                    <a href="<?php echo esc_url(home_url('/geschichte')); ?>" class="btn btn-outline-dark">
                        Die ganze Geschichte lesen
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="fkw-card">
                    <h3 class="h5 mb-3">Friedrich Karl Weniger</h3>
                    <p class="small text-muted mb-3">
                        Namensgeber unseres Vereins. Seine Geschichte und die aufopferungsvolle Pflege seiner erkrankten Gattin über viele Jahre hinweg waren der Anstoß zur Gründung dieser Initiative.
                    </p>
                    <a href="<?php echo esc_url(home_url('/geschichte')); ?>" class="small text-danger fw-bold text-decoration-none">
                        Mehr über den Namensgeber &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Über uns & Vorstand (id="uns", erhalten) -->
<section id="uns" class="section">
    <div class="container text-center">
        <span class="badge bg-secondary-subtle text-dark border px-3 py-2 mb-2" style="font-size: 0.85rem;">Verein & Menschen</span>
        <h2 class="mb-3">
            <?php 
            if (!empty($uns_uberschrift)) {
                echo esc_html($uns_uberschrift);
            } else {
                echo 'Über uns';
            }
            ?>
        </h2>
        <div class="text-muted mx-auto mb-4" style="max-width: 65ch;">
            <?php 
            if (!empty($uns_text)) {
                the_field('uns_text', $page_id);
            } else {
                echo '<p>Wir sind eine gemeinnützige Initiative mit Sitz in Wien, geleitet von Menschen, die die Herausforderungen der Pflege aus eigener Erfahrung kennen. Lernen Sie das Vorstandsteam kennen.</p>';
            }
            ?>
        </div>
        <div class="d-flex justify-content-center gap-3">
            <a href="<?php echo esc_url(home_url('/ueber-uns')); ?>" class="btn btn-danger">
                Vorstand und Team ansehen
            </a>
            <a href="<?php echo esc_url(home_url('/statuten')); ?>" class="btn btn-outline-dark">
                Vereinsstatuten
            </a>
        </div>
    </div>
</section>

<!-- 7. Freiwillige Unterstützung & Mitgliedschaft -->
<section class="section section-bg">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <!-- Karte Links: Kostenlose Mitgliedschaft -->
            <div class="col-lg-6">
                <div class="fkw-card d-flex flex-column justify-content-between">
                    <div>
                        <span class="badge bg-success-subtle text-success mb-2" style="font-size: 0.85rem; font-weight: 600;">100% Kostenlos</span>
                        <h3 class="h4 mb-3">Mitglied werden im Verein</h3>
                        <p class="text-muted">
                            Mit Ihrer Mitgliedschaft stärken Sie unsere Stimme gegenüber Behörden und Politik. Als Mitglied erhalten Sie regelmäßige Updates zu wichtigen Neuerungen und Gesetzesänderungen im Pflegesystem.
                        </p>
                        <ul class="small text-muted ps-3 mb-4">
                            <li>Keine Mitgliedsbeiträge oder versteckte Verpflichtungen</li>
                            <li>Ausfüllbarer Mitgliedsantrag als praktisches PDF</li>
                            <li>Gemeinsam Verbesserungen für Familien bewirken</li>
                        </ul>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(home_url('/mitglied-werden')); ?>" class="btn btn-outline-dark w-100 mb-2">
                            Informationen zur Mitgliedschaft & Antrag (PDF)
                        </a>
                    </div>
                </div>
            </div>

            <!-- Karte Rechts: Freiwillige Spenden -->
            <div class="col-lg-6">
                <div class="fkw-card d-flex flex-column justify-content-between">
                    <div>
                        <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Gemeinnützig</span>
                        <h3 class="h4 mb-3">
                            <?php 
                            if (!empty($freiwillige_uberschrift)) {
                                echo esc_html($freiwillige_uberschrift);
                            } else {
                                echo 'Freiwillige Unterstützung';
                            }
                            ?>
                        </h3>
                        <div class="text-muted mb-3">
                            <?php 
                            if (!empty($freiwillige_text)) {
                                echo nl2br(esc_html($freiwillige_text));
                            } else {
                                echo '<p>Wir freuen uns über jede freiwillige Spende. Jeder Beitrag hilft uns, Informationsmaterial bereitzustellen und betroffenen Angehörigen zur Seite zu stehen.</p>';
                            }
                            ?>
                        </div>
                        <div class="bank-data-box p-3 small mb-3">
                            <div><strong>Spendenkonto:</strong> Bank Austria</div>
                            <div><strong>IBAN:</strong> AT22 1200 0100 4406 6537</div>
                            <div class="text-muted">Zweck: Spende für Vereinszwecke</div>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(home_url('/spenden')); ?>" class="btn btn-danger w-100">
                            Zur Spendenseite & PayPal &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
