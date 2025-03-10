<?php
/*
Template Name: ueber uns
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
        <h1 class="mb-5 text-center"><?php echo esc_html(get_field('ueber_hauptuberschrift', $page_id)); ?></h1>
        <div class="row align-items-center g-4">
            <p><?php echo esc_html(get_field('ueber_text_1', $page_id)); ?></p>
            <a href="#" class="btn btn-danger">Statuten</a>
        </div>

        <!-- Team Mitglieder -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
            <?php for ($i = 1; $i <= 8; $i++): ?>
                <div class="col">
                    <div class="card h-100">
                        <?php $bild = get_field("ueber_bild_$i", $page_id); ?>
                        <?php if (!empty($bild) && isset($bild['url'])): ?>
                            <img src="<?php echo esc_url($bild['url']); ?>" class="card-img-top" alt="<?php echo esc_attr($bild['alt']); ?>">
                        <?php else: ?>
                            <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                        <?php endif; ?>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo esc_html(get_field("ueber_name_$i", $page_id)); ?></h3>
                            <p class="card-text"><?php echo esc_html(get_field("ueber_position_$i", $page_id)); ?></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
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
