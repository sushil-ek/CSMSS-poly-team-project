<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from live.themewild.com/eduka/academic-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:27 GMT -->

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
    <style>
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fda31b;
            /* background-color: #116e63; */
            background-color: transparent;
        }

        .nav-link {
            color: black;
        }

        /* marquee div container  */

        #marque-sec .img-one {
            height: 32px;
        }

        #marque-sec .marquee-container {
            width: 100%;
            background-color: #FDA31B !important;
            padding: -5px 0;
        }

        #marque-sec .marquee-content {
            display: flex;
            animation: marquee 32.1s linear infinite;
        }

        #marque-sec .marquee-item {
            flex: 0 0 auto;
            padding: 0 10px;
            font-size: 1.2rem;
            color: #495057;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Optional: Pause animation on hover */
        #marque-sec .marquee-container:hover .marquee-content {
            animation-play-state: paused;
        }

        /* for link hover */
        #marque-sec .custom-link {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        #marque-sec .custom-link:hover {
            color: #FFC107;
            /* Yellow on hover */
        }

        #marque-sec .custom-link:active {
            color: green !important;
            /* green on click */
        }




        .accordion-item {
            border: none;
            margin-bottom: 30px;
            background: var(--color-white);
            border-radius: 30px 30px 30px 0 !important;
            box-shadow: var(--box-shadow);
        }

        .accordion-item span {
            width: 45px;
            height: 45px;
            margin-right: 15px;
        }

        .accordion-item i {
            width: 45px;
            height: 45px;
            line-height: 45px;
            border-radius: 50px;
            background: var(--theme-color);
            text-align: center;
            color: var(--color-white);
        }

        .accordion-button:not(.collapsed) {
            color: var(--theme-color);
            background: transparent;
            box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
        }

        .accordion-button {
            border-radius: 0px !important;
            background: transparent;
            font-weight: 600;
            font-size: 20px;
            color: var(--color-dark);
            box-shadow: none !important;
        }

        .accordion-button:not(.collapsed) {
            border-bottom: 1px solid var(--theme-color);
        }

/* .fixed {
  position: fixed;
  top: 100px; 
  z-index: 1000;
} */
.lg{
margin-left:415px;
margin-top:-310px;
}




        @media all and (max-width: 991px) {
            .faq-right {
                margin-bottom: 50px;
            }

            .accordion-button {
                font-size: 16px;
            }
        }

.download-btn{
    color:#f48a19;
     font-size: 30px;
    
}
                @media only screen and  (max-width: 768px) {
.download-btn{
    color:#f48a19;
    /* font-size: 30px;
    margin-left:45%; */
}

                }

                  @media only screen and  (max-width: 426px) {
.download-btn{
    color:#f48a19;
    /* font-size: 30px;
    margin-left:45%; */
}

                }

    </style>
</head>

