<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 43,
    'type' => 'document',
    'pagetitle' => 'coverage-details',
    'longtitle' => '',
    'description' => '',
    'alias' => 'coverage-details',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '

<section class="hero-wrap hero-wrap-2" 
    style="background-image: url(\'assets/images/booking-bg.jpg\'); height: 36rem;" 
    data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 36rem;">
			<div class="col-md-9 ftco-animate text-center mb-4">
			  <h1 class="mb-2 bread">Manage Booking</h1>
			   <p class="breadcrumbs" style="padding-bottom: 20px;">
          <span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span>
          <span class="mr-2"><a href="javascript:history.back()">Step 2 <i class="ion-ios-arrow-forward"></i></a></span>
          <span>Coverage<i class="ion-ios-arrow-forward"></i></span>
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

      <div class="bookingSteps__item bookingSteps__item--active">
        <span class="bookingSteps__num">3</span>
        <span class="bookingSteps__text">Coverage</span>
      </div>

      <div class="bookingSteps__line"></div>

      <div class="bookingSteps__item">
        <span class="bookingSteps__num">4</span>
        <span class="bookingSteps__text">Driver details</span>
      </div>
    </div>

    [[!VehicleCoverageStep3]]

  </div>
</section>',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 41,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1773656938,
    'editedby' => 1,
    'editedon' => 1773662488,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1773656940,
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
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

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
  <script src="assets/js/jquery.timepicker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/aos.js"></script>


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
			  <h1 class="mb-2 bread">Manage Booking</h1>
			   <p class="breadcrumbs" style="padding-bottom: 20px;">
          <span class="mr-2"><a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a></span>
          <span class="mr-2"><a href="javascript:history.back()">Step 2 <i class="ion-ios-arrow-forward"></i></a></span>
          <span>Coverage<i class="ion-ios-arrow-forward"></i></span>
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

      <div class="bookingSteps__item bookingSteps__item--active">
        <span class="bookingSteps__num">3</span>
        <span class="bookingSteps__text">Coverage</span>
      </div>

      <div class="bookingSteps__line"></div>

      <div class="bookingSteps__item">
        <span class="bookingSteps__num">4</span>
        <span class="bookingSteps__text">Driver details</span>
      </div>
    </div>

    [[!VehicleCoverageStep3]]

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


  
  <script type="text/javascript">
  $(document).ready(function(){
    $(\'.slider\').slick({
      slidesToShow: 5,  // Number of slides to show at a time
      slidesToScroll: 1, // Number of slides to scroll at a time
      autoplay: true,   // Enable auto play
      autoplaySpeed: 1000, // Speed of auto play in milliseconds
      arrows: true,     // Show navigation arrows
      dots: true,       // Show navigation dots
      responsive: [
        {
          breakpoint: 1024, // Breakpoint for responsive design
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  </script>
  
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
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  function selectImage(index) {
    // Get the carousel element
    var carousel = $(\'#imageCarousel\');
    
    // Go to the selected image based on the index
    carousel.carousel(\'to\', index);
  }
  
  
  </script>
  
  <script>
  
   $(\'#myCarousel\').carousel({
      interval: 1000,
   })
  </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
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
  $(document).ready(function() {
      $(".gallery").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
              tError: \'<a href="%url%">The image #%curr%</a> could not be loaded.\'
          }
      });
  });



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
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

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
  <script src="assets/js/jquery.timepicker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/aos.js"></script>


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


  
  <script type="text/javascript">
  $(document).ready(function(){
    $(\'.slider\').slick({
      slidesToShow: 5,  // Number of slides to show at a time
      slidesToScroll: 1, // Number of slides to scroll at a time
      autoplay: true,   // Enable auto play
      autoplaySpeed: 1000, // Speed of auto play in milliseconds
      arrows: true,     // Show navigation arrows
      dots: true,       // Show navigation dots
      responsive: [
        {
          breakpoint: 1024, // Breakpoint for responsive design
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  </script>
  
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
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  function selectImage(index) {
    // Get the carousel element
    var carousel = $(\'#imageCarousel\');
    
    // Go to the selected image based on the index
    carousel.carousel(\'to\', index);
  }
  
  
  </script>
  
  <script>
  
   $(\'#myCarousel\').carousel({
      interval: 1000,
   })
  </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
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
  $(document).ready(function() {
      $(".gallery").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
              tError: \'<a href="%url%">The image #%curr%</a> could not be loaded.\'
          }
      });
  });



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
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

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
  <script src="assets/js/jquery.timepicker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/aos.js"></script>


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
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

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
  <script src="assets/js/jquery.timepicker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/aos.js"></script>


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


  
  <script type="text/javascript">
  $(document).ready(function(){
    $(\'.slider\').slick({
      slidesToShow: 5,  // Number of slides to show at a time
      slidesToScroll: 1, // Number of slides to scroll at a time
      autoplay: true,   // Enable auto play
      autoplaySpeed: 1000, // Speed of auto play in milliseconds
      arrows: true,     // Show navigation arrows
      dots: true,       // Show navigation dots
      responsive: [
        {
          breakpoint: 1024, // Breakpoint for responsive design
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  </script>
  
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
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  function selectImage(index) {
    // Get the carousel element
    var carousel = $(\'#imageCarousel\');
    
    // Go to the selected image based on the index
    carousel.carousel(\'to\', index);
  }
  
  
  </script>
  
  <script>
  
   $(\'#myCarousel\').carousel({
      interval: 1000,
   })
  </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
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
  $(document).ready(function() {
      $(".gallery").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
              tError: \'<a href="%url%">The image #%curr%</a> could not be loaded.\'
          }
      });
  });



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


  
  <script type="text/javascript">
  $(document).ready(function(){
    $(\'.slider\').slick({
      slidesToShow: 5,  // Number of slides to show at a time
      slidesToScroll: 1, // Number of slides to scroll at a time
      autoplay: true,   // Enable auto play
      autoplaySpeed: 1000, // Speed of auto play in milliseconds
      arrows: true,     // Show navigation arrows
      dots: true,       // Show navigation dots
      responsive: [
        {
          breakpoint: 1024, // Breakpoint for responsive design
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  </script>
  
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
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  function selectImage(index) {
    // Get the carousel element
    var carousel = $(\'#imageCarousel\');
    
    // Go to the selected image based on the index
    carousel.carousel(\'to\', index);
  }
  
  
  </script>
  
  <script>
  
   $(\'#myCarousel\').carousel({
      interval: 1000,
   })
  </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
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
  $(document).ready(function() {
      $(".gallery").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
              tError: \'<a href="%url%">The image #%curr%</a> could not be loaded.\'
          }
      });
  });



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
      'VehicleCoverageStep3' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'VehicleCoverageStep3',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => 'require "assets/includes/db_connect.php";

$vehicleId       = isset($_POST[\'vehicle_id\']) ? (int)$_POST[\'vehicle_id\'] : 0;
$carCode         = isset($_POST[\'car_code\']) ? trim($_POST[\'car_code\']) : \'\';
$pickupDateTime  = isset($_POST[\'pickup_datetime\']) ? trim($_POST[\'pickup_datetime\']) : \'\';
$dropoffDateTime = isset($_POST[\'dropoff_datetime\']) ? trim($_POST[\'dropoff_datetime\']) : \'\';
$pickupLocation  = isset($_POST[\'pickup_location\']) ? trim($_POST[\'pickup_location\']) : \'\';
$dropoffLocation = isset($_POST[\'dropoff_location\']) ? trim($_POST[\'dropoff_location\']) : \'\';
$days            = isset($_POST[\'days\']) ? (int)$_POST[\'days\'] : 0;

$rentalAmount    = isset($_POST[\'rental_amount\']) ? (float)$_POST[\'rental_amount\'] : 0;
$securityDeposit = isset($_POST[\'security_deposit\']) ? (float)$_POST[\'security_deposit\'] : 0;
$extrasTotal     = isset($_POST[\'extras_total\']) ? (float)$_POST[\'extras_total\'] : 0;
$grandTotal      = isset($_POST[\'grand_total\']) ? (float)$_POST[\'grand_total\'] : 0;

$selectedExtras = [];
if (!empty($_POST[\'extras\'])) {
    $decoded = json_decode($_POST[\'extras\'], true);
    if (is_array($decoded)) {
        $selectedExtras = $decoded;
    }
}

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
if (!$stmt) return \'<p>Could not prepare coverage query.</p>\';

foreach ($params as $key => $value) {
    if ($key === \':vehicle_id\') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return \'<p>Could not load vehicle: \' . htmlspecialchars($error[2]) . \'</p>\';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return \'<p>Vehicle not found.</p>\';

if (!function_exists(\'step3CalculatePrice\')) {
    function step3CalculatePrice($modx, $carCode, $pickupDate, $dropoffDate) {
        if (!$carCode || !$pickupDate || !$dropoffDate) return \'\';

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);
        if (!$start || !$end || $end < $start) return \'\';

        $days = max(1, (int)(($end - $start) / 86400) + 1);

        $sql = "SELECT duration, rate
                FROM car_rental3
                WHERE car_code = :car_code
                  AND :pickup_date >= DATE(start_date)
                  AND :dropoff_date <= DATE(end_date)
                ORDER BY duration ASC";

        $stmt = $modx->prepare($sql);
        if (!$stmt) return \'\';

        $stmt->bindValue(\':car_code\', $carCode, PDO::PARAM_STR);
        $stmt->bindValue(\':pickup_date\', $pickupDate, PDO::PARAM_STR);
        $stmt->bindValue(\':dropoff_date\', $dropoffDate, PDO::PARAM_STR);

        if (!$stmt->execute()) return \'\';

        $rates = [];
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
            $duration = (int)$r[\'duration\'];
            $rate = (float)$r[\'rate\'];
            if ($duration > 0) $rates[$duration] = $rate;
        }

        if (!$rates) return \'\';

        $maxDuration = max(array_keys($rates));
        $remaining = $days;
        $total = 0;

        while ($remaining > 0) {
            $chunk = min($remaining, $maxDuration);

            if (isset($rates[$chunk])) {
                $total += $rates[$chunk];
                $remaining -= $chunk;
                continue;
            }

            $found = false;
            for ($d = $chunk; $d >= 1; $d--) {
                if (isset($rates[$d])) {
                    $total += $rates[$d];
                    $remaining -= $d;
                    $found = true;
                    break;
                }
            }

            if (!$found) return \'\';
        }

        return (float)number_format($total, 2, \'.\', \'\');
    }
}

$baseRental = step3CalculatePrice($modx, $row[\'car_code\'], $pickupDate, $dropoffDate);
$baseRental = $baseRental !== \'\' ? (float)$baseRental : 0;

$coveragePackages = [
    [
        \'id\' => \'risk\',
        \'title\' => \'Without Full Coverage\',
        \'subtitle\' => \'If there’s damage or theft, the rental company will charge you for the items not covered.\',
        \'price_per_day\' => 0,
        \'period_total\' => 0,
        \'button\' => "No, I’ll take the risk",
        \'theme\' => \'risk\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\',
            \'Administrative fees related to the damage\',
            \'No drivers covered\'
        ]
    ],
    [
        \'id\' => \'basic\',
        \'title\' => \'Basic Coverage\',
        \'subtitle\' => \'A light extra protection option for essential incidents.\',
        \'price_per_day\' => 3.90,
        \'period_total\' => 3.90 * $days,
        \'button\' => \'Choose Basic\',
        \'theme\' => \'basic\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Roadside assistance\',
            \'Lost keys and lockout fees\'
        ]
    ],
    [
        \'id\' => \'standard\',
        \'title\' => \'Standard Coverage\',
        \'subtitle\' => \'Popular choice for broader protection during your rental.\',
        \'price_per_day\' => 5.40,
        \'period_total\' => 5.40 * $days,
        \'button\' => \'Choose Standard\',
        \'theme\' => \'standard\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\'
        ]
    ],
    [
        \'id\' => \'premium\',
        \'title\' => \'Premium Coverage\',
        \'subtitle\' => \'Extra peace of mind with strong reimbursement protection.\',
        \'price_per_day\' => 6.60,
        \'period_total\' => 6.60 * $days,
        \'button\' => \'Choose Premium\',
        \'theme\' => \'premium\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\'
        ]
    ],
    [
        \'id\' => \'full\',
        \'title\' => \'Full Coverage\',
        \'subtitle\' => \'We reimburse eligible charges for damage, theft and related fees.\',
        \'price_per_day\' => 7.84,
        \'period_total\' => 7.84 * $days,
        \'button\' => \'Book with coverage\',
        \'theme\' => \'full\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\',
            \'Administrative fees related to the damage\',
            \'All drivers covered\'
        ]
    ]
];

$step4BaseParams = [
    \'vehicle_id\'       => $vehicleId,
    \'car_code\'         => $carCode,
    \'pickup_datetime\'  => $pickupDateTime,
    \'dropoff_datetime\' => $dropoffDateTime,
    \'pickup_location\'  => $pickupLocation,
    \'dropoff_location\' => $dropoffLocation,
    \'days\'             => $days
];

$out = \'\';
$out .= \'<div class="coveragePage">\';

$out .= \'  <div class="coveragePage__header">\';
$out .= \'    <h2 class="coveragePage__title">Upgrade to Full Coverage and relax...</h2>\';
$out .= \'    <p class="coveragePage__subtitle">Choose the protection package that suits your trip.</p>\';
$out .= \'  </div>\';

$out .= \'  <div class="coverageHeroSummary">\';
$out .= \'    <div class="coverageHeroSummary__vehicle">\';
$out .= \'      <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="coverageHeroSummary__image">\';
$out .= \'      <div class="coverageHeroSummary__info">\';
$out .= \'        <h3 class="coverageHeroSummary__name">\' . htmlspecialchars($row[\'car_model\']) . \'</h3>\';
$out .= \'        <div class="coverageHeroSummary__meta">\' . htmlspecialchars($row[\'transmission_type\'] ?: \'Manual\') . \' • \' . (int)$row[\'pax_count\'] . \' seats • \' . (int)$row[\'luggage_count\'] . \' luggage • \' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</div>\';

if (!empty($selectedExtras)) {
    $out .= \'        <div class="coverageHeroSummary__extras">\';
    $out .= \'          <div class="coverageHeroSummary__extrasTitle">Selected extras</div>\';
    $out .= \'          <ul class="coverageHeroSummary__extrasList">\';
    foreach ($selectedExtras as $extra) {
        $extraName = htmlspecialchars($extra[\'name\'] ?? \'\');
        $extraQty = (int)($extra[\'qty\'] ?? 1);
        $extraTotal = isset($extra[\'total\']) ? (float)$extra[\'total\'] : 0;
        $out .= \'            <li>\';
        $out .= \'              <span>\' . $extraName . \' × \' . $extraQty . \'</span>\';
        $out .= \'              <strong>€\' . number_format($extraTotal, 2, \'.\', \'\') . \'</strong>\';
        $out .= \'            </li>\';
    }
    $out .= \'          </ul>\';
    $out .= \'        </div>\';
}

$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="coverageHeroSummary__amount">\';
$out .= \'      <span>Base rental</span>\';
$out .= \'      <strong>€\' . number_format($baseRental, 2, \'.\', \'\') . \'</strong>\';

if ($extrasTotal > 0) {
    $out .= \'      <span class="coverageHeroSummary__amountSub">Extras: €\' . number_format($extrasTotal, 2, \'.\', \'\') . \'</span>\';
}
if ($grandTotal > 0) {
    $out .= \'      <span class="coverageHeroSummary__amountSub coverageHeroSummary__amountSub--total">Current total: €\' . number_format($grandTotal, 2, \'.\', \'\') . \'</span>\';
}

$out .= \'    </div>\';
$out .= \'  </div>\';

$out .= \'  <div class="coverageGrid">\';

foreach ($coveragePackages as $pkg) {
    $step4Link = $modx->makeUrl(42, \'\', array_merge($step4BaseParams, [
        \'coverage_id\' => $pkg[\'id\'],
        \'coverage_name\' => $pkg[\'title\'],
        \'coverage_day_price\' => number_format((float)$pkg[\'price_per_day\'], 2, \'.\', \'\'),
        \'coverage_total\' => number_format((float)$pkg[\'period_total\'], 2, \'.\', \'\')
    ]));

    $themeClass = \'coverageCard--\' . $pkg[\'theme\'];
    $pricePerDay = (float)$pkg[\'price_per_day\'];
    $periodTotal = (float)$pkg[\'period_total\'];

    $out .= \'<div class="coverageCard \' . $themeClass . \'">\';

    $out .= \'  <div class="coverageCard__top">\';
    $out .= \'    <div class="coverageCard__intro">\';
    $out .= \'      <h3 class="coverageCard__title">\' . htmlspecialchars($pkg[\'title\']) . \'</h3>\';
    $out .= \'      <p class="coverageCard__desc">\' . htmlspecialchars($pkg[\'subtitle\']) . \'</p>\';
    $out .= \'    </div>\';
    $out .= \'    <div class="coverageCard__imageWrap">\';
    $out .= \'      <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="coverageCard__image">\';
    $out .= \'    </div>\';
    $out .= \'  </div>\';

    $out .= \'  <div class="coverageCard__priceBox">\';
    if ($pricePerDay > 0) {
        $out .= \'    <div class="coverageCard__price">\';
        $out .= \'      <strong>€\' . number_format($pricePerDay, 2, \'.\', \'\') . \'/day</strong>\';
        $out .= \'      <span>€\' . number_format($periodTotal, 2, \'.\', \'\') . \' for rental period</span>\';
        $out .= \'    </div>\';
    } else {
        $out .= \'    <div class="coverageCard__price">\';
        $out .= \'      <strong>Included</strong>\';
        $out .= \'      <span>No additional protection selected</span>\';
        $out .= \'    </div>\';
    }
    $out .= \'    <a href="\' . htmlspecialchars($step4Link) . \'" class="coverageCard__btn">\' . htmlspecialchars($pkg[\'button\']) . \'</a>\';
    $out .= \'  </div>\';

    $out .= \'  <div class="coverageCard__features">\';
    $out .= \'    <h4>\' . ($pkg[\'id\'] === \'risk\' ? \'Not covered\' : "What\\\'s covered?") . \'</h4>\';
    $out .= \'    <ul>\';
    foreach ($pkg[\'items\'] as $item) {
        $out .= \'<li>\' . htmlspecialchars($item) . \'</li>\';
    }
    $out .= \'    </ul>\';
    $out .= \'  </div>\';

    if ($pkg[\'id\'] === \'full\') {
        $out .= \'  <div class="coverageCard__footer coverageCard__footer--success">\';
        $out .= \'    Cancel anytime before pick-up!\';
        $out .= \'  </div>\';
    } elseif ($pkg[\'id\'] === \'risk\') {
        $out .= \'  <div class="coverageCard__footer coverageCard__footer--warning">\';
        $out .= \'    You may be charged directly by the supplier if something happens.\';
        $out .= \'  </div>\';
    }

    $out .= \'</div>\';
}

$out .= \'  </div>\';
$out .= \'</div>\';

return $out;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => 'require "assets/includes/db_connect.php";

$vehicleId       = isset($_POST[\'vehicle_id\']) ? (int)$_POST[\'vehicle_id\'] : 0;
$carCode         = isset($_POST[\'car_code\']) ? trim($_POST[\'car_code\']) : \'\';
$pickupDateTime  = isset($_POST[\'pickup_datetime\']) ? trim($_POST[\'pickup_datetime\']) : \'\';
$dropoffDateTime = isset($_POST[\'dropoff_datetime\']) ? trim($_POST[\'dropoff_datetime\']) : \'\';
$pickupLocation  = isset($_POST[\'pickup_location\']) ? trim($_POST[\'pickup_location\']) : \'\';
$dropoffLocation = isset($_POST[\'dropoff_location\']) ? trim($_POST[\'dropoff_location\']) : \'\';
$days            = isset($_POST[\'days\']) ? (int)$_POST[\'days\'] : 0;

$rentalAmount    = isset($_POST[\'rental_amount\']) ? (float)$_POST[\'rental_amount\'] : 0;
$securityDeposit = isset($_POST[\'security_deposit\']) ? (float)$_POST[\'security_deposit\'] : 0;
$extrasTotal     = isset($_POST[\'extras_total\']) ? (float)$_POST[\'extras_total\'] : 0;
$grandTotal      = isset($_POST[\'grand_total\']) ? (float)$_POST[\'grand_total\'] : 0;

$selectedExtras = [];
if (!empty($_POST[\'extras\'])) {
    $decoded = json_decode($_POST[\'extras\'], true);
    if (is_array($decoded)) {
        $selectedExtras = $decoded;
    }
}

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
if (!$stmt) return \'<p>Could not prepare coverage query.</p>\';

foreach ($params as $key => $value) {
    if ($key === \':vehicle_id\') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return \'<p>Could not load vehicle: \' . htmlspecialchars($error[2]) . \'</p>\';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return \'<p>Vehicle not found.</p>\';

if (!function_exists(\'step3CalculatePrice\')) {
    function step3CalculatePrice($modx, $carCode, $pickupDate, $dropoffDate) {
        if (!$carCode || !$pickupDate || !$dropoffDate) return \'\';

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);
        if (!$start || !$end || $end < $start) return \'\';

        $days = max(1, (int)(($end - $start) / 86400) + 1);

        $sql = "SELECT duration, rate
                FROM car_rental3
                WHERE car_code = :car_code
                  AND :pickup_date >= DATE(start_date)
                  AND :dropoff_date <= DATE(end_date)
                ORDER BY duration ASC";

        $stmt = $modx->prepare($sql);
        if (!$stmt) return \'\';

        $stmt->bindValue(\':car_code\', $carCode, PDO::PARAM_STR);
        $stmt->bindValue(\':pickup_date\', $pickupDate, PDO::PARAM_STR);
        $stmt->bindValue(\':dropoff_date\', $dropoffDate, PDO::PARAM_STR);

        if (!$stmt->execute()) return \'\';

        $rates = [];
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
            $duration = (int)$r[\'duration\'];
            $rate = (float)$r[\'rate\'];
            if ($duration > 0) $rates[$duration] = $rate;
        }

        if (!$rates) return \'\';

        $maxDuration = max(array_keys($rates));
        $remaining = $days;
        $total = 0;

        while ($remaining > 0) {
            $chunk = min($remaining, $maxDuration);

            if (isset($rates[$chunk])) {
                $total += $rates[$chunk];
                $remaining -= $chunk;
                continue;
            }

            $found = false;
            for ($d = $chunk; $d >= 1; $d--) {
                if (isset($rates[$d])) {
                    $total += $rates[$d];
                    $remaining -= $d;
                    $found = true;
                    break;
                }
            }

            if (!$found) return \'\';
        }

        return (float)number_format($total, 2, \'.\', \'\');
    }
}

$baseRental = step3CalculatePrice($modx, $row[\'car_code\'], $pickupDate, $dropoffDate);
$baseRental = $baseRental !== \'\' ? (float)$baseRental : 0;

$coveragePackages = [
    [
        \'id\' => \'risk\',
        \'title\' => \'Without Full Coverage\',
        \'subtitle\' => \'If there’s damage or theft, the rental company will charge you for the items not covered.\',
        \'price_per_day\' => 0,
        \'period_total\' => 0,
        \'button\' => "No, I’ll take the risk",
        \'theme\' => \'risk\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\',
            \'Administrative fees related to the damage\',
            \'No drivers covered\'
        ]
    ],
    [
        \'id\' => \'basic\',
        \'title\' => \'Basic Coverage\',
        \'subtitle\' => \'A light extra protection option for essential incidents.\',
        \'price_per_day\' => 3.90,
        \'period_total\' => 3.90 * $days,
        \'button\' => \'Choose Basic\',
        \'theme\' => \'basic\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Roadside assistance\',
            \'Lost keys and lockout fees\'
        ]
    ],
    [
        \'id\' => \'standard\',
        \'title\' => \'Standard Coverage\',
        \'subtitle\' => \'Popular choice for broader protection during your rental.\',
        \'price_per_day\' => 5.40,
        \'period_total\' => 5.40 * $days,
        \'button\' => \'Choose Standard\',
        \'theme\' => \'standard\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\'
        ]
    ],
    [
        \'id\' => \'premium\',
        \'title\' => \'Premium Coverage\',
        \'subtitle\' => \'Extra peace of mind with strong reimbursement protection.\',
        \'price_per_day\' => 6.60,
        \'period_total\' => 6.60 * $days,
        \'button\' => \'Choose Premium\',
        \'theme\' => \'premium\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\'
        ]
    ],
    [
        \'id\' => \'full\',
        \'title\' => \'Full Coverage\',
        \'subtitle\' => \'We reimburse eligible charges for damage, theft and related fees.\',
        \'price_per_day\' => 7.84,
        \'period_total\' => 7.84 * $days,
        \'button\' => \'Book with coverage\',
        \'theme\' => \'full\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\',
            \'Administrative fees related to the damage\',
            \'All drivers covered\'
        ]
    ]
];

$step4BaseParams = [
    \'vehicle_id\'       => $vehicleId,
    \'car_code\'         => $carCode,
    \'pickup_datetime\'  => $pickupDateTime,
    \'dropoff_datetime\' => $dropoffDateTime,
    \'pickup_location\'  => $pickupLocation,
    \'dropoff_location\' => $dropoffLocation,
    \'days\'             => $days
];

$out = \'\';
$out .= \'<div class="coveragePage">\';

$out .= \'  <div class="coveragePage__header">\';
$out .= \'    <h2 class="coveragePage__title">Upgrade to Full Coverage and relax...</h2>\';
$out .= \'    <p class="coveragePage__subtitle">Choose the protection package that suits your trip.</p>\';
$out .= \'  </div>\';

$out .= \'  <div class="coverageHeroSummary">\';
$out .= \'    <div class="coverageHeroSummary__vehicle">\';
$out .= \'      <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="coverageHeroSummary__image">\';
$out .= \'      <div class="coverageHeroSummary__info">\';
$out .= \'        <h3 class="coverageHeroSummary__name">\' . htmlspecialchars($row[\'car_model\']) . \'</h3>\';
$out .= \'        <div class="coverageHeroSummary__meta">\' . htmlspecialchars($row[\'transmission_type\'] ?: \'Manual\') . \' • \' . (int)$row[\'pax_count\'] . \' seats • \' . (int)$row[\'luggage_count\'] . \' luggage • \' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</div>\';

if (!empty($selectedExtras)) {
    $out .= \'        <div class="coverageHeroSummary__extras">\';
    $out .= \'          <div class="coverageHeroSummary__extrasTitle">Selected extras</div>\';
    $out .= \'          <ul class="coverageHeroSummary__extrasList">\';
    foreach ($selectedExtras as $extra) {
        $extraName = htmlspecialchars($extra[\'name\'] ?? \'\');
        $extraQty = (int)($extra[\'qty\'] ?? 1);
        $extraTotal = isset($extra[\'total\']) ? (float)$extra[\'total\'] : 0;
        $out .= \'            <li>\';
        $out .= \'              <span>\' . $extraName . \' × \' . $extraQty . \'</span>\';
        $out .= \'              <strong>€\' . number_format($extraTotal, 2, \'.\', \'\') . \'</strong>\';
        $out .= \'            </li>\';
    }
    $out .= \'          </ul>\';
    $out .= \'        </div>\';
}

$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="coverageHeroSummary__amount">\';
$out .= \'      <span>Base rental</span>\';
$out .= \'      <strong>€\' . number_format($baseRental, 2, \'.\', \'\') . \'</strong>\';

if ($extrasTotal > 0) {
    $out .= \'      <span class="coverageHeroSummary__amountSub">Extras: €\' . number_format($extrasTotal, 2, \'.\', \'\') . \'</span>\';
}
if ($grandTotal > 0) {
    $out .= \'      <span class="coverageHeroSummary__amountSub coverageHeroSummary__amountSub--total">Current total: €\' . number_format($grandTotal, 2, \'.\', \'\') . \'</span>\';
}

$out .= \'    </div>\';
$out .= \'  </div>\';

$out .= \'  <div class="coverageGrid">\';

foreach ($coveragePackages as $pkg) {
    $step4Link = $modx->makeUrl(42, \'\', array_merge($step4BaseParams, [
        \'coverage_id\' => $pkg[\'id\'],
        \'coverage_name\' => $pkg[\'title\'],
        \'coverage_day_price\' => number_format((float)$pkg[\'price_per_day\'], 2, \'.\', \'\'),
        \'coverage_total\' => number_format((float)$pkg[\'period_total\'], 2, \'.\', \'\')
    ]));

    $themeClass = \'coverageCard--\' . $pkg[\'theme\'];
    $pricePerDay = (float)$pkg[\'price_per_day\'];
    $periodTotal = (float)$pkg[\'period_total\'];

    $out .= \'<div class="coverageCard \' . $themeClass . \'">\';

    $out .= \'  <div class="coverageCard__top">\';
    $out .= \'    <div class="coverageCard__intro">\';
    $out .= \'      <h3 class="coverageCard__title">\' . htmlspecialchars($pkg[\'title\']) . \'</h3>\';
    $out .= \'      <p class="coverageCard__desc">\' . htmlspecialchars($pkg[\'subtitle\']) . \'</p>\';
    $out .= \'    </div>\';
    $out .= \'    <div class="coverageCard__imageWrap">\';
    $out .= \'      <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="coverageCard__image">\';
    $out .= \'    </div>\';
    $out .= \'  </div>\';

    $out .= \'  <div class="coverageCard__priceBox">\';
    if ($pricePerDay > 0) {
        $out .= \'    <div class="coverageCard__price">\';
        $out .= \'      <strong>€\' . number_format($pricePerDay, 2, \'.\', \'\') . \'/day</strong>\';
        $out .= \'      <span>€\' . number_format($periodTotal, 2, \'.\', \'\') . \' for rental period</span>\';
        $out .= \'    </div>\';
    } else {
        $out .= \'    <div class="coverageCard__price">\';
        $out .= \'      <strong>Included</strong>\';
        $out .= \'      <span>No additional protection selected</span>\';
        $out .= \'    </div>\';
    }
    $out .= \'    <a href="\' . htmlspecialchars($step4Link) . \'" class="coverageCard__btn">\' . htmlspecialchars($pkg[\'button\']) . \'</a>\';
    $out .= \'  </div>\';

    $out .= \'  <div class="coverageCard__features">\';
    $out .= \'    <h4>\' . ($pkg[\'id\'] === \'risk\' ? \'Not covered\' : "What\\\'s covered?") . \'</h4>\';
    $out .= \'    <ul>\';
    foreach ($pkg[\'items\'] as $item) {
        $out .= \'<li>\' . htmlspecialchars($item) . \'</li>\';
    }
    $out .= \'    </ul>\';
    $out .= \'  </div>\';

    if ($pkg[\'id\'] === \'full\') {
        $out .= \'  <div class="coverageCard__footer coverageCard__footer--success">\';
        $out .= \'    Cancel anytime before pick-up!\';
        $out .= \'  </div>\';
    } elseif ($pkg[\'id\'] === \'risk\') {
        $out .= \'  <div class="coverageCard__footer coverageCard__footer--warning">\';
        $out .= \'    You may be charged directly by the supplier if something happens.\';
        $out .= \'  </div>\';
    }

    $out .= \'</div>\';
}

$out .= \'  </div>\';
$out .= \'</div>\';

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