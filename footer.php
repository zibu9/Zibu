 <footer class="page-footer font-small blue-grey lighten-5">

                                <div style="background-color:beige;">
                                         <div class="container">
                                      <!-- Grid row-->
                                          <div class="row py-4 d-flex align-items-center">
                                      <!-- Grid column -->
                                            <div class="col-md-5 col-lg-5 text-center text-md-left mb-3 mb-md-0">
                                             <h2 class="mb-0">Suivez-nous!</h2></div>
                                      <!-- Grid column -->
                                                                    
                                      <!-- Grid column -->
                                          <div class="col-md-6 col-lg-7 text-center text-md-right">
                                        <!-- Facebook -->
                                           <a class="fb-ic" href="#" >
                                            <i class=" fab fa-facebook-f  mr-4 fa-2x" > </i>
                                           </a>
                                        <!-- Twitter -->
                                           <a class="tw-ic" href="#">
                                            <i class="fab fa-twitter  mr-4 fa-2x"> </i>
                                           </a>
                                        <!-- Google +-->
                                           <a class="inst-ic" href="#">
                                            <i class="fab fa-instagram  mr-4 fa-2x"> </i>
                                           </a>
                                        <!-- Whatsapp -->
                                           <a class="fb-ic" href="#">
                                            <i class="fab fa-whatsapp  mr-4 fa-2x"> </i>
                                           </a>
                                          </div>
                                        <!-- Grid column -->
                                                                    
                                          </div>
                                        <!-- Grid row-->                            
                                      </div>
                          </div>
                            <!-- Footer Links -->
                        <div class="container text-center text-md-left mt-3 mb-2">
                                          <div class="row" style="max-width: 1340px;">
                                            <div class="col-lg-1"></div>
                                            <div class="col-md-5 col-lg-5 col-sm-12 ml-4">
                                                         <!-- Links -->
                                              <h6 class="text-uppercase font-weight-bold">Liens</h6>
                                              <hr class="teal bg-primary accent-3 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;"><br>
                                                <a class="js-scroll-trigger text-secondary font-weight-bold" href="#home">Accueil</a><br>
                                              
                                                <a class="js-scroll-trigger text-secondary font-weight-bold" href="#services">Services</a><br>
                                              
                                                <a class="js-scroll-trigger text-secondary font-weight-bold" href="#portfolio">Portefeuille</a><br>
                                                 <a class="js-scroll-trigger text-secondary font-weight-bold" href="#team">L'equipe</a><br>
                                              
                                                <a class="text-secondary font-weight-bold" href="contact/index.php">Contact</a><br>
                                                <a class="text-secondary font-weight-bold" href="propos.php">A propos</a>
                                              
                                          </div>
                                             <div class="col-md-4 col-lg-4 col-sm-12 mb-2">
                                              <div class="card-body">
                                                <h5 class="font-weight-bold">Zibu_design.com</h5>
                                                <p>Toujours disponible pour vous aider!</p>
                                              </div>
                                              <div class="card-body">
                                                <h5 class="font-weight-bold">Adresse</h5>
                                                <p class="font-weight-bold">kabuyajunior082@gmail.com </p>
                                          </div>
                                          </div>
                                          
                                          <div class="col-md-2 col-lg-1 col-sm-12 ml-auto">
                                            <a href="#" id="scroll-to-top" class="js-scroll-trigger text-white dmtop global-radius " style="text-decoration: none;">&nbsp;<i class="fas fa-angle-up"></i>&nbsp;</a> </div>
                                        </div>
                        </div>
  <footer class="sticky-bottom">
    <div class="footer-copyright text-center text-white py-3 bg-primary">© 2020 Copyright:
      <a class="text-white font-weight-bold" href="">Zibu_design.com</a>
  
    </div>
    <!-- Copyright -->
  </footer>

    <!-- Footer --> 
<style type="text/css">
  .dmtop.show {
    bottom: 10px;
}
.dmtop {
    background-color: #3C3D41;
    z-index: 100;
    width: 50px;
    height: 50px;
    line-height: 47px;
    bottom: -100px;
    border-radius: 3px;
    font-size: 28px;
    color: #ffffff !important;
    cursor: pointer;
    -webkit-transition: all .7s ease-in-out;
    -moz-transition: all .7s ease-in-out;
    -o-transition: all .7s ease-in-out;
    -ms-transition: all .7s ease-in-out;
    transition: all .7s ease-in-out;
}
</style>
    
                        
<script src="jquery-3.4.1.js"></script>
 <script src="bootstrap.js"></script>
  <script src="all.js"></script>
   <script src="mdb.js"></script>
    <script type="text/javascript" src="popper.js"></script>
    <script type="text/javascript">
      
      (function($) {
    "use strict";

        
        // Smooth scrolling using jQuery easing
          $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
            $('html, body').animate({
              scrollTop: (target.offset().top - 54)
            }, 1000, "easeInOutExpo");
            return false;
            }
          }
          });
        
          // Closes responsive menu when a scroll trigger link is clicked
          $('.js-scroll-trigger').click(function() {
          $('.navbar-collapse').collapse('hide');
          });
          // Scroll to top      
  if ($('#scroll-to-top').length) {
    var scrollTrigger = 100, // px
      backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
          $('#scroll-to-top').addClass('show');
        } else {
          $('#scroll-to-top').removeClass('show');
        }
      };
    backToTop();
    $(window).on('scroll', function () {
      backToTop();
    });
    $('#scroll-to-top').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 700);
    });
  }

    })(jQuery);
    </script>
</body>
</html>