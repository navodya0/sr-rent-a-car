<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 41,
    'type' => 'document',
    'pagetitle' => 'vehicle-booking',
    'longtitle' => '',
    'description' => '',
    'alias' => 'vehicle-booking',
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
			  <p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Manage Booking<i class="ion-ios-arrow-forward"></i></span></p>
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

      <div class="bookingSteps__item bookingSteps__item--active">
        <span class="bookingSteps__num">2</span>
        <span class="bookingSteps__text">Your deal</span>
      </div>

      <div class="bookingSteps__line"></div>

      <div class="bookingSteps__item">
        <span class="bookingSteps__num">3</span>
        <span class="bookingSteps__text">Coverage</span>
      </div>

      <div class="bookingSteps__line"></div>

      <div class="bookingSteps__item">
        <span class="bookingSteps__num">4</span>
        <span class="bookingSteps__text">Driver details</span>
      </div>
    </div>

    <div class="bookingStepTopbar mb-4">
<a href="[[~39]]" class="bookingStepTopbar__back">← Back to results</a>
      <div class="bookingStepTopbar__next">
        Next: Coverage
      </div>
    </div>

    [[!VehicleDealStep2]]

  </div>
</section>',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 39,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1773638237,
    'editedby' => 1,
    'editedon' => 1773903933,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1773638220,
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


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
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
        <li class="nav-item"><a href="index.php?id=39" class="nav-link">FLEET</a></li>
      <li class="nav-item"><a href="index.php?id=5" class="nav-link">BLOG</a></li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>
  <div class="dropdown-menu" aria-labelledby="offersDropdown">
    <a class="dropdown-item" href="index.php?id=40">Indian Travellers</a>
    <a class="dropdown-item" href="index.php?id=42">International Travellers</a>
  </div>
</li>
        <li class="nav-item"><a href="index.php?id=9" class="nav-link">RENT A CAR</a></li>
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
			  <h1 class="mb-2 bread">Manage Booking</h1>
			  <p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Manage Booking<i class="ion-ios-arrow-forward"></i></span></p>
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

      <div class="bookingSteps__item bookingSteps__item--active">
        <span class="bookingSteps__num">2</span>
        <span class="bookingSteps__text">Your deal</span>
      </div>

      <div class="bookingSteps__line"></div>

      <div class="bookingSteps__item">
        <span class="bookingSteps__num">3</span>
        <span class="bookingSteps__text">Coverage</span>
      </div>

      <div class="bookingSteps__line"></div>

      <div class="bookingSteps__item">
        <span class="bookingSteps__num">4</span>
        <span class="bookingSteps__text">Driver details</span>
      </div>
    </div>

    <div class="bookingStepTopbar mb-4">
<a href="index.php?id=39" class="bookingStepTopbar__back">← Back to results</a>
      <div class="bookingStepTopbar__next">
        Next: Coverage
      </div>
    </div>

    [[!VehicleDealStep2]]

  </div>
</section>
<!-- ✅ Global Top-Right Logo (visible on all pages) -->
<div class="global-logo">
  <img src="assets/images/award.png" alt="Sri Lanka Rent A Car">
</div>
<footer class="footer-section footer-style-v2" style="background-image: url(\'assets/images/footer-bg.jpg\');">
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-overlay"></div>

    <div class="container footer-inner">
        <div class="row align-items-start gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <div class="footer-logo mb-3">
                        <a href="index.php?id=1">
                            <img src="assets/images/logo_white.png" alt="SR Rent A Car" class="img-fluid footer-logo-img">
                        </a>
                    </div>

                    <p class="footer-desc">
                        As a leading Sri Lanka car rental service provider, SR Rent A Car offers practical and reliable car rental solutions for tourists, business travelers, and locals exploring the Pearl of the Indian Ocean.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="index.php?id=1">Home</a></li>
                        <li><a href="index.php?id=39">Our Fleet</a></li>
                        <li><a href="index.php?id=9">About Us</a></li>
                        <li><a href="index.php?id=10">FAQ</a></li>
                        <li><a href="index.php?id=6">Contact</a></li>
                        <li><a href="index.php?id=5">Blogs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-lg-center">
                <div class="footer-widget">
                    <h3 class="footer-title">Other Services</h3>
                    <ul class="footer-links footer-services">
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\2.png" alt="Explore Vacations (Sri Lanka)"> Explore Vacations (Sri Lanka)
                            </a>
                        </li>
                        <li>
                            <a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets\\images\\useful\\1.png" alt="Airport Transfers"> Airport Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://srilankatransfer.lk/" target="_blank">
                                <img src="assets\\images\\useful\\6.png" alt="SR Transfers"> SR Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets\\images\\useful\\4.png" alt="9 Trees Boutique Villa"> 9 Trees Boutique Villa
                            </a>
                        </li>
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\5.png" alt="9 Trees Boutique Villa">  Euro Motors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-contact-row">
            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <a href="https://maps.app.goo.gl/zspCn37GW4SyfEuF8" target="_blank">
                    371/5, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94777780729">
                    +94 77 778 0729
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <a href="mailto:info@srilankarentacar.com">
                    info@srilankarentacar.com
                </a>
            </div>

            <div class="footer-social">
                <a href="https://www.facebook.com/srrentacar" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <img src="assets/images/payment.png" alt="Payment Methods" class="footer-payment-img">
            </div>

            <div class="footer-bottom-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    All Rights Reserved -
                    <a href="index.php?id=1">SR Rent A Car</a>
                </p>
            </div>

            <div class="footer-bottom-right">
                <img src="assets/images/raca.png" alt="SR Rent A Car" class="footer-raca-img">
            </div>
        </div>
    </div>
</footer>
  
<!-- WhatsApp Chat Popup starts -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <div id="whatsapp-chat-btn" class="wa-button">
        <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px" alt="Whatsapp icon">
    </div>

    <!-- Scroll to top -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
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
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

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
<!-- WhatsApp Chat Popup ends -->',
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
    '[[~39]]' => 'index.php?id=39',
    '[[~5]]' => 'index.php?id=5',
    '[[~40]]' => 'index.php?id=40',
    '[[~42]]' => 'index.php?id=42',
    '[[~9]]' => 'index.php?id=9',
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


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
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
        <li class="nav-item"><a href="index.php?id=39" class="nav-link">FLEET</a></li>
      <li class="nav-item"><a href="index.php?id=5" class="nav-link">BLOG</a></li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>
  <div class="dropdown-menu" aria-labelledby="offersDropdown">
    <a class="dropdown-item" href="index.php?id=40">Indian Travellers</a>
    <a class="dropdown-item" href="index.php?id=42">International Travellers</a>
  </div>
</li>
        <li class="nav-item"><a href="index.php?id=9" class="nav-link">RENT A CAR</a></li>
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
    '[[$footer?]]' => '<footer class="footer-section footer-style-v2" style="background-image: url(\'assets/images/footer-bg.jpg\');">
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-overlay"></div>

    <div class="container footer-inner">
        <div class="row align-items-start gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <div class="footer-logo mb-3">
                        <a href="index.php?id=1">
                            <img src="assets/images/logo_white.png" alt="SR Rent A Car" class="img-fluid footer-logo-img">
                        </a>
                    </div>

                    <p class="footer-desc">
                        As a leading Sri Lanka car rental service provider, SR Rent A Car offers practical and reliable car rental solutions for tourists, business travelers, and locals exploring the Pearl of the Indian Ocean.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="index.php?id=1">Home</a></li>
                        <li><a href="index.php?id=39">Our Fleet</a></li>
                        <li><a href="index.php?id=9">About Us</a></li>
                        <li><a href="index.php?id=10">FAQ</a></li>
                        <li><a href="index.php?id=6">Contact</a></li>
                        <li><a href="index.php?id=5">Blogs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-lg-center">
                <div class="footer-widget">
                    <h3 class="footer-title">Other Services</h3>
                    <ul class="footer-links footer-services">
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\2.png" alt="Explore Vacations (Sri Lanka)"> Explore Vacations (Sri Lanka)
                            </a>
                        </li>
                        <li>
                            <a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets\\images\\useful\\1.png" alt="Airport Transfers"> Airport Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://srilankatransfer.lk/" target="_blank">
                                <img src="assets\\images\\useful\\6.png" alt="SR Transfers"> SR Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets\\images\\useful\\4.png" alt="9 Trees Boutique Villa"> 9 Trees Boutique Villa
                            </a>
                        </li>
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\5.png" alt="9 Trees Boutique Villa">  Euro Motors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-contact-row">
            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <a href="https://maps.app.goo.gl/zspCn37GW4SyfEuF8" target="_blank">
                    371/5, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94777780729">
                    +94 77 778 0729
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <a href="mailto:info@srilankarentacar.com">
                    info@srilankarentacar.com
                </a>
            </div>

            <div class="footer-social">
                <a href="https://www.facebook.com/srrentacar" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <img src="assets/images/payment.png" alt="Payment Methods" class="footer-payment-img">
            </div>

            <div class="footer-bottom-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    All Rights Reserved -
                    <a href="index.php?id=1">SR Rent A Car</a>
                </p>
            </div>

            <div class="footer-bottom-right">
                <img src="assets/images/raca.png" alt="SR Rent A Car" class="footer-raca-img">
            </div>
        </div>
    </div>
</footer>
  
<!-- WhatsApp Chat Popup starts -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <div id="whatsapp-chat-btn" class="wa-button">
        <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px" alt="Whatsapp icon">
    </div>

    <!-- Scroll to top -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
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
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

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
<!-- WhatsApp Chat Popup ends -->',
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


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
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
        <li class="nav-item"><a href="[[~39]]" class="nav-link">FLEET</a></li>
      <li class="nav-item"><a href="[[~5]]" class="nav-link">BLOG</a></li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>
  <div class="dropdown-menu" aria-labelledby="offersDropdown">
    <a class="dropdown-item" href="[[~40]]">Indian Travellers</a>
    <a class="dropdown-item" href="[[~42]]">International Travellers</a>
  </div>
