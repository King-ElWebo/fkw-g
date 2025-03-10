<?php
/*
Template Name: Homepage
*/

get_header();
$page_id = get_queried_object_id();
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php the_title(); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .hero-section {
      background: url('<?php echo esc_url(get_field("hero_hintergrund", $page_id)); ?>') 
                  center center / cover no-repeat;
      min-height: 100vh;
      position: relative;
      z-index: 1;
    }
    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: -1;
    }
    .section-bg {
      background: #f0f0f0;
    }
  </style>
</head>
<body class="m-0 p-0">

  <!-- Debugging: Prüfen, ob ACF aktiv ist -->
  <pre>
  <?php
  if (function_exists('get_field')) {
      echo "✅ ACF ist aktiv! \n";
  } else {
      echo "❌ ACF ist nicht aktiv! Bitte das Plugin aktivieren. \n";
  }
  echo "Aktuelle Seiten-ID: " . $page_id . "\n";
  ?>
  </pre>

  <?php if (current_user_can('edit_posts')) : ?>
    <a href="<?php echo admin_url('post.php?post=' . $page_id . '&action=edit'); ?>" class="btn btn-primary position-fixed top-0 end-0 m-3">Bearbeiten</a>
  <?php endif; ?>

  <!-- Hero Section -->
  <section class="hero-section d-flex flex-column justify-content-center align-items-center text-white text-center">
    <div class="container">
      <h1 class="display-3"><?php echo esc_html(get_field('hero_uberschrift', $page_id)); ?></h1>
      <p class="fs-5"><strong><?php echo esc_html(get_field('hero_text', $page_id)); ?></strong></p>
      <a href="#" class="btn btn-primary mb-2">Mitglied werden</a>
      <p>Die Mitgliedschaft im Verein ist kostenlos!</p>
    </div>
  </section>

  <!-- Pflege daheim -->
  <section class="min-vh-100 d-flex align-items-center section-bg">
    <div class="container text-center">
      <h2 class="fw-bold"><?php echo esc_html(get_field('pflege_uberschrift', $page_id)); ?></h2>
      <p><?php echo esc_html(get_field('pflege_text', $page_id)); ?></p>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
        <?php for ($i = 1; $i <= 4; $i++): ?>
          <div class="col">
            <div class="card h-100">
              <?php $bild = get_field("pflege_bild_$i", $page_id); ?>
              <?php if (!empty($bild) && isset($bild['url'])): ?>
                <img src="<?php echo esc_url($bild['url']); ?>" class="card-img-top" alt="Pflege Bild <?php echo $i; ?>">
              <?php endif; ?>
              <div class="card-body">
                <h3 class="card-title"><?php echo esc_html(get_field("pflege_titel_$i", $page_id)); ?></h3>
                <p class="card-text"><?php echo esc_html(get_field("pflege_beschreibung_$i", $page_id)); ?></p>
                <a href="#" class="btn btn-danger">Mehr erfahren</a>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- Unsere Vision -->
<section class="min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-1 order-md-2">
                <h2 class="fw-bold text-center mb-4"><?php echo esc_html(get_field('vision_uberschrift', $page_id)); ?></h2>
                <p><?php echo esc_html(get_field('vision_text', $page_id)); ?></p>
            </div>
            <div class="col-md-6 order-2 order-md-1 mt-3 mt-md-0">
                <?php 
                $bild2 = get_field('vision_bild', $page_id);
                if (!empty($bild2) && is_array($bild2) && isset($bild2['url'])): ?>
                    <img src="<?php echo esc_url($bild2['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild2['alt']); ?>">
                <?php else: ?>
                    <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Was wir tun -->
<section class="min-vh-100 d-flex align-items-center section-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-1 order-md-2">
                <h2 class="fw-bold text-center mb-4"><?php echo esc_html(get_field('was_uberschrift', $page_id)); ?></h2>
                <p><?php echo esc_html(get_field('was_text', $page_id)); ?></p>
            </div>
            <div class="col-md-6 order-2 order-md-1 mt-3 mt-md-0">
                <?php 
                $bild3 = get_field('was_bild', $page_id);
                if (!empty($bild3) && is_array($bild3) && isset($bild3['url'])): ?>
                    <img src="<?php echo esc_url($bild3['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild3['alt']); ?>">
                <?php else: ?>
                    <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Unsere Geschichte -->
<section class="min-vh-100 d-flex align-items-center">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 mt-3 mt-md-0">
                <?php 
                $bild4 = get_field('geschichte_bild', $page_id); // Richtiger Feldname
                if (!empty($bild4) && is_array($bild4) && isset($bild4['url'])): ?>
                    <img src="<?php echo esc_url($bild4['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild4['alt']); ?>">
                <?php else: ?>
                    <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                <?php endif; ?>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <h2 class="fw-bold"><?php echo esc_html(get_field('geschichte_uberschrift', $page_id)); ?></h2>
                <p><?php echo esc_html(get_field('geschichte_text', $page_id)); ?></p>
            </div>
        </div>
    </div>
</section>


  <!-- Über Uns -->
  <section class="min-vh-100 d-flex flex-column justify-content-center align-items-center section-bg">
    <div class="container text-center">
      <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('uns_uberschrift', $page_id)); ?></h2>
      <p><?php echo esc_html(get_field('uns_text', $page_id)); ?></p>
      <a class="btn btn-danger" href="#">weiter lesen</a>
    </div>
  </section>

  <!-- Freiwillige Unterstützung -->
  <section class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center">
      <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('freiwillige_uberschrift', $page_id)); ?></h2>
      <p><?php echo esc_html(get_field('freiwillige_text', $page_id)); ?></p>
    </div>
  </section>

  <!-- Debugging für alle Felder -->
  <pre>
  <?php
  $fields = [
      'hero_uberschrift', 'hero_text', 'pflege_uberschrift', 'pflege_text', 
      'vision_uberschrift', 'vision_text', 'geschichte_uberschrift', 'geschichte_text',
      'was_uberschrift', 'was_text', 'uns_uberschrift', 'uns_text', 
      'freiwillige_uberschrift', 'freiwillige_text'
  ];
  
  foreach ($fields as $field) {
      echo "$field: ";
      var_dump(get_field($field, $page_id));
  }
  ?>
  </pre>

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
