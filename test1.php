   
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5861K2TN4V"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5861K2TN4V');
</script>

<!-- home hero section -->
<section class="heroRent heroRent--yacht">

  <div class="heroRent__frame">

    <!-- Swiper -->
    <div class="heroRent__swiper swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide heroRent__slide" style="background-image:url('assets/images/1.jpeg');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url('assets/images/2.jpg');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url('assets/images/3.jpg');">
          <div class="heroRent__shade"></div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="heroRent__content">
      <div class="container">
        <div class="heroRent__contentInner heroRent__contentInner--left">
          <span class="heroRent__sub">Affordable</span>
          <h1 class="heroRent__title">Sri Lanka Rent A Car</h1>
          <p class="heroRent__lead">Premium vehicles • Chauffeur services • Airport pickup</p>
        </div>
      </div>
    </div>

    <div class="heroRent__bar">
      <div class="container">
        <!-- Mobile Accordion Toggle -->
      <button type="button" class="heroRentAcc__toggle" aria-expanded="false" aria-controls="heroRentAccPanel">
        <span>Search & Reserve</span>
        <span class="heroRentAcc__icon" aria-hidden="true"></span>
      </button>

      <!-- Accordion Panel -->
      <div class="heroRentAcc__panel" id="heroRentAccPanel" hidden>
     <form class="heroRentForm" action="/srilankarentacar.com/index.php?id=39" method="get">
  <input type="hidden" name="id" value="39">

          <div class="heroRentForm__grid">

            <!-- Pickup -->
            <div class="heroRentForm__field heroRentForm__field--wide">
              <label class="heroRentForm__label" for="heroRent_pickup">Vehicle Pickup location</label>
              <input class="heroRentForm__input" id="heroRent_pickup" type="text" name="pickup_location" placeholder="e.g., Colombo" required>
            </div>

            <!-- Same location checkbox -->
            <div class="heroRentForm__field heroRentForm__field--check">
              <label class="heroRentForm__checkLabel" for="heroRent_sameLocation">
                <input type="checkbox" id="heroRent_sameLocation" checked>
                <span>Return to same location</span>
              </label>
            </div>

            <!-- Drop-off -->
            <div class="heroRentForm__field heroRentForm__field--wide" id="heroRent_dropWrap" style="display:none;">
              <label class="heroRentForm__label" for="heroRent_dropInput">Vehicle Drop-off location</label>
              <input class="heroRentForm__input" type="text" name="dropoff_location" id="heroRent_dropInput" placeholder="e.g., Kandy">
            </div>

            <!-- Pickup datetime (Flatpickr) -->
            <div class="heroRentForm__field">
              <label class="heroRentForm__label" for="heroRent_pickupDT">Pickup date & time</label>
              <input class="heroRentForm__input heroRentDT" id="heroRent_pickupDT" type="text" name="pickup_datetime" placeholder="Pickup Date & Time" required>
            </div>

            <!-- Dropoff datetime (Flatpickr) -->
            <div class="heroRentForm__field">
              <label class="heroRentForm__label" for="heroRent_dropDT">Drop-off date & time</label>
              <input class="heroRentForm__input heroRentDT" id="heroRent_dropDT" type="text" name="dropoff_datetime" placeholder="Drop-off Date & Time" required>
            </div>

            <!-- Submit -->
            <div class="heroRentForm__field heroRentForm__field--submit">
              <button type="submit" class="heroRentForm__btn">Search</button>
            </div>

          </div>
        </form>      </div>
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

