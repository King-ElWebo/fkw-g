<?php
/*
Template Name: Homepage
*/

get_header();
$page_id = get_queried_object_id();

// ACF Felder für Homepage abrufen
$hero_uberschrift       = get_field('hero_uberschrift', $page_id);
$hero_text              = get_field('hero_text', $page_id);
$hero_hintergrund       = get_field('hero_hintergrund', $page_id);

$pflege_uberschrift     = get_field('pflege_uberschrift', $page_id);
$pflege_text            = get_field('pflege_text', $page_id);

$vision_uberschrift     = get_field('vision_uberschrift', $page_id);
$vision_text            = get_field('vision_text', $page_id);
$vision_bild            = get_field('vision_bild', $page_id);

$was_uberschrift        = get_field('was_uberschrift', $page_id);
$was_bild               = get_field('was_bild', $page_id);
$was_intro_text         = get_field('was_intro_text', $page_id);
$was_text_punkt_1       = get_field('was_text_punkt_1', $page_id);
$was_text_punkt_2       = get_field('was_text_punkt_2', $page_id);
$was_text_punkt_3       = get_field('was_text_punkt_3', $page_id);
$was_text_punkt_4       = get_field('was_text_punkt_4', $page_id);
$was_text               = get_field('was_text', $page_id);

$geschichte_uberschrift = get_field('geschichte_uberschrift', $page_id);
$geschichte_text        = get_field('geschichte_text', $page_id);
$geschichte_bild        = get_field('geschichte_bild', $page_id);

$uns_uberschrift        = get_field('uns_uberschrift', $page_id);
$uns_text               = get_field('uns_text', $page_id);

$freiwillige_uberschrift = get_field('freiwillige_uberschrift', $page_id);
$freiwillige_text        = get_field('freiwillige_text', $page_id);

// Bildpfade mit verlässlichem Fallback (Original AdobeStock Motiv mit Händen)
$hero_fallback_img = get_template_directory_uri() . '/assets/images/AdobeStock_374846559.jpg';
$hero_img_src = fkw_get_image_src($hero_hintergrund, $hero_fallback_img);
$hero_img_alt = fkw_get_image_alt($hero_hintergrund, 'Pflege daheim – Fürsorgliche Begleitung und Orientierung');
?>

<?php if (current_user_can('edit_posts')) : ?>
    <div class="container mt-2">
        <a href="<?php echo esc_url(admin_url('post.php?post=' . $page_id . '&action=edit')); ?>" class="btn btn-outline-secondary btn-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1" aria-hidden="true"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            Seite bearbeiten
        </a>
    </div>
<?php endif; ?>

<!-- 1. Hero Sektion: Großes, warmes Hintergrundfoto über die volle Breite, mit sanftem Verlauf und klarer Textstruktur -->
<section class="hero-section hero-fullwidth" style="--hero-bg: url('<?php echo esc_url($hero_img_src); ?>');">
    <div class="hero-overlay" aria-hidden="true"></div>
    <div class="container hero-container position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-md-11 col-lg-8 col-xl-7">
                <div class="hero-content">
                    <div class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="me-1 flex-shrink-0" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        <span>Gemeinnützige Initiative in Österreich</span>
                    </div>

                    <h1 class="hero-title">
                        <?php 
                        if (!empty($hero_uberschrift)) {
                            echo nl2br(esc_html($hero_uberschrift));
                        } else {
                            echo 'Pflege daheim.<br>Gemeinsam Orientierung finden.';
                        }
                        ?>
                    </h1>

                    <div class="hero-lead">
                        <?php 
                        if (!empty($hero_text)) {
                            echo fkw_render_content($hero_text);
                        } else {
                            echo '<p>Nicht mehr allein bei Problemen der „Pflege daheim“. Gemeinsam bündeln wir Erfahrungen und Kräfte, um verlässliche Lösungen für pflegebedürftige Menschen und ihre Angehörigen zu schaffen.</p>';
                        }
                        ?>
                    </div>

                    <!-- Zwei klare Primär-Aktionen -->
                    <div class="hero-actions d-flex flex-wrap gap-3 align-items-center">
                        <a href="mailto:team@fkw-g.at?subject=Anfrage%20Pflege%20daheim" class="btn btn-danger btn-lg">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            Kontakt aufnehmen
                        </a>
                        <a href="<?php echo esc_url(home_url('/download')); ?>" class="btn btn-outline-dark btn-lg">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            Tipps &amp; Formulare ansehen
                        </a>
                    </div>

                    <!-- Reassurance Notizen -->
                    <div class="hero-trust-notes d-flex flex-wrap align-items-center gap-3 mt-4 text-muted small">
                        <span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1 text-success" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Unabhängige &amp; verlässliche Orientierung
                        </span>
                        <span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1 text-success" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <a href="<?php echo esc_url(home_url('/mitglied-werden')); ?>" class="text-secondary text-decoration-underline">Mitgliedschaft 100% kostenlos</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Pflege daheim: Die 4 zentralen Vereinssäulen (Vollständige Wiederherstellung aller ACF-Karten) -->
