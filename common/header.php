<header class="header">
    <!-- header top -->
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrap">
                <div class="header-top-left">
                    <div class="header-top-social">
                        <span>Follow Us: </span>
                        <a href="https://www.facebook.com/Csmsspolytechnic20"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/csmssofficial/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@CSMSSPOLY"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-contact">
                        <p class="text-white">[ Approved by AICTE & DTE (Govt of Maharashtra ). Affillated to MSBTE Mumbai. ]</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <div class="container mt-md-5 mt-lg-0 d-flex justify-content-center d-none d-lg-block">
            <div class="row py-2 d-md-flex justify-content-lg-around justify-content-between align-items-md-center h-100 w-100 pt-md-4 pt-lg-0">
                <div class="col-lg-3 col-md-6 py-4">
                    <img src="assets/img/logo/logo-csmss.png" class="mt-5 mt-md-0 w-100" alt="">
                </div>
                <div class="col-lg-6 p-2 col-md-6 ">
                    <p class="text-md-start text-center " style="color: #642224;">Chhatrapati Shahu Maharaj Shikshan Sanstha's </p>
                    <h2 class="text-md-start text-center " style="color: #642224;">COLLEGE OF POLYTECHNIC </h2>
                    <p class="text-md-start text-center " style="color: #642224;"> <b>Kanchanwadi, Paithan Road, Chhatrapati
                            Sambhajinagar, Maharashtra, India - 431011</b></p>
                    <p class="text-md-start text-center  " style="color: #642224;"><i>[Approved by AICTE & DTE (Govt. of
                            Maharashtra), Affiliated to MSBTE Mumbai.]</i></p>
                </div>
                <div class="col-lg-3 col-md-3 d-none d-md-none d-lg-block  text-center">
                    <img src="assets/img/logo/logo-2.png" class="w-100 h-75 ms-2" alt="">
                </div>


            </div>

        </div>
        <nav class="navbar navbar-expand-lg py-3" style="background-color:  var( --theme-color)">
            <div class="container position-relative">

                <div class="mobile-menu-right">
                    <div class="white-logo">
                        <img src="assets/img/logo/logowhite.png" alt="">
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon text-white"><i class="far fa-bars"></i></span>
                    </button>
                </div>

                <?php
                $currentPage = basename($_SERVER['PHP_SELF']);
                ?>

                <div class="collapse navbar-collapse" id="main_nav" style="background-color: var(--theme-color)">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link py-0 <?= ($currentPage == 'index.php') ? 'active-tap' : '' ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 text-white <?= ($currentPage == 'admission.php') ? 'active-tap' : '' ?>" href="admission.php">Admission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 <?= ($currentPage == 'academic.php') ? 'active-tap' : '' ?>" href="academic.php">Department</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 <?= ($currentPage == 'infrastructure.php') ? 'active-tap' : '' ?>" href="infrastructure.php">Infrastructure</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle py-0 <?= in_array($currentPage, ['news.php', 'events.php', 'news-media.php', 'awards.php']) ? 'active-tap' : '' ?>" href="#" data-bs-toggle="dropdown">News & Events</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="news.php">News</a></li>
                                <li><a class="dropdown-item" href="event.php">Events</a></li>
                                <li><a class="dropdown-item" href="news-media.php">News Media</a></li>
                                <li><a class="dropdown-item" href="award&recgnaization.php">Awards And Recognitions</a></li>
                                <li><a class="dropdown-item" href="photo-gallery.php">Photo Gallery</a></li>
                                <li><a class="dropdown-item" href="video-gallery.php">Video Gallery</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle py-0 text-white <?= in_array($currentPage, ['forms-to-download.php']) ? 'active-tap' : '' ?>" href="#" data-bs-toggle="dropdown">Students Corner</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="notices.php">Notices</a></li>
                                <li><a class="dropdown-item" href="#">Library Website</a></li>
                                <li><a class="dropdown-item" href="academic-schedule.php">Academic Schedule</a></li>
                                <li><a class="dropdown-item" href="curriculum.php">Curriculum</a></li>
                                <li><a class="dropdown-item" href="https://drive.google.com/file/d/1cCyKnTuNfO9a4cPpfELyT8rFNTdbpWwZ/view">Students Handbook</a></li>
                                <li><a class="dropdown-item" href="exam-timetable.php">Exam TimeTable</a></li>
                                <li><a class="dropdown-item" href="college-timetable.php">College TimeTable</a></li>
                                <li><a class="dropdown-item" href="forms-to-download.php">Forms To Download</a></li>
                                <li><a class="dropdown-item" href="committees.php">Committees</a></li>
                                <li><a class="dropdown-item" href="#">Online Grievance</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle py-0 <?= in_array($currentPage, ['college.php', 'principal-desk.php']) ? 'active-tap' : '' ?>" href="#" data-bs-toggle="dropdown">About Us</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="college.php">College</a></li>
                                <li><a class="dropdown-item" href="principal-desk.php">Principal Desk</a></li>
                                <li><a class="dropdown-item" href="career.php">Career</a></li>
                                <li><a class="dropdown-item" href="assets/pdf/privacypolicy/PolicyProc.pdf">Policy Procedure</a></li>
                                <li><a class="dropdown-item" href="extension.php">Extension & Audit Report</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0 <?= ($currentPage == 'contact.php') ? 'active-tap' : '' ?>" href="contact.php">Contact Us</a>
                        </li>

                        <div class="col-12 d-lg-none d-block mt-3 mb-0">
                            <div class="footer-widget-box list">
                                <ul class="footer-contact">
                                    <li><a href="tel:+21236547898"><i class="far fa-phone"></i>0240-2646405</a></li>
                                    <li> <a href="https://maps.app.goo.gl/f6AQC3sb1txKJMNJ7"><i class="far fa-map-marker-alt"> </i>Kanchanwadi, Chhatrapati Sambhajinagar</li></a>
                                    <li><a href="mailto:info@example.com"><i
                                                class="far fa-envelope"></i>tpo@csmsspoly.com</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6 align-self-start d-lg-none d-block">
                            <ul class="header-social" style="
    margin-bottom: 49px !important;