<!-- who we are section -->
<section class="ftco-section ftco-wrap-about srAbout">
  <div class="container">
    <div id="tsparticles"></div>

    <div class="row align-items-start">
      <!-- LEFT: big image -->
      <div class="col-lg-5">
        <div class="srAbout__bigImg" style="background-image:url('assets/images/home/about_us_1.jpg');"></div>
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
          <div class="srAbout__floatImg" style="background-image:url('assets/images/home/about_us_2.jpg');"></div>

          <p class="srAbout__text">
            Our new fleets of vehicles are maintained to the highest standard, ensuring cleanliness & reliability.
            We take safety very seriously, making it easier for you to relax and enjoy a family vacation.
            From a fleet of more than 500 vehicles, you can find the perfect match between budget and luxury from well-known brands.
          </p>

          <p class="srAbout__text">
            With offices conveniently located near Bandaranaike International Airport, we're able to meet and greet you with a smile
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
                <a href="#" class="country-tag btn">Indian Travelers</a>
                <p>We provide tailored vehicle rental services designed especially for Indian travelers visiting Sri Lanka.</p>
            </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="row g-4 h-100">
          <div class="col-12">
            <div class="travel-card small-card russian-card">
                <div class="card-overlay">
                    <span class="country-tag">Russian Travelers</span>
                    <h4>Comfortable Travel for Russian Visitors</h4>
                </div>
            </div>
          </div>

          <div class="col-12 mt-3">
            <div class="travel-card small-card australian-card">
                <div class="card-overlay">
                    <span class="country-tag">Australian Travelers</span>
                    <h4>Flexible Rides for Australian Guests</h4>
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
      <div class="srBusiness__card srBusiness__card--light">
        <div class="srBusiness__icon">
          <i class="fas fa-umbrella-beach"></i>
        </div>
        <h4>Explore Vacations</h4>
        <p>
          Curated holiday experiences, tour planning, and travel packages to help you discover Sri Lanka.
        </p>
        <a href="https://explorevacations.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <div class="srBusiness__card srBusiness__card--light">
        <div class="srBusiness__icon">
          <i class="fas fa-plane-departure"></i>
        </div>
        <h4>Airport Parking</h4>
        <p>
          Secure and convenient airport parking solutions designed to give travelers peace of mind.
        </p>
        <a href="https://airportparking.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <!-- SR Transfers -->
      <div class="srBusiness__card srBusiness__card--light">
        <div class="srBusiness__icon">
          <i class="fas fa-route"></i>
        </div>
        <h4>SR Transfers</h4>
        <p>
          Comfortable and dependable airport, hotel, and intercity transfer services for every traveler.
        </p>
        <a href="https://srtransfers.lk" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <div class="srBusiness__card srBusiness__card--light">
        <div class="srBusiness__icon">
          <i class="fas fa-hotel"></i>
        </div>
        <h4>The 9 Trees Boutique Villa</h4>
        <p>
            Experience premium comfort and peaceful relaxation at The 9 Trees Boutique Villa.
        </p>
        <a href="https://www.facebook.com/the9treesboutiquevilla" class="srBusiness__btnCard" target="_blank">
          Explore →
        </a>
      </div>

      <!-- 24/7 Support -->
      <div class="srBusiness__card srBusiness__card--light">
        <div class="srBusiness__icon">
          <i class="fas fa-headset"></i>
        </div>
        <h4>24/7 Travel Support</h4>
        <p>
          Dedicated customer assistance to support your transport and travel needs at any time.
        </p>
        <a href="#contact" class="srBusiness__btnCard">
          Contact →
        </a>
      </div>

    </div>
  </div>
</section>

<!-- our fleet section -->
<section id="our-fleet" class="fleet-members-section py-5">
  <div class="container">
    <div class="row align-items-center mb-0">
      <div class="col-lg-5">
        <span class="fleet-badge">Our Fleet</span>
        <h2 class="fleet-heading mt-3">Newly Joined Fleet Members</h2>
        <p class="fleet-subtext">
          Discover the latest vehicles added to SR Rent A Car. From compact city cars to premium SUVs
          and luxury coaches, our newest fleet members are ready to deliver comfort, safety, and style
          for every journey across Sri Lanka.
        </p>
      </div>

      <div class="col-lg-7">
        <div class="fleet-hero-image">
          <img src="assets/images/fleet/fleet-hero.jpg" alt="New fleet vehicles" class="img-fluid">
        </div>
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
            <h4 class="offer-title">Rent A Car</h4>
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
        <a href="[[~9]]" class="offer-card">
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
        <a href="[[~9]]" class="offer-card">
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
      <!-- arrows (right side like image) -->
      <div class="tm-controls">
        <button class="tm-btn tm-prev" type="button" aria-label="Previous">&#8592;</button>
        <button class="tm-btn tm-next" type="button" aria-label="Next">&#8594;</button>
      </div>

      <!-- Swiper -->
      <div class="swiper tmSwiper">
        <div class="swiper-wrapper">

          <!-- Review 1 -->
          <div class="swiper-slide">
            <div class="tm-card">
              <div class="tm-avatar">
                <img src="assets/images/testimonial/1.png" alt="UnderSmokingDoors TV">
              </div>

              <p class="tm-text">
                “Tutto perfetto, ritiro semplice e veloce, auto in perfette condizioni.. un ringraziamento particolare a Sampath… consiglio assolutamente!”
              </p>

              <div class="tm-footer">
                <div>
                  <div class="tm-name">UnderSmokingDoors TV</div>
                  <div class="tm-role">Google Review • Aug 20, 2024</div>
                </div>

                <div class="tm-stars" aria-label="5 stars">
                  ★★★★★
                </div>
              </div>
            </div>
          </div>

          <!-- Review 2 -->
          <div class="swiper-slide">
            <div class="tm-card">
              <div class="tm-avatar">
                <img src="assets/images/testimonial/2.png" alt="Daniel Kraiks Vachal">
              </div>

              <p class="tm-text">
                “Great service overall, we were delayed because of our flight. No problem, they offered to deliver the car to our hotel…”
              </p>

              <div class="tm-footer">
                <div>
                  <div class="tm-name">Daniel “Kraiks” Vachal</div>
                  <div class="tm-role">Google Review • Aug 12, 2024</div>
                </div>

                <div class="tm-stars" aria-label="4 stars">
                  ★★★★☆
                </div>
              </div>
            </div>
          </div>

          <!-- Review 3 -->
          <div class="swiper-slide">
            <div class="tm-card">
              <div class="tm-avatar">
                <img src="assets/images/testimonial/3.png" alt="Brian Steele">
              </div>

              <p class="tm-text">
                “We had booked an airport transfer… our driver Sahan had been delayed by the weather and traffic but still managed…”
              </p>

              <div class="tm-footer">
                <div>
                  <div class="tm-name">Brian Steele</div>
                  <div class="tm-role">Google Review • Aug 19, 2024</div>
                </div>

                <div class="tm-stars" aria-label="4 stars">
                  ★★★★☆
                </div>
              </div>
            </div>
          </div>

          <!-- Review 4 (optional extra slide) -->
          <div class="swiper-slide">
            <div class="tm-card">
              <div class="tm-avatar">
                <img src="assets/images/testimonial/4.png" alt="Devran Karaveli">
              </div>

              <p class="tm-text">
                “A good, reliable business with understanding and well-intentioned staff who help in every way possible.”
              </p>

              <div class="tm-footer">
                <div>
                  <div class="tm-name">Devran Karaveli</div>
                  <div class="tm-role">Google Review • Jul 22, 2024</div>
                </div>

                <div class="tm-stars" aria-label="4 stars">
                  ★★★★☆
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="text-center mt-4">
      <a href="https://www.google.com/search?client=firefox-b-d&q=sr+rent+a+car#lrd=0x3ae2f9da7f0d8cad:0x23cc584d58386b05,1,,,," target="_blank" rel="noopener">
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
          <a class="post-media" href="[[~7]]" aria-label="Read post">
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
              <a href="[[~7]]">Navigating a Vehicle Accident in Sri Lanka as a Foreigner: A Comprehensive Guide</a>
            </h3>

            <p class="post-excerpt">
              Driving in a foreign country can be an exciting experience, but it's essential to be prepared for unexpected situations like a vehicle accident...
            </p>

            <a class="post-btn" href="[[~7]]">Read more</a>
          </div>
        </article>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <article class="post-card">
          <a class="post-media" href="[[~8]]" aria-label="Read post">
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
              <a href="[[~8]]">Hidden Gems near Kandy to Discover with Your Rental Car</a>
            </h3>

            <p class="post-excerpt">
              Kandy, the cultural jewel of Sri Lanka, beckons travellers with its rich history, vibrant culture, and captivating landscapes...
            </p>

            <a class="post-btn" href="[[~8]]">Read more</a>
          </div>
        </article>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <article class="post-card">
          <a class="post-media" href="[[~12]]" aria-label="Read post">
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
              <a href="[[~12]]">Valid Driving Licenses To Rent A Car In Sri Lanka</a>
            </h3>

            <p class="post-excerpt">
              Driving in a foreign country can be an exciting experience, but it's essential to be prepared for unexpected situations...
            </p>

            <a class="post-btn" href="[[~12]]">Read more</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Large Button Section -->
    <div class="text-center mt-5">
      <a class="theme-btn btn-style-two" href="[[~5]]" role="button" style="background: #023f75;">View All Posts</a>
    </div>
  </div>
