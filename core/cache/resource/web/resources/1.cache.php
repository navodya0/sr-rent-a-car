<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'pagetitle' => 'Home',
    'longtitle' => 'Congratulations!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '   
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5861K2TN4V"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag(\'js\', new Date());

    gtag(\'config\', \'G-5861K2TN4V\');
</script>

<!-- home hero section -->
<section class="heroRent heroRent--yacht">
  <div class="heroRent__frame">
    <!-- Swiper -->
    <div class="heroRent__swiper swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/1.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/2.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/3.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="heroRent__content">
      <div class="container-fluid" style="padding: 0 2%;">
        <div class="heroRent__contentInner heroRent__contentInner--left">
          <span class="heroRent__sub">Affordable</span>
          <h1 class="heroRent__title">Sri Lanka Rent A Car</h1>
          <p class="heroRent__lead">Premium vehicles • Chauffeur services • Airport pickup</p>
        </div>
      </div>
    </div>

    <!-- Booking Bar -->
    <div class="heroRent__bar">
      <div class="container-fluid" style="padding: 0 2%; position: relative;">

        <!-- Mobile Accordion Toggle -->
        <button type="button" class="heroRentAcc__toggle" aria-expanded="false" aria-controls="heroRentAccPanel">
          <span class="text-white">Search & Reserve</span>
          <span class="heroRentAcc__icon" aria-hidden="true"></span>
        </button>

        <!-- Accordion Panel / Booking Card -->
        <div class="heroRentAcc__panel" id="heroRentAccPanel">
          <div class="heroRentCard">
            <!-- Header Banner -->
            <div class="heroRentCard__header">
              <div class="heroRentCard__badge">
                <svg class="heroRentCard__tagIcon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#ffc107" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                  <line x1="7" y1="7" x2="7.01" y2="7"></line>
                </svg>
              </div>
              <div class="heroRentCard__headerText">
                <h2 class="heroRentCard__title">Check Your Rates Before Booking</h2>
                <p class="heroRentCard__subtitle">Enter your trip details to view available vehicles and rates.</p>
              </div>
            </div>

            <!-- Form -->
            <form class="heroRentForm" action="[[~39]]" method="post">
              <input type="hidden" name="id" value="39">
              <input type="hidden" name="search_source" value="home">

              <div class="heroRentForm__grid">

                <!-- Pickup -->
                <div class="heroRentForm__field heroRentForm__field--pickup">
                  <label class="heroRentForm__label" for="heroRent_pickup">Vehicle Pickup Location</label>
                  <div class="heroRentForm__inputBox">
                    <i class="fas fa-map-marker-alt heroRentForm__icon" aria-hidden="true"></i>
                    <input class="heroRentForm__input" id="heroRent_pickup" type="text" name="pickup_location" placeholder="Colombo Bandaranaike Airport" value="Colombo Bandaranaike International Airport (CMB)" required>
                    <i class="fas fa-chevron-down heroRentForm__arrow" aria-hidden="true"></i>
                  </div>
                </div>

                <!-- Return to same location tick mark (in between) -->
                <div class="heroRentForm__field heroRentForm__field--same">
                  <div class="heroRentForm__checkWrap">
                    <label class="heroRentForm__checkLabel" for="heroRent_sameLocation">
                      <input type="checkbox" id="heroRent_sameLocation" checked>
                      <span>Return to same location</span>
                    </label>
                  </div>
                </div>

                <!-- Drop-off (shown if not same location) -->
                <div class="heroRentForm__field heroRentForm__field--drop" id="heroRent_dropWrap" style="display:none;">
                  <label class="heroRentForm__label" for="heroRent_dropInput">Vehicle Drop-off Location</label>
                  <div class="heroRentForm__inputBox">
                    <i class="fas fa-map-marker-alt heroRentForm__icon" aria-hidden="true"></i>
                    <input class="heroRentForm__input" type="text" name="dropoff_location" id="heroRent_dropInput" placeholder="e.g., Kandy">
                  </div>
                </div>

                <!-- Pickup datetime -->
                <div class="heroRentForm__field heroRentForm__field--datetime">
                  <label class="heroRentForm__label" for="heroRent_pickupDT">Pickup Date & Time</label>
                  <div class="heroRentForm__inputBox">
                    <i class="far fa-calendar-alt heroRentForm__icon" aria-hidden="true"></i>
                    <input class="heroRentForm__input heroRentDT" id="heroRent_pickupDT" type="text" name="pickup_datetime" placeholder="Pickup Date & Time" required>
                  </div>
                </div>

                <!-- Dropoff datetime -->
                <div class="heroRentForm__field heroRentForm__field--datetime">
                  <label class="heroRentForm__label" for="heroRent_dropDT">Drop-off Date & Time</label>
                  <div class="heroRentForm__inputBox">
                    <i class="far fa-calendar-alt heroRentForm__icon" aria-hidden="true"></i>
                    <input class="heroRentForm__input heroRentDT" id="heroRent_dropDT" type="text" name="dropoff_datetime" placeholder="Drop-off Date & Time" required>
                  </div>
                </div>

                <!-- Submit -->
                <div class="heroRentForm__field heroRentForm__field--submit">
                  <button type="submit" class="heroRentForm__btn">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <span>Check Rates</span>
                  </button>
                </div>

              </div>
            </form>
          </div>
        </div>

        <div class="heroResultsWrap">
          <div style="width: 100%;">
            <section id="heroResultsSection" class="heroResults">
              <div class="heroResults__header pb-0 pt-0">
                <h3 class="heroResults__title"><i class="fas fa-car-side" style="color: #ffc107; margin-right: 8px;"></i> Vehicles matching your search</h3>
                <button type="button" class="heroResults__close" aria-label="Close">&times;</button>
              </div>
              <div id="heroResultsLoading" class="heroResults__loading" style="display:none;">Searching vehicles...</div>
              <div id="heroResultsEmpty" class="heroResults__empty" style="display:none;">No vehicles matched your search. Try different dates.</div>
              <div id="heroResultsGrid" class="heroResults__grid"></div>
            </section>
          </div>
        </div>


        <!-- Mobile results modal -->
        <div id="heroResultsModal" class="heroResultsModal" hidden>
          <div class="heroResultsModal__backdrop"></div>
          <div class="heroResultsModal__panel">
            <div class="heroResultsModal__header">
              <h3>Vehicles matching your search</h3>
              <button type="button" class="heroResultsModal__close" aria-label="Close">&times;</button>
            </div>
            <div class="heroResultsModal__body">
              <div id="heroResultsModalLoading" class="heroResults__loading" style="display:none;">Searching vehicles...</div>
              <div id="heroResultsModalEmpty" class="heroResults__empty" style="display:none;">No vehicles matched your search. Try different dates.</div>
              <div id="heroResultsModalGrid" class="heroResultsModal__grid"></div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Wave bottom -->
    <div class="heroRent__wave">
      <svg viewBox="0 0 1440 180" preserveAspectRatio="none">
        <path fill="#ffffff" d="
          M0,170
          C220,170 360,165 520,150
          C820,120 980,55 1440,85
          L1440,180
          L0,180
          Z">
        </path>
      </svg>
    </div>

  </div>
</section>


<!-- Hidden form used to carry the person to Book Now (step 2) with search + vehicle context -->
<form id="heroBookNowForm" action="[[~39]]" method="post" style="display:none;">
  <input type="hidden" name="id" value="39">
  <input type="hidden" name="search_source" value="home">
  <input type="hidden" name="pickup_location" id="heroBookNow_pickupLocation" value="">
  <input type="hidden" name="dropoff_location" id="heroBookNow_dropoffLocation" value="">
  <input type="hidden" name="pickup_datetime" id="heroBookNow_pickupDatetime" value="">
  <input type="hidden" name="dropoff_datetime" id="heroBookNow_dropoffDatetime" value="">
  <input type="hidden" name="passenger_count" id="heroBookNow_passengerCount" value="">
  <input type="hidden" name="luggage_count" id="heroBookNow_luggageCount" value="">
  <input type="hidden" name="selected_vehicle_id" id="heroBookNow_selectedVehicleId" value="">
</form>


<!-- who we are section -->
<section class="ftco-section ftco-wrap-about srAbout">
  <div class="container">
    <div id="tsparticles"></div>

    <div class="row align-items-start">
      <!-- LEFT: big image -->
      <div class="col-lg-5">
        <div class="srAbout__bigImg" style="background-image:url(\'assets/images/home/about_us_1.jpg\');"></div>
      </div>

      <!-- RIGHT: content -->
      <div class="col-lg-7">
        <div class="srAbout__content ftco-animate pt-0">

          <div class="srAbout__heading">
            <span class="srAbout__tag">WHO</span>
            <h2 class="srAbout__title">We Are</h2>
          </div>

          <p class="srAbout__text">
            <b class="srAbout__brand">SR Rent A Car</b> 
            is a locally owned and operated car rental company in Sri Lanka that provides affordable options for all travelers.
            The SR Team has been welcoming visitors from all over the world since 2004. We understand what our clients expect
            and deliver because we know what it’s like to be a consumer.
          </p>

          <!-- Floating Image Inside Text -->
          <div class="srAbout__floatImg" style="background-image:url(\'assets/images/home/about_us_2.jpg\');"></div>

          <p class="srAbout__text">
            Our new fleets of vehicles are maintained to the highest standard, ensuring cleanliness & reliability.
            We take safety very seriously, making it easier for you to relax and enjoy a family vacation.
            From a fleet of more than 500 vehicles, you can find the perfect match between budget and luxury from well-known brands.
          </p>

          <p class="srAbout__text">
            With offices conveniently located near Bandaranaike International Airport, we\'re able to meet and greet you with a smile
            and provide a two-way airport shuttle. You can also try our doorstep delivery service anywhere in the country for a nominal fee.
          </p>

        </div>
      </div>
    </div>
  </div>
</section>
		
<!-- counter section -->
<section class="srStats" id="section-counter">
  <div class="container">
    <div class="srStats__grid">

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-award"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="15">0</strong>
          <span class="srStats__label">Awards</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-clock"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="20">0</strong>
          <span class="srStats__label">Years of Experience</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-car-side"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="500">0</strong>
          <span class="srStats__label">Vehicles</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-user-tie"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="560">0</strong>
          <span class="srStats__label">Chauffeurs</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-smile"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="45000">0</strong>
          <span class="srStats__label">Happy Customers Annually</span>
        </div>
      </div>

    </div>
  </div>
</section>

[[!Offers]]

<!-- priorities section -->
<section id="priorities" class="priority-section py-5">
  <div class="container">
    <div class="text-center section-header mb-4">
      <span class="priority-badge">Our Travel Focus</span>
      <h2 class="mt-2">Designed for International Travelers with Regional Priority</h2>
      <p>
        At SR Rent A Car, we proudly serve travelers from around the world with reliable,
        comfortable, and safe vehicle rental services across Sri Lanka. While we warmly
        welcome all international guests, we place special priority on visitors from the
        South Asian region by offering more personalized assistance, flexible service,
        and a smoother booking experience.
      </p>
    </div>

    <div class="row g-4 align-items-stretch">
      <!-- Left small cards -->
      <div class="col-lg-7">
        <div class="travel-card big-card indian-card">
            <div class="card-overlay">
                <a href="[[~40]]" class="country-tag btn">Indian Travelers</a>
                <p>We provide tailored vehicle rental services designed especially for Indian travelers visiting Sri Lanka.</p>
            </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="row g-4 h-100">
          <div class="col-12">
            <div class="travel-card small-card russian-card">
                <div class="card-overlay">
                    <a href="[[~42]]" class="country-tag btn">Russian Travelers</a>
                    <h3>Comfortable Travel for Russian Visitors</h3>
                </div>
            </div>
          </div>

          <div class="col-12 mt-3">
            <div class="travel-card small-card australian-card">
                <div class="card-overlay">
                    <a href="[[~42]]" class="country-tag btn">Australian Travelers</a>
                    <h3>Flexible Rides for Australian Guests</h3>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- our fleet section -->
<section id="our-fleet" class="fleet-members-section py-5">
  <div class="container">
    <div class="row align-items-center mb-0">
      <div class="col-lg-6">
        <span class="fleet-badge">Our Fleet</span>
        <h2 class="fleet-heading mt-3">Newly Joined Fleet Members</h2>
        <p class="fleet-subtext">
          Discover the latest vehicles added to SR Rent A Car. From compact city cars to premium SUVs
          and luxury coaches, our newest fleet members are ready to deliver comfort, safety, and style
          for every journey across Sri Lanka.
        </p>
      </div>

      <div class="col-lg-6">
        <div class="fleet-hero-image">
            <div class="swiper fleetSwiper">
                <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="assets/images/fleet/1.png" alt="Fleet 1">
                </div>

                <div class="swiper-slide">
                    <img src="assets/images/fleet/2.png" alt="Fleet 2">
                </div>

                <div class="swiper-slide">
                    <img src="assets/images/fleet/3.png" alt="Fleet 3">
                </div>

             <div class="swiper-slide">
                    <img src="assets/images/fleet/4.png" alt="Fleet 3">
                </div>

                </div>
            </div>
            </div>
      </div>
    </div>
  </div>
</section>

<!-- why-special section -->
<section id="why-special" class="srBusiness py-5">
  <div class="container">
    <div class="srBusiness__layout">

      <!-- Left Intro -->
      <div class="srBusiness__intro">
        <span class="srBusiness__tag">OUR SERVICES</span>
        <h2 class="srBusiness__title">More Than Just Vehicle Rentals</h2>
        <div class="srBusiness__line"></div>
        <p class="srBusiness__text">
          We go beyond car rentals by offering a complete travel support experience in Sri Lanka.
          From trusted transportation to holiday planning and airport convenience, our businesses
          are designed to make every journey easier, safer, and more comfortable.
        </p>
      </div>

      <!-- Featured center card -->
      <div class="srBusiness__card srBusiness__card--light srBusiness__card--vacations">
        <div class="srBusiness__icon">
          <i class="fas fa-umbrella-beach"></i>
        </div>
        <h3>Explore Vacations</h3>
        <p>
          Curated holiday experiences, tour planning, and travel packages to help you discover Sri Lanka.
        </p>
        <a href="https://explorevacations.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <div class="srBusiness__card srBusiness__card--light srBusiness__card--parking">
        <div class="srBusiness__icon">
          <i class="fas fa-plane-departure"></i>
        </div>
        <h3>Airport Parking</h3>
        <p>
          Secure and convenient airport parking solutions designed to give travelers peace of mind.
        </p>
        <a href="https://airportparking.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <!-- SR Transfers -->
      <div class="srBusiness__card srBusiness__card--light srBusiness__card--transfers">
        <div class="srBusiness__icon">
          <i class="fas fa-route"></i>
        </div>
        <h3>SR Transfers</h3>
        <p>
          Comfortable and dependable airport, hotel, and intercity transfer services for every traveler.
        </p>
        <a href="https://srtransfers.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <div class="srBusiness__card srBusiness__card--light srBusiness__card--villa">
        <div class="srBusiness__icon">
          <i class="fas fa-hotel"></i>
        </div>
        <h3>The 9 Trees Boutique Villa</h3>
        <p>
            Experience premium comfort and peaceful relaxation at The 9 Trees Boutique Villa.
        </p>
        <a href="https://www.facebook.com/the9treesboutiquevilla" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <!-- 24/7 Support -->
      <div class="srBusiness__card srBusiness__card--light srBusiness__card--support">
        <div class="srBusiness__icon">
          <i class="fas fa-headset"></i>
        </div>
        <h3>24/7 Travel Support</h3>
        <p>
          Dedicated customer assistance to support your transport and travel needs at any time.
        </p>
        <a href="[[~6]]" class="srBusiness__btnCard">
          Contact →
        </a>
      </div>

    </div>
  </div>
</section>


  
<!-- what we offer section -->
<section class="ftco-section we-offer">
  <div class="container">
    <div class="row justify-content-center mb-0">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading_ourfleet">What We Offer</span>
        <h2 class="mb-4">Our Services</h2>
      </div>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <a href="[[~9]]" class="offer-card">
          <div class="offer-head">
            <h3 class="offer-title">Rent A Car</h3>
          </div>

          <div class="offer-media">
            <span class="offer-icon">
              <!-- car icon -->
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M3 13l2-6a2 2 0 0 1 1.9-1.3h10.2A2 2 0 0 1 19 7l2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 13h14v5a1 1 0 0 1-1 1h-1" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 19H4a1 1 0 0 1-1-1v-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="7.5" cy="18" r="1" fill="currentColor"/>
                <circle cx="16.5" cy="18" r="1" fill="currentColor"/>
              </svg>
            </span>

            <img src="assets/images/home/rentacar.jpg" alt="Rent A Car" class="offer-img">
          </div>

          <div class="offer-bubble">
            <p>
              SR Rent A Car is an independent car rental company in Sri Lanka since 2004.
              We offer luxurious customer service at affordable rates.
            </p>
            <span class="offer-arrow">↗</span>
          </div>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <a href="[[~11]]" class="offer-card">
          <div class="offer-head">
            <h4 class="offer-title">Airport Transfer</h4>
          </div>

          <div class="offer-media">
            <span class="offer-icon">
              <!-- plane icon -->
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M10 21l2-7 7-2 2 2-2 7-7 2-2-2z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M12 14L3 9l2-2 9 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M14 12l5-9 2 2-5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </span>

            <img src="assets/images/home/transfer.jpg" alt="Airport Transfer" class="offer-img">
          </div>

          <div class="offer-bubble">
            <p>
              Chauffeur-driven airport and hotel transfers across Sri Lanka.
              Service available for Colombo International Airport & all hotels.
            </p>
            <span class="offer-arrow">↗</span>
          </div>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <a href="[[~3]]" class="offer-card">
          <div class="offer-head">
            <h4 class="offer-title">Wedding Rentals</h4>
          </div>

          <div class="offer-media">
            <span class="offer-icon">
              <!-- heart icon -->
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M12 21s-7-4.6-9.5-8.5C.6 9.5 2.3 6 6 6c2 0 3.2 1 4 2 0 0 1.2-2 4-2 3.7 0 5.4 3.5 3.5 6.5C19 16.4 12 21 12 21z"
                  stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
              </svg>
            </span>

            <img src="assets/images/home/wedding.jpg" alt="Wedding Rentals" class="offer-img">
          </div>

          <div class="offer-bubble">
            <p>
              Make your wedding day perfect with premium vehicles and professional service.
              Comfort, style, and punctuality guaranteed.
            </p>
            <span class="offer-arrow">↗</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- testimonials section -->
<section class="testimonials-modern">
  <div class="container">
    <div class="text-center mb-0">
      <span class="tm-sub">Testimonial</span>
      <h2 class="tm-title">We Care About Our<br>Customers Experience Too</h2>
    </div>

    <div class="tm-wrap">
      <div class="tm-controls">
        <button class="tm-btn tm-prev" type="button" aria-label="Previous">&#8592;</button>
        <button class="tm-btn tm-next" type="button" aria-label="Next">&#8594;</button>
      </div>

      <div class="swiper tmSwiper">
        <div class="swiper-wrapper" id="googleReviewsWrapper">
          <!-- reviews will be inserted here -->
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="https://www.google.com/search?client=firefox-b-d&sca_esv=9151e0e90600ee3c&si=AL3DRZFIhG6pAqfNLal55wUTwygCG0fClF3UxiOmgw9Hq7nbWdWJUU6NpxzcEPVLFQQsT7kAueOwmfglvNUMRgYs_amlJY3vAqLLCGNXN5gP9EdBmecitfCH_3VoarzY42Cez1-7xoR-Q5y_2sRxn9kbFytBgN7Vmw%3D%3D&q=SR+Rent+A+Car+Sri+Lanka+Reviews&sa=X&ved=2ahUKEwi5sf2-hLiTAxVnzDgGHRjtHvYQ0bkNegQIJhAH&biw=1536&bih=730&dpr=1.25" target="_blank" rel="noopener">
        <img src="assets/images/home/google.png" alt="Google" style="max-width:180px;">
      </a>
    </div>
  </div>
</section>

<!-- blog section -->
<section class="ftco-section bg-light blog-modern" style="background-color: #ffffffbf !important;">
  <div class="container">
    <div class="row justify-content-center mb-0">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading_ourfleet">Blog</span>
        <h2 class="mb-4">Recent Posts</h2>
      </div>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <article class="post-card">
          <a class="post-media" href="[[~7]]" aria-label="Read post: [[*pagetitle]]">
            <img src="assets/images/blog/car_crashed.jpg" alt="Navigating a Vehicle Accident in Sri Lanka" />
            <span class="post-badge">Sri Lanka Travel Guide</span>
            <span class="post-hover">Read more →</span>
          </a>

          <div class="post-body">
            <ul class="post-meta">
              <li><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
              <li><i class="far fa-clock"></i> Apr 19, 2024</li>
            </ul>

            <h3 class="post-title">
              <a href="[[~7]]" aria-label="Read post: [[*pagetitle]]">Navigating a Vehicle Accident in Sri Lanka as a Foreigner: A Comprehensive Guide</a>
            </h3>

            <p class="post-excerpt">
              Driving in a foreign country can be an exciting experience, but it\'s essential to be prepared for unexpected situations like a vehicle accident...
            </p>

            <a class="post-btn" href="[[~7]]" aria-label="Read post: [[*pagetitle]]">Read more</a>
          </div>
        </article>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <article class="post-card">
          <a class="post-media" href="[[~8]]" aria-label="Read post: [[*pagetitle]]">
            <img src="assets/images/blog/hidden_gems.jpg" alt="Hidden Gems near Kandy" />
            <span class="post-badge">Sri Lanka Travel Guide</span>
            <span class="post-hover">Read more →</span>
          </a>

          <div class="post-body">
            <ul class="post-meta">
              <li><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
              <li><i class="far fa-clock"></i> Sep 20, 2023</li>
            </ul>

            <h3 class="post-title">
              <a href="[[~8]]" aria-label="Read post: [[*pagetitle]]">Hidden Gems near Kandy to Discover with Your Rental Car</a>
            </h3>

            <p class="post-excerpt">
              Kandy, the cultural jewel of Sri Lanka, beckons travellers with its rich history, vibrant culture, and captivating landscapes...
            </p>

            <a class="post-btn" href="[[~8]]" aria-label="Read post: [[*pagetitle]]">Read more</a>
          </div>
        </article>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <article class="post-card">
          <a class="post-media" href="[[~12]]" aria-label="Read post: [[*pagetitle]]">
            <img src="assets/images/blog/driving_license.jpg" alt="Valid Driving Licenses To Rent A Car" />
            <span class="post-badge">Sri Lanka Travel Guide</span>
            <span class="post-hover">Read more →</span>
          </a>

          <div class="post-body">
            <ul class="post-meta">
              <li><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
              <li><i class="far fa-clock"></i> Nov 1, 2021</li>
            </ul>

            <h3 class="post-title">
              <a href="[[~12]]" aria-label="Read post: [[*pagetitle]]">Valid Driving Licenses To Rent A Car In Sri Lanka</a>
            </h3>

            <p class="post-excerpt">
              Driving in a foreign country can be an exciting experience, but it\'s essential to be prepared for unexpected situations...
            </p>

            <a class="post-btn" href="[[~12]]" aria-label="Read post: [[*pagetitle]]">Read more</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Large Button Section -->
    <div class="text-center mt-5">
      <a class="theme-btn btn-style-two" href="[[~5]]" aria-label="Read post: [[*pagetitle]]" role="button" style="background: #023f75;"  >View All Posts</a>
    </div>
  </div>
</section>
	
<style>
/* =========================================================
   HERO BOOKING CARD & SEARCH RESULTS (DESKTOP & RESPONSIVE)
   ========================================================= */

/* Hero Container */
.heroRent,
.heroRent__frame,
.heroRent__bar {
  overflow: visible !important;
}

.heroRentCard {
  max-width: 1340px;
  width: 100%;
  margin: 0 auto;
  overflow: hidden;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.35);
  border: 1px solid #143254;
}

