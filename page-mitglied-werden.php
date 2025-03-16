
<?php
/*
Template Name: Mitglied werden
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
    <div class="container py-5 text-center">
        <h1 class="mb-5 text-center"><?php echo esc_html(get_field('mitglied_hauptuberschrift', $page_id)); ?></h1>
        <h2 class="fw-bold text-center mb-4"><?php echo esc_html(get_field('mitglied_uberschrift_1', $page_id)); ?></h2>
        <p class="text-center"><?php echo nl2br(esc_html(get_field('mitglied_text_1', $page_id))); ?></p>
        <br>
        <a href="#" class="btn btn-danger">Mitglied werden</a>
    </div>
</section>

<!-- A2 -->
<section class="min-vh-100 d-flex flex-column justify-content-center align-items-center section-bg">
    <div class="container">
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('mitglied_uberschrift_2', $page_id)); ?></h2>
        <p><strong><?php echo nl2br(esc_html(get_field('mitglied_text_2', $page_id))); ?></strong></p>
        <ul>
            <li><?php echo esc_html(get_field('mitglied_vorteil_1', $page_id)); ?></li>
            <li><?php echo esc_html(get_field('mitglied_vorteil_2', $page_id)); ?></li>
            <li><?php echo esc_html(get_field('mitglied_vorteil_3', $page_id)); ?></li>
            <li><?php echo esc_html(get_field('mitglied_vorteil_4', $page_id)); ?></li>
        </ul>
        <br>
        <h2 class="fw-bold mb-4"><?php echo esc_html(get_field('mitglied_uberschrift_3', $page_id)); ?></h2>
        <p><?php echo nl2br(esc_html(get_field('mitglied_text_3', $page_id))); ?></p>
        <a href="#" class="btn btn-danger mt-3">Kontakt</a>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
get_footer();
?>
