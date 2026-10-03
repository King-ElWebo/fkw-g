<?php
/**
 * Template Name: Datenschutzerklärung
 * 
 * Template for FKW-G Privacy Policy (DSGVO / GDPR).
 * Preserves all statutory data protection statements and supervisory authority details.
 */

get_header();
$page_id = get_queried_object_id();
?>

<div class="fkw-editorial-page">
    <header class="fkw-page-header py-5 bg-white border-bottom">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <span class="fkw-badge mb-3">DSGVO &amp; Privatsphäre</span>
                    <h1 class="fkw-page-title mb-2">Datenschutzerklärung</h1>
                    <p class="text-muted">Informationen zur Verarbeitung Ihrer Daten gemäß Datenschutz-Grundverordnung (DSGVO)</p>
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
                            <h2 class="h4 fw-bold text-navy mb-3">Allgemeine Hinweise</h2>
                            <p class="text-secondary mb-0">
                                Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Beim einfachen Besuch unserer Website werden grundsätzlich keine personenbezogenen Daten verarbeitet oder gespeichert.
                            </p>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Verantwortliche Stelle</h2>
                            <p class="text-secondary mb-2">
                                <strong>Friedrich-Karl-Weniger Gesellschaft</strong><br>
                                ZVR-Nummer: <strong>1102604139</strong><br>
                                Hütteldorfer Straße 248<br>
                                1140 Wien, Österreich
                            </p>
                            <p class="text-secondary mb-0">
                                E-Mail: <a href="mailto:team@fkw-g.at" class="text-danger fw-semibold">team@fkw-g.at</a>
                            </p>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Statistik-Auswertung (Burst Statistics)</h2>
                            <p class="text-secondary mb-0">
                                Wir verwenden das datenschutzfreundliche Statistik-Plugin „Burst Statistics“, um anonymisierte Besucherzahlen und Klicks zur redaktionellen Verbesserung unseres Informationsangebots auszuwerten. Dabei werden keine Cookies gesetzt, keine personenbezogenen Daten erfasst und keine Daten an Dritte übermittelt.
                            </p>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Cookies</h2>
                            <p class="text-secondary mb-0">
                                Unsere Website verwendet keine Marketing-, Tracking- oder Profiling-Cookies zur Nutzerverfolgung.
                            </p>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Freiwillige Spenden über PayPal</h2>
                            <p class="text-secondary mb-2">
                                Für freiwillige Online-Spenden binden wir einen Button von PayPal ein. Wenn Sie diesen nutzen, erfolgt die komplette Zahlungsabwicklung ausschließlich über PayPal (Europe) S.à r.l. et Cie, S.C.A., Luxembourg.
                            </p>
                            <p class="text-secondary mb-0">
                                Weitere Informationen zur Datenverarbeitung finden Sie in der 
                                <a href="https://www.paypal.com/de/webapps/mpp/ua/privacy-full" target="_blank" rel="noopener noreferrer" class="text-danger fw-semibold">Datenschutzerklärung von PayPal</a>.
                            </p>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Mitgliedsantrag (PDF-Download)</h2>
                            <p class="text-secondary mb-0">
                                Das auf der Website bereitgestellte PDF-Formular dient der schriftlichen Vereinsanmeldung. Die Übermittlung und Datenverarbeitung erfolgt offline bzw. per direkter E-Mail-Zusendung und nicht über automatisierte Web-Formulare dieser Seite.
                            </p>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h2 class="h4 fw-bold text-navy mb-3">Ihre Rechte</h2>
                            <p class="text-secondary mb-0">
                                Ihnen stehen grundsätzlich die Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung und Widerspruch zu. Da über den rein informativen Besuch unserer Website keine personenbezogenen Nutzerprofile angelegt werden, entfällt in der Praxis eine webbasierte Rechteausübung.
                            </p>
                        </div>

                        <div>
                            <h2 class="h4 fw-bold text-navy mb-3">Beschwerderecht bei der Aufsichtsbehörde</h2>
                            <p class="text-secondary mb-3">
                                Wenn Sie der Ansicht sind, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt, steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu:
                            </p>
                            <div class="p-3 bg-warm-light rounded border text-secondary">
                                <strong>Österreichische Datenschutzbehörde</strong><br>
                                Barichgasse 40–42, 1030 Wien<br>
                                Telefon: +43 1 52 152-0<br>
                                E-Mail: <a href="mailto:dsb@dsb.gv.at" class="text-navy">dsb@dsb.gv.at</a><br>
                                Web: <a href="https://www.dsb.gv.at" target="_blank" rel="noopener noreferrer" class="text-danger fw-semibold">www.dsb.gv.at</a>
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
