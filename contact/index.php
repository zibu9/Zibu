<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en,fr">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173140597-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-173140597-1');
      </script>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../zibu.png">
    <title>Zibu_design.Com</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="all.css">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="mestyles.css" rel="stylesheet">
    <!-- my styles -->
    <link href="zibu.css" rel="stylesheet">
    </head>
  
  <body aria-busy="true">
    <!-- Main navigation -->
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-dark fixed-top scrolling-navbar">
        <div class="container">
          <a class="navbar-brand" href="#">
            <strong>Zibu_design</strong>
          </a>
          <div id="navbarSupportedContent-7">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="../index.php">Accueil
                  <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
      <!-- Full Page Intro -->
      <div class="view" style="background-image: url('fond.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
          <!-- Content -->
          <div class="container">
            <!--Grid row-->
            <div class="row mt-0">
              <!--Grid column-->
              <div class="col-md-12 col-lg-6 col-sm-12 mb-5 mt-md-0 mt-sm-2 text-white text-center text-md-left">
                 <?php if (isset($_SESSION['flash'])): ?>
                                  <?php foreach($_SESSION['flash'] as $type=> $message): ?>
                                    <div class="bg-<?= $type; ?> text-center text-white">
                                     <h6 class="bg-<?= $type; ?>"><?= $message; ?></h6>   
                                    </div>
                                  <?php endforeach; ?>
                                  <?php unset($_SESSION['flash']); ?> 
                  <?php endif; ?>
                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Commander vos sites web au prix du pain </h1>
                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">
                <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Dans le soucis de numeriser vos affaires exposer vos Services au monde à l'aide d'un site internet
                la plateform Zibu_design vous propose ses services des conceptions des sites web
                </h6>
               </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-md-12 col-sm-12 col-lg-6 col-xl-5 mb-4">
                <!--Form-->
                <form method="post" action="contact.php">
                <div class="card wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInRight; animation-delay: 0.3s;">
                  <div class="card-body">
                    <!--Header-->
                    <div class="text-center">
                      <h3 class="text-white">
                        <i class="fas fa-user text-white"></i> Nous ecrire:</h3>
                      <hr class="hr-light">
                    </div>
                    <!--Body-->
                    <div class="md-form">
                      <i class="fas fa-envelope prefix text-white"></i>
                      <input type="email" id="form2" name="email" required="veuillez enter votre adresse mail" class="text-white form-control">
                      <label for="form2" class="">Votre email</label>
                    </div>
                    <div class="md-form">
                      <i class="fas fa-file-signature prefix text-white"></i>
                      <input type="text" id="form4" name="nom" required class="text-white form-control">
                      <label for="form4" class="">Votre nom</label>
                    </div>
                    <div class="md-form">
                      <i class="fas fa-envelope-open-text prefix text-white"></i>
                      <input type="text" id="form4" required name="message" class="text-white form-control">
                      <label for="form4" class="">Message</label>
                    </div>
                    <div class="text-center mt-4">
                      <button type="submit" class="btn btn-indigo btn-sm waves-effect waves-light">Envoyer</button>
                    </div>
                  </div>
                </div>
                </form>
                <!--/.Form-->
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
      </div>
      <!-- Full Page Intro -->
    </header>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    </div>
    <script>
    new WOW().init();
    </script>
<!-- Footer -->
    <script src="jquery-3.4.1.js"></script>
    <script src="bootstrap.js"></script>
    <script src="all.js"></script>
    <script src="mdb.js"></script>
    <script type="text/javascript" src="popper.js"></script>
</body>
</html>