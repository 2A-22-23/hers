<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WonderWoman </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-2">
          
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
      <div class="offcanvas__logo">
        <a href="index.php"><img src="images/335570522_924606112219959_7729731806761273006_n.png" alt=""></a>
    </div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
            <!--h1 class="mb-0 site-logo"><a href="index.php" class="text-white mb-0">WonderWoman<span class="text-primary">.</span> </a></h1-->
          </div>
          <div class="col-12 col-md-12 d-none d-xl-block">
            
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html"><span>Home</span></a></li>
                <li class="has-children">
                  <a href="services.html"><span>Evenements</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">campagne de sensibilisation</a></li>
                    <li><a href="#">developpement personnel</a></li>
                    <li><a href="#">conférences</a></li>
                    <li class="has-children">
                      <a href="#">Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">Physical Therapy</a></li>
                        <li><a href="#">Massage Therapy</a></li>
                        <li><a href="#">Chiropractic Therapy</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="Produits.html"><span>Produits</span></a></li>
                <li><a href="about.html"><span>About</span></a></li>
                <li><a href="forum.html"><span>forum</span></a></li>
                <li><a href="contact.html"><span>rendez vous</span></a></li>
                <li><a href="réclamation.html"><span>Réclamation</span></a></li>

                  <ul class="nav-shop">
                      <?php
                      if(isset($_SESSION['user'])){?>
                          <li >
                              <h5 class="nav-link ">Bienvenue,<?php echo $_SESSION['user']?></h5>
                              <ul>
                                  <li class="nav-item"><a class="nav-link" href="compte.php">Mon Compte</a></li>
                                  <li class="nav-item "><a class="nav-link" href="logout.php">Se deconnecter</a></li>
                              </ul>
                          </li>
                      <?php }else{ ?>
                          <li class="nav-item"><i class="ti-user"></i>&nbsp; &nbsp;<a href="login.php">Connectez-vous</a> ou <a href="inscription.php">Créez un compte</a></li>
                      <?php } ?>
                  </ul>
                
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">Tu es l'héroine de ton histoire</h1>

                <p data-aos="fade-up" data-aos-delay="100"><a href="interface1.html" class="btn btn-primary btn-pill">login</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  



    <div class="block-quick-info-2">
      <div class="container">
        <div class="block-quick-info-2-inner">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-home mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Visit our Location</strong>
                  <span class="excerpt">2081 Ariana soghra</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-phone mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Call us today</strong>
                  <span class="excerpt"><a href="#">+(216) 99 687 111</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-envelope mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Send us a message</strong>
                  <span class="excerpt"><a href="#">WonderWoman@hers.com</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-clock-o mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Opening hours</strong>
                  <span class="excerpt">Mon-Fri: 7:AM - 8PM</span>
                  <span class="excerpt">Sat-Sun: 8:30AM- 6PM</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
    <div class="block-services-1 py-5">
      <div class="container">
        <div class="row">
          <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
            <h3 class="mb-3">What We Offer</h3>
            <p>Un site web qui assure le meilleur encadrement des femmes dans l'espoir de poursuivre la mission de notre groupe consistant à "démocratiser et déstigmatiser" les soins pour le bien-être émotionnel.</p>
          </div>
          <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <a href="#" class="thumbnail-link d-block mb-4"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="block-service-1-heading mb-3"><a href="#">Physical Therapy</a></h3>
              <div class="block-service-1-excerpt"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim odit molestias inventore, id sed, in harum tenetur earum.</p></div>
              <p><a href="#" class="d-inline-flex align-items-center block-service-1-more"><span>Find out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <a href="#" class="thumbnail-link d-block mb-4"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="block-service-1-heading mb-3"><a href="#">Chiropractic Therapy</a></h3>
              <div class="block-service-1-excerpt"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim odit molestias inventore, id sed, in harum tenetur earum.</p></div>
              <p><a href="#" class="d-inline-flex align-items-center block-service-1-more"><span>Find out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <a href="#" class="thumbnail-link d-block mb-4"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="block-service-1-heading mb-3"><a href="#">Massage Therapy</a></h3>
              <div class="block-service-1-excerpt"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim odit molestias inventore, id sed, in harum tenetur earum.</p></div>
              <p><a href="#" class="d-inline-flex align-items-center block-service-1-more"><span>Find out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block-half-content-1 d-block d-lg-flex mt-5">
      <div class="block-half-content-img" style="background-image: url('images/hero_bg_1.jpg')">
        
      </div>
      <div class="block-half-content-text bg-primary">
        <div class="block-half-content-text-inner">
          <h2 class="block-half-content-heading mb-4">Why Choose Us</h2>
          <div class="block-half-content-excerpt">
          <p class="lead">WonderWoman est un site web qui assure le meilleur encadrement des femmes dans l'espoir de poursuivre la mission de notre groupe consistant à "démocratiser et déstigmatiser" les soins pour le bien-être émotionnel. .</p>
          </div>
        </div>

        <div class="block-counter-1 section-counter">
          <div class="row">
            <div class="col-sm-4">
              <div class="counter">
                <div class="number-wrap">
                  <span class="block-counter-1-number" data-number="1">0</span><span class="append">K</span>
                </div>
                <span class="block-counter-1-caption">Happy Customers</span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="counter">
                <div class="number-wrap">
                  <span class="block-counter-1-number" data-number="12">0</span><span class="append
