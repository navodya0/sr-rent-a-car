<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 40,
    'type' => 'document',
    'pagetitle' => 'indian',
    'longtitle' => '',
    'description' => '',
    'alias' => 'indian',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '
  <style>
    :root{
      --navy:#0b1f3a;
      --navy-2:#132d52;
      --navy-3:#1d3f6f;
      --white:#ffffff;
      --off:#f6f8fc;
      --soft:#edf2f9;
      --text:#5c6a7d;
      --gold:#c79a63;
      --gold-soft:#f1e3d3;
      --border:#dfe6f0;
      --shadow:0 18px 50px rgba(11,31,58,.10);
      --radius-xl:34px;
      --radius-lg:26px;
      --radius-md:20px;
      --container:1200px;
    }
  body {
    font-family: Cambria, Georgia, "Times New Roman", serif !important;
  }

  h1, h2, h3, h4, h5, h6,
  p, a, span, li, strong, small, summary, button, input, textarea, label {
    font-family: Cambria, Georgia, "Times New Roman", serif !important;
  }

    .tag{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:8px 16px;
      border-radius:999px;
      font-size:14px;
      font-weight:800;
      letter-spacing:.08em;
      text-transform:uppercase;
      background:#fff;
      border:1px solid rgba(255,255,255,.14);
      color:black;
    }

    .tag--light{
      background:rgba(11,31,58,.06);
      border:1px solid rgba(11,31,58,.08);
      color:var(--navy);
    }

    .btn{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      gap:10px;
      padding:2px 24px;
      font-weight:800;
      transition:.3s ease;
      border:none;
      cursor:pointer;
    }

    /* .btn-primary{
      background:var(--white);
      color:var(--navy);
      box-shadow:0 12px 30px rgba(0,0,0,.10);
    } */

    /* .btn-primary:hover{
      transform:translateY(-2px);
    } */

    .btn-dark{
      background:var(--navy);
      color:var(--white);
      box-shadow:var(--shadow);
    }

    /* .btn-dark:hover{
      background:var(--navy-2);
      transform:translateY(-2px);
    } */

    .btn-outline{
    background: transparent;
    color: var(--navy);
    border: 1px solid rgba(11,31,58,.18);
    }

    .btn-outline:hover{
    background: rgba(11,31,58,.05);
    transform: translateY(-2px);
    color:black;
    }

    .section-head{
      max-width:760px;
      margin:0 auto 40px;
      text-align:center;
    }

    .section-head h2{
      font-size:clamp(2rem, 3.5vw, 3rem);
      line-height:1.15;
      margin:16px 0 12px;
      font-weight:800;
      color:var(--navy);
    }

    .section-head p{
      color:var(--text);
      font-size:1.02rem;
    }

    /* Header */
    .site-header{
      position:sticky;
      top:0;
      z-index:1000;
      background:rgba(255,255,255,.92);
      backdrop-filter:blur(10px);
      border-bottom:1px solid rgba(11,31,58,.07);
    }

    .nav-wrap{
      min-height:78px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:20px;
    }

    .logo{
      font-size:1.35rem;
      font-weight:800;
      color:var(--navy);
      letter-spacing:.02em;
    }

    .logo span{
      color:var(--gold);
    }

    .nav{
      display:flex;
      align-items:center;
      gap:26px;
      flex-wrap:wrap;
    }

    .nav a{
      color:var(--navy);
      font-weight:700;
      font-size:.95rem;
    }

    .nav a:hover{
      color:var(--navy-3);
    }

    /* Hero */
        .hero{
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(circle at top left, rgba(199,154,99,.10), transparent 24%),
            radial-gradient(circle at bottom right, rgba(11,31,58,.05), transparent 28%),
            linear-gradient(180deg, #ffffff 0%, #f7faff 100%);
        color: var(--navy);
        padding: 40px 0;
        }

        .hero::before,
        .hero::after{
        content: "";
        position: absolute;
        border-radius: 50%;
        z-index: 0;
        }

        .hero::before{
        width: 260px;
        height: 260px;
        top: -80px;
        right: 8%;
        background: rgba(199,154,99,.10);
        filter: blur(10px);
        }

        .hero::after{
        width: 180px;
        height: 180px;
        bottom: 20px;
        left: -40px;
        background: rgba(11,31,58,.05);
        filter: blur(8px);
        }

        .hero-grid{
        display: grid;
        grid-template-columns: 1.06fr .94fr;
        gap: 40px;
        align-items: center;
        position: relative;
        z-index: 1;
        }

        .hero-content h1{
        font-size: clamp(2.4rem, 5vw, 4.6rem);
        line-height: 1.02;
        margin: 18px 0 18px;
        font-weight: 800;
        max-width: 720px;
        color: var(--navy);
        }

        .hero-content p{
        color: var(--text);
        max-width: 680px;
        font-size: 14px;
        margin-bottom: 28px;
        }

        .hero-actions{
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 28px;
        }

        .hero-points{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        gap: 16px;
        max-width: 760px;
        }

        .hero-point{
        background: #ffffff;
        border: 1px solid rgba(11,31,58,.08);
        border-radius: 20px;
        padding: 18px;
        box-shadow: 0 14px 35px rgba(11,31,58,.08);
        }

        .hero-point i{
        color: var(--gold);
        font-size:20px;
        margin-bottom: 10px;
        display: block;
        }

        .hero-point strong{
        display: block;
        font-size: 14px;
        margin-bottom: 4px;
        color: var(--navy);
        }

        .hero-point span{
        display: block;
        color: var(--text);
        font-size: 14px;
        line-height: 1.5;
        }

        .hero-visual{
        position: relative;
        }

        .hero-main-card{
        background: #ffffff;
        border: 1px solid rgba(11,31,58,.08);
        border-radius: 36px;
        padding: 16px;
        box-shadow: 0 24px 60px rgba(11,31,58,.10);
        }

        .hero-main-card img{
        width: 100%;
        height: 620px;
        object-fit: cover;
        border-radius: 28px;
        }

        .floating-card{
        position: absolute;
        background: var(--white);
        color: var(--navy);
        border-radius: 24px;
        padding: 10px 20px;
        box-shadow: 0 18px 40px rgba(11,31,58,.12);
        max-width: 260px;
        border: 1px solid rgba(11,31,58,.06);
        }

        .floating-card small{
        display: block;
        color: var(--gold);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .08em;
        font-size: 14px;
        }

        .floating-card strong{
        display: block;
        font-size: 14px;
        margin-bottom: 6px;
        line-height: 1.35;
        color: var(--navy);
        }

        .floating-card p{
        color: var(--text);
        font-size: 14px;
        line-height: 1.55;
        }

        .floating-card--top{
        top: -18px;
        right: -12px;
        }

        .floating-card--bottom{
        left: -18px;
        bottom: 30px;
        }

      .section-space{
        padding:40px 0;
        background-color:white;
      }

    /* About / direct booking */
        .editorial-grid{
        display:flex;
        align-items:center;
        }

    .panel{
      border-radius:var(--radius-xl);
      overflow:hidden;
    }

    .panel-dark{
      background:var(--navy);
      color:var(--white);
      padding:28px;
    }

    .panel-dark h2,
    .panel-dark h3{
      color:var(--white);
    }

    .panel-dark p{
      color:rgba(255,255,255,.82) !important;
    }

    .panel-image img{
      width:100%;
      height:100%;
      min-height:430px;
      object-fit:cover;
    }

    .panel-content{
      padding:38px;
    }

    .panel-content h2,
    .panel-content h3,
    .panel-dark h2,
    .panel-dark h3{
      font-size:clamp(1.7rem, 2.4vw, 2.4rem);
      line-height:1.18;
      margin:16px 0 14px;
      font-weight:800;
    }

    .panel-content p{
      color:var(--text);
      margin-bottom:14px;
    }

    .shape-list{
      display:grid;
      gap:14px;
      margin-top:20px;
    }

    .shape-list li{
      display:flex;
      align-items:flex-start;
      gap:14px;
      padding:14px 16px;
      border-radius:18px;
      background:var(--soft);
      color:var(--navy);
      font-weight:700;
      line-height:1.55;
    }

    .shape-list li i{
      color:var(--gold);
      margin-top:4px;
      flex-shrink:0;
    }

    .panel-dark .shape-list li{
      background:rgba(255,255,255,.08);
      color:var(--white);
    }

    /* Highlight cards */
    .highlight-grid{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:24px;
    }

    .highlight-card{
      background:var(--white);
      border-radius:28px;
      overflow:hidden;
      box-shadow:var(--shadow);
      transition:.35s ease;
    }

    .highlight-card:hover{
      transform:translateY(-8px);
    }

    .highlight-card img{
      width:100%;
      height:240px;
      object-fit:cover;
    }

    .highlight-card__body{
      padding:26px;
    }

    .highlight-card__body h3{
      font-size:1.35rem;
      margin-bottom:10px;
      line-height:1.25;
    }

    .highlight-card__body p{
      color:var(--text);
      margin-bottom:16px;
    }

    /* Permit strip */
    .permit-strip{
    position: relative;
    overflow: hidden;
    color: var(--white);
    border-radius: 40px;
    padding: 48px;
    box-shadow: var(--shadow);
    background-image: url("assets/images/indian-page/permit-bg.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }

    .permit-strip::before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgb(0 0 0 / 84%);
    z-index: 0;
    }

    .permit-strip > *{
    position: relative;
    z-index: 1;
    }

    .permit-grid{
      display:grid;
      grid-template-columns:1.05fr .95fr;
      gap:34px;
      align-items:center;
    }
    .permit-strip .tag{
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.16);
    color: #fff !important;
    }

    .permit-strip h2,
    .permit-strip h3,
    .permit-strip strong{
    color: #fff;
    }

    .permit-strip p{
    color: rgba(255,255,255,.85) !important;
    }

    .permit-reqs{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:14px;
      margin-top:20px;
    }

    .permit-req{
      background:rgba(255,255,255,.08);
      border:1px solid rgba(255,255,255,.10);
      border-radius:20px;
      padding:18px;
      text-align:center;
    }

    .permit-req i{
      font-size:20px;
      color:#ffd7a8;
      margin-bottom:10px;
    }

    .permit-req strong{
      display:block;
      font-size:.96rem;
      line-height:1.35;
    }

    .permit-box{
      background:rgba(255,255,255,.09);
      border:1px solid rgba(255,255,255,.10);
      border-radius:28px;
      padding:21px;
    }

    .permit-box h3{
      margin-bottom:12px;
      font-size:1.45rem;
    }

    .permit-box ul{
      display:grid;
      gap:12px;
      margin-top:18px;
    }

    .permit-box li{
      display:flex;
      gap:12px;
      align-items:flex-start;
      color:rgba(255,255,255,.86);
    }

    .permit-box li i{
      color:#ffd7a8;
      margin-top:4px;
    }

    /* Two column info blocks */
    .info-grid{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:28px;
    }

    .info-card{
      background:var(--white);
      border-radius:32px;
      padding:34px;
      box-shadow:var(--shadow);
    }

    .info-card h3{
      font-size:1.8rem;
      line-height:1.2;
      margin:16px 0 14px;
    }

    .info-card p{
      color:var(--text);
      margin-bottom:14px;
text-align: justify;
    }

    /* FAQ */
    .faq-wrap{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:18px;
    }

    details.faq-item{
      background:var(--white);
      border-radius:22px;
      padding:20px 22px;
      box-shadow:var(--shadow);
    }

    details.faq-item summary{
      cursor:pointer;
      font-weight:800;
      color:var(--navy);
      list-style:none;
      position:relative;
      padding-right:26px;
    }

    details.faq-item summary::-webkit-details-marker{
      display:none;
    }

    details.faq-item summary::after{
      content:"+";
      position:absolute;
      right:0;
      top:0;
      font-size:1.25rem;
      color:var(--gold);
      font-weight:800;
    }

    details[open].faq-item summary::after{
      content:"–";
    }

    details.faq-item p{
      color:var(--text);
      margin-top:12px;
      padding-top:12px;
      border-top:1px solid var(--border);
    }

    /* CTA */
    .cta-box{
    position:relative;
    overflow:hidden;
    background:rgba(255,255,255,.65);
    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);
    border:3px solid rgb(0 24 57);
    border-radius:40px;
    padding:30px;
    box-shadow:var(--shadow);
    text-align:center;

    }

    /* heading */
    .cta-box h2{
    font-size:clamp(2rem, 3.5vw, 3.2rem);
    line-height:1.1;
    margin:16px auto 14px;
    max-width:820px;
    color:var(--navy);
    }

    /* text */
    .cta-box p{
    max-width:840px;
    margin:0 auto 14px;
    color:var(--text);
    }

    /* contact pills */
    .contact-pills{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:14px;
    margin:26px 0 30px;
    }

    .contact-pill{
    background:#ffffff;
    border:1px solid rgb(11 31 58);
    color:var(--navy);
    padding:14px 18px;
    border-radius:999px;
    font-weight:700;
    box-shadow:0 8px 20px rgba(0,0,0,.06);
    }

    .contact-pill i{
    color:var(--gold);
    margin-right:8px;
    }

        .btn-primary{
    background:var(--navy);
    color:#fff;
    }

    .btn-primary-directly {
        background:#fff;
        color:#000;
    }
    .btn-primary-directly:hover {
        background:#fff;
        color:#000;
    }

    .btn-primary:hover{
    background:#16345d;
    }

    .btn-outline{
    background:transparent;
    border:1px solid rgba(11,31,58,.20);
    color:var(--navy);
    }

    .btn-outline:hover{
    background:rgba(17, 46, 85, 0.05);
    }

    .cta-box::before{
    content:"";
    position:absolute;
    inset:0;
    background:
    radial-gradient(circle at top right, rgba(199,154,99,.12), transparent 35%),
    radial-gradient(circle at bottom left, rgba(11,31,58,.08), transparent 35%);
    z-index:-1;
    }

    /* Responsive */
    @media (max-width: 1100px){
      .hero-grid,
      .editorial-grid,
      .permit-grid,
      .info-grid{
        grid-template-columns:1fr;
      }

      .highlight-grid{
        grid-template-columns:1fr 1fr;
      }

      .hero-main-card img{
        height:520px;
      }

      .floating-card--top{
        right:12px;
      }

      .floating-card--bottom{
        left:12px;
      }
    }

    @media (max-width: 900px){
      .nav{
        display:none;
      }

      .hero-points,
      .permit-reqs,
      .faq-wrap{
        grid-template-columns:1fr;
      }

      .highlight-grid{
        grid-template-columns:1fr;
      }

      .cta-box,
      .permit-strip,
      .panel-content,
      .panel-dark,
      .info-card{
        padding:28px;
      }

      .hero{
        padding-top:70px;
      }

      .hero-main-card img{
        height:420px;
      }

      .floating-card{
        position:static;
        max-width:none;
        margin-top:16px;
      }
    }

    @media (max-width: 600px){
      .section-space{
        padding:72px 0;
      }

      .nav-wrap{
        min-height:70px;
      }

      .hero-content h1{
        font-size:2.2rem;
      }

      .hero-actions{
        flex-direction:column;
        align-items:stretch;
      }

      .btn{
        width:100%;
      }

      .panel-image img{
        min-height:300px;
      }

      .highlight-card img{
        height:210px;
      }

      .cta-box{
        padding:28px 22px;
      }
    }
  </style>
