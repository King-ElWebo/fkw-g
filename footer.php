<?php
/**
 * Footer Template für FKW-G
 * Friedrich-Karl-Weniger Gesellschaft
 */
?>
</main><!-- /#main-content -->

<!-- Vor-Footer Kontaktbereich für ratsuchende Angehörige -->
<section class="section-compact" style="background-color: var(--fkw-surface-subtle); border-top: 1px solid var(--fkw-border);">
    <div class="container">
        <div class="fkw-contact-callout my-2">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="badge bg-danger-subtle text-danger mb-2" style="font-size: 0.85rem; font-weight: 600;">Persönliche Unterstützung</span>
                    <h3 class="h4 mb-2">Sie wissen noch nicht genau, wo Sie anfangen sollen?</h3>
                    <p class="mb-2 text-muted" style="max-width: 60ch;">
                        Die Pflegesituation eines Angehörigen kann plötzlich eintreffen und überfordern. Schreiben Sie uns einfach kurz, was Sie beschäftigt – wir antworten verständlich und unbürokratisch.
                    </p>
                    <p class="small text-muted mb-0">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                        Ein Klick auf „E-Mail schreiben“ öffnet Ihr E-Mail-Programm. Kein E-Mail-Programm eingerichtet? Nutzen Sie den Button „Adresse kopieren“.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-column align-items-lg-end gap-2">
                        <a href="mailto:team@fkw-g.at" class="btn btn-danger">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            E-Mail schreiben
                        </a>
                        <div class="d-inline-flex align-items-center mt-1">
                            <button type="button" class="btn-copy js-copy-email" data-email="team@fkw-g.at" aria-label="E-Mail-Adresse team@fkw-g.at in die Zwischenablage kopieren">
                                Adresse kopieren (team@fkw-g.at)
                            </button>
                            <span class="copy-feedback" aria-live="polite">Kopiert!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Haupt-Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <!-- Spalte 1: Verein & Auftrag -->
            <div class="col-lg-4 col-md-6">
                <h4>Friedrich-Karl-Weniger Gesellschaft</h4>
                <p class="footer-credits">
                    Verein zur Förderung von Verbesserungen im System der „Pflege daheim“ mit Schwerpunkt 24h-Betreuung.
                </p>
                <p class="small text-light-emphasis mb-2">
                    ZVR-Zahl: <strong>1102604139</strong><br>
                    Zuständige Behörde: Landespolizeidirektion Wien
                </p>
                <div class="mt-3">
                    <a href="<?php echo esc_url(home_url('/statuten')); ?>" class="small text-decoration-underline text-light me-3">Vereinsstatuten</a>
                    <a href="<?php echo esc_url(home_url('/mitglied-werden')); ?>" class="small text-decoration-underline text-light">Kostenlose Mitgliedschaft</a>
                </div>
            </div>

            <!-- Spalte 2: Schnelleinstieg -->
            <div class="col-lg-3 col-md-6">
                <h5>Orientierung & Themen</h5>
                <ul class="list-unstyled small mb-0" style="line-height: 2;">
                    <li><a href="<?php echo esc_url(home_url('/vision')); ?>">Unsere Vision</a></li>
                    <li><a href="<?php echo esc_url(home_url('/was-wir-tun')); ?>">Was wir tun</a></li>
                    <li><a href="<?php echo esc_url(home_url('/geschichte')); ?>">Unsere Geschichte</a></li>
                    <li><a href="<?php echo esc_url(home_url('/ueber-uns')); ?>">Über uns & Vorstand</a></li>
                    <li><a href="<?php echo esc_url(home_url('/download')); ?>">Tipps & Antragsformulare</a></li>
                    <li><a href="<?php echo esc_url(home_url('/news')); ?>">Neuigkeiten & Termine</a></li>
                </ul>
            </div>

            <!-- Spalte 3: Anschrift & Kontakt -->
            <div class="col-lg-2 col-md-6">
                <h5>Kontakt</h5>
                <address class="small text-light-emphasis not-italic mb-2" style="font-style: normal; line-height: 1.6;">
                    Hütteldorfer Straße 248<br>
                    1140 Wien, Österreich
                </address>
                <p class="small mb-1">
                    Telefon:<br>
                    <a href="tel:+436763424341" class="text-light">+43 676 3424341</a>
                </p>
                <p class="small mb-0">
                    E-Mail:<br>
                    <a href="mailto:team@fkw-g.at" class="text-light">team@fkw-g.at</a>
                </p>
            </div>

            <!-- Spalte 4: Spendenverbindung -->
            <div class="col-lg-3 col-md-6">
                <h5>Spendenkonto</h5>
                <p class="small footer-credits mb-2">
                    Ihre Spende fördert unsere unabhängige Aufklärungsarbeit für Familien in ganz Österreich.
                </p>
                <div class="p-2 rounded" style="background: rgba(255, 255, 255, 0.07); border: 1px solid rgba(255, 255, 255, 0.12);">
                    <div class="small text-light-emphasis">Bank: <strong>Bank Austria</strong></div>
                    <div class="small text-light">IBAN: <strong style="letter-spacing: 0.5px;">AT22 1200 0100 4406 6537</strong></div>
                </div>
                <div class="mt-2">
                    <a href="<?php echo esc_url(home_url('/spenden')); ?>" class="small text-danger-emphasis text-decoration-underline">Mehr zu Spenden & PayPal &rarr;</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="row align-items-center small footer-credits">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                &copy; <?php echo date('Y'); ?> Friedrich-Karl-Weniger Gesellschaft. Alle Rechte vorbehalten.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="<?php echo esc_url(home_url('/impressum')); ?>" class="me-3">Impressum & Offenlegung</a>
                <a href="<?php echo esc_url(home_url('/datenschutz')); ?>">Datenschutzerklärung</a>
            </div>
            <div class="col-12 text-center mt-3" style="font-size: 0.8rem; color: #9CA3AF;">
                Bilder: &copy; Adobe Stock, Pixabay und andere lizenzfreie Quellen &ndash; verwendet unter Lizenz. Künstlernachweise liegen vor und können auf Anfrage bereitgestellt werden.
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
