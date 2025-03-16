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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
  <style>
      h2 {
  margin: 2rem; 
}

p {
  margin: 1.5rem; 
}

.hero-section a {
    font-size: 25px;
    color: #ffffff;
    border-radius: 10px;
    border-color: white;
    border-width: 2px;
    padding: 10px 20px;
    backdrop-filter: blur(10px); /* Hintergrund verwischen */
}
          p {
        text-align: justify;
      }
    .hero-section {
      background: url('<?php echo esc_url(get_field("hero_hintergrund", $page_id)['url'] ?? ''); ?>') 
                  center center / cover no-repeat;
      min-height: 100vh;
      position: relative;
      z-index: 1;
      text-align: center !important;
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
    /* Beispielhintergrund für andere Sektionen (optional) */
    .section-bg {
      background: #f0f0f0;
    }

  .hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Schwarze halbtransparente Farbe */
    z-index: -1;
  }

  .hero-section h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 85px;
    font-weight: 800; /* ExtraBold */
  }

  .hero-section strong {
    font-family: 'Poppins', sans-serif;
    font-size: 28px;
  }
  .btn-secondary {
    font-size: 25px;
    color: #ffffff;
    border-radius: 10px;
    border-color: white;
    border-width: 2px;
    padding: 10px 20px;
    backdrop-filter: blur(10px); /* Hintergrund verwischen */
  }
  .btn-secondary:hover {
transform: scale(1.1);
color: #ffffff;
    border-radius: 10px;
    border-color: white;
    border-width: 2px;
  }
  .hero-section p {
    font-size: 20px;
    font-weight: 400;
    text-align: center !important;
  }
  /* Cards section */
    h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 70px;
    font-weight: 800;
    color:  #1F2937;
    margin-bottom: 100px !important;
  }
  .pflege-section p {
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    font-weight: 400;
  }
  h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 25px;
    font-weight: 800;
    color:  #1F2937;
  }
  .card-text {
    font-size: 15px !important;
    font-weight: 400;
    color: black !important;
  }
  .btn-danger {
    background-color: #B53333;
    width: 400px;
    color: white;
    font-size: 20px;
    
  }
  .btn-danger:hover {
    background-color: #B53333;
    color: white;
    transform: scale(1.1);
  }
  .card a {
    max-width: 250px !important;
  }
  p, ul {
    font-size: 25px;
  }
  .card img {
      max-width: 320px;  /* Maximale Breite */
      max-height: 200px; /* Maximale Höhe */
      width: auto;       /* Automatische Skalierung */
      height: auto;      /* Automatische Skalierung */
      }
      img {
        max-width: 500px;  /* Maximale Breite */
        max-height: 500px; /* Maximale Höhe */
        width: auto;       /* Automatische Skalierung */
        height: auto;      /* Automatische Skalierung */
      }
      .center-link {
      display: flex;
      justify-content: center;
    }
    .kostenlos {
      font-size: 20px !important;
      font-weight: 400 !important;
    } 
  </style>
</head>
<body class="m-0 p-0">


  <?php if (current_user_can('edit_posts')) : ?>
    <a href="<?php echo admin_url('post.php?post=' . $page_id . '&action=edit'); ?>" class="btn btn-primary position-fixed top-0 end-0 m-3">Bearbeiten</a>
  <?php endif; ?>

  <!-- Hero Section -->
<section class="hero-section d-flex flex-column justify-content-center align-items-center text-white text-center">
    <div class="container">
        <h1 class="display-3"><?php echo nl2br(esc_html(get_field('hero_uberschrift', $page_id))); ?></h1>
        <p class="fs-5"><strong><?php echo nl2br(esc_html(get_field('hero_text', $page_id))); ?></strong></p>
        <a href="/mitglied-werden" class="btn mb-2">Mitglied werden</a>
        <p ><strong class="kostenlos">Die Mitgliedschaft im Verein ist kostenlos!</strong></p>
    </div>
</section>

