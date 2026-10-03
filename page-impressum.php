<?php
/**
 * Template Name: Impressum
 * 
 * Template for FKW-G Legal Imprint (§ 5 ECG, Mediengesetz).
 * Preserves all statutory mandatory information without alterations.
 */

get_header();
$page_id = get_queried_object_id();
?>

<div class="fkw-editorial-page">
    <header class="fkw-page-header py-5 bg-white border-bottom">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <span class="fkw-badge mb-3">Rechtliche Hinweise</span>
                    <h1 class="fkw-page-title mb-2">Impressum</h1>
                    <p class="text-muted">Angaben gemäß § 5 E-Commerce-Gesetz (ECG) und Mediengesetz</p>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5 bg-warm-light">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card border-0 shadow-sm p-4 p-md-5 bg-white rounded-3">
                        
                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Medieninhaber &amp; Herausgeber</h2>
                            <p class="fs-5 fw-bold text-navy mb-1">Friedrich-Karl-Weniger Gesellschaft</p>
                            <p class="text-secondary mb-3">
                                Verein zur Förderung von Verbesserungen im System der „Pflege daheim“ mit Schwerpunkt 24h-Betreuung
                            </p>
                            <div class="row g-3 text-secondary">
                                <div class="col-sm-6">
                                    <div class="p-3 bg-warm-light rounded border">
                                        <span class="small text-muted d-block">Vereinsregister (Österreich):</span>
                                        <strong>ZVR-Zahl: 1102604139</strong>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="p-3 bg-warm-light rounded border">
                                        <span class="small text-muted d-block">Zuständige Vereinsbehörde:</span>
                                        <strong>LPD Wien – Vereinsbehörde</strong><br>
                                        <span class="small">Schottenring 7–9, 1010 Wien</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Vereinssitz &amp; Kontakt</h2>
                            <p class="text-secondary mb-3">
                                Hütteldorfer Straße 248<br>
                                1140 Wien, Österreich
                            </p>
                            <ul class="list-unstyled text-secondary mb-0">
                                <li class="mb-2">
                                    <strong>Telefon:</strong> 
                                    <a href="tel:+436763424341" class="text-navy fw-semibold ms-1">+43 676 3424341</a>
                                </li>
                                <li>
                                    <strong>E-Mail:</strong> 
                                    <a href="mailto:team@fkw-g.at" class="text-danger fw-semibold ms-1">team@fkw-g.at</a>
                                </li>
                            </ul>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Vertretungsbefugnis &amp; Redaktion</h2>
                            <div class="row g-3 text-secondary">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">Präsidentin &amp; Vertretung:</p>
                                    <strong class="text-navy">Dr. Sabine Rödler</strong>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">Redaktionelle Verantwortung:</p>
                                    <strong class="text-navy">Dr. Sabine Rödler</strong>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Blattlinie &amp; Vereinszweck</h2>
                            <div class="fkw-prose text-secondary">
                                <p><strong>Blattlinie:</strong> Die Website informiert über die Aktivitäten des Vereins sowie über Themen rund um die Verbesserung des Systems der häuslichen Pflege mit besonderem Schwerpunkt auf der 24h-Betreuung.</p>
                                <p class="mb-0"><strong>Zweck des Vereins:</strong> Der Verein verfolgt das Ziel, Verbesserungen im Bereich Pflege daheim mit Schwerpunkt auf 24h-Betreuung zu fördern und zu unterstützen.</p>
                            </div>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Bankverbindung (Spendenkonto)</h2>
                            <div class="p-3 bg-warm-light rounded border">
                                <p class="mb-1 text-secondary"><strong>Bank Austria</strong></p>
                                <p class="mb-0">IBAN: <code class="fs-5 fw-bold text-navy">AT22 1200 0100 4406 6537</code></p>
                            </div>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Online-Streitbeilegung &amp; Datenschutz</h2>
                            <p class="text-secondary">
                                Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: 
                                <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer" class="text-danger fw-semibold">https://ec.europa.eu/consumers/odr/</a>.<br>
                                Unsere E-Mail-Adresse finden Sie oben im Impressum.
                            </p>
                            <p class="text-secondary mb-0">
                                Ausführliche Informationen zum Schutz Ihrer Privatsphäre finden Sie in unserer 
                                <a href="<?php echo esc_url(home_url('/datenschutz/')); ?>" class="text-danger fw-semibold">Datenschutzerklärung</a>.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h2 class="h4 fw-bold text-navy mb-3">Haftungsausschluss &amp; Urheberrecht</h2>
                            <div class="fkw-prose text-secondary small">
                                <p>
                                    Die Inhalte dieser Webseite wurden mit größter Sorgfalt erstellt. Für Richtigkeit, Vollständigkeit und Aktualität der Inhalte übernehmen wir keine Gewähr. Inhalte und Werke auf dieser Seite unterliegen dem österreichischen Urheberrecht.
                                </p>
                            </div>
                        </div>

                        <div class="pt-4 border-top">
                            <p class="small text-muted mb-0">
                                Technische Umsetzung der Website durch Benjamin Wilk.<br>
                                Benjamin Wilk übernimmt ausdrücklich keine Verantwortung für die Inhalte dieser Webseite.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
get_footer();
