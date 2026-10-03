<?php
/**
 * Template Name: Spenden Page
 * 
 * Template for FKW-G Donations & Financial Support.
 * Preserves exact Bank Austria account details and PayPal hosted button integration.
 */

get_header();
$page_id = get_queried_object_id();
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
                    <span class="fkw-badge mb-3">Freiwillige Förderung</span>
                    <h1 class="fkw-page-title mb-3">Spenden &amp; Unterstützung</h1>
                    <p class="fkw-lead-text mx-auto" style="max-width: 760px;">
                        Wir freuen uns über jede freiwillige Spende. Ihr Beitrag hilft uns unmittelbar, neue Möglichkeiten der Entlastung und Unterstützung für pflegende Angehörige anzubieten.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Donation Options Section -->
    <section class="py-5 bg-warm-light">
        <div class="container py-lg-4">
            <div class="row g-4 justify-content-center">
                <!-- Option 1: Bank Transfer (Bank Austria) -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm p-4 p-md-5 bg-white rounded-3">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="p-3 bg-danger-subtle rounded-3 text-danger">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                            </div>
                            <div>
                                <span class="text-uppercase small fw-bold text-muted tracking-wide">Option 1</span>
                                <h2 class="h4 fw-bold text-navy mb-0">Banküberweisung</h2>
                            </div>
                        </div>

                        <p class="text-secondary mb-4">
                            Sie können Ihre Spende direkt und gebührenfrei auf das offizielle Vereinskonto der Friedrich-Karl-Weniger Gesellschaft überweisen:
                        </p>

                        <div class="bg-warm-light p-3 p-md-4 rounded-3 border mb-4">
                            <div class="mb-3">
                                <span class="small text-muted d-block mb-1">Empfänger:</span>
                                <strong class="text-navy">Verein Friedrich-Karl-Weniger Gesellschaft</strong>
                            </div>
                            <div class="mb-3">
                                <span class="small text-muted d-block mb-1">Kreditinstitut:</span>
                                <strong class="text-navy">Bank Austria</strong>
                            </div>
                            <div class="mb-3">
                                <span class="small text-muted d-block mb-1">IBAN:</span>
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 bg-white p-2 px-3 rounded border">
                                    <code class="fs-5 fw-bold text-navy" style="letter-spacing: 0.05em;">AT22 1200 0100 4406 6537</code>
                                    <button type="button" class="btn btn-sm btn-outline-secondary js-copy-iban" data-copy="AT22 1200 0100 4406 6537" aria-label="IBAN in die Zwischenablage kopieren">
                                        Kopieren
                                    </button>
                                </div>
                                <span class="copy-feedback iban-feedback mt-1 small" role="status" aria-live="polite">✓ IBAN kopiert!</span>
                            </div>
                            <div>
                                <span class="small text-muted d-block mb-1">Verwendungszweck:</span>
                                <span class="text-secondary">Freiwillige Spende / Unterstützung</span>
                            </div>
                        </div>

                        <p class="small text-muted mb-0">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            ZVR-Zahl: <strong>1102604139</strong> (Österreichisches Zentrales Vereinsregister)
                        </p>
                    </div>
                </div>

                <!-- Option 2: PayPal Direct -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm p-4 p-md-5 bg-white rounded-3 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="p-3 bg-primary-subtle rounded-3 text-primary">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 0 0-2 2v7"/><path d="M12 12h4a2 2 0 0 0 0-4h-4"/></svg>
                                </div>
                                <div>
                                    <span class="text-uppercase small fw-bold text-muted tracking-wide">Option 2</span>
                                    <h2 class="h4 fw-bold text-navy mb-0">Online-Spende via PayPal</h2>
                                </div>
                            </div>

                            <p class="text-secondary mb-4">
                                Unterstützen Sie uns schnell und unkompliziert per PayPal, Kreditkarte oder Lastschrift über den offiziellen Spenden-Button:
                            </p>

                            <!-- Official PayPal Hosted Button Container -->
                            <div class="text-center py-3 bg-warm-light rounded-3 border mb-4">
                                <div id="paypal-container-4L7SMXKCVQFFN" class="mx-auto" style="min-height: 48px;"></div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <p class="small text-muted mb-0">
                                Die Zahlungsabwicklung erfolgt verschlüsselt über PayPal (Europe) S.à r.l. et Cie, S.C.A. Es werden keine Bank- oder Kreditkartendaten auf unserer Website gespeichert.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transparency & Purpose -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="fkw-card p-4 p-md-5 bg-white border shadow-sm">
                        <div class="row align-items-center g-4">
                            <div class="col-md-8">
                                <h3 class="h5 fw-bold text-navy mb-2">Wofür Ihre Unterstützung eingesetzt wird</h3>
                                <p class="text-secondary mb-0">
                                    Alle Spenden fließen direkt und zweckgebunden in die gemeinnützige Vereinsarbeit der Friedrich-Karl-Weniger Gesellschaft. Wir finanzieren damit Informationsmaterialien, Beratungsangebote und Initiativen zur Verbesserung der häuslichen Betreuungsqualität in Österreich.
                                </p>
                            </div>
                            <div class="col-md-4 text-md-end text-start">
                                <a href="mailto:team@fkw-g.at?subject=Frage%20zur%20Spende" class="btn btn-fkw-outline">
                                    Rückfrage zur Spende
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Official PayPal SDK Script (Preserved) -->
<script src="https://www.paypal.com/sdk/js?client-id=BAAao-L_fYAI1BRcsCEaLVVVsT-V0be3uVseARGNVwO1vfkwpowsIAMPawmwus7OHYR7iIpMN3p9ZahI2I&components=hosted-buttons&disable-funding=venmo&currency=EUR"></script>
<script>
    if (typeof paypal !== 'undefined' && paypal.HostedButtons) {
        paypal.HostedButtons({
            hostedButtonId: "4L7SMXKCVQFFN",
        }).render("#paypal-container-4L7SMXKCVQFFN");
    }
</script>

<?php 
get_footer();