/* Swiper Background */
.heroRent--yacht .heroRent__swiper {
  position: absolute !important;
  inset: 0 !important;
  width: 100% !important;
  height: 100% !important;
  z-index: 1 !important;
}

.heroRent--yacht .heroRent__slide {
  background-size: cover !important;
  background-position: center !important;
  width: 100% !important;
  height: 100% !important;
}

/* Card Header Banner */
.heroRentCard__header {
  background: #08203e;
  padding: 12px 20px;
  display: flex;
  align-items: center;
  gap: 14px;
}

.heroRentCard__badge {
  width: 38px;
  height: 38px;
  min-width: 38px;
  border: 1.5px solid #ffc107;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255, 193, 7, 0.08);
}

.heroRentCard__title {
  font-size: 18px;
  font-weight: 700;
  color: #ffc107 !important;
  margin: 0;
  line-height: 1.2;
  letter-spacing: 0.2px;
}

.heroRentCard__subtitle {
  font-size: 12.5px;
  color: #ffffff !important;
  margin: 2px 0 0 0;
  opacity: 0.92;
}

/* Form Container */
.heroRentForm {
  background: #ffffff;
  padding: 14px 20px 10px 20px;
  position: relative;
}

.heroRentForm__labelRow {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  margin-bottom: 5px !important;
  gap: 8px !important;
  width: 100% !important;
}

.heroRentForm__labelRow .heroRentForm__label {
  margin-bottom: 0 !important;
}

.heroRentForm__label {
  display: block;
  font-size: 12px;
  font-weight: 700;
  color: #111827 !important;
  margin-bottom: 5px;
  white-space: nowrap;
  line-height: 1.2;
}

.heroRentForm__inputBox {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
}

.heroRentForm__icon {
  position: absolute;
  left: 10px;
  color: #374151;
  font-size: 13px;
  pointer-events: none;
  z-index: 2;
}

.heroRentForm__arrow {
  position: absolute;
  right: 10px;
  color: #4b5563;
  font-size: 11px;
  pointer-events: none;
  z-index: 2;
}

.heroRentForm__input,
.heroRentForm__select {
  width: 100%;
  height: 40px;
  border: 1px solid #d1d5db;
  border-radius: 6px;
  padding: 6px 26px 6px 30px;
  font-size: 12.5px;
  color: #111827;
  background: #ffffff;
  outline: none;
  font-weight: 600;
  text-overflow: ellipsis;
  transition: border-color 0.2s, box-shadow 0.2s;
}

.heroRentForm__select {
  appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}

.heroRentForm__input:focus,
.heroRentForm__select:focus {
  border-color: #ffc107;
  box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.25);
  background: #ffffff;
}

.heroRentForm__checkWrap {
  margin-top: 5px;
}

.heroRentForm__checkLabel {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  font-weight: 700;
  color: #111827 !important;
  cursor: pointer;
  margin: 0;
  user-select: none;
  line-height: 1.2;
}

.heroRentForm__checkLabel span {
  color: #111827 !important;
  font-size: 12px;
  font-weight: 700;
}

.heroRentForm__checkLabel input[type="checkbox"] {
  accent-color: #ffc107;
  width: 14px;
  height: 14px;
  margin: 0;
  cursor: pointer;
}

.heroRentForm__btn {
  width: 100%;
  height: 40px;
  background: #ffc107 !important;
  color: #0c2340 !important;
  font-weight: 800;
  font-size: 13.5px;
  border: none;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(255, 193, 7, 0.3);
  transition: background 0.2s, transform 0.15s;
  text-transform: none;
}

.heroRentForm__btn span {
  color: #0c2340 !important;
  font-weight: 800;
}

.heroRentForm__btn i {
  color: #0c2340 !important;
  font-size: 13px;
}

.heroRentForm__btn:hover {
  background: #e5ac00 !important;
  transform: translateY(-1px);
}

/* =========================================================
   DESKTOP FORM & RESULTS LAYOUT (>= 768px)
   ========================================================= */
@media (min-width: 768px) {
  .heroRent--yacht .heroRent__frame {
    height: auto !important;
    min-height: 100vh !important;
    padding-top: 100px !important;
    padding-bottom: 70px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    position: relative !important;
  }

  .heroRent__content {
    position: relative !important;
    inset: auto !important;
    z-index: 15 !important;
    display: block !important;
    pointer-events: auto !important;
    margin-bottom: 16px !important;
  }

  .heroRent__content .container,
  .heroRent__content .container-fluid {
    padding-left: 2% !important;
    padding-right: 2% !important;
    max-width: 1340px !important;
    margin: 0 auto !important;
  }

  .heroRent__contentInner--left {
    margin-top: 6rem !important;
    text-align: left !important;
    max-width: 850px !important;
  }

  .heroRent__sub {
    display: block !important;
    font-size: 40px !important;
    color: #efc900 !important;
    font-weight: 600 !important;
    font-family: "Great Vibes", cursive !important;
    margin-bottom: 2px !important;
    line-height: 1 !important;
    text-shadow: 0 4px 15px rgba(0,0,0,0.5) !important;
  }

  .heroRent__title {
    font-size: 34px !important;
    color: #ffffff !important;
    line-height: 1.15 !important;
    font-family: "Playfair Display", serif !important;
    letter-spacing: 2px !important;
    text-transform: uppercase !important;
    font-weight: 700 !important;
    margin-bottom: 4px !important;
    text-shadow: 0 4px 15px rgba(0,0,0,0.5) !important;
  }

  .heroRent__lead {
    color: rgba(255,255,255,0.92) !important;
    font-size: 14.5px !important;
    letter-spacing: 0.4px !important;
    font-weight: 600 !important;
    margin-bottom: 0 !important;
    text-shadow: 0 2px 10px rgba(0,0,0,0.5) !important;
  }

  .heroRent--yacht .heroRent__bar {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    right: auto !important;
    transform: none !important;
    z-index: 20 !important;
    margin-top: 0 !important;
  }

  .heroRentForm__grid {
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: flex-end !important;
    gap: 12px !important;
    width: 100% !important;
  }

  .heroRentForm__field {
    display: flex;
    flex-direction: column;
    min-width: 0;
  }

  .heroRentForm__field--pickup {
    flex: 3.2;
    min-width: 200px;
  }

  .heroRentForm__field--same {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 40px;
    margin-bottom: 0;
  }

  .heroRentForm__field--same .heroRentForm__checkWrap {
    margin-top: 0;
    display: flex;
    align-items: center;
    height: 100%;
  }

  .heroRentForm__field--drop {
    flex: 3.2;
    min-width: 200px;
  }

  .heroRentForm__field--datetime {
    flex: 2.2;
    min-width: 160px;
  }

  .heroRentForm__field--submit {
    flex: 1.4;
    min-width: 130px;
    margin-top: 0;
  }

  .heroResultsWrap {
    position: relative;
    max-width: 1340px;
    width: 100%;
    margin: 8px auto 0 auto;
    z-index: 9999;
  }

  .heroResults {
    display: none;
    flex-direction: column;
    background: transparent;
    box-shadow: none;
    border-radius: 0;
    overflow: visible;
  }

  .heroResults__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 6px 0 8px 0;
    border-bottom: none;
  }

  .heroResults__title {
    font-size: 14.5px;
    font-weight: 700;
    color: #ffffff !important;
    display: flex;
    align-items: center;
    gap: 6px;
    margin: 0;
    letter-spacing: 0.3px;
  }

  .heroResults__close {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    border: none;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 15px;
    transition: background 0.2s;
  }

  .heroResults__close:hover {
    background: rgba(255, 255, 255, 0.35);
    color: #ffffff;
  }

  .heroResults__grid {
    display: grid !important;
    grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
    gap: 8px !important;
    grid-auto-rows: 1fr;
    align-items: stretch;
    max-height: calc(100vh - 420px);
    min-height: 0;
    overflow-y: auto;
    padding: 2px 2px 14px 2px;
    scroll-behavior: smooth;
  }

  /* Desktop Vehicle Card - Auto Adjusting */
  .heroResultCard {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    padding: 6px 7px 0 7px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    width: 100%;
    box-sizing: border-box;
    overflow: hidden;
    min-height: 90px;
    transition: transform 0.2s, box-shadow 0.2s;
  }

  .heroResultCard:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.14);
  }

  .heroResultCard__main {
    display: flex;
    align-items: center;
    gap: 6px;
    min-width: 0;
    flex: 1;
  }

  .heroResultCard__imgWrap {
    width: 58px;
    max-width: 35%;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .heroResultCard__image {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
  }

  .heroResultCard__info {
    flex: 1;
    min-width: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 2px;
  }

  .heroResultCard__name {
    font-family: Georgia, "Times New Roman", serif;
    font-size: 11px;
    font-weight: 700;
    color: #111827 !important;
    line-height: 1.15;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: 0;
  }

  .heroResultCard__priceRow {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 3px;
    flex-wrap: wrap;
    margin-top: 1px;
  }

  .heroResultCard__price {
    color: #b81114 !important;
    font-size: 16px;
    font-weight: 700;
    white-space: nowrap;
  
  }

  .heroResultCard__price--empty {
    font-size: 10px;
    font-weight: 500;
    color: #6b7280 !important;
  }

  .heroResultCard__capacity {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 10px;
    font-weight: 600;
    color: #374151 !important;
    white-space: nowrap;
  }

  .heroResultCard__capacity span {
    color: #374151 !important;
    display: inline-flex;
    align-items: center;
    gap: 2px;
  }

  .heroResultCard__capacity i {
    color: #023f75 !important;
    font-size: 9.5px;
  }

  .heroResultCard__btn {
    width: calc(100% + 14px);
    margin: 5px -7px 0 -7px;
    background: #061d38;
    color: #ffffff !important;
    border: none;
    font-size: 11px;
    font-weight: 700;
    height: 24px;
    line-height: 24px;
    text-align: center;
    cursor: pointer;
    
    transition: background 0.15s;
    display: block;
    padding: 0;
  }

  .heroResultCard__btn:hover {
    background: #023f75;
    color: #ffffff !important;
  }

  .heroResultsModal {
    display: none !important;
  }
}