">
                                <li><a href="https://www.facebook.com/Csmsspolytechnic20"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="http://www.youtube.com/@CSMSSPOLY"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </ul>


                </div>
            </div>
    </div>
    </nav>
    </div>
</header>

<!-- new marque -->
<section id="marque-sec">
    <div class="marquee-wrapper">
        <div class="marquee-content">
            <img class="img-one" src="assets/img/marque/img_new.png" alt="">
            <a href="assets/pdf_home/19_ june.pdf" class="custom-link pe-5" target="_blank">
                19th June - Direct Second Year DTE Circular
            </a>
            <img class="img-one" src="assets/img/marque/img_new.png" alt="">
            <a href="assets/pdf_home/19_may.pdf" class="custom-link pe-5" target="_blank">
                19th May - First Year DTE Circular
            </a>
            <img class="img-one" src="assets/img/marque/img_new.png" alt="">
            <a href="assets/pdf_home/8_may.pdf" class="custom-link" target="_blank">
                08th May - DTE Circular - Required Documents for Admission 2025-26
            </a>

            <img class="img-one" src="assets/img/marque/img_new.png" alt="">
            <a href="assets/pdf_home/19_ june.pdf" class="custom-link pe-5" target="_blank">
                19th June - Direct Second Year DTE Circular
            </a>
            <img class="img-one" src="assets/img/marque/img_new.png" alt="">
            <a href="assets/pdf_home/19_may.pdf" class="custom-link pe-5" target="_blank">
                19th May - First Year DTE Circular
            </a>
            <img class="img-one" src="assets/img/marque/img_new.png" alt="">
            <a href="assets/pdf_home/8_may.pdf" class="custom-link" target="_blank">
                08th May - DTE Circular - Required Documents for Admission 2025-26
            </a>
        </div>
    </div>

    <style>
        #main_nav.collapse.show {
            max-height: 80vh;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .no-scroll {
            overflow: hidden;
            height: 100vh;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.getElementById('main_nav');

            navbarToggler.addEventListener('click', function() {
                document.body.classList.toggle('no-scroll', !navbarCollapse.classList.contains('show'));
            });


            navbarCollapse.addEventListener('hidden.bs.collapse', function() {
                document.body.classList.remove('no-scroll');
            });
        });
    </script>

</section>