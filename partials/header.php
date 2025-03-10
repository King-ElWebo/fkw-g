<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
</head>
<body>
<header class="border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo" height="40">
            </a>
            
            <!-- Burger Menu Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menü -->
            <div class="collapse navbar-collapse justify-content-center" id="mainNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'hauptmenu',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav mb-2 mb-lg-0',
                    'add_li_class'   => 'nav-item',
                    'link_class'     => 'nav-link px-3'
                ));
                ?>
            </div>
            
            <!-- Spenden Button -->
            <div class="d-flex align-items-center">
                <a href="/spenden" class="btn btn-light border rounded-pill px-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spenden-icon.png" alt="Spenden" height="24" class="me-2">
                    <strong>Spenden</strong>
                </a>
            </div>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