<!-- Pflege daheim -->
<section class="min-vh-100 d-flex align-items-center section-bg">
    <div class="container text-center">
        <h2 class="fw-bold"><?php echo esc_html(get_field('pflege_uberschrift', $page_id)); ?></h2>
        <p><?php echo nl2br(esc_html(get_field('pflege_text', $page_id))); ?></p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
    <?php for ($i = 1; $i <= 4; $i++): ?>
        <div class="col">
            <!-- Die Card selbst und das Body als Flex-Container -->
            <div class="card h-100 d-flex flex-column">
                <?php $bild = get_field("pflege_bild_$i", $page_id); ?>
                <?php if (!empty($bild) && isset($bild['url'])): ?>
                    <img src="<?php echo esc_url($bild['url']); ?>" class="card-img-top" alt="Pflege Bild <?php echo $i; ?>">
                <?php endif; ?>

                <!-- Card-Body als flexibles Spaltensystem -->
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title"><?php echo esc_html(get_field("pflege_titel_$i", $page_id)); ?></h3>
                    <p class="card-text"><?php echo nl2br(esc_html(get_field("pflege_beschreibung_$i", $page_id))); ?></p>

                    <!-- mt-auto drückt den Button nach unten -->
                    <div class="mt-auto">
                        <a href="#" class="btn btn-danger justify-content-center">Mehr erfahren</a>
                    </div>
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
      <h2 class="fw-bold text-center mb-4"><?php echo esc_html(get_field('vision_uberschrift', $page_id)); ?></h2>
        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column align-items-center">
                <p><?php echo nl2br(esc_html(get_field('vision_text', $page_id))); ?></p>
                <a href="/vision" class="btn btn-danger mt-3">Weiter lesen</a>
            </div>
            <div class="col-md-6 mt-3 mt-md-0 ps-md-5">
                <?php 
                $bild2 = get_field('vision_bild', $page_id);
                if (!empty($bild2) && is_array($bild2) && isset($bild2['url'])): ?>
                    <img src="<?php echo esc_url($bild2['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild2['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<!-- Was wir tun -->
<section class="min-vh-100 d-flex align-items-center section-bg">
    <div class="container">
      <h2 class="fw-bold text-center mb-4"><?php echo esc_html(get_field('was_uberschrift', $page_id)); ?></h2>
        <div class="row align-items-center">
          <div class="col-md-6 mt-3 mt-md-0">
              <?php 
              $bild3 = get_field('was_bild', $page_id);
              if (!empty($bild3) && is_array($bild3) && isset($bild3['url'])): ?>
                  <img src="<?php echo esc_url($bild3['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild3['alt']); ?>">
              <?php endif; ?>
          </div>
            <div class="col-md-6 d-flex flex-column align-items-center">
                <p><?php echo nl2br(esc_html(get_field('was_text', $page_id))); ?></p>
                <a href="/was-wir-tun" class="btn btn-danger mt-3">Weiter lesen</a>
            </div>
        </div>
    </div>
</section>


<!-- Unsere Geschichte -->
<section class="min-vh-100 d-flex align-items-center">
  <div class="container text-center">
    <!-- Überschrift vor der Row -->
    <h2 class="fw-bold mb-5">
      <?php echo esc_html(get_field('geschichte_uberschrift', $page_id)); ?>
    </h2>

    <div class="row align-items-center">
      <div class="col-md-6">
        <p><?php echo nl2br(esc_html(get_field('geschichte_text', $page_id))); ?></p>
        <a href="/geschichte" class="btn btn-danger justify-content-center">Weiter lesen</a>
      </div>
      <div class="col-md-6 mt-3 mt-md-0">
        <?php 
        $bild4 = get_field('geschichte_bild', $page_id);
        if (!empty($bild4) && is_array($bild4) && isset($bild4['url'])): ?>
          <img src="<?php echo esc_url($bild4['url']); ?>" 
               class="img-fluid" 
               alt="<?php echo esc_attr($bild4['alt']); ?>">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- Über Uns -->
<section class="min-vh-100 d-flex flex-column justify-content-center align-items-center section-bg">
    <div class="container text-center">
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('uns_uberschrift', $page_id)); ?></h2>
        <p><?php echo nl2br(esc_html(get_field('uns_text', $page_id))); ?></p>
        <a class="btn btn-danger justify-content-center mt-3" href="/ueber-uns">weiter lesen</a>
    </div>
</section>

<!-- Freiwillige Unterstützung -->
<section class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center">
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('freiwillige_uberschrift', $page_id)); ?></h2>
        <p><?php echo nl2br(esc_html(get_field('freiwillige_text', $page_id))); ?></p>
    </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
get_footer();
?>