</section>
	
<style>
	.card-body:hover {
		border-color: #051425; 
		box-shadow: 10px 20px 35px rgba(0, 0, 0, 0.2); 
	}
</style>

<script>
  // Swiper init
  const heroRentSwiper = new Swiper('.heroRent__swiper', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 800,
    effect: 'fade',
    fadeEffect: { crossFade: true },
    pagination: { el: '.heroRent__dots', clickable: true },
    navigation: { nextEl: '.heroRent__next', prevEl: '.heroRent__prev' }
  });
</script>

<script>
	document.addEventListener("DOMContentLoaded", function () {
	new Swiper(".fleetSwiper", {
		slidesPerView: 1,
		spaceBetween: 20,
		navigation: {
		nextEl: ".fleet-next",
		prevEl: ".fleet-prev"
		},
		breakpoints: {
		576: { slidesPerView: 2 },
		992: { slidesPerView: 3 }
		}
	});
	});
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector('.heroRentAcc__toggle');
    const panel = document.getElementById('heroRentAccPanel');
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
    const same = document.getElementById('heroRent_sameLocation');
    const wrap = document.getElementById('heroRent_dropWrap');
    const input = document.getElementById('heroRent_dropInput');

    function toggleDrop(){
      if (!same || !wrap || !input) return;
      const show = !same.checked;
      wrap.style.display = show ? 'block' : 'none';
      input.required = show;
      if(!show) input.value = '';
    }

    if (same) {
      same.addEventListener('change', toggleDrop);
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

      flatpickr(pickupEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: "today",
        time_24hr: true,
        minuteIncrement: 15,
        disableMobile: true, 
        onChange: function(selectedDates) {
          if (dropPicker && selectedDates && selectedDates[0]) {
            dropPicker.set("minDate", selectedDates[0]);
            const d = dropPicker.selectedDates[0];
            if (d && d < selectedDates[0]) dropPicker.clear();
          }
        }
      });

      dropPicker = flatpickr(dropEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: "today",
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
	attachAuto("heroRent_pickup", "SR Rent A Car Sri Lanka, Negombo");

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