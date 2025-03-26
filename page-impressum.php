<?php
/*
Template Name: Impressum
*/

get_header();
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Impressum</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .impressum-header {
      background-color: #343a40;
      color: #ffffff;
      padding: 40px 0;
    }
    .impressum-header h1 {
      margin: 0;
      font-size: 3rem;
    }
    .impressum-section {
      padding: 40px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .impressum-section h2 {
      border-bottom: 2px solid #e9ecef;
      padding-bottom: 10px;
      margin-bottom: 20px;
      font-size: 1.75rem;
    }
    .impressum-section a {
      color: #dc3545;
      text-decoration: none;
    }
    .impressum-section a:hover {
      text-decoration: underline;
    }
    footer {
      padding: 15px;
      text-align: center;
      color: #6c757d;
    }

    @media (max-width: 576px) {
      .impressum-header { padding: 20px 0; }
      .impressum-header h1 { font-size: 2.5rem; }
      .impressum-section { padding: 20px; }
      .impressum-section h2 { font-size: 1.5rem; }
      .impressum-section p { font-size: 0.9rem; }
    }
    @media (min-width: 577px) and (max-width: 768px) {
      .impressum-header { padding: 30px 0; }
      .impressum-header h1 { font-size: 2.75rem; }
      .impressum-section { padding: 30px; }
      .impressum-section h2 { font-size: 1.6rem; }
      .impressum-section p { font-size: 1rem; }
    }
  </style>
</head>
<body>

<header class="impressum-header text-center">
  <h1>Impressum</h1>
</header>

<div class="container my-5">
  <div class="impressum-section">
    <h2>Angaben gemäß § 5 ECG und Mediengesetz</h2>
    <p>
      <strong>Friedrich-Karl-Weniger Gesellschaft</strong><br>
      Verein zur Förderung von Verbesserungen im System der "Pflege daheim" mit Schwerpunkt 24h-Betreuung<br>
      ZVR-Nummer: <strong>1102604139</strong>
    </p>
    <p>
      Hütteldorfer Straße 248<br>
      1140 Wien, Österreich
    </p>
    <p>
      Telefon: <a href="tel:+43 676 3424341">+43 676 3424341</a><br>
      E-Mail: <a href="mailto:team@fkw-g.at">team@fkw-g.at</a>
    </p>

    <h2>Vertretung</h2>
    <p>
      Der Verein wird vertreten durch:<br>
      <strong>Dr. Sabine Rödler</strong> (Präsidentin)
    </p>

    <h2>Medieninhaber & Redaktionelle Verantwortung</h2>
    <p>
      Medieninhaber: Friedrich-Karl-Weniger Gesellschaft<br>
      Redaktionelle Verantwortung: Dr. Sabine Rödler
    </p>

    <h2>Blattlinie</h2>
    <p>
      Die Website informiert über die Aktivitäten des Vereins sowie über Themen rund um die Verbesserung des Systems der häuslichen Pflege mit besonderem Schwerpunkt auf der 24h-Betreuung.
    </p>

    <h2>Zweck des Vereins</h2>
    <p>
      Der Verein verfolgt das Ziel, Verbesserungen im Bereich Pflege daheim mit Schwerpunkt auf 24h-Betreuung zu fördern und zu unterstützen.
    </p>

    <h2>Zuständige Behörde</h2>
    <p>
      Landespolizeidirektion Wien – Vereinsbehörde<br>
      Schottenring 7-9, 1010 Wien
    </p>

    <h2>Bankverbindung (Spendenkonto)</h2>
    <p>
      Bank Austria<br>
      IBAN: <strong>AT22 1200 0100 4406 6537</strong>
    </p>

    <h2>Datenschutz</h2>
    <p>
      Informationen zum Datenschutz finden Sie in unserer <a href="/datenschutz">Datenschutzerklärung</a>.
    </p>

    <h2>EU-Streitschlichtung</h2>
    <p>
      Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: 
      <a href="https://ec.europa.eu/consumers/odr/" target="_blank">https://ec.europa.eu/consumers/odr/</a>.<br>
      Unsere E-Mail-Adresse finden Sie oben im Impressum.
    </p>

    <h2>Haftungsausschluss & Urheberrecht</h2>
    <p>
      Die Inhalte dieser Webseite wurden mit größter Sorgfalt erstellt. Für Richtigkeit, Vollständigkeit und Aktualität der Inhalte übernehmen wir keine Gewähr. Inhalte und Werke auf dieser Seite unterliegen dem österreichischen Urheberrecht.
    </p>

    <p class="mt-4 small text-muted">
      Technische Umsetzung der Website durch Benjamin Wilk.<br>
      Benjamin Wilk übernimmt ausdrücklich keine Verantwortung für die Inhalte dieser Webseite.
    </p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php get_footer(); ?>
