<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 39,
    'type' => 'document',
    'pagetitle' => 'book-vehicle',
    'longtitle' => '',
    'description' => '',
    'alias' => 'book-vehicle',
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
			  <h1 class="mb-2 bread">Manage Booking</h1>
			  <p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Manage Booking<i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		  </div>
		</div>
</section>

<section id="rentResults" class="rentResults py-5 bg-whitee">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        [[!VehiclesCategoryList? &table=`vehicles`]]
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4">
        [[!RentSearchSummary? &searchPageId=`1`]]
      </div>
      <div class="col-lg-8">
        <h2>All vehicles</h2>
        [[!VehiclesCategoryList? &table=`vehicles` &mode=`list` &tplItem=`VehicleListItemTpl`]]
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    document.querySelectorAll(\'.rentWidgetForm\').forEach((form) => {
      const same = form.querySelector(\'.js-sameLocation\');
      const dropRow = form.querySelector(\'.js-dropoffRow\');
      const dropInput = form.querySelector(\'input[name="dropoff_location"]\');

      const sync = () => {
        const checked = same && same.checked;
        if (dropRow) dropRow.style.display = checked ? \'none\' : \'\';
        // If same location checked, clear dropoff so server treats it as same
        if (checked && dropInput) dropInput.value = \'\';
      };

      if (same) same.addEventListener(\'change\', sync);
      sync();

      // Clear buttons
      form.querySelectorAll(\'.rentWidget__clear\').forEach((btn) => {
        btn.addEventListener(\'click\', () => {
          const input = btn.parentElement.querySelector(\'input\');
          if (input) input.value = \'\';
          input && input.focus();
        });
      });
    });
  });
</script>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    if (window.flatpickr) {
      flatpickr(\'.js-datetime\', {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true
      });
    }
  });
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    if (!window.google || !google.maps || !google.maps.places) return;

    document.querySelectorAll(\'.js-places\').forEach((input) => {
      const ac = new google.maps.places.Autocomplete(input, {
        fields: ["formatted_address", "geometry", "name"],
        // optional: componentRestrictions: { country: "lk" }
      });

      ac.addListener("place_changed", () => {
        const place = ac.getPlace();
        // if user picks a place name, prefer formatted_address if available
        if (place && place.formatted_address) input.value = place.formatted_address;
      });
    });
  });
</script>


<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    document.querySelectorAll(\'.vehicleScroller\').forEach(scroller => {
      const rowId = scroller.getAttribute(\'data-scroller\');
      const row = document.getElementById(rowId);
      if (!row) return;

      const scrollByCards = (dir) => {
        const card = row.querySelector(\'.vehicleCard\');
        const cardW = card ? (card.getBoundingClientRect().width + 12) : 200;
        row.scrollBy({ left: dir * (cardW * 3), behavior: \'smooth\' }); 
      };

      scroller.querySelectorAll(\'.vehicleScroller__btn\').forEach(btn => {
        btn.addEventListener(\'click\', () => {
          const dir = parseInt(btn.getAttribute(\'data-dir\'), 10) || 1;
          scrollByCards(dir);
        });
      });
    });
  });
</script>',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 37,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1772606037,
    'editedby' => 1,
    'editedon' => 1773554794,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1772606100,
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
			  <p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Manage Booking<i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		  </div>
		</div>
</section>

<section id="rentResults" class="rentResults py-5 bg-whitee">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        [[!VehiclesCategoryList? &table=`vehicles`]]
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4">
        [[!RentSearchSummary? &searchPageId=`1`]]
      </div>
      <div class="col-lg-8">
        <h2>All vehicles</h2>
        [[!VehiclesCategoryList? &table=`vehicles` &mode=`list` &tplItem=`VehicleListItemTpl`]]
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    document.querySelectorAll(\'.rentWidgetForm\').forEach((form) => {
      const same = form.querySelector(\'.js-sameLocation\');
      const dropRow = form.querySelector(\'.js-dropoffRow\');
      const dropInput = form.querySelector(\'input[name="dropoff_location"]\');

      const sync = () => {
        const checked = same && same.checked;
        if (dropRow) dropRow.style.display = checked ? \'none\' : \'\';
        // If same location checked, clear dropoff so server treats it as same
        if (checked && dropInput) dropInput.value = \'\';
      };

      if (same) same.addEventListener(\'change\', sync);
      sync();

      // Clear buttons
      form.querySelectorAll(\'.rentWidget__clear\').forEach((btn) => {
        btn.addEventListener(\'click\', () => {
          const input = btn.parentElement.querySelector(\'input\');
          if (input) input.value = \'\';
          input && input.focus();
        });
      });
    });
  });
</script>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    if (window.flatpickr) {
      flatpickr(\'.js-datetime\', {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true
      });
    }
  });
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    if (!window.google || !google.maps || !google.maps.places) return;

    document.querySelectorAll(\'.js-places\').forEach((input) => {
      const ac = new google.maps.places.Autocomplete(input, {
        fields: ["formatted_address", "geometry", "name"],
        // optional: componentRestrictions: { country: "lk" }
      });

      ac.addListener("place_changed", () => {
        const place = ac.getPlace();
        // if user picks a place name, prefer formatted_address if available
        if (place && place.formatted_address) input.value = place.formatted_address;
      });
    });
  });