<section id="pflege-container" class="section section-bg">
    <div class="container text-center">
        <span class="badge bg-secondary-subtle text-dark border px-3 py-2 mb-2" style="font-size: 0.85rem;">Orientierung &amp; Schwerpunkte</span>
        <h2 class="h1 fw-bold mb-3">
            <?php 
            if (!empty($pflege_uberschrift)) {
                echo esc_html($pflege_uberschrift);
            } else {
                echo 'Pflege daheim soll für alle möglich sein';
            }
            ?>
        </h2>
        <div class="lead mx-auto mb-5 text-muted" style="max-width: 75ch;">
            <?php 
            if (!empty($pflege_text)) {
                echo fkw_render_content($pflege_text);
            } else {
                echo '<p>Wir wollen, dass der Wunsch, ‚zuhause gut betreut sein‘ für alle erfüllbar wird. Dafür braucht es Lösungen und Verbesserungen im System der ‚Pflege daheim‘ – von der Finanzierung bis zum Überwinden bürokratischer Hindernisse.</p>';
            }
            ?>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 text-start">
            <?php 
            // Fallback-Konfiguration für die 4 Karten
            $cards_fallback = [
                1 => [
                    'titel' => 'Unsere Vision',
                    'desc'  => 'Häusliche Pflege für alle leistbar, sicher und mit Würde gestalten.',
                    'img'   => get_template_directory_uri() . '/assets/images/hand-4661763_1920.jpg',
                    'alt'   => 'Hände halten sich gegenseitig',
                    'link'  => home_url('/vision'),
                ],
                2 => [
                    'titel' => 'Was wir tun',
                    'desc'  => 'Information, Orientierung und Vertretung von Interessen Betroffener.',
                    'img'   => get_template_directory_uri() . '/assets/images/Screenshot 2025-03-08 141527.png',
                    'alt'   => 'Beratung und Austausch',
                    'link'  => home_url('/was-wir-tun'),
                ],
                3 => [
                    'titel' => 'Unsere Geschichte',
                    'desc'  => 'Aus persönlicher Betroffenheit und Dankbarkeit heraus gegründet.',
                    'img'   => get_template_directory_uri() . '/assets/images/Foto Friedrich Karl Weniger.jpg',
                    'alt'   => 'Friedrich Karl Weniger',
                    'link'  => home_url('/geschichte'),
                ],
                4 => [
                    'titel' => 'Über uns',
                    'desc'  => 'Lernen Sie das engagierte Team und die Struktur des Vereins kennen.',
                    'img'   => get_template_directory_uri() . '/assets/images/team-4529717_1920.jpg',
                    'alt'   => 'Team und Vorstand',
                    'link'  => home_url('/ueber-uns'),
                ],
            ];

            for ($i = 1; $i <= 4; $i++): 
                $card_titel = get_field("pflege_titel_$i", $page_id);
                $card_desc  = get_field("pflege_beschreibung_$i", $page_id);
                $card_bild  = get_field("pflege_bild_$i", $page_id);
                $card_link  = get_field("pflege_button_link_$i", $page_id);

                $resolved_titel = !empty($card_titel) ? $card_titel : $cards_fallback[$i]['titel'];
                $resolved_desc  = !empty($card_desc)  ? $card_desc  : $cards_fallback[$i]['desc'];
                $resolved_img   = fkw_get_image_src($card_bild, $cards_fallback[$i]['img']);
                $resolved_alt   = fkw_get_image_alt($card_bild, $cards_fallback[$i]['alt']);
                $resolved_link  = !empty($card_link)  ? fkw_esc_button_link($card_link, $cards_fallback[$i]['link']) : $cards_fallback[$i]['link'];
            ?>
                <div class="col">
                    <div class="card h-100 border shadow-sm rounded-3 overflow-hidden d-flex flex-column bg-white">
                        <div style="height: 180px; overflow: hidden; background-color: var(--fkw-surface-subtle);">
                            <img src="<?php echo esc_url($resolved_img); ?>" 
                                 class="card-img-top w-100 h-100" 
                                 style="object-fit: cover;" 
                                 alt="<?php echo esc_attr($resolved_alt); ?>"
                                 loading="lazy">
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h3 class="card-title h5 fw-bold text-navy mb-2"><?php echo esc_html($resolved_titel); ?></h3>
                            <div class="card-text text-muted small flex-grow-1 mb-3">
                                <?php echo fkw_render_content($resolved_desc); ?>
                            </div>
                            <div class="mt-auto">
                                <a href="<?php echo esc_url($resolved_link); ?>" class="btn btn-outline-danger w-100 btn-sm">
                                    Mehr erfahren &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- 3. Unsere Vision (id="vision", mit vollständiger ACF-Ausgabe von Bild und Text) -->
