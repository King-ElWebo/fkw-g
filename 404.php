<?php
/**
 * 404 Error Template for FKW-G Theme.
 */

get_header();
?>

<div class="fkw-editorial-page">
    <div class="container py-5 my-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <span class="fkw-badge mb-3">Hinweis</span>
                <h1 class="display-5 fw-bold text-navy mb-3">Seite nicht gefunden (404)</h1>
                <p class="fkw-lead-text text-secondary mb-4">
                    Die von Ihnen aufgerufene Internetadresse existiert leider nicht oder wurde im Rahmen unserer Neugestaltung verschoben.
                </p>
                
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-fkw-primary">
                        Zur Startseite &rarr;
                    </a>
                    <a href="<?php echo esc_url(home_url('/download/')); ?>" class="btn btn-fkw-outline">
                        Zur Dokumentenbibliothek
                    </a>
                    <a href="mailto:team@fkw-g.at" class="btn btn-fkw-secondary">
                        Kontakt aufnehmen
                    </a>
                </div>

                <div class="p-4 bg-warm-light rounded border text-start mx-auto" style="max-width: 500px;">
                    <h2 class="h6 fw-bold text-navy mb-2">Häufig gesuchte Bereiche:</h2>
                    <ul class="list-unstyled mb-0 small">
                        <li class="mb-1">&bull; <a href="<?php echo esc_url(home_url('/was-wir-tun/')); ?>" class="text-decoration-none text-navy">Was wir tun &amp; Initiativen</a></li>
                        <li class="mb-1">&bull; <a href="<?php echo esc_url(home_url('/mitglied-werden/')); ?>" class="text-decoration-none text-navy">Kostenlose Mitgliedschaft</a></li>
                        <li class="mb-1">&bull; <a href="<?php echo esc_url(home_url('/spenden/')); ?>" class="text-decoration-none text-navy">Spenden &amp; Vereinskonto</a></li>
                        <li>&bull; <a href="<?php echo esc_url(home_url('/statuten/')); ?>" class="text-decoration-none text-navy">Vereinsstatuten</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
get_footer();