</script>


<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    document.querySelectorAll(\'.vehicleScroller\').forEach(scroller => {
      const rowId = scroller.getAttribute(\'data-scroller\');
      const row = document.getElementById(rowId);
      if (!row) return;

      const scrollByCards = (dir) => {
        const card = row.querySelector(\'.vehicleCard\');
        const cardW = card ? (card.getBoundingClientRect().width + 12) : 200;
        row.scrollBy({ left: dir * (cardW * 3), behavior: \'smooth\' }); 
      };

      scroller.querySelectorAll(\'.vehicleScroller__btn\').forEach(btn => {
        btn.addEventListener(\'click\', () => {
          const dir = parseInt(btn.getAttribute(\'data-dir\'), 10) || 1;
          scrollByCards(dir);
        });
      });
    });
  });
</script>
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

// document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
//     window.scrollTo({ top: 0, behavior: \'smooth\' });
// });


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

// document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
//     window.scrollTo({ top: 0, behavior: \'smooth\' });
// });


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

// document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
//     window.scrollTo({ top: 0, behavior: \'smooth\' });
// });


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

// document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
//     window.scrollTo({ top: 0, behavior: \'smooth\' });
// });


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
      'VehicleCategoryCardTpl' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'VehicleCategoryCardTpl',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<a class="vehicleCardLink [[+is_active:is=`1`:then=`vehicleCardLink--active`]]" href="[[+cat_link]]">
  <div class="vehicleCard">
    <div class="vehicleCard__top">
      <p class="vehicleCard__title">[[+car_category:ucfirst:htmlent]]</p>
      <div class="vehicleCard__icons"></div>
    </div>

    <div class="text-center d-flex justify-content-around gap-3">
      <span class="vehicleCard__icon">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="#000">
          <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-4.4 0-8 2.2-8 5v3h16v-3c0-2.8-3.6-5-8-5z"/>
        </svg>
        [[+pax_count]]
      </span>

      <span class="vehicleCard__icon">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="#000">
          <path d="M6 7V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v1h1a2 2 0 0 1 2 2v9H3V9a2 2 0 0 1 2-2h1zm2 0h8V6H8v1z"/>
        </svg>
        [[+luggage_count]]
      </span>
    </div>

    <img class="mt-4 vehicleCard__img" src="[[+image]]" alt="[[+car_category:htmlent]]">

    <div class="vehicleCard__price">
      [[+price:isnot=``:then=`from <strong>[[+price]]</strong>`:else=``]]
    </div>
  </div>
</a>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<a class="vehicleCardLink [[+is_active:is=`1`:then=`vehicleCardLink--active`]]" href="[[+cat_link]]">
  <div class="vehicleCard">
    <div class="vehicleCard__top">
      <p class="vehicleCard__title">[[+car_category:ucfirst:htmlent]]</p>
      <div class="vehicleCard__icons"></div>
    </div>

    <div class="text-center d-flex justify-content-around gap-3">
      <span class="vehicleCard__icon">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="#000">
          <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-4.4 0-8 2.2-8 5v3h16v-3c0-2.8-3.6-5-8-5z"/>
        </svg>
        [[+pax_count]]
      </span>

      <span class="vehicleCard__icon">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="#000">
          <path d="M6 7V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v1h1a2 2 0 0 1 2 2v9H3V9a2 2 0 0 1 2-2h1zm2 0h8V6H8v1z"/>
        </svg>
        [[+luggage_count]]
      </span>
    </div>

    <img class="mt-4 vehicleCard__img" src="[[+image]]" alt="[[+car_category:htmlent]]">

    <div class="vehicleCard__price">
      [[+price:isnot=``:then=`from <strong>[[+price]]</strong>`:else=``]]
    </div>
  </div>
</a>',
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
      'VehicleListItemTpl' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'VehicleListItemTpl',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="vehicleListItem d-flex align-items-center mb-3 p-3 border rounded">
  <div class="me-3" style="width:120px; flex:0 0 120px;">
    <img src="[[+image]]" alt="[[+car_category]]" style="width:100%; height:auto; border-radius:8px;">
  </div>
  <div class="flex-grow-1">
    <div class="fw-bold">[[+car_category]]</div>
    <div class="small text-muted">
      Pax: [[+pax_count]] • Luggage: [[+luggage_count]]
    </div>
    [[+price:isnot=``:then=`<div class="mt-1">From: [[+price]]</div>`]]
  </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="vehicleListItem d-flex align-items-center mb-3 p-3 border rounded">
  <div class="me-3" style="width:120px; flex:0 0 120px;">
    <img src="[[+image]]" alt="[[+car_category]]" style="width:100%; height:auto; border-radius:8px;">
  </div>
  <div class="flex-grow-1">
    <div class="fw-bold">[[+car_category]]</div>
    <div class="small text-muted">
      Pax: [[+pax_count]] • Luggage: [[+luggage_count]]
    </div>
    [[+price:isnot=``:then=`<div class="mt-1">From: [[+price]]</div>`]]
  </div>
</div>',
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
      'VehiclesCategoryList' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'VehiclesCategoryList',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => 'require "assets/includes/db_connect.php";

$tpl        = $modx->getOption(\'tpl\', $scriptProperties, \'VehicleCategoryCardTpl\');
$tplItem    = $modx->getOption(\'tplItem\', $scriptProperties, \'VehicleListItemTpl\'); // NEW for list rows
$limit      = (int)$modx->getOption(\'limit\', $scriptProperties, 20);
$table      = $modx->getOption(\'table\', $scriptProperties, \'vehicles\');
$groupBy    = (int)$modx->getOption(\'groupByCategory\', $scriptProperties, 1);
$priceCol   = $modx->getOption(\'priceCol\', $scriptProperties, \'\'); // \'\' disables
$mode       = $modx->getOption(\'mode\', $scriptProperties, \'cards\'); // cards | list

$select = "id, image, car_category, pax_count, luggage_count";
$select .= ($priceCol !== \'\') ? ", {$priceCol} AS price" : ", \'\' AS price";

$currentCat = isset($_GET[\'cat\']) ? trim((string)$_GET[\'cat\']) : \'\';

/**
 * MODE 1: cards (scroller) - first vehicle per category
 */
if ($mode === \'cards\') {

  if ($groupBy) {
    $sql = "SELECT v1.*
            FROM {$table} v1
            INNER JOIN (
              SELECT car_category, MIN(id) AS first_id
              FROM {$table}
              GROUP BY car_category
            ) v2 ON v1.id = v2.first_id
            ORDER BY v1.car_category ASC
            LIMIT :limit";
  } else {
    $sql = "SELECT {$select}
            FROM {$table}
            ORDER BY id DESC
            LIMIT :limit";
  }

  $stmt = $modx->prepare($sql);
  if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';

  $stmt->bindValue(\':limit\', $limit, PDO::PARAM_INT);
  if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (!$rows) return \'<p>No vehicles found.</p>\';

  $uid = \'vehRow_\' . substr(md5(uniqid(\'\', true)), 0, 8);

  $out  = \'<div class="vehicleScroller" data-scroller="\'.$uid.\'">\';
  $out .= \'  <button class="vehicleScroller__btn vehicleScroller__btn--left" type="button" aria-label="Scroll left" data-dir="-1">‹</button>\';
  $out .= \'  <div class="vehicleRow mt-4 mt-lg-0" id="\'.$uid.\'">\';

  foreach ($rows as $row) {
    $cat = (string)($row[\'car_category\'] ?? \'\');

    $params = $_GET;
    $params[\'cat\'] = $cat;
    $link = $modx->makeUrl((int)$modx->resource->get(\'id\'), \'\', $params, \'full\');

    $ph = [
      \'image\'         => $row[\'image\'] ?? \'\',
      \'car_category\'  => $cat,
      \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
      \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
      \'price\'         => ($row[\'price\'] ?? \'\'),
      \'cat_link\'      => $link,
      \'is_active\'     => ($currentCat !== \'\' && strcasecmp($currentCat, $cat) === 0) ? 1 : 0,
    ];

    $out .= $modx->getChunk($tpl, $ph);
  }

  $out .= \'  </div>\';
  $out .= \'  <button class="vehicleScroller__btn vehicleScroller__btn--right" type="button" aria-label="Scroll right" data-dir="1">›</button>\';
  $out .= \'</div>\';

  return $out;
}

/**
 * MODE 2: list - show ALL vehicles, grouped by category, stacked
 */
$sql = "SELECT {$select}
        FROM {$table}
        ORDER BY car_category ASC, id ASC";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';
if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!$rows) return \'<p>No vehicles found.</p>\';

$out = \'\';
$lastCat = null;

foreach ($rows as $row) {
  $cat = (string)($row[\'car_category\'] ?? \'\');

  // If user selected a category (?cat=...), only show that category in the list
  if ($currentCat !== \'\' && strcasecmp($currentCat, $cat) !== 0) {
    continue;
  }

  // category heading
  if ($lastCat === null || strcasecmp($lastCat, $cat) !== 0) {
    if ($lastCat !== null) {
      $out .= \'</div>\'; // close previous category group
    }
    $out .= \'<div class="vehicleGroup">\';
    $lastCat = $cat;
  }

  $ph = [
    \'id\'            => (int)($row[\'id\'] ?? 0),
    \'image\'         => $row[\'image\'] ?? \'\',
    \'car_category\'  => $cat,
    \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
    \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
    \'price\'         => ($row[\'price\'] ?? \'\'),
  ];

  // each vehicle one under the other (your tplItem should be a vertical row/card)
  $out .= $modx->getChunk($tplItem, $ph);
}

if ($lastCat !== null) {
  $out .= \'</div>\'; // close last group
}

return $out;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => 'require "assets/includes/db_connect.php";

$tpl        = $modx->getOption(\'tpl\', $scriptProperties, \'VehicleCategoryCardTpl\');
$tplItem    = $modx->getOption(\'tplItem\', $scriptProperties, \'VehicleListItemTpl\'); // NEW for list rows
$limit      = (int)$modx->getOption(\'limit\', $scriptProperties, 20);
$table      = $modx->getOption(\'table\', $scriptProperties, \'vehicles\');
$groupBy    = (int)$modx->getOption(\'groupByCategory\', $scriptProperties, 1);
$priceCol   = $modx->getOption(\'priceCol\', $scriptProperties, \'\'); // \'\' disables
$mode       = $modx->getOption(\'mode\', $scriptProperties, \'cards\'); // cards | list

$select = "id, image, car_category, pax_count, luggage_count";
$select .= ($priceCol !== \'\') ? ", {$priceCol} AS price" : ", \'\' AS price";

$currentCat = isset($_GET[\'cat\']) ? trim((string)$_GET[\'cat\']) : \'\';

/**
 * MODE 1: cards (scroller) - first vehicle per category
 */
if ($mode === \'cards\') {

  if ($groupBy) {
    $sql = "SELECT v1.*
            FROM {$table} v1
            INNER JOIN (
              SELECT car_category, MIN(id) AS first_id
              FROM {$table}
              GROUP BY car_category
            ) v2 ON v1.id = v2.first_id
            ORDER BY v1.car_category ASC
            LIMIT :limit";
  } else {
    $sql = "SELECT {$select}
            FROM {$table}
            ORDER BY id DESC
            LIMIT :limit";
  }

  $stmt = $modx->prepare($sql);
  if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';

  $stmt->bindValue(\':limit\', $limit, PDO::PARAM_INT);
  if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (!$rows) return \'<p>No vehicles found.</p>\';

  $uid = \'vehRow_\' . substr(md5(uniqid(\'\', true)), 0, 8);

  $out  = \'<div class="vehicleScroller" data-scroller="\'.$uid.\'">\';
  $out .= \'  <button class="vehicleScroller__btn vehicleScroller__btn--left" type="button" aria-label="Scroll left" data-dir="-1">‹</button>\';
  $out .= \'  <div class="vehicleRow mt-4 mt-lg-0" id="\'.$uid.\'">\';

  foreach ($rows as $row) {
    $cat = (string)($row[\'car_category\'] ?? \'\');

    $params = $_GET;
    $params[\'cat\'] = $cat;
    $link = $modx->makeUrl((int)$modx->resource->get(\'id\'), \'\', $params, \'full\');

    $ph = [
      \'image\'         => $row[\'image\'] ?? \'\',
      \'car_category\'  => $cat,
      \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
      \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
      \'price\'         => ($row[\'price\'] ?? \'\'),
      \'cat_link\'      => $link,
      \'is_active\'     => ($currentCat !== \'\' && strcasecmp($currentCat, $cat) === 0) ? 1 : 0,
    ];

    $out .= $modx->getChunk($tpl, $ph);
  }

  $out .= \'  </div>\';
  $out .= \'  <button class="vehicleScroller__btn vehicleScroller__btn--right" type="button" aria-label="Scroll right" data-dir="1">›</button>\';
  $out .= \'</div>\';

  return $out;
}

/**
 * MODE 2: list - show ALL vehicles, grouped by category, stacked
 */
$sql = "SELECT {$select}
        FROM {$table}
        ORDER BY car_category ASC, id ASC";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';
if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!$rows) return \'<p>No vehicles found.</p>\';

$out = \'\';
$lastCat = null;

foreach ($rows as $row) {
  $cat = (string)($row[\'car_category\'] ?? \'\');

  // If user selected a category (?cat=...), only show that category in the list
  if ($currentCat !== \'\' && strcasecmp($currentCat, $cat) !== 0) {
    continue;
  }

  // category heading
  if ($lastCat === null || strcasecmp($lastCat, $cat) !== 0) {
    if ($lastCat !== null) {
      $out .= \'</div>\'; // close previous category group
    }
    $out .= \'<div class="vehicleGroup">\';
    $lastCat = $cat;
  }

  $ph = [
    \'id\'            => (int)($row[\'id\'] ?? 0),
    \'image\'         => $row[\'image\'] ?? \'\',
    \'car_category\'  => $cat,
    \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
    \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
    \'price\'         => ($row[\'price\'] ?? \'\'),
  ];

  // each vehicle one under the other (your tplItem should be a vertical row/card)
  $out .= $modx->getChunk($tplItem, $ph);
}

if ($lastCat !== null) {
  $out .= \'</div>\'; // close last group
}

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
      'RentSearchSummary' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'RentSearchSummary',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Snippet: RentSearchSummary (editable widget)
 * - Google Places on pickup/dropoff
 * - Flatpickr on pickup/dropoff datetime
 * - Toggle drop-off field when "same location" unchecked
 * - Submits to results page with GET params
 */

$g = function(string $key, string $default = \'\') {
  return isset($_GET[$key]) ? trim((string)$_GET[$key]) : $default;
};
$h = function($v) { return htmlspecialchars((string)$v, ENT_QUOTES, \'UTF-8\'); };

$pickup  = $g(\'pickup_location\');
$dropoff = $g(\'dropoff_location\');
$pickDT  = $g(\'pickup_datetime\');
$dropDT  = $g(\'dropoff_datetime\');

// If dropoff empty => assume same location
$same = ($dropoff === \'\' || $dropoff === null);

// IMPORTANT: change these defaults if needed
$resultsPageId = (int)$modx->getOption(\'resultsPageId\', $scriptProperties, 39);

// Build action URL (always includes id)
$action = $modx->makeUrl($resultsPageId);

// Output
$out  = \'<div class="rentWidget">\';
$out .= \'  <form class="rentWidgetForm" action="\'.$h($action).\'" method="get">\';
$out .= \'    <input type="hidden" name="id" value="\'.$resultsPageId.\'">\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Pick-up location</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-places" type="text" name="pickup_location" value="\'.$h($pickup).\'" placeholder="e.g., Colombo" required>\';
$out .= \'        <button type="button" class="rentWidget__clear" aria-label="Clear pickup">✕</button>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <label class="rentWidget__check mb-0">\';
$out .= \'      <input type="checkbox" class="js-sameLocation" \'.($same ? \'checked\' : \'\').\'>\';
$out .= \'      <span class="text-white">Return car in same location</span>\';
$out .= \'    </label>\';

$out .= \'    <div class="rentWidget__row mt-0 js-dropoffRow" \'.($same ? \'style="display:none;"\' : \'\').\'>\';
$out .= \'      <div class="rentWidget__label">Drop-off location</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-places" type="text" name="dropoff_location" value="\'.$h($dropoff).\'" placeholder="e.g., Kandy">\';
$out .= \'        <button type="button" class="rentWidget__clear" aria-label="Clear dropoff">✕</button>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Pick-up date & time</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-datetime" type="text" name="pickup_datetime" value="\'.$h($pickDT).\'" placeholder="YYYY-MM-DD HH:MM" required>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Drop-off date & time</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-datetime" type="text" name="dropoff_datetime" value="\'.$h($dropDT).\'" placeholder="YYYY-MM-DD HH:MM" required>\';
$out .= \'      </div>\';
$out .= \'    </div>\';
$out .= \'    <hr style="border-top: 1px solid rgb(255 255 255);">\';

$out .= \'    <button class="rentWidget__btn" type="submit">Search now</button>\';
$out .= \'  </form>\';
$out .= \'</div>\';

return $out;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Snippet: RentSearchSummary (editable widget)
 * - Google Places on pickup/dropoff
 * - Flatpickr on pickup/dropoff datetime
 * - Toggle drop-off field when "same location" unchecked
 * - Submits to results page with GET params
 */

$g = function(string $key, string $default = \'\') {
  return isset($_GET[$key]) ? trim((string)$_GET[$key]) : $default;
};
$h = function($v) { return htmlspecialchars((string)$v, ENT_QUOTES, \'UTF-8\'); };

$pickup  = $g(\'pickup_location\');
$dropoff = $g(\'dropoff_location\');
$pickDT  = $g(\'pickup_datetime\');
$dropDT  = $g(\'dropoff_datetime\');

// If dropoff empty => assume same location
$same = ($dropoff === \'\' || $dropoff === null);

// IMPORTANT: change these defaults if needed
$resultsPageId = (int)$modx->getOption(\'resultsPageId\', $scriptProperties, 39);

// Build action URL (always includes id)
$action = $modx->makeUrl($resultsPageId);

// Output
$out  = \'<div class="rentWidget">\';
$out .= \'  <form class="rentWidgetForm" action="\'.$h($action).\'" method="get">\';
$out .= \'    <input type="hidden" name="id" value="\'.$resultsPageId.\'">\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Pick-up location</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-places" type="text" name="pickup_location" value="\'.$h($pickup).\'" placeholder="e.g., Colombo" required>\';
$out .= \'        <button type="button" class="rentWidget__clear" aria-label="Clear pickup">✕</button>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <label class="rentWidget__check mb-0">\';
$out .= \'      <input type="checkbox" class="js-sameLocation" \'.($same ? \'checked\' : \'\').\'>\';
$out .= \'      <span class="text-white">Return car in same location</span>\';
$out .= \'    </label>\';

$out .= \'    <div class="rentWidget__row mt-0 js-dropoffRow" \'.($same ? \'style="display:none;"\' : \'\').\'>\';
$out .= \'      <div class="rentWidget__label">Drop-off location</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-places" type="text" name="dropoff_location" value="\'.$h($dropoff).\'" placeholder="e.g., Kandy">\';
$out .= \'        <button type="button" class="rentWidget__clear" aria-label="Clear dropoff">✕</button>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Pick-up date & time</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-datetime" type="text" name="pickup_datetime" value="\'.$h($pickDT).\'" placeholder="YYYY-MM-DD HH:MM" required>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Drop-off date & time</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-datetime" type="text" name="dropoff_datetime" value="\'.$h($dropDT).\'" placeholder="YYYY-MM-DD HH:MM" required>\';
$out .= \'      </div>\';
$out .= \'    </div>\';
$out .= \'    <hr style="border-top: 1px solid rgb(255 255 255);">\';

$out .= \'    <button class="rentWidget__btn" type="submit">Search now</button>\';
$out .= \'  </form>\';
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