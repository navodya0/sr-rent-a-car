<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 44,
    'type' => 'document',
    'pagetitle' => 'driver-information',
    'longtitle' => '',
    'description' => '',
    'alias' => 'driver-information',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<section class="hero-wrap hero-wrap-2" 
    style="background-image: url(\'assets/images/booking-bg.jpg\'); height: 36rem;" 
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 36rem;">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Driver Details</h1>
                <p class="breadcrumbs" style="padding-bottom: 20px;">
                    <span class="mr-2">
                        <a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span>Driver Details <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bookingStepPage py-5">
    <div class="container">

        <div class="bookingSteps mb-4">
            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">1</span>
                <span class="bookingSteps__text">Select vehicle</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">2</span>
                <span class="bookingSteps__text">Your deal</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">3</span>
                <span class="bookingSteps__text">Coverage</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--active">
                <span class="bookingSteps__num">4</span>
                <span class="bookingSteps__text">Driver details</span>
            </div>
        </div>

        <div class="bookingStepTopbar mb-4">
            <a href="javascript:history.back()" class="bookingStepTopbar__back">
                ← Back to coverage
            </a>
            <div class="bookingStepTopbar__next">
                Next: Payment
            </div>
        </div>

        [[!VehicleDriverDetailsStep4]]
    </div>
</section>',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 42,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1773743529,
    'editedby' => 1,
    'editedon' => 1773743553,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1773743520,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="index.php?id=1">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="index.php?id=1" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="index.php?id=4" class="nav-link">FLEET</a></li>
        <li class="nav-item"><a href="index.php?id=5" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="index.php?id=9" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="index.php?id=11" class="nav-link">TRANSFERS</a></li>
        <li class="nav-item"><a href="index.php?id=3" class="nav-link">WEDDING RENTALS</a></li>
        <li class="nav-item"><a href="index.php?id=10" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="index.php?id=6" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>



<section class="hero-wrap hero-wrap-2" 
    style="background-image: url(\'assets/images/booking-bg.jpg\'); height: 36rem;" 
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 36rem;">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Driver Details</h1>
                <p class="breadcrumbs" style="padding-bottom: 20px;">
                    <span class="mr-2">
                        <a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span>Driver Details <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bookingStepPage py-5">
    <div class="container">

        <div class="bookingSteps mb-4">
            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">1</span>
                <span class="bookingSteps__text">Select vehicle</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">2</span>
                <span class="bookingSteps__text">Your deal</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">3</span>
                <span class="bookingSteps__text">Coverage</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--active">
                <span class="bookingSteps__num">4</span>
                <span class="bookingSteps__text">Driver details</span>
            </div>
        </div>

        <div class="bookingStepTopbar mb-4">
            <a href="javascript:history.back()" class="bookingStepTopbar__back">
                ← Back to coverage
            </a>
            <div class="bookingStepTopbar__next">
                Next: Payment
            </div>
        </div>

        [[!VehicleDriverDetailsStep4]]
    </div>
</section>
<!-- ✅ Global Top-Right Logo (visible on all pages) -->
<div class="global-logo">
  <img src="assets/images/award.png" alt="Sri Lanka Rent A Car">
</div>
<footer class="footer-section">


<button id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Find Us </h4>
                            <span>371/5, Negombo Road, Seeduwa, Sri Lanka</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text" style="text-align: left;" >
                            <h4>Call us</h4>
                            <span>+94 77 778 0729</span>
                        </div>
                    </div>
                </div>
  
                <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fab fa-whatsapp"></i>
                      <div class="cta-text" style="text-align: left;">
                          <h4>Chat with us on WhatsApp</h4>
                          <span>+94 77 778 0729</span>
                      </div>
                  </div>
              </div>
              
  
            </div>


            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Mail us</h4>
                            <span>info@srilankarentacar.com</span>
                        </div>
                    </div>
                </div>
               
              
  
            </div>
            
             
           
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo_white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="text-align: justify;">“As a leading Sri Lanka car rental service provider, “SR Rent A Car” offers one of the practical car rental choices for tourists, businessmen and locals who want to visit and explore the “Pearl of the Indian Ocean”. The company was established in 2004 and had been providing service like ever since.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow Us On</span>
                           <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank">
                                <img src="assets/images/social_media/linkedin.png" alt="Home" style="width: 40px;height: auto;"></a>
                           
                                <a href="https://www.facebook.com/srrentacar" target="_blank">
                                    <img src="assets/images/social_media/fb.png" alt="Home" style="width: 40px;height: auto;"></a>
                                    <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank">
                                        <img src="assets/images/social_media/insta.png" alt="Home" style="width: 40px;height: auto;"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets/images/useful/1.png" alt="Home" style="width: 40px;height: auto;"> Airport Parking</a>
                            </li>
                            
                            <li><a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets/images/useful/4.png" alt="Home" style="width: 40px;height: auto;"> 9 Trees Boutique Villa</a>
                            </li>
                            
                            <li><a href="https://explore.vacations/" target="_blank">
                                <img src="assets/images/useful/2.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Sri Lanka)</a>
                            </li>
                            
                            <!--li><a href="https://explorevacations.ch/" target="_blank">
                                <img src="assets/images/useful/3.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Switzerland)</a>
                            </li-->
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/6.png" alt="Home" style="width: 40px;height: auto;"> SR Transfers</a>
                            </li>
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/5.png" alt="Home" style="width: 40px;height: auto;"> Euro Motors</a>
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form id="subscribeForm">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <p id="responseMessage" style="display: none; color: green;"></p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img src="assets/images/payment.png" alt="Payment Methods" style="height: 40px; width: 150px;">
                            <img src="assets/images/raca.png" alt="SR Rent A Car Logo" style="height: 50px; width: 90px; margin-left: 10px;">
                        </div>
                        <p style="margin: 0; font-size: 14px;">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved 
                            <a href="#" style="text-decoration: none; color: red;">SR Rent A Car</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <!-- WhatsApp Chat Popup starts -->
<div id="whatsapp-chat-btn" class="wa-button">
    <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px">
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->


  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--script src="assets/js/aos.js"></script-->
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
 
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  
  <!-- JavaScript -->
    <script>
      window.addEventListener(\'scroll\', function() {
        const image = document.getElementById(\'dynamic-image\');
        const scrollPosition = window.scrollY;
  
        if (scrollPosition > 0) {  // Adjust this value as needed
          image.src = \'assets/images/logo.png\';
        } else {
          image.src = \'assets/images/logo_white.png\';
        }
      });
    </script>
  
  <!-- <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script> -->
  
  <!-- <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script> -->
  
  <script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const modalImage = document.getElementById(\'modalImage\');
    const images = document.querySelectorAll(\'img[data-bs-toggle="modal"]\');
  
    images.forEach(img => {
      img.addEventListener(\'click\', function () {
        const imgSrc = img.getAttribute(\'data-bs-img-src\');
        modalImage.src = imgSrc;
      });
    });
  });
  
  </script>
  
  <script>
  document.getElementById(\'subscribeForm\').addEventListener(\'submit\', function(e) {
    e.preventDefault(); // Prevent form from submitting the traditional way

    const email = document.getElementById(\'email\').value;

    fetch(\'subscribe.php\', {
        method: \'POST\',
        headers: {
            \'Content-Type\': \'application/x-www-form-urlencoded\'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').innerText = \'Thank you for subscribing!\';
        document.getElementById(\'subscribeForm\').reset();
    })
    .catch(error => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').style.color = \'red\';
        document.getElementById(\'responseMessage\').innerText = \'Subscription failed. Please try again.\';
    });
});