<body>
    <section class="hero-wrap hero-wrap-2" style="background-image: url(\'assets/images/indian-page/indian-bg.jpg\');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Indian Travellers</h1>
                <p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Indian Travellers<i class="ion-ios-arrow-forward"></i></span></p>
            </div>
            </div>
        </div>
    </section>

    <section class="hero">
    <div class="container">
        <div class="hero-grid">
        <div class="hero-content">
            <span class="tag"><i class="fas fa-car-side"></i> Special Page for Indian Travelers</span>
            <h1>Self Drive Car Rental in Sri Lanka for Indian Travelers</h1>
            <p>
            SR Rent A Car proudly welcomes Indian travelers visiting Sri Lanka with reliable self drive vehicles,
            exclusive offers, permit assistance arranged in advance, and dedicated travel support designed to make
            every journey smooth, flexible, and cost effective.
            </p>

            <div class="hero-actions">
            <a href="[[~39]]" class="btn btn-primary">Book Your Self Drive Car</a>
            <a href="[[~1]]" class="btn btn-outline">View Special Offers</a>
            </div>

            <div class="hero-points">
            <div class="hero-point">
                <i class="fas fa-percent"></i>
                <strong>Exclusive Offers</strong>
                <span>Special packages created especially for Indian tourists.</span>
            </div>
            <div class="hero-point">
                <i class="fas fa-id-card"></i>
                <strong>Permit Assistance</strong>
                <span>Advance help with temporary Sri Lanka driving permits.</span>
            </div>
            <div class="hero-point">
                <i class="fas fa-headset"></i>
                <strong>Priority Support</strong>
                <span>Fast guidance before arrival and throughout your journey.</span>
            </div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-main-card">
            <img src="assets/images/indian-page/hero.jpg" alt="Indian travelers with rental vehicle in Sri Lanka">
            </div>

            <div class="floating-card floating-card--top">
            <small>Direct Booking Benefit</small>
            <strong>Better pricing without third-party commissions</strong>
            <p>Book directly with SR Rent A Car for more value and personalized support.</p>
            </div>

            <div class="floating-card floating-card--bottom">
            <small>Travel Freedom</small>
            <strong>Explore Sri Lanka your way</strong>
            <p>Travel with privacy, flexibility, and full control of your own schedule.</p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space">
      <div class="container">
          <div class="row editorial-grid">
          <div class="col-md-6 panel panel-image">
              <img src="assets/images/indian-page/about-direct-booking.jpg" alt="Self drive rental experience in Sri Lanka">
          </div>

          <div class="col-md-6 panel panel-dark">
              <span class="tag"><i class="fas fa-star"></i> Why Book Directly</span>
              <h2>Why Book Directly with SR Rent A Car</h2>
              <p>
              Booking directly with SR Rent A Car offers clear advantages for travelers who want better value,
              direct communication, and a more reliable travel experience in Sri Lanka.
              </p>

              <ul class="shape-list">
              <li><i class="fas fa-check-circle"></i> Competitive pricing without third-party commissions</li>
              <li><i class="fas fa-check-circle"></i> Direct communication with the rental provider</li>
              <li><i class="fas fa-check-circle"></i> Flexible travel plans and customized itineraries</li>
              <li><i class="fas fa-check-circle"></i> Reliable self-drive vehicles maintained by professionals</li>
              </ul>

              <div style="margin-top:24px;">
                <a href="https://wa.me/94777780729?text=Hello%20I%20would%20like%20to%20reserve%20a%20car.%20Please%20assist%20me%20with%20availability."
                  class="btn btn-primary-directly"
                  target="_blank">
                  Reserve Directly Today
                </a>              
              </div>
          </div>
          </div>
      </div>
    </section>

    <section class="section-space" id="offers" style="padding-top:0;">
    <div class="container">
        <div class="section-head">
        <span class="tag tag--light"><i class="fas fa-gift"></i> Exclusive Benefits</span>
        <h2>Special Offers for Indian Travelers</h2>
        <p>
            At SR Rent A Car, we consider Indian travelers our valued neighbors. We provide tailored packages,
            special offers, and practical support to make visiting Sri Lanka more convenient, enjoyable, and cost effective.
        </p>
        </div>

        <div class="highlight-grid">
        <div class="highlight-card">
            <img src="assets/images/indian-page/offers.jpg" alt="Special offers for Indian travelers">
            <div class="highlight-card__body">
            <h3>Tailored Packages for India</h3>
            <p>
                Enjoy special offers created specifically for Indian tourists with flexible rental plans and personalized support.
            </p>
            <a href="[[~1]]" class="btn btn-dark">Get My Offer</a>
            </div>
        </div>

        <div class="highlight-card">
            <img src="assets/images/indian-page/permit-assistance.jpg" alt="Driving permit assistance">
            <div class="highlight-card__body">
            <h3>Advance Driving Permit Help</h3>
            <p>
                We arrange assistance for temporary driving permits in advance so your self drive trip can start with less hassle.
            </p>
            <a href="[[~6]]" class="btn btn-dark">Learn About Permit Help</a>
            </div>
        </div>

        <div class="highlight-card">
            <img src="assets/images/indian-page/family-freedom.jpg" alt="Family travel in Sri Lanka">
            <div class="highlight-card__body">
            <h3>Comfort, Freedom, and Support</h3>
            <p>
                Our goal is to help every Indian traveler enjoy Sri Lanka with confidence, flexibility, and fully personalized service.
            </p>
            <a href="[[~6]]" class="btn btn-dark">Explore Services</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" id="self-drive">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-md-6 col-lg-7">
            <span class="tag tag--light"><i class="fas fa-road"></i> Travel Freedom</span>
            <h2>Why Indian Travelers Choose Self Drive Travel</h2>
            <p>
            Self drive travel allows Indian visitors to explore Sri Lanka with flexibility, privacy, and complete control over their plans.
            </p>

            <ul class="shape-list">
            <li><i class="fas fa-location-dot"></i> Full freedom to plan your day</li>
            <li><i class="fas fa-users"></i> Travel privately with family, friends, or as a couple</li>
            <li><i class="fas fa-camera"></i> Stop anywhere to explore or capture scenic moments</li>
            <li><i class="fas fa-bus"></i> Avoid crowded buses or shared tours</li>
            <li><i class="fas fa-face-smile"></i> Enjoy a comfortable and stress free journey</li>
            </ul>

            <p style="margin-top:20px;">
            With our services, Indian travelers receive customized travel support that matches their preferences and ensures a safe, smooth driving experience.
            </p>
        </div>

        <div class="col-md-6 col-lg-5">
            <img src="assets/images/indian-page/self-drive.jpg" alt="Indian tourists enjoying self drive travel in Sri Lanka" class="img-fluid">
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" id="services">
    <div class="container">
        <div class="section-head">
        <span class="tag tag--light"><i class="fas fa-briefcase"></i> Tailor Made Support</span>
        <h2>Tailor Made Services for Indian Travelers</h2>
        <p>
            SR Rent A Car provides practical, flexible, and personalized services focused on helping Indian tourists enjoy a hassle free self drive holiday in Sri Lanka.
        </p>
        </div>

        <div class="info-grid">
        <div class="info-card">
            <span class="tag tag--light"><i class="fas fa-car"></i> What We Provide</span>
            <h3>Services Designed Around Your Travel Needs</h3>

            <ul class="shape-list">
            <li><i class="fas fa-check-circle"></i> Self drive vehicle rental with special offers for Indian travelers</li>
            <li><i class="fas fa-check-circle"></i> Assistance with temporary Sri Lanka driving permits arranged in advance</li>
            <li><i class="fas fa-check-circle"></i> Flexible rental durations from 1 day to several weeks</li>
            <li><i class="fas fa-check-circle"></i> Guidance on safe driving practices, road rules, and travel tips</li>
            <li><i class="fas fa-check-circle"></i> Priority support for Indian customers planning their trips</li>
            </ul>
        </div>

        <div class="info-card">
            <span class="tag tag--light"><i class="fas fa-heart"></i> Our Focus</span>
            <h3>Indian Travelers Are a Priority for Us</h3>
            <p>
            We focus on Indian travelers to ensure your self drive experience is fully supported from the moment you plan your trip until the day you return the vehicle.
            </p>
            <p>
            Whether you are traveling as a couple, with children, with friends, or on a longer holiday route, we help you choose a suitable vehicle and guide you through everything you need before driving in Sri Lanka.
            </p>
            <p>
            Our service is designed to be simple, responsive, cost effective, and comfortable, so you can enjoy the island with confidence.
            </p>

            <div style="margin-top:20px;">
            <a href="[[~6]]" class="btn btn-dark">Talk to Our Team</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" id="permit">
    <div class="container">
        <div class="permit-strip">
        <div class="permit-grid">
            <div>
            <span class="tag"><i class="fas fa-id-card-clip"></i> Driving Permit Assistance</span>
            <h2>Driving Permit Assistance for Indian Tourists</h2>
            <p>
                Indian tourists can legally drive in Sri Lanka with a temporary driving permit. SR Rent A Car provides complete assistance with the process in advance so you can begin your journey with confidence after arrival.
            </p>

            <div class="permit-reqs">
                <div class="permit-req">
                <i class="fas fa-id-card"></i>
                <strong>Valid Indian Driving License</strong>
                </div>
                <div class="permit-req">
                <i class="fas fa-passport"></i>
                <strong>Passport Copy</strong>
                </div>
                <div class="permit-req">
                <i class="fas fa-plane"></i>
                <strong>Tourist Visa</strong>
                </div>
            </div>
            </div>

            <div class="permit-box">
            <h3>How We Help</h3>
            <p>
                Our team assists with the documentation and advance coordination needed so your permit process is easier and more convenient.
            </p>

            <ul>
                <li><i class="fas fa-check-circle"></i> Guidance on required documents before arrival</li>
                <li><i class="fas fa-check-circle"></i> Advance support to avoid last minute confusion</li>
                <li><i class="fas fa-check-circle"></i> Faster start to your self drive travel experience</li>
                <li><i class="fas fa-check-circle"></i> Friendly assistance from our team whenever needed</li>
            </ul>

            <div style="margin-top:22px;">
                <a href="[[~6]]" class="btn btn-primary">Get Permit Help</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" style="padding-top:0;">
    <div class="container">
        <div class="info-grid">
        <div class="info-card">
            <span class="tag tag--light"><i class="fas fa-handshake"></i> Booking Benefits</span>
            <h3>Advantages of Booking Directly with SR Rent A Car</h3>

            <ul class="shape-list">
            <li><i class="fas fa-star"></i> Exclusive offers and packages for Indian visitors</li>
            <li><i class="fas fa-star"></i> Competitive pricing without third party commissions</li>
            <li><i class="fas fa-star"></i> Direct communication for personalized travel planning</li>
            <li><i class="fas fa-star"></i> Reliable support for a safe and smooth self drive experience</li>
            <li><i class="fas fa-star"></i> Guidance tailored to Indian travelers’ needs</li>
            </ul>

            <p style="margin-top:18px;">
            We prioritize Indian travelers and aim to make your trip comfortable, safe, and memorable.
            </p>
        </div>

        <div class="info-card">
            <span class="tag tag--light"><i class="fas fa-route"></i> Driving Tips</span>
            <h3>Self Drive Travel Tips for Indian Tourists</h3>

            <ul class="shape-list">
            <li><i class="fas fa-wallet"></i> Carry your driving permit and identification while driving</li>
            <li><i class="fas fa-gauge-high"></i> Follow local traffic rules and speed limits</li>
            <li><i class="fas fa-map-location-dot"></i> Use GPS or navigation apps for safe and efficient travel</li>
            <li><i class="fas fa-gas-pump"></i> Plan fuel stops and vehicle support for longer trips</li>
            <li><i class="fas fa-phone-volume"></i> Keep emergency contacts and SR Rent A Car support ready</li>
            </ul>

            <p style="margin-top:18px;">
            Our team provides dedicated tips and advice for Indian travelers to ensure a stress free experience throughout Sri Lanka.
            </p>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" id="faq">
    <div class="container">
        <div class="section-head">
        <span class="tag tag--light"><i class="fas fa-circle-question"></i> Frequently Asked Questions</span>
        <h2>FAQs for Indian Travelers</h2>
        <p>
            Answers to the most common questions about self drive car rental in Sri Lanka for Indian tourists.
        </p>
        </div>

        <div class="faq-wrap">
        <details class="faq-item">
            <summary>Can Indian tourists drive in Sri Lanka?</summary>
            <p>Yes. Indian tourists can drive with a temporary driving permit issued locally. SR Rent A Car assists you in obtaining it quickly and easily.</p>
        </details>

        <details class="faq-item">
            <summary>What documents are required for renting a self drive car in Sri Lanka?</summary>
            <p>You need a valid Indian driving license, passport copy, and a tourist visa. Our team guides you through the process for a hassle free experience.</p>
        </details>

        <details class="faq-item">
            <summary>Do you offer any special discounts for Indian travelers?</summary>
            <p>Yes. We provide exclusive offers, packages, and tailor made services specifically for Indian tourists.</p>
        </details>

        <details class="faq-item">
            <summary>Are the vehicles insured?</summary>
            <p>All vehicles are fully insured and regularly maintained to ensure your safety and peace of mind.</p>
        </details>

        <details class="faq-item">
            <summary>Can I rent a car for just a few days?</summary>
            <p>Yes. Rental durations are flexible, ranging from one day to several weeks depending on your travel plans.</p>
        </details>

        <details class="faq-item">
            <summary>What types of vehicles are available for Indian travelers?</summary>
            <p>We provide options suitable for couples, families, and groups including sedans, SUVs, and premium vehicles.</p>
        </details>

        <details class="faq-item">
            <summary>Do you provide support for planning travel routes?</summary>
            <p>Yes. We offer guidance on safe and scenic driving routes, local road rules, and travel tips for Indian visitors.</p>
        </details>

        <details class="faq-item">
            <summary>Is driving in Sri Lanka safe for Indian tourists?</summary>
            <p>Yes. Sri Lanka is safe for tourists and our team provides driving tips, road safety advice, and local traffic guidance to ensure a secure journey.</p>
        </details>

        <details class="faq-item">
            <summary>Can I extend my rental while I am in Sri Lanka?</summary>
            <p>Yes. Rental extensions are possible. Simply contact our team in advance and we will adjust your booking accordingly.</p>
        </details>

        <details class="faq-item">
            <summary>Are there additional charges for Indian traveler support?</summary>
            <p>No. Indian travelers enjoy priority guidance and dedicated support included in all services.</p>
        </details>

        <details class="faq-item">
            <summary>How do I apply for a temporary driving permit?</summary>
            <p>SR Rent A Car provides full assistance with paperwork guidance and advance arrangements to help you get your permit more easily.</p>
        </details>

        <details class="faq-item">
            <summary>How can I book a car and secure my special offer?</summary>
            <p>You can contact us via WhatsApp, email, or our website. Our team will help you choose a vehicle, apply your exclusive Indian traveler offers, and complete your booking quickly.</p>
        </details>
        </div>
    </div>
    </section>

    <section class="section-space" id="book">
    <div class="container">
        <div class="cta-box">
        <span class="tag"><i class="fas fa-phone-volume"></i> Book Your Self Drive Car Today</span>
        <h2>Indian Travelers Are Our Priority</h2>
        <p>
            We are dedicated to making your Sri Lanka trip unforgettable, comfortable, and cost effective.
            Our team will assist you in choosing the right vehicle, handling permit support in advance, and
            providing personalized travel advice so you can focus on enjoying your journey.
        </p>

        <div class="contact-pills">
            <a href="https://wa.me/94777780729" class="contact-pill" target="_blank">
            <i class="fab fa-whatsapp"></i> WhatsApp: +94 77 778 0729
            </a>
            <a href="mailto:info@srilankarentacar.com" class="contact-pill">
            <i class="fas fa-envelope"></i> info@srilankarentacar.com
            </a>
        </div>
        </div>
    </div>
    </section>



