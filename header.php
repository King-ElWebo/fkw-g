<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
</head>
<body>
<header>
    <h1><?php bloginfo('name'); ?></h1>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'hauptmenu')); ?>
    </nav>
</header>