document.addEventListener(\'scroll\', function() {
    const backToTopButton = document.getElementById(\'backToTop\');
    if (window.scrollY > 100) {
        backToTopButton.style.display = \'block\';
    } else {
        backToTopButton.style.display = \'none\';
    }
});

document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
    window.scrollTo({ top: 0, behavior: \'smooth\' });
});


// document.addEventListener(\'contextmenu\', function(event) {
//     event.preventDefault();
//     alert(\'Right-click is disabled!\');
// });

  
  </script>
  
  
  
  
  </body>
  </html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'icon' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[~1]]' => 'index.php?id=1',
    '[[~4]]' => 'index.php?id=4',
    '[[~5]]' => 'index.php?id=5',
    '[[~9]]' => 'index.php?id=9',
    '[[~11]]' => 'index.php?id=11',
    '[[~3]]' => 'index.php?id=3',
    '[[~10]]' => 'index.php?id=10',
    '[[~6]]' => 'index.php?id=6',
    '[[$header?]]' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="index.php?id=1">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="index.php?id=1" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="index.php?id=4" class="nav-link">FLEET</a></li>
        <li class="nav-item"><a href="index.php?id=5" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="index.php?id=9" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="index.php?id=11" class="nav-link">TRANSFERS</a></li>
        <li class="nav-item"><a href="index.php?id=3" class="nav-link">WEDDING RENTALS</a></li>
        <li class="nav-item"><a href="index.php?id=10" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="index.php?id=6" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
    '[[$footer?]]' => '<footer class="footer-section">


<button id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Find Us </h4>
                            <span>371/5, Negombo Road, Seeduwa, Sri Lanka</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text" style="text-align: left;" >
                            <h4>Call us</h4>
                            <span>+94 77 778 0729</span>
                        </div>
                    </div>
                </div>
  
                <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fab fa-whatsapp"></i>
                      <div class="cta-text" style="text-align: left;">
                          <h4>Chat with us on WhatsApp</h4>
                          <span>+94 77 778 0729</span>
                      </div>
                  </div>
              </div>
              
  
            </div>


            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Mail us</h4>
                            <span>info@srilankarentacar.com</span>
                        </div>
                    </div>
                </div>
               
              
  
            </div>
            
             
           
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo_white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="text-align: justify;">“As a leading Sri Lanka car rental service provider, “SR Rent A Car” offers one of the practical car rental choices for tourists, businessmen and locals who want to visit and explore the “Pearl of the Indian Ocean”. The company was established in 2004 and had been providing service like ever since.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow Us On</span>
                           <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank">
                                <img src="assets/images/social_media/linkedin.png" alt="Home" style="width: 40px;height: auto;"></a>
                           
                                <a href="https://www.facebook.com/srrentacar" target="_blank">
                                    <img src="assets/images/social_media/fb.png" alt="Home" style="width: 40px;height: auto;"></a>
                                    <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank">
                                        <img src="assets/images/social_media/insta.png" alt="Home" style="width: 40px;height: auto;"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets/images/useful/1.png" alt="Home" style="width: 40px;height: auto;"> Airport Parking</a>
                            </li>
                            
                            <li><a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets/images/useful/4.png" alt="Home" style="width: 40px;height: auto;"> 9 Trees Boutique Villa</a>
                            </li>
                            
                            <li><a href="https://explore.vacations/" target="_blank">
                                <img src="assets/images/useful/2.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Sri Lanka)</a>
                            </li>
                            
                            <!--li><a href="https://explorevacations.ch/" target="_blank">
                                <img src="assets/images/useful/3.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Switzerland)</a>
                            </li-->
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/6.png" alt="Home" style="width: 40px;height: auto;"> SR Transfers</a>
                            </li>
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/5.png" alt="Home" style="width: 40px;height: auto;"> Euro Motors</a>
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form id="subscribeForm">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <p id="responseMessage" style="display: none; color: green;"></p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img src="assets/images/payment.png" alt="Payment Methods" style="height: 40px; width: 150px;">
                            <img src="assets/images/raca.png" alt="SR Rent A Car Logo" style="height: 50px; width: 90px; margin-left: 10px;">
                        </div>
                        <p style="margin: 0; font-size: 14px;">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved 
                            <a href="#" style="text-decoration: none; color: red;">SR Rent A Car</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <!-- WhatsApp Chat Popup starts -->
<div id="whatsapp-chat-btn" class="wa-button">
    <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px">
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->


  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--script src="assets/js/aos.js"></script-->
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
 
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  
  <!-- JavaScript -->
    <script>
      window.addEventListener(\'scroll\', function() {
        const image = document.getElementById(\'dynamic-image\');
        const scrollPosition = window.scrollY;
  
        if (scrollPosition > 0) {  // Adjust this value as needed
          image.src = \'assets/images/logo.png\';
        } else {
          image.src = \'assets/images/logo_white.png\';
        }
      });
    </script>
  
  <!-- <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script> -->
  
  <!-- <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script> -->
  
  <script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const modalImage = document.getElementById(\'modalImage\');
    const images = document.querySelectorAll(\'img[data-bs-toggle="modal"]\');
  
    images.forEach(img => {
      img.addEventListener(\'click\', function () {
        const imgSrc = img.getAttribute(\'data-bs-img-src\');
        modalImage.src = imgSrc;
      });
    });
  });
  
  </script>
  
  <script>
  document.getElementById(\'subscribeForm\').addEventListener(\'submit\', function(e) {
    e.preventDefault(); // Prevent form from submitting the traditional way

    const email = document.getElementById(\'email\').value;

    fetch(\'subscribe.php\', {
        method: \'POST\',
        headers: {
            \'Content-Type\': \'application/x-www-form-urlencoded\'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').innerText = \'Thank you for subscribing!\';
        document.getElementById(\'subscribeForm\').reset();
    })
    .catch(error => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').style.color = \'red\';
        document.getElementById(\'responseMessage\').innerText = \'Subscription failed. Please try again.\';
    });
});


document.addEventListener(\'scroll\', function() {
    const backToTopButton = document.getElementById(\'backToTop\');
    if (window.scrollY > 100) {
        backToTopButton.style.display = \'block\';
    } else {
        backToTopButton.style.display = \'none\';
    }
});

document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
    window.scrollTo({ top: 0, behavior: \'smooth\' });
});


