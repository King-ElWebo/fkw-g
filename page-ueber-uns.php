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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <style>
        h2 {
  margin: 2rem; 
}

p {
  margin: 1.5rem; 
}
.card img {
  width: 100%;        /* volle Breite innerhalb der Card */
  height: 300px;      /* feste Höhe, Beispielwert */
  object-fit: cover;  /* Bild wird skaliert und zugeschnitten, ohne verzerrt zu wirken */
  object-position: 50% 50%; /* optional: zentriert den "Crop"-Bereich */
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
      .center-link {
      display: flex;
      justify-content: center;
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
            <p><?php echo nl2br(esc_html(get_field('ueber_text_1', $page_id))); ?></p>
            <div class="justify-content-center text-center">
              <a class="justify-content-center text-center btn btn-danger" href="/statuten" >Statuten</a>
            </div>
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
                            <p class="card-text"><?php echo nl2br(esc_html(get_field("ueber_position_$i", $page_id))); ?></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
get_footer();
?>
