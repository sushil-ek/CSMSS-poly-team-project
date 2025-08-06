<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:27:44 GMT -->

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    

    <?php
    include 'common/header-link.php';
    ?>
   
</head>

<body>
<!-- !-- script for the popup form start  -->

    <!-- script for the popup form end  -->
    <!-- sticky btn code start -->
    <!-- <a  href="inquiry-form.php" class=" text-white btn btn-warning  btn-sm rounded-pill position-fixed enquiry-btnn">
        <i class="fas fa-envelope me-2"></i> ENQUIRY
</a > -->
    <!-- sticky btn code end -->
    <!-- popup form code start  -->
    <!-- Popup Form with Overlay -->
    <div id="popupOverlay" class="popup-overlay">
        <div class="enquiry-form">
            <button class="close-btn" onclick="closeForm()">&times;</button>
            <h3>Enquire Now</h3>
            <p class="text-muted">Fields marked with * are mandatory.</p>
            <form action="#" method="POST">
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Full Name *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email Address *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    <input type="tel" class="form-control" placeholder="Phone Number *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-city"></i></span>
                    <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-user-graduate"></i></span>
                    <input type="text" class="form-control" placeholder="Qualification *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-book-open"></i></span>
                    <input type="text" class="form-control" placeholder="Course Interested *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-comment-dots"></i></span>
                    <textarea class="form-control" placeholder="Additional Info (Optional)" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-submit">
                    <i class="fa fa-paper-plane"></i> Submit Enquiry
                </button>
            </form>
        </div>
    </div>
    <!-- popup form code end  -->






    <!-- preloader -->
    <div class="preloader">
        <div class="loader-book">
            <div class="loader-book-page"></div>
            <div class="loader-book-page"></div>
            <div class="loader-book-page"></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <?php
    include 'common/header.php';
    ?>
    <!-- header area end -->


    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->

   <!-- new marque -->


 
    <!-- fixed notes  -->
        <!-- <div class="fixed-text">
            <a href="placement-details.php" class="fixed-top  mid-one text-center text-white bg-warning fw-bold">Placement</a>
        </div>
        <div class="fixed-text">
            <a href="" class="fixed-top mid-two text-center text-white fw-bold">Gathering</a>
        </div>
        <div class=" fixed-text">
            <a href="" class="fixed-top mid-three text-center text-white bg-warning fw-bold ">Alumni</a>
        </div>
        <div class=" fixed-text">
            <a href="" class="fixed-top mid-four text-center text-white fw-bold">Disclouser</a>
        </div>
        <div class="">
            <a href="" class="enq fixed-top ">Enquiry</a>
        </div> -->
         <!-- fixed notes end  -->
          <!-- <div class="fixed-text">
  <a href="placement-details.php" class="mid-one text-center text-white bg-warning fw-bold">Placement</a>
</div>
<div class="fixed-text">
  <a href="" class="mid-two text-center text-white fw-bold">Gathering</a>
</div>
<div class="fixed-text">
  <a href="" class="mid-three text-center text-white bg-warning fw-bold">Alumni</a>
</div>
<div class="fixed-text">
  <a href="" class="mid-four text-center text-white fw-bold">Disclouser</a>
</div>
<div class="fixed-text">
  <a href="" class="enq">Enquiry</a>
</div> -->
<!-- BOOTSTRAP 5 CSS -->

