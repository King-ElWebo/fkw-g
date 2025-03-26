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
      <strong>Friedrich-Karl-Weniger Gesellschaft</strong><br>
      ZVR-Nummer: <strong>1102604139</strong><br>
      Hütteldorfer Straße 248, 1140 Wien, Österreich<br>
      E-Mail: <a href="mailto:team@fkw-g.at">team@fkw-g.at</a>
    </p>

    <h2>Erhebung und Speicherung personenbezogener Daten</h2>
    <p>Wenn Sie unsere Webseite besuchen, erfasst unser System automatisch Daten und Informationen:</p>
    <ul>
      <li>Browsertyp und -version</li>
      <li>Verwendetes Betriebssystem</li>
      <li>Referrer-URL</li>
      <li>IP-Adresse</li>
      <li>Datum und Uhrzeit des Zugriffs</li>
    </ul>
    <p>Diese Daten werden anonymisiert zur statistischen Auswertung sowie zur Verbesserung unserer Webseite genutzt.</p>

    <h2>Cookies</h2>
    <p>
      Unsere Website verwendet Cookies. Diese dienen dazu, unser Angebot nutzerfreundlicher zu gestalten. Sie können die Speicherung der Cookies in den Einstellungen Ihres Browsers deaktivieren.
    </p>

    <h2>Google Analytics</h2>
    <p>
      Diese Website nutzt Google Analytics, Anbieter ist Google Ireland Limited. Google Analytics verwendet Cookies, um die Nutzung der Website zu analysieren. Die erzeugten Informationen werden an Google übertragen. Sie können dies durch ein Browser-Plugin oder Browsereinstellungen verhindern.
      Weitere Infos unter: <a href="https://policies.google.com/privacy?hl=de" target="_blank">Google Datenschutz</a>.
    </p>

    <h2>PayPal-Spenden</h2>
    <p>
      Wir bieten die Möglichkeit, via PayPal Spenden zu tätigen (PayPal (Europe) S.à r.l. et Cie, S.C.A., Luxembourg). Ihre Zahlungsdaten werden direkt durch PayPal verarbeitet. Details finden Sie in der <a href="https://www.paypal.com/de/webapps/mpp/ua/privacy-full" target="_blank">PayPal Datenschutzerklärung</a>. Wir erhalten lediglich eine Bestätigung der Zahlung und Ihre Kontaktdaten.
    </p>

    <h2>Anmeldeformular (PDF)</h2>
    <p>
      Wir bieten ein PDF-Formular zum Herunterladen. Wenn Sie dieses ausgefüllt zurücksenden, speichern wir die angegebenen Daten ausschließlich zur Vereinsanmeldung und Mitgliederverwaltung. Diese Daten werden nicht an Dritte weitergegeben.
    </p>

    <h2>Speicherdauer personenbezogener Daten</h2>
    <p>
      Wir speichern Daten nur solange nötig oder gesetzlich vorgeschrieben. Nach Ablauf dieser Fristen werden Daten gelöscht.
    </p>

    <h2>Rechtsgrundlage der Verarbeitung</h2>
    <p>
      Wir verarbeiten personenbezogene Daten gemäß Art. 6 DSGVO aufgrund Ihrer Einwilligung, zur Vertragserfüllung, aus rechtlichen Verpflichtungen oder aufgrund berechtigter Interessen.
    </p>

    <h2>Widerruf Ihrer Einwilligung</h2>
    <p>
      Sie können Ihre Einwilligung zur Datenverarbeitung jederzeit widerrufen. Bereits erfolgte Verarbeitungen bleiben unberührt.
    </p>

    <h2>Ihre Rechte</h2>
    <ul>
      <li>Auskunft, Berichtigung, Löschung, Einschränkung</li>
      <li>Widerspruch gegen Verarbeitung</li>
      <li>Widerruf erteilter Einwilligungen</li>
    </ul>

    <h2>Beschwerderecht bei der Aufsichtsbehörde</h2>
    <p>
      Österreichische Datenschutzbehörde:<br>
      Barichgasse 40-42, 1030 Wien<br>
      E-Mail: <a href="mailto:dsb@dsb.gv.at">dsb@dsb.gv.at</a><br>
      Web: <a href="https://www.dsb.gv.at" target="_blank">www.dsb.gv.at</a>
    </p>

  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php get_footer(); ?>