<script>
function scrollToPromo() {
  setTimeout(() => {
    const el = document.querySelector(\'.promo50-section\');
    if (el) {
      el.scrollIntoView({ behavior: \'smooth\' });
    }
  }, 300);
}
</script>
</body>
',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 38,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1773397977,
    'editedby' => 1,
    'editedon' => 1774326979,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1773397980,
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




  <style>
    :root{
      --navy:#0b1f3a;
      --navy-2:#132d52;
      --navy-3:#1d3f6f;
      --white:#ffffff;
      --off:#f6f8fc;
      --soft:#edf2f9;
      --text:#5c6a7d;
      --gold:#c79a63;
      --gold-soft:#f1e3d3;
      --border:#dfe6f0;
      --shadow:0 18px 50px rgba(11,31,58,.10);
      --radius-xl:34px;
      --radius-lg:26px;
      --radius-md:20px;
      --container:1200px;
    }
  body {
    font-family: Cambria, Georgia, "Times New Roman", serif !important;
  }

  h1, h2, h3, h4, h5, h6,
  p, a, span, li, strong, small, summary, button, input, textarea, label {
    font-family: Cambria, Georgia, "Times New Roman", serif !important;
  }

    .tag{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:8px 16px;
      border-radius:999px;
      font-size:14px;
      font-weight:800;
      letter-spacing:.08em;
      text-transform:uppercase;
      background:#fff;
      border:1px solid rgba(255,255,255,.14);
      color:black;
    }

    .tag--light{
      background:rgba(11,31,58,.06);
      border:1px solid rgba(11,31,58,.08);
      color:var(--navy);
    }

    .btn{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      gap:10px;
      padding:2px 24px;
      font-weight:800;
      transition:.3s ease;
      border:none;
      cursor:pointer;
    }

    /* .btn-primary{
      background:var(--white);
      color:var(--navy);
      box-shadow:0 12px 30px rgba(0,0,0,.10);
    } */

    /* .btn-primary:hover{
      transform:translateY(-2px);
    } */

    .btn-dark{
      background:var(--navy);
      color:var(--white);
      box-shadow:var(--shadow);
    }

    /* .btn-dark:hover{
      background:var(--navy-2);
      transform:translateY(-2px);
    } */

    .btn-outline{
    background: transparent;
    color: var(--navy);
    border: 1px solid rgba(11,31,58,.18);
    }

    .btn-outline:hover{
    background: rgba(11,31,58,.05);
    transform: translateY(-2px);
    color:black;
    }

    .section-head{
      max-width:760px;
      margin:0 auto 40px;
      text-align:center;
    }

    .section-head h2{
      font-size:clamp(2rem, 3.5vw, 3rem);
      line-height:1.15;
      margin:16px 0 12px;
      font-weight:800;
      color:var(--navy);
    }

    .section-head p{
      color:var(--text);
      font-size:1.02rem;
    }

    /* Header */
    .site-header{
      position:sticky;
      top:0;
      z-index:1000;
      background:rgba(255,255,255,.92);
      backdrop-filter:blur(10px);
      border-bottom:1px solid rgba(11,31,58,.07);
    }

    .nav-wrap{
      min-height:78px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:20px;
    }

    .logo{
      font-size:1.35rem;
      font-weight:800;
      color:var(--navy);
      letter-spacing:.02em;
    }

    .logo span{
      color:var(--gold);
    }

    .nav{
      display:flex;
      align-items:center;
      gap:26px;
      flex-wrap:wrap;
    }

    .nav a{
      color:var(--navy);
      font-weight:700;
      font-size:.95rem;
    }

    .nav a:hover{
      color:var(--navy-3);
    }

    /* Hero */
        .hero{
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(circle at top left, rgba(199,154,99,.10), transparent 24%),
            radial-gradient(circle at bottom right, rgba(11,31,58,.05), transparent 28%),
            linear-gradient(180deg, #ffffff 0%, #f7faff 100%);
        color: var(--navy);
        padding: 40px 0;
        }

        .hero::before,
        .hero::after{
        content: "";
        position: absolute;
        border-radius: 50%;
        z-index: 0;
        }

        .hero::before{
        width: 260px;
        height: 260px;
        top: -80px;
        right: 8%;
        background: rgba(199,154,99,.10);
        filter: blur(10px);
        }

        .hero::after{
        width: 180px;
        height: 180px;
        bottom: 20px;
        left: -40px;
        background: rgba(11,31,58,.05);
        filter: blur(8px);
        }

        .hero-grid{
        display: grid;
        grid-template-columns: 1.06fr .94fr;
        gap: 40px;
        align-items: center;
        position: relative;
        z-index: 1;
        }

        .hero-content h1{
        font-size: clamp(2.4rem, 5vw, 4.6rem);
        line-height: 1.02;
        margin: 18px 0 18px;
        font-weight: 800;
        max-width: 720px;
        color: var(--navy);
        }

        .hero-content p{
        color: var(--text);
        max-width: 680px;
        font-size: 14px;
        margin-bottom: 28px;
        }

        .hero-actions{
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 28px;
        }

        .hero-points{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        gap: 16px;
        max-width: 760px;
        }

        .hero-point{
        background: #ffffff;
        border: 1px solid rgba(11,31,58,.08);
        border-radius: 20px;
        padding: 18px;
        box-shadow: 0 14px 35px rgba(11,31,58,.08);
        }

        .hero-point i{
        color: var(--gold);
        font-size:20px;
        margin-bottom: 10px;
        display: block;
        }

        .hero-point strong{
        display: block;
        font-size: 14px;
        margin-bottom: 4px;
        color: var(--navy);
        }

        .hero-point span{
        display: block;
        color: var(--text);
        font-size: 14px;
        line-height: 1.5;
        }

        .hero-visual{
        position: relative;
        }

        .hero-main-card{
        background: #ffffff;
        border: 1px solid rgba(11,31,58,.08);
        border-radius: 36px;
        padding: 16px;
        box-shadow: 0 24px 60px rgba(11,31,58,.10);
        }

        .hero-main-card img{
        width: 100%;
        height: 620px;
        object-fit: cover;
        border-radius: 28px;
        }

        .floating-card{
        position: absolute;
        background: var(--white);
        color: var(--navy);
        border-radius: 24px;
        padding: 10px 20px;
        box-shadow: 0 18px 40px rgba(11,31,58,.12);
        max-width: 260px;
        border: 1px solid rgba(11,31,58,.06);
        }

        .floating-card small{
        display: block;
        color: var(--gold);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .08em;
        font-size: 14px;
        }

        .floating-card strong{
        display: block;
        font-size: 14px;
        margin-bottom: 6px;
        line-height: 1.35;
        color: var(--navy);
        }

        .floating-card p{
        color: var(--text);
        font-size: 14px;
        line-height: 1.55;
        }

        .floating-card--top{
        top: -18px;
        right: -12px;
        }

        .floating-card--bottom{
        left: -18px;
        bottom: 30px;
        }

      .section-space{
        padding:40px 0;
        background-color:white;
      }

    /* About / direct booking */
        .editorial-grid{
        display:flex;
        align-items:center;
        }

    .panel{
      border-radius:var(--radius-xl);
      overflow:hidden;
    }

    .panel-dark{
      background:var(--navy);
      color:var(--white);
      padding:28px;
    }

    .panel-dark h2,
    .panel-dark h3{
      color:var(--white);
    }

    .panel-dark p{
      color:rgba(255,255,255,.82) !important;
    }

    .panel-image img{
      width:100%;
      height:100%;
      min-height:430px;
      object-fit:cover;
    }

    .panel-content{
      padding:38px;
    }

    .panel-content h2,
    .panel-content h3,
    .panel-dark h2,
    .panel-dark h3{
      font-size:clamp(1.7rem, 2.4vw, 2.4rem);
      line-height:1.18;
      margin:16px 0 14px;
      font-weight:800;
    }

    .panel-content p{
      color:var(--text);
      margin-bottom:14px;
    }

    .shape-list{
      display:grid;
      gap:14px;
      margin-top:20px;
    }

    .shape-list li{
      display:flex;
      align-items:flex-start;
      gap:14px;
      padding:14px 16px;
      border-radius:18px;
      background:var(--soft);
      color:var(--navy);
      font-weight:700;
      line-height:1.55;
    }

    .shape-list li i{
      color:var(--gold);
      margin-top:4px;
      flex-shrink:0;
    }

    .panel-dark .shape-list li{
      background:rgba(255,255,255,.08);
      color:var(--white);
    }

    /* Highlight cards */
    .highlight-grid{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:24px;
    }

    .highlight-card{
      background:var(--white);
      border-radius:28px;
      overflow:hidden;
      box-shadow:var(--shadow);
      transition:.35s ease;
    }

    .highlight-card:hover{
      transform:translateY(-8px);
    }

    .highlight-card img{
      width:100%;
      height:240px;
      object-fit:cover;
    }

    .highlight-card__body{
      padding:26px;
    }

    .highlight-card__body h3{
      font-size:1.35rem;
      margin-bottom:10px;
      line-height:1.25;
    }

    .highlight-card__body p{
      color:var(--text);
      margin-bottom:16px;
    }

    /* Permit strip */
    .permit-strip{
    position: relative;
    overflow: hidden;
    color: var(--white);
    border-radius: 40px;
    padding: 48px;
    box-shadow: var(--shadow);
    background-image: url("assets/images/indian-page/permit-bg.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }

    .permit-strip::before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgb(0 0 0 / 84%);
    z-index: 0;
    }

    .permit-strip > *{
    position: relative;
    z-index: 1;
    }

    .permit-grid{
      display:grid;
      grid-template-columns:1.05fr .95fr;
      gap:34px;
      align-items:center;
    }
    .permit-strip .tag{
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.16);
    color: #fff !important;
    }

    .permit-strip h2,
    .permit-strip h3,
    .permit-strip strong{
    color: #fff;
    }

    .permit-strip p{
    color: rgba(255,255,255,.85) !important;
    }

    .permit-reqs{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:14px;
      margin-top:20px;
    }

    .permit-req{
      background:rgba(255,255,255,.08);
      border:1px solid rgba(255,255,255,.10);
      border-radius:20px;
      padding:18px;
      text-align:center;
    }

    .permit-req i{
      font-size:20px;
      color:#ffd7a8;
      margin-bottom:10px;
    }

    .permit-req strong{
      display:block;
      font-size:.96rem;
      line-height:1.35;
    }

    .permit-box{
      background:rgba(255,255,255,.09);
      border:1px solid rgba(255,255,255,.10);
      border-radius:28px;
      padding:21px;
    }

    .permit-box h3{
      margin-bottom:12px;
      font-size:1.45rem;
    }

    .permit-box ul{
      display:grid;
      gap:12px;
      margin-top:18px;
    }

    .permit-box li{
      display:flex;
      gap:12px;
      align-items:flex-start;
      color:rgba(255,255,255,.86);
    }

    .permit-box li i{
      color:#ffd7a8;
      margin-top:4px;
    }

    /* Two column info blocks */
    .info-grid{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:28px;
    }

    .info-card{
      background:var(--white);
      border-radius:32px;
      padding:34px;
      box-shadow:var(--shadow);
    }

    .info-card h3{
      font-size:1.8rem;
      line-height:1.2;
      margin:16px 0 14px;
    }

    .info-card p{
      color:var(--text);
      margin-bottom:14px;
text-align: justify;
    }

    /* FAQ */
    .faq-wrap{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:18px;
    }

    details.faq-item{
      background:var(--white);
      border-radius:22px;
      padding:20px 22px;
      box-shadow:var(--shadow);
    }

    details.faq-item summary{
      cursor:pointer;
      font-weight:800;
      color:var(--navy);
      list-style:none;
      position:relative;
      padding-right:26px;
    }

    details.faq-item summary::-webkit-details-marker{
      display:none;
    }

    details.faq-item summary::after{
      content:"+";
      position:absolute;
      right:0;
      top:0;
      font-size:1.25rem;
      color:var(--gold);
      font-weight:800;
    }

    details[open].faq-item summary::after{
      content:"–";
    }

    details.faq-item p{
      color:var(--text);
      margin-top:12px;
      padding-top:12px;
      border-top:1px solid var(--border);
    }

    /* CTA */
    .cta-box{
    position:relative;
    overflow:hidden;
    background:rgba(255,255,255,.65);
    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);
    border:3px solid rgb(0 24 57);
    border-radius:40px;
    padding:30px;
    box-shadow:var(--shadow);
    text-align:center;

    }

    /* heading */
    .cta-box h2{
    font-size:clamp(2rem, 3.5vw, 3.2rem);
    line-height:1.1;
    margin:16px auto 14px;
    max-width:820px;
    color:var(--navy);
    }

    /* text */
    .cta-box p{
    max-width:840px;
    margin:0 auto 14px;
    color:var(--text);
    }

    /* contact pills */
    .contact-pills{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:14px;
    margin:26px 0 30px;
    }

    .contact-pill{
    background:#ffffff;
    border:1px solid rgb(11 31 58);
    color:var(--navy);
    padding:14px 18px;
    border-radius:999px;
    font-weight:700;
    box-shadow:0 8px 20px rgba(0,0,0,.06);
    }

    .contact-pill i{
    color:var(--gold);
    margin-right:8px;
    }

        .btn-primary{
    background:var(--navy);
    color:#fff;
    }

    .btn-primary-directly {
        background:#fff;
        color:#000;
    }
    .btn-primary-directly:hover {
        background:#fff;
        color:#000;
    }

    .btn-primary:hover{
    background:#16345d;
    }

    .btn-outline{
    background:transparent;
    border:1px solid rgba(11,31,58,.20);
    color:var(--navy);
    }

    .btn-outline:hover{
    background:rgba(17, 46, 85, 0.05);
    }

    .cta-box::before{
    content:"";
    position:absolute;
    inset:0;
    background:
    radial-gradient(circle at top right, rgba(199,154,99,.12), transparent 35%),
    radial-gradient(circle at bottom left, rgba(11,31,58,.08), transparent 35%);
    z-index:-1;
    }

    /* Responsive */
    @media (max-width: 1100px){
      .hero-grid,
      .editorial-grid,
      .permit-grid,
      .info-grid{
        grid-template-columns:1fr;
      }

      .highlight-grid{
        grid-template-columns:1fr 1fr;
      }

      .hero-main-card img{
        height:520px;
      }

      .floating-card--top{
        right:12px;
      }

      .floating-card--bottom{
        left:12px;
      }
    }

    @media (max-width: 900px){
      .nav{
        display:none;
      }

      .hero-points,
      .permit-reqs,
      .faq-wrap{
        grid-template-columns:1fr;
      }

      .highlight-grid{
        grid-template-columns:1fr;
      }

      .cta-box,
      .permit-strip,
      .panel-content,
      .panel-dark,
      .info-card{
        padding:28px;
      }

      .hero{
        padding-top:70px;
      }

      .hero-main-card img{
        height:420px;
      }

      .floating-card{
        position:static;
        max-width:none;
        margin-top:16px;
      }
    }

    @media (max-width: 600px){
      .section-space{
        padding:72px 0;
      }

      .nav-wrap{
        min-height:70px;
      }

      .hero-content h1{
        font-size:2.2rem;
      }

      .hero-actions{
        flex-direction:column;
        align-items:stretch;
      }

      .btn{
        width:100%;
      }

      .panel-image img{
        min-height:300px;
      }

      .highlight-card img{
        height:210px;
      }

      .cta-box{
        padding:28px 22px;
      }
    }
  </style>
<body>
    <section class="hero-wrap hero-wrap-2" style="background-image: url(\'assets/images/indian-page/indian-bg.jpg\');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Indian Travellers</h1>
                <p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Indian Travellers<i class="ion-ios-arrow-forward"></i></span></p>
            </div>
            </div>
        </div>
    </section>

    <section class="hero">
    <div class="container">
        <div class="hero-grid">
        <div class="hero-content">
            <span class="tag"><i class="fas fa-car-side"></i> Special Page for Indian Travelers</span>
            <h1>Self Drive Car Rental in Sri Lanka for Indian Travelers</h1>
            <p>
            SR Rent A Car proudly welcomes Indian travelers visiting Sri Lanka with reliable self drive vehicles,
            exclusive offers, permit assistance arranged in advance, and dedicated travel support designed to make
            every journey smooth, flexible, and cost effective.
            </p>

            <div class="hero-actions">
            <a href="index.php?id=39" class="btn btn-primary">Book Your Self Drive Car</a>
            <a href="index.php?id=1" class="btn btn-outline">View Special Offers</a>
            </div>

            <div class="hero-points">
            <div class="hero-point">
                <i class="fas fa-percent"></i>
                <strong>Exclusive Offers</strong>
                <span>Special packages created especially for Indian tourists.</span>
            </div>
            <div class="hero-point">
                <i class="fas fa-id-card"></i>
                <strong>Permit Assistance</strong>
                <span>Advance help with temporary Sri Lanka driving permits.</span>
            </div>
            <div class="hero-point">
                <i class="fas fa-headset"></i>
                <strong>Priority Support</strong>
                <span>Fast guidance before arrival and throughout your journey.</span>
            </div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-main-card">
            <img src="assets/images/indian-page/hero.jpg" alt="Indian travelers with rental vehicle in Sri Lanka">
            </div>

            <div class="floating-card floating-card--top">
            <small>Direct Booking Benefit</small>
            <strong>Better pricing without third-party commissions</strong>
            <p>Book directly with SR Rent A Car for more value and personalized support.</p>
            </div>

            <div class="floating-card floating-card--bottom">
            <small>Travel Freedom</small>
            <strong>Explore Sri Lanka your way</strong>
            <p>Travel with privacy, flexibility, and full control of your own schedule.</p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space">
      <div class="container">
          <div class="row editorial-grid">
          <div class="col-md-6 panel panel-image">
              <img src="assets/images/indian-page/about-direct-booking.jpg" alt="Self drive rental experience in Sri Lanka">
          </div>

          <div class="col-md-6 panel panel-dark">
              <span class="tag"><i class="fas fa-star"></i> Why Book Directly</span>
              <h2>Why Book Directly with SR Rent A Car</h2>
              <p>
              Booking directly with SR Rent A Car offers clear advantages for travelers who want better value,
              direct communication, and a more reliable travel experience in Sri Lanka.
              </p>

              <ul class="shape-list">
              <li><i class="fas fa-check-circle"></i> Competitive pricing without third-party commissions</li>
              <li><i class="fas fa-check-circle"></i> Direct communication with the rental provider</li>
              <li><i class="fas fa-check-circle"></i> Flexible travel plans and customized itineraries</li>
              <li><i class="fas fa-check-circle"></i> Reliable self-drive vehicles maintained by professionals</li>
              </ul>

              <div style="margin-top:24px;">
                <a href="https://wa.me/94777780729?text=Hello%20I%20would%20like%20to%20reserve%20a%20car.%20Please%20assist%20me%20with%20availability."
                  class="btn btn-primary-directly"
                  target="_blank">
                  Reserve Directly Today
                </a>              
              </div>
          </div>
          </div>
      </div>
    </section>

    <section class="section-space" id="offers" style="padding-top:0;">
    <div class="container">
        <div class="section-head">
        <span class="tag tag--light"><i class="fas fa-gift"></i> Exclusive Benefits</span>
        <h2>Special Offers for Indian Travelers</h2>
        <p>
            At SR Rent A Car, we consider Indian travelers our valued neighbors. We provide tailored packages,
            special offers, and practical support to make visiting Sri Lanka more convenient, enjoyable, and cost effective.
        </p>
        </div>

        <div class="highlight-grid">
        <div class="highlight-card">
            <img src="assets/images/indian-page/offers.jpg" alt="Special offers for Indian travelers">
            <div class="highlight-card__body">
            <h3>Tailored Packages for India</h3>
            <p>
                Enjoy special offers created specifically for Indian tourists with flexible rental plans and personalized support.
            </p>
            <a href="index.php?id=1" class="btn btn-dark">Get My Offer</a>
            </div>
        </div>

        <div class="highlight-card">
            <img src="assets/images/indian-page/permit-assistance.jpg" alt="Driving permit assistance">
            <div class="highlight-card__body">
            <h3>Advance Driving Permit Help</h3>
            <p>
                We arrange assistance for temporary driving permits in advance so your self drive trip can start with less hassle.
            </p>
            <a href="index.php?id=6" class="btn btn-dark">Learn About Permit Help</a>
            </div>
        </div>

        <div class="highlight-card">
            <img src="assets/images/indian-page/family-freedom.jpg" alt="Family travel in Sri Lanka">
            <div class="highlight-card__body">
            <h3>Comfort, Freedom, and Support</h3>
            <p>
                Our goal is to help every Indian traveler enjoy Sri Lanka with confidence, flexibility, and fully personalized service.
            </p>
            <a href="index.php?id=6" class="btn btn-dark">Explore Services</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" id="self-drive">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-md-6 col-lg-7">
            <span class="tag tag--light"><i class="fas fa-road"></i> Travel Freedom</span>
            <h2>Why Indian Travelers Choose Self Drive Travel</h2>
            <p>
            Self drive travel allows Indian visitors to explore Sri Lanka with flexibility, privacy, and complete control over their plans.
            </p>

            <ul class="shape-list">
            <li><i class="fas fa-location-dot"></i> Full freedom to plan your day</li>
            <li><i class="fas fa-users"></i> Travel privately with family, friends, or as a couple</li>
            <li><i class="fas fa-camera"></i> Stop anywhere to explore or capture scenic moments</li>
            <li><i class="fas fa-bus"></i> Avoid crowded buses or shared tours</li>
            <li><i class="fas fa-face-smile"></i> Enjoy a comfortable and stress free journey</li>
            </ul>

            <p style="margin-top:20px;">
            With our services, Indian travelers receive customized travel support that matches their preferences and ensures a safe, smooth driving experience.
            </p>
        </div>

        <div class="col-md-6 col-lg-5">
            <img src="assets/images/indian-page/self-drive.jpg" alt="Indian tourists enjoying self drive travel in Sri Lanka" class="img-fluid">
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" id="services">
    <div class="container">
        <div class="section-head">
        <span class="tag tag--light"><i class="fas fa-briefcase"></i> Tailor Made Support</span>
        <h2>Tailor Made Services for Indian Travelers</h2>
        <p>
            SR Rent A Car provides practical, flexible, and personalized services focused on helping Indian tourists enjoy a hassle free self drive holiday in Sri Lanka.
        </p>
        </div>

        <div class="info-grid">
        <div class="info-card">
            <span class="tag tag--light"><i class="fas fa-car"></i> What We Provide</span>
            <h3>Services Designed Around Your Travel Needs</h3>

            <ul class="shape-list">
            <li><i class="fas fa-check-circle"></i> Self drive vehicle rental with special offers for Indian travelers</li>
            <li><i class="fas fa-check-circle"></i> Assistance with temporary Sri Lanka driving permits arranged in advance</li>
            <li><i class="fas fa-check-circle"></i> Flexible rental durations from 1 day to several weeks</li>
            <li><i class="fas fa-check-circle"></i> Guidance on safe driving practices, road rules, and travel tips</li>
            <li><i class="fas fa-check-circle"></i> Priority support for Indian customers planning their trips</li>
            </ul>
        </div>

        <div class="info-card">
            <span class="tag tag--light"><i class="fas fa-heart"></i> Our Focus</span>
            <h3>Indian Travelers Are a Priority for Us</h3>
            <p>
            We focus on Indian travelers to ensure your self drive experience is fully supported from the moment you plan your trip until the day you return the vehicle.
            </p>
            <p>
            Whether you are traveling as a couple, with children, with friends, or on a longer holiday route, we help you choose a suitable vehicle and guide you through everything you need before driving in Sri Lanka.
            </p>
            <p>
            Our service is designed to be simple, responsive, cost effective, and comfortable, so you can enjoy the island with confidence.
            </p>

            <div style="margin-top:20px;">
            <a href="index.php?id=6" class="btn btn-dark">Talk to Our Team</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" id="permit">
    <div class="container">
        <div class="permit-strip">
        <div class="permit-grid">
            <div>
            <span class="tag"><i class="fas fa-id-card-clip"></i> Driving Permit Assistance</span>
            <h2>Driving Permit Assistance for Indian Tourists</h2>
            <p>
                Indian tourists can legally drive in Sri Lanka with a temporary driving permit. SR Rent A Car provides complete assistance with the process in advance so you can begin your journey with confidence after arrival.
            </p>

            <div class="permit-reqs">
                <div class="permit-req">
                <i class="fas fa-id-card"></i>
                <strong>Valid Indian Driving License</strong>
                </div>
                <div class="permit-req">
                <i class="fas fa-passport"></i>
                <strong>Passport Copy</strong>
                </div>
                <div class="permit-req">
                <i class="fas fa-plane"></i>
                <strong>Tourist Visa</strong>
                </div>
            </div>
            </div>

            <div class="permit-box">
            <h3>How We Help</h3>
            <p>
                Our team assists with the documentation and advance coordination needed so your permit process is easier and more convenient.
            </p>

            <ul>
                <li><i class="fas fa-check-circle"></i> Guidance on required documents before arrival</li>
                <li><i class="fas fa-check-circle"></i> Advance support to avoid last minute confusion</li>
                <li><i class="fas fa-check-circle"></i> Faster start to your self drive travel experience</li>
                <li><i class="fas fa-check-circle"></i> Friendly assistance from our team whenever needed</li>
            </ul>

            <div style="margin-top:22px;">
                <a href="index.php?id=6" class="btn btn-primary">Get Permit Help</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" style="padding-top:0;">
    <div class="container">
        <div class="info-grid">
        <div class="info-card">
            <span class="tag tag--light"><i class="fas fa-handshake"></i> Booking Benefits</span>
            <h3>Advantages of Booking Directly with SR Rent A Car</h3>

            <ul class="shape-list">
            <li><i class="fas fa-star"></i> Exclusive offers and packages for Indian visitors</li>
            <li><i class="fas fa-star"></i> Competitive pricing without third party commissions</li>
            <li><i class="fas fa-star"></i> Direct communication for personalized travel planning</li>
            <li><i class="fas fa-star"></i> Reliable support for a safe and smooth self drive experience</li>
            <li><i class="fas fa-star"></i> Guidance tailored to Indian travelers’ needs</li>
            </ul>

            <p style="margin-top:18px;">
            We prioritize Indian travelers and aim to make your trip comfortable, safe, and memorable.
            </p>
        </div>

        <div class="info-card">
            <span class="tag tag--light"><i class="fas fa-route"></i> Driving Tips</span>
            <h3>Self Drive Travel Tips for Indian Tourists</h3>

            <ul class="shape-list">
            <li><i class="fas fa-wallet"></i> Carry your driving permit and identification while driving</li>
            <li><i class="fas fa-gauge-high"></i> Follow local traffic rules and speed limits</li>
            <li><i class="fas fa-map-location-dot"></i> Use GPS or navigation apps for safe and efficient travel</li>
            <li><i class="fas fa-gas-pump"></i> Plan fuel stops and vehicle support for longer trips</li>
            <li><i class="fas fa-phone-volume"></i> Keep emergency contacts and SR Rent A Car support ready</li>
            </ul>

            <p style="margin-top:18px;">
            Our team provides dedicated tips and advice for Indian travelers to ensure a stress free experience throughout Sri Lanka.
            </p>
        </div>
        </div>
    </div>
    </section>

    <section class="section-space" id="faq">
    <div class="container">
        <div class="section-head">
        <span class="tag tag--light"><i class="fas fa-circle-question"></i> Frequently Asked Questions</span>
        <h2>FAQs for Indian Travelers</h2>
        <p>
            Answers to the most common questions about self drive car rental in Sri Lanka for Indian tourists.
        </p>
        </div>

        <div class="faq-wrap">
        <details class="faq-item">
            <summary>Can Indian tourists drive in Sri Lanka?</summary>
            <p>Yes. Indian tourists can drive with a temporary driving permit issued locally. SR Rent A Car assists you in obtaining it quickly and easily.</p>
        </details>

        <details class="faq-item">
            <summary>What documents are required for renting a self drive car in Sri Lanka?</summary>
            <p>You need a valid Indian driving license, passport copy, and a tourist visa. Our team guides you through the process for a hassle free experience.</p>
        </details>

        <details class="faq-item">
            <summary>Do you offer any special discounts for Indian travelers?</summary>
            <p>Yes. We provide exclusive offers, packages, and tailor made services specifically for Indian tourists.</p>
        </details>

        <details class="faq-item">
            <summary>Are the vehicles insured?</summary>
            <p>All vehicles are fully insured and regularly maintained to ensure your safety and peace of mind.</p>
        </details>

        <details class="faq-item">
            <summary>Can I rent a car for just a few days?</summary>
            <p>Yes. Rental durations are flexible, ranging from one day to several weeks depending on your travel plans.</p>
        </details>

        <details class="faq-item">
            <summary>What types of vehicles are available for Indian travelers?</summary>
            <p>We provide options suitable for couples, families, and groups including sedans, SUVs, and premium vehicles.</p>
        </details>

        <details class="faq-item">
            <summary>Do you provide support for planning travel routes?</summary>
            <p>Yes. We offer guidance on safe and scenic driving routes, local road rules, and travel tips for Indian visitors.</p>
        </details>

        <details class="faq-item">
            <summary>Is driving in Sri Lanka safe for Indian tourists?</summary>
            <p>Yes. Sri Lanka is safe for tourists and our team provides driving tips, road safety advice, and local traffic guidance to ensure a secure journey.</p>
        </details>

        <details class="faq-item">
            <summary>Can I extend my rental while I am in Sri Lanka?</summary>
            <p>Yes. Rental extensions are possible. Simply contact our team in advance and we will adjust your booking accordingly.</p>
        </details>

        <details class="faq-item">
            <summary>Are there additional charges for Indian traveler support?</summary>
            <p>No. Indian travelers enjoy priority guidance and dedicated support included in all services.</p>
        </details>

        <details class="faq-item">
            <summary>How do I apply for a temporary driving permit?</summary>
            <p>SR Rent A Car provides full assistance with paperwork guidance and advance arrangements to help you get your permit more easily.</p>
        </details>

        <details class="faq-item">
            <summary>How can I book a car and secure my special offer?</summary>
            <p>You can contact us via WhatsApp, email, or our website. Our team will help you choose a vehicle, apply your exclusive Indian traveler offers, and complete your booking quickly.</p>
        </details>
        </div>
    </div>
    </section>

    <section class="section-space" id="book">
    <div class="container">
        <div class="cta-box">
        <span class="tag"><i class="fas fa-phone-volume"></i> Book Your Self Drive Car Today</span>
        <h2>Indian Travelers Are Our Priority</h2>
        <p>
            We are dedicated to making your Sri Lanka trip unforgettable, comfortable, and cost effective.
            Our team will assist you in choosing the right vehicle, handling permit support in advance, and
            providing personalized travel advice so you can focus on enjoying your journey.
        </p>

        <div class="contact-pills">
            <a href="https://wa.me/94777780729" class="contact-pill" target="_blank">
            <i class="fab fa-whatsapp"></i> WhatsApp: +94 77 778 0729
            </a>
            <a href="mailto:info@srilankarentacar.com" class="contact-pill">
            <i class="fas fa-envelope"></i> info@srilankarentacar.com
            </a>
        </div>
        </div>
    </div>
    </section>



<script>
function scrollToPromo() {
  setTimeout(() => {
    const el = document.querySelector(\'.promo50-section\');
    if (el) {
      el.scrollIntoView({ behavior: \'smooth\' });
    }
  }, 300);
}
</script>
</body>

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
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);