</li>
        <li class="nav-item"><a href="[[~9]]" class="nav-link">RENT A CAR</a></li>
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


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
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
        <li class="nav-item"><a href="[[~39]]" class="nav-link">FLEET</a></li>
      <li class="nav-item"><a href="[[~5]]" class="nav-link">BLOG</a></li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>
  <div class="dropdown-menu" aria-labelledby="offersDropdown">
    <a class="dropdown-item" href="[[~40]]">Indian Travellers</a>
    <a class="dropdown-item" href="[[~42]]">International Travellers</a>
  </div>
</li>
        <li class="nav-item"><a href="[[~9]]" class="nav-link">RENT A CAR</a></li>
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
          'web' => 
          array (
          ),
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
          'snippet' => '<footer class="footer-section footer-style-v2" style="background-image: url(\'assets/images/footer-bg.jpg\');">
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-overlay"></div>

    <div class="container footer-inner">
        <div class="row align-items-start gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <div class="footer-logo mb-3">
                        <a href="[[~1]]">
                            <img src="assets/images/logo_white.png" alt="SR Rent A Car" class="img-fluid footer-logo-img">
                        </a>
                    </div>

                    <p class="footer-desc">
                        As a leading Sri Lanka car rental service provider, SR Rent A Car offers practical and reliable car rental solutions for tourists, business travelers, and locals exploring the Pearl of the Indian Ocean.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="[[~1]]">Home</a></li>
                        <li><a href="[[~39]]">Our Fleet</a></li>
                        <li><a href="[[~9]]">About Us</a></li>
                        <li><a href="[[~10]]">FAQ</a></li>
                        <li><a href="[[~6]]">Contact</a></li>
                        <li><a href="[[~5]]">Blogs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-lg-center">
                <div class="footer-widget">
                    <h3 class="footer-title">Other Services</h3>
                    <ul class="footer-links footer-services">
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\2.png" alt="Explore Vacations (Sri Lanka)"> Explore Vacations (Sri Lanka)
                            </a>
                        </li>
                        <li>
                            <a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets\\images\\useful\\1.png" alt="Airport Transfers"> Airport Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://srilankatransfer.lk/" target="_blank">
                                <img src="assets\\images\\useful\\6.png" alt="SR Transfers"> SR Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets\\images\\useful\\4.png" alt="9 Trees Boutique Villa"> 9 Trees Boutique Villa
                            </a>
                        </li>
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\5.png" alt="9 Trees Boutique Villa">  Euro Motors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-contact-row">
            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <a href="https://maps.app.goo.gl/zspCn37GW4SyfEuF8" target="_blank">
                    371/5, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94777780729">
                    +94 77 778 0729
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <a href="mailto:info@srilankarentacar.com">
                    info@srilankarentacar.com
                </a>
            </div>

            <div class="footer-social">
                <a href="https://www.facebook.com/srrentacar" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <img src="assets/images/payment.png" alt="Payment Methods" class="footer-payment-img">
            </div>

            <div class="footer-bottom-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    All Rights Reserved -
                    <a href="[[~1]]">SR Rent A Car</a>
                </p>
            </div>

            <div class="footer-bottom-right">
                <img src="assets/images/raca.png" alt="SR Rent A Car" class="footer-raca-img">
            </div>
        </div>
    </div>
</footer>
  
<!-- WhatsApp Chat Popup starts -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <div id="whatsapp-chat-btn" class="wa-button">
        <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px" alt="Whatsapp icon">
    </div>

    <!-- Scroll to top -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
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
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

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
<!-- WhatsApp Chat Popup ends -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer class="footer-section footer-style-v2" style="background-image: url(\'assets/images/footer-bg.jpg\');">
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-overlay"></div>

    <div class="container footer-inner">
        <div class="row align-items-start gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <div class="footer-logo mb-3">
                        <a href="[[~1]]">
                            <img src="assets/images/logo_white.png" alt="SR Rent A Car" class="img-fluid footer-logo-img">
                        </a>
                    </div>

                    <p class="footer-desc">
                        As a leading Sri Lanka car rental service provider, SR Rent A Car offers practical and reliable car rental solutions for tourists, business travelers, and locals exploring the Pearl of the Indian Ocean.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="[[~1]]">Home</a></li>
                        <li><a href="[[~39]]">Our Fleet</a></li>
                        <li><a href="[[~9]]">About Us</a></li>
                        <li><a href="[[~10]]">FAQ</a></li>
                        <li><a href="[[~6]]">Contact</a></li>
                        <li><a href="[[~5]]">Blogs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-lg-center">
                <div class="footer-widget">
                    <h3 class="footer-title">Other Services</h3>
                    <ul class="footer-links footer-services">
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\2.png" alt="Explore Vacations (Sri Lanka)"> Explore Vacations (Sri Lanka)
                            </a>
                        </li>
                        <li>
                            <a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets\\images\\useful\\1.png" alt="Airport Transfers"> Airport Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://srilankatransfer.lk/" target="_blank">
                                <img src="assets\\images\\useful\\6.png" alt="SR Transfers"> SR Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets\\images\\useful\\4.png" alt="9 Trees Boutique Villa"> 9 Trees Boutique Villa
                            </a>
                        </li>
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\5.png" alt="9 Trees Boutique Villa">  Euro Motors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-contact-row">
            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <a href="https://maps.app.goo.gl/zspCn37GW4SyfEuF8" target="_blank">
                    371/5, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94777780729">
                    +94 77 778 0729
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <a href="mailto:info@srilankarentacar.com">
                    info@srilankarentacar.com
                </a>
            </div>

            <div class="footer-social">
                <a href="https://www.facebook.com/srrentacar" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <img src="assets/images/payment.png" alt="Payment Methods" class="footer-payment-img">
            </div>

            <div class="footer-bottom-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    All Rights Reserved -
                    <a href="[[~1]]">SR Rent A Car</a>
                </p>
            </div>

            <div class="footer-bottom-right">
                <img src="assets/images/raca.png" alt="SR Rent A Car" class="footer-raca-img">
            </div>
        </div>
    </div>
</footer>
  
<!-- WhatsApp Chat Popup starts -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <div id="whatsapp-chat-btn" class="wa-button">
        <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px" alt="Whatsapp icon">
    </div>

    <!-- Scroll to top -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
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
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

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
<!-- WhatsApp Chat Popup ends -->',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
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
      'VehicleDealStep2' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'VehicleDealStep2',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => 'require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Save selected vehicle from POST
 */
