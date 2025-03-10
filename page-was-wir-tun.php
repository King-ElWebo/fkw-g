<?php
/*
Template Name: Was wir tun
*/

get_header();
$page_id = get_queried_object_id();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .section-bg {
            background: #f0f0f0;
        }
    </style>
</head>
<body class="m-0 p-0">

<?php if (current_user_can('edit_posts')) : ?>
    <a href="<?php echo admin_url('post.php?post=' . $page_id . '&action=edit'); ?>" class="btn btn-primary position-fixed top-0 end-0 m-3">Bearbeiten</a>
<?php endif; ?>

<!-- A1 -->
<section class="vision-section min-vh-100 d-flex align-items-center">
    <div class="container py-5">
        <h1 class="mb-5 text-center"><?php echo esc_html(get_field('was_hauptuberschrift', $page_id)); ?></h1>
        <div class="row align-items-center g-4">
            <div class="col-md-7">
                <h2 class="fw-bold"><?php echo esc_html(get_field('was_uberschrift_1', $page_id)); ?></h2>
                <p><?php echo esc_html(get_field('was_text_1', $page_id)); ?></p>
            </div>
            <div class="col-md-4 offset-md-1">
                <?php $bild = get_field("was_bild_1", $page_id); ?>
                <?php if (!empty($bild) && isset($bild['url'])): ?>
                    <img src="<?php echo esc_url($bild['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild['alt']); ?>">
                <?php else: ?>
                    <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- A2 -->
<section class="min-vh-100 d-flex flex-column justify-content-center align-items-center section-bg">
    <div class="container">
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('was_uberschrift_2', $page_id)); ?></h2>
        <p><?php echo esc_html(get_field('was_text_2', $page_id)); ?></p>
        <br>
        <p><strong><?php echo esc_html(get_field('was_text_2_highlight', $page_id)); ?></strong></p>
        <ul>
            <li><?php echo esc_html(get_field('was_punkt_1', $page_id)); ?></li>
            <li><?php echo esc_html(get_field('was_punkt_2', $page_id)); ?></li>
            <li><?php echo esc_html(get_field('was_punkt_3', $page_id)); ?></li>
        </ul>
    </div>
</section>

<!-- A3 -->
<section class="min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 mt-3 mt-md-0">
                <?php $bild = get_field("was_bild_2", $page_id); ?>
                <?php if (!empty($bild) && isset($bild['url'])): ?>
                    <img src="<?php echo esc_url($bild['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild['alt']); ?>">
                <?php else: ?>
                    <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                <?php endif; ?>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('was_uberschrift_3', $page_id)); ?></h2>
                <p><?php echo esc_html(get_field('was_text_3', $page_id)); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- A4 -->
<section class="min-vh-100 d-flex flex-column justify-content-center align-items-center section-bg">
    <div class="container">
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('was_uberschrift_4', $page_id)); ?></h2>
        <p><?php echo esc_html(get_field('was_text_4', $page_id)); ?></p>
    </div>
</section>

<!-- A5 -->
<section class="min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('was_uberschrift_5', $page_id)); ?></h2>
                <p><?php echo esc_html(get_field('was_text_5', $page_id)); ?></p>
            </div>
            <div class="col-md-6">
                <?php $bild = get_field("was_bild_3", $page_id); ?>
                <?php if (!empty($bild) && isset($bild['url'])): ?>
                    <img src="<?php echo esc_url($bild['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild['alt']); ?>"><br>
                <?php else: ?>
                    <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                <?php endif; ?>
                <a class="btn btn-danger" href="#">Spenden</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-light py-4">
    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <span class="mx-3">Facebook</span>
            <span class="mx-3">Instagram</span>
        </div>
        <div class="d-flex justify-content-center mb-2">
            <span class="mx-3">Impressum</span>
            <span class="mx-3">Datenschutz</span>
            <span class="mx-3">AGB</span>
        </div>
        <hr />
        <p class="text-center mb-0">© 2024 Company, Inc</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
get_footer();
?>