<section id="vision" class="section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-6">
                <span class="badge bg-secondary-subtle text-dark border px-3 py-2 mb-2" style="font-size: 0.85rem;">Blick nach vorn</span>
                <h2 class="mb-3">
                    <?php 
                    if (!empty($vision_uberschrift)) {
                        echo esc_html($vision_uberschrift);
                    } else {
                        echo 'Unsere Vision';
                    }
                    ?>
                </h2>
                <div class="text-muted mb-4">
                    <?php 
                    if (!empty($vision_text)) {
                        echo fkw_render_content($vision_text);
                    } else {
                        echo '<p>Die Pflege zu Hause ist für viele Menschen eine der größten Herausforderungen. Unsere Vision ist es, diese Belastungen zu lindern und eine Zukunft zu schaffen, in der pflegebedürftige Menschen und ihre pflegenden Angehörigen nicht allein gelassen werden.</p><p>Wir setzen uns für transparente Strukturen, faire Bedingungen in der 24-Stunden-Betreuung und unbürokratische Unterstützung ein.</p>';
                    }
                    ?>
                </div>
                <div>
                    <a href="<?php echo esc_url(home_url('/vision')); ?>" class="btn btn-danger">
                        Mehr zur Vision erfahren &rarr;
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <?php 
                $vision_img_src = fkw_get_image_src($vision_bild, get_template_directory_uri() . '/assets/images/hands-1846428_1920.jpg');
                $vision_img_alt = fkw_get_image_alt($vision_bild, 'Unsere Vision für würdevolle Pflege daheim');
                ?>
                <div class="fkw-card p-2 shadow-sm rounded-4 overflow-hidden">
                    <img src="<?php echo esc_url($vision_img_src); ?>" 
                         alt="<?php echo esc_attr($vision_img_alt); ?>" 
                         class="img-fluid rounded-3 w-100" 
                         style="max-height: 400px; object-fit: cover;"
                         loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Was wir tun (id="wir", mit vollständiger ACF-Ausgabe inkl. aller Listenpunkte) -->