// document.addEventListener(\'contextmenu\', function(event) {
//     event.preventDefault();
//     alert(\'Right-click is disabled!\');
// });

  
  </script>
  
  
  
  
  </body>
  </html>',
  ),
  'sourceCache' => 
  array (
    'MODX\\Revolution\\modChunk' => 
    array (
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="[[~1]]">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="[[~1]]" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="[[~4]]" class="nav-link">FLEET</a></li>
        <li class="nav-item"><a href="[[~5]]" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="[[~9]]" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="[[~11]]" class="nav-link">TRANSFERS</a></li>
        <li class="nav-item"><a href="[[~3]]" class="nav-link">WEDDING RENTALS</a></li>
        <li class="nav-item"><a href="[[~10]]" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="[[~6]]" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="[[~1]]">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="[[~1]]" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="[[~4]]" class="nav-link">FLEET</a></li>
        <li class="nav-item"><a href="[[~5]]" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="[[~9]]" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="[[~11]]" class="nav-link">TRANSFERS</a></li>
        <li class="nav-item"><a href="[[~3]]" class="nav-link">WEDDING RENTALS</a></li>
        <li class="nav-item"><a href="[[~10]]" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="[[~6]]" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer class="footer-section">


<button id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Find Us </h4>
                            <span>371/5, Negombo Road, Seeduwa, Sri Lanka</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text" style="text-align: left;" >
                            <h4>Call us</h4>
                            <span>+94 77 778 0729</span>
                        </div>
                    </div>
                </div>
  
                <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fab fa-whatsapp"></i>
                      <div class="cta-text" style="text-align: left;">
                          <h4>Chat with us on WhatsApp</h4>
                          <span>+94 77 778 0729</span>
                      </div>
                  </div>
              </div>
              
  
            </div>


            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Mail us</h4>
                            <span>info@srilankarentacar.com</span>
                        </div>
                    </div>
                </div>
               
              
  
            </div>
            
             
           
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo_white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="text-align: justify;">“As a leading Sri Lanka car rental service provider, “SR Rent A Car” offers one of the practical car rental choices for tourists, businessmen and locals who want to visit and explore the “Pearl of the Indian Ocean”. The company was established in 2004 and had been providing service like ever since.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow Us On</span>
                           <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank">
                                <img src="assets/images/social_media/linkedin.png" alt="Home" style="width: 40px;height: auto;"></a>
                           
                                <a href="https://www.facebook.com/srrentacar" target="_blank">
                                    <img src="assets/images/social_media/fb.png" alt="Home" style="width: 40px;height: auto;"></a>
                                    <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank">
                                        <img src="assets/images/social_media/insta.png" alt="Home" style="width: 40px;height: auto;"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets/images/useful/1.png" alt="Home" style="width: 40px;height: auto;"> Airport Parking</a>
                            </li>
                            
                            <li><a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets/images/useful/4.png" alt="Home" style="width: 40px;height: auto;"> 9 Trees Boutique Villa</a>
                            </li>
                            
                            <li><a href="https://explore.vacations/" target="_blank">
                                <img src="assets/images/useful/2.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Sri Lanka)</a>
                            </li>
                            
                            <!--li><a href="https://explorevacations.ch/" target="_blank">
                                <img src="assets/images/useful/3.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Switzerland)</a>
                            </li-->
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/6.png" alt="Home" style="width: 40px;height: auto;"> SR Transfers</a>
                            </li>
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/5.png" alt="Home" style="width: 40px;height: auto;"> Euro Motors</a>
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form id="subscribeForm">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <p id="responseMessage" style="display: none; color: green;"></p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img src="assets/images/payment.png" alt="Payment Methods" style="height: 40px; width: 150px;">
                            <img src="assets/images/raca.png" alt="SR Rent A Car Logo" style="height: 50px; width: 90px; margin-left: 10px;">
                        </div>
                        <p style="margin: 0; font-size: 14px;">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved 
                            <a href="#" style="text-decoration: none; color: red;">SR Rent A Car</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <!-- WhatsApp Chat Popup starts -->
<div id="whatsapp-chat-btn" class="wa-button">
    <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px">
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->


  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--script src="assets/js/aos.js"></script-->
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
 
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  
  <!-- JavaScript -->
    <script>
      window.addEventListener(\'scroll\', function() {
        const image = document.getElementById(\'dynamic-image\');
        const scrollPosition = window.scrollY;
  
        if (scrollPosition > 0) {  // Adjust this value as needed
          image.src = \'assets/images/logo.png\';
        } else {
          image.src = \'assets/images/logo_white.png\';
        }
      });
    </script>
  
  <!-- <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script> -->
  
  <!-- <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script> -->
  
  <script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const modalImage = document.getElementById(\'modalImage\');
    const images = document.querySelectorAll(\'img[data-bs-toggle="modal"]\');
  
    images.forEach(img => {
      img.addEventListener(\'click\', function () {
        const imgSrc = img.getAttribute(\'data-bs-img-src\');
        modalImage.src = imgSrc;
      });
    });
  });
  
  </script>
  
  <script>
  document.getElementById(\'subscribeForm\').addEventListener(\'submit\', function(e) {
    e.preventDefault(); // Prevent form from submitting the traditional way

    const email = document.getElementById(\'email\').value;

    fetch(\'subscribe.php\', {
        method: \'POST\',
        headers: {
            \'Content-Type\': \'application/x-www-form-urlencoded\'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').innerText = \'Thank you for subscribing!\';
        document.getElementById(\'subscribeForm\').reset();
    })
    .catch(error => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').style.color = \'red\';
        document.getElementById(\'responseMessage\').innerText = \'Subscription failed. Please try again.\';
    });
});


document.addEventListener(\'scroll\', function() {
    const backToTopButton = document.getElementById(\'backToTop\');
    if (window.scrollY > 100) {
        backToTopButton.style.display = \'block\';
    } else {
        backToTopButton.style.display = \'none\';
    }
});

document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
    window.scrollTo({ top: 0, behavior: \'smooth\' });
});


// document.addEventListener(\'contextmenu\', function(event) {
//     event.preventDefault();
//     alert(\'Right-click is disabled!\');
// });

  
  </script>
  
  
  
  
  </body>
  </html>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer class="footer-section">


<button id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Find Us </h4>
                            <span>371/5, Negombo Road, Seeduwa, Sri Lanka</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text" style="text-align: left;" >
                            <h4>Call us</h4>
                            <span>+94 77 778 0729</span>
                        </div>
                    </div>
                </div>
  
                <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fab fa-whatsapp"></i>
                      <div class="cta-text" style="text-align: left;">
                          <h4>Chat with us on WhatsApp</h4>
                          <span>+94 77 778 0729</span>
                      </div>
                  </div>
              </div>
              
  
            </div>


            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Mail us</h4>
                            <span>info@srilankarentacar.com</span>
                        </div>
                    </div>
                </div>
               
              
  
            </div>
            
             
           
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo_white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="text-align: justify;">“As a leading Sri Lanka car rental service provider, “SR Rent A Car” offers one of the practical car rental choices for tourists, businessmen and locals who want to visit and explore the “Pearl of the Indian Ocean”. The company was established in 2004 and had been providing service like ever since.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow Us On</span>
                           <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank">
                                <img src="assets/images/social_media/linkedin.png" alt="Home" style="width: 40px;height: auto;"></a>
                           
                                <a href="https://www.facebook.com/srrentacar" target="_blank">
                                    <img src="assets/images/social_media/fb.png" alt="Home" style="width: 40px;height: auto;"></a>
                                    <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank">
                                        <img src="assets/images/social_media/insta.png" alt="Home" style="width: 40px;height: auto;"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets/images/useful/1.png" alt="Home" style="width: 40px;height: auto;"> Airport Parking</a>
                            </li>
                            
                            <li><a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets/images/useful/4.png" alt="Home" style="width: 40px;height: auto;"> 9 Trees Boutique Villa</a>
                            </li>
                            
                            <li><a href="https://explore.vacations/" target="_blank">
                                <img src="assets/images/useful/2.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Sri Lanka)</a>
                            </li>
                            
                            <!--li><a href="https://explorevacations.ch/" target="_blank">
                                <img src="assets/images/useful/3.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Switzerland)</a>
                            </li-->
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/6.png" alt="Home" style="width: 40px;height: auto;"> SR Transfers</a>
                            </li>
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/5.png" alt="Home" style="width: 40px;height: auto;"> Euro Motors</a>
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form id="subscribeForm">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <p id="responseMessage" style="display: none; color: green;"></p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img src="assets/images/payment.png" alt="Payment Methods" style="height: 40px; width: 150px;">
                            <img src="assets/images/raca.png" alt="SR Rent A Car Logo" style="height: 50px; width: 90px; margin-left: 10px;">
                        </div>
                        <p style="margin: 0; font-size: 14px;">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved 
                            <a href="#" style="text-decoration: none; color: red;">SR Rent A Car</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <!-- WhatsApp Chat Popup starts -->
<div id="whatsapp-chat-btn" class="wa-button">
    <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px">
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->


  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--script src="assets/js/aos.js"></script-->
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
 
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  
  <!-- JavaScript -->
    <script>
      window.addEventListener(\'scroll\', function() {
        const image = document.getElementById(\'dynamic-image\');
        const scrollPosition = window.scrollY;
  
        if (scrollPosition > 0) {  // Adjust this value as needed
          image.src = \'assets/images/logo.png\';
        } else {
          image.src = \'assets/images/logo_white.png\';
        }
      });
    </script>
  
  <!-- <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script> -->
  
  <!-- <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script> -->
  
  <script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const modalImage = document.getElementById(\'modalImage\');
    const images = document.querySelectorAll(\'img[data-bs-toggle="modal"]\');
  
    images.forEach(img => {
      img.addEventListener(\'click\', function () {
        const imgSrc = img.getAttribute(\'data-bs-img-src\');
        modalImage.src = imgSrc;
      });
    });
  });
  
  </script>
  
  <script>
  document.getElementById(\'subscribeForm\').addEventListener(\'submit\', function(e) {
    e.preventDefault(); // Prevent form from submitting the traditional way

    const email = document.getElementById(\'email\').value;

    fetch(\'subscribe.php\', {
        method: \'POST\',
        headers: {
            \'Content-Type\': \'application/x-www-form-urlencoded\'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').innerText = \'Thank you for subscribing!\';
        document.getElementById(\'subscribeForm\').reset();
    })
    .catch(error => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').style.color = \'red\';
        document.getElementById(\'responseMessage\').innerText = \'Subscription failed. Please try again.\';
    });
});


document.addEventListener(\'scroll\', function() {
    const backToTopButton = document.getElementById(\'backToTop\');
    if (window.scrollY > 100) {
        backToTopButton.style.display = \'block\';
    } else {
        backToTopButton.style.display = \'none\';
    }
});

document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
    window.scrollTo({ top: 0, behavior: \'smooth\' });
});


// document.addEventListener(\'contextmenu\', function(event) {
//     event.preventDefault();
//     alert(\'Right-click is disabled!\');
// });

  
  </script>
  
  
  
  
  </body>
  </html>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
      'VehicleDriverDetailsStep4' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'VehicleDriverDetailsStep4',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => 'require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Read booking data from session
|--------------------------------------------------------------------------
*/
$sessionBooking  = $_SESSION[\'booking_step3\'] ?? [];
$sessionCoverage = $_SESSION[\'booking_step4\'] ?? [];

/*
|--------------------------------------------------------------------------
| If arriving from coverage page by POST, save selected coverage in session
|--------------------------------------------------------------------------
*/
if ($_SERVER[\'REQUEST_METHOD\'] === \'POST\') {
    $_SESSION[\'booking_step4\'] = [
        \'coverage_id\'        => trim($_POST[\'coverage_id\'] ?? \'\'),
        \'coverage_db_id\'     => (int)($_POST[\'coverage_db_id\'] ?? 0),
        \'coverage_name\'      => trim($_POST[\'coverage_name\'] ?? \'\'),
        \'coverage_day_price\' => (float)($_POST[\'coverage_day_price\'] ?? 0),
        \'coverage_total\'     => (float)($_POST[\'coverage_total\'] ?? 0),
    ];

    $sessionCoverage = $_SESSION[\'booking_step4\'];
}

/*
|--------------------------------------------------------------------------
| Use session values, not URL/query-string values
|--------------------------------------------------------------------------
*/
$vehicleId       = isset($sessionBooking[\'vehicle_id\']) ? (int)$sessionBooking[\'vehicle_id\'] : 0;
$carCode         = trim($sessionBooking[\'car_code\'] ?? \'\');
$pickupDateTime  = trim($sessionBooking[\'pickup_datetime\'] ?? \'\');
$dropoffDateTime = trim($sessionBooking[\'dropoff_datetime\'] ?? \'\');
$pickupLocation  = trim($sessionBooking[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($sessionBooking[\'dropoff_location\'] ?? \'\');
$days            = isset($sessionBooking[\'days\']) ? (int)$sessionBooking[\'days\'] : 0;

$rentalAmount    = isset($sessionBooking[\'rental_amount\']) ? (float)$sessionBooking[\'rental_amount\'] : 0;
$securityDeposit = isset($sessionBooking[\'security_deposit\']) ? (float)$sessionBooking[\'security_deposit\'] : 0;
$extrasTotal     = isset($sessionBooking[\'extras_total\']) ? (float)$sessionBooking[\'extras_total\'] : 0;
$grandTotal      = isset($sessionBooking[\'grand_total\']) ? (float)$sessionBooking[\'grand_total\'] : 0;
$selectedExtras  = isset($sessionBooking[\'extras\']) && is_array($sessionBooking[\'extras\'])
    ? $sessionBooking[\'extras\']
    : [];

$coverageId       = trim($sessionCoverage[\'coverage_id\'] ?? \'\');
$coverageDbId     = isset($sessionCoverage[\'coverage_db_id\']) ? (int)$sessionCoverage[\'coverage_db_id\'] : 0;
$coverageName     = trim($sessionCoverage[\'coverage_name\'] ?? \'No coverage\');
$coverageDayPrice = isset($sessionCoverage[\'coverage_day_price\']) ? (float)$sessionCoverage[\'coverage_day_price\'] : 0;
$coverageTotal    = isset($sessionCoverage[\'coverage_total\']) ? (float)$sessionCoverage[\'coverage_total\'] : 0;

if ($vehicleId <= 0 && $carCode === \'\') {
    return \'<p>Vehicle not selected.</p>\';
}

$pickupDate  = ($pickupDateTime && strtotime($pickupDateTime)) ? date(\'Y-m-d\', strtotime($pickupDateTime)) : \'\';
$dropoffDate = ($dropoffDateTime && strtotime($dropoffDateTime)) ? date(\'Y-m-d\', strtotime($dropoffDateTime)) : \'\';

if ($days <= 0 && $pickupDate && $dropoffDate) {
    $start = strtotime($pickupDate);
    $end   = strtotime($dropoffDate);
    if ($start && $end && $end >= $start) {
        $days = max(1, (int)(($end - $start) / 86400) + 1);
    }
}

$where = [];
$params = [];

if ($vehicleId > 0) {
    $where[] = "v.id = :vehicle_id";
    $params[\':vehicle_id\'] = $vehicleId;
} elseif ($carCode !== \'\') {
    $where[] = "v.car_code = :car_code";
    $params[\':car_code\'] = $carCode;
}

$sql = "SELECT
          v.id,
          v.image,
          v.car_model,
          v.car_category,
          v.car_code,
          v.pax_count,
          v.luggage_count,
          v.transmission_type,
          v.deposit_amount
        FROM vehicles v
        WHERE " . implode(\' AND \', $where) . "
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare driver details query.</p>\';

foreach ($params as $key => $value) {
    if ($key === \':vehicle_id\') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return \'<p>Could not load vehicle: \' . htmlspecialchars($error[2], ENT_QUOTES, \'UTF-8\') . \'</p>\';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return \'<p>Vehicle not found.</p>\';

$pickupText  = $pickupDateTime && strtotime($pickupDateTime) ? date(\'d M Y, H:i\', strtotime($pickupDateTime)) : \'\';
$dropoffText = $dropoffDateTime && strtotime($dropoffDateTime) ? date(\'d M Y, H:i\', strtotime($dropoffDateTime)) : \'\';

if ($securityDeposit <= 0 && isset($row[\'deposit_amount\']) && $row[\'deposit_amount\'] !== \'\') {
    $securityDeposit = (float)$row[\'deposit_amount\'];
}

$totalForTrip = $grandTotal > 0
    ? ($grandTotal + $coverageTotal)
    : ($rentalAmount + $extrasTotal + $coverageTotal);

$paymentPageId = 44; // change to your payment page resource id
$formAction = html_entity_decode($modx->makeUrl($paymentPageId), ENT_QUOTES, \'UTF-8\');

$out = \'\';

$out .= \'<div class="driverStepLayout">\';
$out .= \'  <div class="row">\';

$out .= \'    <div class="col-lg-8">\';
$out .= \'      <div class="driverStepMain">\';

$out .= \'        <div class="driverStepHeading mb-4">\';
$out .= \'          <h2 class="driverStepHeading__title">Enter driver details</h2>\';
$out .= \'        </div>\';

$out .= \'        <form action="\' . htmlspecialchars($formAction, ENT_QUOTES, \'UTF-8\') . \'" method="post" enctype="multipart/form-data" class="driverForm" id="driverDetailsForm">\';

$out .= \'          <div class="row">\';

$out .= \'            <div class="col-md-6 mb-0">\';
$out .= \'              <label class="driverForm__label">Full Name</label>\';
$out .= \'              <input type="text" name="full_name" class="form-control driverForm__control" placeholder="Full name" required>\';
$out .= \'              <small class="text-muted">Can only contain letters A-Z.</small>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Email</label>\';
$out .= \'              <input type="email" name="email" class="form-control driverForm__control" placeholder="Email" required>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Whatsapp Number</label>\';
$out .= \'              <input type="text" name="whatsapp_number" class="form-control driverForm__control" placeholder="Whatsapp Number" required>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-0">\';
$out .= \'              <label class="driverForm__label">Country of residence</label>\';
$out .= \'              <input type="text" name="country_of_residence" class="form-control driverForm__control" placeholder="Country of residence" required>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Number of passengers</label>\';
$out .= \'              <input type="number" name="passengers" class="form-control driverForm__control" placeholder="Passenger Count" required>\';
$out .= \'            </div>\';

$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Flight number <span class="text-muted">optional</span></label>\';
$out .= \'                <input type="text" name="flight_number" class="form-control driverForm__control" placeholder="AA123">\';
$out .= \'              </div>\';
$out .= \'          </div>\';

$out .= \'              <hr>\';


$out .= \'          <div class="driverFormSection mt-4">\';
$out .= \'            <h3 class="driverFormSection__title">Driver options</h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Do you need a chauffeur?</label>\';
$out .= \'                <select name="need_chauffeur" id="need_chauffeur" class="form-control driverForm__control" required>\';
$out .= \'                  <option value="">Select</option>\';
$out .= \'                  <option value="yes">Yes</option>\';
$out .= \'                  <option value="no">No</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';

$out .= \'          <div class="driverFormSection mt-4" id="licenseSection" style="display:none;">\';
$out .= \'            <h3 class="driverFormSection__title">License and documents</h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Do you need a Sri Lankan driver’s license?</label>\';
$out .= \'                <select name="need_sl_license" id="need_sl_license" class="form-control driverForm__control">\';
$out .= \'                  <option value="">Select</option>\';
$out .= \'                  <option value="yes">Yes</option>\';
$out .= \'                  <option value="no">No</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';

$out .= \'            <div id="uploadSection" style="display:none;">\';
$out .= \'              <div class="row">\';
$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">Passport image</label>\';
$out .= \'                  <input type="file" name="passport_image" class="form-control driverForm__control" accept="image/*,.pdf">\';
$out .= \'                </div>\';

$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">IDP image</label>\';
$out .= \'                  <input type="file" name="idp_image" class="form-control driverForm__control" accept="image/*,.pdf">\';
$out .= \'                </div>\';

$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">Color photo of applicant</label>\';
$out .= \'                  <input type="file" name="applicant_photo" class="form-control driverForm__control" accept="image/*">\';
$out .= \'                </div>\';

$out .= \'                <div class="col-md-12 mb-3">\';
$out .= \'                  <label class="driverForm__label">Remarks</label>\';
$out .= \'                  <textarea name="remarks" class="form-control driverForm__control" rows="4" placeholder="Remarks"></textarea>\';
$out .= \'                </div>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';

$out .= \'          <input type="hidden" name="vehicle_id" value="\' . (int)$vehicleId . \'">\';
$out .= \'          <input type="hidden" name="car_code" value="\' . htmlspecialchars($carCode, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="pickup_datetime" value="\' . htmlspecialchars($pickupDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="dropoff_datetime" value="\' . htmlspecialchars($dropoffDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="pickup_location" value="\' . htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="dropoff_location" value="\' . htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="days" value="\' . (int)$days . \'">\';
$out .= \'          <input type="hidden" name="coverage_id" value="\' . htmlspecialchars($coverageId, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_db_id" value="\' . (int)$coverageDbId . \'">\';
$out .= \'          <input type="hidden" name="coverage_name" value="\' . htmlspecialchars($coverageName, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_day_price" value="\' . number_format($coverageDayPrice, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_total" value="\' . number_format($coverageTotal, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="rental_amount" value="\' . number_format($rentalAmount, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="security_deposit" value="\' . number_format($securityDeposit, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="extras_total" value="\' . number_format($extrasTotal, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="grand_total" value="\' . number_format($totalForTrip, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="extras" value="\' . htmlspecialchars(json_encode($selectedExtras), ENT_QUOTES, \'UTF-8\') . \'">\';

$out .= \'              <hr>\';


$out .= \'          <div class="driverFormSection mt-4">\';
$out .= \'            <h3 class="driverFormSection__title">Payment option</h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">How would you like to pay?</label>\';
$out .= \'                <select name="payment_option" id="payment_option" class="form-control driverForm__control" required>\';
$out .= \'                  <option value="">Select payment option</option>\';
$out .= \'                  <option value="pay_now">Pay now</option>\';
$out .= \'                  <option value="pay_on_arrival">Pay on arrival</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';

$out .= \'          <div class="mt-4 d-flex justify-content-end">\';
$out .= \'            <button type="submit" id="bookingSubmitBtn" class="btn btn-primary bookingSubmitBtn">Continue to Payment</button>\';
$out .= \'          </div>\';

$out .= \'        </form>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="col-lg-4">\';
$out .= \'      <aside class="driverSummaryCard">\';
$out .= \'        <div class="driverSummaryCard__vehicle mb-4">\';
$out .= \'          <div class="driverSummaryCard__dates">\';
$out .=                htmlspecialchars(($pickupText ? $pickupText : $pickupDate) . ($dropoffText ? \' - \' . $dropoffText : \'\'));
$out .= \'          </div>\';
$out .= \'          <div class="driverSummaryCard__car d-flex align-items-center justify-content-between">\';
$out .= \'            <div>\';
$out .= \'              <h4 class="driverSummaryCard__carTitle mb-1">\' . htmlspecialchars($row[\'car_model\']) . \'</h4>\';
$out .= \'              <div class="text-muted">or similar \' . htmlspecialchars($row[\'car_category\']) . \'</div>\';
$out .= \'            </div>\';
$out .= \'            <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="driverSummaryCard__image">\';
$out .= \'          </div>\';
$out .= \'        </div>\';

$out .= \'        <div class="driverSummaryCard__block mb-3">\';
$out .= \'          <h5 class="driverSummaryCard__blockTitle">Trip details</h5>\';
$out .= \'          <div class="driverSummaryRow"><span>Pick-up</span><strong>\' . htmlspecialchars($pickupLocation !== \'\' ? $pickupLocation : \'-\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Drop-off</span><strong>\' . htmlspecialchars($dropoffLocation !== \'\' ? $dropoffLocation : \'-\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Rental period</span><strong>\' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Coverage</span><strong>\' . htmlspecialchars($coverageName !== \'\' ? $coverageName : \'No coverage\') . \'</strong></div>\';
$out .= \'        </div>\';

if (!empty($selectedExtras)) {
    $out .= \'        <div class="driverSummaryCard__block mb-3">\';
    $out .= \'          <h5 class="driverSummaryCard__blockTitle">Selected extras</h5>\';
    foreach ($selectedExtras as $extra) {
        $extraName  = htmlspecialchars($extra[\'name\'] ?? \'\', ENT_QUOTES, \'UTF-8\');
        $extraQty   = (int)($extra[\'qty\'] ?? 1);
        $extraValue = isset($extra[\'total\']) ? (float)$extra[\'total\'] : 0;
        $out .= \'    <div class="driverSummaryRow"><span>\' . $extraName . \' × \' . $extraQty . \'</span><strong>€\' . number_format($extraValue, 2, \'.\', \'\') . \'</strong></div>\';
    }
    $out .= \'        </div>\';
}

$out .= \'        <div class="driverSummaryCard__block mb-3">\';
$out .= \'          <h5 class="driverSummaryCard__blockTitle">Price summary</h5>\';
$out .= \'          <div class="driverSummaryRow"><span>Coverage price</span><strong>€ \' . number_format($coverageTotal, 2, \'.\', \',\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Extras price</span><strong>€ \' . number_format($extrasTotal, 2, \'.\', \',\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Rental amount</span><strong>€ \' . number_format($rentalAmount, 2, \'.\', \',\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow driverSummaryRow--total">\';
$out .= \'              <span>Total for \' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</span>\';
$out .= \'              <strong class="driverSummaryTotalPrice">€ \' . number_format($totalForTrip, 2, \'.\', \',\') . \'</strong>\';
$out .= \'          </div>\';
$out .= \'          <div class="driverSummaryMuted">Security deposit: € \' . number_format($securityDeposit, 2, \'.\', \',\') . \' (payable/refundable separately)</div>\';
$out .= \'        </div>\';

$out .= \'      </aside>\';
$out .= \'    </div>\';

$out .= \'  </div>\';
$out .= \'</div>\';

$out .= \'<script>
  document.addEventListener("DOMContentLoaded", function () {
      var needChauffeur = document.getElementById("need_chauffeur");
      var needSlLicense = document.getElementById("need_sl_license");
      var licenseSection = document.getElementById("licenseSection");
      var uploadSection = document.getElementById("uploadSection");
      var paymentOption = document.getElementById("payment_option");
      var bookingSubmitBtn = document.getElementById("bookingSubmitBtn");

      function toggleSections() {
          if (!needChauffeur || !licenseSection) return;

          if (needChauffeur.value === "no") {
              licenseSection.style.display = "block";
          } else {
              licenseSection.style.display = "none";
              if (needSlLicense) needSlLicense.value = "";
              if (uploadSection) uploadSection.style.display = "none";
          }
      }

      function toggleUploads() {
          if (!needSlLicense || !uploadSection) return;

          if (needSlLicense.value === "yes") {
              uploadSection.style.display = "block";
          } else {
              uploadSection.style.display = "none";
          }
      }

      function togglePaymentButton() {
          if (!paymentOption || !bookingSubmitBtn) return;

          if (paymentOption.value === "pay_on_arrival") {
              bookingSubmitBtn.textContent = "Make Reservation";
          } else {
              bookingSubmitBtn.textContent = "Continue to Payment";
          }
      }

      if (needChauffeur) {
          needChauffeur.addEventListener("change", toggleSections);
      }

      if (needSlLicense) {
          needSlLicense.addEventListener("change", toggleUploads);
      }

      if (paymentOption) {
          paymentOption.addEventListener("change", togglePaymentButton);
      }

      toggleSections();
      toggleUploads();
      togglePaymentButton();
  });
</script>\';

return $out;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => 'require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Read booking data from session
|--------------------------------------------------------------------------
*/
$sessionBooking  = $_SESSION[\'booking_step3\'] ?? [];
$sessionCoverage = $_SESSION[\'booking_step4\'] ?? [];

/*
|--------------------------------------------------------------------------
| If arriving from coverage page by POST, save selected coverage in session
|--------------------------------------------------------------------------
*/
if ($_SERVER[\'REQUEST_METHOD\'] === \'POST\') {
    $_SESSION[\'booking_step4\'] = [
        \'coverage_id\'        => trim($_POST[\'coverage_id\'] ?? \'\'),
        \'coverage_db_id\'     => (int)($_POST[\'coverage_db_id\'] ?? 0),
        \'coverage_name\'      => trim($_POST[\'coverage_name\'] ?? \'\'),
        \'coverage_day_price\' => (float)($_POST[\'coverage_day_price\'] ?? 0),
        \'coverage_total\'     => (float)($_POST[\'coverage_total\'] ?? 0),
    ];

    $sessionCoverage = $_SESSION[\'booking_step4\'];
}

/*
|--------------------------------------------------------------------------
| Use session values, not URL/query-string values
|--------------------------------------------------------------------------
*/
$vehicleId       = isset($sessionBooking[\'vehicle_id\']) ? (int)$sessionBooking[\'vehicle_id\'] : 0;
$carCode         = trim($sessionBooking[\'car_code\'] ?? \'\');
$pickupDateTime  = trim($sessionBooking[\'pickup_datetime\'] ?? \'\');
$dropoffDateTime = trim($sessionBooking[\'dropoff_datetime\'] ?? \'\');
$pickupLocation  = trim($sessionBooking[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($sessionBooking[\'dropoff_location\'] ?? \'\');
$days            = isset($sessionBooking[\'days\']) ? (int)$sessionBooking[\'days\'] : 0;

$rentalAmount    = isset($sessionBooking[\'rental_amount\']) ? (float)$sessionBooking[\'rental_amount\'] : 0;
$securityDeposit = isset($sessionBooking[\'security_deposit\']) ? (float)$sessionBooking[\'security_deposit\'] : 0;
$extrasTotal     = isset($sessionBooking[\'extras_total\']) ? (float)$sessionBooking[\'extras_total\'] : 0;
$grandTotal      = isset($sessionBooking[\'grand_total\']) ? (float)$sessionBooking[\'grand_total\'] : 0;
$selectedExtras  = isset($sessionBooking[\'extras\']) && is_array($sessionBooking[\'extras\'])
    ? $sessionBooking[\'extras\']
    : [];

$coverageId       = trim($sessionCoverage[\'coverage_id\'] ?? \'\');
$coverageDbId     = isset($sessionCoverage[\'coverage_db_id\']) ? (int)$sessionCoverage[\'coverage_db_id\'] : 0;
$coverageName     = trim($sessionCoverage[\'coverage_name\'] ?? \'No coverage\');
$coverageDayPrice = isset($sessionCoverage[\'coverage_day_price\']) ? (float)$sessionCoverage[\'coverage_day_price\'] : 0;
$coverageTotal    = isset($sessionCoverage[\'coverage_total\']) ? (float)$sessionCoverage[\'coverage_total\'] : 0;

if ($vehicleId <= 0 && $carCode === \'\') {
    return \'<p>Vehicle not selected.</p>\';
}

$pickupDate  = ($pickupDateTime && strtotime($pickupDateTime)) ? date(\'Y-m-d\', strtotime($pickupDateTime)) : \'\';
$dropoffDate = ($dropoffDateTime && strtotime($dropoffDateTime)) ? date(\'Y-m-d\', strtotime($dropoffDateTime)) : \'\';

if ($days <= 0 && $pickupDate && $dropoffDate) {
    $start = strtotime($pickupDate);
    $end   = strtotime($dropoffDate);
    if ($start && $end && $end >= $start) {
        $days = max(1, (int)(($end - $start) / 86400) + 1);
    }
}

$where = [];
$params = [];

if ($vehicleId > 0) {
    $where[] = "v.id = :vehicle_id";
    $params[\':vehicle_id\'] = $vehicleId;
} elseif ($carCode !== \'\') {
    $where[] = "v.car_code = :car_code";
    $params[\':car_code\'] = $carCode;
}

$sql = "SELECT
          v.id,
          v.image,
          v.car_model,
          v.car_category,
          v.car_code,
          v.pax_count,
          v.luggage_count,
          v.transmission_type,
          v.deposit_amount
        FROM vehicles v
        WHERE " . implode(\' AND \', $where) . "
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare driver details query.</p>\';

foreach ($params as $key => $value) {
    if ($key === \':vehicle_id\') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return \'<p>Could not load vehicle: \' . htmlspecialchars($error[2], ENT_QUOTES, \'UTF-8\') . \'</p>\';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return \'<p>Vehicle not found.</p>\';

$pickupText  = $pickupDateTime && strtotime($pickupDateTime) ? date(\'d M Y, H:i\', strtotime($pickupDateTime)) : \'\';
$dropoffText = $dropoffDateTime && strtotime($dropoffDateTime) ? date(\'d M Y, H:i\', strtotime($dropoffDateTime)) : \'\';

if ($securityDeposit <= 0 && isset($row[\'deposit_amount\']) && $row[\'deposit_amount\'] !== \'\') {
    $securityDeposit = (float)$row[\'deposit_amount\'];
}

$totalForTrip = $grandTotal > 0
    ? ($grandTotal + $coverageTotal)
    : ($rentalAmount + $extrasTotal + $coverageTotal);

$paymentPageId = 44; // change to your payment page resource id
$formAction = html_entity_decode($modx->makeUrl($paymentPageId), ENT_QUOTES, \'UTF-8\');

$out = \'\';

$out .= \'<div class="driverStepLayout">\';
$out .= \'  <div class="row">\';

$out .= \'    <div class="col-lg-8">\';
$out .= \'      <div class="driverStepMain">\';

$out .= \'        <div class="driverStepHeading mb-4">\';
$out .= \'          <h2 class="driverStepHeading__title">Enter driver details</h2>\';
$out .= \'        </div>\';

$out .= \'        <form action="\' . htmlspecialchars($formAction, ENT_QUOTES, \'UTF-8\') . \'" method="post" enctype="multipart/form-data" class="driverForm" id="driverDetailsForm">\';

$out .= \'          <div class="row">\';

$out .= \'            <div class="col-md-6 mb-0">\';
$out .= \'              <label class="driverForm__label">Full Name</label>\';
$out .= \'              <input type="text" name="full_name" class="form-control driverForm__control" placeholder="Full name" required>\';
$out .= \'              <small class="text-muted">Can only contain letters A-Z.</small>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Email</label>\';
$out .= \'              <input type="email" name="email" class="form-control driverForm__control" placeholder="Email" required>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Whatsapp Number</label>\';
$out .= \'              <input type="text" name="whatsapp_number" class="form-control driverForm__control" placeholder="Whatsapp Number" required>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-0">\';
$out .= \'              <label class="driverForm__label">Country of residence</label>\';
$out .= \'              <input type="text" name="country_of_residence" class="form-control driverForm__control" placeholder="Country of residence" required>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Number of passengers</label>\';
$out .= \'              <input type="number" name="passengers" class="form-control driverForm__control" placeholder="Passenger Count" required>\';
$out .= \'            </div>\';

$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Flight number <span class="text-muted">optional</span></label>\';
$out .= \'                <input type="text" name="flight_number" class="form-control driverForm__control" placeholder="AA123">\';
$out .= \'              </div>\';
$out .= \'          </div>\';

$out .= \'              <hr>\';


$out .= \'          <div class="driverFormSection mt-4">\';
$out .= \'            <h3 class="driverFormSection__title">Driver options</h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Do you need a chauffeur?</label>\';
$out .= \'                <select name="need_chauffeur" id="need_chauffeur" class="form-control driverForm__control" required>\';
$out .= \'                  <option value="">Select</option>\';
$out .= \'                  <option value="yes">Yes</option>\';
$out .= \'                  <option value="no">No</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';

$out .= \'          <div class="driverFormSection mt-4" id="licenseSection" style="display:none;">\';
$out .= \'            <h3 class="driverFormSection__title">License and documents</h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Do you need a Sri Lankan driver’s license?</label>\';
$out .= \'                <select name="need_sl_license" id="need_sl_license" class="form-control driverForm__control">\';
$out .= \'                  <option value="">Select</option>\';
$out .= \'                  <option value="yes">Yes</option>\';
$out .= \'                  <option value="no">No</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';

$out .= \'            <div id="uploadSection" style="display:none;">\';
$out .= \'              <div class="row">\';
$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">Passport image</label>\';
$out .= \'                  <input type="file" name="passport_image" class="form-control driverForm__control" accept="image/*,.pdf">\';
$out .= \'                </div>\';

$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">IDP image</label>\';
$out .= \'                  <input type="file" name="idp_image" class="form-control driverForm__control" accept="image/*,.pdf">\';
$out .= \'                </div>\';

$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">Color photo of applicant</label>\';
$out .= \'                  <input type="file" name="applicant_photo" class="form-control driverForm__control" accept="image/*">\';
$out .= \'                </div>\';

$out .= \'                <div class="col-md-12 mb-3">\';
$out .= \'                  <label class="driverForm__label">Remarks</label>\';
$out .= \'                  <textarea name="remarks" class="form-control driverForm__control" rows="4" placeholder="Remarks"></textarea>\';
$out .= \'                </div>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';

$out .= \'          <input type="hidden" name="vehicle_id" value="\' . (int)$vehicleId . \'">\';
$out .= \'          <input type="hidden" name="car_code" value="\' . htmlspecialchars($carCode, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="pickup_datetime" value="\' . htmlspecialchars($pickupDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="dropoff_datetime" value="\' . htmlspecialchars($dropoffDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="pickup_location" value="\' . htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="dropoff_location" value="\' . htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="days" value="\' . (int)$days . \'">\';
$out .= \'          <input type="hidden" name="coverage_id" value="\' . htmlspecialchars($coverageId, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_db_id" value="\' . (int)$coverageDbId . \'">\';
$out .= \'          <input type="hidden" name="coverage_name" value="\' . htmlspecialchars($coverageName, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_day_price" value="\' . number_format($coverageDayPrice, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_total" value="\' . number_format($coverageTotal, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="rental_amount" value="\' . number_format($rentalAmount, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="security_deposit" value="\' . number_format($securityDeposit, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="extras_total" value="\' . number_format($extrasTotal, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="grand_total" value="\' . number_format($totalForTrip, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="extras" value="\' . htmlspecialchars(json_encode($selectedExtras), ENT_QUOTES, \'UTF-8\') . \'">\';

$out .= \'              <hr>\';


$out .= \'          <div class="driverFormSection mt-4">\';
$out .= \'            <h3 class="driverFormSection__title">Payment option</h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">How would you like to pay?</label>\';
$out .= \'                <select name="payment_option" id="payment_option" class="form-control driverForm__control" required>\';
$out .= \'                  <option value="">Select payment option</option>\';
$out .= \'                  <option value="pay_now">Pay now</option>\';
$out .= \'                  <option value="pay_on_arrival">Pay on arrival</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';

$out .= \'          <div class="mt-4 d-flex justify-content-end">\';
$out .= \'            <button type="submit" id="bookingSubmitBtn" class="btn btn-primary bookingSubmitBtn">Continue to Payment</button>\';
$out .= \'          </div>\';

$out .= \'        </form>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="col-lg-4">\';
$out .= \'      <aside class="driverSummaryCard">\';
$out .= \'        <div class="driverSummaryCard__vehicle mb-4">\';
$out .= \'          <div class="driverSummaryCard__dates">\';
$out .=                htmlspecialchars(($pickupText ? $pickupText : $pickupDate) . ($dropoffText ? \' - \' . $dropoffText : \'\'));
$out .= \'          </div>\';
$out .= \'          <div class="driverSummaryCard__car d-flex align-items-center justify-content-between">\';
$out .= \'            <div>\';
$out .= \'              <h4 class="driverSummaryCard__carTitle mb-1">\' . htmlspecialchars($row[\'car_model\']) . \'</h4>\';
$out .= \'              <div class="text-muted">or similar \' . htmlspecialchars($row[\'car_category\']) . \'</div>\';
$out .= \'            </div>\';
$out .= \'            <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="driverSummaryCard__image">\';
$out .= \'          </div>\';
$out .= \'        </div>\';

$out .= \'        <div class="driverSummaryCard__block mb-3">\';
$out .= \'          <h5 class="driverSummaryCard__blockTitle">Trip details</h5>\';
$out .= \'          <div class="driverSummaryRow"><span>Pick-up</span><strong>\' . htmlspecialchars($pickupLocation !== \'\' ? $pickupLocation : \'-\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Drop-off</span><strong>\' . htmlspecialchars($dropoffLocation !== \'\' ? $dropoffLocation : \'-\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Rental period</span><strong>\' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Coverage</span><strong>\' . htmlspecialchars($coverageName !== \'\' ? $coverageName : \'No coverage\') . \'</strong></div>\';
$out .= \'        </div>\';

if (!empty($selectedExtras)) {
    $out .= \'        <div class="driverSummaryCard__block mb-3">\';
    $out .= \'          <h5 class="driverSummaryCard__blockTitle">Selected extras</h5>\';
    foreach ($selectedExtras as $extra) {
        $extraName  = htmlspecialchars($extra[\'name\'] ?? \'\', ENT_QUOTES, \'UTF-8\');
        $extraQty   = (int)($extra[\'qty\'] ?? 1);
        $extraValue = isset($extra[\'total\']) ? (float)$extra[\'total\'] : 0;
        $out .= \'    <div class="driverSummaryRow"><span>\' . $extraName . \' × \' . $extraQty . \'</span><strong>€\' . number_format($extraValue, 2, \'.\', \'\') . \'</strong></div>\';
    }
    $out .= \'        </div>\';
}

$out .= \'        <div class="driverSummaryCard__block mb-3">\';
$out .= \'          <h5 class="driverSummaryCard__blockTitle">Price summary</h5>\';
$out .= \'          <div class="driverSummaryRow"><span>Coverage price</span><strong>€ \' . number_format($coverageTotal, 2, \'.\', \',\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Extras price</span><strong>€ \' . number_format($extrasTotal, 2, \'.\', \',\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Rental amount</span><strong>€ \' . number_format($rentalAmount, 2, \'.\', \',\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow driverSummaryRow--total">\';
$out .= \'              <span>Total for \' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</span>\';
$out .= \'              <strong class="driverSummaryTotalPrice">€ \' . number_format($totalForTrip, 2, \'.\', \',\') . \'</strong>\';
$out .= \'          </div>\';
$out .= \'          <div class="driverSummaryMuted">Security deposit: € \' . number_format($securityDeposit, 2, \'.\', \',\') . \' (payable/refundable separately)</div>\';
$out .= \'        </div>\';

$out .= \'      </aside>\';
$out .= \'    </div>\';

$out .= \'  </div>\';
$out .= \'</div>\';

$out .= \'<script>
  document.addEventListener("DOMContentLoaded", function () {
      var needChauffeur = document.getElementById("need_chauffeur");
      var needSlLicense = document.getElementById("need_sl_license");
      var licenseSection = document.getElementById("licenseSection");
      var uploadSection = document.getElementById("uploadSection");
      var paymentOption = document.getElementById("payment_option");
      var bookingSubmitBtn = document.getElementById("bookingSubmitBtn");

      function toggleSections() {
          if (!needChauffeur || !licenseSection) return;

          if (needChauffeur.value === "no") {
              licenseSection.style.display = "block";
          } else {
              licenseSection.style.display = "none";
              if (needSlLicense) needSlLicense.value = "";
              if (uploadSection) uploadSection.style.display = "none";
          }
      }

      function toggleUploads() {
          if (!needSlLicense || !uploadSection) return;

          if (needSlLicense.value === "yes") {
              uploadSection.style.display = "block";
          } else {
              uploadSection.style.display = "none";
          }
      }

      function togglePaymentButton() {
          if (!paymentOption || !bookingSubmitBtn) return;

          if (paymentOption.value === "pay_on_arrival") {
              bookingSubmitBtn.textContent = "Make Reservation";
          } else {
              bookingSubmitBtn.textContent = "Continue to Payment";
          }
      }

      if (needChauffeur) {
          needChauffeur.addEventListener("change", toggleSections);
      }

      if (needSlLicense) {
          needSlLicense.addEventListener("change", toggleUploads);
      }

      if (paymentOption) {
          paymentOption.addEventListener("change", togglePaymentButton);
      }

      toggleSections();
      toggleUploads();
      togglePaymentButton();
  });
</script>\';

return $out;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);