"></span>
                </div>
                <span class="block-counter-1-caption">Years of Experience</span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="counter">
                <div class="number-wrap">
                  <span class="block-counter-1-number" data-number="100">0</span><span class="append">%</span>
                </div>
                <span class="block-counter-1-caption">Satisfaction</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary">Nos guides pour une santé mentale meilleure </h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="d-block d-lg-flex">
          <div class="half-wrap d-block d-md-flex">
            <div class="half bg-white d-block d-md-flex arrow-right">
              <div class="text">
                <h2>La charge mentale des femmes</h2>
               
                <p>10.99$</p>
                <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">Acheter</a></p>
              </div>
            </div>
            <div class="half bg-img img" style="background-image: url('images/img_1.jpg');"></div>
          </div>
          <div class="half-wrap d-block d-md-flex">
            <div class="half bg-white d-block d-md-flex arrow-right">
              <div class="text">
                <h2>Rester en vie</h2>
               
                <p>21.00$</p>
                <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">Acheter</a></p>
              </div>
            </div>
            <div class="half bg-img img" style="background-image: url('images/img_2.jpg');"></div>
          </div>
        </div>

        <div class="d-block d-lg-flex">
            <div class="half-wrap d-block d-md-flex">
              <div class="half bg-white d-block d-md-flex arrow-left order-md-2">
                <div class="text">
                  <h2>IMPACT DES MICROAGRESSIONS </h2>
                  
                  <p>12$</p>
                  <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">Acheter</a></p>
                </div>
              </div>
              <div class="half bg-img img" style="background-image: url('images/img_3.jpg');"></div>
            </div>
            <div class="half-wrap d-block d-md-flex">
              <div class="half bg-white  d-block d-md-flex arrow-left order-md-2">
                <div class="text">
                  <h2>Psychiatrie et santé mentale</h2>
                  
                  <p>98.00$</p>
                  <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">Acheter</a></p>
                </div>
              </div>
              <div class="half bg-img img" style="background-image: url('images/img_4.jpg');"></div>
            </div>
          </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary">Happy Customers</h2>
          </div>
        </div>
        <div class="row">

          <div class="col-12">

            <div class="owl-carousel-2 owl-carousel">

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">Katie Johnson</h2>
                  <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
                </div>
              </div>

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">Jun Mars</h2>
                  <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
                </div>
              </div>

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">Katie Johnson</h2>
                  <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
                </div>
              </div>

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">Jun Mars</h2>
                  <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
                </div>
              </div>


            </div>
          </div>
          

        </div>
      </div>
    </div>

    <div class="mt-5 block-cta-1 primary-overlay" style="background-image: url('images/hero_bg_2.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">Upto 30% Discount for The First Commers</h2>
            <p class="mb-0 text-white lead">Whenever and wherever you are,you can improve your mental health now!hen what are you waiting for?.</p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="contact.html" class="btn btn-outline-white text-white btn-md btn-pill px-5 font-weight-bold btn-block">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Products</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <ul>
              <li><i class="fa fa-clock-o"></i> Mon-Fri: 7:00 AM- 8:00 PM</li>
              <li><i class="fa fa-clock-o"></i> Sat-Sun: 8:30 AM- 6:00 PM</li>
            </ul>
            <form action="#" method="post" class="subscription">
              <div class="input-group mb-3  d-flex align-items-stretch">
                <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">

          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["pain"," stress"," fatigue"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  
  </body>
</html>