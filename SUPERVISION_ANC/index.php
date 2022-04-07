<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="icon" href="img/logo_anc_min.png" sizes="32x32" />
  <meta name="description" content="Site WEB dédié à la supervision des conteneurs ANC">
  <meta name="author" content="ANC2020 ECAM Rennes">

  <title>PRD - ANC</title>

  <!-- Custom fonts for this theme -->
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="styles/style.css" rel="stylesheet">

  <link href="styles/style_carte.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="img/logo_anc.png" alt="ANC" id="logo" data-height-percentage="100" />
      </a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Position">Localisation</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Ajouterunconteneur">Ajouter un conteneur</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Alertes">Alertes</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="http://anc.bzh/">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-secondary mb-0 text-center">
    <div id="masthead">
      <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar mb-5" src="" alt="">

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase">Conteneurs ANC</h1>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Jeunes développeurs - Rémi Bordet - Antoine Forest - Thibault Nguyen - Julien Vanhoutte</p>

      </div>
    </div>
  </header>

  <!-- Position Section -->
  <section class="page-section Position" id="Position">
    <div class="container">

      <!-- Position Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Localisation des conteneurs</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Carte des conteneurs -->
      <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css">
      <script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js"></script>
      <div id="map" class="leaflet-container leaflet-fade-anim" tabindex="0" style="position: relative;">
        <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

        <?php require('./php/carte.php'); ?>

      </div>
  </section>

  <!-- Ajout Conteneur Section -->
  <section class="page-section Ajouterunconteneur" id="Ajouterunconteneur">
    <div class="container">

      <!-- Ajout Conteneur Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ajouter un conteneur</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>


      <div class="my-form">
        <div class="cotainer">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header text-center">
                  Formulaire d'enregistrement
                </div>
                <div class="card-body">
                  <form name="my-form" method="post">

                    <div class="form-group row">
                      <label for="Numéro_d'identification" class="col-md-4 col-form-label text-md-right">Numéro d'identification</label>
                      <div class="col-md-6">
                        <input type="text" id="idnumero" class="form-control" name="numero_identification">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email_address" class="col-md-4 col-form-label text-md-right">Evénement</label>
                      <div class="col-md-6">
                        <input type="text" id="idevenement" class="form-control" name="evenement">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="user_name" class="col-md-4 col-form-label text-md-right">Carte n°XXX</label>
                      <div class="col-md-6">
                        <input type="text" id="idcarte" class="form-control" name="carte_gps">
                      </div>
                    </div>

                    <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>

                  </form>

                  <?php require('./php/formulaire.php'); ?>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


  </section>

  <!-- Alertes Section -->
  <section class="page-section Alertes" id="Alertes">
    <div class="container">


      <!-- Alertes Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Alertes</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div>
        <?php require('./php/alertes.php'); ?>

      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Adresse</h4>
          <p class="lead mb-0">AN-C, 2 rue des Frères Mongolfier
            <br>PA Tourelle II
            <br>22400 NOYAL</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Contact</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/anc35/">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="http://anc.bzh/contact/">
            <i class="fab fa-fw fa-internet-explorer"></i>
          </a>
        </div>

        <!-- Footer IOC Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Conteneurs ANC</h4>
          <p class="lead mb-0">Ce site a été créé pour la supervision des conteneurs ANC déployés sur le territoire français
          </p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center">
    <div id="footer-info">
      <a>&copy;ANC 2020 | réalisée par l'</a>
      <a href="http://www.ecam-rennes.fr/">ECAM Rennes</a>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  </div>


  <script src="js/tis.js"></script>
  <script>
    var konamiCode = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
    for (i in konamiCode) {
      // Firing a native keyboard event is way harder than it should be,
      // but we can fake it.
      // http://stackoverflow.com/questions/961532/firing-a-keyboard-event-in-javascript
      var e = document.createEvent('Event');
      e.initEvent('keydown', true, true);
      e.keyCode = konamiCode[i];
      document.dispatchEvent(e);
    }
  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="jquery/jquery.easing.min.js"></script>

  <!-- Photos Form JavaScript -->
  <script src="js/jqBootstrapValidation.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>


</body>

</html>