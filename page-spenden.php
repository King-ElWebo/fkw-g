<?php
/*
Template Name: Spenden Page
*/

get_header();
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FKW-G Spenden</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Hintergrundfarbe für den Body */
    body {
      background: #f8f9fa;
    }
    /* Container-Anpassungen */
    .donation-container {
      padding: 20px;
    }
    /* Überschrift-Größe */
    .donation-container h2 {
      font-size: 2rem;
    }
    /* PayPal-Container mit fester maximaler Breite */
    #paypal-container-4L7SMXKCVQFFN {
      width: 100%;
      max-width: 400px;
    }
    /* Mobile Geräte */
    @media (max-width: 576px) {
      .donation-container h2 {
        font-size: 1.5rem;
      }
    }
    /* Tablet Geräte */
    @media (min-width: 577px) and (max-width: 768px) {
      .donation-container h2 {
        font-size: 1.75rem;
      }
    }
  </style>
</head>
<body>
  <div class="container donation-container d-flex flex-column justify-content-center align-items-center min-vh-100">
    <h2 class="text-center mb-4">Spenden</h2>
    <div id="paypal-container-4L7SMXKCVQFFN"></div>
  </div>

  <script src="https://www.paypal.com/sdk/js?client-id=BAAao-L_fYAI1BRcsCEaLVVVsT-V0be3uVseARGNVwO1vfkwpowsIAMPawmwus7OHYR7iIpMN3p9ZahI2I&components=hosted-buttons&disable-funding=venmo&currency=EUR"></script>
  <script>
    paypal.HostedButtons({
      hostedButtonId: "4L7SMXKCVQFFN",
    }).render("#paypal-container-4L7SMXKCVQFFN")
  </script>
</body>
</html>

<?php
get_footer();
?>