<!-- Your Marquee Section -->




 <!-- main start  -->
    <main class="main">

        <!-- hero slider -->
        <div class="hero-section">
            <div class="hero-slider owl-carousel owl-theme">
                <div class="hero-single slider-img"
                    style="background: url(assets/img/slider/new-slider-1.png); height: 700px">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                        <i class="far fa-book-open-reader"></i>Welcome To CSMSS
                                    </h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Accredited by <span>National Board of Accreditation</span>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        We got Accreditation for Programs of Civil Engineering, Electronics &
                                        Tele-communication Engineering, Mechanical Engineering
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="about.php" class="theme-btn">About More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="contact.php" class="theme-btn theme-btn2">Learn More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single slider-img"
                    style="background: url(assets/img/slider/new-slider-22.png); height: 700px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                        <i class="far fa-book-open-reader"></i>Welcome To CSMSS
                                    </h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Our Winning Cricket Team in <span>Polyfest 2K25</span> Future
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        Proud moments as our cricket team brings glory to CSMSS with their outstanding
                                        performance at Polyfest 2K25."
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="about.php" class="theme-btn">About More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="contact.php" class="theme-btn theme-btn2">Learn More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single slider-img"
                    style="background: url(assets/img/slider/new-slider-3.png) ; height: 700px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                        <i class="far fa-book-open-reader"></i>Welcome To CSMSS
                                    </h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Campus <span>Placement</span>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        Celebrating the achievements of our students, honored by the Hon. Secretary
                                        during the campus placement felicitation ceremony.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="about.php" class="theme-btn">About More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="contact.php" class="theme-btn theme-btn2">Learn More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero-single slider-img"
                    style="background: url(assets/img/slider/new-slider-4.png) ; height: 700px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                        <i class="far fa-book-open-reader"></i>Welcome To CSMSS
                                    </h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        BasketBall <span>Court</span>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        A glimpse of CSMSS campus life — where students grow, play, and thrive on and
                                        off the court Polyfest 2K25 Future
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="about.php" class="theme-btn">About More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="contact.php" class="theme-btn theme-btn2">Learn More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- hero slider end -->


        <!-- feature area -->
        <div class="feature-area fa-negative">
            <div class="col-xl-9 ms-auto">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">01</span>
                                <div class="feature-icon">
                                    <img src="assets/img/icon/teacher.svg" alt="">
                                    <!-- <img src="assets/img/icon/scholarship.svg" alt=""> -->
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Experienced Faculty</h4>
                                    <p>Dedicated lecturers guiding students with practical and theoretical knowledge.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">02</span>
                                <div class="feature-icon">
                                    <img src="assets/img/icon/scholarship.svg" alt="">
                                    <!-- <img src="assets/img/icon/teacher.svg" alt=""> -->
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Modern Infrastructure </h4>
                                    <p>Well-equipped labs, libraries, sports grounds, and digital classrooms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">03</span>
                                <div class="feature-icon">
                                    <img src="assets/img/icon/library.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Book Library Facility</h4>
                                    <p>Our library offers a range of books and resources to support student's journey.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">04</span>
                                <div class="feature-icon">
                                    <img src="assets/img/icon/money.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Campus Placements</h4>
                                    <p>Helping students launch their careers through strong industry connections.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- about area -->
        <!-- <div class="about-area py-120">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <img class="img-1" src="assets/img/about/01.jpg" alt="">
                                        <div class="about-experience mt-4">
                                            <div class="about-experience-icon">
                                                <img src="assets/img/icon/exchange-idea.svg" alt="">
                                            </div>
                                            <b class="text-start">30 Years Of <br> Quality Service</b>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-2" src="assets/img/about/02.jpg" alt="">
                                        <img class="img-3 mt-4" src="assets/img/about/03.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> About Us</span>
                                <h2 class="site-title">
                                    Our Edukation System <span>Inspires</span> You More.
                                </h2>
                            </div>
                            <p class="about-text">
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected humour randomised words which don't look even
                                slightly believable. If you are going to use passage.
                            </p>
                            <div class="about-content">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="about-item">
                                            <div class="about-item-icon">
                                                <img src="assets/img/icon/open-book.svg" alt="">
                                            </div>
                                            <div class="about-item-content">
                                                <h5>Edukation Services</h5>
                                                <p>It is a long established fact that reader will to using content.</p>
                                            </div>
                                        </div>
                                        <div class="about-item">
                                            <div class="about-item-icon">
                                                <img src="assets/img/icon/global-education.svg" alt="">
                                            </div>
                                            <div class="about-item-content">
                                                <h5>International Hubs</h5>
                                                <p>It is a long established fact that reader will to using content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="about-quote">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                content of
                                                a page when looking at its reader for the long words layout.</p>
                                            <i class="far fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-bottom">
                                <a href="about.php" class="theme-btn">Discover More<i
                                        class="fas fa-arrow-right-long"></i></a>
                                <div class="about-phone">
                                    <div class="icon"><i class="fal fa-headset"></i></div>
                                    <div class="number">
                                        <span>Call Now</span>
                                        <h6><a href="tel:+21236547898">+2 123 654 7898</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- about area end -->

        <!-- about area -->
        <!-- about area -->
        <!-- about area -->
        <section id="about">
            <div class="about-area py-120">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                                <div class="about-img">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <!-- first image  -->
                                            <img class="img-1" src="assets/img/about/img_1.png" alt="">
                                            <div class="about-experience mt-4">
                                                <!-- second image -->
                                                <div class="about-experience-icon">
                                                    <img src="assets/img/icon/exchange-idea.svg" alt="">
                                                </div>
                                                <b class="text-start">15+ Years Of <br> Quality Service</b>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6"> -->
                                            <!-- third image  -->
                                            <!-- <img class="img-2" src="assets/img/about/img_2.png" alt=""> -->
                                            <!-- fourth image -->
                                            <!-- <img class="img-3 mt-4" src="assets/img/about/stu_img_2.png" alt="">
                                        </div> -->
                                        <div class="col-md-6">
  <!-- third image -->
  <img class="img-2 d-none d-md-block" src="assets/img/about/img_2.png" alt="">
  <!-- fourth image -->
  <img class="img-3 mt-4 d-none d-md-block" src="assets/img/about/stu_img_2.png" alt="">
