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
    
    /* --- Responsive Anpassungen --- */
    @media (max-width: 576px) {
      .impressum-header {
        padding: 20px 0;
      }
      .impressum-header h1 {
        font-size: 2.5rem;
      }
      .impressum-section {
        padding: 20px;
      }
      .impressum-section h2 {
        font-size: 1.5rem;
      }
      .impressum-section p {
        font-size: 0.9rem;
      }
    }
    @media (min-width: 577px) and (max-width: 768px) {
      .impressum-header {
        padding: 30px 0;
      }
      .impressum-header h1 {
        font-size: 2.75rem;
      }
      .impressum-section {
        padding: 30px;
      }
      .impressum-section h2 {
        font-size: 1.6rem;
      }
      .impressum-section p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<header class="impressum-header text-center">
  <h1>Impressum</h1>
</header>

<div class="container my-5">
  <div class="impressum-section">
    <h2>Angaben gemäß § 5 TMG</h2>
    <p>
      **Friedrich-Karl-Weniger Gesellschaft** –  
      Verein zur Förderung von Verbesserungen im System der "Pflege daheim" mit Schwerpunkt 24h-Betreuung  
      <br>ZVR-Nummer: **1102604139**
    </p>
    <p>
      Hütteldorfer Straße  
      1140 Wien  
      Österreich
    </p>
    <p>
      E-Mail: <a href="mailto:team@fkw-g.at">team@fkw-g.at</a>
    </p>

    <h2>Vertretung</h2>
    <p>
      Der Verein wird vertreten durch:  
      <strong>Dr. Sabine Rödler</strong> (Präsidentin)
    </p>

    <h2>Medieninhaber & Redaktionelle Verantwortung</h2>
    <p>
      **Medieninhaber**: Friedrich-Karl-Weniger Gesellschaft  
      **Redaktionelle Verantwortung**: Dr. Sabine Rödler
    </p>

    <h2>Bankverbindung (Spendenkonto)</h2>
    <p>
      Bank Austria  
      IBAN: **AT22 1200 0100 4406 6537**
    </p>

    <h2>Haftungsausschluss</h2>
    <p>
      Die Inhalte dieser Webseite wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und 
      Aktualität der Inhalte übernehmen wir jedoch keine Gewähr.
    </p>
    <p>
      Als Betreiber dieser Website sind wir für eigene Inhalte nach den allgemeinen Gesetzen verantwortlich.  
      Wir sind jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder 
      nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder 
      Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt.
    </p>

    <h2>Haftung für Links</h2>
    <p>
      Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. 
      Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen.  
      Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.  
      Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft.  
      Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.
    </p>

    <h2>Urheberrecht</h2>
    <p>
      Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem österreichischen Urheberrecht.  
      Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes 
      bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind 
      nur für den privaten, nicht kommerziellen Gebrauch gestattet.
    </p>

    <h2>Verbraucherstreitbeilegung / Universalschlichtungsstelle</h2>
    <p>
      Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.
    </p>

    <p class="mt-4">
      Quelle: <a href="https://www.e-recht24.de">eRecht24</a>
    </p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php get_footer(); ?>