<section id="wir" class="section section-bg">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <?php 
                $was_img_src = fkw_get_image_src($was_bild, get_template_directory_uri() . '/assets/images/senior-woman-talking-with-her-doctor.jpg');
                $was_img_alt = fkw_get_image_alt($was_bild, 'Was wir tun – Persönliche Hilfestellung und Begleitung');
                ?>
                <div class="fkw-card p-2 shadow-sm rounded-4 overflow-hidden">
                    <img src="<?php echo esc_url($was_img_src); ?>" 
                         alt="<?php echo esc_attr($was_img_alt); ?>" 
                         class="img-fluid rounded-3 w-100" 
                         style="max-height: 400px; object-fit: cover;"
                         loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Aktivitäten &amp; Unterstützung</span>
                <h2 class="mb-3">
                    <?php 
                    if (!empty($was_uberschrift)) {
                        echo esc_html($was_uberschrift);
                    } else {
                        echo 'Was wir tun';
                    }
                    ?>
                </h2>

                <?php if (!empty($was_intro_text)): ?>
                    <div class="lead mb-3 text-secondary" style="font-size: 1.05rem;">
                        <?php echo fkw_render_content($was_intro_text); ?>
                    </div>
                <?php else: ?>
                    <p class="lead mb-3 text-secondary" style="font-size: 1.05rem;">
                        Wir unterstützen pflegebedürftige Menschen und deren Angehörige durch praktische Hilfestellungen und konsequente Aufklärungsarbeit:
                    </p>
                <?php endif; ?>

                <!-- Die 4 Aufzählungspunkte aus ACF -->
                <ul class="list-unstyled mb-4">
                    <?php 
                    $punkte = [
                        $was_text_punkt_1 ?: 'Hilfestellung bei der Organisation und Finanzierung häuslicher Betreuung',
                        $was_text_punkt_2 ?: 'Unterstützung beim Ausfüllen von Anträgen (Pflegegeld, Zuschüsse)',
                        $was_text_punkt_3 ?: 'Erfahrungsaustausch und Vernetzung unter pflegenden Angehörigen',
                        $was_text_punkt_4 ?: 'Aufzeigen von gesetzlichen Lücken und Problemen bei den zuständigen Stellen',
                    ];
                    foreach ($punkte as $punkt):
                        if (empty($punkt)) continue;
                    ?>
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <span class="text-danger fw-bold fs-5" style="line-height: 1;">&bull;</span>
                            <span class="text-secondary"><?php echo esc_html($punkt); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <?php if (!empty($was_text)): ?>
                    <div class="text-muted mb-4">
                        <?php echo fkw_render_content($was_text); ?>
                    </div>
                <?php endif; ?>

                <div>
                    <a href="<?php echo esc_url(home_url('/was-wir-tun')); ?>" class="btn btn-danger">
                        Mehr über unsere Aktivitäten &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Unsere Geschichte (id="geschichte", mit ACF Bild und Text) -->
<section id="geschichte" class="section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7">
                <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Persönlicher Anlass</span>
                <h2 class="mb-3">
                    <?php 
                    if (!empty($geschichte_uberschrift)) {
                        echo esc_html($geschichte_uberschrift);
                    } else {
                        echo 'Unsere Geschichte';
                    }
                    ?>
                </h2>
                <div class="text-muted mb-4">
                    <?php 
                    if (!empty($geschichte_text)) {
                        echo fkw_render_content($geschichte_text);
                    } else {
                        echo '<p>Die Entstehung der Friedrich-Karl-Weniger Gesellschaft beruht auf persönlicher Erfahrung und dem Erleben, vor welchen oft unüberwindbar scheinenden Hürden Familien stehen, wenn Angehörige rund um die Uhr Betreuung brauchen.</p><p>Friedrich Karl Weniger pflegte seine erkrankte Gattin über viele Jahre hinweg aufopferungsvoll zu Hause. Seine Dankbarkeit und sein Wunsch, anderen Familien diesen schweren Weg zu erleichtern, gaben den Anstoß zur Vereinsgründung.</p>';
                    }
                    ?>
                </div>
                <div>
                    <a href="<?php echo esc_url(home_url('/geschichte')); ?>" class="btn btn-outline-dark">
                        Die ganze Geschichte lesen &rarr;
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <?php 
                $gesch_img_src = fkw_get_image_src($geschichte_bild, get_template_directory_uri() . '/assets/images/Foto Friedrich Karl Weniger.jpg');
                $gesch_img_alt = fkw_get_image_alt($geschichte_bild, 'Friedrich Karl Weniger – Namensgeber des Vereins');
                ?>
                <div class="fkw-card p-3 shadow-sm rounded-4 text-center">
                    <img src="<?php echo esc_url($gesch_img_src); ?>" 
                         alt="<?php echo esc_attr($gesch_img_alt); ?>" 
                         class="img-fluid rounded-3 mb-3" 
                         style="max-height: 380px; object-fit: cover;"
                         loading="lazy">
                    <p class="small text-muted mb-0"><strong>Friedrich Karl Weniger</strong> &ndash; Namensgeber des Vereins</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Über uns & Vorstand (id="uns") -->