</div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                                <div class="site-heading mb-3">
                                    <!-- header -->
                                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> About
                                        Us</span>
                                    <h2 class="site-title">
                                        CSMSS college of <span>Polytechnic</span>
                                    </h2>
                                </div>
                                <p class="about-text">
                                    Established in 2009, CSMSS Polytechnic is a top technical institute in Maharashtra.
                                    It excels in academics, infrastructure, and technical growth.
                                    The college is known for quality education and innovation.</p>
                                <div class="about-content">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="about-item">
                                                <div class="about-item-icon">
                                                    <img src="assets/img/icon/open-book.svg" alt="">
                                                </div>
                                                <!-- featueres  -->
                                                <div class="about-item-content">
                                                    <h5>Education Services</h5>
                                                    <p>15+ years of academic excellence with top MSBTE grades and
                                                        qualified faculty.</p>
                                                </div>
                                            </div>
                                            <div class="about-item">
                                                <div class="about-item-icon">
                                                    <img src="assets/img/icon/global-education.svg" alt="">
                                                </div>
                                                <div class="about-item-content">
                                                    <h5>Tech-driven </h5>
                                                    <p>Strong industry tie-ups, modern labs, and global exposure through
                                                        hub institute model</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <!-- quote -->
                                            <div class="about-quote">
                                                <p>"Empowering minds through excellence in education, innovation,
                                                    and industry-ready infrastructure — shaping futures with every
                                                    step."</p>
                                                <i class="far fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-bottom">
                                    <!-- button  -->
                                    <a href="about.php" class="theme-btn">Discover More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                    <div class="about-phone">
                                        <div class="icon"><i class="fal fa-headset"></i></div>
                                        <div class="number">
                                            <span>Call Now</span>
                                            <h6><a href="tel:+21236547898">+0240-2646405</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->
        <!-- event area -->
        <div class="event-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Events</span>
                            <h2 class="site-title">Our Upcoming <span>Events</span></h2>
                            <p>"Stay tuned for exciting upcoming events that blend learning, innovation, and
                                celebration. Join us as we create experiences that inspire, engage, and empower our
                                students."</p>
                        </div>
                    </div>
                </div>
                <div class="event-slider owl-carousel owl-theme">
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> Kanchanwadi, Chhatrapati Sambhajinagar</span>
                        </div>
                        <div class="event-img">
                            <img src="assets\img\event\event-one.png" alt="">
                        </div>
                        <div class="event-info">
                            <!-- <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>7 May 2025</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div> -->
                            <h4 class="event-title mt-3"><a href="event-single.php">Blood Donation Camp</a></h4>
                            <p>the Occasion of the Birthday of Hon. Secretary Padmakarji Mulay Sir.</p>
                            <div class="event-btn">
                                <a href="event-single.php" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> Kanchanwadi, Chhatrapati Sambhajinagar</span>
                        </div>
                        <div class="event-img">
                            <img src="assets\img\event\event-two.png" alt="">
                        </div>
                        <div class="event-info">
                            <!-- <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>27 Dec 2024</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div> -->
                            <h4 class="event-title mt-3"><a href="event-single.php">District Level Science
                                    Exhibition</a></h4>
                            <p>It brings together young innovators to showcase their creative scientific ideas.</p>
                            <div class="event-btn">
                                <a href="event-single.php" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> Kanchanwadi, Chhatrapati Sambhajinagar</span>
                        </div>
                        <div class="event-img">
                            <img src="assets\img\event\event-three.png" alt="">
                        </div>
                        <div class="event-info">
                            <!-- <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>5 Mar 2024</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div> -->
                            <h4 class="event-title mt-3"><a href="event-single.php">State Level Technical Event 2k24</a></h4>
                            <p>"State Level Technical Event 2K24 invites bright minds to compete and learn"</p>
                            <div class="event-btn">
                                <a href="event-single.php" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> Kanchanwadi, Chhatrapati Sambhajinagar</span>
                        </div>
                        <div class="event-img">
                            <img src="assets\img\event\event-four.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <!-- <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i> 9 Sep 2024</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div> -->
                            <h4 class="event-title mt-3"><a href="event-single.php">First year induction program </a></h4>
                            <p>Welcoming new students with guidence ,motivation,and a glimpse into campus life.</p>
                            <div class="event-btn">
                                <a href="event-single.php" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- event area end -->


        <!-- counter area -->
        <!-- <div class="counter-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/course.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                                <h6 class="title">+ Total Cources </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/graduation.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="1900" data-speed="3000">1900</span>
                                <h6 class="title">+ Our Students</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/teacher-2.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="750" data-speed="3000">750</span>
                                <h6 class="title">+ Skilled Lecturers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/award.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="30" data-speed="3000">30</span>
                                <h6 class="title">+ Win Awards</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- counter area end -->

        <!-- counter section -->

        <!-- <div class="counter-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <i class="fa-thin fa-graduation-cap"></i>
                    </div>
                            <div>
                                <span class="counter" data-count="+" data-to="194" data-speed="3000">194</span>
                                <h6 class="title">+Placement </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/graduation.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="6" data-speed="3000">6</span>
                                <h6 class="title">+ Our Course</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <i class="fa-thin fa-users"></i>
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="480" data-speed="3000">480</span>
                                <h6 class="title">+ No.of Student</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                            <img src="assets/img/icon/teacher-2.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="59" data-speed="3000">59</span>
                                <h6 class="title">+ No.Of Teachers</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> -->
        <!-- counter section end -->
        <!-- counter section -->
  <!-- counter section -->
         <section id="counter ">
        <div class="counter-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="counter-box">
                            <div class="icon">
                                <i class="fa-thin fa-graduation-cap"></i>
                    </div>
                            <div>
                                <span class="counter" data-count="+" data-to="1864" data-speed="3000">1864</span>
                                <h6 class="title">+Placement </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/graduation.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="6" data-speed="3000">6</span>
                                <h6 class="title">+ Our Course</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-box">
                            <div class="icon">
                                <i class="fa-thin fa-users"></i>
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="6720" data-speed="3000">6720</span>
                                <h6 class="title">+ No.of Student</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-box">
                            <div class="icon">
                            <img src="assets/img/icon/teacher-2.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="59" data-speed="3000">59</span>
                                <h6 class="title">+ No.Of Teachers</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- counter section end -->
        <!-- counter section end -->

        <!-- choose-area -->
        <div class="choose-area pt-80 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                            <div class="choose-content-info">
                                <div class="site-heading mb-0">
                                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Why Choose
                                        Us</span>
                                    <h2 class="site-title text-white mb-10">Shaping Futures with Quality
                                        <span>Education</span>
                                    </h2>
                                    <p class="text-white">
                                        At our college, we are committed to delivering quality education through
                                        experienced faculty, a career-oriented curriculum, and modern infrastructure.
                                    </p>
                                </div>
                                <div class="choose-content-wrap">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/teacher-2.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Academic <br> Excellence</h4>
                                                    <p>Expert teachers,updated syllabus,top results.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/course-material.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Placement <br> Support</h4>
                                                    <p>Industry links,training,& campus drives.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/online-course.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Student-Centric Environment</h4>
                                                    <p>Safe,inclusive, and supportive campus life.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/money.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Scholarships & <br>Aid</h4>
                                                    <p>Support for merit and need.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                            <img src="assets\img\choose\csmss1.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choose-area end -->
        <!-- gallery-area -->
        <div class="gallery-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Gallery</span>
                            <h2 class="site-title">Latest update of <span>Gallery</span></h2>
                            <p>The College of Polytechnic Gallery supports artistic exploration and education through diverse exhibitions and community engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="row popup-gallery gallery-row">
                    <div class="col-md-4 wow fadeInUp p-2" data-wow-delay=".25s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets\img\gallery\welcome.jpeg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets\img\gallery\welcome.jpeg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets\img\gallery\gallery_07.jpeg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets\img\gallery\gallery_07.jpeg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp p-2" data-wow-delay=".50s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets\img\gallery\gallery_4.jpg " alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets\img\gallery\gallery_4.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets\img\gallery\gallery_06.jpeg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets\img\gallery\gallery_06.jpeg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp p-2" data-wow-delay=".75s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets\img\gallery\gallery_0.jpeg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets\img\gallery\gallery_0.jpeg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets\img\gallery\gallery_05.jpeg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets\img\gallery\gallery_05.jpeg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery-area end -->

        <!-- cta-area -->
        <div class="cta-area">
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-5 ms-lg-auto">
                            <div class="cta-content">
                                <h1>College of Polytechnic</h1>
                                <p>CSMSS College of Polytechnic, established in 2009, is a leading technical education
                                    institute located in Chhatrapati Sambhajinagar, Maharashtra. It is affiliated with
                                    the Maharashtra State Board of Technical Education (MSBTE) and is managed by the
                                    Chhatrapati Shahu Maharaj Shikshan Sanstha (CSMSS).</p>
                                <div class="cta-btn">
                                    <a href="application-form.php" class="theme-btn">Apply Now<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area end -->
        <!-- blog area -->
        <div class="blog-area py-120">
            <div class="container">
                <!-- TITLE SECTION  -->
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i>Latest News</span>
                            <h2 class="site-title">Latest News & <span>Blog</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <!-- CARD SECTION  -->
                <div class="row">
                    <!-- CARD ONE  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-date"><i class="fal fa-calendar-alt"></i> June 18, 2024</div>
                            <div class="blog-item-img">
                                <img src="assets\img\blog\new1.jpg" class="w-100" alt="Thumb" style="height:250px;width:320px">
                            </div>
                            <div class="blog-item-info">
                                <hr>
                                <h4 class="blog-title">
                                    <a href="blog-single.php">
                                        <a href="blog-single.php">Instructions to follow Institute Level Admission Round
                                            2023-24</a></a>
                                </h4>
                                <a class="theme-btn" href="blog-single.php">Read More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- CARD TWO  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="blog-date"><i class="fal fa-calendar-alt"></i> June 18, 2024</div>
                            <div class="blog-item-img">
                                <img src="assets\img\blog\news2.jpg" class="w-100" alt="Thumb" style="height:250px;width:320px">
                            </div>
                            <div class="blog-item-info">
                                <hr>
                                <h4 class="blog-title">
                                    <a href="blog-single.php">Arrangement of Special vaccination drive against covid</a>
                                </h4>
                                <a class="theme-btn" href="blog-single.php">Read More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- CARD THREE  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="blog-date"><i class="fal fa-calendar-alt"></i> June 18, 2024</div>
                            <div class="blog-item-img">
                                <img src="assets\img\blog\news3.jpg" class="w-100" alt="Thumb" style="height:250px;width:300px">
                            </div>
                            <div class="blog-item-info">
                                <hr>
                                <h4 class="blog-title">
                                    <a href="blog-single.php">online student grievance notice and redressal
                                        mechanism</a>
                                </h4>
                                <a class="theme-btn" href="blog-single.php">Read More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->

        <!-- testimonial area -->
         <section id="test-area">
        <div class="testimonial-area ts-bg pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Testimonials</span>
                            <h2 class="site-title text-white">What Our Students <span>Say's</span></h2>
                            <p class="text-white">Our students share their honest experiences to help you understand
                                what life is like at CSMSS College of Polytechnic.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p class="course-text-one  w-100">
                                Good teaching staff Labs are well-equipped and teachers are
                                supportive.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/img1.jpeg" alt="" class="test-one fs-3 " style="width:50px; height: 50px">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Amruta Rajput</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote ">
                            <p class="course-text-one  w-100">
                                Decent classrooms,air-free,and good library. Hostel are fine & average 
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets\img\testimonial\imgg.jpeg" alt="" class="test-two" style="width:50px; height: 50px">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Shraddha Gire</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p class="course-text-one  w-100">
                                Basic campus placements for Better opportunities exist with selfeffort.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/img2.jpeg" alt="" class="test-three" style="width:50px; height: 50px">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Anuj Shimpne</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p class="course-text-one w-100">
                                The experience of college is good, college is nice and well
                                developed
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/img4.jpeg" alt="" class="test-four" style="width:50px; height: 50px">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Tanishka Jagtap</h5>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p class="course-text-one  w-100">
                                Some complaints about strict rules,and lack of student-friendly
                                policies. </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/img3.jpeg" alt="" class="test-five" style="width:50px; height: 50px">
                            </div>
                            <div class="testimonial-author-info">
                                <h4 class="">Viveek <span class="sir-name"> Kolte </span></h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- testimonial area end -->

        <!-- course-area -->
     <section id="course">
        <div class="course-area py-120">
            <div class="container">
                <div class="row flex-nowrap overflow-auto course-scroll">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <!-- headers -->
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Courses</span>
                            <h2 class="site-title">Let's Check Our <span>Courses</span></h2>
                            <p>To provide value based technical education so as to meet the need's of industry and society</p>
                        </div>
                    </div>
                </div>
                <div class="row flex-nowrap overflow-auto course-scroll">
                    <!-- card 1 -->
                    <div class="col-auto">
                        <div class="course-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="course-img">
                                <span class="course-tag"><i class="far fa-bookmark"></i> CE</span>
                                <img src="assets/img/course/CE.jpg" alt="" style="height:250px;" class="w-100" >
                                <a href="course-single.php" class="btn"><i class="far fa-link"></i></a>
                            </div>
                            <div class="course-content">
                                <h4 class="course-title mt-4">
                                    <a href="course-single.php">Civil Engineering</a>
                                </h4>
                                <p class="course-text-one">
                                     The Civil Engineering Department, established in 2009, offers a full-time diploma with skilled faculty, well-equipped labs, and outstanding student performance.</p>
                                <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-users"></i>60 Seats</span>
                                        <span><i class="far fa-clock"></i>03 Duration</span>
                                    </div>
                                    <!-- <span class="course-price">$750</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 2 -->
                    <div class="col-auto">
                        <div class="course-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="course-img">
                                <span class="course-tag"><i class="far fa-bookmark"></i> EE</span>
                                <img src="assets/img/course/EE.jpg" alt="" style="height:250px;" class="w-100"  >
                                <a href="course-single.php" class="btn"><i class="far fa-link"></i></a>
                            </div>
                            <div class="course-content">
                                <h4 class="course-title mt-4">
                                    <a href="course-single.php">Electrical Engineering</a>
                                </h4>
                                <p class="course-text-one">
                                   The Electrical Engineering Department, estd. in 2010, offers diverse career opportunities in power, electronics, and communication through comprehensive technical education.
                                </p>
                                <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-users"></i>60 Seats</span>
                                        <span><i class="far fa-clock"></i>03 Duration</span>
                                    </div>
                                    <!-- <span class="course-price">$750</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 3 -->
                    <div class="col-auto">
                        <div class="course-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="course-img">
                                <span class="course-tag"><i class="far fa-bookmark"></i> ME</span>
                                <img src="assets/img/course/me.png" alt="" style="height:250px;" class="w-100"  >
                                <a href="course-single.php" class="btn"><i class="far fa-link"></i></a>
                            </div>
                            <div class="course-content">
                                <h4 class="course-title mt-4">
                                    <a href="course-single.php">Mechanical Engineering</a>
                                </h4>
                                <p class="course-text-one">
                                The Mechanical Engineering Department, estd. 2009, offers  diverse career opportunities in industries like aerospace, robotics, and manufacturing. <span class="d-md-block d-lg-none"> & contributing to India’s tech-driven economy. </span>
                                </p>
                                <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-users"></i>60 Seats</span>
                                        <span><i class="far fa-clock"></i>03 Duration</span>
                                    </div>
                                    <!-- <span class="course-price">$750</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 4 -->
                    <div class="col-auto">
                        <div class="course-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="course-img">
                                <span class="course-tag"><i class="far fa-bookmark"></i> EJ</span>
                                <img src="assets/img/course/EJ.jpg" alt="" style="height:250px;" class="w-100"  >
                                <a href="course-single.php" class="btn"><i class="far fa-link"></i></a>
                            </div>
                            <div class="course-content">
                                <h4 class="course-title mt-4">
                                    <a href="course-single.php">Electronics & Telecom </a>
                                </h4>
                                <p class="course-text-one">
                                 The Electronics & Telecommunication Engineering Department, estd. 2009, equips students for careers in advanced communication, embedded systems, and modern electronic technologies & vbla vflashv</p>
                                <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-users"></i>60 Seats</span>
                                        <span><i class="far fa-clock"></i>03 Duration</span>
                                    </div>
                                    <!-- <span class="course-price">$750</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 5 -->
                    <div class="col-auto">
                        <div class="course-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="course-img">
                                <span class="course-tag"><i class="far fa-bookmark"></i> CO</span>
                                <img src="assets/img/course/co.png" alt="" style="height:250px;" class="w-100" >
                                <a href="course-single.php" class="btn"><i class="far fa-link"></i></a>
                            </div>
                            <div class="course-content">
                                <h4 class="course-title mt-4">
                                    <a href="course-single.php">Computer Engineering</a>
                                </h4>
                                <p class="course-text-one">
                                  The Computer Engineering Department, estd. 2009, equips students with skills in software design and development, offering vast career opportunities in global IT industries<span class="d-md-none d-lg-block"> & contributing to India’s tech-driven economy. </span></p>
                                <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-users"></i>180 Seats</span>
                                        <span><i class="far fa-clock"></i>03 Duration</span>
                                    </div>
                                    <!-- <span class="course-price">$750</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 6 -->
                    <div class="col-auto">
                        <div class="course-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="course-img">
                                <span class="course-tag"><i class="far fa-bookmark"></i> AI & ML</span>
                                <img src="assets/img/course/AIML.jpg" alt="" style="height:250px;" class="w-100" >
                                <a href="course-single.php" class="btn"><i class="far fa-link"></i></a>
                            </div>
                            <div class="course-content">
                                <h4 class="course-title mt-4">
                                    <a href="course-single.php">Artificial Intelligence  </a>
                                </h4>
                                <p class="course-text-one">
                                    The AI & ML  department, estd. 2022–23, aims to provide quality education, foster innovation, and prepare students for industry roles through strong academics, teamwork, and ethical values.  </p>
                                <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-users"></i>60 Seats</span>
                                        <span><i class="far fa-clock"></i>03 Duration</span>
                                    </div>
                                    <!-- <span class="course-price">$750</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
        <!-- course-area -->
        <!-- course-area -->

        <!-- video-area -->
        <!-- <div class="video-area">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Latest Video</span>
                            <h2 class="site-title">
                                Let's Check Our <span>Latest</span> Video
                            </h2>
                        </div>
                        <p class="about-text">
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour look even slightly believable.
                        </p>
                        <a href="about.php" class="theme-btn mt-30">Learn More<i class="fas fa-arrow-right-long"></i></a>
                    </div>
                    <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
                        <div class="video-content" style="background-image: url(assets/img/video/01.jpg);">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="video-wrapper">
                                        <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- video-area end -->
        <!-- latest video section start -->
        <section id="latest-videos">
            <!-- video-area -->
            <div class="video-area">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Latest
                                    Video</span>
                                <h2 class="site-title">
                                    Let's Check Our <span>Latest</span> Video
                                </h2>
                            </div>
                            <p class="about-text">
                                <!-- There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour look even slightly believable. -->
                                Explore the latest insights and updates through our featured videos.
                                Watch now to stay informed and inspired by our vibrant campus life.
                            </p>
                            <a href="about.php" class="theme-btn mt-30">Learn More<i
                                    class="fas fa-arrow-right-long"></i></a>
                        </div>
                        <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
                            <div class="video-content" style="background-image: url(assets/img/video/clg-img-1.png);">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="video-wrapper">
                                            <a class="play-btn popup-youtube"
                                                href="https://www.youtube.com/watch?v=INoRVe3tspM">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest video section end -->
        <!-- video-area end -->


        <!-- team-area -->
        <!-- <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Teachers</span>
                            <h2 class="site-title">Meet With Our <span>Teachers</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img src="assets/img/team/01.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="teacher-single.php">Angela T. Vigil</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="team-img">
                                <img src="assets/img/team/02.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="teacher-single.php">Frank A. Mitchell</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="team-img">
                                <img src="assets/img/team/03.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="teacher-single.php">Susan D. Lunsford</a></h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay="1s">
                            <div class="team-img">
                                <img src="assets/img/team/04.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="teacher-single.php">Dennis A. Pruitt</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- team-area end -->
        <!-- team-area -->
        <!--member section-->
        <!-- team-area -->
        <!--member section-->
       <!--member section-->
       <section id="member">
    <div class="team-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">
                            <i class="far fa-book-open-reader"></i> Our Members
                        </span>
                        <h2 class="site-title">Meet With Our <span>Members</span></h2>
                        <p>Focus on highlighting the sense of community, shared goals, and opportunities for
                            growth within the institution.</p>
                    </div>
                </div>
            </div>
            <!--scrolling-->
             <div class="testimonial-slider d-lg-none  owl-carousel owl-theme">
                    <!-- one Member -->
                        <div class="team-item ">
                        <div class="team-img">
                            <img src="assets/img/members/csmss1 (1).jpg" alt="thumb" class="w-100">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Mr. Ranjeet P. Mulay</a></h5>
                                <span>President</span>
                            </div>
                        </div>
                    </div>
                <!-- Two Member -->
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/members/csmss2.jpg" alt="thumb" class="w-100">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Mr. Padmakar H. Mulay</a></h5>
                                <span>Secretary</span>
                            </div>
                        </div>
                    </div>
              <!-- Third Member -->
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/members/csmss3.jpg" alt="thumb" class="w-100">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Dr. Shrikant G. Deshmukh</a></h5>
                                <span>Administrative Officer</span>
                            </div>
                        </div>
                    </div>
                <!-- Fourth Member -->
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/members/csmss4principal.jpeg" alt="thumb" class="w-100">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Dr. Shashikant R. Dikle</a></h5>
                                <span>Principal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--scrolling-->
            <!-- Single Row with Mobile Horizontal Scroll -->
            <div class="row flex-nowrap overflow-auto d-flex d-lg-flex d-md-none d-none d-lg-block">
                <!-- First Member -->
                <div class="col-12   col-md-4 col-lg-3">
                    <div class="team-item ">
                        <div class="team-img">
                            <img src="assets/img/members/csmss1 (1).jpg" alt="thumb" class="w-100">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Mr. Ranjeet P. Mulay</a></h5>
                                <span>President</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Member -->
                <div class=" col-12 col-md-4 col-lg-3">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/members/csmss2.jpg" alt="thumb" class="w-100">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Mr. Padmakar H. Mulay</a></h5>
                                <span>Secretary</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Member -->
                <div class="col-12  col-md-4 col-lg-3">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/members/csmss3.jpg" alt="thumb" class="w-100">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Dr. Shrikant G. Deshmukh</a></h5>
                                <span>Administrative Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fourth Member -->
                <div class="col-12  col-md-4 col-lg-3">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/members/csmss4principal.jpeg" alt="thumb" class="w-100">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Dr. Shashikant R. Dikle</a></h5>
                                <span>Principal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- members section end  -->
        <!-- choose-area -->
        <!-- <div class="choose-area pt-80 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                            <div class="choose-content-info">
                                <div class="site-heading mb-0">
                                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Why Choose Us</span>
                                    <h2 class="site-title text-white mb-10">We Are Expert & <span>Do Our Best</span> For Your Goal</h2>
                                    <p class="text-white">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when many desktop and web page editors looking at its
                                        layout.
                                    </p>
                                </div>
                                <div class="choose-content-wrap">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/teacher-2.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Expert Teachers</h4>
                                                    <p>There are many variation of the suffered.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/course-material.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Courses Material</h4>
                                                    <p>There are many variation of the suffered.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/online-course.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Online Courses</h4>
                                                    <p>There are many variation of the suffered.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/money.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Affordable Price</h4>
                                                    <p>There are many variation of the suffered.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                            <img src="assets/img/choose/01.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- choose-area end -->


        <!-- gallery-area -->
        <!-- <div class="gallery-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Gallery</span>
                            <h2 class="site-title">Our Photo <span>Gallery</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row popup-gallery">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/01.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets/img/gallery/01.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/02.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets/img/gallery/02.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".50s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/03.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets/img/gallery/03.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/04.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets/img/gallery/04.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".75s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/05.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets/img/gallery/05.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/06.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets/img/gallery/06.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- gallery-area end -->
        <!-- gallery-area -->



        <!-- cta-area -->
        <!-- <div class="cta-area">
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-5 ms-lg-auto">
                            <div class="cta-content">
                                <h1>Our 20% Offer Running - Join Today For Your Course</h1>
                                <p>There are many variations of passages available but the majority have suffered
                                    alteration in some form by injected humour randomised words which don't look even
                                    slightly believable.</p>
                                <div class="cta-btn">
                                    <a href="application-form.php" class="theme-btn">Apply Now<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- cta-area end -->


        <!-- event area -->
        <!-- <div class="event-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Events</span>
                            <h2 class="site-title">Our Upcoming <span>Events</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="event-slider owl-carousel owl-theme">
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> 25/B Milford Road, New York</span>
                        </div>
                        <div class="event-img">
                            <img src="assets/img/event/01.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2024</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div>
                            <h4 class="event-title"><a href="event-single.php">High School Program 2024</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="event-btn">
                                <a href="event-single.php" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> 25/B Milford Road, New York</span>
                        </div>
                        <div class="event-img">
                            <img src="assets/img/event/02.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2024</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div>
                            <h4 class="event-title"><a href="event-single.php">High School Program 2024</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="event-btn">
                                <a href="event-single.php" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> 25/B Milford Road, New York</span>
                        </div>
                        <div class="event-img">
                            <img src="assets/img/event/03.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2024</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div>
                            <h4 class="event-title"><a href="event-single.php">High School Program 2024</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="event-btn">
                                <a href="event-single.php" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> 25/B Milford Road, New York</span>
                        </div>
                        <div class="event-img">
                            <img src="assets/img/event/04.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2024</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div>
                            <h4 class="event-title"><a href="event-single.php">High School Program 2024</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="event-btn">
                                <a href="event-single.php" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- event area end -->




        <!-- enroll area-->
        <!-- <div class="enroll-area pt-80 pb-80">
            <div class="container">
                <div class="col-lg-12">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="enroll-left wow fadeInLeft" data-wow-delay=".25s">
                                <div class="enroll-form">
                                    <div class="enroll-form-header">
                                        <h3>Start Your Enrollment</h3>
                                        <p>We are variations of passages the have suffered.</p>
                                    </div>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-select" name="service">
                                                <option value="">Choose Course</option>
                                                <option value="1">Art And Design</option>
                                                <option value="2">Acting And Drama</option>
                                                <option value="3">Accounting And Finance</option>
                                                <option value="4">Biology And Conservation</option>
                                                <option value="5">Science And Engineering</option>
                                                <option value="6">Health Administration</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Type Message"
                                                rows="4"></textarea>
                                        </div>
                                        <button class="theme-btn">Enroll Now<i class="fas fa-arrow-right-long"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="enroll-right wow fadeInUp" data-wow-delay=".25s">
                                <div class="skill-content">
                                    <div class="site-heading mb-3">
                                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Skills</span>
                                        <h2 class="site-title text-white">
                                            Explore Your <span>Creativity And Talent</span> With Us
                                        </h2>
                                    </div>
                                    <p class="text-white">
                                        There are many variations of passages available but the majority have suffered
                                        alteration in some form by injected humour randomised words which don't look even
                                        slightly believable. If you are going to use passage you need sure there anything
                                        embarrassing first true generator on the Internet.
                                    </p>
                                    <div class="skills-section">
                                        <div class="progress-box">
                                            <h5>Our Students <span class="pull-right">85%</span></h5>
                                            <div class="progress" data-value="85">
                                                <div class="progress-bar" role="progressbar"></div>
                                            </div>
                                        </div>
                                        <div class="progress-box">
                                            <h5>Our Teachers <span class="pull-right">65%</span></h5>
                                            <div class="progress" data-value="65">
                                                <div class="progress-bar" role="progressbar"></div>
                                            </div>
                                        </div>
                                        <div class="progress-box">
                                            <h5>Our Courses <span class="pull-right">75%</span></h5>
                                            <div class="progress" data-value="75">
                                                <div class="progress-bar" role="progressbar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="contact.php" class="theme-btn mt-5">Learn More<i class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- enroll area end -->


        <!-- department area -->
        <!-- <div class="department-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Department</span>
                            <h2 class="site-title">Browse Our <span>Department</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="department-slider owl-carousel owl-theme">
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/monitor.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="academic-single.php">Business And Finance</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="department-btn">
                                <a href="academic-single.php">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/law.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="academic-single.php">Law And Criminology</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="department-btn">
                                <a href="academic-single.php">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/data.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="academic-single.php">IT And Data Science</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="department-btn">
                                <a href="academic-single.php">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/health.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="academic-single.php">Health And Medicine</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="department-btn">
                                <a href="academic-single.php">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/art.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="academic-single.php">Art And Design</a></h4>
                            <p>There are many variations of passages the majority have some injected humour.</p>
                            <div class="department-btn">
                                <a href="academic-single.php">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- department area end -->


        <!-- testimonial area -->
        <!-- <div class="testimonial-area ts-bg pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Testimonials</span>
                            <h2 class="site-title text-white">What Our Students <span>Say's</span></h2>
                            <p class="text-white">It is a long established fact that a reader will be distracted by the
                                readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/01.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Anthony Nicoll</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/02.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Richard Lock</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/03.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Randal Grand</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/04.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Edward Miles</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/05.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Ninal Gordon</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- testimonial area end -->


        <!-- blog area -->
        <!-- <div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Blog</span>
                            <h2 class="site-title">Latest News & <span>Blog</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-date"><i class="fal fa-calendar-alt"></i> June 18, 2024</div>
                            <div class="blog-item-img">
                                <img src="assets/img/blog/01.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single.php">There are many variations passage have suffered
                                        available.</a>
                                </h4>
                                <a class="theme-btn" href="blog-single.php">Read More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="blog-date"><i class="fal fa-calendar-alt"></i> June 18, 2024</div>
                            <div class="blog-item-img">
                                <img src="assets/img/blog/02.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single.php">There are many variations passage have suffered
                                        available.</a>
                                </h4>
                                <a class="theme-btn" href="blog-single.php">Read More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="blog-date"><i class="fal fa-calendar-alt"></i> June 18, 2024</div>
                            <div class="blog-item-img">
                                <img src="assets/img/blog/03.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single.php">There are many variations passage have suffered
                                        available.</a>
                                </h4>
                                <a class="theme-btn" href="blog-single.php">Read More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- blog area end -->


        <!-- partner area -->
        <section class="partner">
         <div class="partner-area bg pt-50 pb-50">
            <div class="container">
                <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                   <a href="https://msbte.ac.in/"> <img src="assets/img/partner/msbte.png" alt="thumb"></a>
                   <a href="https://www.maharashtra.gov.in/"> <img src="assets/img/partner/goverment.png" alt="thumb"></a>
                   <a href="https://htedu.maharashtra.gov.in"> <img src="assets/img/partner/lamp.png" alt="thumb"></a>
                    <a href="https://htedu.maharashtra.gov.in"> <img src="assets/img/partner/mhgov.png" alt="thumb"></a>
                    <a href="https://www.aicte.gov.in"><img src="assets/img/partner/aictept.png" alt="thumb" style= "height: 150px; width:166px" ></a>
                    <a href="https://www.education.gov.in/"><img src="assets/img/partner/mhrd.png" alt="thumb" style="height: 170px; width: 180px;"></a>
                    <a href="https://mahaeschol.maharashtra.gov.in/MahaEschol/Scholarships/Common/SessionTimeOutPage.aspx"><img src="assets/img/partner/scholarship.png" alt="thumb"></a>
                </div>
            </div>
         </div>
        </section>
        <!-- partner area end -->

    </main>


    <!-- footer area -->
    <?php
    include 'common/footer.php';
    ?>
    <!-- footer area end -->


    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
    <!-- scroll-top end -->


    <?php
    include 'common/footer-link.php';
    ?>

         <script>
  window.onload = function () {
    const navEntries = performance.getEntriesByType("navigation");
    // Method 1: Chrome/modern browsers
    const isReload = navEntries.length && navEntries[0].type === "reload";
    // Method 2: fallback for older browsers
    const isReloadFallback = window.performance && performance.navigation.type === 1;
    if (isReload || isReloadFallback) {
      document.getElementById("popupOverlay").style.display = "block";
    }
  };
  // Close popup
  function closeForm() {
    document.getElementById("popupOverlay").style.display = "none";
  }
  // Optional: Close when clicking outside the form
  window.onclick = function (event) {
    const overlay = document.getElementById("popupOverlay");
    if (event.target === overlay) {
      closeForm();
    }
  };
</script>
</body>


<!-- Mirrored from live.themewild.com/eduka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:29:42 GMT -->

</html>