if ($_SERVER[\'REQUEST_METHOD\'] === \'POST\') {
    if (isset($_POST[\'vehicle_id\']) || isset($_POST[\'car_code\'])) {
        $_SESSION[\'selected_vehicle\'] = [
            \'vehicle_id\' => trim($_POST[\'vehicle_id\'] ?? \'\'),
            \'car_code\'   => trim($_POST[\'car_code\'] ?? \'\'),
        ];
    }
}

$selectedVehicle = $_SESSION[\'selected_vehicle\'] ?? [];
$search          = $_SESSION[\'rent_search\'] ?? [];

$discountRaw = trim($_SESSION[\'rent_discount\'] ?? \'\');
$offerCategory = trim($_SESSION[\'rent_offer_category\'] ?? \'\');
$discountPercent = 0;

if ($discountRaw !== \'\') {
    $discountPercent = (int)preg_replace(\'/[^0-9]/\', \'\', $discountRaw);
}

$vehicleId = isset($selectedVehicle[\'vehicle_id\']) ? (int)$selectedVehicle[\'vehicle_id\'] : 0;
$carCode   = trim($selectedVehicle[\'car_code\'] ?? \'\');

$pickupDateTime  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropoffDateTime = trim($search[\'dropoff_datetime\'] ?? \'\');
$pickupLocation  = trim($search[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($search[\'dropoff_location\'] ?? \'\');

// if dropoff is empty, use pickup location
if ($dropoffLocation === \'\') {
    $dropoffLocation = $pickupLocation;
}

if ($vehicleId <= 0 && $carCode === \'\') {
    return \'<p>Vehicle not selected.</p>\';
}

$pickupDate  = ($pickupDateTime !== \'\' && strtotime($pickupDateTime)) ? date(\'Y-m-d\', strtotime($pickupDateTime)) : \'\';
$dropoffDate = ($dropoffDateTime !== \'\' && strtotime($dropoffDateTime)) ? date(\'Y-m-d\', strtotime($dropoffDateTime)) : \'\';

$days = 0;
if ($pickupDate && $dropoffDate) {
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
        LEFT JOIN car_rental r
          ON r.car_code = v.car_code
         AND :pickup_date >= DATE(r.start_date)
         AND :dropoff_date <= DATE(r.end_date)
        WHERE " . implode(\' AND \', $where) . "
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare deal query.</p>\';

$stmt->bindValue(\':pickup_date\', $pickupDate, PDO::PARAM_STR);
$stmt->bindValue(\':dropoff_date\', $dropoffDate, PDO::PARAM_STR);

foreach ($params as $key => $value) {
    if ($key === \':vehicle_id\') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return \'<p>Could not load deal: \' . htmlspecialchars($error[2]) . \'</p>\';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return \'<p>Vehicle deal not found.</p>\';

if (!function_exists(\'step2CalculatePrice\')) {
    function step2CalculatePrice($modx, $carCode, $pickupDate, $dropoffDate) {
        if (!$carCode || !$pickupDate || !$dropoffDate) return \'\';

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);
        if (!$start || !$end || $end < $start) return \'\';

        $days = max(1, (int)(($end - $start) / 86400) + 1);

        $sql = "SELECT duration, rate
                FROM car_rental
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
            $duration = (int)($r[\'duration\'] ?? 0);
            $rate     = (float)($r[\'rate\'] ?? 0);

            if ($duration > 0) {
                $rates[$duration] = $rate;
            }
        }

        if (!$rates) return \'\';

        ksort($rates);

        $maxDuration = max(array_keys($rates));
        $lastRate    = (float)$rates[$maxDuration];
        $total       = 0.0;

        for ($d = 1; $d <= $days; $d++) {
            if (isset($rates[$d])) {
                $total += (float)$rates[$d];
            } elseif ($d > $maxDuration) {
                $total += $lastRate;
            } else {
                // missing duration between 1 and max duration
                return \'\';
            }
        }

        return number_format($total, 2, \'.\', \'\');
    }
}

$amount = step2CalculatePrice($modx, $row[\'car_code\'], $pickupDate, $dropoffDate);

$originalAmount = $amount !== \'\' ? (float)$amount : 0.00;
$discountedAmount = $originalAmount;

$vehicleCategory = trim((string)($row[\'car_category\'] ?? \'\'));

$discountAppliesToThisVehicle = (
    $discountPercent > 0 &&
    $originalAmount > 0 &&
    $offerCategory !== \'\' &&
    strcasecmp($vehicleCategory, $offerCategory) === 0
);

if ($discountAppliesToThisVehicle) {
    $discountedAmount = $originalAmount - (($originalAmount * $discountPercent) / 100);
}

$displayOriginalAmount = $originalAmount > 0 ? number_format($originalAmount, 2, \'.\', \'\') : \'\';
$displayDiscountedAmount = $discountedAmount > 0 ? number_format($discountedAmount, 2, \'.\', \'\') : \'\';

$securityDeposit = isset($row[\'deposit_amount\']) && $row[\'deposit_amount\'] !== \'\'
    ? number_format((float)$row[\'deposit_amount\'], 2, \'.\', \'\')
    : \'\';

$baseTotal = $displayDiscountedAmount !== \'\'
    ? number_format((float)$displayDiscountedAmount, 2, \'.\', \'\')
    : \'\';


$pickupText = $pickupDateTime && strtotime($pickupDateTime) ? date(\'d M Y, H:i\', strtotime($pickupDateTime)) : \'\';
$dropoffText = $dropoffDateTime && strtotime($dropoffDateTime) ? date(\'d M Y, H:i\', strtotime($dropoffDateTime)) : \'\';

$extras = [];
$extraStmt = $modx->prepare("SELECT extra_id, name, description, price FROM extras ORDER BY extra_id ASC");
if ($extraStmt && $extraStmt->execute()) {
    $extras = $extraStmt->fetchAll(PDO::FETCH_ASSOC);
}

$out = \'\';
$out .= \'<div class="premiumDealLayout">\';

$out .= \'  <div class="premiumDealLayout__main">\';

$out .= \'    <div class="premiumDealCard premiumDealCard--hero">\';
if ($discountAppliesToThisVehicle) {
    $out .= \'      <div class="premiumDiscountNotice">\';
    $out .= \'        <span class="premiumDiscountNotice__badge">Discount Applied</span>\';
    $out .= \'        <span class="premiumDiscountNotice__text">\' . htmlspecialchars($discountRaw, ENT_QUOTES, \'UTF-8\') . \' offer is active for this booking.</span>\';
    $out .= \'      </div>\';
}

$out .= \'      <div class="premiumDealCard__badges">\';
$out .= \'        <span class="premiumBadge premiumBadge--gold">Excellent service</span>\';
$out .= \'        <span class="premiumBadge premiumBadge--blue">Pay part now</span>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumDealHero">\';
$out .= \'        <div class="premiumDealHero__left">\';
$out .= \'          <div class="premiumDealHero__titleRow">\';
$out .= \'            <h2 class="premiumDealHero__title">\' . htmlspecialchars($row[\'car_model\']) . \'</h2>\';
$out .= \'          </div>\';

$out .= \'          <div class="premiumDealHero__subtitleWrap">\';
$out .= \'             <div class="premiumDealHero__subtitle">or similar \' . htmlspecialchars($row[\'car_category\']) . \'</div>\';
$out .= \'             <div class="premiumInfoTooltip">\';
$out .= \'                 <button type="button" class="premiumInfoTrigger" aria-label="Vehicle availability information">\';
$out .= \'                     <img src="assets/images/information.svg" alt="Info" class="premiumInfoIcon">\';
$out .= \'                 </button>\';

$out .= \'                 <div class="premiumTooltipBox">\';
$out .= \'                     <strong class="mb-3">What does "or similar" mean?</strong>\';
$out .= \'                     <p>If the exact model isn’t available, you’ll get a car in the same category that’s the same size and has the same number of doors, transmission type, and features. This is standard for most car rental suppliers.</p>\';
$out .= \'                 </div>\';

$out .= \'             </div>\';
$out .= \'          </div>\';
$out .= \'          <div class="premiumSpecs">\';
$out .= \'            <span class="premiumSpecs__item">\' . htmlspecialchars($row[\'transmission_type\'] ?: \'Manual\') . \'</span>\';
$out .= \'            <span class="premiumSpecs__item">\' . (int)$row[\'pax_count\'] . \' Seats</span>\';
$out .= \'            <span class="premiumSpecs__item">\' . (int)$row[\'luggage_count\'] . \' Luggages</span>\';
$out .= \'            <span class="premiumSpecs__item">Air Conditioning</span>\';
$out .= \'          </div>\';

$out .= \'          <div class="premiumBookingMeta">\';
if ($pickupLocation !== \'\') {
    $out .= \'            <div><strong>Pick-up:</strong> \' . htmlspecialchars($pickupLocation) . ($pickupText ? \' <span class="premiumMuted">(\' . htmlspecialchars($pickupText) . \')</span>\' : \'\') . \'</div>\';
}
if ($dropoffLocation !== \'\') {
    $out .= \'            <div><strong>Drop-off:</strong> \' . htmlspecialchars($dropoffLocation) . ($dropoffText ? \' <span class="premiumMuted">(\' . htmlspecialchars($dropoffText) . \')</span>\' : \'\') . \'</div>\';
}
$out .= \'          </div>\';
$out .= \'        </div>\';

$out .= \'        <div class="premiumDealHero__right">\';
$out .= \'          <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="premiumDealHero__image">\';
$out .= \'        </div>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="premiumDealCard">\';
$out .= \'      <h3 class="premiumSectionTitle">Included in your offer</h3>\';
$out .= \'      <ul class="premiumIncludedList">\';
$out .= \'        <li>Unlimited mileage</li>\';
$out .= \'        <li>Theft Protection</li>\';
$out .= \'        <li>Third Party Liability (TPL)</li>\';
$out .= \'      </ul>\';
$out .= \'    </div>\';

$out .= \'    <div class="premiumDealCard premiumDealCard--soft">\';
$out .= \'      <div class="premiumCoverageBanner">\';
$out .= \'        <div class="premiumCoverageBanner__text">\';
$out .= \'          <strong>Add coverage in the next step...</strong><br>\';
$out .= \'        </div>\';
$out .= \'        <div class="premiumCoverageBanner__icon">🛡️</div>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="premiumDealCard">\';
$out .= \'      <div class="premiumInfoBlock">\';
$out .= \'        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Important to know</h3>\';
$out .= \'        <ul class="premiumInfoList">\';
$out .= \'          <li>There is a security deposit of EUR 700</li>\';
$out .= \'          <li>The supplier will hold/charge a deposit on the main driver&#39;s credit card at pick-up. If no charges are incurred after the rental, it will be released.</li>\';
$out .= \'        </ul>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumInfoBlock">\';
$out .= \'        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Bring your documents</h3>\';
$out .= \'        <ul class="premiumInfoList">\';
$out .= \'          <li>Passport or ID card</li>\';
$out .= \'          <li>Driver&#39;s license</li>\';
$out .= \'        </ul>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumInfoBlock">\';
$out .= \'        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Car has unlimited mileage</h3>\';
$out .= \'        <ul class="premiumInfoList">\';
$out .= \'          <li>There is no limit on how many kilometers/miles can be traveled.</li>\';
$out .= \'        </ul>\';
$out .= \'      </div>\';

$out .= \'      <button type="button" class="premiumConditionsBtn" id="openRentalConditions">See all rental conditions</button>\';
$out .= \'    </div>\';

$out .= \'    <div class="rentalModal" id="rentalConditionsModal" aria-hidden="true">\';
$out .= \'      <div class="rentalModal__backdrop" data-close-modal></div>\';
$out .= \'      <div class="rentalModal__dialog" role="dialog" aria-modal="true" aria-labelledby="rentalConditionsTitle">\';
$out .= \'        <button type="button" class="rentalModal__close" data-close-modal aria-label="Close">×</button>\';
$out .= \'        <h3 class="rentalModal__title" id="rentalConditionsTitle">Rental conditions</h3>\';
$out .= \'        <div class="rentalModal__content">\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Deposit and payment cards</h4>\';

$out .= \'            <h5>Security deposit</h5>\';
$out .= \'            <p>The supplier will hold a deposit of € 700.00 on your card when you pick up the car. If no charges are incurred after the rental, it will be released.</p>\';

$out .= \'            <h5>Payment card</h5>\';
$out .= \'            <p>You’ll need a credit card in the main driver’s full name at pick-up for payment and any required deposit.</p>\';

$out .= \'            <h5>Accepted cards</h5>\';
$out .= \'            <ul>\';
$out .= \'              <li>American Express Credit</li>\';
$out .= \'              <li>Visa Credit</li>\';
$out .= \'              <li>MasterCard Credit</li>\';
$out .= \'            </ul>\';

$out .= \'            <h5>Not accepted</h5>\';
$out .= \'            <ul>\';
$out .= \'              <li>Debit cards</li>\';
$out .= \'              <li>Cards not in main driver&#39;s name or without numbers</li>\';
$out .= \'              <li>Virtual cards on your phone (e.g., Google Pay, Apple Pay, etc.)</li>\';
$out .= \'              <li>Visa Electron</li>\';
$out .= \'              <li>Cards issued by online-only banks</li>\';
$out .= \'            </ul>\';

$out .= \'            <h5>Please note</h5>\';
$out .= \'            <p>The card must have the number printed on it. The card must have chip and PIN capability.</p>\';
$out .= \'          </div>\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Included protection</h4>\';
$out .= \'            <p><strong>€ 700.00 excess / deductible</strong></p>\';

$out .= \'            <h5>Included insurance</h5>\';

$out .= \'            <h5>Collision Damage Waiver</h5>\';
$out .= \'            <p><strong>Deductible:</strong> € 700.00</p>\';
$out .= \'            <p>You&#39;ll have to pay at most the deductible if the car&#39;s bodywork is damaged (other parts of the car aren&#39;t covered).</p>\';

$out .= \'            <h5>Theft Protection</h5>\';
$out .= \'            <p>You&#39;ll have to pay at most the deductible if the car is stolen.</p>\';

$out .= \'            <h5>Third Party Liability (TPL)</h5>\';
$out .= \'            <p><strong>No limit</strong></p>\';
$out .= \'            <p>Mandatory coverage for injuries and damage you may cause to others while driving the car.</p>\';
$out .= \'          </div>\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Fuel policy</h4>\';
$out .= \'            <p><strong>Full to full</strong></p>\';
$out .= \'            <p>The vehicle is provided with a full tank of fuel and must be returned with the same amount in order to avoid additional charges.</p>\';
$out .= \'          </div>\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Mileage</h4>\';
$out .= \'            <p><strong>Unlimited mileage</strong></p>\';
$out .= \'            <p>There is no limit on how many kilometers/miles can be traveled.</p>\';
$out .= \'          </div>\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Driver Requirements</h4>\';
$out .= \'            <ul>\';
$out .= \'              <li>Minimum rental age is 21 years.</li>\';
$out .= \'              <li>A young driver fee applies to drivers under the age of 25.</li>\';
$out .= \'              <li>There is no maximum age.</li>\';
$out .= \'              <li>A Senior driver fee is not applied.</li>\';
$out .= \'              <li>The driver license must have been issued by authorized authorities at least 2 year(s) before the date of the commencement of the rental.</li>\';
$out .= \'              <li>A driver license printed using a non-Roman alphabet (Arabic, Japanese, Cyrillic, etc) must be supplemented by an International Driving Permit.</li>\';
$out .= \'              <li>Please note that the International Driving Permit is valid only if it is accompanied by a regular driver&#39;s license, is issued by an official authority or government-authorized organization, and is in physical (not digital) form.</li>\';
$out .= \'              <li>Licences issued in China are not accepted.</li>\';
$out .= \'              <li>In order to pick up the car, the following documents are required: passport, valid driver license, credit card on a main driver&#39;s name, booking voucher.</li>\';
$out .= \'            </ul>\';
$out .= \'          </div>\';

$out .= \'        </div>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'  </div>\';

$out .= \'  <aside class="premiumDealLayout__sidebar">\';
$out .= \'    <div class="premiumSummaryCard">\';

$out .= \'      <div class="premiumSummaryCard__block">\';
$out .= \'        <div class="premiumSummaryRow">\';
$out .= \'          <span>Rental Payment</span>\';

if ($discountAppliesToThisVehicle && $displayOriginalAmount !== \'\' && $displayDiscountedAmount !== \'\') {
    $out .= \'      <strong id="js-rental-payment">\';
    $out .= \'        <span style="display:block; text-decoration:line-through; color:#999 !important; font-size:14px; text-align: end;">€ \' . $displayOriginalAmount . \'</span>\';
    $out .= \'        <span style="display:block; color:#d62828; font-size:22px; font-weight:700;">€ \' . $displayDiscountedAmount . \'</span>\';
    $out .= \'      </strong>\';
} else {
    $out .= \'      <strong id="js-rental-payment">\' . ($displayOriginalAmount !== \'\' ? \'€ \' . $displayOriginalAmount : \'N/A\') . \'</strong>\';
}
$out .= \'        </div>\';
$out .= \'      </div>\';

// $out .= \'      <div class="premiumSummaryCard__block">\';
// $out .= \'        <div class="premiumSummaryRow">\';
// $out .= \'          <span>Security Deposit</span>\';
// $out .= \'          <strong id="js-security-deposit">\' . ($securityDeposit !== \'\' ? \'€\' . $securityDeposit : \'N/A\') . \'</strong>\';
// $out .= \'        </div>\';
// $out .= \'      </div>\';

if ($extras) {
    $out .= \'      <div class="premiumSummaryCard__block premiumSummaryCard__extras">\';
    $out .= \'        <div class="premiumSummaryCard__heading">Optional extras</div>\';
    $out .= \'        <div class="extrasList">\';

    foreach ($extras as $extra) {
        $extraId = (int)$extra[\'extra_id\'];
        $extraName = htmlspecialchars($extra[\'name\'] ?? \'\');
        $extraDescription = trim((string)($extra[\'description\'] ?? \'\'));
        $extraPrice = number_format((float)($extra[\'price\'] ?? 0), 2, \'.\', \'\');

        $out .= \'          <label class="extraOption" data-extra-id="\' . $extraId . \'">\';
        $out .= \'            <input type="checkbox" class="extraOption__checkbox js-extra-check" value="\' . $extraId . \'" data-price="\' . $extraPrice . \'">\';
        $out .= \'            <div class="extraOption__main">\';
        $out .= \'              <div class="extraOption__checkWrap">\';
        $out .= \'                <span class="extraOption__fakebox"></span>\';
        $out .= \'              </div>\';

        $out .= \'              <div class="extraOption__info">\';
        $out .= \'                <div class="extraOption__title">\' . $extraName . ($extraDescription !== \'\' ? \' <span class="extraOption__descInline">(\' . htmlspecialchars($extraDescription) . \')</span>\' : \'\') . \'</div>\';
        $out .= \'                <div class="extraOption__price">€\' . $extraPrice . \' for rental period</div>\';
        $out .= \'              </div>\';

        $out .= \'              <div class="extraOption__actions">\';
        $out .= \'                <div class="extraQty js-extra-qty-wrap" style="display:none;">\';
        $out .= \'                  <button type="button" class="extraQty__btn js-extra-minus" aria-label="Decrease">−</button>\';
        $out .= \'                  <input type="text" class="extraQty__input js-extra-qty" value="1" readonly>\';
        $out .= \'                  <button type="button" class="extraQty__btn js-extra-plus" aria-label="Increase">+</button>\';
        $out .= \'                </div>\';
        $out .= \'              </div>\';
        $out .= \'            </div>\';
        $out .= \'          </label>\';
    }

    $out .= \'        </div>\';
    $out .= \'        <p class="extrasNote">Please note that prices and availability of optional extras are fully controlled by the rental supplier and that prices are subject to change. Those listed here are to be used as a guide only.</p>\';
    $out .= \'      </div>\';
}

$out .= \'      <div class="premiumSummaryCard__block" id="js-extras-summary" style="display:none;">\';
$out .= \'        <div class="premiumSummaryRow">\';
$out .= \'          <span>Optional Extras</span>\';
$out .= \'          <strong id="js-extras-total">€0.00</strong>\';
$out .= \'        </div>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumSummaryCard__total">\';
$out .= \'        <span>Total for \' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</span>\';
$out .= \'        <strong id="js-grand-total">\' . ($baseTotal !== \'\' ? \'€\' . $baseTotal : \'Rate not available\') . \'</strong>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumPriceAlert">\';
$out .= \'        <strong>Don’t miss out!</strong> Prices are currently lower than usual.<br>\';
$out .= \'        Book now and save more.\';
$out .= \'      </div>\';

$step3Link = $modx->makeUrl(43, \'\', [
    \'vehicle_id\'       => $vehicleId,
    \'car_code\'         => $carCode,
    \'pickup_datetime\'  => $pickupDateTime,
    \'dropoff_datetime\' => $dropoffDateTime,
    \'pickup_location\'  => $pickupLocation,
    \'dropoff_location\' => $dropoffLocation,
    \'days\'             => $days
]);

$step3Action = html_entity_decode($modx->makeUrl(43), ENT_QUOTES, \'UTF-8\');

$out .= \'      <form action="\' . htmlspecialchars($step3Action, ENT_QUOTES, \'UTF-8\') . \'" method="post" id="js-step3-form">\';
$out .= \'        <input type="hidden" name="vehicle_id" value="\' . (int)$vehicleId . \'">\';
$out .= \'        <input type="hidden" name="car_code" value="\' . htmlspecialchars($carCode, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="pickup_datetime" value="\' . htmlspecialchars($pickupDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="dropoff_datetime" value="\' . htmlspecialchars($dropoffDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="pickup_location" value="\' . htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="dropoff_location" value="\' . htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="days" value="\' . (int)$days . \'">\';
$out .= \'        <input type="hidden" name="rental_amount" id="js-post-rental-amount" value="\' . htmlspecialchars($displayDiscountedAmount !== \'\' ? $displayDiscountedAmount : \'0.00\', ENT_QUOTES, \'UTF-8\') . \'">\';

$out .= \'        <input type="hidden" name="security_deposit" id="js-post-security-deposit" value="\' . htmlspecialchars($securityDeposit !== \'\' ? $securityDeposit : \'0.00\', ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="extras_total" id="js-post-extras-total" value="0.00">\';
$out .= \'        <input type="hidden" name="grand_total" id="js-post-grand-total" value="\' . htmlspecialchars($baseTotal !== \'\' ? $baseTotal : \'0.00\', ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="extras" id="js-post-extras" value="">\';

$out .= \'        <input type="hidden" name="discount_raw" value="\' . htmlspecialchars($discountAppliesToThisVehicle ? $discountRaw : \'\', ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="discount_percent" value="\' . ($discountAppliesToThisVehicle ? (int)$discountPercent : 0) . \'">\';
$out .= \'        <input type="hidden" name="original_rental_amount" value="\' . htmlspecialchars($displayOriginalAmount !== \'\' ? $displayOriginalAmount : \'0.00\', ENT_QUOTES, \'UTF-8\') . \'">\';

$out .= \'        <button type="submit" class="premiumContinueBtn" id="js-step3-submit">Continue to coverage</button>\';
$out .= \'      </form>\';

$out .= \'    </div>\';
$out .= \'  </aside>\';

$out .= \'</div>\';


$out .= \'<script>
document.addEventListener("DOMContentLoaded", function () {
  const checks = document.querySelectorAll(".js-extra-check");
  const extrasSummary = document.getElementById("js-extras-summary");
  const extrasTotalEl = document.getElementById("js-extras-total");
  const grandTotalEl = document.getElementById("js-grand-total");

  const postRentalAmount = document.getElementById("js-post-rental-amount");
  const postSecurityDeposit = document.getElementById("js-post-security-deposit");
  const postExtrasTotal = document.getElementById("js-post-extras-total");
  const postGrandTotal = document.getElementById("js-post-grand-total");
  const postExtras = document.getElementById("js-post-extras");

const baseTotal = \' . json_encode((float)($baseTotal !== \'\' ? $baseTotal : 0)) . \';
const rentalAmount = \' . json_encode((float)($displayDiscountedAmount !== \'\' ? $displayDiscountedAmount : 0)) . \';
  const securityDeposit = \' . json_encode((float)($securityDeposit !== \'\' ? $securityDeposit : 0)) . \';

  function money(val) {
    return "€" + Number(val).toFixed(2);
  }

  function updateExtraCard(label) {
    const check = label.querySelector(".js-extra-check");
    const qtyWrap = label.querySelector(".js-extra-qty-wrap");

    if (check.checked) {
      label.classList.add("is-selected");
      if (qtyWrap) qtyWrap.style.display = "flex";
    } else {
      label.classList.remove("is-selected");
      if (qtyWrap) qtyWrap.style.display = "none";
    }
  }

  function getSelectedExtras() {
    const selected = [];

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label ? label.querySelector(".js-extra-qty") : null;
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");
      const extraId = check.value || "";
      const titleEl = label ? label.querySelector(".extraOption__title") : null;
      const title = titleEl ? titleEl.textContent.trim() : "";

      if (check.checked) {
        selected.push({
          id: extraId,
          name: title,
          qty: qty,
          price: price,
          total: price * qty
        });
      }
    });

    return selected;
  }

  function updatePostFields(extrasTotal, grandTotal) {
    if (postRentalAmount) postRentalAmount.value = Number(rentalAmount).toFixed(2);
    if (postSecurityDeposit) postSecurityDeposit.value = Number(securityDeposit).toFixed(2);
    if (postExtrasTotal) postExtrasTotal.value = Number(extrasTotal).toFixed(2);
    if (postGrandTotal) postGrandTotal.value = Number(grandTotal).toFixed(2);
    if (postExtras) postExtras.value = JSON.stringify(getSelectedExtras());
  }

  function calcTotals() {
    let extrasTotal = 0;

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label.querySelector(".js-extra-qty");
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");

      if (check.checked) {
        extrasTotal += price * qty;
      }

      updateExtraCard(label);
    });

    if (extrasTotal > 0) {
      extrasSummary.style.display = "";
      extrasTotalEl.textContent = money(extrasTotal);
    } else {
      extrasSummary.style.display = "none";
      extrasTotalEl.textContent = money(0);
    }

    const grandTotal = baseTotal + extrasTotal;
    grandTotalEl.textContent = money(grandTotal);

    updatePostFields(extrasTotal, grandTotal);
  }

  checks.forEach((check) => {
    check.addEventListener("change", calcTotals);

    const label = check.closest(".extraOption");
    const minusBtn = label.querySelector(".js-extra-minus");
    const plusBtn = label.querySelector(".js-extra-plus");
    const qtyInput = label.querySelector(".js-extra-qty");

    if (minusBtn && qtyInput) {
      minusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        val = Math.max(1, val - 1);
        qtyInput.value = val;
        calcTotals();
      });
    }

    if (plusBtn && qtyInput) {
      plusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        if (val < 3) {
          qtyInput.value = val + 1;
          calcTotals();
        }
      });
    }
  });

  calcTotals();
});
</script>\';

$out .= \'<script>
function openVehicleInfoModal() {
  var modal = document.getElementById("vehicleInfoModal");
  if (!modal) return;
  modal.classList.add("is-active");
  modal.setAttribute("aria-hidden", "false");
  document.body.style.overflow = "hidden";
}

function closeVehicleInfoModal() {
  var modal = document.getElementById("vehicleInfoModal");
  if (!modal) return;
  modal.classList.remove("is-active");
  modal.setAttribute("aria-hidden", "true");
  document.body.style.overflow = "";
}

document.addEventListener("keydown", function(e) {
  if (e.key === "Escape") {
    closeVehicleInfoModal();
  }
});
</script>\';
$out .= \'<script>
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("rentalConditionsModal");
  const openBtn = document.getElementById("openRentalConditions");
  const closeBtns = modal ? modal.querySelectorAll("[data-close-modal]") : [];

  function openModal() {
    if (!modal) return;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    if (!modal) return;
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  if (openBtn) {
    openBtn.addEventListener("click", openModal);
  }

  closeBtns.forEach((btn) => {
    btn.addEventListener("click", closeModal);
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeModal();
    }
  });
});
</script>\';

$out .= \'<script>
document.addEventListener("DOMContentLoaded", function () {
  const checks = document.querySelectorAll(".js-extra-check");
  const extrasSummary = document.getElementById("js-extras-summary");
  const extrasTotalEl = document.getElementById("js-extras-total");
  const grandTotalEl = document.getElementById("js-grand-total");
  const baseTotal = \' . json_encode((float)($baseTotal !== \'\' ? $baseTotal : 0)) . \';

  function money(val) {
    return "€" + Number(val).toFixed(2);
  }

  function updateExtraCard(label) {
    const check = label.querySelector(".js-extra-check");
    const qtyWrap = label.querySelector(".js-extra-qty-wrap");
    if (check.checked) {
      label.classList.add("is-selected");
      if (qtyWrap) qtyWrap.style.display = "flex";
    } else {
      label.classList.remove("is-selected");
      if (qtyWrap) qtyWrap.style.display = "none";
    }
  }

  function calcTotals() {
    let extrasTotal = 0;

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label.querySelector(".js-extra-qty");
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");

      if (check.checked) {
        extrasTotal += price * qty;
      }

      updateExtraCard(label);
    });

    if (extrasTotal > 0) {
      extrasSummary.style.display = "";
      extrasTotalEl.textContent = money(extrasTotal);
    } else {
      extrasSummary.style.display = "none";
      extrasTotalEl.textContent = money(0);
    }

    grandTotalEl.textContent = money(baseTotal + extrasTotal);
  }

  checks.forEach((check) => {
    check.addEventListener("change", calcTotals);

    const label = check.closest(".extraOption");
    const minusBtn = label.querySelector(".js-extra-minus");
    const plusBtn = label.querySelector(".js-extra-plus");
    const qtyInput = label.querySelector(".js-extra-qty");

    if (minusBtn && qtyInput) {
      minusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        val = Math.max(1, val - 1);
        qtyInput.value = val;
        calcTotals();
      });
    }

    if (plusBtn && qtyInput) {
      plusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        if (val < 3) {
          qtyInput.value = val + 1;
          calcTotals();
        }
      });
    }
  });

  calcTotals();
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

/**
 * Save selected vehicle from POST
 */
if ($_SERVER[\'REQUEST_METHOD\'] === \'POST\') {
    if (isset($_POST[\'vehicle_id\']) || isset($_POST[\'car_code\'])) {
        $_SESSION[\'selected_vehicle\'] = [
            \'vehicle_id\' => trim($_POST[\'vehicle_id\'] ?? \'\'),
            \'car_code\'   => trim($_POST[\'car_code\'] ?? \'\'),
        ];
    }
}

$selectedVehicle = $_SESSION[\'selected_vehicle\'] ?? [];
$search          = $_SESSION[\'rent_search\'] ?? [];

$discountRaw = trim($_SESSION[\'rent_discount\'] ?? \'\');
$offerCategory = trim($_SESSION[\'rent_offer_category\'] ?? \'\');
$discountPercent = 0;

if ($discountRaw !== \'\') {
    $discountPercent = (int)preg_replace(\'/[^0-9]/\', \'\', $discountRaw);
}

$vehicleId = isset($selectedVehicle[\'vehicle_id\']) ? (int)$selectedVehicle[\'vehicle_id\'] : 0;
$carCode   = trim($selectedVehicle[\'car_code\'] ?? \'\');

$pickupDateTime  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropoffDateTime = trim($search[\'dropoff_datetime\'] ?? \'\');
$pickupLocation  = trim($search[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($search[\'dropoff_location\'] ?? \'\');

// if dropoff is empty, use pickup location
if ($dropoffLocation === \'\') {
    $dropoffLocation = $pickupLocation;
}

if ($vehicleId <= 0 && $carCode === \'\') {
    return \'<p>Vehicle not selected.</p>\';
}

$pickupDate  = ($pickupDateTime !== \'\' && strtotime($pickupDateTime)) ? date(\'Y-m-d\', strtotime($pickupDateTime)) : \'\';
$dropoffDate = ($dropoffDateTime !== \'\' && strtotime($dropoffDateTime)) ? date(\'Y-m-d\', strtotime($dropoffDateTime)) : \'\';

$days = 0;
if ($pickupDate && $dropoffDate) {
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
        LEFT JOIN car_rental r
          ON r.car_code = v.car_code
         AND :pickup_date >= DATE(r.start_date)
         AND :dropoff_date <= DATE(r.end_date)
        WHERE " . implode(\' AND \', $where) . "
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare deal query.</p>\';

$stmt->bindValue(\':pickup_date\', $pickupDate, PDO::PARAM_STR);
$stmt->bindValue(\':dropoff_date\', $dropoffDate, PDO::PARAM_STR);

foreach ($params as $key => $value) {
    if ($key === \':vehicle_id\') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return \'<p>Could not load deal: \' . htmlspecialchars($error[2]) . \'</p>\';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return \'<p>Vehicle deal not found.</p>\';

if (!function_exists(\'step2CalculatePrice\')) {
    function step2CalculatePrice($modx, $carCode, $pickupDate, $dropoffDate) {
        if (!$carCode || !$pickupDate || !$dropoffDate) return \'\';

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);
        if (!$start || !$end || $end < $start) return \'\';

        $days = max(1, (int)(($end - $start) / 86400) + 1);

        $sql = "SELECT duration, rate
                FROM car_rental
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
            $duration = (int)($r[\'duration\'] ?? 0);
            $rate     = (float)($r[\'rate\'] ?? 0);

            if ($duration > 0) {
                $rates[$duration] = $rate;
            }
        }

        if (!$rates) return \'\';

        ksort($rates);

        $maxDuration = max(array_keys($rates));
        $lastRate    = (float)$rates[$maxDuration];
        $total       = 0.0;

        for ($d = 1; $d <= $days; $d++) {
            if (isset($rates[$d])) {
                $total += (float)$rates[$d];
            } elseif ($d > $maxDuration) {
                $total += $lastRate;
            } else {
                // missing duration between 1 and max duration
                return \'\';
            }
        }

        return number_format($total, 2, \'.\', \'\');
    }
}

$amount = step2CalculatePrice($modx, $row[\'car_code\'], $pickupDate, $dropoffDate);

$originalAmount = $amount !== \'\' ? (float)$amount : 0.00;
$discountedAmount = $originalAmount;

$vehicleCategory = trim((string)($row[\'car_category\'] ?? \'\'));

$discountAppliesToThisVehicle = (
    $discountPercent > 0 &&
    $originalAmount > 0 &&
    $offerCategory !== \'\' &&
    strcasecmp($vehicleCategory, $offerCategory) === 0
);

if ($discountAppliesToThisVehicle) {
    $discountedAmount = $originalAmount - (($originalAmount * $discountPercent) / 100);
}

$displayOriginalAmount = $originalAmount > 0 ? number_format($originalAmount, 2, \'.\', \'\') : \'\';
$displayDiscountedAmount = $discountedAmount > 0 ? number_format($discountedAmount, 2, \'.\', \'\') : \'\';

$securityDeposit = isset($row[\'deposit_amount\']) && $row[\'deposit_amount\'] !== \'\'
    ? number_format((float)$row[\'deposit_amount\'], 2, \'.\', \'\')
    : \'\';

$baseTotal = $displayDiscountedAmount !== \'\'
    ? number_format((float)$displayDiscountedAmount, 2, \'.\', \'\')
    : \'\';


$pickupText = $pickupDateTime && strtotime($pickupDateTime) ? date(\'d M Y, H:i\', strtotime($pickupDateTime)) : \'\';
$dropoffText = $dropoffDateTime && strtotime($dropoffDateTime) ? date(\'d M Y, H:i\', strtotime($dropoffDateTime)) : \'\';

$extras = [];
$extraStmt = $modx->prepare("SELECT extra_id, name, description, price FROM extras ORDER BY extra_id ASC");
if ($extraStmt && $extraStmt->execute()) {
    $extras = $extraStmt->fetchAll(PDO::FETCH_ASSOC);
}

$out = \'\';
$out .= \'<div class="premiumDealLayout">\';

$out .= \'  <div class="premiumDealLayout__main">\';

$out .= \'    <div class="premiumDealCard premiumDealCard--hero">\';
if ($discountAppliesToThisVehicle) {
    $out .= \'      <div class="premiumDiscountNotice">\';
    $out .= \'        <span class="premiumDiscountNotice__badge">Discount Applied</span>\';
    $out .= \'        <span class="premiumDiscountNotice__text">\' . htmlspecialchars($discountRaw, ENT_QUOTES, \'UTF-8\') . \' offer is active for this booking.</span>\';
    $out .= \'      </div>\';
}

$out .= \'      <div class="premiumDealCard__badges">\';
$out .= \'        <span class="premiumBadge premiumBadge--gold">Excellent service</span>\';
$out .= \'        <span class="premiumBadge premiumBadge--blue">Pay part now</span>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumDealHero">\';
$out .= \'        <div class="premiumDealHero__left">\';
$out .= \'          <div class="premiumDealHero__titleRow">\';
$out .= \'            <h2 class="premiumDealHero__title">\' . htmlspecialchars($row[\'car_model\']) . \'</h2>\';
$out .= \'          </div>\';

$out .= \'          <div class="premiumDealHero__subtitleWrap">\';
$out .= \'             <div class="premiumDealHero__subtitle">or similar \' . htmlspecialchars($row[\'car_category\']) . \'</div>\';
$out .= \'             <div class="premiumInfoTooltip">\';
$out .= \'                 <button type="button" class="premiumInfoTrigger" aria-label="Vehicle availability information">\';
$out .= \'                     <img src="assets/images/information.svg" alt="Info" class="premiumInfoIcon">\';
$out .= \'                 </button>\';

$out .= \'                 <div class="premiumTooltipBox">\';
$out .= \'                     <strong class="mb-3">What does "or similar" mean?</strong>\';
$out .= \'                     <p>If the exact model isn’t available, you’ll get a car in the same category that’s the same size and has the same number of doors, transmission type, and features. This is standard for most car rental suppliers.</p>\';
$out .= \'                 </div>\';

$out .= \'             </div>\';
$out .= \'          </div>\';
$out .= \'          <div class="premiumSpecs">\';
$out .= \'            <span class="premiumSpecs__item">\' . htmlspecialchars($row[\'transmission_type\'] ?: \'Manual\') . \'</span>\';
$out .= \'            <span class="premiumSpecs__item">\' . (int)$row[\'pax_count\'] . \' Seats</span>\';
$out .= \'            <span class="premiumSpecs__item">\' . (int)$row[\'luggage_count\'] . \' Luggages</span>\';
$out .= \'            <span class="premiumSpecs__item">Air Conditioning</span>\';
$out .= \'          </div>\';

$out .= \'          <div class="premiumBookingMeta">\';
if ($pickupLocation !== \'\') {
    $out .= \'            <div><strong>Pick-up:</strong> \' . htmlspecialchars($pickupLocation) . ($pickupText ? \' <span class="premiumMuted">(\' . htmlspecialchars($pickupText) . \')</span>\' : \'\') . \'</div>\';
}
if ($dropoffLocation !== \'\') {
    $out .= \'            <div><strong>Drop-off:</strong> \' . htmlspecialchars($dropoffLocation) . ($dropoffText ? \' <span class="premiumMuted">(\' . htmlspecialchars($dropoffText) . \')</span>\' : \'\') . \'</div>\';
}
$out .= \'          </div>\';
$out .= \'        </div>\';

$out .= \'        <div class="premiumDealHero__right">\';
$out .= \'          <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="premiumDealHero__image">\';
$out .= \'        </div>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="premiumDealCard">\';
$out .= \'      <h3 class="premiumSectionTitle">Included in your offer</h3>\';
$out .= \'      <ul class="premiumIncludedList">\';
$out .= \'        <li>Unlimited mileage</li>\';
$out .= \'        <li>Theft Protection</li>\';
$out .= \'        <li>Third Party Liability (TPL)</li>\';
$out .= \'      </ul>\';
$out .= \'    </div>\';

$out .= \'    <div class="premiumDealCard premiumDealCard--soft">\';
$out .= \'      <div class="premiumCoverageBanner">\';
$out .= \'        <div class="premiumCoverageBanner__text">\';
$out .= \'          <strong>Add coverage in the next step...</strong><br>\';
$out .= \'        </div>\';
$out .= \'        <div class="premiumCoverageBanner__icon">🛡️</div>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="premiumDealCard">\';
$out .= \'      <div class="premiumInfoBlock">\';
$out .= \'        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Important to know</h3>\';
$out .= \'        <ul class="premiumInfoList">\';
$out .= \'          <li>There is a security deposit of EUR 700</li>\';
$out .= \'          <li>The supplier will hold/charge a deposit on the main driver&#39;s credit card at pick-up. If no charges are incurred after the rental, it will be released.</li>\';
$out .= \'        </ul>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumInfoBlock">\';
$out .= \'        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Bring your documents</h3>\';
$out .= \'        <ul class="premiumInfoList">\';
$out .= \'          <li>Passport or ID card</li>\';
$out .= \'          <li>Driver&#39;s license</li>\';
$out .= \'        </ul>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumInfoBlock">\';
$out .= \'        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Car has unlimited mileage</h3>\';
$out .= \'        <ul class="premiumInfoList">\';
$out .= \'          <li>There is no limit on how many kilometers/miles can be traveled.</li>\';
$out .= \'        </ul>\';
$out .= \'      </div>\';

$out .= \'      <button type="button" class="premiumConditionsBtn" id="openRentalConditions">See all rental conditions</button>\';
$out .= \'    </div>\';

$out .= \'    <div class="rentalModal" id="rentalConditionsModal" aria-hidden="true">\';
$out .= \'      <div class="rentalModal__backdrop" data-close-modal></div>\';
$out .= \'      <div class="rentalModal__dialog" role="dialog" aria-modal="true" aria-labelledby="rentalConditionsTitle">\';
$out .= \'        <button type="button" class="rentalModal__close" data-close-modal aria-label="Close">×</button>\';
$out .= \'        <h3 class="rentalModal__title" id="rentalConditionsTitle">Rental conditions</h3>\';
$out .= \'        <div class="rentalModal__content">\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Deposit and payment cards</h4>\';

$out .= \'            <h5>Security deposit</h5>\';
$out .= \'            <p>The supplier will hold a deposit of € 700.00 on your card when you pick up the car. If no charges are incurred after the rental, it will be released.</p>\';

$out .= \'            <h5>Payment card</h5>\';
$out .= \'            <p>You’ll need a credit card in the main driver’s full name at pick-up for payment and any required deposit.</p>\';

$out .= \'            <h5>Accepted cards</h5>\';
$out .= \'            <ul>\';
$out .= \'              <li>American Express Credit</li>\';
$out .= \'              <li>Visa Credit</li>\';
$out .= \'              <li>MasterCard Credit</li>\';
$out .= \'            </ul>\';

$out .= \'            <h5>Not accepted</h5>\';
$out .= \'            <ul>\';
$out .= \'              <li>Debit cards</li>\';
$out .= \'              <li>Cards not in main driver&#39;s name or without numbers</li>\';
$out .= \'              <li>Virtual cards on your phone (e.g., Google Pay, Apple Pay, etc.)</li>\';
$out .= \'              <li>Visa Electron</li>\';
$out .= \'              <li>Cards issued by online-only banks</li>\';
$out .= \'            </ul>\';

$out .= \'            <h5>Please note</h5>\';
$out .= \'            <p>The card must have the number printed on it. The card must have chip and PIN capability.</p>\';
$out .= \'          </div>\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Included protection</h4>\';
$out .= \'            <p><strong>€ 700.00 excess / deductible</strong></p>\';

$out .= \'            <h5>Included insurance</h5>\';

$out .= \'            <h5>Collision Damage Waiver</h5>\';
$out .= \'            <p><strong>Deductible:</strong> € 700.00</p>\';
$out .= \'            <p>You&#39;ll have to pay at most the deductible if the car&#39;s bodywork is damaged (other parts of the car aren&#39;t covered).</p>\';

$out .= \'            <h5>Theft Protection</h5>\';
$out .= \'            <p>You&#39;ll have to pay at most the deductible if the car is stolen.</p>\';

$out .= \'            <h5>Third Party Liability (TPL)</h5>\';
$out .= \'            <p><strong>No limit</strong></p>\';
$out .= \'            <p>Mandatory coverage for injuries and damage you may cause to others while driving the car.</p>\';
$out .= \'          </div>\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Fuel policy</h4>\';
$out .= \'            <p><strong>Full to full</strong></p>\';
$out .= \'            <p>The vehicle is provided with a full tank of fuel and must be returned with the same amount in order to avoid additional charges.</p>\';
$out .= \'          </div>\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Mileage</h4>\';
$out .= \'            <p><strong>Unlimited mileage</strong></p>\';
$out .= \'            <p>There is no limit on how many kilometers/miles can be traveled.</p>\';
$out .= \'          </div>\';

$out .= \'          <div class="rentalModal__section">\';
$out .= \'            <h4>Driver Requirements</h4>\';
$out .= \'            <ul>\';
$out .= \'              <li>Minimum rental age is 21 years.</li>\';
$out .= \'              <li>A young driver fee applies to drivers under the age of 25.</li>\';
$out .= \'              <li>There is no maximum age.</li>\';
$out .= \'              <li>A Senior driver fee is not applied.</li>\';
$out .= \'              <li>The driver license must have been issued by authorized authorities at least 2 year(s) before the date of the commencement of the rental.</li>\';
$out .= \'              <li>A driver license printed using a non-Roman alphabet (Arabic, Japanese, Cyrillic, etc) must be supplemented by an International Driving Permit.</li>\';
$out .= \'              <li>Please note that the International Driving Permit is valid only if it is accompanied by a regular driver&#39;s license, is issued by an official authority or government-authorized organization, and is in physical (not digital) form.</li>\';
$out .= \'              <li>Licences issued in China are not accepted.</li>\';
$out .= \'              <li>In order to pick up the car, the following documents are required: passport, valid driver license, credit card on a main driver&#39;s name, booking voucher.</li>\';
$out .= \'            </ul>\';
$out .= \'          </div>\';

$out .= \'        </div>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'  </div>\';

$out .= \'  <aside class="premiumDealLayout__sidebar">\';
$out .= \'    <div class="premiumSummaryCard">\';

$out .= \'      <div class="premiumSummaryCard__block">\';
$out .= \'        <div class="premiumSummaryRow">\';
$out .= \'          <span>Rental Payment</span>\';

if ($discountAppliesToThisVehicle && $displayOriginalAmount !== \'\' && $displayDiscountedAmount !== \'\') {
    $out .= \'      <strong id="js-rental-payment">\';
    $out .= \'        <span style="display:block; text-decoration:line-through; color:#999 !important; font-size:14px; text-align: end;">€ \' . $displayOriginalAmount . \'</span>\';
    $out .= \'        <span style="display:block; color:#d62828; font-size:22px; font-weight:700;">€ \' . $displayDiscountedAmount . \'</span>\';
    $out .= \'      </strong>\';
} else {
    $out .= \'      <strong id="js-rental-payment">\' . ($displayOriginalAmount !== \'\' ? \'€ \' . $displayOriginalAmount : \'N/A\') . \'</strong>\';
}
$out .= \'        </div>\';
$out .= \'      </div>\';

// $out .= \'      <div class="premiumSummaryCard__block">\';
// $out .= \'        <div class="premiumSummaryRow">\';
// $out .= \'          <span>Security Deposit</span>\';
// $out .= \'          <strong id="js-security-deposit">\' . ($securityDeposit !== \'\' ? \'€\' . $securityDeposit : \'N/A\') . \'</strong>\';
// $out .= \'        </div>\';
// $out .= \'      </div>\';

if ($extras) {
    $out .= \'      <div class="premiumSummaryCard__block premiumSummaryCard__extras">\';
    $out .= \'        <div class="premiumSummaryCard__heading">Optional extras</div>\';
    $out .= \'        <div class="extrasList">\';

    foreach ($extras as $extra) {
        $extraId = (int)$extra[\'extra_id\'];
        $extraName = htmlspecialchars($extra[\'name\'] ?? \'\');
        $extraDescription = trim((string)($extra[\'description\'] ?? \'\'));
        $extraPrice = number_format((float)($extra[\'price\'] ?? 0), 2, \'.\', \'\');

        $out .= \'          <label class="extraOption" data-extra-id="\' . $extraId . \'">\';
        $out .= \'            <input type="checkbox" class="extraOption__checkbox js-extra-check" value="\' . $extraId . \'" data-price="\' . $extraPrice . \'">\';
        $out .= \'            <div class="extraOption__main">\';
        $out .= \'              <div class="extraOption__checkWrap">\';
        $out .= \'                <span class="extraOption__fakebox"></span>\';
        $out .= \'              </div>\';

        $out .= \'              <div class="extraOption__info">\';
        $out .= \'                <div class="extraOption__title">\' . $extraName . ($extraDescription !== \'\' ? \' <span class="extraOption__descInline">(\' . htmlspecialchars($extraDescription) . \')</span>\' : \'\') . \'</div>\';
        $out .= \'                <div class="extraOption__price">€\' . $extraPrice . \' for rental period</div>\';
        $out .= \'              </div>\';

        $out .= \'              <div class="extraOption__actions">\';
        $out .= \'                <div class="extraQty js-extra-qty-wrap" style="display:none;">\';
        $out .= \'                  <button type="button" class="extraQty__btn js-extra-minus" aria-label="Decrease">−</button>\';
        $out .= \'                  <input type="text" class="extraQty__input js-extra-qty" value="1" readonly>\';
        $out .= \'                  <button type="button" class="extraQty__btn js-extra-plus" aria-label="Increase">+</button>\';
        $out .= \'                </div>\';
        $out .= \'              </div>\';
        $out .= \'            </div>\';
        $out .= \'          </label>\';
    }

    $out .= \'        </div>\';
    $out .= \'        <p class="extrasNote">Please note that prices and availability of optional extras are fully controlled by the rental supplier and that prices are subject to change. Those listed here are to be used as a guide only.</p>\';
    $out .= \'      </div>\';
}

$out .= \'      <div class="premiumSummaryCard__block" id="js-extras-summary" style="display:none;">\';
$out .= \'        <div class="premiumSummaryRow">\';
$out .= \'          <span>Optional Extras</span>\';
$out .= \'          <strong id="js-extras-total">€0.00</strong>\';
$out .= \'        </div>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumSummaryCard__total">\';
$out .= \'        <span>Total for \' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</span>\';
$out .= \'        <strong id="js-grand-total">\' . ($baseTotal !== \'\' ? \'€\' . $baseTotal : \'Rate not available\') . \'</strong>\';
$out .= \'      </div>\';

$out .= \'      <div class="premiumPriceAlert">\';
$out .= \'        <strong>Don’t miss out!</strong> Prices are currently lower than usual.<br>\';
$out .= \'        Book now and save more.\';
$out .= \'      </div>\';

$step3Link = $modx->makeUrl(43, \'\', [
    \'vehicle_id\'       => $vehicleId,
    \'car_code\'         => $carCode,
    \'pickup_datetime\'  => $pickupDateTime,
    \'dropoff_datetime\' => $dropoffDateTime,
    \'pickup_location\'  => $pickupLocation,
    \'dropoff_location\' => $dropoffLocation,
    \'days\'             => $days
]);

$step3Action = html_entity_decode($modx->makeUrl(43), ENT_QUOTES, \'UTF-8\');

$out .= \'      <form action="\' . htmlspecialchars($step3Action, ENT_QUOTES, \'UTF-8\') . \'" method="post" id="js-step3-form">\';
$out .= \'        <input type="hidden" name="vehicle_id" value="\' . (int)$vehicleId . \'">\';
$out .= \'        <input type="hidden" name="car_code" value="\' . htmlspecialchars($carCode, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="pickup_datetime" value="\' . htmlspecialchars($pickupDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="dropoff_datetime" value="\' . htmlspecialchars($dropoffDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="pickup_location" value="\' . htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="dropoff_location" value="\' . htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="days" value="\' . (int)$days . \'">\';
$out .= \'        <input type="hidden" name="rental_amount" id="js-post-rental-amount" value="\' . htmlspecialchars($displayDiscountedAmount !== \'\' ? $displayDiscountedAmount : \'0.00\', ENT_QUOTES, \'UTF-8\') . \'">\';

$out .= \'        <input type="hidden" name="security_deposit" id="js-post-security-deposit" value="\' . htmlspecialchars($securityDeposit !== \'\' ? $securityDeposit : \'0.00\', ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="extras_total" id="js-post-extras-total" value="0.00">\';
$out .= \'        <input type="hidden" name="grand_total" id="js-post-grand-total" value="\' . htmlspecialchars($baseTotal !== \'\' ? $baseTotal : \'0.00\', ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="extras" id="js-post-extras" value="">\';

$out .= \'        <input type="hidden" name="discount_raw" value="\' . htmlspecialchars($discountAppliesToThisVehicle ? $discountRaw : \'\', ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'        <input type="hidden" name="discount_percent" value="\' . ($discountAppliesToThisVehicle ? (int)$discountPercent : 0) . \'">\';
$out .= \'        <input type="hidden" name="original_rental_amount" value="\' . htmlspecialchars($displayOriginalAmount !== \'\' ? $displayOriginalAmount : \'0.00\', ENT_QUOTES, \'UTF-8\') . \'">\';

$out .= \'        <button type="submit" class="premiumContinueBtn" id="js-step3-submit">Continue to coverage</button>\';
$out .= \'      </form>\';

$out .= \'    </div>\';
$out .= \'  </aside>\';

$out .= \'</div>\';


$out .= \'<script>
document.addEventListener("DOMContentLoaded", function () {
  const checks = document.querySelectorAll(".js-extra-check");
  const extrasSummary = document.getElementById("js-extras-summary");
  const extrasTotalEl = document.getElementById("js-extras-total");
  const grandTotalEl = document.getElementById("js-grand-total");

  const postRentalAmount = document.getElementById("js-post-rental-amount");
  const postSecurityDeposit = document.getElementById("js-post-security-deposit");
  const postExtrasTotal = document.getElementById("js-post-extras-total");
  const postGrandTotal = document.getElementById("js-post-grand-total");
  const postExtras = document.getElementById("js-post-extras");

const baseTotal = \' . json_encode((float)($baseTotal !== \'\' ? $baseTotal : 0)) . \';
const rentalAmount = \' . json_encode((float)($displayDiscountedAmount !== \'\' ? $displayDiscountedAmount : 0)) . \';
  const securityDeposit = \' . json_encode((float)($securityDeposit !== \'\' ? $securityDeposit : 0)) . \';

  function money(val) {
    return "€" + Number(val).toFixed(2);
  }

  function updateExtraCard(label) {
    const check = label.querySelector(".js-extra-check");
    const qtyWrap = label.querySelector(".js-extra-qty-wrap");

    if (check.checked) {
      label.classList.add("is-selected");
      if (qtyWrap) qtyWrap.style.display = "flex";
    } else {
      label.classList.remove("is-selected");
      if (qtyWrap) qtyWrap.style.display = "none";
    }
  }

  function getSelectedExtras() {
    const selected = [];

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label ? label.querySelector(".js-extra-qty") : null;
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");
      const extraId = check.value || "";
      const titleEl = label ? label.querySelector(".extraOption__title") : null;
      const title = titleEl ? titleEl.textContent.trim() : "";

      if (check.checked) {
        selected.push({
          id: extraId,
          name: title,
          qty: qty,
          price: price,
          total: price * qty
        });
      }
    });

    return selected;
  }

  function updatePostFields(extrasTotal, grandTotal) {
    if (postRentalAmount) postRentalAmount.value = Number(rentalAmount).toFixed(2);
    if (postSecurityDeposit) postSecurityDeposit.value = Number(securityDeposit).toFixed(2);
    if (postExtrasTotal) postExtrasTotal.value = Number(extrasTotal).toFixed(2);
    if (postGrandTotal) postGrandTotal.value = Number(grandTotal).toFixed(2);
    if (postExtras) postExtras.value = JSON.stringify(getSelectedExtras());
  }

  function calcTotals() {
    let extrasTotal = 0;

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label.querySelector(".js-extra-qty");
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");

      if (check.checked) {
        extrasTotal += price * qty;
      }

      updateExtraCard(label);
    });

    if (extrasTotal > 0) {
      extrasSummary.style.display = "";
      extrasTotalEl.textContent = money(extrasTotal);
    } else {
      extrasSummary.style.display = "none";
      extrasTotalEl.textContent = money(0);
    }

    const grandTotal = baseTotal + extrasTotal;
    grandTotalEl.textContent = money(grandTotal);

    updatePostFields(extrasTotal, grandTotal);
  }

  checks.forEach((check) => {
    check.addEventListener("change", calcTotals);

    const label = check.closest(".extraOption");
    const minusBtn = label.querySelector(".js-extra-minus");
    const plusBtn = label.querySelector(".js-extra-plus");
    const qtyInput = label.querySelector(".js-extra-qty");

    if (minusBtn && qtyInput) {
      minusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        val = Math.max(1, val - 1);
        qtyInput.value = val;
        calcTotals();
      });
    }

    if (plusBtn && qtyInput) {
      plusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        if (val < 3) {
          qtyInput.value = val + 1;
          calcTotals();
        }
      });
    }
  });

  calcTotals();
});
</script>\';

$out .= \'<script>
function openVehicleInfoModal() {
  var modal = document.getElementById("vehicleInfoModal");
  if (!modal) return;
  modal.classList.add("is-active");
  modal.setAttribute("aria-hidden", "false");
  document.body.style.overflow = "hidden";
}

function closeVehicleInfoModal() {
  var modal = document.getElementById("vehicleInfoModal");
  if (!modal) return;
  modal.classList.remove("is-active");
  modal.setAttribute("aria-hidden", "true");
  document.body.style.overflow = "";
}

document.addEventListener("keydown", function(e) {
  if (e.key === "Escape") {
    closeVehicleInfoModal();
  }
});
</script>\';
$out .= \'<script>
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("rentalConditionsModal");
  const openBtn = document.getElementById("openRentalConditions");
  const closeBtns = modal ? modal.querySelectorAll("[data-close-modal]") : [];

  function openModal() {
    if (!modal) return;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    if (!modal) return;
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  if (openBtn) {
    openBtn.addEventListener("click", openModal);
  }

  closeBtns.forEach((btn) => {
    btn.addEventListener("click", closeModal);
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeModal();
    }
  });
});
</script>\';

$out .= \'<script>
document.addEventListener("DOMContentLoaded", function () {
  const checks = document.querySelectorAll(".js-extra-check");
  const extrasSummary = document.getElementById("js-extras-summary");
  const extrasTotalEl = document.getElementById("js-extras-total");
  const grandTotalEl = document.getElementById("js-grand-total");
  const baseTotal = \' . json_encode((float)($baseTotal !== \'\' ? $baseTotal : 0)) . \';

  function money(val) {
    return "€" + Number(val).toFixed(2);
  }

  function updateExtraCard(label) {
    const check = label.querySelector(".js-extra-check");
    const qtyWrap = label.querySelector(".js-extra-qty-wrap");
    if (check.checked) {
      label.classList.add("is-selected");
      if (qtyWrap) qtyWrap.style.display = "flex";
    } else {
      label.classList.remove("is-selected");
      if (qtyWrap) qtyWrap.style.display = "none";
    }
  }

  function calcTotals() {
    let extrasTotal = 0;

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label.querySelector(".js-extra-qty");
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");

      if (check.checked) {
        extrasTotal += price * qty;
      }

      updateExtraCard(label);
    });

    if (extrasTotal > 0) {
      extrasSummary.style.display = "";
      extrasTotalEl.textContent = money(extrasTotal);
    } else {
      extrasSummary.style.display = "none";
      extrasTotalEl.textContent = money(0);
    }

    grandTotalEl.textContent = money(baseTotal + extrasTotal);
  }

  checks.forEach((check) => {
    check.addEventListener("change", calcTotals);

    const label = check.closest(".extraOption");
    const minusBtn = label.querySelector(".js-extra-minus");
    const plusBtn = label.querySelector(".js-extra-plus");
    const qtyInput = label.querySelector(".js-extra-qty");

    if (minusBtn && qtyInput) {
      minusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        val = Math.max(1, val - 1);
        qtyInput.value = val;
        calcTotals();
      });
    }

    if (plusBtn && qtyInput) {
      plusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        if (val < 3) {
          qtyInput.value = val + 1;
          calcTotals();
        }
      });
    }
  });

  calcTotals();
});
</script>\';

return $out;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
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