<section id="uns" class="section section-bg">
    <div class="container text-center">
        <span class="badge bg-secondary-subtle text-dark border px-3 py-2 mb-2" style="font-size: 0.85rem;">Verein &amp; Engagement</span>
        <h2 class="mb-3">
            <?php 
            if (!empty($uns_uberschrift)) {
                echo esc_html($uns_uberschrift);
            } else {
                echo 'Über uns &amp; den Vorstand';
            }
            ?>
        </h2>
        <div class="text-muted mx-auto mb-4" style="max-width: 65ch;">
            <?php 
            if (!empty($uns_text)) {
                echo fkw_render_content($uns_text);
            } else {
                echo '<p>Wir sind eine gemeinnützige Initiative mit Sitz in Wien, geleitet von Menschen, die die Herausforderungen der Pflege aus eigener Erfahrung kennen. Wir setzen uns ehrenamtlich und unabhängig für praxisnahe Verbesserungen ein.</p>';
            }
            ?>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="<?php echo esc_url(home_url('/ueber-uns')); ?>" class="btn btn-danger">
                Vorstand und Team ansehen
            </a>
            <a href="<?php echo esc_url(home_url('/statuten')); ?>" class="btn btn-outline-dark">
                Vereinsstatuten einsehen
            </a>
        </div>
    </div>
</section>

<!-- 7. Freiwillige Unterstützung, Mitgliedschaft & Spenden -->
<section class="section">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <!-- Karte Links: Kostenlose Mitgliedschaft -->
            <div class="col-lg-6">
                <div class="fkw-card d-flex flex-column justify-content-between h-100 p-4 p-md-5 border rounded-4 shadow-sm bg-white">
                    <div>
                        <span class="badge bg-success-subtle text-success mb-2" style="font-size: 0.85rem; font-weight: 600;">100% Beitragsfrei</span>
                        <h3 class="h4 fw-bold text-navy mb-3">Mitglied werden im Verein</h3>
                        <p class="text-secondary mb-3">
                            Mit Ihrer Mitgliedschaft stärken Sie unsere Stimme für pflegende Angehörige und Betroffene in ganz Österreich. Als Mitglied erhalten Sie fundierte Orientierung und regelmäßige Updates zu rechtlichen Neuerungen.
                        </p>
                        <ul class="list-unstyled text-secondary small mb-4">
                            <li class="mb-2"><strong class="text-success">✓</strong> Keine Mitgliedsbeiträge oder finanziellen Verpflichtungen</li>
                            <li class="mb-2"><strong class="text-success">✓</strong> Einfaches Beitrittsformular als PDF zum Ausdrucken</li>
                            <li><strong class="text-success">✓</strong> Gemeinsam für bessere Pflegebedingungen eintreten</li>
                        </ul>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(home_url('/mitglied-werden')); ?>" class="btn btn-outline-dark w-100 py-2">
                            Zur kostenlosen Mitgliedschaft &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Karte Rechts: Freiwillige Spenden -->
            <div class="col-lg-6">
                <div class="fkw-card d-flex flex-column justify-content-between h-100 p-4 p-md-5 border rounded-4 shadow-sm bg-white">
                    <div>
                        <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Gemeinnützig</span>
                        <h3 class="h4 fw-bold text-navy mb-3">
                            <?php 
                            if (!empty($freiwillige_uberschrift)) {
                                echo esc_html($freiwillige_uberschrift);
                            } else {
                                echo 'Freiwillige Unterstützung';
                            }
                            ?>
                        </h3>
                        <div class="text-secondary mb-3">
                            <?php 
                            if (!empty($freiwillige_text)) {
                                echo fkw_render_content($freiwillige_text);
                            } else {
                                echo '<p>Wir freuen uns über jede freiwillige Spende. Jeder Beitrag hilft uns, Informationsmaterial bereitzustellen, Leitfäden zu drucken und betroffenen Angehörigen persönlich zur Seite zu stehen.</p>';
                            }
                            ?>
                        </div>
                        <div class="bank-data-box p-3 small rounded-3 border bg-warm-light mb-3">
                            <div class="mb-1"><strong>Spendenkonto:</strong> Bank Austria</div>
                            <div class="mb-1"><strong>IBAN:</strong> <code class="fw-bold text-navy">AT22 1200 0100 4406 6537</code></div>
                            <div class="text-muted">Zweck: Freiwillige Spende / Unterstützung</div>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(home_url('/spenden')); ?>" class="btn btn-danger w-100 py-2">
                            Zur Spendenseite &amp; PayPal &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