<body>                                                      
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
    <main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Placement Details</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Placement Details</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->
        <!-- department-single -->
        <div class="department-single-area  position-relative mt-4 mb-4 "> 
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 position-">
                            <div class="department-sidebar ">
                                <div class="widget category">
                                    <h4 class="widget-title">T&P DEPARTMENT </h4>
                                    <div class="category-list">
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item col-lg-12 col-md-4 col-12 ">
                                                <a data-bs-toggle="pill" href="#campus" class="nav-link active">
                                                    <i class="far fa-long-arrow-right"></i> Placement Details
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-4 col-12  mt-2">
                                                <a href="placement_gallery.php" class="nav-link ">
                                                    <i class="far fa-long-arrow-right"></i> Gallery
                                                </a>
                                            </li>

                                            <li class="nav-item col-lg-12 col-md-4 col-12  mt-2">
                                                <a href="placement.php" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Our Placement
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                   

                      
                        <div class="col-xl-8 col-lg-8 overflow-y:scroll" style="overflow-y:scroll; height: 700px; scrollbar-width:none; -ms-overflow-style:none;">
                            <div class="department-details">
                                <div class="tab-content show"> 
                                    <!-- Campus - Active by default -->
                                     <div class="widget category">

                                        <div id="campus" class="container tab-pane active show"><br>
                                            <h3 class="mb-5 text-center">OBJECTIVES OF TRAINING AND PLACEMENT</h3>
                                            <p> The Training & Placement (T & P) cell has been formed for the Job
                                                Placement & In- plant Trainings of students.</p>
                                            <p>The Training & Placement (T & P) cell maintains strong bond between
                                                Industry & Institute in various ways.</p>
                                            <p>It interact ways the industry frequently by arraigning visits,
                                                encouraging students, to carry the industrial projects & Trainings.</p>
                                            <p>Each department has a Placement Coordinator who reports to TPO in
                                                organizing Training & Placement activities.</p>
                                            <p>TP coordinator of each department approach industries for summer in-plant
                                                training and placement activities.</p>
                                            <p>Through Training & Placement cell various activities of personality
                                                development are carried out for enhancing soft skills and interview
                                                techniques so as to make them perfectly fit for industry.</p>
                                            <p>Create awareness among students regarding available career options and
                                                help them in identifying their career objectives.</p>
                                            <p>To give industrial exposure industrial visits & industry expert lecture
                                                are carried out.</p>
                                            <p>T & P cell maintain updated the data base of students & forward it to
                                                industry as per requirements.</p>
                                        </div>

                                           <div class="widget event-single-info">

                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <h4 class="widget-title mt-5 text-center">Placement Data</h4>
                                                    </button> 
                                                </h2>

                                                         <div class="row">
                                                           <div class="col-lg-12 col-md-12">
                                                            <div class="choose-item m-3">
                                                                <div class="choose-item-icon">
                                                                    <img src="assets/img/icon/teacher-2.svg" alt="">
                                                             </div>
                                                                <div class="choose-item-info d-flex align-items-center justify-content-between">
                                                                    <!-- Placement Summary Text on the left -->
                                                                    <a href="assets/pdf/placement_details/T&Pcell.pdf" class="flex-grow-1">
                                                                        <p class="mt-0 mb-0">Training and Placement Cell</p>
                                                                    </a>

                                                                    <!-- Download Button on the right -->
                                                                    <a href="assets/pdf/placement_details/T&PCell.pdf" download class="download-btn ms-3">
                                                                     <i class="fa-solid fa-file-arrow-down"></i>
                                                                    </a>
                                                                </div>
                                                                 </div>
                                                        </div>

                                                          <div class="col-lg-12 col-md-12">
                                                                <div class="choose-item m-3">
                                                                  <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div>
                                                                    <div class="choose-item-info d-flex align-items-center justify-content-between">
                                                                        <!-- Placement Summary Text on the left -->
                                                                        <a href="assets/pdf/placement_details/summery.pdf" class="flex-grow-1">
                                                                            <p class="mt-0 mb-0">Placement Summary</p>
                                                                        </a>

                                                                        <!-- Download Button on the right -->
                                                                        <a href="assets/pdf/placement_details/summery.pdf" download class="download-btn ms-3">
                                                                            <i class="fa-solid fa-file-arrow-down"></i>
                                                                        </a>
                                                                 </div>
                                                             </div>
                                                            </div>                                                      

                                                           <div class="col-lg-12 col-md-12">
                                                            <div class="choose-item m-3">
                                                                <div class="choose-item-icon">
                                                                    <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                </div>
                                                              <div class="choose-item-info d-flex align-items-center justify-content-between">
                                                                 <!-- Placement Summary Text on the left -->
                                                                  <a href="assets/pdf/placement_details/placement_details.pdf" class="flex-grow-1">
                                                                     <p class="mt-0 mb-0">Year Wise / Department Wise Students Placement Details</p>
                                                                 </a>

                                                                 <!-- Download Button on the right -->
                                                                 <a href="assets/pdf/placement_details/placement_details.pdf" download class="download-btn ms-3">
                                                                     <i class="fa-solid fa-file-arrow-down"></i>
                                                                 </a>
                                                             </div>
                                                            </div>
                                                        </div>

                                                    <div class="col-lg-12 col-md-12">
                                                     <div class="choose-item m-3">
                                                         <div class="choose-item-icon">
                                                             <img src="assets/img/icon/teacher-2.svg" alt="">
                                                            </div>
                                                            <div class="choose-item-info d-flex align-items-center justify-content-between">
                                                             <!-- Placement Summary Text on the left -->
                                                                <a href="assets/pdf/placement_details/recruiters.pdf" class="flex-grow-1">
                                                                 <p class="mt-0 mb-0">List Of Recruiters</p>
                                                                </a>

                                                             <!-- Download Button on the right -->
                                                                <a href="assets/pdf/placement_details/recruiters.pdf" download class="download-btn ms-3">
                                                                 <i class="fa-solid fa-file-arrow-down"></i>
                                                                </a>
                                                            </div>
                                                     </div>
                                                    </div>


                                                        </div>
                                                 

 </div>
                                    </div>
                                </div>





                                <!-- new marque -->
                                <!-- <section id="marque-sec">
                                    <div class="marquee-container overflow-hidden shadow-sm">
                                        <div class="marquee-content d-flex align-items-center text-white">
                                            <span>
                                                <img class="img-one mt-1" src="assets/img/placement/img_new.png" alt="">
                                                <a href="assets/pdf/placement_details/IIIR.pdf" class="custom-link"
                                                    target="_blank">
                                                    <p class="pe-5 fw-bold text-white"> 112th feb. 2024 - Industry Institute
                                                        Interaction </p>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </section> -->
                                <!-- NEW CSS HELPLINE -->



                                <div class="col-lg-12 mt-5">
                                    <!-- <div class="widget event-single-info">

                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <h4 class="widget-title mt-5 text-center">Placement Data</h4>
                                                    </button> 
                                                </h2>

                                                         <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="choose-item m-3">
                                                                    <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div> 
                                                                   <div class="choose-item-info ">
                                                                        <a href="assets/pdf/placement_details/T&PCell.pdf">
                                                                            <p class="mt-4"> Training and Placement Cell
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="choose-item m-3">
                                                                    <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div>
                                                                    <div class="choose-item-info">
                                                                        <a href="assets/pdf/placement_details/summery.pdf">
                                                                            <p class="mt-4"> Placement Summary</p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="choose-item m-3">
                                                                    <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div>
                                                                    <div class="choose-item-info">
                                                                        <a href="assets/pdf/placement_details/placement_details.pdf">
                                                                            <p class="mt-4"> Year Wise / Department wise
                                                                                Student Placement Details</p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="choose-item m-3">
                                                                    <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div>
                                                                    <div class="choose-item-info">
                                                                        <a href="assets/pdf/placement_details/recruiters.pdf">
                                                                            <p class="mt-4"> List of Recruiters</p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                 

 </div> -->

    </div>
  </div>
