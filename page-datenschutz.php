<?php
/*
Template Name: Datenschutzerklärung
*/

get_header();
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .datenschutz-header {
      background-color: #343a40;
      color: #ffffff;
      padding: 40px 0;
      text-align: center;
    }
    .datenschutz-header h1 {
      margin: 0;
      font-size: 3rem;
    }
    .datenschutz-section {
      padding: 40px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .datenschutz-section h2,
    .datenschutz-section h3,
    .datenschutz-section h5 {
      border-bottom: 2px solid #e9ecef;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    .datenschutz-section a {
      color: #dc3545;
      text-decoration: none;
    }
    .datenschutz-section a:hover {
      text-decoration: underline;
    }
    footer {
      padding: 15px;
      text-align: center;
      color: #6c757d;
    }
    
    /* --- Responsive Anpassungen --- */
    @media (max-width: 576px) {
      .datenschutz-header {
        padding: 20px 0;
      }
      .datenschutz-header h1 {
        font-size: 2.5rem;
      }
      .datenschutz-section {
        padding: 20px;
      }
      .datenschutz-section h2,
      .datenschutz-section h3,
      .datenschutz-section h5 {
        font-size: 1.5rem;
      }
      .datenschutz-section p,
      .datenschutz-section li {
        font-size: 0.9rem;
      }
    }
    @media (min-width: 577px) and (max-width: 768px) {
      .datenschutz-header {
        padding: 30px 0;
      }
      .datenschutz-header h1 {
        font-size: 2.75rem;
      }
      .datenschutz-section {
        padding: 30px;
      }
      .datenschutz-section h2,
      .datenschutz-section h3,
      .datenschutz-section h5 {
        font-size: 1.6rem;
      }
      .datenschutz-section p,
      .datenschutz-section li {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<header class="datenschutz-header text-center">
  <h1>Datenschutzerklärung</h1>
</header>

<div class="container my-5">
  <div class="datenschutz-section">
    <h2>Allgemeine Hinweise</h2>
    <p>
      Die folgenden Hinweise geben einen Überblick darüber, was mit Ihren personenbezogenen Daten passiert, 
      wenn Sie unsere Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können.
    </p>

    <h2>Verantwortliche Stelle</h2>
    <p>
      <strong>Friedrich-Karl-Weniger Gesellschaft</strong> –  
      Verein zur Förderung von Verbesserungen im System der "Pflege daheim" mit Schwerpunkt 24h-Betreuung  
      <br>ZVR-Nummer: **XXXXXX**  
      <br>Hütteldorfer Straße, 1140 Wien, Österreich
      <br>Email: <a href="mailto:team@fkw-g.at">team@fkw-g.at</a>
    </p>

    <h2>Erhebung und Speicherung personenbezogener Daten</h2>
    <p>
      Wenn Sie unsere Webseite besuchen, erfasst unser System automatisch Daten und Informationen. Dies sind insbesondere:
    </p>
    <ul>
      <li>Browsertyp und -version</li>
      <li>Verwendetes Betriebssystem</li>
      <li>Referrer-URL</li>
      <li>IP-Adresse</li>
      <li>Datum und Uhrzeit des Zugriffs</li>
    </ul>
    <p>
      Diese Daten werden anonymisiert und ausschließlich zur statistischen Auswertung sowie zur Verbesserung unserer Webseite genutzt.
    </p>

    <h2>Cookies</h2>
    <p>
      Unsere Website verwendet Cookies. Diese dienen dazu, unser Angebot nutzerfreundlicher zu gestalten. 
      Sie können die Speicherung der Cookies in den Einstellungen Ihres Browsers deaktivieren. 
    </p>

    <h2>SSL-Verschlüsselung</h2>
    <p>
      Diese Website nutzt aus Sicherheitsgründen eine SSL-Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie an 
      der Adresszeile des Browsers ("https://") und dem Schloss-Symbol in der Browserzeile.
    </p>

    <h2>Hosting</h2>
    <p>
      Diese Website wird bei <strong>Easyname</strong> gehostet. Der Provider erhebt Logfiles, 
      um die Sicherheit und Stabilität der Webseite zu gewährleisten.
    </p>

    <h2>Eingebettete Inhalte von Drittanbietern</h2>
    <h5>Google Fonts</h5>
    <p>
      Unsere Website verwendet Google Fonts zur einheitlichen Darstellung von Schriftarten. Anbieter ist die 
      <strong>Google Ireland Limited</strong>, Gordon House, Barrow Street, Dublin 4, Irland.
      Weitere Informationen: 
      <a href="https://developers.google.com/fonts/faq" target="_blank">Google Fonts FAQ</a> | 
      <a href="https://policies.google.com/privacy?hl=de" target="_blank">Google Datenschutzerklärung</a>
    </p>

    <h5>YouTube</h5>
    <p>
      Unsere Website bindet Videos von YouTube ein. Anbieter ist die <strong>Google Ireland Limited</strong>. 
      Sobald Sie ein YouTube-Video starten, wird eine Verbindung zu den Servern von YouTube hergestellt.
      Weitere Informationen finden Sie in der 
      <a href="https://policies.google.com/privacy?hl=de" target="_blank">Datenschutzerklärung von Google</a>.
    </p>

    <h2>Google Analytics</h2>
    <p>
      Diese Website nutzt den Webanalysedienst Google Analytics. Anbieter ist die Google Ireland Limited. 
      Google Analytics verwendet Cookies, um eine Analyse der Webseitennutzung zu ermöglichen. 
      Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern.
    </p>
    <p>
      Weitere Informationen zur Datenverarbeitung durch Google finden Sie unter: 
      <a href="https://policies.google.com/privacy?hl=de" target="_blank">Google Datenschutz</a>.
    </p>

    <h2>Ihre Rechte</h2>
    <p>Sie haben das Recht auf:</p>
    <ul>
      <li>Auskunft über Ihre gespeicherten Daten</li>
      <li>Berichtigung unrichtiger Daten</li>
      <li>Löschung Ihrer Daten</li>
      <li>Einschränkung der Verarbeitung</li>
      <li>Widerspruch gegen die Verarbeitung</li>
    </ul>
    <p>
      Wenn Sie Fragen zum Datenschutz haben oder Ihre Rechte wahrnehmen möchten, kontaktieren Sie uns unter 
      <a href="mailto:team@fkw-g.at">team@fkw-g.at</a>.
    </p>

    <h2>Kontakt</h2>
    <p>
      <strong>Friedrich-Karl-Weniger Gesellschaft</strong>  
      <br>Hütteldorfer Straße, 1140 Wien, Österreich
      <br>Email: <a href="mailto:team@fkw-g.at">team@fkw-g.at</a>
    </p>

    <p class="mt-4">
      Quelle: <a href="https://www.fairesrecht.at/kostenlos-datenschutzerklaerung-erstellen-generator.php">Datenschutzgenerator Österreich DSGVO</a>
    </p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php get_footer(); ?>
