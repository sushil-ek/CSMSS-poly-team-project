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
        /* department hod image  */
        .department-hod-img .hod-image {
            width: 80%;
            height: auto;
            border-radius: 5px;
        }

        .hod-name {
            font-weight: bold;
            font-size: 1.1rem;
        }

        button .accordion-button {
            background-color: #F5F5F5;
        }

        /* department accordion start*/
        .accordion-button {
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            padding: 12px 8px;
            border: 1px solid #ddd;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #6EA84F;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #F9F9F9;
        }

        .sr-col {
            width: 60px;
            font-weight: bold;
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
                <h2 class="breadcrumb-title">Electronics & Telecommunication Engineering</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Electronics & Telecommunication Engineering</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- department-single -->
        <div class="department-single-area py-120">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3">
                            <div class="department-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">Departments</h4>
                                    <div class="category-list">
                                        <a href="civil-department.php"><i class="far fa-long-arrow-right"></i>Civil Engineering</a>
                                        <a href="electrical-department.php"><i class="far fa-long-arrow-right"></i>Electrical Engineering</a>
                                        <a href="mechanical-department.php"><i class="far fa-long-arrow-right"></i>Mechanical Engineering</a>
                                        <a href="#"><i class="far fa-long-arrow-right"></i>Electronics & Telecommunication Engineering</a>
                                        <a href="computer-department.php"><i class="far fa-long-arrow-right"></i>Computer Engineering</a>
                                        <a href="AI-ML-department.php"><i class="far fa-long-arrow-right"></i>Artificial Intelligance & Machine Learning</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- department download -->
                        <!-- <div class="widget department-download">
                                    <h4 class="widget-title">Download</h4>
                                    <a href="#"><i class="far fa-file-pdf"></i> Download Brochure</a>
                                    <a href="#"><i class="far fa-file-pdf"></i> Department Details</a>
                                    <a href="#"><i class="far fa-file-pdf"></i> Journals Departments</a>
                                    <a href="#"><i class="far fa-file-alt"></i> Download Application</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-xl-8 col-lg-9 overflow-y:scroll" style="overflow-y: scroll; height: 800px; scrollbar-width: none; -ms-overflow-style: none;">
                            <div class="department-details">
                                <div class="department-details-img mb-30">
                                    <!-- Carousel -->
                                    <div id="demo" class="carousel slide" data-bs-ride="carousel">
                                        <!-- The slideshow/carousel -->
                                        <div class="carousel-inner">
                                            <!-- img industrial-visit-ej open-->
                                            <div class="carousel-item active">
                                                <img src="assets/img/department/industrial-visit-ej.jpg" alt="industrial-visit-me" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img industrial-visit-ej close-->
                                            <!-- img Passout Batch 2022-23 open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/passout-batch-ej.jfif" alt="Passout Batch 2022-23" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img Passout Batch 2022-23 close-->
                                            <!-- img first-price open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/first-price-ej.jfif" alt="first-price" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img first-price close-->
                                            <!-- img tree-plantation open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/tree-plantation-ej.jpg" alt="tree-plantation" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img tree-plantation close-->
                                            <!-- img expert-lecture open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/expert-lecture-ej.jpg" alt="expert-lecture" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img expert-lecture close-->

                                        </div>
                                        <!-- Left controls/icons -->
                                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </button>
                                        <!-- Right controls/icons -->
                                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </button>
                                    </div>
                                </div>

                                <!-- carousel  end -->

                                <div class="department-details">
                                    <h3 class="mb-20">Electronics & Tele-communication Engineering</h3>
                                    <p class="mb-20" style="text-align: justify;">
                                        Electronics & Tele-communication Engineering department was established in 2009. It is the branch of study that has revolutionized the life style of humanity. It is a pace setter and a prime mover behind the transition to a technological society. The field of Electronics and Tele-communication Engineering encompasses all areas of human life. Radio, television, telephones, computers, automobiles, office machinery and house-hold appliances, lifesaving medical equipment’s and space vehicles represent a mere sample in the wide spectrum of application of Electronics. </p>
                                    <p class="mb-20" style="text-align: justify;"> Electronics & Tele-communication students have unlimited opportunities in the field of terrestrial and extra terrestrial communication systems like telephones, cellular phones, television, optical fiber communication, consumer and entertainment devices. Highly rewarding and greatly satisfying opportunities await the Electronics and Communication Engineers in the field of satellite space programs, embedded technologies etc.
                                        <!-- img in civil page -->
                                        <!-- <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/01.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/02.jpg" alt="">
                                        </div>
                                    </div> -->
                                        <!-- Department Vision start -->
                                    <div class="mb-3">
                                        <h3 class="mb-3">Department Vision</h3>
                                        <p>“To become a role model department for diploma in Electronics and Tele-communication engineering by imparting value based technical education.”</p>
                                    </div>
                                    <!-- Department Vision end -->
                                    <!-- Department Mission start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Department Mission</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i> Implement advanced teaching, learning and evaluation methods to achieve academic excellence.</li>
                                            <li><i class="far fa-check"></i> Develop industry-institute interaction to impart professional and entrepreneurship skills in students.</li>
                                            <li><i class="far fa-check"></i> Inculcate social integrity and ethics among students through extra-curricular activities for overall development and life-long learning.</li>
                                        </ul>
                                    </div>
                                    <!-- Department Mission end -->
                                    <!-- Future Plan Start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Future Plan</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i>To Become a NBA accredited department</li>
                                            <li><i class="far fa-check"></i>To Increase the RAPO with maximum industry</li>
                                            <li><i class="far fa-check"></i>To motivate students towards entrepreneurship form the department</li>
                                            <li><i class="far fa-check"></i>To develop the engineers skills of the students</li>
                                            <li><i class="far fa-check"></i>To develop industry sponsored lab</li>
                                            <li><i class="far fa-check"></i>Increase the placement of students</li>
                                        </ul>
                                    </div>
                                    <!-- Future Plan Start -->
                                    <!-- PEO's start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                        <p><b class="text-dark">PEO 1:</b> Provide socially responsible, environment friendly solutions to Electronics and Telecommunication engineering related broad-based problems adapting professional ethics.</p>
                                        <p> <b class="text-dark">PEO 2:</b> Adapt state-of-the-art Electronics and Telecommunication engineering broad-based technologies to work in multi-disciplinary work environments.</p>
                                        <p><b class="text-dark">PEO 3:</b> Solve broad-based problems individually and as a team member communicating effectively in the world of work.</p>
                                    </div>
                                    <!--PEO's end  -->
                                    <!-- PSO start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                        <p><b class="text-dark">PSO1: Electronics and Telecommunication Systems:</b> Maintain various types of Electronics and Telecommunication systems.</p>
                                        <p><b class="text-dark">PSO2: EDA Tools Usage: </b>Use EDA tools to develop simple Electronics and Tele- Communication engineering related circuits</p>
                                    </div>
                                    <!-- PSO's end -->
                                    <!-- PO's start  -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Outcome(PO's)</h3>
                                        <p><b class="text-dark">PO1: Basic and Discipline specific knowledge:</b> Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.
                                        <p>
                                        <p><b class="text-dark">PO2:Problem analysis: </b>Identify & analyze well-defined Engg. problems using codified standard methods.</p>
                                        <p><b class="text-dark">PO3:Design/development of solutions :</b> Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.
                                        <p>
                                        <p><b class="text-dark">PO4:Engineering Tools, Experimentation and Testing:</b> Apply modern engineering tools and appropriate technique to conduct standard tests and measurements.</p>
                                        <p><b class="text-dark">PO5:Engineering practices for society, sustainability and environment:</b> Apply appropriate technology in context of society, sustainability, environment and ethical practices.</p>
                                        <p><b class="text-dark">PO6:Project Management:</b> Use engineering management principles individually, as a team member or a leader to manage projects and effectively communicate about well-defined engineering activities.</p>
                                        <p><b class="text-dark">PO7: Life-long learning:</b> Ability to analyze individual needs and engage in updating in the context of technological changes.</p>
                                    </div>
                                    <!-- PO's end -->
                                </div>
                                <h2 class="mb-3 ms-4 ps-1 text-black">Admission Intake Capacity : 60</h2>

                                <!-- Accodian start -->
                                <div class="container my-5">
                                    <div class="accordion" id="hodAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    HOD Message
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                                data-bs-parent="#hodAccordion">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <center><img class="sticky" src="assets\img\department\HODETC.jpeg" alt="HOD Image" width="150" height="200"></center>
                                                            <center><b>Mr. M. D. Narangale</b><br><i>HOD</i></center>
                                                        </div>
                                                        <div class="col-lg-8 col-md-12">
                                                            <p style="text-align: justify">Welcome to the Department of Electronics & Telecommunication Engineering at CSMSS college of Polytechnic, Aurangabad Maharashtra. The Department has been established in the year 2009 with the intake capacity of 60 students.</p>
                                                            <p style="text-align: justify">The M.S.B.T.E. Mumbai has conferred the ‘Excellent’ grade to the department for its academic activities, and has been certified by ISO. The Department has sufficient and good infrastructural design, and well equipped laboratories</p>
                                                            <p style="text-align: justify">The department has a SATCOM lab which has been developed in collaboration with the I.S.T.C. Pvt. Ltd. Pune in which satellite</p>
                                                        </div>
                                                        <p style="text-align: justify">related practicals are conducted. It is a dynamic and exciting area that provides excellent career opportunities in various fields of technology. The departmental staff has their own You Tube Channel of the practicals which is to be conducted according to the curriculum.</p>
                                                        <p style="text-align: justify">We motivate our students to participate in quiz, paper presentation, poster and project competition etc.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Section Start -->

                                    <!--faculty-details-->
                                    <!--first-table-->


                                    <div class=" table-responsive" style="font-size: 14px;">
                                        <table class=" table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="10%">

                                                        Sr.No.

                                                    </th>
                                                    <th width="45%">

                                                        Particuler

                                                    </th>
                                                    <th width="45%">
                                                        A.Y.
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody style="background-color:#eeeeee">
                                                <tr>
                                                    <td rowspan="3">
                                                        01
                                                    </td>
                                                    <td rowspan="3">
                                                        FACULTY DETAILS
                                                    </td>
                                                    <td>
                                                        <a href="">A.Y. 2021-22</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">A.Y. 2022-23</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">A.Y. 2023-24</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--first-table-end-->




                                    <!-- Second table -->

                                    <div class=" table-responsive" style="font-size: 14px;">
                                        <table class=" table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>

                                                        Sr.No.

                                                    </th>
                                                    <th>

                                                        Name

                                                    </th>
                                                    <th>

                                                        Qualification <br>

                                                    </th>
                                                    <th>

                                                        Designation <br>

                                                    </th>
                                                    <th>

                                                        Profile <br>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        01
                                                    </td>
                                                    <td>DR.SHASHIKANT RANGNATHRAO DIKLE</td>
                                                    <td>
                                                        B.E.,M.E.,Ph.D.
                                                    </td>
                                                    <td>

                                                        <b>Principal</b>

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="assets\pdf\department-pdf\electronic\DR. DIKLE SIR.pdf" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        02
                                                    </td>
                                                    <td>Mr. NARANGALE MADHAV DATTATRAY</td>
                                                    <td>
                                                        B.E.,M.E.
                                                    </td>
                                                    <td>

                                                        HOD

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="assets\pdf\department-pdf\electronic\Narangale Sir.pdf" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>Ms. BHANDARU SWARNSANDYA HARIBABU</td>
                                                    <td>
                                                        B.E.,M.E.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="assets\pdf\department-pdf\electronic\S.H.Bhandaru.pdf" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        04
                                                    </td>
                                                    <td>Mr. LAMB DHANANJAY SUDAMRAO</td>
                                                    <td>
                                                        B.E.,M.E.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="assets\pdf\department-pdf\electronic\Lamb Sir.pdf" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        05
                                                    </td>
                                                    <td>Mr. SHISODE VIRENDRASINH UDAYSINH</td>
                                                    <td>
                                                        B.E.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="assets\pdf\department-pdf\electronic\Shisode Sir.pdf" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        06
                                                    </td>
                                                    <td>Mrs. PATIL VIJAYA SAHEBRAO</td>
                                                    <td>
                                                        M.Tech, B.E.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="assets\pdf\department-pdf\electronic\V.S.Patil.pdf" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        07
                                                    </td>
                                                    <td>Mr. DHANWADE BHARAT GANGARAM</td>
                                                    <td>
                                                        M.A. (ENGLISH)
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="assets\pdf\department-pdf\electronic\Dhanwade sir.pdf" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                <tr>
                                                    <td>
                                                        08
                                                    </td>
                                                    <td>Ms. SAKHARE MANISHA BHASKARRAO</td>
                                                    <td>
                                                        M.SC.(MATHS), B.ED.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="assets\pdf\department-pdf\electronic\Sakhare Madam.pdf" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- second-table-end-->
                                    <!-- Form Section Ends  -->

                                    <!-- Accordin Main Start -->

                                    <!--Accordin section started here-->
                                    <section id="Accordion-section">
                                        <div class="faq-area">

                                            <div class="row">
                                                <div class="col-lg-6 w-100">
                                                    <!--first Accordion started-->
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2" id="headingOne">
                                                                <button
                                                                    class="accordion-button collapsed border-0"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseOne">
                                                                    TOPPERS
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">

                                                                    <ul>
                                                                        <li style="list-style-type: disc;">
                                                                            Following are the overall toppers of
                                                                            Electronics & Telecomm.engineering department for the
                                                                            academic year 2022-23.</li>
                                                                    </ul>
                                                                    <h5 style="margin-bottom: 10px;"><u>Toppers
                                                                            of FY EJ</u></h5>
                                                                    <!--first table started-->
                                                                    <div class="container mt-3 table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr.No.</th>
                                                                                    <th>Name of Student</th>
                                                                                    <th> Percentage</th>
                                                                                    <th>Class Awarded</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>01</td>
                                                                                    <td>PARADKAR RUSHIKESH PRASAD</td>
                                                                                    <td>86.59</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>02</td>
                                                                                    <td>SHRIKHANDE SAURABH BALKRISHNA</td>
                                                                                    <td>84.59</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>03</td>
                                                                                    <td>GADWE ANIKET BHAGWAN</td>
                                                                                    <td>75.76</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- first table end -->

                                                                    <!-- second table start -->
                                                                    <h5 style="margin-bottom: 10px;"><u>Toppers
                                                                            of SY EJ</u></h5>
                                                                    <div class="container mt-3 table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr.No.</th>
                                                                                    <th>Name of Student</th>
                                                                                    <th> Percentage</th>
                                                                                    <th>Class Awarded</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>01</td>
                                                                                    <td>DIVE ARUNDHATI DEEPAK</td>
                                                                                    <td>79.56</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>02</td>
                                                                                    <td> DNYANESHWARI PATIL</td>
                                                                                    <td>78.67</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>03</td>
                                                                                    <td>SALUNKE RADHIKA UMESH</td>
                                                                                    <td>78</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <!--second table end-->

                                                                        <!--third table started-->
                                                                        <h5 style="margin-bottom: 10px;"><u>Toppers
                                                                                of TY EJ</u></h5>
                                                                        <table class=" table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr.No.</th>
                                                                                    <th>Name of Student</th>
                                                                                    <th> Percentage</th>
                                                                                    <th>Class Awarded</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>01</td>
                                                                                    <td>BHANDARE BHAKTI GANESH</td>
                                                                                    <td>85.29</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>02</td>
                                                                                    <td>NAIK DIPIKA SHIVAJI</td>
                                                                                    <td>83.18</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>03</td>
                                                                                    <td>SOPPA SRUSHTI SUNIL</td>
                                                                                    <td>81.06</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--third table end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--first Accordion end-->

                                                        <!--second Accordion start-->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2" id="headingTwo">
                                                                <button
                                                                    class="accordion-button collapsed border-0"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    STUDENTS' ACHIEVEMENT
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="container mt-3 table-responsive">
                                                                        <table class=" table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr.No.</th>
                                                                                    <th>Name of Event</th>
                                                                                    <th> Year</th>
                                                                                    <th>Organized</th>
                                                                                    <th>Name of Student</th>
                                                                                    <th>Remark</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>01</td>
                                                                                    <td>Quiz</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>MIT, chha.sambhajinagar</td>
                                                                                    <td>Saurabh Shrikhande</td>
                                                                                    <td>Runner up</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>02</td>
                                                                                    <td>Quiz</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>MIT, chha.sambhajinagar</td>
                                                                                    <td>Rushikesh Paradkar</td>
                                                                                    <td>Runner up</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>03</td>
                                                                                    <td>Volleyball</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>IEDSSA</td>
                                                                                    <td>Prachi Dattu Patil</td>
                                                                                    <td>Participation</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>04</td>
                                                                                    <td>Volleyball</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>IEDSSA</td>
                                                                                    <td>Bhakti Vikas Shinde</td>
                                                                                    <td>Participation</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>05</td>
                                                                                    <td>Volleyball</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>IEDSSA</td>
                                                                                    <td>Prachi Dattu Patil</td>
                                                                                    <td>Participation</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>06</td>
                                                                                    <td>Chess</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>CSMSS,College of Polytechnic</td>
                                                                                    <td>Saurabh Balkrushna,Shrikhande </td>
                                                                                    <td>Participation</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>07</td>
                                                                                    <td>Basketball</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>CSMSS,College of Polytechnic</td>
                                                                                    <td>Dhondage Ritesh Sanjaykumar</td>
                                                                                    <td>Participation</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>08</td>
                                                                                    <td>Quiz</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>Government Polytechnic,Latur</td>
                                                                                    <td>Saurabh Balkrushna,Shrikhande</td>
                                                                                    <td>Participation</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>09</td>
                                                                                    <td>Quiz</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>Government Polytechnic,Latur</td>
                                                                                    <td>Rushikesh Paradkar</td>
                                                                                    <td>Participation</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--First table end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--second Accordion end-->

                                                        <!--third Accordion start-->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2"
                                                                id="headingThree">
                                                                <button
                                                                    class="accordion-button collapsed border-0"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseThree">
                                                                    DEPARTMENT ADVISORY BOARD (DAB)
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="container mt-3 table-responsive">
                                                                        <!-- third-table-start -->
                                                                        <table class=" table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr.No.</th>
                                                                                    <th>Name of the Committee Member</th>
                                                                                    <th>Details</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>01</td>
                                                                                    <td>Mr. M. D. Narangale</td>
                                                                                    <td>HOD</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>02</td>
                                                                                    <td>Mrs. S. H. Bhandaru</td>
                                                                                    <td>Faculty</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>03</td>
                                                                                    <td>Mr. D. S. Lamb</td>
                                                                                    <td>Faculty</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>04</td>
                                                                                    <td>Mr.Yogesh B. Shejwal</td>
                                                                                    <td>Alumni Representative</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>05</td>
                                                                                    <td>Mr.Varad S. Bhadgaonkar</td>
                                                                                    <td>Alumni Representative</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>06</td>
                                                                                    <td>Mr. R. A. Burukul</td>
                                                                                    <td>Academician</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>07</td>
                                                                                    <td>Mr. B. B. Nakhate</td>
                                                                                    <td>Employer (Industry Representative)</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>08</td>
                                                                                    <td>Mr.Battusingh Rajput</td>
                                                                                    <td>Employer (Industry Representative)</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>09</td>
                                                                                    <td>Mr. Sanjay Bhadgaonkar</td>
                                                                                    <td>Parents Representative</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>10</td>
                                                                                    <td>Mr.Santosh Tukaram Vibhute</td>
                                                                                    <td>Parents Representative</td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--third table end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- third-accordion-end -->



                                                        <!-- Fourth-accordion-start -->
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item p-2 ">
                                                                <h2 class="accordion-header" id="headingFourth">
                                                                    <button
                                                                        class="accordion-button collapsed border-0"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsefourth"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                        PROGRAMME ASSESSMENT COMMITTEE(PAC)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefourth"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingfourth"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="container mt-3 table-responsive">
                                                                            <!-- forth-table-start -->
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr.No.</th>
                                                                                        <th>Name of Faculty</th>
                                                                                        <th>Representation</th>
                                                                                        <th>Designation</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>01</td>
                                                                                        <td>Mr. M. D. Narangale</td>
                                                                                        <td>Chairman</td>
                                                                                        <td>HOD</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>02</td>
                                                                                        <td>Mrs. S. H. Bhandaru</td>
                                                                                        <td>Member</td>
                                                                                        <td>Lecturer</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>03</td>
                                                                                        <td>Mr. D. S. Lamb</td>
                                                                                        <td>Member</td>
                                                                                        <td>Lecturer</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>04</td>
                                                                                        <td>Mr.V.U.Shisode</td>
                                                                                        <td>Member</td>
                                                                                        <td>Lecturer</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>05</td>
                                                                                        <td>Mrs. V.S.Patil</td>
                                                                                        <td>Member</td>
                                                                                        <td>Lecturer</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>06</td>
                                                                                        <td>Mrs.Sakhare M.B.</td>
                                                                                        <td>Member</td>
                                                                                        <td>Lecturer</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>07</td>
                                                                                        <td>Mr.Dhanwade B.G.</td>
                                                                                        <td>Member</td>
                                                                                        <td>Lecturer</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!-- forth-table-end -->

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--forth-accordion-end -->

                                                            <!--Fifth-accordion-Start -->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingFifth">
                                                                    <button
                                                                        class="accordion-button collapsed border-0"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsefifth"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        LIST OF LABOROTORIES
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefifth"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingfifth"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="container mt-3 table-responsive">
                                                                            <!--fifth-table started-->
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr.No.</th>
                                                                                        <th>Name of Laboratories</th>
                                                                                        <th>Cost of Equipments (Rs.)</th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>01</td>
                                                                                        <td>Communication Lab</td>
                                                                                        <td>755687</td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>02</td>
                                                                                        <td>Measurement Lab</td>
                                                                                        <td>742717</td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>03</td>
                                                                                        <td>Basic Electronics Lab</td>
                                                                                        <td>831545</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>04</td>
                                                                                        <td>Digital & microprocessor Lab</td>
                                                                                        <td>153880</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>05</td>
                                                                                        <td>Analog Electronics lab</td>

                                                                                        <td>121326</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td>Total</td>
                                                                                        <td>2605155</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- fifth-accordion-end -->


                                                            <!-- sixth-ACCORDIN STARTS-->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingSixth">
                                                                    <button
                                                                        class="accordion-button collapsed border-0"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsesixth"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        STUDENT'S ASSOCIATION (EESA)-2022-23
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsesixth"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingsixth"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="container mt-3 table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <!--sixth-table started-->
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr.No.</th>
                                                                                        <th>Name of the Candidate</th>
                                                                                        <th>Post</th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>01</td>
                                                                                        <td>DAITHANKAR TEJAS SACHIN</td>
                                                                                        <td>PRESIDENT</td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>02</td>
                                                                                        <td>GADWE ANIKET BHAGWAN</td>
                                                                                        <td>VICE PRESIDENT</td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>03</td>
                                                                                        <td>GONDGE KRUSHNA ASHOK</td>
                                                                                        <td>SECRETARY</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>04</td>
                                                                                        <td>MEHETAR SHRAVANI ARJUN</td>
                                                                                        <td>TECHNICAL EVENT CO-ORDINATOR-TY</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>05</td>
                                                                                        <td>JIVRAK SONALI NARAYAN</td>

                                                                                        <td>DISCIPLINE HEAD</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>06</td>
                                                                                        <td>PARADKAR RUSHIKESH PRASA</td>
                                                                                        <td>SPORTS SECRETARY</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>07</td>
                                                                                        <td>PATIL PRACHI DATTU</td>
                                                                                        <td>TREASURER</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>08</td>
                                                                                        <td>SHRIKHANDE SAURABH BALKRISHNA</td>
                                                                                        <td>JOINT SECRETARY</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>96</td>
                                                                                        <td>PRADHAN HARSHAL BHASKAR</td>
                                                                                        <td>DECORATION HEAD</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- 6TH ACCORDIN ENDS-->
                                                            <!-- 7TH ACCORDIN STARTS-->

                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingseven">

                                                                    <button class="accordion-button collapsed border-0" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#collapseseven"
                                                                        aria-expanded="false" aria-controls="collapseseven">
                                                                        DEPARTMENT MOU's
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseseven" class="accordion-collapse collapse"
                                                                    aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="container mt-3 table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <!--SEVENTH-table started-->
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th> Sr. No.</th>
                                                                                        <th> Name of Company</th>
                                                                                        <th>From <br></th>
                                                                                        <th>Upto<br></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>01</td>
                                                                                        <td>Marathwada Auto Cluster ,
                                                                                            Waluj, Midc, Chhatrapati
                                                                                            Sambhajinagar
                                                                                        </td>
                                                                                        <td>23-06-2022</td>
                                                                                        <td>23-06-2025</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>02</td>
                                                                                        <td> Shri Venkatesh Polymould Pvt. Ltd.</td>
                                                                                        <td> 05-04-2023</td>
                                                                                        <td>05-04-2025</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 03</td>
                                                                                        <td> DNR India Auto Tech Pvt. Ltd.</td>
                                                                                        <td>26-08-2021</td>
                                                                                        <td>25-08-2024</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>04</td>
                                                                                        <td>Crystal Technology</td>
                                                                                        <td>27-08-2021</td>
                                                                                        <td>26-08-2025</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>05</td>
                                                                                        <td>CDSP, Chh.Sambhajinagar</td>
                                                                                        <td>27-05-2024</td>
                                                                                        <td>27-04-2025</td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!--seventh-table end-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--SEVENTH-Accordion end-->



                                                            <!-- 8TH ACCORDIN STARTS-->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingEight">
                                                                    <button
                                                                        class="accordion-button collapsed border-0"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseEight"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseEight">
                                                                        DEPARTMENT PROJECT
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseEight"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingEight"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="col-md-12">
                                                                            <div class="hedaing-content">
                                                                            </div>
                                                                            <p><strong><u class="p-2">A.Y.
                                                                                        2020-21</u></strong></p>
                                                                            <ul class="p-3 ">
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Universal Develoment Board for Practical</li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Hand Gesture For Dumb People
                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Android Streaming Micro Quadcopter with Obstacle detection
                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Automatic temperture detector in classroom
                                                                                </li>


                                                                            </ul>
                                                                            <p><strong><u class="p-2">A.Y.
                                                                                        2021-22</u></strong></p>
                                                                            <ul class="p-3 ">
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    8051 Development Board</li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    RFID & GSM Based Security system using Microcontroller</li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    IoT Based Air & Sound Pollution Monitoring System</li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Remote based Digital Notice Board using GSM Module & Microcontroller
                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Solar based Mobile Charger
                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Alcohol Sensing Alert with Engine Locking System
                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Women Safety Device with GPS Trackinf & Alerts
                                                                                </li>

                                                                            </ul>
                                                                            <p><strong><u class="p-2">A.Y.
                                                                                        2022-23</u></strong></p>
                                                                            <ul class="p-3 ">
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    GUI for error correction in data communication using SCILAB
                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    8051 Development Board

                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    RFID based Attendance system
                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Finger print based attendance system

                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Solar based mobile charger
                                                                                </li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Automatic Plant Watering System using Ardunio

                                                                                </li>

                                                                            </ul>
                                                                            <p><strong><u class="p-2">A.Y.
                                                                                        2023-24</u></strong></p>
                                                                            <ul
                                                                                class="justify-content-center p-3 ">
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Biometric Attendance system</li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    water level controller using Python</li>
                                                                                <li
                                                                                    style="list-style-type: disc">
                                                                                    Home Automation</li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- 8TH ACCORDIN ENDS-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </section>
                                    <!--Accordin section End here-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- department-single end-->
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