/* Custom Scrollbar for results */
.heroResults__grid::-webkit-scrollbar {
  width: 6px;
}
.heroResults__grid::-webkit-scrollbar-track {
  background: rgba(255, 255, 255, 0.15);
  border-radius: 6px;
}
.heroResults__grid::-webkit-scrollbar-thumb {
  background: #002656;
  border-radius: 6px;
}
.heroResults__grid::-webkit-scrollbar-thumb:hover {
  background: #023f75;
}

.heroResults__loading,
.heroResults__empty {
  text-align: center;
  padding: 16px;
  color: #ffffff;
  font-size: 13px;
  background: rgba(0, 0, 0, 0.4);
  border-radius: 8px;
}

/* =========================================================
   MOBILE ACCORDION & MODAL RULES (< 768px) - PRESERVED
   ========================================================= */
@media (max-width: 767.98px) {
  .heroRentCard__header {
    display: none;
  }

  .heroRentCard {
    border: none;
    box-shadow: none;
    border-radius: 0;
    background: transparent;
  }

  .heroRentForm {
    background: linear-gradient(180deg, rgba(255,255,255,.18), rgba(255,255,255,.08));
    border: 1px solid rgba(255,255,255,.16);
    box-shadow: 0 24px 80px rgba(0,0,0,.28);
    backdrop-filter: blur(18px);
    border-radius: 12px;
    padding: 16px;
  }

  .heroRentForm__grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .heroRentForm__label {
    color: #ffffff !important;
  }

  .heroRentForm__checkLabel span {
    color: #ffffff !important;
  }

  .heroRentForm__input,
  .heroRentForm__select {
    background: rgba(255, 255, 255, 0.95);
    height: 44px;
  }

  .heroResultsWrap {
    display: none !important;
  }

  .heroResultsModal {
    position: fixed;
    inset: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .heroResultsModal[hidden] {
    display: none;
  }

  .heroResultsModal__backdrop {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
  }

  .heroResultsModal__panel {
    position: relative;
    width: 100%;
    max-width: 420px;
    max-height: 80vh;
    background: #fff;
    border-radius: 16px;
    display: flex;
    flex-direction: column;
    animation: heroModalPopIn 0.2s ease-out;
    overflow: hidden;
  }

  .heroResultsModal__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 16px;
    border-bottom: 1px solid #eee;
  }

  .heroResultsModal__header h3 {
    font-size: 18px;
    font-weight: 800;
    margin: 0;
    background: linear-gradient(135deg, #023f75, #a30707);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    letter-spacing: 0.5px;
  }

  .heroResultsModal__close {
    background: rgba(0,0,0,0.05);
    border: none;
    font-size: 20px;
    line-height: 1;
    color: #333;
    cursor: pointer;
    padding: 6px 10px;
    border-radius: 50%;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
  }

  .heroResultsModal__close:hover {
    background: rgba(163, 7, 7, 0.1);
    color: #a30707;
    transform: rotate(90deg);
  }

  .heroResultsModal__body {
    overflow-y: auto;
    padding: 14px 16px 30px;
  }

  .heroResultsModal__grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-auto-rows: 1fr;
    gap: 10px;
  }

  .heroResultsModal__grid .heroResultCard {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 8px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .heroResultsModal__grid .heroResultCard__main {
    flex-direction: column;
    align-items: flex-start;
  }

  .heroResultsModal__grid .heroResultCard__imgWrap {
    width: 100%;
    height: 80px;
  }

  .heroResultsModal__grid .heroResultCard__imgWrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .heroResultsModal__grid .heroResultCard__name {
    font-size: 12px;
    font-weight: 700;
    margin-top: 4px;
  }

  .heroResultsModal__grid .heroResultCard__price {
    font-size: 16px;
    font-weight: 700;
    color: #dd1c1c !important;
  }

  .heroResultsModal__grid .heroResultCard__btn {
    width: 100%;
    margin-top: 6px;
    background: #002656;
    color: #fff;
    border: none;
    padding: 6px;
    font-size: 12px;
    font-weight: 700;
    cursor: pointer;
    border-radius: 4px;
  }
}

@keyframes heroModalPopIn {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

body.heroModalOpen {
  overflow: hidden;
}


@media (min-width: 1400px) {
    .heroRentForm {
        max-width: none;
        margin: 0 auto;
    }
}
</style>

<style>
	.card-body:hover {
		border-color: #051425; 
		box-shadow: 10px 20px 35px rgba(0, 0, 0, 0.2); 
	}
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyC-USaecnlmdi2fOMcDQl8BhId3-eYcg-Y&libraries=places"></script>


<script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const wrapper = document.getElementById(\'googleReviewsWrapper\');
    const REVIEW_WORD_LIMIT = 25;

    function escapeHtml(str) {
      return String(str || \'\')
        .replace(/&/g, \'&amp;\')
        .replace(/</g, \'&lt;\')
        .replace(/>/g, \'&gt;\')
        .replace(/"/g, \'&quot;\')
        .replace(/\'/g, \'&#039;\');
    }

    function renderStars(rating) {
      const full = Math.floor(Number(rating || 0));
      const empty = 5 - full;
      return \'★\'.repeat(full) + \'☆\'.repeat(empty);
    }

    function formatDate(dateStr) {
      if (!dateStr) return \'Google Review\';
      const d = new Date(dateStr);
      if (isNaN(d)) return \'Google Review\';
      return d.toLocaleDateString(\'en-US\', {
        month: \'short\',
        day: \'numeric\',
        year: \'numeric\'
      });
    }

    function getReviewerImage(review) {
      if (review?.authorAttribution?.photoUri) return review.authorAttribution.photoUri;
      return \'assets/images/home/avatae.webp\';
    }

    function getReviewerName(review) {
      if (review?.authorAttribution?.displayName) return review.authorAttribution.displayName;
      return \'Google User\';
    }

    function getReviewText(review) {
      if (review?.text?.text) return review.text.text;
      if (review?.originalText?.text) return review.originalText.text;
      return \'\';
    }

    function truncateWords(text, wordLimit) {
      const words = String(text || \'\').trim().split(/\\s+/).filter(Boolean);

      if (words.length <= wordLimit) {
        return {
          shortText: text,
          fullText: text,
          isTruncated: false
        };
      }

      return {
        shortText: words.slice(0, wordLimit).join(\' \') + \'...\',
        fullText: text,
        isTruncated: true
      };
    }

    fetch(\'assets/api/google-reviews.php\')
      .then(res => res.json())
      .then(data => {
        if (!data.success || !data.place || !Array.isArray(data.place.reviews)) {
          wrapper.innerHTML = \'<div class="swiper-slide"><div class="tm-card"><p class="tm-text">Reviews are not available right now.</p></div></div>\';
          return;
        }

        const reviews = data.place.reviews;

        wrapper.innerHTML = reviews.map((review, index) => {
          const name = escapeHtml(getReviewerName(review));
          const rawText = getReviewText(review);
          const { shortText, fullText, isTruncated } = truncateWords(rawText, REVIEW_WORD_LIMIT);
          const shortTextEscaped = escapeHtml(shortText);
          const fullTextEscaped = escapeHtml(fullText);
          const image = escapeHtml(getReviewerImage(review));
          const rating = Number(review.rating || 0);
          const stars = renderStars(rating);
          const date = formatDate(review.publishTime);
          const reviewId = `review-text-${index}`;

          return `
            <div class="swiper-slide">
              <div class="tm-card">
                <div class="tm-avatar">
                  <img 
  src="${image}" 
  alt="${name}" 
  onerror="this.onerror=null;this.src=\'assets/images/home/avatar.webp\';">
                </div>

                <p class="tm-text" 
                   id="${reviewId}" 
                   data-short="${shortTextEscaped}" 
                   data-full="${fullTextEscaped}" 
                   data-expanded="false">
                  “${shortTextEscaped}”
                </p>

                ${isTruncated ? `
                  <button type="button" class="tm-read-more-btn" data-target="${reviewId}">
                    Read More
                  </button>
                ` : \'\'}

                <div class="tm-footer">
                  <div>
                    <div class="tm-name">${name}</div>
                    <div class="tm-role">Google Review • ${date}</div>
                  </div>

                  <div class="tm-stars" aria-label="${rating} stars">
                    ${stars}
                  </div>
                </div>
              </div>
            </div>
          `;
        }).join(\'\');

        new Swiper(\'.tmSwiper\', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: reviews.length > 1,

        autoplay: {
            delay: 3000,              // slide every 3s
            disableOnInteraction: false,
            pauseOnMouseEnter: true   // pause on hover (nice UX)
        },

        speed: 800, // smooth transition

        breakpoints: {
            768: {
            slidesPerView: 2
            },
            1200: {
            slidesPerView: 3
            }
        }
        });

        document.querySelectorAll(\'.tm-read-more-btn\').forEach(button => {
          button.addEventListener(\'click\', function () {
            const targetId = this.getAttribute(\'data-target\');
            const reviewTextEl = document.getElementById(targetId);

            if (!reviewTextEl) return;

            const expanded = reviewTextEl.getAttribute(\'data-expanded\') === \'true\';
            const shortText = reviewTextEl.getAttribute(\'data-short\') || \'\';
            const fullText = reviewTextEl.getAttribute(\'data-full\') || \'\';

            if (expanded) {
              reviewTextEl.innerHTML = `“${shortText}”`;
              reviewTextEl.setAttribute(\'data-expanded\', \'false\');
              this.textContent = \'Read More\';
            } else {
              reviewTextEl.innerHTML = `“${fullText}”`;
              reviewTextEl.setAttribute(\'data-expanded\', \'true\');
              this.textContent = \'Read Less\';
            }
          });
        });
      })
      .catch(() => {
        wrapper.innerHTML = \'<div class="swiper-slide"><div class="tm-card"><p class="tm-text">Unable to load reviews at the moment.</p></div></div>\';
      });
  });
</script>

<script>
  // Swiper init
  const heroRentSwiper = new Swiper(\'.heroRent__swiper\', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 800,
    effect: \'fade\',
    fadeEffect: { crossFade: true },
    pagination: { el: \'.heroRent__dots\', clickable: true },
    navigation: { nextEl: \'.heroRent__next\', prevEl: \'.heroRent__prev\' }
  });
</script>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector(\'.heroRentAcc__toggle\');
    const panel = document.getElementById(\'heroRentAccPanel\');
    const mq = window.matchMedia("(max-width: 767px)");

    function setAccordionState() {
      if (!btn || !panel) return;

      const isMobile = mq.matches;

      if (isMobile) {
        if (btn.getAttribute("data-user-toggled") !== "1") {
          btn.setAttribute("aria-expanded", "false");
          panel.hidden = true;
        }
      } else {
        btn.setAttribute("aria-expanded", "true");
        panel.hidden = false;
      }
    }

    if (btn && panel) {
      btn.addEventListener("click", () => {
        btn.setAttribute("data-user-toggled", "1");
        const expanded = btn.getAttribute("aria-expanded") === "true";
        btn.setAttribute("aria-expanded", String(!expanded));
        panel.hidden = expanded;

        if (!expanded) setTimeout(initFlatpickr, 50);
      });

      // initial state
      setAccordionState();

      if (mq.addEventListener) {
        mq.addEventListener("change", () => {
          btn.removeAttribute("data-user-toggled");
          setAccordionState();
          if (!mq.matches) setTimeout(initFlatpickr, 0);
        });
      } else {
        window.addEventListener("resize", () => {
          btn.removeAttribute("data-user-toggled");
          setAccordionState();
          if (!mq.matches) setTimeout(initFlatpickr, 0);
        });
      }
    }

    // ----- Same location toggle -----
    const same = document.getElementById(\'heroRent_sameLocation\');
    const wrap = document.getElementById(\'heroRent_dropWrap\');
    const input = document.getElementById(\'heroRent_dropInput\');

    function toggleDrop(){
      if (!same || !wrap || !input) return;
      const show = !same.checked;
      wrap.style.display = show ? \'block\' : \'none\';
      input.required = show;
      if(!show) input.value = \'\';
    }

    if (same) {
      same.addEventListener(\'change\', toggleDrop);
      toggleDrop();
    }

    let fpInitialized = false;

    function initFlatpickr() {
      if (fpInitialized) return;

      if (typeof flatpickr === "undefined") {
        console.error("Flatpickr is not loaded. Include flatpickr.js before init.");
        return;
      }

      const pickupEl = document.getElementById("heroRent_pickupDT");
      const dropEl   = document.getElementById("heroRent_dropDT");
      if (!pickupEl || !dropEl) return;

      let dropPicker;

      const now = new Date();

      flatpickr(pickupEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: now,              
        minTime: now.getHours() + ":" + now.getMinutes(), 
        time_24hr: true,
        minuteIncrement: 15,
        disableMobile: true,
        onChange: function(selectedDates) {
          if (dropPicker && selectedDates[0]) {
            dropPicker.set("minDate", selectedDates[0]);

            // reset invalid drop
            const d = dropPicker.selectedDates[0];
            if (d && d <= selectedDates[0]) {
              dropPicker.clear();
            }
          }
        }
      });

      dropPicker = flatpickr(dropEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: new Date(),  
        time_24hr: true,
        minuteIncrement: 15,
        disableMobile: true
      });

      fpInitialized = true;
    }
    if (!mq.matches) initFlatpickr();

  });
</script>

<script>
	document.addEventListener("DOMContentLoaded", () => {

	function attachAuto(id, defaultValue = null){
		const el = document.getElementById(id);
		if(!el || !window.google) return;

		const ac = new google.maps.places.Autocomplete(el, {
		componentRestrictions: { country: "lk" }
		});

		// Set default value if provided
		if (defaultValue) {
		el.value = defaultValue;

		// Optional: force Google to recognize the default as a real place
		const service = new google.maps.places.AutocompleteService();
		service.getPlacePredictions({
			input: defaultValue,
			componentRestrictions: { country: "lk" }
		}, function(predictions, status) {
			if (status === google.maps.places.PlacesServiceStatus.OK && predictions.length > 0) {
			// You could optionally fetch full place details here if needed
			// But for most booking forms, just pre-filling text is enough
			}
		});
		}

		ac.addListener("place_changed", () => {
		const place = ac.getPlace();
		// console.log(place.formatted_address);
		});
	}

	// Pickup with default
	attachAuto("heroRent_pickup", "Colombo Bandaranaike International Airport (CMB)");

	// Dropoff without default
	attachAuto("heroRent_dropInput");

	});
</script>

<script>
	document.addEventListener("DOMContentLoaded", function () {
	new Swiper(".tmSwiper", {
		spaceBetween: 18,
		navigation: {
		nextEl: ".tm-next",
		prevEl: ".tm-prev",
		},
		breakpoints: {
		0:   { slidesPerView: 1 },
		768: { slidesPerView: 2 },
		992: { slidesPerView: 3 },
		},
	});
	});
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".number");
    const section = document.getElementById("section-counter");
    let started = false;

    const run = (el) => {
        const target = +el.dataset.number;
        let count = 0;
        const step = target / 100;

        const timer = setInterval(() => {
        count += step;
        if (count >= target) {
            el.textContent = target.toLocaleString() + "+";
            clearInterval(timer);
        } else {
            el.textContent = Math.floor(count).toLocaleString() + "+";
        }
        }, 20);
    };

    new IntersectionObserver(([entry]) => {
        if (entry.isIntersecting && !started) {
        started = true;
        counters.forEach(run);
        }
    }, { threshold: 0.3 }).observe(section);
    });
</script>

<script>
  new Swiper(".fleetSwiper", {
    loop: true,
    slidesPerView: 1,  
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    speed: 900,
    effect: "fade", 
    fadeEffect: {
      crossFade: true
    }
  });
</script>




<script>
document.addEventListener(\'DOMContentLoaded\', () => {
  const form = document.querySelector(\'.heroRentForm\');
  if (!form) return;

  const mq = window.matchMedia(\'(max-width: 767px)\');

  // Desktop inline panel
  const resultsSection = document.getElementById(\'heroResultsSection\');
  const resultsGrid = document.getElementById(\'heroResultsGrid\');
  const resultsLoading = document.getElementById(\'heroResultsLoading\');
  const resultsEmpty = document.getElementById(\'heroResultsEmpty\');
  const resultsClose = resultsSection.querySelector(\'.heroResults__close\');

  resultsClose.addEventListener(\'click\', () => {
    resultsSection.style.display = \'none\';
  });

  // Mobile modal
  const modal = document.getElementById(\'heroResultsModal\');
  if (modal && modal.parentElement !== document.body) {
    document.body.appendChild(modal);
  }
  const modalGrid = document.getElementById(\'heroResultsModalGrid\');
  const modalLoading = document.getElementById(\'heroResultsModalLoading\');
  const modalEmpty = document.getElementById(\'heroResultsModalEmpty\');
  const modalClose = modal.querySelector(\'.heroResultsModal__close\');
  const modalBackdrop = modal.querySelector(\'.heroResultsModal__backdrop\');

  function openModal() {
    modal.hidden = false;
    document.body.classList.add(\'heroModalOpen\');
  }
  function closeModal() {
    modal.hidden = true;
    document.body.classList.remove(\'heroModalOpen\');
  }
  modalClose.addEventListener(\'click\', closeModal);
  modalBackdrop.addEventListener(\'click\', closeModal);

  let lastSearchPayload = null;

  function formatEuro(amount) {
    const n = parseFloat(amount);
    if (isNaN(n)) return \'\';
    return \'€ \' + n.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  }

function buildCard(v) {
  const card = document.createElement(\'div\');
  card.className = \'heroResultCard\';

  const priceHtml = v.price
    ? \'<span class="heroResultCard__price">€ \' + parseFloat(v.price).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + \'</span>\'
    : \'<span class="heroResultCard__price heroResultCard__price--empty">Price on request</span>\';

  card.innerHTML = `
    <div class="heroResultCard__main">
      <div class="heroResultCard__imgWrap">
        <img class="heroResultCard__image" src="${v.image || \'\'}" alt="${v.car_model || v.car_category || \'Vehicle\'}">
      </div>
      <div class="heroResultCard__info">
        <div class="heroResultCard__name" title="${v.car_model || v.car_category || \'\'}">${v.car_model || v.car_category || \'\'}</div>
        <div class="heroResultCard__priceRow">
          ${priceHtml}
          <div class="heroResultCard__capacity">
            <span><i class="fas fa-user"></i> ${v.pax_count || 0}</span>
            <span><i class="fas fa-suitcase"></i> ${v.luggage_count || 0}</span>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="heroResultCard__btn" data-vehicle-id="${v.id}" data-car-code="${v.car_code}">Book Now</button>
  `;
  return card;
}

  function attachBookNow(grid) {
    grid.querySelectorAll(\'.heroResultCard__btn\').forEach(function (btn) {
      btn.addEventListener(\'click\', function () {
        if (lastSearchPayload) {
          const pickupLoc = document.getElementById(\'heroBookNow_pickupLocation\');
          if (pickupLoc) pickupLoc.value = lastSearchPayload.pickup_location || \'\';

          const dropLoc = document.getElementById(\'heroBookNow_dropoffLocation\');
          if (dropLoc) dropLoc.value = lastSearchPayload.dropoff_location || \'\';

          const pickupDt = document.getElementById(\'heroBookNow_pickupDatetime\');
          if (pickupDt) pickupDt.value = lastSearchPayload.pickup_datetime || \'\';

          const dropDt = document.getElementById(\'heroBookNow_dropoffDatetime\');
          if (dropDt) dropDt.value = lastSearchPayload.dropoff_datetime || \'\';

          const pax = document.getElementById(\'heroBookNow_passengerCount\');
          if (pax) pax.value = lastSearchPayload.passenger_count || \'\';

          const lug = document.getElementById(\'heroBookNow_luggageCount\');
          if (lug) lug.value = lastSearchPayload.luggage_count || \'\';
        }

        const selectedVehicleIdInput = document.getElementById(\'heroBookNow_selectedVehicleId\');
        if (selectedVehicleIdInput) {
          selectedVehicleIdInput.value = this.getAttribute(\'data-vehicle-id\') || \'\';
        }

        const form = document.getElementById(\'heroBookNowForm\');
        if (form) form.submit();
      });
    });
  }

  function dedupeByModel(vehicles) {
    const seen = new Set();
    const result = [];
    vehicles.forEach(function (v) {
      const key = (v.car_category || \'\').trim().toLowerCase();
      if (!key || seen.has(key)) return;
      seen.add(key);
      result.push(v);
    });
    return result;
  }

  function renderResults(vehicles) {
    const isMobile = mq.matches;
    const grid = isMobile ? modalGrid : resultsGrid;
    const emptyEl = isMobile ? modalEmpty : resultsEmpty;

    grid.innerHTML = \'\';

    const vehiclesList = dedupeByModel(vehicles || []);

    if (vehiclesList.length === 0) {
      emptyEl.style.display = \'block\';
      if (!isMobile) {
        resultsSection.style.display = \'none\';
      } else {
        closeModal();
      }
      alert("No vehicles matched your search. Try different dates or fewer passengers.");
      return;
    }

    emptyEl.style.display = \'none\';
    if (!isMobile) {
      resultsSection.style.display = \'flex\';
    }

    vehiclesList.forEach(function (v) {
      grid.appendChild(buildCard(v));
    });

    attachBookNow(grid);
  }

  form.addEventListener(\'submit\', function (e) {
    e.preventDefault();

    const pickup = document.getElementById("heroRent_pickupDT");
    const drop   = document.getElementById("heroRent_dropDT");

    let hasError = false;

    [pickup, drop].forEach(el => {
      if (el) el.style.border = \'\';
    });

    if (!pickup.value.trim()) {
      pickup.style.border = \'2px solid red\';
      hasError = true;
    }

    if (!drop.value.trim()) {
      drop.style.border = \'2px solid red\';
      hasError = true;
    }

    if (!hasError) {
      const pickupDate = new Date(pickup.value);
      const dropDate   = new Date(drop.value);

      if (dropDate <= pickupDate) {
        drop.style.border = \'2px solid red\';
        alert("Drop-off must be after pickup date.");
        hasError = true;
      }
    }

    if (hasError) {
      if (!pickup.value || !drop.value) {
        alert("Please select pickup and drop-off date & time.");
      }
      return;
    }

    const formData = new FormData(form);
    const payload = {
      pickup_location: formData.get(\'pickup_location\') || \'\',
      dropoff_location: formData.get(\'dropoff_location\') || formData.get(\'pickup_location\') || \'\',
      pickup_datetime: formData.get(\'pickup_datetime\') || \'\',
      dropoff_datetime: formData.get(\'dropoff_datetime\') || \'\',
      passenger_count: formData.get(\'passenger_count\') || \'\',
      luggage_count: formData.get(\'luggage_count\') || \'\'
    };

    lastSearchPayload = payload;

    const isMobile = mq.matches;

    if (isMobile) {
      modalGrid.innerHTML = \'\';
      modalEmpty.style.display = \'none\';
      modalLoading.style.display = \'block\';
      openModal();
    } else {
      resultsSection.style.display = \'flex\';
      resultsGrid.innerHTML = \'\';
      resultsEmpty.style.display = \'none\';
      resultsLoading.style.display = \'block\';
    }

    fetch(\'assets/includes/search_vehicles.php\', {
      method: \'POST\',
      headers: { \'Content-Type\': \'application/json\' },
      body: JSON.stringify(payload)
    })
    .then(function (res) { return res.json(); })
    .then(function (data) {
      if (isMobile) {
        modalLoading.style.display = \'none\';
      } else {
        resultsLoading.style.display = \'none\';
      }

      if (data.success && data.vehicles && data.vehicles.length > 0) {
        renderResults(data.vehicles);
      } else {
        const msg = data.message || \'No vehicles matched your search. Try different dates or fewer passengers.\';
        if (isMobile) {
          closeModal();
        } else {
          resultsSection.style.display = \'none\';
        }
      }
    })
    .catch(function () {
      if (isMobile) {
        modalLoading.style.display = \'none\';
        closeModal();
      } else {
        resultsLoading.style.display = \'none\';
        resultsSection.style.display = \'none\';
      }
    });
  });
});
</script>',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1723316876,
    'editedby' => 1,
    'editedon' => 1786725871,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
  
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
                        <a href="tel:+94763603666">+94 76 360 3666</a>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


<script>
document.addEventListener("DOMContentLoaded", function () {

    const logo = document.getElementById("dynamic-image");

    const normalLogo = "assets/images/logo_white.png";
    const scrollLogo = "assets/images/logo.png";

    window.addEventListener("scroll", function () {

        if (window.scrollY > 50) {
            logo.src = scrollLogo;
        } else {
            logo.src = normalLogo;
        }

    });

});
</script>

</body>
</html>



   
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5861K2TN4V"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag(\'js\', new Date());

    gtag(\'config\', \'G-5861K2TN4V\');
</script>

<!-- home hero section -->
<section class="heroRent heroRent--yacht">
  <div class="heroRent__frame">
    <!-- Swiper -->
    <div class="heroRent__swiper swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/1.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/2.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/3.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="heroRent__content">
      <div class="container-fluid" style="padding: 0 2%;">
        <div class="heroRent__contentInner heroRent__contentInner--left">
          <span class="heroRent__sub">Affordable</span>
          <h1 class="heroRent__title">Sri Lanka Rent A Car</h1>
          <p class="heroRent__lead">Premium vehicles • Chauffeur services • Airport pickup</p>
        </div>
      </div>
    </div>

    <!-- Booking Bar -->
    <div class="heroRent__bar">
      <div class="container-fluid" style="padding: 0 2%; position: relative;">

        <!-- Mobile Accordion Toggle -->
        <button type="button" class="heroRentAcc__toggle" aria-expanded="false" aria-controls="heroRentAccPanel">
          <span class="text-white">Search & Reserve</span>
          <span class="heroRentAcc__icon" aria-hidden="true"></span>
        </button>

        <!-- Accordion Panel / Booking Card -->
        <div class="heroRentAcc__panel" id="heroRentAccPanel">
          <div class="heroRentCard">
            <!-- Header Banner -->
            <div class="heroRentCard__header">
              <div class="heroRentCard__badge">
                <svg class="heroRentCard__tagIcon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#ffc107" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                  <line x1="7" y1="7" x2="7.01" y2="7"></line>
                </svg>
              </div>
              <div class="heroRentCard__headerText">
                <h2 class="heroRentCard__title">Check Your Rates Before Booking</h2>
                <p class="heroRentCard__subtitle">Enter your trip details to view available vehicles and rates.</p>
              </div>
            </div>

            <!-- Form -->
            <form class="heroRentForm" action="index.php?id=39" method="post">
              <input type="hidden" name="id" value="39">
              <input type="hidden" name="search_source" value="home">

              <div class="heroRentForm__grid">

                <!-- Pickup -->
                <div class="heroRentForm__field heroRentForm__field--pickup">
                  <label class="heroRentForm__label" for="heroRent_pickup">Vehicle Pickup Location</label>
                  <div class="heroRentForm__inputBox">
                    <i class="fas fa-map-marker-alt heroRentForm__icon" aria-hidden="true"></i>
                    <input class="heroRentForm__input" id="heroRent_pickup" type="text" name="pickup_location" placeholder="Colombo Bandaranaike Airport" value="Colombo Bandaranaike International Airport (CMB)" required>
                    <i class="fas fa-chevron-down heroRentForm__arrow" aria-hidden="true"></i>
                  </div>
                </div>

                <!-- Return to same location tick mark (in between) -->
                <div class="heroRentForm__field heroRentForm__field--same">
                  <div class="heroRentForm__checkWrap">
                    <label class="heroRentForm__checkLabel" for="heroRent_sameLocation">
                      <input type="checkbox" id="heroRent_sameLocation" checked>
                      <span>Return to same location</span>
                    </label>
                  </div>
                </div>

                <!-- Drop-off (shown if not same location) -->
                <div class="heroRentForm__field heroRentForm__field--drop" id="heroRent_dropWrap" style="display:none;">
                  <label class="heroRentForm__label" for="heroRent_dropInput">Vehicle Drop-off Location</label>
                  <div class="heroRentForm__inputBox">
                    <i class="fas fa-map-marker-alt heroRentForm__icon" aria-hidden="true"></i>
                    <input class="heroRentForm__input" type="text" name="dropoff_location" id="heroRent_dropInput" placeholder="e.g., Kandy">
                  </div>
                </div>

                <!-- Pickup datetime -->
                <div class="heroRentForm__field heroRentForm__field--datetime">
                  <label class="heroRentForm__label" for="heroRent_pickupDT">Pickup Date & Time</label>
                  <div class="heroRentForm__inputBox">
                    <i class="far fa-calendar-alt heroRentForm__icon" aria-hidden="true"></i>
                    <input class="heroRentForm__input heroRentDT" id="heroRent_pickupDT" type="text" name="pickup_datetime" placeholder="Pickup Date & Time" required>
                  </div>
                </div>

                <!-- Dropoff datetime -->
                <div class="heroRentForm__field heroRentForm__field--datetime">
                  <label class="heroRentForm__label" for="heroRent_dropDT">Drop-off Date & Time</label>
                  <div class="heroRentForm__inputBox">
                    <i class="far fa-calendar-alt heroRentForm__icon" aria-hidden="true"></i>
                    <input class="heroRentForm__input heroRentDT" id="heroRent_dropDT" type="text" name="dropoff_datetime" placeholder="Drop-off Date & Time" required>
                  </div>
                </div>

                <!-- Submit -->
                <div class="heroRentForm__field heroRentForm__field--submit">
                  <button type="submit" class="heroRentForm__btn">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <span>Check Rates</span>
                  </button>
                </div>

              </div>
            </form>
          </div>
        </div>

        <div class="heroResultsWrap">
          <div style="width: 100%;">
            <section id="heroResultsSection" class="heroResults">
              <div class="heroResults__header pb-0 pt-0">
                <h3 class="heroResults__title"><i class="fas fa-car-side" style="color: #ffc107; margin-right: 8px;"></i> Vehicles matching your search</h3>
                <button type="button" class="heroResults__close" aria-label="Close">&times;</button>
              </div>
              <div id="heroResultsLoading" class="heroResults__loading" style="display:none;">Searching vehicles...</div>
              <div id="heroResultsEmpty" class="heroResults__empty" style="display:none;">No vehicles matched your search. Try different dates.</div>
              <div id="heroResultsGrid" class="heroResults__grid"></div>
            </section>
          </div>
        </div>


        <!-- Mobile results modal -->
        <div id="heroResultsModal" class="heroResultsModal" hidden>
          <div class="heroResultsModal__backdrop"></div>
          <div class="heroResultsModal__panel">
            <div class="heroResultsModal__header">
              <h3>Vehicles matching your search</h3>
              <button type="button" class="heroResultsModal__close" aria-label="Close">&times;</button>
            </div>
            <div class="heroResultsModal__body">
              <div id="heroResultsModalLoading" class="heroResults__loading" style="display:none;">Searching vehicles...</div>
              <div id="heroResultsModalEmpty" class="heroResults__empty" style="display:none;">No vehicles matched your search. Try different dates.</div>
              <div id="heroResultsModalGrid" class="heroResultsModal__grid"></div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Wave bottom -->
    <div class="heroRent__wave">
      <svg viewBox="0 0 1440 180" preserveAspectRatio="none">
        <path fill="#ffffff" d="
          M0,170
          C220,170 360,165 520,150
          C820,120 980,55 1440,85
          L1440,180
          L0,180
          Z">
        </path>
      </svg>
    </div>

  </div>
</section>


<!-- Hidden form used to carry the person to Book Now (step 2) with search + vehicle context -->
<form id="heroBookNowForm" action="index.php?id=39" method="post" style="display:none;">
  <input type="hidden" name="id" value="39">
  <input type="hidden" name="search_source" value="home">
  <input type="hidden" name="pickup_location" id="heroBookNow_pickupLocation" value="">
  <input type="hidden" name="dropoff_location" id="heroBookNow_dropoffLocation" value="">
  <input type="hidden" name="pickup_datetime" id="heroBookNow_pickupDatetime" value="">
  <input type="hidden" name="dropoff_datetime" id="heroBookNow_dropoffDatetime" value="">
  <input type="hidden" name="passenger_count" id="heroBookNow_passengerCount" value="">
  <input type="hidden" name="luggage_count" id="heroBookNow_luggageCount" value="">
  <input type="hidden" name="selected_vehicle_id" id="heroBookNow_selectedVehicleId" value="">
</form>


<!-- who we are section -->
<section class="ftco-section ftco-wrap-about srAbout">
  <div class="container">
    <div id="tsparticles"></div>

    <div class="row align-items-start">
      <!-- LEFT: big image -->
      <div class="col-lg-5">
        <div class="srAbout__bigImg" style="background-image:url(\'assets/images/home/about_us_1.jpg\');"></div>
      </div>

      <!-- RIGHT: content -->
      <div class="col-lg-7">
        <div class="srAbout__content ftco-animate pt-0">

          <div class="srAbout__heading">
            <span class="srAbout__tag">WHO</span>
            <h2 class="srAbout__title">We Are</h2>
          </div>

          <p class="srAbout__text">
            <b class="srAbout__brand">SR Rent A Car</b> 
            is a locally owned and operated car rental company in Sri Lanka that provides affordable options for all travelers.
            The SR Team has been welcoming visitors from all over the world since 2004. We understand what our clients expect
            and deliver because we know what it’s like to be a consumer.
          </p>

          <!-- Floating Image Inside Text -->
          <div class="srAbout__floatImg" style="background-image:url(\'assets/images/home/about_us_2.jpg\');"></div>

          <p class="srAbout__text">
            Our new fleets of vehicles are maintained to the highest standard, ensuring cleanliness & reliability.
            We take safety very seriously, making it easier for you to relax and enjoy a family vacation.
            From a fleet of more than 500 vehicles, you can find the perfect match between budget and luxury from well-known brands.
          </p>

          <p class="srAbout__text">
            With offices conveniently located near Bandaranaike International Airport, we\'re able to meet and greet you with a smile
            and provide a two-way airport shuttle. You can also try our doorstep delivery service anywhere in the country for a nominal fee.
          </p>

        </div>
      </div>
    </div>
  </div>
</section>
		
<!-- counter section -->
<section class="srStats" id="section-counter">
  <div class="container">
    <div class="srStats__grid">

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-award"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="15">0</strong>
          <span class="srStats__label">Awards</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-clock"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="20">0</strong>
          <span class="srStats__label">Years of Experience</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-car-side"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="500">0</strong>
          <span class="srStats__label">Vehicles</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-user-tie"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="560">0</strong>
          <span class="srStats__label">Chauffeurs</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true"><i class="fas fa-smile"></i></div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="45000">0</strong>
          <span class="srStats__label">Happy Customers Annually</span>
        </div>
      </div>

    </div>
  </div>
</section>

[[!Offers]]

<!-- priorities section -->
<section id="priorities" class="priority-section py-5">
  <div class="container">
    <div class="text-center section-header mb-4">
      <span class="priority-badge">Our Travel Focus</span>
      <h2 class="mt-2">Designed for International Travelers with Regional Priority</h2>
      <p>
        At SR Rent A Car, we proudly serve travelers from around the world with reliable,
        comfortable, and safe vehicle rental services across Sri Lanka. While we warmly
        welcome all international guests, we place special priority on visitors from the
        South Asian region by offering more personalized assistance, flexible service,
        and a smoother booking experience.
      </p>
    </div>

    <div class="row g-4 align-items-stretch">
      <!-- Left small cards -->
      <div class="col-lg-7">
        <div class="travel-card big-card indian-card">
            <div class="card-overlay">
                <a href="index.php?id=40" class="country-tag btn">Indian Travelers</a>
                <p>We provide tailored vehicle rental services designed especially for Indian travelers visiting Sri Lanka.</p>
            </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="row g-4 h-100">
          <div class="col-12">
            <div class="travel-card small-card russian-card">
                <div class="card-overlay">
                    <a href="index.php?id=42" class="country-tag btn">Russian Travelers</a>
                    <h3>Comfortable Travel for Russian Visitors</h3>
                </div>
            </div>
          </div>

          <div class="col-12 mt-3">
            <div class="travel-card small-card australian-card">
                <div class="card-overlay">
                    <a href="index.php?id=42" class="country-tag btn">Australian Travelers</a>
                    <h3>Flexible Rides for Australian Guests</h3>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- our fleet section -->
<section id="our-fleet" class="fleet-members-section py-5">
  <div class="container">
    <div class="row align-items-center mb-0">
      <div class="col-lg-6">
        <span class="fleet-badge">Our Fleet</span>
        <h2 class="fleet-heading mt-3">Newly Joined Fleet Members</h2>
        <p class="fleet-subtext">
          Discover the latest vehicles added to SR Rent A Car. From compact city cars to premium SUVs
          and luxury coaches, our newest fleet members are ready to deliver comfort, safety, and style
          for every journey across Sri Lanka.
        </p>
      </div>

      <div class="col-lg-6">
        <div class="fleet-hero-image">
            <div class="swiper fleetSwiper">
                <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="assets/images/fleet/1.png" alt="Fleet 1">
                </div>

                <div class="swiper-slide">
                    <img src="assets/images/fleet/2.png" alt="Fleet 2">
                </div>

                <div class="swiper-slide">
                    <img src="assets/images/fleet/3.png" alt="Fleet 3">
                </div>

             <div class="swiper-slide">
                    <img src="assets/images/fleet/4.png" alt="Fleet 3">
                </div>

                </div>
            </div>
            </div>
      </div>
    </div>
  </div>
</section>

<!-- why-special section -->
<section id="why-special" class="srBusiness py-5">
  <div class="container">
    <div class="srBusiness__layout">

      <!-- Left Intro -->
      <div class="srBusiness__intro">
        <span class="srBusiness__tag">OUR SERVICES</span>
        <h2 class="srBusiness__title">More Than Just Vehicle Rentals</h2>
        <div class="srBusiness__line"></div>
        <p class="srBusiness__text">
          We go beyond car rentals by offering a complete travel support experience in Sri Lanka.
          From trusted transportation to holiday planning and airport convenience, our businesses
          are designed to make every journey easier, safer, and more comfortable.
        </p>
      </div>

      <!-- Featured center card -->
      <div class="srBusiness__card srBusiness__card--light srBusiness__card--vacations">
        <div class="srBusiness__icon">
          <i class="fas fa-umbrella-beach"></i>
        </div>
        <h3>Explore Vacations</h3>
        <p>
          Curated holiday experiences, tour planning, and travel packages to help you discover Sri Lanka.
        </p>
        <a href="https://explorevacations.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <div class="srBusiness__card srBusiness__card--light srBusiness__card--parking">
        <div class="srBusiness__icon">
          <i class="fas fa-plane-departure"></i>
        </div>
        <h3>Airport Parking</h3>
        <p>
          Secure and convenient airport parking solutions designed to give travelers peace of mind.
        </p>
        <a href="https://airportparking.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <!-- SR Transfers -->
      <div class="srBusiness__card srBusiness__card--light srBusiness__card--transfers">
        <div class="srBusiness__icon">
          <i class="fas fa-route"></i>
        </div>
        <h3>SR Transfers</h3>
        <p>
          Comfortable and dependable airport, hotel, and intercity transfer services for every traveler.
        </p>
        <a href="https://srtransfers.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <div class="srBusiness__card srBusiness__card--light srBusiness__card--villa">
        <div class="srBusiness__icon">
          <i class="fas fa-hotel"></i>
        </div>
        <h3>The 9 Trees Boutique Villa</h3>
        <p>
            Experience premium comfort and peaceful relaxation at The 9 Trees Boutique Villa.
        </p>
        <a href="https://www.facebook.com/the9treesboutiquevilla" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <!-- 24/7 Support -->
      <div class="srBusiness__card srBusiness__card--light srBusiness__card--support">
        <div class="srBusiness__icon">
          <i class="fas fa-headset"></i>
        </div>
        <h3>24/7 Travel Support</h3>
        <p>
          Dedicated customer assistance to support your transport and travel needs at any time.
        </p>
        <a href="index.php?id=6" class="srBusiness__btnCard">
          Contact →
        </a>
      </div>

    </div>
  </div>
</section>


  
<!-- what we offer section -->
<section class="ftco-section we-offer">
  <div class="container">
    <div class="row justify-content-center mb-0">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading_ourfleet">What We Offer</span>
        <h2 class="mb-4">Our Services</h2>
      </div>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <a href="index.php?id=9" class="offer-card">
          <div class="offer-head">
            <h3 class="offer-title">Rent A Car</h3>
          </div>

          <div class="offer-media">
            <span class="offer-icon">
              <!-- car icon -->
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M3 13l2-6a2 2 0 0 1 1.9-1.3h10.2A2 2 0 0 1 19 7l2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 13h14v5a1 1 0 0 1-1 1h-1" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 19H4a1 1 0 0 1-1-1v-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="7.5" cy="18" r="1" fill="currentColor"/>
                <circle cx="16.5" cy="18" r="1" fill="currentColor"/>
              </svg>
            </span>

            <img src="assets/images/home/rentacar.jpg" alt="Rent A Car" class="offer-img">
          </div>

          <div class="offer-bubble">
            <p>
              SR Rent A Car is an independent car rental company in Sri Lanka since 2004.
              We offer luxurious customer service at affordable rates.
            </p>
            <span class="offer-arrow">↗</span>
          </div>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <a href="index.php?id=11" class="offer-card">
          <div class="offer-head">
            <h4 class="offer-title">Airport Transfer</h4>
          </div>

          <div class="offer-media">
            <span class="offer-icon">
              <!-- plane icon -->
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M10 21l2-7 7-2 2 2-2 7-7 2-2-2z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M12 14L3 9l2-2 9 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M14 12l5-9 2 2-5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </span>

            <img src="assets/images/home/transfer.jpg" alt="Airport Transfer" class="offer-img">
          </div>

          <div class="offer-bubble">
            <p>
              Chauffeur-driven airport and hotel transfers across Sri Lanka.
              Service available for Colombo International Airport & all hotels.
            </p>
            <span class="offer-arrow">↗</span>
          </div>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <a href="index.php?id=3" class="offer-card">
          <div class="offer-head">
            <h4 class="offer-title">Wedding Rentals</h4>
          </div>

          <div class="offer-media">
            <span class="offer-icon">
              <!-- heart icon -->
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M12 21s-7-4.6-9.5-8.5C.6 9.5 2.3 6 6 6c2 0 3.2 1 4 2 0 0 1.2-2 4-2 3.7 0 5.4 3.5 3.5 6.5C19 16.4 12 21 12 21z"
                  stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
              </svg>
            </span>

            <img src="assets/images/home/wedding.jpg" alt="Wedding Rentals" class="offer-img">
          </div>

          <div class="offer-bubble">
            <p>
              Make your wedding day perfect with premium vehicles and professional service.
              Comfort, style, and punctuality guaranteed.
            </p>
            <span class="offer-arrow">↗</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- testimonials section -->
<section class="testimonials-modern">
  <div class="container">
    <div class="text-center mb-0">
      <span class="tm-sub">Testimonial</span>
      <h2 class="tm-title">We Care About Our<br>Customers Experience Too</h2>
    </div>

    <div class="tm-wrap">
      <div class="tm-controls">
        <button class="tm-btn tm-prev" type="button" aria-label="Previous">&#8592;</button>
        <button class="tm-btn tm-next" type="button" aria-label="Next">&#8594;</button>
      </div>

      <div class="swiper tmSwiper">
        <div class="swiper-wrapper" id="googleReviewsWrapper">
          <!-- reviews will be inserted here -->
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="https://www.google.com/search?client=firefox-b-d&sca_esv=9151e0e90600ee3c&si=AL3DRZFIhG6pAqfNLal55wUTwygCG0fClF3UxiOmgw9Hq7nbWdWJUU6NpxzcEPVLFQQsT7kAueOwmfglvNUMRgYs_amlJY3vAqLLCGNXN5gP9EdBmecitfCH_3VoarzY42Cez1-7xoR-Q5y_2sRxn9kbFytBgN7Vmw%3D%3D&q=SR+Rent+A+Car+Sri+Lanka+Reviews&sa=X&ved=2ahUKEwi5sf2-hLiTAxVnzDgGHRjtHvYQ0bkNegQIJhAH&biw=1536&bih=730&dpr=1.25" target="_blank" rel="noopener">
        <img src="assets/images/home/google.png" alt="Google" style="max-width:180px;">
      </a>
    </div>
  </div>
</section>

<!-- blog section -->
<section class="ftco-section bg-light blog-modern" style="background-color: #ffffffbf !important;">
  <div class="container">
    <div class="row justify-content-center mb-0">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading_ourfleet">Blog</span>
        <h2 class="mb-4">Recent Posts</h2>
      </div>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <article class="post-card">
          <a class="post-media" href="index.php?id=7" aria-label="Read post: Home">
            <img src="assets/images/blog/car_crashed.jpg" alt="Navigating a Vehicle Accident in Sri Lanka" />
            <span class="post-badge">Sri Lanka Travel Guide</span>
            <span class="post-hover">Read more →</span>
          </a>

          <div class="post-body">
            <ul class="post-meta">
              <li><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
              <li><i class="far fa-clock"></i> Apr 19, 2024</li>
            </ul>

            <h3 class="post-title">
              <a href="index.php?id=7" aria-label="Read post: Home">Navigating a Vehicle Accident in Sri Lanka as a Foreigner: A Comprehensive Guide</a>
            </h3>

            <p class="post-excerpt">
              Driving in a foreign country can be an exciting experience, but it\'s essential to be prepared for unexpected situations like a vehicle accident...
            </p>

            <a class="post-btn" href="index.php?id=7" aria-label="Read post: Home">Read more</a>
          </div>
        </article>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <article class="post-card">
          <a class="post-media" href="index.php?id=8" aria-label="Read post: Home">
            <img src="assets/images/blog/hidden_gems.jpg" alt="Hidden Gems near Kandy" />
            <span class="post-badge">Sri Lanka Travel Guide</span>
            <span class="post-hover">Read more →</span>
          </a>

          <div class="post-body">
            <ul class="post-meta">
              <li><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
              <li><i class="far fa-clock"></i> Sep 20, 2023</li>
            </ul>

            <h3 class="post-title">
              <a href="index.php?id=8" aria-label="Read post: Home">Hidden Gems near Kandy to Discover with Your Rental Car</a>
            </h3>

            <p class="post-excerpt">
              Kandy, the cultural jewel of Sri Lanka, beckons travellers with its rich history, vibrant culture, and captivating landscapes...
            </p>

            <a class="post-btn" href="index.php?id=8" aria-label="Read post: Home">Read more</a>
          </div>
        </article>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <article class="post-card">
          <a class="post-media" href="index.php?id=12" aria-label="Read post: Home">
            <img src="assets/images/blog/driving_license.jpg" alt="Valid Driving Licenses To Rent A Car" />
            <span class="post-badge">Sri Lanka Travel Guide</span>
            <span class="post-hover">Read more →</span>
          </a>

          <div class="post-body">
            <ul class="post-meta">
              <li><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
              <li><i class="far fa-clock"></i> Nov 1, 2021</li>
            </ul>

            <h3 class="post-title">
              <a href="index.php?id=12" aria-label="Read post: Home">Valid Driving Licenses To Rent A Car In Sri Lanka</a>
            </h3>

            <p class="post-excerpt">
              Driving in a foreign country can be an exciting experience, but it\'s essential to be prepared for unexpected situations...
            </p>

            <a class="post-btn" href="index.php?id=12" aria-label="Read post: Home">Read more</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Large Button Section -->
    <div class="text-center mt-5">
      <a class="theme-btn btn-style-two" href="index.php?id=5" aria-label="Read post: Home" role="button" style="background: #023f75;"  >View All Posts</a>
    </div>
  </div>
</section>
	
<style>
/* =========================================================
   HERO BOOKING CARD & SEARCH RESULTS (DESKTOP & RESPONSIVE)
   ========================================================= */

/* Hero Container */
.heroRent,
.heroRent__frame,
.heroRent__bar {
  overflow: visible !important;
}

.heroRentCard {
  max-width: 1340px;
  width: 100%;
  margin: 0 auto;
  overflow: hidden;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.35);
  border: 1px solid #143254;
}

/* Swiper Background */
.heroRent--yacht .heroRent__swiper {
  position: absolute !important;
  inset: 0 !important;
  width: 100% !important;
  height: 100% !important;
  z-index: 1 !important;
}

.heroRent--yacht .heroRent__slide {
  background-size: cover !important;
  background-position: center !important;
  width: 100% !important;
  height: 100% !important;
}

/* Card Header Banner */
.heroRentCard__header {
  background: #08203e;
  padding: 12px 20px;
  display: flex;
  align-items: center;
  gap: 14px;
}

.heroRentCard__badge {
  width: 38px;
  height: 38px;
  min-width: 38px;
  border: 1.5px solid #ffc107;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255, 193, 7, 0.08);
}

.heroRentCard__title {
  font-size: 18px;
  font-weight: 700;
  color: #ffc107 !important;
  margin: 0;
  line-height: 1.2;
  letter-spacing: 0.2px;
}

.heroRentCard__subtitle {
  font-size: 12.5px;
  color: #ffffff !important;
  margin: 2px 0 0 0;
  opacity: 0.92;
}

/* Form Container */
.heroRentForm {
  background: #ffffff;
  padding: 14px 20px 10px 20px;
  position: relative;
}

.heroRentForm__labelRow {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  margin-bottom: 5px !important;
  gap: 8px !important;
  width: 100% !important;
}

.heroRentForm__labelRow .heroRentForm__label {
  margin-bottom: 0 !important;
}

.heroRentForm__label {
  display: block;
  font-size: 12px;
  font-weight: 700;
  color: #111827 !important;
  margin-bottom: 5px;
  white-space: nowrap;
  line-height: 1.2;
}

.heroRentForm__inputBox {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
}

.heroRentForm__icon {
  position: absolute;
  left: 10px;
  color: #374151;
  font-size: 13px;
  pointer-events: none;
  z-index: 2;
}

.heroRentForm__arrow {
  position: absolute;
  right: 10px;
  color: #4b5563;
  font-size: 11px;
  pointer-events: none;
  z-index: 2;
}

.heroRentForm__input,
.heroRentForm__select {
  width: 100%;
  height: 40px;
  border: 1px solid #d1d5db;
  border-radius: 6px;
  padding: 6px 26px 6px 30px;
  font-size: 12.5px;
  color: #111827;
  background: #ffffff;
  outline: none;
  font-weight: 600;
  text-overflow: ellipsis;
  transition: border-color 0.2s, box-shadow 0.2s;
}

.heroRentForm__select {
  appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}

.heroRentForm__input:focus,
.heroRentForm__select:focus {
  border-color: #ffc107;
  box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.25);
  background: #ffffff;
}

.heroRentForm__checkWrap {
  margin-top: 5px;
}

.heroRentForm__checkLabel {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  font-weight: 700;
  color: #111827 !important;
  cursor: pointer;
  margin: 0;
  user-select: none;
  line-height: 1.2;
}

.heroRentForm__checkLabel span {
  color: #111827 !important;
  font-size: 12px;
  font-weight: 700;
}

.heroRentForm__checkLabel input[type="checkbox"] {
  accent-color: #ffc107;
  width: 14px;
  height: 14px;
  margin: 0;
  cursor: pointer;
}

.heroRentForm__btn {
  width: 100%;
  height: 40px;
  background: #ffc107 !important;
  color: #0c2340 !important;
  font-weight: 800;
  font-size: 13.5px;
  border: none;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(255, 193, 7, 0.3);
  transition: background 0.2s, transform 0.15s;
  text-transform: none;
}

.heroRentForm__btn span {
  color: #0c2340 !important;
  font-weight: 800;
}

.heroRentForm__btn i {
  color: #0c2340 !important;
  font-size: 13px;
}

.heroRentForm__btn:hover {
  background: #e5ac00 !important;
  transform: translateY(-1px);
}

/* =========================================================
   DESKTOP FORM & RESULTS LAYOUT (>= 768px)
   ========================================================= */
@media (min-width: 768px) {
  .heroRent--yacht .heroRent__frame {
    height: auto !important;
    min-height: 100vh !important;
    padding-top: 100px !important;
    padding-bottom: 70px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    position: relative !important;
  }

  .heroRent__content {
    position: relative !important;
    inset: auto !important;
    z-index: 15 !important;
    display: block !important;
    pointer-events: auto !important;
    margin-bottom: 16px !important;
  }

  .heroRent__content .container,
  .heroRent__content .container-fluid {
    padding-left: 2% !important;
    padding-right: 2% !important;
    max-width: 1340px !important;
    margin: 0 auto !important;
  }

  .heroRent__contentInner--left {
    margin-top: 6rem !important;
    text-align: left !important;
    max-width: 850px !important;
  }

  .heroRent__sub {
    display: block !important;
    font-size: 40px !important;
    color: #efc900 !important;
    font-weight: 600 !important;
    font-family: "Great Vibes", cursive !important;
    margin-bottom: 2px !important;
    line-height: 1 !important;
    text-shadow: 0 4px 15px rgba(0,0,0,0.5) !important;
  }

  .heroRent__title {
    font-size: 34px !important;
    color: #ffffff !important;
    line-height: 1.15 !important;
    font-family: "Playfair Display", serif !important;
    letter-spacing: 2px !important;
    text-transform: uppercase !important;
    font-weight: 700 !important;
    margin-bottom: 4px !important;
    text-shadow: 0 4px 15px rgba(0,0,0,0.5) !important;
  }

  .heroRent__lead {
    color: rgba(255,255,255,0.92) !important;
    font-size: 14.5px !important;
    letter-spacing: 0.4px !important;
    font-weight: 600 !important;
    margin-bottom: 0 !important;
    text-shadow: 0 2px 10px rgba(0,0,0,0.5) !important;
  }

  .heroRent--yacht .heroRent__bar {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    right: auto !important;
    transform: none !important;
    z-index: 20 !important;
    margin-top: 0 !important;
  }

  .heroRentForm__grid {
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: flex-end !important;
    gap: 12px !important;
    width: 100% !important;
  }

  .heroRentForm__field {
    display: flex;
    flex-direction: column;
    min-width: 0;
  }

  .heroRentForm__field--pickup {
    flex: 3.2;
    min-width: 200px;
  }

  .heroRentForm__field--same {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 40px;
    margin-bottom: 0;
  }

  .heroRentForm__field--same .heroRentForm__checkWrap {
    margin-top: 0;
    display: flex;
    align-items: center;
    height: 100%;
  }

  .heroRentForm__field--drop {
    flex: 3.2;
    min-width: 200px;
  }

  .heroRentForm__field--datetime {
    flex: 2.2;
    min-width: 160px;
  }

  .heroRentForm__field--submit {
    flex: 1.4;
    min-width: 130px;
    margin-top: 0;
  }

  .heroResultsWrap {
    position: relative;
    max-width: 1340px;
    width: 100%;
    margin: 8px auto 0 auto;
    z-index: 9999;
  }

  .heroResults {
    display: none;
    flex-direction: column;
    background: transparent;
    box-shadow: none;
    border-radius: 0;
    overflow: visible;
  }

  .heroResults__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 6px 0 8px 0;
    border-bottom: none;
  }

  .heroResults__title {
    font-size: 14.5px;
    font-weight: 700;
    color: #ffffff !important;
    display: flex;
    align-items: center;
    gap: 6px;
    margin: 0;
    letter-spacing: 0.3px;
  }

  .heroResults__close {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    border: none;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 15px;
    transition: background 0.2s;
  }

  .heroResults__close:hover {
    background: rgba(255, 255, 255, 0.35);
    color: #ffffff;
  }

  .heroResults__grid {
    display: grid !important;
    grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
    gap: 8px !important;
    grid-auto-rows: 1fr;
    align-items: stretch;
    max-height: calc(100vh - 420px);
    min-height: 0;
    overflow-y: auto;
    padding: 2px 2px 14px 2px;
    scroll-behavior: smooth;
  }

  /* Desktop Vehicle Card - Auto Adjusting */
  .heroResultCard {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    padding: 6px 7px 0 7px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    width: 100%;
    box-sizing: border-box;
    overflow: hidden;
    min-height: 90px;
    transition: transform 0.2s, box-shadow 0.2s;
  }

  .heroResultCard:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.14);
  }

  .heroResultCard__main {
    display: flex;
    align-items: center;
    gap: 6px;
    min-width: 0;
    flex: 1;
  }

  .heroResultCard__imgWrap {
    width: 58px;
    max-width: 35%;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .heroResultCard__image {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
  }

  .heroResultCard__info {
    flex: 1;
    min-width: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 2px;
  }

  .heroResultCard__name {
    font-family: Georgia, "Times New Roman", serif;
    font-size: 11px;
    font-weight: 700;
    color: #111827 !important;
    line-height: 1.15;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: 0;
  }

  .heroResultCard__priceRow {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 3px;
    flex-wrap: wrap;
    margin-top: 1px;
  }

  .heroResultCard__price {
    color: #b81114 !important;
    font-size: 16px;
    font-weight: 700;
    white-space: nowrap;
  
  }

  .heroResultCard__price--empty {
    font-size: 10px;
    font-weight: 500;
    color: #6b7280 !important;
  }

  .heroResultCard__capacity {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 10px;
    font-weight: 600;
    color: #374151 !important;
    white-space: nowrap;
  }

  .heroResultCard__capacity span {
    color: #374151 !important;
    display: inline-flex;
    align-items: center;
    gap: 2px;
  }

  .heroResultCard__capacity i {
    color: #023f75 !important;
    font-size: 9.5px;
  }

  .heroResultCard__btn {
    width: calc(100% + 14px);
    margin: 5px -7px 0 -7px;
    background: #061d38;
    color: #ffffff !important;
    border: none;
    font-size: 11px;
    font-weight: 700;
    height: 24px;
    line-height: 24px;
    text-align: center;
    cursor: pointer;
    
    transition: background 0.15s;
    display: block;
    padding: 0;
  }

  .heroResultCard__btn:hover {
    background: #023f75;
    color: #ffffff !important;
  }

  .heroResultsModal {
    display: none !important;
  }
}

/* Custom Scrollbar for results */
.heroResults__grid::-webkit-scrollbar {
  width: 6px;
}
.heroResults__grid::-webkit-scrollbar-track {
  background: rgba(255, 255, 255, 0.15);
  border-radius: 6px;
}
.heroResults__grid::-webkit-scrollbar-thumb {
  background: #002656;
  border-radius: 6px;
}
.heroResults__grid::-webkit-scrollbar-thumb:hover {
  background: #023f75;
}

.heroResults__loading,
.heroResults__empty {
  text-align: center;
  padding: 16px;
  color: #ffffff;
  font-size: 13px;
  background: rgba(0, 0, 0, 0.4);
  border-radius: 8px;
}

/* =========================================================
   MOBILE ACCORDION & MODAL RULES (< 768px) - PRESERVED
   ========================================================= */
@media (max-width: 767.98px) {
  .heroRentCard__header {
    display: none;
  }

  .heroRentCard {
    border: none;
    box-shadow: none;
    border-radius: 0;
    background: transparent;
  }

  .heroRentForm {
    background: linear-gradient(180deg, rgba(255,255,255,.18), rgba(255,255,255,.08));
    border: 1px solid rgba(255,255,255,.16);
    box-shadow: 0 24px 80px rgba(0,0,0,.28);
    backdrop-filter: blur(18px);
    border-radius: 12px;
    padding: 16px;
  }

  .heroRentForm__grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .heroRentForm__label {
    color: #ffffff !important;
  }

  .heroRentForm__checkLabel span {
    color: #ffffff !important;
  }

  .heroRentForm__input,
  .heroRentForm__select {
    background: rgba(255, 255, 255, 0.95);
    height: 44px;
  }

  .heroResultsWrap {
    display: none !important;
  }

  .heroResultsModal {
    position: fixed;
    inset: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .heroResultsModal[hidden] {
    display: none;
  }

  .heroResultsModal__backdrop {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
  }

  .heroResultsModal__panel {
    position: relative;
    width: 100%;
    max-width: 420px;
    max-height: 80vh;
    background: #fff;
    border-radius: 16px;
    display: flex;
    flex-direction: column;
    animation: heroModalPopIn 0.2s ease-out;
    overflow: hidden;
  }

  .heroResultsModal__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 16px;
    border-bottom: 1px solid #eee;
  }

  .heroResultsModal__header h3 {
    font-size: 18px;
    font-weight: 800;
    margin: 0;
    background: linear-gradient(135deg, #023f75, #a30707);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    letter-spacing: 0.5px;
  }

  .heroResultsModal__close {
    background: rgba(0,0,0,0.05);
    border: none;
    font-size: 20px;
    line-height: 1;
    color: #333;
    cursor: pointer;
    padding: 6px 10px;
    border-radius: 50%;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
  }

  .heroResultsModal__close:hover {
    background: rgba(163, 7, 7, 0.1);
    color: #a30707;
    transform: rotate(90deg);
  }

  .heroResultsModal__body {
    overflow-y: auto;
    padding: 14px 16px 30px;
  }

  .heroResultsModal__grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-auto-rows: 1fr;
    gap: 10px;
  }

  .heroResultsModal__grid .heroResultCard {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 8px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .heroResultsModal__grid .heroResultCard__main {
    flex-direction: column;
    align-items: flex-start;
  }

  .heroResultsModal__grid .heroResultCard__imgWrap {
    width: 100%;
    height: 80px;
  }

  .heroResultsModal__grid .heroResultCard__imgWrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .heroResultsModal__grid .heroResultCard__name {
    font-size: 12px;
    font-weight: 700;
    margin-top: 4px;
  }

  .heroResultsModal__grid .heroResultCard__price {
    font-size: 16px;
    font-weight: 700;
    color: #dd1c1c !important;
  }

  .heroResultsModal__grid .heroResultCard__btn {
    width: 100%;
    margin-top: 6px;
    background: #002656;
    color: #fff;
    border: none;
    padding: 6px;
    font-size: 12px;
    font-weight: 700;
    cursor: pointer;
    border-radius: 4px;
  }
}

@keyframes heroModalPopIn {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

body.heroModalOpen {
  overflow: hidden;
}


@media (min-width: 1400px) {
    .heroRentForm {
        max-width: none;
        margin: 0 auto;
    }
}
</style>

<style>
	.card-body:hover {
		border-color: #051425; 
		box-shadow: 10px 20px 35px rgba(0, 0, 0, 0.2); 
	}
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyC-USaecnlmdi2fOMcDQl8BhId3-eYcg-Y&libraries=places"></script>


<script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const wrapper = document.getElementById(\'googleReviewsWrapper\');
    const REVIEW_WORD_LIMIT = 25;

    function escapeHtml(str) {
      return String(str || \'\')
        .replace(/&/g, \'&amp;\')
        .replace(/</g, \'&lt;\')
        .replace(/>/g, \'&gt;\')
        .replace(/"/g, \'&quot;\')
        .replace(/\'/g, \'&#039;\');
    }

    function renderStars(rating) {
      const full = Math.floor(Number(rating || 0));
      const empty = 5 - full;
      return \'★\'.repeat(full) + \'☆\'.repeat(empty);
    }

    function formatDate(dateStr) {
      if (!dateStr) return \'Google Review\';
      const d = new Date(dateStr);
      if (isNaN(d)) return \'Google Review\';
      return d.toLocaleDateString(\'en-US\', {
        month: \'short\',
        day: \'numeric\',
        year: \'numeric\'
      });
    }

    function getReviewerImage(review) {
      if (review?.authorAttribution?.photoUri) return review.authorAttribution.photoUri;
      return \'assets/images/home/avatae.webp\';
    }

    function getReviewerName(review) {
      if (review?.authorAttribution?.displayName) return review.authorAttribution.displayName;
      return \'Google User\';
    }

    function getReviewText(review) {
      if (review?.text?.text) return review.text.text;
      if (review?.originalText?.text) return review.originalText.text;
      return \'\';
    }

    function truncateWords(text, wordLimit) {
      const words = String(text || \'\').trim().split(/\\s+/).filter(Boolean);

      if (words.length <= wordLimit) {
        return {
          shortText: text,
          fullText: text,
          isTruncated: false
        };
      }

      return {
        shortText: words.slice(0, wordLimit).join(\' \') + \'...\',
        fullText: text,
        isTruncated: true
      };
    }

    fetch(\'assets/api/google-reviews.php\')
      .then(res => res.json())
      .then(data => {
        if (!data.success || !data.place || !Array.isArray(data.place.reviews)) {
          wrapper.innerHTML = \'<div class="swiper-slide"><div class="tm-card"><p class="tm-text">Reviews are not available right now.</p></div></div>\';
          return;
        }

        const reviews = data.place.reviews;

        wrapper.innerHTML = reviews.map((review, index) => {
          const name = escapeHtml(getReviewerName(review));
          const rawText = getReviewText(review);
          const { shortText, fullText, isTruncated } = truncateWords(rawText, REVIEW_WORD_LIMIT);
          const shortTextEscaped = escapeHtml(shortText);
          const fullTextEscaped = escapeHtml(fullText);
          const image = escapeHtml(getReviewerImage(review));
          const rating = Number(review.rating || 0);
          const stars = renderStars(rating);
          const date = formatDate(review.publishTime);
          const reviewId = `review-text-${index}`;

          return `
            <div class="swiper-slide">
              <div class="tm-card">
                <div class="tm-avatar">
                  <img 
  src="${image}" 
  alt="${name}" 
  onerror="this.onerror=null;this.src=\'assets/images/home/avatar.webp\';">
                </div>

                <p class="tm-text" 
                   id="${reviewId}" 
                   data-short="${shortTextEscaped}" 
                   data-full="${fullTextEscaped}" 
                   data-expanded="false">
                  “${shortTextEscaped}”
                </p>

                ${isTruncated ? `
                  <button type="button" class="tm-read-more-btn" data-target="${reviewId}">
                    Read More
                  </button>
                ` : \'\'}

                <div class="tm-footer">
                  <div>
                    <div class="tm-name">${name}</div>
                    <div class="tm-role">Google Review • ${date}</div>
                  </div>

                  <div class="tm-stars" aria-label="${rating} stars">
                    ${stars}
                  </div>
                </div>
              </div>
            </div>
          `;
        }).join(\'\');

        new Swiper(\'.tmSwiper\', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: reviews.length > 1,

        autoplay: {
            delay: 3000,              // slide every 3s
            disableOnInteraction: false,
            pauseOnMouseEnter: true   // pause on hover (nice UX)
        },

        speed: 800, // smooth transition

        breakpoints: {
            768: {
            slidesPerView: 2
            },
            1200: {
            slidesPerView: 3
            }
        }
        });

        document.querySelectorAll(\'.tm-read-more-btn\').forEach(button => {
          button.addEventListener(\'click\', function () {
            const targetId = this.getAttribute(\'data-target\');
            const reviewTextEl = document.getElementById(targetId);

            if (!reviewTextEl) return;

            const expanded = reviewTextEl.getAttribute(\'data-expanded\') === \'true\';
            const shortText = reviewTextEl.getAttribute(\'data-short\') || \'\';
            const fullText = reviewTextEl.getAttribute(\'data-full\') || \'\';

            if (expanded) {
              reviewTextEl.innerHTML = `“${shortText}”`;
              reviewTextEl.setAttribute(\'data-expanded\', \'false\');
              this.textContent = \'Read More\';
            } else {
              reviewTextEl.innerHTML = `“${fullText}”`;
              reviewTextEl.setAttribute(\'data-expanded\', \'true\');
              this.textContent = \'Read Less\';
            }
          });
        });
      })
      .catch(() => {
        wrapper.innerHTML = \'<div class="swiper-slide"><div class="tm-card"><p class="tm-text">Unable to load reviews at the moment.</p></div></div>\';
      });
  });
</script>

<script>
  // Swiper init
  const heroRentSwiper = new Swiper(\'.heroRent__swiper\', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 800,
    effect: \'fade\',
    fadeEffect: { crossFade: true },
    pagination: { el: \'.heroRent__dots\', clickable: true },
    navigation: { nextEl: \'.heroRent__next\', prevEl: \'.heroRent__prev\' }
  });
</script>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector(\'.heroRentAcc__toggle\');
    const panel = document.getElementById(\'heroRentAccPanel\');
    const mq = window.matchMedia("(max-width: 767px)");

    function setAccordionState() {
      if (!btn || !panel) return;

      const isMobile = mq.matches;

      if (isMobile) {
        if (btn.getAttribute("data-user-toggled") !== "1") {
          btn.setAttribute("aria-expanded", "false");
          panel.hidden = true;
        }
      } else {
        btn.setAttribute("aria-expanded", "true");
        panel.hidden = false;
      }
    }

    if (btn && panel) {
      btn.addEventListener("click", () => {
        btn.setAttribute("data-user-toggled", "1");
        const expanded = btn.getAttribute("aria-expanded") === "true";
        btn.setAttribute("aria-expanded", String(!expanded));
        panel.hidden = expanded;

        if (!expanded) setTimeout(initFlatpickr, 50);
      });

      // initial state
      setAccordionState();

      if (mq.addEventListener) {
        mq.addEventListener("change", () => {
          btn.removeAttribute("data-user-toggled");
          setAccordionState();
          if (!mq.matches) setTimeout(initFlatpickr, 0);
        });
      } else {
        window.addEventListener("resize", () => {
          btn.removeAttribute("data-user-toggled");
          setAccordionState();
          if (!mq.matches) setTimeout(initFlatpickr, 0);
        });
      }
    }

    // ----- Same location toggle -----
    const same = document.getElementById(\'heroRent_sameLocation\');
    const wrap = document.getElementById(\'heroRent_dropWrap\');
    const input = document.getElementById(\'heroRent_dropInput\');

    function toggleDrop(){
      if (!same || !wrap || !input) return;
      const show = !same.checked;
      wrap.style.display = show ? \'block\' : \'none\';
      input.required = show;
      if(!show) input.value = \'\';
    }

    if (same) {
      same.addEventListener(\'change\', toggleDrop);
      toggleDrop();
    }

    let fpInitialized = false;

    function initFlatpickr() {
      if (fpInitialized) return;

      if (typeof flatpickr === "undefined") {
        console.error("Flatpickr is not loaded. Include flatpickr.js before init.");
        return;
      }

      const pickupEl = document.getElementById("heroRent_pickupDT");
      const dropEl   = document.getElementById("heroRent_dropDT");
      if (!pickupEl || !dropEl) return;

      let dropPicker;

      const now = new Date();

      flatpickr(pickupEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: now,              
        minTime: now.getHours() + ":" + now.getMinutes(), 
        time_24hr: true,
        minuteIncrement: 15,
        disableMobile: true,
        onChange: function(selectedDates) {
          if (dropPicker && selectedDates[0]) {
            dropPicker.set("minDate", selectedDates[0]);

            // reset invalid drop
            const d = dropPicker.selectedDates[0];
            if (d && d <= selectedDates[0]) {
              dropPicker.clear();
            }
          }
        }
      });

      dropPicker = flatpickr(dropEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: new Date(),  
        time_24hr: true,
        minuteIncrement: 15,
        disableMobile: true
      });

      fpInitialized = true;
    }
    if (!mq.matches) initFlatpickr();

  });
</script>

<script>
	document.addEventListener("DOMContentLoaded", () => {

	function attachAuto(id, defaultValue = null){
		const el = document.getElementById(id);
		if(!el || !window.google) return;

		const ac = new google.maps.places.Autocomplete(el, {
		componentRestrictions: { country: "lk" }
		});

		// Set default value if provided
		if (defaultValue) {
		el.value = defaultValue;

		// Optional: force Google to recognize the default as a real place
		const service = new google.maps.places.AutocompleteService();
		service.getPlacePredictions({
			input: defaultValue,
			componentRestrictions: { country: "lk" }
		}, function(predictions, status) {
			if (status === google.maps.places.PlacesServiceStatus.OK && predictions.length > 0) {
			// You could optionally fetch full place details here if needed
			// But for most booking forms, just pre-filling text is enough
			}
		});
		}

		ac.addListener("place_changed", () => {
		const place = ac.getPlace();
		// console.log(place.formatted_address);
		});
	}

	// Pickup with default
	attachAuto("heroRent_pickup", "Colombo Bandaranaike International Airport (CMB)");

	// Dropoff without default
	attachAuto("heroRent_dropInput");

	});
</script>

<script>
	document.addEventListener("DOMContentLoaded", function () {
	new Swiper(".tmSwiper", {
		spaceBetween: 18,
		navigation: {
		nextEl: ".tm-next",
		prevEl: ".tm-prev",
		},
		breakpoints: {
		0:   { slidesPerView: 1 },
		768: { slidesPerView: 2 },
		992: { slidesPerView: 3 },
		},
	});
	});
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".number");
    const section = document.getElementById("section-counter");
    let started = false;

    const run = (el) => {
        const target = +el.dataset.number;
        let count = 0;
        const step = target / 100;

        const timer = setInterval(() => {
        count += step;
        if (count >= target) {
            el.textContent = target.toLocaleString() + "+";
            clearInterval(timer);
        } else {
            el.textContent = Math.floor(count).toLocaleString() + "+";
        }
        }, 20);
    };

    new IntersectionObserver(([entry]) => {
        if (entry.isIntersecting && !started) {
        started = true;
        counters.forEach(run);
        }
    }, { threshold: 0.3 }).observe(section);
    });
</script>

<script>
  new Swiper(".fleetSwiper", {
    loop: true,
    slidesPerView: 1,  
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    speed: 900,
    effect: "fade", 
    fadeEffect: {
      crossFade: true
    }
  });
</script>




<script>
document.addEventListener(\'DOMContentLoaded\', () => {
  const form = document.querySelector(\'.heroRentForm\');
  if (!form) return;

  const mq = window.matchMedia(\'(max-width: 767px)\');

  // Desktop inline panel
  const resultsSection = document.getElementById(\'heroResultsSection\');
  const resultsGrid = document.getElementById(\'heroResultsGrid\');
  const resultsLoading = document.getElementById(\'heroResultsLoading\');
  const resultsEmpty = document.getElementById(\'heroResultsEmpty\');
  const resultsClose = resultsSection.querySelector(\'.heroResults__close\');

  resultsClose.addEventListener(\'click\', () => {
    resultsSection.style.display = \'none\';
  });

  // Mobile modal
  const modal = document.getElementById(\'heroResultsModal\');
  if (modal && modal.parentElement !== document.body) {
    document.body.appendChild(modal);
  }
  const modalGrid = document.getElementById(\'heroResultsModalGrid\');
  const modalLoading = document.getElementById(\'heroResultsModalLoading\');
  const modalEmpty = document.getElementById(\'heroResultsModalEmpty\');
  const modalClose = modal.querySelector(\'.heroResultsModal__close\');
  const modalBackdrop = modal.querySelector(\'.heroResultsModal__backdrop\');

  function openModal() {
    modal.hidden = false;
    document.body.classList.add(\'heroModalOpen\');
  }
  function closeModal() {
    modal.hidden = true;
    document.body.classList.remove(\'heroModalOpen\');
  }
  modalClose.addEventListener(\'click\', closeModal);
  modalBackdrop.addEventListener(\'click\', closeModal);

  let lastSearchPayload = null;

  function formatEuro(amount) {
    const n = parseFloat(amount);
    if (isNaN(n)) return \'\';
    return \'€ \' + n.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  }

function buildCard(v) {
  const card = document.createElement(\'div\');
  card.className = \'heroResultCard\';

  const priceHtml = v.price
    ? \'<span class="heroResultCard__price">€ \' + parseFloat(v.price).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + \'</span>\'
    : \'<span class="heroResultCard__price heroResultCard__price--empty">Price on request</span>\';

  card.innerHTML = `
    <div class="heroResultCard__main">
      <div class="heroResultCard__imgWrap">
        <img class="heroResultCard__image" src="${v.image || \'\'}" alt="${v.car_model || v.car_category || \'Vehicle\'}">
      </div>
      <div class="heroResultCard__info">
        <div class="heroResultCard__name" title="${v.car_model || v.car_category || \'\'}">${v.car_model || v.car_category || \'\'}</div>
        <div class="heroResultCard__priceRow">
          ${priceHtml}
          <div class="heroResultCard__capacity">
            <span><i class="fas fa-user"></i> ${v.pax_count || 0}</span>
            <span><i class="fas fa-suitcase"></i> ${v.luggage_count || 0}</span>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="heroResultCard__btn" data-vehicle-id="${v.id}" data-car-code="${v.car_code}">Book Now</button>
  `;
  return card;
}

  function attachBookNow(grid) {
    grid.querySelectorAll(\'.heroResultCard__btn\').forEach(function (btn) {
      btn.addEventListener(\'click\', function () {
        if (lastSearchPayload) {
          const pickupLoc = document.getElementById(\'heroBookNow_pickupLocation\');
          if (pickupLoc) pickupLoc.value = lastSearchPayload.pickup_location || \'\';

          const dropLoc = document.getElementById(\'heroBookNow_dropoffLocation\');
          if (dropLoc) dropLoc.value = lastSearchPayload.dropoff_location || \'\';

          const pickupDt = document.getElementById(\'heroBookNow_pickupDatetime\');
          if (pickupDt) pickupDt.value = lastSearchPayload.pickup_datetime || \'\';

          const dropDt = document.getElementById(\'heroBookNow_dropoffDatetime\');
          if (dropDt) dropDt.value = lastSearchPayload.dropoff_datetime || \'\';

          const pax = document.getElementById(\'heroBookNow_passengerCount\');
          if (pax) pax.value = lastSearchPayload.passenger_count || \'\';

          const lug = document.getElementById(\'heroBookNow_luggageCount\');
          if (lug) lug.value = lastSearchPayload.luggage_count || \'\';
        }

        const selectedVehicleIdInput = document.getElementById(\'heroBookNow_selectedVehicleId\');
        if (selectedVehicleIdInput) {
          selectedVehicleIdInput.value = this.getAttribute(\'data-vehicle-id\') || \'\';
        }

        const form = document.getElementById(\'heroBookNowForm\');
        if (form) form.submit();
      });
    });
  }

  function dedupeByModel(vehicles) {
    const seen = new Set();
    const result = [];
    vehicles.forEach(function (v) {
      const key = (v.car_category || \'\').trim().toLowerCase();
      if (!key || seen.has(key)) return;
      seen.add(key);
      result.push(v);
    });
    return result;
  }

  function renderResults(vehicles) {
    const isMobile = mq.matches;
    const grid = isMobile ? modalGrid : resultsGrid;
    const emptyEl = isMobile ? modalEmpty : resultsEmpty;

    grid.innerHTML = \'\';

    const vehiclesList = dedupeByModel(vehicles || []);

    if (vehiclesList.length === 0) {
      emptyEl.style.display = \'block\';
      if (!isMobile) {
        resultsSection.style.display = \'none\';
      } else {
        closeModal();
      }
      alert("No vehicles matched your search. Try different dates or fewer passengers.");
      return;
    }

    emptyEl.style.display = \'none\';
    if (!isMobile) {
      resultsSection.style.display = \'flex\';
    }

    vehiclesList.forEach(function (v) {
      grid.appendChild(buildCard(v));
    });

    attachBookNow(grid);
  }

  form.addEventListener(\'submit\', function (e) {
    e.preventDefault();

    const pickup = document.getElementById("heroRent_pickupDT");
    const drop   = document.getElementById("heroRent_dropDT");

    let hasError = false;

    [pickup, drop].forEach(el => {
      if (el) el.style.border = \'\';
    });

    if (!pickup.value.trim()) {
      pickup.style.border = \'2px solid red\';
      hasError = true;
    }

    if (!drop.value.trim()) {
      drop.style.border = \'2px solid red\';
      hasError = true;
    }

    if (!hasError) {
      const pickupDate = new Date(pickup.value);
      const dropDate   = new Date(drop.value);

      if (dropDate <= pickupDate) {
        drop.style.border = \'2px solid red\';
        alert("Drop-off must be after pickup date.");
        hasError = true;
      }
    }

    if (hasError) {
      if (!pickup.value || !drop.value) {
        alert("Please select pickup and drop-off date & time.");
      }
      return;
    }

    const formData = new FormData(form);
    const payload = {
      pickup_location: formData.get(\'pickup_location\') || \'\',
      dropoff_location: formData.get(\'dropoff_location\') || formData.get(\'pickup_location\') || \'\',
      pickup_datetime: formData.get(\'pickup_datetime\') || \'\',
      dropoff_datetime: formData.get(\'dropoff_datetime\') || \'\',
      passenger_count: formData.get(\'passenger_count\') || \'\',
      luggage_count: formData.get(\'luggage_count\') || \'\'
    };

    lastSearchPayload = payload;

    const isMobile = mq.matches;

    if (isMobile) {
      modalGrid.innerHTML = \'\';
      modalEmpty.style.display = \'none\';
      modalLoading.style.display = \'block\';
      openModal();
    } else {
      resultsSection.style.display = \'flex\';
      resultsGrid.innerHTML = \'\';
      resultsEmpty.style.display = \'none\';
      resultsLoading.style.display = \'block\';
    }

    fetch(\'assets/includes/search_vehicles.php\', {
      method: \'POST\',
      headers: { \'Content-Type\': \'application/json\' },
      body: JSON.stringify(payload)
    })
    .then(function (res) { return res.json(); })
    .then(function (data) {
      if (isMobile) {
        modalLoading.style.display = \'none\';
      } else {
        resultsLoading.style.display = \'none\';
      }

      if (data.success && data.vehicles && data.vehicles.length > 0) {
        renderResults(data.vehicles);
      } else {
        const msg = data.message || \'No vehicles matched your search. Try different dates or fewer passengers.\';
        if (isMobile) {
          closeModal();
        } else {
          resultsSection.style.display = \'none\';
        }
      }
    })
    .catch(function () {
      if (isMobile) {
        modalLoading.style.display = \'none\';
        closeModal();
      } else {
        resultsLoading.style.display = \'none\';
        resultsSection.style.display = \'none\';
      }
    });
  });
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
                                <img src="assets\\images\\useful\\1.png" alt="Airport Parking"> Airport Parking
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
                    371/6, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94763603666">
                    +94 76 360 3666
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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
  
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
                        <a href="tel:+94763603666">+94 76 360 3666</a>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


<script>
document.addEventListener("DOMContentLoaded", function () {

    const logo = document.getElementById("dynamic-image");

    const normalLogo = "assets/images/logo_white.png";
    const scrollLogo = "assets/images/logo.png";

    window.addEventListener("scroll", function () {

        if (window.scrollY > 50) {
            logo.src = scrollLogo;
        } else {
            logo.src = normalLogo;
        }

    });

});
</script>

</body>
</html>
',
    '[[~11]]' => 'index.php?id=11',
    '[[~3]]' => 'index.php?id=3',
    '[[~7]]' => 'index.php?id=7',
    '[[*pagetitle]]' => 'Home',
    '[[~8]]' => 'index.php?id=8',
    '[[~12]]' => 'index.php?id=12',
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
                                <img src="assets\\images\\useful\\1.png" alt="Airport Parking"> Airport Parking
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
                    371/6, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94763603666">
                    +94 76 360 3666
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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
  
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
                        <a href="tel:+94763603666">+94 76 360 3666</a>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


<script>
document.addEventListener("DOMContentLoaded", function () {

    const logo = document.getElementById("dynamic-image");

    const normalLogo = "assets/images/logo_white.png";
    const scrollLogo = "assets/images/logo.png";

    window.addEventListener("scroll", function () {

        if (window.scrollY > 50) {
            logo.src = scrollLogo;
        } else {
            logo.src = normalLogo;
        }

    });

});
</script>

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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
  
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
                        <a href="tel:+94763603666">+94 76 360 3666</a>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


<script>
document.addEventListener("DOMContentLoaded", function () {

    const logo = document.getElementById("dynamic-image");

    const normalLogo = "assets/images/logo_white.png";
    const scrollLogo = "assets/images/logo.png";

    window.addEventListener("scroll", function () {

        if (window.scrollY > 50) {
            logo.src = scrollLogo;
        } else {
            logo.src = normalLogo;
        }

    });

});
</script>

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
                                <img src="assets\\images\\useful\\1.png" alt="Airport Parking"> Airport Parking
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
                    371/6, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94763603666">
                    +94 76 360 3666
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
                                <img src="assets\\images\\useful\\1.png" alt="Airport Parking"> Airport Parking
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
                    371/6, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94763603666">
                    +94 76 360 3666
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
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
      'Offers' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Offers',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => 'require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$search = $_SESSION[\'rent_search\'] ?? [];

$pickupLocation  = trim($search[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($search[\'dropoff_location\'] ?? \'\');
$pickupDatetime  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropoffDatetime = trim($search[\'dropoff_datetime\'] ?? \'\');

$sql = "
SELECT *
FROM offers
WHERE is_active = 1
ORDER BY sort_order ASC, id DESC
";
$offers = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$promo50 = [];
$mini = [];
$featured = [];

foreach ($offers as $o) {
    if ($o[\'layout\'] === \'promo50\') {
        $promo50[] = $o;
    }
    if ($o[\'layout\'] === \'mini\') {
        $mini[] = $o;
    }
    if ($o[\'layout\'] === \'featured\') {
        $featured[] = $o;
    }
}

$featuredOne = $featured[0] ?? null;
?>

<?php if (!empty($promo50)): ?>
<?php
    $promoCount = count($promo50);

    switch ($promoCount) {
        case 1:
            $promoCol = \'col-lg-8 col-md-10 col-12\';
            break;
        case 2:
            $promoCol = \'col-lg-6 col-md-6 col-12\';
            break;
        case 3:
            $promoCol = \'col-lg-4 col-md-6 col-12\';
            break;
        default:
            $promoCol = \'col-lg-4 col-md-6 col-12\';
            break;
    }
?>
<section class="offer-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="priority-badge">Special Offers</h2>
                <p class="fleet-heading1 mt-0">Grab the best deals for your ride</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php foreach ($promo50 as $p): ?>
                <?php
                $ctaLink = trim($p[\'cta_link\'] ?? \'\');

                if ($ctaLink === \'\') {
                    $ctaLink = \'index.php?id=39\';
                }

                if (preg_match(\'/\\[\\[\\~(\\d+)\\]\\]/\', $ctaLink, $matches)) {
                    $pageId = (int)$matches[1];
                    $ctaLink = $modx->getOption(\'site_url\') . \'index.php?id=\' . $pageId;
                } elseif (preg_match(\'~(?:^|/)(\\d+)$~\', rtrim($ctaLink, \'/\'), $matches)) {
                    $pageId = (int)$matches[1];
                    $ctaLink = $modx->getOption(\'site_url\') . \'index.php?id=\' . $pageId;
                } elseif (strpos($ctaLink, \'index.php?id=\') !== false) {
                    // leave as is
                }

                $offerLink = rtrim($ctaLink, \'?&\')
                    . (strpos($ctaLink, \'?\') !== false ? \'&\' : \'?\')
                    . \'discount=\' . rawurlencode($p[\'discount_text\'] ?? \'\')
                    . \'&car_category=\' . rawurlencode($p[\'car_category\'] ?? \'\');

                $startDate = !empty($p[\'offer_start_date\']) ? date(\'d M Y\', strtotime($p[\'offer_start_date\'])) : \'\';
                $endDate   = !empty($p[\'offer_end_date\']) ? date(\'d M Y\', strtotime($p[\'offer_end_date\'])) : \'\';
                $dateRange = ($startDate && $endDate) ? $startDate . \' - \' . $endDate : \'\';
                ?>
                
                <div class="<?= $promoCol ?> mb-4">
                    <article class="offer-card-modern">
                        <div class="offer-card-modern__content">
                            <?php if (!empty($p[\'discount_text\'])): ?>
                                <div class="offer-card-modern__badge">
                                    <?= htmlspecialchars($p[\'discount_text\'], ENT_QUOTES, \'UTF-8\') ?>
                                </div>
                            <?php endif; ?>

                            <h3 class="offer-card-modern__title">
                                <?= htmlspecialchars($p[\'title\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>
                            </h3>

                            <div class="offer-card-modern__meta">
                                <?php if (!empty($p[\'car_category\'])): ?>
                                    <span class="offer-chip">
                                        <?= htmlspecialchars($p[\'car_category\'], ENT_QUOTES, \'UTF-8\') ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ($dateRange !== \'\'): ?>
                                    <span class="offer-chip offer-chip--light">
                                        Valid : <?= htmlspecialchars($dateRange, ENT_QUOTES, \'UTF-8\') ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <form action="<?= htmlspecialchars($offerLink, ENT_QUOTES, \'UTF-8\') ?>" method="post" class="offer-card-modern__form">
                                <input type="hidden" name="pickup_location" value="<?= htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="dropoff_location" value="<?= htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="pickup_datetime" value="<?= htmlspecialchars($pickupDatetime, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="dropoff_datetime" value="<?= htmlspecialchars($dropoffDatetime, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="discount" value="<?= htmlspecialchars($p[\'discount_text\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="car_category" value="<?= htmlspecialchars($p[\'car_category\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
<input type="hidden" name="search_source" value="offer">
<input type="hidden" name="offer_start_date" value="<?= htmlspecialchars($p[\'offer_start_date\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
<input type="hidden" name="offer_end_date" value="<?= htmlspecialchars($p[\'offer_end_date\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
                                <button type="submit" class="offer-card-modern__btn">
                                    <?= htmlspecialchars($p[\'cta_text\'] ?? \'Shop Now\', ENT_QUOTES, \'UTF-8\') ?>
                                </button>
                            </form>
                        </div>

                        <div class="offer-card-modern__image-wrap">
                            <?php if (!empty($p[\'image_path\'])): ?>
                                <img
                                    class="offer-card-modern__image"
                                    src="<?= htmlspecialchars($p[\'image_path\'], ENT_QUOTES, \'UTF-8\') ?>"
                                    alt="<?= htmlspecialchars($p[\'title\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>"
                                >
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif;',
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

$search = $_SESSION[\'rent_search\'] ?? [];

$pickupLocation  = trim($search[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($search[\'dropoff_location\'] ?? \'\');
$pickupDatetime  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropoffDatetime = trim($search[\'dropoff_datetime\'] ?? \'\');

$sql = "
SELECT *
FROM offers
WHERE is_active = 1
ORDER BY sort_order ASC, id DESC
";
$offers = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$promo50 = [];
$mini = [];
$featured = [];

foreach ($offers as $o) {
    if ($o[\'layout\'] === \'promo50\') {
        $promo50[] = $o;
    }
    if ($o[\'layout\'] === \'mini\') {
        $mini[] = $o;
    }
    if ($o[\'layout\'] === \'featured\') {
        $featured[] = $o;
    }
}

$featuredOne = $featured[0] ?? null;
?>

<?php if (!empty($promo50)): ?>
<?php
    $promoCount = count($promo50);

    switch ($promoCount) {
        case 1:
            $promoCol = \'col-lg-8 col-md-10 col-12\';
            break;
        case 2:
            $promoCol = \'col-lg-6 col-md-6 col-12\';
            break;
        case 3:
            $promoCol = \'col-lg-4 col-md-6 col-12\';
            break;
        default:
            $promoCol = \'col-lg-4 col-md-6 col-12\';
            break;
    }
?>
<section class="offer-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="priority-badge">Special Offers</h2>
                <p class="fleet-heading1 mt-0">Grab the best deals for your ride</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php foreach ($promo50 as $p): ?>
                <?php
                $ctaLink = trim($p[\'cta_link\'] ?? \'\');

                if ($ctaLink === \'\') {
                    $ctaLink = \'index.php?id=39\';
                }

                if (preg_match(\'/\\[\\[\\~(\\d+)\\]\\]/\', $ctaLink, $matches)) {
                    $pageId = (int)$matches[1];
                    $ctaLink = $modx->getOption(\'site_url\') . \'index.php?id=\' . $pageId;
                } elseif (preg_match(\'~(?:^|/)(\\d+)$~\', rtrim($ctaLink, \'/\'), $matches)) {
                    $pageId = (int)$matches[1];
                    $ctaLink = $modx->getOption(\'site_url\') . \'index.php?id=\' . $pageId;
                } elseif (strpos($ctaLink, \'index.php?id=\') !== false) {
                    // leave as is
                }

                $offerLink = rtrim($ctaLink, \'?&\')
                    . (strpos($ctaLink, \'?\') !== false ? \'&\' : \'?\')
                    . \'discount=\' . rawurlencode($p[\'discount_text\'] ?? \'\')
                    . \'&car_category=\' . rawurlencode($p[\'car_category\'] ?? \'\');

                $startDate = !empty($p[\'offer_start_date\']) ? date(\'d M Y\', strtotime($p[\'offer_start_date\'])) : \'\';
                $endDate   = !empty($p[\'offer_end_date\']) ? date(\'d M Y\', strtotime($p[\'offer_end_date\'])) : \'\';
                $dateRange = ($startDate && $endDate) ? $startDate . \' - \' . $endDate : \'\';
                ?>
                
                <div class="<?= $promoCol ?> mb-4">
                    <article class="offer-card-modern">
                        <div class="offer-card-modern__content">
                            <?php if (!empty($p[\'discount_text\'])): ?>
                                <div class="offer-card-modern__badge">
                                    <?= htmlspecialchars($p[\'discount_text\'], ENT_QUOTES, \'UTF-8\') ?>
                                </div>
                            <?php endif; ?>

                            <h3 class="offer-card-modern__title">
                                <?= htmlspecialchars($p[\'title\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>
                            </h3>

                            <div class="offer-card-modern__meta">
                                <?php if (!empty($p[\'car_category\'])): ?>
                                    <span class="offer-chip">
                                        <?= htmlspecialchars($p[\'car_category\'], ENT_QUOTES, \'UTF-8\') ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ($dateRange !== \'\'): ?>
                                    <span class="offer-chip offer-chip--light">
                                        Valid : <?= htmlspecialchars($dateRange, ENT_QUOTES, \'UTF-8\') ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <form action="<?= htmlspecialchars($offerLink, ENT_QUOTES, \'UTF-8\') ?>" method="post" class="offer-card-modern__form">
                                <input type="hidden" name="pickup_location" value="<?= htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="dropoff_location" value="<?= htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="pickup_datetime" value="<?= htmlspecialchars($pickupDatetime, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="dropoff_datetime" value="<?= htmlspecialchars($dropoffDatetime, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="discount" value="<?= htmlspecialchars($p[\'discount_text\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="car_category" value="<?= htmlspecialchars($p[\'car_category\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
<input type="hidden" name="search_source" value="offer">
<input type="hidden" name="offer_start_date" value="<?= htmlspecialchars($p[\'offer_start_date\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
<input type="hidden" name="offer_end_date" value="<?= htmlspecialchars($p[\'offer_end_date\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
                                <button type="submit" class="offer-card-modern__btn">
                                    <?= htmlspecialchars($p[\'cta_text\'] ?? \'Shop Now\', ENT_QUOTES, \'UTF-8\') ?>
                                </button>
                            </form>
                        </div>

                        <div class="offer-card-modern__image-wrap">
                            <?php if (!empty($p[\'image_path\'])): ?>
                                <img
                                    class="offer-card-modern__image"
                                    src="<?= htmlspecialchars($p[\'image_path\'], ENT_QUOTES, \'UTF-8\') ?>"
                                    alt="<?= htmlspecialchars($p[\'title\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>"
                                >
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif;',
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