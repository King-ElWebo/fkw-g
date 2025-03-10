<?php
/*
Template Name: Statuten
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
</head>
<body>
    <style>
        .section-bg {
            background: #f0f0f0;
        }
    </style>

    <?php if (current_user_can('edit_posts')) : ?>
        <a href="<?php echo admin_url('post.php?post=' . $page_id . '&action=edit'); ?>" class="btn btn-primary position-fixed top-0 end-0 m-3">Bearbeiten</a>
    <?php endif; ?>

    <!-- A1 -->
    <section class="vision-section min-vh-100 d-flex align-items-center">
        <div class="container py-5">
            <h1 class="mb-5 text-center">Unsere Statuten</h1>
            <div class="row align-items-center g-4">
                <div class="col-md-6 d-flex justify-content-between">
                    <?php $bild1 = get_field("statuten_bild_1", $page_id); ?>
                    <?php if (!empty($bild1) && isset($bild1['url'])): ?>
                        <img src="<?php echo esc_url($bild1['url']); ?>" alt="Statuten Bild 1" class="img-fluid me-2" />
                    <?php else: ?>
                        <p style="color: red;">Kein Bild gefunden.</p>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 text-center">
                    <?php $bild2 = get_field("statuten_bild_2", $page_id); ?>
                    <?php if (!empty($bild2) && isset($bild2['url'])): ?>
                        <img src="<?php echo esc_url($bild2['url']); ?>" alt="Statuten Bild 2" class="img-fluid ms-2" />
                    <?php else: ?>
                        <p style="color: red;">Kein Bild gefunden.</p>
                    <?php endif; ?>
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-danger">Statuten (PDF)</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>STATUTEN</h2>
            <p>
                Friedrich-Karl-Weniger Gesellschaft – Verein zur Förderung von Verbesserungen im System der
                „Pflege daheim“ mit Schwerpunkt 24h-Betreuung.
            </p>
            <p>
                <strong>Präambel</strong><br>
                Der Verein entstand im Gedenken an Friedrich Karl Weniger, der jahrelang seine pflegebedürftige Gattin betreute...
            </p>
            <!-- Hier folgt dein langer Statuten-Text -->
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
