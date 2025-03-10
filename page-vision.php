<?php
/*
Template Name: Vision Page
*/

get_header();
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
<body>
    <?php if (current_user_can('edit_posts')) : ?>
        <a href="<?php echo admin_url('post.php?post=' . get_the_ID() . '&action=edit'); ?>" class="btn btn-primary position-fixed top-0 end-0 m-3">Bearbeiten</a>
    <?php endif; ?>
    
    <!-- A1 -->
    <section class="vision-section min-vh-100 d-flex align-items-center">
        <div class="container py-5">
            <h1 class="mb-5 text-center">Unsere Vision</h1>
            <div class="row align-items-center g-4">
                <div class="col-md-7">
                <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('vision_uberschrift_1', get_the_ID())); ?></h2>
                    <p><?php echo esc_html(get_field('vision_text_1', get_the_ID())); ?></p>
                </div>
                <div class="col-md-4 offset-md-1">
                    <?php 
                    $bild1 = get_field('vision_bild_1', get_the_ID());
                    if( !empty($bild1) && is_array($bild1) && isset($bild1['url']) ): ?>
                        <img src="<?php echo esc_url($bild1['url']); ?>" alt="<?php echo esc_attr($bild1['alt']); ?>" class="img-fluid" />
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
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('vision_uberschrift_2', get_the_ID())); ?></h2>
            <p><?php echo esc_html(get_field('vision_text_2', get_the_ID())); ?></p>
        </div>
    </section>
    
    <!-- A3 -->
    <section class="min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 mt-3 mt-md-0">
                    <?php 
                    $bild2 = get_field('vision_bild_2', get_the_ID());
                    if( !empty($bild2) && is_array($bild2) && isset($bild2['url']) ): ?>
                        <img src="<?php echo esc_url($bild2['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild2['alt']); ?>">
                    <?php else: ?>
                        <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('vision_uberschrift_3', get_the_ID())); ?></h2>
                    <p><?php echo esc_html(get_field('vision_text_3', get_the_ID())); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- A4 -->
    <section class="min-vh-100 d-flex flex-column justify-content-center align-items-center section-bg">
        <div class="container">
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('vision_uberschrift_4', get_the_ID())); ?></h2>
            <p><?php echo esc_html(get_field('vision_text_4', get_the_ID())); ?></p>
        </div>
    </section>
    
    <!-- A5 -->
    <section class="min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('vision_uberschrift_5', get_the_ID())); ?></h2>
                    <p><?php echo esc_html(get_field('vision_text_5', get_the_ID())); ?></p>
                </div>
                <div class="col-md-6">
                    <?php 
                    $bild3 = get_field('vision_bild_3', get_the_ID());
                    if( !empty($bild3) && is_array($bild3) && isset($bild3['url']) ): ?>
                        <img src="<?php echo esc_url($bild3['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild3['alt']); ?>"><br>
                    <?php else: ?>
                        <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                    <?php endif; ?>
                    <a class="btn btn-danger" href="#">Mitglied werden</a>
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
