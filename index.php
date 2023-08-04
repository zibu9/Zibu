<?php
include("nav.php");
  ?>
                          <div class="card text-white bg-dark">
                            <img src="uploads/blue-tech-circles-hd-wallpapers-65955-9799786.png" class="card-img" alt="... "  style="height: 250px;">
                          <div class="card-img-overlay">
                            <h4 class="text-center mt-md-1">Faites concevoir vos sites Web et vos applications windows de Gestion des Stocks au prix du pain sur <br><span class="badge badge-light">Zibu_design.com</span></h4>
                            <h6 class="text-center">Rapidité et efficacité, c'est notre point fort !<span class="badge badge-primary">☺</span></h6>
                                  <?php if (isset($_SESSION['flash'])): ?>
                                  <?php foreach($_SESSION['flash'] as $type=> $message): ?>
                                    <div class="bg-<?= $type; ?> text-center text-white">
                                     <h6 class="bg-<?= $type; ?>"><?= $message; ?></h6>   
                                    </div>
                                  <?php endforeach; ?>
                                  <?php unset($_SESSION['flash']); ?> 
                              <?php endif; ?>
                            <div class="text-center">
                            <a href="#services" class="js-scroll-trigger btn btn-light shadow p-2  rounded-circle"> <i class="fas fa-chevron-down fa-2x"></i></a> </div>
                          </div>
                        </div>

                        
                          <div class="alert alert-primary" role="alert" style="margin-bottom: 0rem;">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                          <div class="jumbotron jumbotron-fluid bg-light">
                          <div class="container">
                            <h3>Pourquoi choisir Zibu_design.com?</h3>
                            <p class="lead"> Nos services vous offrent une opportunité  de publier et rendre publique vos entreprises , vos blogs personnels ou votre curriculum vitae etc... Bref nous rendons vos activités visibles avec la numerisation</p>
                          </div>
                        </div></div>

                          <div id="services" class="section wb">
        <div class="container">
            <div class="text-center">
                <h3>Services</h3>
                <p>Voici la liste de quelques services de qualité que vous offre notre entreprise.</p>
            </div><!-- end title -->

            <div class="row">
        <div class="col-md-12 col-lg-4 col-sm-12">
                    <div class="services-inner-box text-center">
            <div class="ser-icon">
              <i class="flaticon-seo"></i>
            </div>
            <h4 class="text">Developpement Web </h4>
            <p class="text">Les sites web de qualité</p>
          </div>
                </div><!-- end col -->
                <div class="col-md-12 col-lg-4 col-sm-12 text-center">
                    <div class="services-inner-box">
            <div class="ser-icon text-center">
              <i class="flaticon-development"></i>
            </div>
            <h4 class="text">Responsive Design</h4>
            <p class="text">Des sites web pour toute taille d'ecran.</p>
          </div>
                </div><!-- end col -->
        <div class="col-md-12 col-lg-4 col-sm-12 ">
                    <div class="services-inner-box text-center">
            <div class="ser-icon text-center">
              <i class="flaticon-process"></i>
            </div>
            <h4 class="text">Maintenance de votre site</h4>
            <p class="text">Mis à jour des vos sites web.</p>
          </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
  </div><!-- end alert primary -->
      <div id="portfolio" class="section lb">
    <div class="container">
      <div class="section-title text-center">
                <h3>Portfeuille</h3>
                <p>galerie images de quelques types de developpement</p>
            </div><!-- end title -->
      
      <div class="gallery-menu row">
        <div class="col-md-12">
          <div class="button-group filter-button-group text-center">
            <button class="active">Developpement web</button>
      </div>
      
      <div class="gallery-list row">
        <div class="col-md-4 col-sm-6 gallery-grid">
          <div class="gallery-single fix">
            <img src="uploads/2020-07-22_03-46-00.jpg" class="img-fluid" alt="Image" style="height:300px;">
            <div class="img-overlay">
              <a href="uploads/2020-07-22_03-46-00.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-images"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 gallery-grid ">
          <div class="gallery-single fix">
            <img src="uploads/2020-07-22_11-20-47.jpg" class="img-fluid" alt="Image" style="height:300px;">
            <div class="img-overlay">
              <a href="uploads/2020-07-22_11-20-47.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-images"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 gallery-grid ">
          <div class="gallery-single fix">
            <img src="uploads/gallery_img-03.jpg" class="img-fluid" alt="Image" style="height:300px;">
            <div class="img-overlay">
              <a href="uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-images"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 gallery-grid">
          <div class="gallery-single fix">
            <img src="uploads/2020-07-22_11-18-34.jpg" class="img-fluid" alt="Image" style="height:300px;">
            <div class="img-overlay">
              <a href="uploads/2020-07-22_11-18-34.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-images"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 gallery-grid ">
          <div class="gallery-single fix">
            <img src="uploads/2020-07-22_03-50-34.jpg" class="img-fluid" alt="Image" style="height:300px;">
            <div class="img-overlay">
              <a href="uploads/2020-07-22_03-50-34.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-images"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 gallery-grid ">
          <div class="gallery-single fix">
            <img src="uploads/2020-07-22_10-19-54.jpg" class="img-fluid" alt="Image" style="height:300px;">
            <div class="img-overlay">
              <a href="uploads/2020-07-22_10-19-54.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-images"></i></a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
                        </div>
                       <?php require 'equipe.html'; ?>           

        <?php
include("footer.php");
  ?>