</section>




                         <!-- department-single end -->

        <!-- <div class="department-single-area py-120 position-relative justify-content-end"> 
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
 
                        <div class="col-xl-4 col-lg-4 position-">

                            <div class="department-sidebar fixed col-lg-4 ">
                                <div class="widget category">
                                    <h4 class="widget-title">T&P DEPARTMENT </h4>
                                    <div class="category-list">
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item col-lg-12 col-md-4 col-12 ">
                                                <a data-bs-toggle="pill" href="#campus" class="nav-link active">
                                                    <i class="far fa-long-arrow-right"></i> Placement Details
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-4 col-12  mt-2">
                                                <a href="placement_gallery.php" class="nav-link ">
                                                    <i class="far fa-long-arrow-right"></i> Gallery
                                                </a>
                                            </li>

                                            <li class="nav-item col-lg-12 col-md-4 col-12  mt-2">
                                                <a href="placement.php" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Our Placement
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   
<div class="department-single-area py-120 position-relative justify-content-end"> 
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                      
                        <div class="col-xl-8 col-lg-8 lg">
                            <div class="department-details">
                                <div class="tab-content show"> -->
                                    <!-- Campus - Active by default -->
                                    <!-- <div class="widget category">

                                        <div id="campus" class="container tab-pane active show"><br>
                                            <h3 class="mb-5 text-center">OBJECTIVES OF TRAINING AND PLACEMENT</h3>
                                            <p> The Training & Placement (T & P) cell has been formed for the Job
                                                Placement & In- plant Trainings of students.</p>
                                            <p>The Training & Placement (T & P) cell maintains strong bond between
                                                Industry & Institute in various ways.</p>
                                            <p>It interact ways the industry frequently by arraigning visits,
                                                encouraging students, to carry the industrial projects & Trainings.</p>
                                            <p>Each department has a Placement Coordinator who reports to TPO in
                                                organizing Training & Placement activities.</p>
                                            <p>TP coordinator of each department approach industries for summer in-plant
                                                training and placement activities.</p>
                                            <p>Through Training & Placement cell various activities of personality
                                                development are carried out for enhancing soft skills and interview
                                                techniques so as to make them perfectly fit for industry.</p>
                                            <p>Create awareness among students regarding available career options and
                                                help them in identifying their career objectives.</p>
                                            <p>To give industrial exposure industrial visits & industry expert lecture
                                                are carried out.</p>
                                            <p>T & P cell maintain updated the data base of students & forward it to
                                                industry as per requirements.</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- new marque -->
                                <!-- <section id="marque-sec">
                                    <div class="marquee-container overflow-hidden shadow-sm">
                                        <div class="marquee-content d-flex align-items-center text-white">
                                            <span>
                                                <img class="img-one mt-1" src="assets/img/placement/img_new.png" alt="">
                                                <a href="assets/pdf/placement_details/IIIR.pdf" class="custom-link"
                                                    target="_blank">
                                                    <p class="pe-5 fw-bold text-white"> 16th feb. 2024 - Industry Institute
                                                        Interaction </p>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </section> -->
                                <!-- NEW CSS HELPLINE -->



                                <!-- <div class="col-lg-12 mt-5">
                                    <div class="widget event-single-info">

                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <h4 class="widget-title mt-5 text-center">Placement Data</h4>
                                                    </button> 
                                                </h2>

                                                         <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="choose-item m-3">
                                                                    <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div> 
                                                                   <div class="choose-item-info ">
                                                                        <a href="assets/pdf/placement_details/T&PCell.pdf">
                                                                            <p class="mt-4"> Training and Placement Cell
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="choose-item m-3">
                                                                    <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div>
                                                                    <div class="choose-item-info">
                                                                        <a href="assets/pdf/placement_details/summery.pdf">
                                                                            <p class="mt-4"> Placement Summary</p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="choose-item m-3">
                                                                    <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div>
                                                                    <div class="choose-item-info">
                                                                        <a href="assets/pdf/placement_details/placement_details.pdf">
                                                                            <p class="mt-4"> Year Wise / Department wise
                                                                                Student Placement Details</p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="choose-item m-3">
                                                                    <div class="choose-item-icon">
                                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                                    </div>
                                                                    <div class="choose-item-info">
                                                                        <a href="assets/pdf/placement_details/recruiters.pdf">
                                                                            <p class="mt-4"> List of Recruiters</p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                 

 </div> -->


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
</body>
<!-- Mirrored from live.themewild.com/eduka/academic-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:32 GMT -->

</html>