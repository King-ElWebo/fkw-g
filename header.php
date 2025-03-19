<?php
// Die ID der Startseite abrufen, um globale ACF-Daten von dort zu holen
$homepage_id = get_option('page_on_front');

// ACF-Felder abrufen (von der Homepage)
$logo_bild = get_field('logo_bild', $homepage_id);
$spenden_bild = get_field('spenden_bild', $homepage_id);

// Sicherstellen, dass die Bilder auf allen Seiten ausgegeben werden
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FKW-G</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        .navbar {
            background-color: #F6F6F6;
            border-bottom: 2px solid #000;
        }
        .navbar-nav .nav-link {
            font-weight: bold;
            color: #212529;
            font-size: 20px !important;
        }
        .navbar-nav .nav-link:hover {
            color: #000;
        }
        .donate-btn {
            border-left: 2px solid #000;
            padding-left: 15px;
            display: flex;
            align-items: center;
        }
        .donate-btn img {
            width: 30px;
            height: 30px;
            margin-right: 5px;
        }
        .navimg{
            max-height: 60px !important;
            margin: 0px !important;
            padding: 0px !important;
        }
    </style>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img class="navimg" src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO_Verein_Weniger_Reinzeichnung_Pfade.png" alt="Standard-Logo" height="60">
        </a>

        <!-- Navbar-Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="/vision">Unsere Vision</a></li>
                <li class="nav-item"><a class="nav-link" href="/was-wir-tun">Was wir tun</a></li>
                <li class="nav-item"><a class="nav-link" href="/geschichte">Unsere Geschichte</a></li>
                <li class="nav-item"><a class="nav-link" href="/ueber-uns">Über uns</a></li>
                <li class="nav-item"><a class="nav-link" href="/mitglied-werden">Mitglied werden</a></li>
                <li class="nav-item"><a class="nav-link" href="mailto:team@fkw-g.at">Kontakt</a></li>
            </ul>

            <!-- Spenden-Button mit Bild -->
            <div class="donate-btn d-flex align-items-center">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img class="navimg" src="<?php echo get_template_directory_uri(); ?>/assets/images/Spendenbutton.jpg" alt="Standard-Logo" height="30">
            </a>
                <a class="nav-link fw-bold" href="/spenden">Spenden</a>
            </div>
        </div>
    </div>
</nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
