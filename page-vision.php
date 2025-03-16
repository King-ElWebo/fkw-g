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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <style>
        h2 {
  margin: 2rem; 
}

p {
  margin: 1.5rem; 
}

img {
  margin: 2rem; 
}

            p {
        text-align: justify !important;
      }
            .section-bg {
      background: #f0f0f0;
    }
        /* Hintergrundbild für das Intro */
        .intro-section {
      background: url('https://images.unsplash.com/photo-1593642532933-4b6b3b3f7f3b') 
                  center center / cover no-repeat;
    }
    /* Beispielhintergrund für andere Sektionen (optional) */
    .section-bg {
      background: #f0f0f0;
    }
    .hero-section {
    /* Hintergrundbild für die erste Section */
    background: 
      url('/images/AdobeStock_374846559.jpg') 
      center center / cover no-repeat;
    min-height: 100vh; /* ganze Bildschirmhöhe */
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
  .hero-section a {
    font-size: 25px;
    color: #ffffff;
    border-radius: 10px;
    border-color: white;
    border-width: 2px;
    padding: 10px 20px;
    backdrop-filter: blur(10px); /* Hintergrund verwischen */
  }
  .hero-section a:hover {
transform: scale(1.1);
color: #ffffff;
    border-radius: 10px;
    border-color: white;
    border-width: 2px;
  }
  .hero-section p {
    font-size: 20px;
    font-weight: 400;
  }
  /* Cards section */
    h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 70px;
    font-weight: 800;
    color:  #1F2937;
    margin-bottom: 100px !important;
  }
  h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
    font-weight: 800;
    color:  #1F2937;
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
                <p><?php echo nl2br(esc_html(get_field('vision_text_1', get_the_ID()))); ?></p>
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
        <p><?php echo nl2br(esc_html(get_field('vision_text_2', get_the_ID()))); ?></p>
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
                <p><?php echo nl2br(esc_html(get_field('vision_text_3', get_the_ID()))); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- A4 -->
<section class="min-vh-100 d-flex flex-column justify-content-center align-items-center section-bg">
    <div class="container">
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('vision_uberschrift_4', get_the_ID())); ?></h2>
        <p><?php echo nl2br(esc_html(get_field('vision_text_4', get_the_ID()))); ?></p>
    </div>
</section>

<!-- A5 -->
<section class="min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('vision_uberschrift_5', get_the_ID())); ?></h2>
                <p><?php echo nl2br(esc_html(get_field('vision_text_5', get_the_ID()))); ?></p>
            </div>
            <div class="col-md-6 text-center">
                <?php 
                $bild3 = get_field('vision_bild_3', get_the_ID());
                if( !empty($bild3) && is_array($bild3) && isset($bild3['url']) ): ?>
                    <img src="<?php echo esc_url($bild3['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($bild3['alt']); ?>"><br>
                <?php else: ?>
                    <p style="color: red;">Kein Bild gefunden oder ACF-Feld falsch konfiguriert.</p>
                <?php endif; ?>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-danger" href="#">Mitglied werden</a><br><br>
                  </div>
                  <p class="text-center"><strong class="text-center">Die Mitgliedschaft ist kostenlos</strong></p>
            </div>
        </div>
    </div>
</section>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
get_footer();
?>
