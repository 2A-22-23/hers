<?php

include 'C:/xampp/htdocs/projetweb/Controller/participantC.php';
$err="";
$idparticipants="";
	$nom_event="";
	$nomparticipants="";

	
	if(isset($_POST['submit']) )
	{
	$idparticipants=$_POST['idparticipants'];
	$nom_event=$_POST['nom_event'];
	$nomparticipants=$_POST['nomparticipants'];

        if (
            !empty($idparticipants) && 
                !empty($nom_event) &&
            !empty($nomparticipants) 

                    ){
            $participant = new participant($idparticipants,$nom_event,$nomparticipants);

                    $participantC = new participantC();
                
                    
                    

                        $participantC->ajouterparticipant($participant);
                    

                            header("Location:services.php");
        }else
            $err="vous devez remplir tous les champs";     
          
	}

        
       
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
        <a href="./index.html"><img src="images/logo.png" alt=""></a>
    </div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4">
            <a href="./index.html"><img src="images/logo.png" alt=""></a>
            <!--h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">WonderWoman<span class="text-primary">.</span> </a></h1-->
          </div>
          <div class="col-12 col-md-12 d-none d-xl-block">
            
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html"><span>Home</span></a></li>
                <li class="has-children">
                  <a href="services.php"><span>Evenements</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">campagne de sensibilisation</a></li>
                    <li><a href="#">developpement personnel</a></li>
                    <li><a href="#">conférences</a></li>
                    <!--li class="has-children">
                      <a href="#">Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">Physical Therapy</a></li>
                        <li><a href="#">Massage Therapy</a></li>
                        <li><a href="#">Chiropractic Therapy</a></li>
                      </ul>
                    </li-->
                  </ul>
                </li>
                <li><a href="Produits.php"><span>Produits</span></a></li>
                <li><a href="about.php"><span>About</span></a></li>
                <li><a href="blog.php"><span>forum</span></a></li>
                <li><a href="contact.php"><span>Contact et rendez vous</span></a></li>
                <li><a href="réclamation.php"><span>Réclamation</span></a></li>

                
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
                <h1 data-aos="fade-up" class="mb-5">We do our  <span class="typed-words"></span></h1>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    <div id="layoutAuthentication_content">
      <main>
        <br>
        <br>
        <br>
        <br><br>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-7">
                      <div class="card shadow-lg border-0 rounded-lg mt-5">
                          <div class="card-header"><h3 class="text-center font-weight-light my-4">pour participer remplir ce formulaire</h3></div>
                          <div class="card-body">
                              <form method="POST"  class="env">
                                  <div class="form-row">
                                         
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="small mb-1" for="nom_event"> nom_event</label>
                                                  <input class="form-control py-4" id="nom_event" type="text"name="nom_event"  placeholder="Enter nom_event" />
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="small mb-1" for="idparticipants">idparticipants</label>
                                                  <input class="form-control py-4" id="idparticipants" type="number" name="idparticipants"  placeholder="enter participant id" />
                                              </div>
                                          </div>
                                           <div class="col-md-12">
                                           <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="small mb-1" for="nomparticpants">nomparticpants</label>
                                                  <input class="form-control py-4" id="nomparticpants" type="text" name="nomparticpants"  placeholder="enter participant name" />
                                              </div>
                                          </div>
                                          

                                          
                                  </div>
                                  

                                 
                                  
                                  <div class="form-group mt-4 mb-0">
                   
                                      <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>
                                      <div class="small"><a href="services.php">Cancel</a></div>

          
                                  </div>
                                  
                              </form>
                          </div>
                          
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
   
                               
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    

    <div class="site-section block-services-1">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary text-black">Our events</h2>
          </div>
        </div>
        <div class="row">
          <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <h3 class="block-service-1-heading mb-3"><a href="#">Evenements</a></h3>
              <div class="block-service-1-excerpt"><p>Les événements sont des moments particuliers qui se produisent dans nos vies, qu'ils soient positifs ou négatifs. Ils peuvent être petits ou grands, importants ou insignifiants, mais ils ont tous un impact sur nous d'une manière ou d'une autre. </p></div>
            </div>
          </div>
          <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <h3 class="block-service-1-heading mb-3"><a href="#">developpement personnel</a></h3>
              <div class="block-service-1-excerpt"><p>Les événements peuvent être des catalyseurs pour notre développement personnel. Les moments de transition, les défis et les réussites peuvent tous nous aider à grandir et à évoluer</p></div>
            </div>
          </div>
          <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <h3 class="block-service-1-heading mb-3"><a href="#">evenement sensibilisation</a></h3>
              <div class="block-service-1-excerpt"><p>Des événements tels que des marches pour l'égalité, des campagnes de sensibilisation à la santé mentale, des levées de fonds pour les personnes dans le besoin, ou des manifestations pour la justice sociale peuvent tous contribuer à éduquer le public sur des questions importantes et à inspirer l'action.</p></div>
            </div>
          </div>
          <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <h3 class="block-service-1-heading mb-3"><a href="#">l'evenement conference et debat</a></h3>
              <div class="block-service-1-excerpt"><p>Les conférences et les débats sont des événements qui offrent une occasion unique d'échanger des idées, d'apprendre de nouvelles perspectives et de discuter de questions importantes. </p></div>
            </div>
          </div>

   
         <?php 
      $conn = mysqli_connect("localhost", "root", "", "projet");

      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      
      $result = mysqli_query($conn, "SELECT * FROM evenement");
      while ($row = mysqli_fetch_array($result)) {
      ?>
      <div class="container">
      <div class="d-block d-lg-flex">
      <div class="half-wrap d-block d-md-flex">
        
          <div class="text">
                <h2><?php  echo $row["nom_event"];?></h2>
             
                <p><?php echo $row['description'];?></p>
                </div>
    </div>          
                
            <?php 
}  ?>
          </div>
    </div>
    </div>
   
    <div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
 
          
        </div>
      </div>
    </div>
    <br>
    

    </div>
                    </div>
                </div>
            </main>
        </div>
  </div>
  
    <div class="block-half-content-1 d-block d-lg-flex mt-5">
      <div class="block-half-content-img" style="background-image: url('images/hero_bg_1.jpg')">
        
      </div>
      <div class="block-half-content-text bg-primary">
        <div class="block-half-content-text-inner">
          <h2 class="block-half-content-heading mb-4">Why Choose Us</h2>
          <div class="block-half-content-excerpt">
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur possimus nam totam, repellat expedita ullam amet velit.</p>
          </div>
        </div>

        <div class="block-counter-1 section-counter">
          <div class="row">
            <div class="col-sm-4">
              <div class="counter">
                <div class="number-wrap">
                  <span class="block-counter-1-number" data-number="3">0</span><span class="append">K</span>
                </div>
                <span class="block-counter-1-caption">Happy Customers</span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="counter">
                <div class="number-wrap">
                  <span class="block-counter-1-number" data-number="7">0</span><span class="append
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
                <span class="block-counter-1-caption">Customer Satisfaction</span>
              </div>
            </div>
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
            <p class="mb-0 text-white lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
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
            strings: ["services to ease your pain"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  
  </body>
</html>   