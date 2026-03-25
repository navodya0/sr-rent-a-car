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

<div class="rentExtraInfo mt-4">
  <div class="rentExtraInfo__card">
    <button type="button" class="rentExtraInfo__mobileToggle" aria-expanded="false" aria-controls="rentExtraInfoBody">
      <div>
        <span class="rentExtraInfo__badge">Good to know</span>
        <h4>Before you drive</h4>
      </div>
      <span class="rentExtraInfo__mobileIcon">+</span>
    </button>

    <div class="rentExtraInfo__body" id="rentExtraInfoBody">
      <div class="rentExtraInfo__header">
        <span class="rentExtraInfo__badge">Good to know</span>
        <h4>Before you drive</h4>
        <p>Important rental information for customers booking in Sri Lanka.</p>
      </div>

      <div class="rentExtraInfo__grid">
        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">€</div>
          <div class="rentExtraInfo__content">
            <h5>Security deposit</h5>
            <p>A refundable <strong>€ 700</strong> security deposit is required at vehicle collection. The renter will be liable for any damages, and associated costs will be charged against this deposit.</p>
          </div>
        </div>

        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">🪪</div>
          <div class="rentExtraInfo__content">
            <h5>Licence requirements</h5>
            <p>Drivers should carry a valid driving licence and any required local permit while driving.</p>
          </div>
        </div>

        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">📏</div>
          <div class="rentExtraInfo__content">
            <h5>Road rules</h5>
            <p>Seat belts are required, speed limits must be followed, and mobile phone use while driving should be avoided unless hands-free.</p>
          </div>
        </div>

        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">⏰</div>
          <div class="rentExtraInfo__content">
            <h5>Return policy</h5>
            <p>Please return the vehicle on time and in the same condition to avoid additional charges.</p>
          </div>
        </div>

        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">⚠️</div>
          <div class="rentExtraInfo__content">
            <h5>Customer responsibility</h5>
            <p>Traffic fines, parking penalties, and misuse of the vehicle remain the renter’s responsibility.</p>
          </div>
        </div>
      </div>

      <div class="rentExtraInfo__footer">
        <small>Please review all rental terms at the time of booking confirmation.</small>
      </div>
    </div>
  </div>
</div>
</div>
        
        <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 id="vehiclesHeading" class="mb-0">All vehicles</h2>

                <div class="stepIndicator" role="button" tabindex="0" aria-label="Step 1: Select vehicle">
                    <span class="stepIndicator__label">Step</span>
                    <span class="stepIndicator__number">1</span>
                    <span class="stepIndicator__text">Select vehicle</span>
                </div>
            </div>

            [[!VehiclesCategoryList? &table=`vehicles` &mode=`list` &tplItem=`VehicleListItemTpl`]]
        </div>
    </div>
  </div>
</section>

<script>
document.addEventListener(\'DOMContentLoaded\', () => {
  const infoBox = document.querySelector(\'.rentExtraInfo\');
  const toggleBtn = document.querySelector(\'.rentExtraInfo__mobileToggle\');

  if (!infoBox || !toggleBtn) return;

  toggleBtn.addEventListener(\'click\', () => {
    infoBox.classList.toggle(\'is-open\');
    const expanded = infoBox.classList.contains(\'is-open\');
    toggleBtn.setAttribute(\'aria-expanded\', expanded ? \'true\' : \'false\');
  });
});
</script>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    const stepIndicator = document.querySelector(\'.stepIndicator\');
    const categoryCards = document.querySelectorAll(\'.vehicleScroller [data-category]\');
    const vehicleItems = document.querySelectorAll(\'#vehicleGroups .vehicleItem\');

    if (!stepIndicator) return;

    const activateStep = () => {
      stepIndicator.classList.add(\'is-active\');
      const text = stepIndicator.querySelector(\'.stepIndicator__text\');
      if (text) text.textContent = \'Vehicle selected\';
    };

    categoryCards.forEach(card => {
      card.addEventListener(\'click\', activateStep);
    });

    vehicleItems.forEach(item => {
      item.addEventListener(\'click\', activateStep);
    });

    stepIndicator.addEventListener(\'click\', () => {
      const listSection = document.getElementById(\'rentResults\');
      if (listSection) {
        listSection.scrollIntoView({ behavior: \'smooth\', block: \'start\' });
      }
    });
  });
</script>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    document.querySelectorAll(\'.rentWidgetForm\').forEach((form) => {
      const same = form.querySelector(\'.js-sameLocation\');
      const dropRow = form.querySelector(\'.js-dropoffRow\');
      const dropInput = form.querySelector(\'input[name="dropoff_location"]\');

      const sync = () => {
        const checked = same && same.checked;
        if (dropRow) dropRow.style.display = checked ? \'none\' : \'\';
        if (checked && dropInput) dropInput.value = \'\';
      };

      if (same) same.addEventListener(\'change\', sync);
      sync();

      form.querySelectorAll(\'.rentWidget__clear\').forEach((btn) => {
        btn.addEventListener(\'click\', () => {
          const input = btn.parentElement.querySelector(\'input\');
          if (input) input.value = \'\';
          if (input) input.focus();
        });
      });
    });
  });
</script>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    if (!window.flatpickr) return;

    const now = new Date();

    document.querySelectorAll(\'.rentWidgetForm\').forEach((form) => {
      const pickupInput = form.querySelector(\'input[name="pickup_datetime"]\');
      const dropoffInput = form.querySelector(\'input[name="dropoff_datetime"]\');

      if (!pickupInput || !dropoffInput) return;

      let dropoffPicker;

      const pickupPicker = flatpickr(pickupInput, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        minDate: now,
        disableMobile: true,
        onChange: function(selectedDates) {
          if (selectedDates.length && dropoffPicker) {
            dropoffPicker.set(\'minDate\', selectedDates[0]);

            const currentDrop = dropoffPicker.selectedDates[0];
            if (currentDrop && currentDrop <= selectedDates[0]) {
              dropoffPicker.clear();
            }
          }
        }
      });

      dropoffPicker = flatpickr(dropoffInput, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        minDate: pickupInput.value ? pickupInput.value : now,
        disableMobile: true
      });
    });
  });
</script>

<script>
  function initAutocomplete() {
    document.querySelectorAll(\'.js-places\').forEach((input) => {
      const ac = new google.maps.places.Autocomplete(input, {
        fields: ["formatted_address", "geometry", "name"],
        componentRestrictions: { country: "lk" }
      });

      ac.addListener("place_changed", () => {
        const place = ac.getPlace();
        if (place && place.formatted_address) {
          input.value = place.formatted_address;
        }
      });
    });
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places&callback=initAutocomplete" async defer></script>

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

<script>
document.addEventListener(\'DOMContentLoaded\', () => {
  const heading = document.getElementById(\'vehiclesHeading\');
  const groups = document.querySelectorAll(\'#vehicleGroups .vehicleGroup\');
  const categoryCards = document.querySelectorAll(\'.vehicleScroller [data-category]\');

  if (!groups.length || !categoryCards.length) return;

  const normalize = (str) => (str || \'\').trim().toLowerCase();

  const showDefaultView = () => {
    if (heading) heading.textContent = \'All vehicles\';

    groups.forEach(group => {
      const items = group.querySelectorAll(\'.vehicleItem\');
      items.forEach((item, index) => {
        item.style.display = index === 0 ? \'\' : \'none\';
      });
      group.style.display = \'\';
    });

    categoryCards.forEach(card => card.classList.remove(\'is-active\'));
  };

  const showCategory = (category) => {
    const selected = normalize(category);
    if (!selected) {
      showDefaultView();
      return;
    }

    if (heading) heading.textContent = category.toUpperCase();

    groups.forEach(group => {
      const groupCat = normalize(group.getAttribute(\'data-category\'));
      const items = group.querySelectorAll(\'.vehicleItem\');

      if (groupCat === selected) {
        group.style.display = \'\';
        items.forEach(item => item.style.display = \'\');
      } else {
        group.style.display = \'none\';
      }
    });

    categoryCards.forEach(card => {
      const cardCat = normalize(card.getAttribute(\'data-category\'));
      card.classList.toggle(\'is-active\', cardCat === selected);
    });
  };

  categoryCards.forEach(card => {
    card.addEventListener(\'click\', (e) => {
      e.preventDefault();
      const cat = card.getAttribute(\'data-category\');
      showCategory(cat);
    });
  });

  showDefaultView();
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
    'editedon' => 1774353621,
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

<div class="rentExtraInfo mt-4">
  <div class="rentExtraInfo__card">
    <button type="button" class="rentExtraInfo__mobileToggle" aria-expanded="false" aria-controls="rentExtraInfoBody">
      <div>
        <span class="rentExtraInfo__badge">Good to know</span>
        <h4>Before you drive</h4>
      </div>
      <span class="rentExtraInfo__mobileIcon">+</span>
    </button>

    <div class="rentExtraInfo__body" id="rentExtraInfoBody">
      <div class="rentExtraInfo__header">
        <span class="rentExtraInfo__badge">Good to know</span>
        <h4>Before you drive</h4>
        <p>Important rental information for customers booking in Sri Lanka.</p>
      </div>

      <div class="rentExtraInfo__grid">
        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">€</div>
          <div class="rentExtraInfo__content">
            <h5>Security deposit</h5>
            <p>A refundable <strong>€ 700</strong> security deposit is required at vehicle collection. The renter will be liable for any damages, and associated costs will be charged against this deposit.</p>
          </div>
        </div>

        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">🪪</div>
          <div class="rentExtraInfo__content">
            <h5>Licence requirements</h5>
            <p>Drivers should carry a valid driving licence and any required local permit while driving.</p>
          </div>
        </div>

        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">📏</div>
          <div class="rentExtraInfo__content">
            <h5>Road rules</h5>
            <p>Seat belts are required, speed limits must be followed, and mobile phone use while driving should be avoided unless hands-free.</p>
          </div>
        </div>

        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">⏰</div>
          <div class="rentExtraInfo__content">
            <h5>Return policy</h5>
            <p>Please return the vehicle on time and in the same condition to avoid additional charges.</p>
          </div>
        </div>

        <div class="rentExtraInfo__item">
          <div class="rentExtraInfo__icon">⚠️</div>
          <div class="rentExtraInfo__content">
            <h5>Customer responsibility</h5>
            <p>Traffic fines, parking penalties, and misuse of the vehicle remain the renter’s responsibility.</p>
          </div>
        </div>
      </div>

      <div class="rentExtraInfo__footer">
        <small>Please review all rental terms at the time of booking confirmation.</small>
      </div>
    </div>
  </div>
</div>
</div>
        
        <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 id="vehiclesHeading" class="mb-0">All vehicles</h2>

                <div class="stepIndicator" role="button" tabindex="0" aria-label="Step 1: Select vehicle">
                    <span class="stepIndicator__label">Step</span>
                    <span class="stepIndicator__number">1</span>
                    <span class="stepIndicator__text">Select vehicle</span>
                </div>
            </div>

            [[!VehiclesCategoryList? &table=`vehicles` &mode=`list` &tplItem=`VehicleListItemTpl`]]
        </div>
    </div>
  </div>
</section>

<script>
document.addEventListener(\'DOMContentLoaded\', () => {
  const infoBox = document.querySelector(\'.rentExtraInfo\');
  const toggleBtn = document.querySelector(\'.rentExtraInfo__mobileToggle\');

  if (!infoBox || !toggleBtn) return;

  toggleBtn.addEventListener(\'click\', () => {
    infoBox.classList.toggle(\'is-open\');
    const expanded = infoBox.classList.contains(\'is-open\');
    toggleBtn.setAttribute(\'aria-expanded\', expanded ? \'true\' : \'false\');
  });
});
</script>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    const stepIndicator = document.querySelector(\'.stepIndicator\');
    const categoryCards = document.querySelectorAll(\'.vehicleScroller [data-category]\');
    const vehicleItems = document.querySelectorAll(\'#vehicleGroups .vehicleItem\');

    if (!stepIndicator) return;

    const activateStep = () => {
      stepIndicator.classList.add(\'is-active\');
      const text = stepIndicator.querySelector(\'.stepIndicator__text\');
      if (text) text.textContent = \'Vehicle selected\';
    };

    categoryCards.forEach(card => {
      card.addEventListener(\'click\', activateStep);
    });

    vehicleItems.forEach(item => {
      item.addEventListener(\'click\', activateStep);
    });

    stepIndicator.addEventListener(\'click\', () => {
      const listSection = document.getElementById(\'rentResults\');
      if (listSection) {
        listSection.scrollIntoView({ behavior: \'smooth\', block: \'start\' });
      }
    });
  });
</script>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    document.querySelectorAll(\'.rentWidgetForm\').forEach((form) => {
      const same = form.querySelector(\'.js-sameLocation\');
      const dropRow = form.querySelector(\'.js-dropoffRow\');
      const dropInput = form.querySelector(\'input[name="dropoff_location"]\');

      const sync = () => {
        const checked = same && same.checked;
        if (dropRow) dropRow.style.display = checked ? \'none\' : \'\';
        if (checked && dropInput) dropInput.value = \'\';
      };

      if (same) same.addEventListener(\'change\', sync);
      sync();

      form.querySelectorAll(\'.rentWidget__clear\').forEach((btn) => {
        btn.addEventListener(\'click\', () => {
          const input = btn.parentElement.querySelector(\'input\');
          if (input) input.value = \'\';
          if (input) input.focus();
        });
      });
    });
  });
</script>

<script>
  document.addEventListener(\'DOMContentLoaded\', () => {
    if (!window.flatpickr) return;

    const now = new Date();

    document.querySelectorAll(\'.rentWidgetForm\').forEach((form) => {
      const pickupInput = form.querySelector(\'input[name="pickup_datetime"]\');
      const dropoffInput = form.querySelector(\'input[name="dropoff_datetime"]\');

      if (!pickupInput || !dropoffInput) return;

      let dropoffPicker;

      const pickupPicker = flatpickr(pickupInput, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        minDate: now,
        disableMobile: true,
        onChange: function(selectedDates) {
          if (selectedDates.length && dropoffPicker) {
            dropoffPicker.set(\'minDate\', selectedDates[0]);

            const currentDrop = dropoffPicker.selectedDates[0];
            if (currentDrop && currentDrop <= selectedDates[0]) {
              dropoffPicker.clear();
            }
          }
        }
      });

      dropoffPicker = flatpickr(dropoffInput, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        minDate: pickupInput.value ? pickupInput.value : now,
        disableMobile: true
      });
    });
  });
</script>

<script>
  function initAutocomplete() {
    document.querySelectorAll(\'.js-places\').forEach((input) => {
      const ac = new google.maps.places.Autocomplete(input, {
        fields: ["formatted_address", "geometry", "name"],
        componentRestrictions: { country: "lk" }
      });

      ac.addListener("place_changed", () => {
        const place = ac.getPlace();
        if (place && place.formatted_address) {
          input.value = place.formatted_address;
        }
      });
    });
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places&callback=initAutocomplete" async defer></script>

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

<script>
document.addEventListener(\'DOMContentLoaded\', () => {
  const heading = document.getElementById(\'vehiclesHeading\');
  const groups = document.querySelectorAll(\'#vehicleGroups .vehicleGroup\');
  const categoryCards = document.querySelectorAll(\'.vehicleScroller [data-category]\');

  if (!groups.length || !categoryCards.length) return;

  const normalize = (str) => (str || \'\').trim().toLowerCase();

  const showDefaultView = () => {
    if (heading) heading.textContent = \'All vehicles\';

    groups.forEach(group => {
      const items = group.querySelectorAll(\'.vehicleItem\');
      items.forEach((item, index) => {
        item.style.display = index === 0 ? \'\' : \'none\';
      });
      group.style.display = \'\';
    });

    categoryCards.forEach(card => card.classList.remove(\'is-active\'));
  };

  const showCategory = (category) => {
    const selected = normalize(category);
    if (!selected) {
      showDefaultView();
      return;
    }

    if (heading) heading.textContent = category.toUpperCase();

    groups.forEach(group => {
      const groupCat = normalize(group.getAttribute(\'data-category\'));
      const items = group.querySelectorAll(\'.vehicleItem\');

      if (groupCat === selected) {
        group.style.display = \'\';
        items.forEach(item => item.style.display = \'\');
      } else {
        group.style.display = \'none\';
      }
    });

    categoryCards.forEach(card => {
      const cardCat = normalize(card.getAttribute(\'data-category\'));
      card.classList.toggle(\'is-active\', cardCat === selected);
    });
  };

  categoryCards.forEach(card => {
    card.addEventListener(\'click\', (e) => {
      e.preventDefault();
      const cat = card.getAttribute(\'data-category\');
      showCategory(cat);
    });
  });

  showDefaultView();
});
</script>
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
          'snippet' => '<a class="vehicleCardLink [[+is_active:is=`1`:then=`vehicleCardLink--active`]]"
   href="[[+cat_link]]"
   data-category="[[+car_category:htmlent]]">
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

    <img class="mt-4 vehicleCard__img" src="[[+image]]" alt="[[+car_model:htmlent]]">


  </div>
</a>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<a class="vehicleCardLink [[+is_active:is=`1`:then=`vehicleCardLink--active`]]"
   href="[[+cat_link]]"
   data-category="[[+car_category:htmlent]]">
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

    <img class="mt-4 vehicleCard__img" src="[[+image]]" alt="[[+car_model:htmlent]]">


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
          'snippet' => '<div class="dealCard">
  <div class="dealCard__top">
<h3 class="dealCard__title">
  [[+discount_percent:gt=`0`:then=`
    <span class="dealCard__discountBadge">
     Save-[[+discount_percent]]%
    </span>
  `]]
  [[+car_model:htmlent]]



  <span class="dealCard__sub">
    or similar
    <span class="dealCard__tooltipWrap" tabindex="0">
      <span class="dealCard__tooltipIcon"><i class="fa fa-info-circle"></i></span>
      <span class="dealCard__tooltipBox">
        Vehicle model may vary depending on availability, but you will receive a similar car in the same category with comparable features and capacity.
      </span>
    </span>
  </span>
</h3>

    <div class="dealCard__specs">
      <span class="dealCard__spec"><i class="fa fa-cog"></i> [[+transmission_type]]</span>
      <span class="dealCard__spec"><i class="fa fa-user"></i> [[+pax_count]] Seats</span>
      <span class="dealCard__spec"><i class="fa fa-suitcase"></i> [[+luggage_count]] Bags</span>
      <span class="dealCard__spec"><i class="fa fa-snowflake"></i> Air Conditioning</span>
      <span class="dealCard__spec"><i class="fa fa-car"></i> 4 doors</span>
    </div>
  </div>

  <div class="dealCard__body">
    <div class="dealCard__imageCol">
      <img src="[[+image]]" alt="[[+car_model:htmlent]]" class="dealCard__image">
    </div>

    <div class="dealCard__content">
      <ul class="dealCard__features">
        <li>In terminal pick-up</li>
        <li>Average deposit</li>
        <li>Instant confirmation!</li>
        <li>Unlimited mileage</li>
      </ul>

      [[+discount_percent:gt=`0`:then=`
        <div class="dealCard__offerNote">
          <span class="dealCard__offerBadge">Discount Applied!!</span>
         
        </div>
      `]]
    </div>

    <div class="dealCard__priceCol">
      <div class="dealCard__priceLabel">
        [[+days:gt=`0`:then=`Total for [[+days]] [[+days:is=`1`:then=`day`:else=`days`]]`:else=`Select dates to see total`]]
      </div>

<div class="dealCard__priceValue">
  [[+price:is=``:then=`
    [[+discount_percent:gt=`0`:then=`
      <span class="dealCard__suitable">Suitable offer available</span>
    `:else=`
      <span class="dealCard__selectInfo">Select dates and locations</span>
    `]]
  `:else=`
    [[+discount_percent:gt=`0`:then=`
      <span class="dealCard__oldPrice">$ [[+original_price]]</span>
      <span class="dealCard__newPrice">$ [[+price]]</span>
    `:else=`
      <span class="dealCard__mainPrice">$ [[+price]]</span>
    `]]
  `]]
</div>

[[+price:isnot=``:then=`
  <div class="dealCard__payNowNote">
    Get 5% off when you pay now rather than on arrival.
  </div>
`]]

      <div class="dealCard__cancel mt-3">**Free cancellation <br> upto 24 hrs</div>

      <form action="[[+form_action]]" method="post" class="dealCard__form">
        <input type="hidden" name="id" value="41">
        <input type="hidden" name="vehicle_id" value="[[+vehicle_id]]">
        <input type="hidden" name="car_code" value="[[+car_code]]">
        <input type="hidden" name="search_source" value="[[+discount_percent:gt=`0`:then=`offer`:else=`home`]]">
        <input type="hidden" name="discount" value="[[+discount_raw]]">
        <button type="submit" class="dealCard__btn js-dealBtn">View deal</button>
      </form>
    </div>
  </div>
</div>


<script>
document.addEventListener(\'DOMContentLoaded\', () => {

  function checkDatesAndToggleButtons() {
    const pickup = document.querySelector(\'input[name="pickup_datetime"]\');
    const drop   = document.querySelector(\'input[name="dropoff_datetime"]\');

    const hasDates = pickup && drop && pickup.value.trim() && drop.value.trim();

    document.querySelectorAll(\'.js-dealBtn\').forEach(btn => {
      btn.disabled = !hasDates;

      // optional styling class
      btn.classList.toggle(\'is-disabled\', !hasDates);
    });
  }

  // Run initially
  checkDatesAndToggleButtons();

  // Listen to changes (Flatpickr triggers change event)
  document.addEventListener(\'change\', checkDatesAndToggleButtons);

});
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="dealCard">
  <div class="dealCard__top">
<h3 class="dealCard__title">
  [[+discount_percent:gt=`0`:then=`
    <span class="dealCard__discountBadge">
     Save-[[+discount_percent]]%
    </span>
  `]]
  [[+car_model:htmlent]]



  <span class="dealCard__sub">
    or similar
    <span class="dealCard__tooltipWrap" tabindex="0">
      <span class="dealCard__tooltipIcon"><i class="fa fa-info-circle"></i></span>
      <span class="dealCard__tooltipBox">
        Vehicle model may vary depending on availability, but you will receive a similar car in the same category with comparable features and capacity.
      </span>
    </span>
  </span>
</h3>

    <div class="dealCard__specs">
      <span class="dealCard__spec"><i class="fa fa-cog"></i> [[+transmission_type]]</span>
      <span class="dealCard__spec"><i class="fa fa-user"></i> [[+pax_count]] Seats</span>
      <span class="dealCard__spec"><i class="fa fa-suitcase"></i> [[+luggage_count]] Bags</span>
      <span class="dealCard__spec"><i class="fa fa-snowflake"></i> Air Conditioning</span>
      <span class="dealCard__spec"><i class="fa fa-car"></i> 4 doors</span>
    </div>
  </div>

  <div class="dealCard__body">
    <div class="dealCard__imageCol">
      <img src="[[+image]]" alt="[[+car_model:htmlent]]" class="dealCard__image">
    </div>

    <div class="dealCard__content">
      <ul class="dealCard__features">
        <li>In terminal pick-up</li>
        <li>Average deposit</li>
        <li>Instant confirmation!</li>
        <li>Unlimited mileage</li>
      </ul>

      [[+discount_percent:gt=`0`:then=`
        <div class="dealCard__offerNote">
          <span class="dealCard__offerBadge">Discount Applied!!</span>
         
        </div>
      `]]
    </div>

    <div class="dealCard__priceCol">
      <div class="dealCard__priceLabel">
        [[+days:gt=`0`:then=`Total for [[+days]] [[+days:is=`1`:then=`day`:else=`days`]]`:else=`Select dates to see total`]]
      </div>

<div class="dealCard__priceValue">
  [[+price:is=``:then=`
    [[+discount_percent:gt=`0`:then=`
      <span class="dealCard__suitable">Suitable offer available</span>
    `:else=`
      <span class="dealCard__selectInfo">Select dates and locations</span>
    `]]
  `:else=`
    [[+discount_percent:gt=`0`:then=`
      <span class="dealCard__oldPrice">$ [[+original_price]]</span>
      <span class="dealCard__newPrice">$ [[+price]]</span>
    `:else=`
      <span class="dealCard__mainPrice">$ [[+price]]</span>
    `]]
  `]]
</div>

[[+price:isnot=``:then=`
  <div class="dealCard__payNowNote">
    Get 5% off when you pay now rather than on arrival.
  </div>
`]]

      <div class="dealCard__cancel mt-3">**Free cancellation <br> upto 24 hrs</div>

      <form action="[[+form_action]]" method="post" class="dealCard__form">
        <input type="hidden" name="id" value="41">
        <input type="hidden" name="vehicle_id" value="[[+vehicle_id]]">
        <input type="hidden" name="car_code" value="[[+car_code]]">
        <input type="hidden" name="search_source" value="[[+discount_percent:gt=`0`:then=`offer`:else=`home`]]">
        <input type="hidden" name="discount" value="[[+discount_raw]]">
        <button type="submit" class="dealCard__btn js-dealBtn">View deal</button>
      </form>
    </div>
  </div>
</div>


<script>
document.addEventListener(\'DOMContentLoaded\', () => {

  function checkDatesAndToggleButtons() {
    const pickup = document.querySelector(\'input[name="pickup_datetime"]\');
    const drop   = document.querySelector(\'input[name="dropoff_datetime"]\');

    const hasDates = pickup && drop && pickup.value.trim() && drop.value.trim();

    document.querySelectorAll(\'.js-dealBtn\').forEach(btn => {
      btn.disabled = !hasDates;

      // optional styling class
      btn.classList.toggle(\'is-disabled\', !hasDates);
    });
  }

  // Run initially
  checkDatesAndToggleButtons();

  // Listen to changes (Flatpickr triggers change event)
  document.addEventListener(\'change\', checkDatesAndToggleButtons);

});
</script>',
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

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$tpl      = $modx->getOption(\'tpl\', $scriptProperties, \'VehicleCategoryCardTpl\');
$tplItem  = $modx->getOption(\'tplItem\', $scriptProperties, \'VehicleListItemTpl\');
$limit    = (int)$modx->getOption(\'limit\', $scriptProperties, 20);
$table    = $modx->getOption(\'table\', $scriptProperties, \'vehicles\');
$groupBy  = (int)$modx->getOption(\'groupByCategory\', $scriptProperties, 1);
$mode     = $modx->getOption(\'mode\', $scriptProperties, \'cards\');
$step2PageId = (int)$modx->getOption(\'step2PageId\', $scriptProperties, 41);

/*
|--------------------------------------------------------------------------
| Handle incoming search source
|--------------------------------------------------------------------------
*/
if ($_SERVER[\'REQUEST_METHOD\'] === \'POST\') {
    $searchSource = trim($_POST[\'search_source\'] ?? \'\');

    $_SESSION[\'rent_search\'] = [
        \'pickup_location\'  => trim($_POST[\'pickup_location\'] ?? \'\'),
        \'dropoff_location\' => trim($_POST[\'dropoff_location\'] ?? \'\'),
        \'pickup_datetime\'  => trim($_POST[\'pickup_datetime\'] ?? \'\'),
        \'dropoff_datetime\' => trim($_POST[\'dropoff_datetime\'] ?? \'\'),
    ];

    // Coming from home search => remove old offer discount + vehicle
    if ($searchSource === \'home\') {
        unset($_SESSION[\'rent_discount\'], $_SESSION[\'rent_offer_vehicle_id\']);
    }

    // Coming from offer => store discount + selected vehicle
    if ($searchSource === \'offer\') {
        if (isset($_POST[\'discount\']) && trim($_POST[\'discount\']) !== \'\') {
            $_SESSION[\'rent_discount\'] = trim($_POST[\'discount\']);
        }

        if (isset($_POST[\'vehicle_id\']) && (int)$_POST[\'vehicle_id\'] > 0) {
            $_SESSION[\'rent_offer_vehicle_id\'] = (int)$_POST[\'vehicle_id\'];
        }
    }

    // Explicit remove
    if (isset($_POST[\'clear_discount\']) && $_POST[\'clear_discount\'] === \'1\') {
        unset($_SESSION[\'rent_discount\'], $_SESSION[\'rent_offer_vehicle_id\']);
    }
}

$discountRaw = \'\';

if (isset($_GET[\'discount\']) && trim($_GET[\'discount\']) !== \'\') {
    $discountRaw = trim($_GET[\'discount\']);
    $_SESSION[\'rent_discount\'] = $discountRaw;
} else {
    $discountRaw = trim($_SESSION[\'rent_discount\'] ?? \'\');
}

$discountPercent = 0;
if ($discountRaw !== \'\') {
    $discountPercent = (int)preg_replace(\'/[^0-9]/\', \'\', $discountRaw);
}

$search = $_SESSION[\'rent_search\'] ?? [];

$discountRaw = trim($_SESSION[\'rent_discount\'] ?? \'\');
$discountPercent = 0;

if ($discountRaw !== \'\') {
    $discountPercent = (int)preg_replace(\'/[^0-9]/\', \'\', $discountRaw);
}

$pickupRaw  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropoffRaw = trim($search[\'dropoff_datetime\'] ?? \'\');
$currentCat = isset($_REQUEST[\'cat\']) ? trim((string)$_REQUEST[\'cat\']) : \'\';

$pickupLocation  = trim($search[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($search[\'dropoff_location\'] ?? \'\');

$pickupDate  = ($pickupRaw !== \'\' && strtotime($pickupRaw)) ? date(\'Y-m-d\', strtotime($pickupRaw)) : \'\';
$dropoffDate = ($dropoffRaw !== \'\' && strtotime($dropoffRaw)) ? date(\'Y-m-d\', strtotime($dropoffRaw)) : \'\';

if (!function_exists(\'getRentalDays\')) {
    function getRentalDays($pickupDate, $dropoffDate) {
        if (!$pickupDate || !$dropoffDate) return 0;

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);

        if (!$start || !$end || $end < $start) return 0;

        return max(1, (int)(($end - $start) / 86400) + 1);
    }
}

if (!function_exists(\'calculateRentalPrice\')) {
    function calculateRentalPrice($modx, $carCode, $pickupDate, $dropoffDate) {
        $days = getRentalDays($pickupDate, $dropoffDate);
        if ($days <= 0 || $carCode === \'\') return \'\';

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

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$rows) return \'\';

        $rates = [];
        foreach ($rows as $row) {
            $duration = (int)($row[\'duration\'] ?? 0);
            $rate     = (float)($row[\'rate\'] ?? 0);

            if ($duration > 0) {
                $rates[$duration] = $rate;
            }
        }

        if (!$rates) return \'\';

        ksort($rates);

        $maxDuration = max(array_keys($rates));
        $lastRate    = (float)$rates[$maxDuration];
        $total       = 0;

        for ($d = 1; $d <= $days; $d++) {
            if (isset($rates[$d])) {
                $total += (float)$rates[$d];
            } elseif ($d > $maxDuration) {
                $total += $lastRate;
            } else {
                return \'\';
            }
        }

        return number_format($total, 2, \'.\', \'\');
    }
}

$days = getRentalDays($pickupDate, $dropoffDate);

/**
 * MODE 1: category cards
 */
if ($mode === \'cards\') {
    if ($groupBy) {
        $sql = "SELECT
                    v1.id,
                    v1.image,
                    v1.car_category,
                    v1.car_model,
                    v1.car_code,
                    v1.pax_count,
                    v1.luggage_count
                FROM {$table} v1
                INNER JOIN (
                    SELECT car_category, MIN(id) AS first_id
                    FROM {$table}
                    GROUP BY car_category
                ) v2 ON v1.id = v2.first_id
                ORDER BY v1.car_category ASC
                LIMIT :limit";
    } else {
        $sql = "SELECT
                    v.id,
                    v.image,
                    v.car_category,
                    v.car_model,
                    v.car_code,
                    v.pax_count,
                    v.luggage_count
                FROM {$table} v
                ORDER BY v.id DESC
                LIMIT :limit";
    }

    $stmt = $modx->prepare($sql);
    if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';

    $stmt->bindValue(\':limit\', $limit, PDO::PARAM_INT);
    if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!$rows) return \'<p>No vehicles found.</p>\';

    $uid = \'vehRow_\' . substr(md5(uniqid(\'\', true)), 0, 8);

    $out  = \'<div class="vehicleScroller" data-scroller="\' . $uid . \'">\';
    $out .= \'<button class="vehicleScroller__btn vehicleScroller__btn--left" type="button" aria-label="Scroll left" data-dir="-1">‹</button>\';
    $out .= \'<div class="vehicleRow mt-4 mt-lg-0" id="\' . $uid . \'">\';

    foreach ($rows as $row) {
        $cat = (string)($row[\'car_category\'] ?? \'\');



$formAction = $modx->makeUrl($step2PageId);

$ph = [
    \'image\'         => $row[\'image\'] ?? \'\',
    \'car_category\'  => $cat,
    \'car_model\'     => $row[\'car_model\'] ?? \'\',
    \'car_code\'      => $row[\'car_code\'] ?? \'\',
    \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
    \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
    \'price\'         => calculateRentalPrice($modx, $row[\'car_code\'] ?? \'\', $pickupDate, $dropoffDate),
    \'days\'          => $days,
    \'deal_link\'     => \'\',
    \'form_action\'   => $formAction,
    \'vehicle_id\'    => (int)$row[\'id\'],
    \'is_active\'     => ($currentCat !== \'\' && strcasecmp($currentCat, $cat) === 0) ? 1 : 0,
];

        $out .= $modx->getChunk($tpl, $ph);
    }

    $out .= \'</div>\';
    $out .= \'<button class="vehicleScroller__btn vehicleScroller__btn--right" type="button" aria-label="Scroll right" data-dir="1">›</button>\';
    $out .= \'</div>\';

    return $out;
}

/**
 * MODE 2: vehicle list
 */
$sql = "SELECT
            v.id,
            v.image,
            v.car_category,
            v.car_model,
            v.car_code,
            v.transmission_type,
            v.pax_count,
            v.luggage_count
        FROM {$table} v";

$params = [];
if ($currentCat !== \'\') {
    $sql .= " WHERE v.car_category = :current_cat";
    $params[\':current_cat\'] = $currentCat;
}

$sql .= " ORDER BY v.car_category ASC, v.id ASC";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';

foreach ($params as $key => $val) {
    $stmt->bindValue($key, $val, PDO::PARAM_STR);
}

if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!$rows) return \'<p>No vehicles found.</p>\';

$grouped = [];
foreach ($rows as $row) {
    $cat = trim((string)($row[\'car_category\'] ?? \'Uncategorized\'));
    if (!isset($grouped[$cat])) $grouped[$cat] = [];

$originalPrice = (float) calculateRentalPrice(
    $modx,
    $row[\'car_code\'] ?? \'\',
    $pickupDate,
    $dropoffDate
);

$discountedPrice = $originalPrice;

if ($discountPercent > 0 && $originalPrice > 0) {
    $discountedPrice = $originalPrice - (($originalPrice * $discountPercent) / 100);
}

$row[\'calculated_price\'] = $discountedPrice > 0 ? number_format($discountedPrice, 2, \'.\', \'\') : \'\';
$row[\'original_price\'] = $originalPrice > 0 ? number_format($originalPrice, 2, \'.\', \'\') : \'\';
$row[\'discount_percent\'] = $discountPercent;

$row[\'form_action\'] = $modx->makeUrl($step2PageId);
$row[\'vehicle_id\']  = (int)$row[\'id\'];

    $grouped[$cat][] = $row;
}

$out = \'<div id="vehicleGroups">\';

foreach ($grouped as $cat => $items) {
    $safeCat = htmlspecialchars($cat, ENT_QUOTES, \'UTF-8\');
    $out .= \'<div class="vehicleGroup" data-category="\' . $safeCat . \'">\';
    foreach ($items as $index => $row) {
$ph = [
    \'id\'               => (int)($row[\'id\'] ?? 0),
    \'image\'            => $row[\'image\'] ?? \'\',
    \'car_model\'        => $row[\'car_model\'] ?? \'\',
    \'car_category\'     => $cat,
    \'car_code\'         => $row[\'car_code\'] ?? \'\',
    \'pax_count\'        => (int)($row[\'pax_count\'] ?? 0),
    \'luggage_count\'    => (int)($row[\'luggage_count\'] ?? 0),
    \'transmission_type\'         => $row[\'transmission_type\'] ?? \'\',
    \'price\'            => $row[\'calculated_price\'] ?? \'\',
    \'original_price\'   => $row[\'original_price\'] ?? \'\',
    \'discount_percent\' => $row[\'discount_percent\'] ?? 0,
    \'discount_raw\'     => $discountRaw,
    \'days\'             => $days,
    \'form_action\'      => $row[\'form_action\'] ?? \'\',
    \'vehicle_id\'       => $row[\'vehicle_id\'] ?? 0,
    \'is_first\'         => $index === 0 ? 1 : 0,
];

        $out .= \'<div class="vehicleItem" data-first="\' . ($index === 0 ? \'1\' : \'0\') . \'">\';
        $out .= $modx->getChunk($tplItem, $ph);
        $out .= \'</div>\';
    }

    $out .= \'</div>\';
}

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

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$tpl      = $modx->getOption(\'tpl\', $scriptProperties, \'VehicleCategoryCardTpl\');
$tplItem  = $modx->getOption(\'tplItem\', $scriptProperties, \'VehicleListItemTpl\');
$limit    = (int)$modx->getOption(\'limit\', $scriptProperties, 20);
$table    = $modx->getOption(\'table\', $scriptProperties, \'vehicles\');
$groupBy  = (int)$modx->getOption(\'groupByCategory\', $scriptProperties, 1);
$mode     = $modx->getOption(\'mode\', $scriptProperties, \'cards\');
$step2PageId = (int)$modx->getOption(\'step2PageId\', $scriptProperties, 41);

/*
|--------------------------------------------------------------------------
| Handle incoming search source
|--------------------------------------------------------------------------
*/
if ($_SERVER[\'REQUEST_METHOD\'] === \'POST\') {
    $searchSource = trim($_POST[\'search_source\'] ?? \'\');

    $_SESSION[\'rent_search\'] = [
        \'pickup_location\'  => trim($_POST[\'pickup_location\'] ?? \'\'),
        \'dropoff_location\' => trim($_POST[\'dropoff_location\'] ?? \'\'),
        \'pickup_datetime\'  => trim($_POST[\'pickup_datetime\'] ?? \'\'),
        \'dropoff_datetime\' => trim($_POST[\'dropoff_datetime\'] ?? \'\'),
    ];

    // Coming from home search => remove old offer discount + vehicle
    if ($searchSource === \'home\') {
        unset($_SESSION[\'rent_discount\'], $_SESSION[\'rent_offer_vehicle_id\']);
    }

    // Coming from offer => store discount + selected vehicle
    if ($searchSource === \'offer\') {
        if (isset($_POST[\'discount\']) && trim($_POST[\'discount\']) !== \'\') {
            $_SESSION[\'rent_discount\'] = trim($_POST[\'discount\']);
        }

        if (isset($_POST[\'vehicle_id\']) && (int)$_POST[\'vehicle_id\'] > 0) {
            $_SESSION[\'rent_offer_vehicle_id\'] = (int)$_POST[\'vehicle_id\'];
        }
    }

    // Explicit remove
    if (isset($_POST[\'clear_discount\']) && $_POST[\'clear_discount\'] === \'1\') {
        unset($_SESSION[\'rent_discount\'], $_SESSION[\'rent_offer_vehicle_id\']);
    }
}

$discountRaw = \'\';

if (isset($_GET[\'discount\']) && trim($_GET[\'discount\']) !== \'\') {
    $discountRaw = trim($_GET[\'discount\']);
    $_SESSION[\'rent_discount\'] = $discountRaw;
} else {
    $discountRaw = trim($_SESSION[\'rent_discount\'] ?? \'\');
}

$discountPercent = 0;
if ($discountRaw !== \'\') {
    $discountPercent = (int)preg_replace(\'/[^0-9]/\', \'\', $discountRaw);
}

$search = $_SESSION[\'rent_search\'] ?? [];

$discountRaw = trim($_SESSION[\'rent_discount\'] ?? \'\');
$discountPercent = 0;

if ($discountRaw !== \'\') {
    $discountPercent = (int)preg_replace(\'/[^0-9]/\', \'\', $discountRaw);
}

$pickupRaw  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropoffRaw = trim($search[\'dropoff_datetime\'] ?? \'\');
$currentCat = isset($_REQUEST[\'cat\']) ? trim((string)$_REQUEST[\'cat\']) : \'\';

$pickupLocation  = trim($search[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($search[\'dropoff_location\'] ?? \'\');

$pickupDate  = ($pickupRaw !== \'\' && strtotime($pickupRaw)) ? date(\'Y-m-d\', strtotime($pickupRaw)) : \'\';
$dropoffDate = ($dropoffRaw !== \'\' && strtotime($dropoffRaw)) ? date(\'Y-m-d\', strtotime($dropoffRaw)) : \'\';

if (!function_exists(\'getRentalDays\')) {
    function getRentalDays($pickupDate, $dropoffDate) {
        if (!$pickupDate || !$dropoffDate) return 0;

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);

        if (!$start || !$end || $end < $start) return 0;

        return max(1, (int)(($end - $start) / 86400) + 1);
    }
}

if (!function_exists(\'calculateRentalPrice\')) {
    function calculateRentalPrice($modx, $carCode, $pickupDate, $dropoffDate) {
        $days = getRentalDays($pickupDate, $dropoffDate);
        if ($days <= 0 || $carCode === \'\') return \'\';

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

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$rows) return \'\';

        $rates = [];
        foreach ($rows as $row) {
            $duration = (int)($row[\'duration\'] ?? 0);
            $rate     = (float)($row[\'rate\'] ?? 0);

            if ($duration > 0) {
                $rates[$duration] = $rate;
            }
        }

        if (!$rates) return \'\';

        ksort($rates);

        $maxDuration = max(array_keys($rates));
        $lastRate    = (float)$rates[$maxDuration];
        $total       = 0;

        for ($d = 1; $d <= $days; $d++) {
            if (isset($rates[$d])) {
                $total += (float)$rates[$d];
            } elseif ($d > $maxDuration) {
                $total += $lastRate;
            } else {
                return \'\';
            }
        }

        return number_format($total, 2, \'.\', \'\');
    }
}

$days = getRentalDays($pickupDate, $dropoffDate);

/**
 * MODE 1: category cards
 */
if ($mode === \'cards\') {
    if ($groupBy) {
        $sql = "SELECT
                    v1.id,
                    v1.image,
                    v1.car_category,
                    v1.car_model,
                    v1.car_code,
                    v1.pax_count,
                    v1.luggage_count
                FROM {$table} v1
                INNER JOIN (
                    SELECT car_category, MIN(id) AS first_id
                    FROM {$table}
                    GROUP BY car_category
                ) v2 ON v1.id = v2.first_id
                ORDER BY v1.car_category ASC
                LIMIT :limit";
    } else {
        $sql = "SELECT
                    v.id,
                    v.image,
                    v.car_category,
                    v.car_model,
                    v.car_code,
                    v.pax_count,
                    v.luggage_count
                FROM {$table} v
                ORDER BY v.id DESC
                LIMIT :limit";
    }

    $stmt = $modx->prepare($sql);
    if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';

    $stmt->bindValue(\':limit\', $limit, PDO::PARAM_INT);
    if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!$rows) return \'<p>No vehicles found.</p>\';

    $uid = \'vehRow_\' . substr(md5(uniqid(\'\', true)), 0, 8);

    $out  = \'<div class="vehicleScroller" data-scroller="\' . $uid . \'">\';
    $out .= \'<button class="vehicleScroller__btn vehicleScroller__btn--left" type="button" aria-label="Scroll left" data-dir="-1">‹</button>\';
    $out .= \'<div class="vehicleRow mt-4 mt-lg-0" id="\' . $uid . \'">\';

    foreach ($rows as $row) {
        $cat = (string)($row[\'car_category\'] ?? \'\');



$formAction = $modx->makeUrl($step2PageId);

$ph = [
    \'image\'         => $row[\'image\'] ?? \'\',
    \'car_category\'  => $cat,
    \'car_model\'     => $row[\'car_model\'] ?? \'\',
    \'car_code\'      => $row[\'car_code\'] ?? \'\',
    \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
    \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
    \'price\'         => calculateRentalPrice($modx, $row[\'car_code\'] ?? \'\', $pickupDate, $dropoffDate),
    \'days\'          => $days,
    \'deal_link\'     => \'\',
    \'form_action\'   => $formAction,
    \'vehicle_id\'    => (int)$row[\'id\'],
    \'is_active\'     => ($currentCat !== \'\' && strcasecmp($currentCat, $cat) === 0) ? 1 : 0,
];

        $out .= $modx->getChunk($tpl, $ph);
    }

    $out .= \'</div>\';
    $out .= \'<button class="vehicleScroller__btn vehicleScroller__btn--right" type="button" aria-label="Scroll right" data-dir="1">›</button>\';
    $out .= \'</div>\';

    return $out;
}

/**
 * MODE 2: vehicle list
 */
$sql = "SELECT
            v.id,
            v.image,
            v.car_category,
            v.car_model,
            v.car_code,
            v.transmission_type,
            v.pax_count,
            v.luggage_count
        FROM {$table} v";

$params = [];
if ($currentCat !== \'\') {
    $sql .= " WHERE v.car_category = :current_cat";
    $params[\':current_cat\'] = $currentCat;
}

$sql .= " ORDER BY v.car_category ASC, v.id ASC";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';

foreach ($params as $key => $val) {
    $stmt->bindValue($key, $val, PDO::PARAM_STR);
}

if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!$rows) return \'<p>No vehicles found.</p>\';

$grouped = [];
foreach ($rows as $row) {
    $cat = trim((string)($row[\'car_category\'] ?? \'Uncategorized\'));
    if (!isset($grouped[$cat])) $grouped[$cat] = [];

$originalPrice = (float) calculateRentalPrice(
    $modx,
    $row[\'car_code\'] ?? \'\',
    $pickupDate,
    $dropoffDate
);

$discountedPrice = $originalPrice;

if ($discountPercent > 0 && $originalPrice > 0) {
    $discountedPrice = $originalPrice - (($originalPrice * $discountPercent) / 100);
}

$row[\'calculated_price\'] = $discountedPrice > 0 ? number_format($discountedPrice, 2, \'.\', \'\') : \'\';
$row[\'original_price\'] = $originalPrice > 0 ? number_format($originalPrice, 2, \'.\', \'\') : \'\';
$row[\'discount_percent\'] = $discountPercent;

$row[\'form_action\'] = $modx->makeUrl($step2PageId);
$row[\'vehicle_id\']  = (int)$row[\'id\'];

    $grouped[$cat][] = $row;
}

$out = \'<div id="vehicleGroups">\';

foreach ($grouped as $cat => $items) {
    $safeCat = htmlspecialchars($cat, ENT_QUOTES, \'UTF-8\');
    $out .= \'<div class="vehicleGroup" data-category="\' . $safeCat . \'">\';
    foreach ($items as $index => $row) {
$ph = [
    \'id\'               => (int)($row[\'id\'] ?? 0),
    \'image\'            => $row[\'image\'] ?? \'\',
    \'car_model\'        => $row[\'car_model\'] ?? \'\',
    \'car_category\'     => $cat,
    \'car_code\'         => $row[\'car_code\'] ?? \'\',
    \'pax_count\'        => (int)($row[\'pax_count\'] ?? 0),
    \'luggage_count\'    => (int)($row[\'luggage_count\'] ?? 0),
    \'transmission_type\'         => $row[\'transmission_type\'] ?? \'\',
    \'price\'            => $row[\'calculated_price\'] ?? \'\',
    \'original_price\'   => $row[\'original_price\'] ?? \'\',
    \'discount_percent\' => $row[\'discount_percent\'] ?? 0,
    \'discount_raw\'     => $discountRaw,
    \'days\'             => $days,
    \'form_action\'      => $row[\'form_action\'] ?? \'\',
    \'vehicle_id\'       => $row[\'vehicle_id\'] ?? 0,
    \'is_first\'         => $index === 0 ? 1 : 0,
];

        $out .= \'<div class="vehicleItem" data-first="\' . ($index === 0 ? \'1\' : \'0\') . \'">\';
        $out .= $modx->getChunk($tplItem, $ph);
        $out .= \'</div>\';
    }

    $out .= \'</div>\';
}

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
          'snippet' => 'if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Snippet: RentSearchSummary
 * Uses SESSION instead of GET so details do not appear in URL
 */

$h = function($v) { return htmlspecialchars((string)$v, ENT_QUOTES, \'UTF-8\'); };

$search = $_SESSION[\'rent_search\'] ?? [];

$pickup  = trim($search[\'pickup_location\'] ?? \'\');
$dropoff = trim($search[\'dropoff_location\'] ?? \'\');
$pickDT  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropDT  = trim($search[\'dropoff_datetime\'] ?? \'\');

$same = ($dropoff === \'\');

$resultsPageId = (int)$modx->getOption(\'resultsPageId\', $scriptProperties, 39);
$action = $modx->makeUrl($resultsPageId);

$out = \'<div class="rentWidget">\'; 
$out .= \'  <form class="rentWidgetForm" action="\'.$h($action).\'" method="post">\';
$out .= \'    <input type="hidden" name="id" value="\'.$resultsPageId.\'">\';

$out .= \' <div class="rentWidget__row">\'; 
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

$out .= \' <div class="rentWidget__row mt-0 js-dropoffRow" \'.($same ? \'style="display:none;"\' : \'\').\'>\';
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
          'content' => 'if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Snippet: RentSearchSummary
 * Uses SESSION instead of GET so details do not appear in URL
 */

$h = function($v) { return htmlspecialchars((string)$v, ENT_QUOTES, \'UTF-8\'); };

$search = $_SESSION[\'rent_search\'] ?? [];

$pickup  = trim($search[\'pickup_location\'] ?? \'\');
$dropoff = trim($search[\'dropoff_location\'] ?? \'\');
$pickDT  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropDT  = trim($search[\'dropoff_datetime\'] ?? \'\');

$same = ($dropoff === \'\');

$resultsPageId = (int)$modx->getOption(\'resultsPageId\', $scriptProperties, 39);
$action = $modx->makeUrl($resultsPageId);

$out = \'<div class="rentWidget">\'; 
$out .= \'  <form class="rentWidgetForm" action="\'.$h($action).\'" method="post">\';
$out .= \'    <input type="hidden" name="id" value="\'.$resultsPageId.\'">\';

$out .= \' <div class="rentWidget__row">\'; 
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

$out .= \' <div class="rentWidget__row mt-0 js-dropoffRow" \'.($same ? \'style="display:none;"\' : \'\').\'>\';
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