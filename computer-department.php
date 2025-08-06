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

        /* view btn css */
        #view-button {
            background-color: #F48A19;
            color: white;
        }

        #view-button:hover {
            background-color: var(--theme-color);
            color: white;
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
                <h2 class="breadcrumb-title">Computer Engineering</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Computer Engineering</li>
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
                                        <a href="electronics-telecommunication-department.php"><i class="far fa-long-arrow-right"></i>Electronics & Telecommunication Engineering</a>
                                        <a href="#"><i class="far fa-long-arrow-right"></i>Computer Engineering</a>
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
                                                <img src="assets/img/department/industrial-visit-co.Ltd" alt="industrial-visit-me" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img industrial-visit-ej close-->
                                            <!-- img Passout Batch 2022-23 open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/passout-batch-co.jpeg" alt="Passout Batch 2022-23" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img Passout Batch 2022-23 close-->
                                            <!-- img vlc lab open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/vlc-lab-co" alt="vlc lab" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img vlc lab close-->
                                            <!-- img software lab open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/software-lab-co.jfif" alt="software lab" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img software lab close-->

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
                                    <h3 class="mb-20">Computer Engineering</h3>
                                    <p class="mb-20" style="text-align: justify;">
                                        Computer Engineering department was established in 2009. It has great scope for people as it provides employment and has the capability to generate huge foreign exchange in flow for India. India exports softwares and services to approximately 95 countries in the world. By outsourcing to India, many countries get benefits in terms of labour costs and business processes. Also, the Indian companies are broadening the range of services being provided to the customers, which is resulting in more off shoring. Talent acquisition, development and retention initiatives taken by the companies have brought down the employee attrition rates, thereby providing more stability to the employees and increasing their job commitment. </p>
                                    <p class="mb-20" style="text-align: justify;"> Computer software engineers apply the principles of computer science and mathematical analysis to the design, development, testing, and evaluation of the software and systems that make computers work.Software engineers can be involved in the design and development of many types of software, including computer games, word processing and business applications, operating systems and network distribution, and compilers, which convert programs to machine language for execution on a computer.
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
                                        <p>“To provide skilled technical professionals in Computer Engineering for fulfilling needs of industry and society.”.</p>
                                    </div>
                                    <!-- Department Vision end -->
                                    <!-- Department Mission start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Department Mission</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i> Inculcate the fundamental and practical skills in the students through effective teaching-learning process</li>
                                            <li><i class="far fa-check"></i>Create skilled Technical professionals to enhance innovations, problem solving, team-spirit and ethical responsibilities</li>
                                            <li><i class="far fa-check"></i> Training faculty and students in order to meet the challenges of socio-technical environment through industry and institute</li>
                                        </ul>
                                    </div>
                                    <!-- Department Mission end -->
                                    <!-- Future Plan Start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Future Plan</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i>Enhance Industry Institution Interaction</li>
                                            <li><i class="far fa-check"></i>To develop useful software’s through Software Consultancy Cell for funding </li>
                                            <li><i class="far fa-check"></i>To start various activities under Research & Development Cell </li>
                                            <li><i class="far fa-check"></i>To improve placement ratio with the help of Alumni </li>
                                            <li><i class="far fa-check"></i>Faculty Development Programmee </li>
                                            <li><i class="far fa-check"></i>To Organize State/National level paper presentation & project competition </li>
                                        </ul>
                                    </div>
                                    <!-- Future Plan end -->
                                    <!-- PEO's start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                        <p><b class="text-dark">PEO 1:</b> Provide socially responsible, environment friendly solutions to Computer engineeringrelated broad-based problems adapting professional ethics.</p>
                                        <p> <b class="text-dark">PEO 2:</b> Adapt state-of-the-art Computer engineering broad-based technologies to work in multidisciplinarywork environments.</p>
                                        <p><b class="text-dark">PEO 3:</b> Solve broad-based problems individually and as a team member communicating effectivelyin the world of work.</p>
                                    </div>
                                    <!--PEO's end  -->
                                    <!-- PSO start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                        <p><b class="text-dark">PSO1: </b> Computer Software and Hardware Usage: Use state-of-the-art technologies for operation and application of Civil Engineering software and Equipment.</p>
                                        <p><b class="text-dark">PSO2:</b> Computer Engineering Maintenance: Maintain civil engineering related infrastructure and instruments.</p>
                                    </div>
                                    <!-- PSO's end -->
                                    <!-- PO's start  -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Outcome(PO's)</h3>
                                        <p><b class="text-dark">PO1:</b> Basic and Discipline specific knowledge: Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.
                                        <p>
                                        <p><b class="text-dark">PO2:</b> Problem analysis: Identify and analyze well-defined engineering problems using codified standard methods.</p>
                                        <p><b class="text-dark">PO3:</b> Design/ development of solutions: Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.
                                        <p>
                                        <p><b class="text-dark">PO4:</b> Engineering Tools, Experimentation and Testing: Apply modern engineering tools and appropriate technique to conduct standard tests and measurements.</p>
                                        <p><b class="text-dark">PO5:</b> Engineering practices for society, sustainability and environment:</b> Apply appropriate technology in context of society, sustainability, environment and ethical practices.</p>
                                        <p><b class="text-dark">PO6:</b> Project Management:</b> Use engineering management principles individually, as a team member or a leader to manage projects and effectively communicate about well-defined engineering activities.</p>
                                        <p><b class="text-dark">PO7:</b> Life-long learning: Ability to analyze individual needs and engage in updating in the context of technological changes.</p>
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
                                                        <div class="col-lg-4 col-md-7 col-sm-12 col-xs-12">
                                                            <center><img class="sticky" src="assets\img\department\HODCO.jpeg" alt="HOD Image" width="150" height="200"></center>
                                                            <center><b>Mrs. R. S. Pophale</b><br><i>HOD</i></center>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <p style="text-align: justify">I take the privilege to welcome you all in the Department of Computer Engineering of CSMSS College of Polytechnic, Chh.Sambhajinagar. The department has been conferred ‘Excellent’ grade by MSBTE, Mumbai, is full-fledged and actively engaged in teaching and learning activities in order to cater the needs of today’s changing Engineering world. The department has all modern equipments, facilities, infrastructure, and spacious laboratories, staff room, and Virtual Learning Centre that is required for teaching and learning activities. The department seeks to achieveexcellence in education and serve the society and industry.</p>
                                                        </div>
                                                        <p style="text-align: justify">The Departmental faculty members implement innovative teaching and conduct the best practices to achieve academic excellence. It is our objective to prepare the students to be successful in Computer Engineering practice and to be able to pursue advanced studies in Information Technology and Computer Engineering, on a competitive universal basis.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Section Start -->

                                    <!--faculty-details-->

                                    <!--first-table-->
                                    <div class="table-responsive">
                                        <table class=" table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="10%">

                                                        Sr.No.

                                                    </th>
                                                    <th width="50%">

                                                        Name

                                                    </th>
                                                    <th width="15%">

                                                        Qualification <br>

                                                    </th>
                                                    <th width="15%">

                                                        Designation <br>

                                                    </th>
                                                    <th width="10%">

                                                        Profile <br>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody style="background-color:#eeeeee">
                                                <tr>
                                                    <td rowspan="1">
                                                        01
                                                    </td>
                                                    <td rowspan="1">Mrs. POPHALE RUPALI SUBHASH</td>
                                                    <td>
                                                        B.E., M.TECH.
                                                    </td>
                                                    <td>

                                                        <b>HOD</b>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        02
                                                    </td>
                                                    <td rowspan="1">Mrs. BORLEPWAR ARCHANA P.</td>
                                                    <td>
                                                        B.E., M.TECH.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        03
                                                    </td>
                                                    <td rowspan="1"> Mrs. SAMRAT SONU ASHOK</td>
                                                    <td class=>
                                                        B.E.
                                                    </td>
                                                    <td class=>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        04
                                                    </td>
                                                    <td rowspan="1">Miss. PATHAN HEENA MAHEBOOB</td>
                                                    <td>
                                                        B.E.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        05
                                                    </td>
                                                    <td rowspan="1">Mrs. KUDLIKAR ANURADHA KIRAN</td>
                                                    <td>
                                                        B.E.,M.E.
                                                    </td>
                                                    <td class=>

                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        06
                                                    </td>
                                                    <td rowspan="1">Mrs.SONAWANE KALYANI ANIKET</td>
                                                    <td>
                                                        B.E.,M.E
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        07
                                                    </td>
                                                    <td rowspan="1">Mr.DHOPTE MANGESH AMBADAS</td>
                                                    <td>
                                                        B.E.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        08
                                                    </td>
                                                    <td rowspan="1">Miss.WAGH NISHA ANIL</td>
                                                    <td>
                                                        B.E.
                                                    </td>
                                                    <td>

                                                        LECTURER

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        09
                                                    </td>
                                                    <td rowspan="1">Miss.JADHAV MOHINI GULAB</td>
                                                    <td>
                                                        B.E.
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        10
                                                    </td>
                                                    <td rowspan="1">Miss.ZALKE RANI VINAYAK</td>
                                                    <td>
                                                        B.E.
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        11</td>
                                                    <td rowspan="1">Miss.WAGH NEHA SUNIL</td>
                                                    <td>
                                                        B.E.,M.E.
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">

                                                        12 </td>
                                                    <td rowspan="1">Mrs.LIPANE SHRADDHA UMESH</td>
                                                    <td>
                                                        B.E., M.TECH.
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        13
                                                    </td>
                                                    <td rowspan="1"> Ms.KULKARNI RASHMI LAXMIKANT</td>
                                                    <td>
                                                        B.E.
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        14
                                                    </td>
                                                    <td rowspan="1">Ms.JAYBHAYE PRIYANKA BABASAHEB</td>
                                                    <td>
                                                        B.E, M.E
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        15
                                                    </td>
                                                    <td rowspan="1">Mrs.TURUKMANE ASHVINI MILIND</td>
                                                    <td>
                                                        M.SC.(CHEMISTRY)B.ED.
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        16
                                                    </td>
                                                    <td rowspan="1">Mr. KHILLARE SUDARSHAN DILIP</td>
                                                    <td>
                                                        M.SC.(PHYSICS)
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        17
                                                    </td>
                                                    <td rowspan="1"> Mrs.MOPARI SHILPA SHRIKANT</td>
                                                    <td>
                                                        M.SC (STAT.), B.ED (SCI. & MATH)
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        18
                                                    </td>
                                                    <td rowspan="1"> Dr. SHELKE VISHNU CHHABU</td>
                                                    <td>
                                                        M.A.,Ph.D.(ENGLISH)
                                                    </td>
                                                    <td>
                                                        LECTURER
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" target="_blank" class="btn text-white"
                                                            id="view-button">
                                                            <i class="fa-regular fa-eye text-white"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- first-table-end-->
                                    <!-- Form Section Ends  -->

                                    <!-- Accordin Main Start -->

                                    <!--Accordin section started here-->
                                    <section id="Accordion-section">
                                        <div class="faq-area">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 w-100">
                                                        <div class="accordion" id="accordionExample">
                                                            <!--First Accordion Start -->
                                                            <div class="accordion-item p-2 ">
                                                                <h2 class="accordion-header" id="headingFirst">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFirst" aria-expanded="false" aria-controls="collapseFirst">
                                                                        TOPPERS
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFirst" class="accordion-collapse collapse" aria-labelledby="headingFirst"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <!--first table started-->
                                                                        <h5 style="margin-bottom: 10px; margin-top:20px"><u>Toppers of FY CO</u></h5>
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr style="padding-bottom: 10px;">
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th width="30%">
                                                                                            Name of Student
                                                                                        </th>
                                                                                        <th>
                                                                                            Percentage
                                                                                        </th>
                                                                                        <th>
                                                                                            Class Awarded
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>KRRISH MANOJ MEHTA</td>
                                                                                        <td>
                                                                                            90.36%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>SWAYAM RUSHIKESH KULKARNI</td>
                                                                                        <td>
                                                                                            85.94%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>PATHAN MUBBASHIRA KHALEDKHAN</td>
                                                                                        <td>
                                                                                            85.00%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!--first table end-->
                                                                        <!--second table stared-->
                                                                        <h5 style="margin-bottom: 10px; margin-top:20px"><u>Toppers of SY CO</u></h5>
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of Student
                                                                                        </th>
                                                                                        <th>
                                                                                            Percentage
                                                                                        </th>
                                                                                        <th>
                                                                                            Class Awarded
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>JADHAV ABHIJEET SANTOSH</td>
                                                                                        <td>
                                                                                            87.47%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>OM RAJKUMAR VARMA</td>
                                                                                        <td>
                                                                                            86.74%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>HIWRALE SANCHITA KISHOR</td>
                                                                                        <td>
                                                                                            85.34%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!--second table end-->
                                                                        <!--third table started-->
                                                                        <h5 style="margin-bottom: 10px; margin-top:20px"><u>Toppers of TY CO</u></h5>
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of Student
                                                                                        </th>
                                                                                        <th>
                                                                                            Percentage
                                                                                        </th>
                                                                                        <th>
                                                                                            Class Awarded
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>VAIDYA VARAD DIGAMBARAPPA</td>
                                                                                        <td>
                                                                                            89.77%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>PAWAR KOMAL SANTOSH</td>
                                                                                        <td>
                                                                                            88.91%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>PATIL NIRANJAN ARUN</td>
                                                                                        <td>
                                                                                            88.74%
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!--third table end-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--first Accordion end-->

                                                            <!--second Accordion started-->
                                                            <div class="accordion-item p-2 ">
                                                                <h2 class="accordion-header" id="headingSecond">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSecond" aria-expanded="false" aria-controls="collapseSecond">
                                                                        STUDENT'S ACHIEVEMENT
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseSecond" class="accordion-collapse collapse" aria-labelledby="headingSecond"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of Event
                                                                                        </th>
                                                                                        <th>
                                                                                            Year
                                                                                        </th>
                                                                                        <th>
                                                                                            Organized
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of Student
                                                                                        </th>
                                                                                        <th>
                                                                                            Remark
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>State Level Technical Event 'Brainwaves-2k25'(C-Coding)</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            MIT Polytechnic, Chh. Sambhajinagar
                                                                                        </td>
                                                                                        <td>
                                                                                            Mehta Krish Manoj,Pathe Mrutyunjay Kishor
                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>State Level Technical Event 'Brainwaves-2k25' (C-Coding)</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            MIT Polytechnic, Chh. Sambhajinagar
                                                                                        </td>
                                                                                        <td>
                                                                                            Markar Vaidehi Raju, Kubade Priti Ashok
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>State Level Technical Event 'Brainwaves-2k25' (Quiz Competition)</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            MIT Polytechnic, Chh. Sambhajinagar
                                                                                        </td>
                                                                                        <td>
                                                                                            Kumbhakarn Prathmesh Avinash
                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            04
                                                                                        </td>
                                                                                        <td>State Level Technical Event 'Brainwaves-2k25' (Poster Presentation)</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            MIT Polytechnic, Chh. Sambhajinagar
                                                                                        </td>
                                                                                        <td>
                                                                                            Kumbhakarn Prathmesh Avinash
                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            05
                                                                                        </td>
                                                                                        <td>State Level Technical Event 'Brainwaves-2k25' (Powerpoint Presentation)</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            MIT Polytechnic, Chh. Sambhajinagar
                                                                                        </td>
                                                                                        <td>
                                                                                            Chape Kiran Rameshwar
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            06
                                                                                        </td>
                                                                                        <td>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Chess</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Mhaske Arya Mahesh
                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            07
                                                                                        </td>
                                                                                        <td>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Badminton</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Pathe Mrutyunjay Kishor,Vaidya Vivek Vidyadhar
                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            08
                                                                                        </td>
                                                                                        <td>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Long Jump</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Gaikwad Akash Krushna
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            09
                                                                                        </td>
                                                                                        <td>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Badminton</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Devre Subodh Rajratan
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            10
                                                                                        </td>
                                                                                        <td>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Volleyball</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Sadavarte Tanisha Rahul
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            11
                                                                                        </td>
                                                                                        <td>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Table-Tennis</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Agale Shrushti
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            12
                                                                                        </td>
                                                                                        <td>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Volleyball</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Sukase Ishwari Shivaji, Devre Kalyani Pradip, Hingmire Bhakti Anand,Edke Pranjal Santosh
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            13
                                                                                        </td>
                                                                                        <td>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Volleyball</td>
                                                                                        <td>
                                                                                            2024-25
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Pathe Mrutyunjay Kishor
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!--second table end-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--second Accordion end-->


                                                            <!--Third Accordion started-->
                                                            <div class="accordion-item p-2 ">
                                                                <h2 class="accordion-header" id="headingThird">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThird" aria-expanded="false" aria-controls="collapseThird">
                                                                        LIST OF LABORATORIES
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThird" class="accordion-collapse collapse" aria-labelledby="headingThird"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">

                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of Laboratories
                                                                                        </th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>PROGRAMMING LAB 1</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>COMPUTER CENTER</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>PROGRAMMING LAB 2</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            04
                                                                                        </td>
                                                                                        <td>SOFTWARE DEVELOPMENT AND TESTING</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            05
                                                                                        </td>
                                                                                        <td>HARDWARE & NETWORKING LAB</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            06
                                                                                        </td>
                                                                                        <td>PROJECT LAB</td>

                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Third Accordion end-->
                                                            <!--fourth Accordion Start-->
                                                            <div class=" accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingFourth">
                                                                    <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourth" aria-expanded="false"
                                                                        aria-controls="collapseFourth">
                                                                        OUR ALUMNI
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourth" class="accordion-collapse collapse"
                                                                    aria-labelledby="headingFourth"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body" style="overflow-x: scroll;">
                                                                        <!--Fourth table started-->
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr style="padding-bottom: 10px;">
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th>

                                                                                            Name of Student

                                                                                        </th>
                                                                                        <th>
                                                                                            Year of Passing

                                                                                        </th>

                                                                                        <th>
                                                                                            Achievement Details

                                                                                        </th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>

                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>Gawale Rahul Sahebrao</td>
                                                                                        <td>
                                                                                            2011-12

                                                                                        </td>
                                                                                        <td>
                                                                                            Techila Global Services
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>Naikwade Pradip Kakasaheb </td>
                                                                                        <td>
                                                                                            2011-12
                                                                                        </td>
                                                                                        <td>
                                                                                            JDCC BANK JALGAON
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>Makhija Juhi Prakash </td>
                                                                                        <td>
                                                                                            2011-12
                                                                                        </td>
                                                                                        <td>
                                                                                            ALC
                                                                                        </td>


                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            04
                                                                                        </td>
                                                                                        <td>Naikwade Vishal V.
                                                                                        </td>
                                                                                        <td>
                                                                                            2011-12

                                                                                        </td>
                                                                                        <td>
                                                                                            Bandhan Bank , Nashik.
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            05
                                                                                        </td>
                                                                                        <td> Jadhav Shubhangi Babasabh</td>
                                                                                        <td>
                                                                                            2011-12
                                                                                        </td>
                                                                                        <td>
                                                                                            Nihilent Technology , Pune.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            06
                                                                                        </td>
                                                                                        <td>Hiwrale Sushma J.</td>
                                                                                        <td>
                                                                                            2011-12
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS , Pune..
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            07
                                                                                        </td>
                                                                                        <td>Chavhan Rahul Janardhan</td>
                                                                                        <td>
                                                                                            2011-12
                                                                                        </td>
                                                                                        <td>
                                                                                            PT Midas Daya , Teknologi, Indonesia.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            08
                                                                                        </td>
                                                                                        <td>Aksa Khanr</td>
                                                                                        <td>
                                                                                            2011-12
                                                                                        </td>
                                                                                        <td>
                                                                                            Telcon Technology , Aurangabad.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            09
                                                                                        </td>
                                                                                        <td>Teke Urmila Shivaji</td>
                                                                                        <td>
                                                                                            2011-12
                                                                                        </td>
                                                                                        <td>
                                                                                            Wipro Technology , Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            10
                                                                                        </td>
                                                                                        <td>Satpute Vishal Ratan</td>
                                                                                        <td>
                                                                                            2011-12
                                                                                        </td>
                                                                                        <td>
                                                                                            Tata Steel Ltd, Aurangabad
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            11
                                                                                        </td>
                                                                                        <td>Deshpande Sanket Vivek</td>
                                                                                        <td>
                                                                                            2014-15
                                                                                        </td>
                                                                                        <td>
                                                                                            Ekatta Innovation
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            12
                                                                                        </td>
                                                                                        <td>Zalwar Shubham Manoj</td>
                                                                                        <td>
                                                                                            2014-15
                                                                                        </td>
                                                                                        <td>
                                                                                            Johnson & Johnson
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            13
                                                                                        </td>
                                                                                        <td> Gujar Akshay Bhimrao</td>
                                                                                        <td>
                                                                                            2014-15
                                                                                        </td>
                                                                                        <td>
                                                                                            ICICI GIC
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            14
                                                                                        </td>
                                                                                        <td>Narkhede Pankaj Pramil</td>
                                                                                        <td>
                                                                                            2014-15
                                                                                        </td>
                                                                                        <td>
                                                                                            Cognizant technology
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            15
                                                                                        </td>
                                                                                        <td>Burhade Satyam Dipak</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Atteq Software,Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            16
                                                                                        </td>
                                                                                        <td>Wagh Shrikant Pandurang
                                                                                        </td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            ATOS Intel,Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            17
                                                                                        </td>
                                                                                        <td>Sawant Seema Bhagchand</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS,Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            18
                                                                                        </td>
                                                                                        <td>Thosar Mrunal Chandrabhan</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            IBM India pvt limited
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            19
                                                                                        </td>
                                                                                        <td>Bande Dnyaneshwar Macchindra</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Cognizant Technology solutio
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            20
                                                                                        </td>
                                                                                        <td>Kolte Nikita Tulshiram</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Zcon solutions, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            21
                                                                                        </td>
                                                                                        <td>Joshi Punam Surendra</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Quality kiosk technolg Pvt Ltd, Mumbai
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            22
                                                                                        </td>
                                                                                        <td>Magar Vaishali Devidas</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Selleck India pvt Ltd, Hyderabad
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            23
                                                                                        </td>
                                                                                        <td>Narwade Pranita Jayendra</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Ekatta Innovation
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            24
                                                                                        </td>
                                                                                        <td>Salunke Ajinkya Kalyan</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Zebra Technology, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            25
                                                                                        </td>
                                                                                        <td>Surse Aarti Ramraor</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            26
                                                                                        </td>
                                                                                        <td>hinde Supriya Suresh</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            27
                                                                                        </td>
                                                                                        <td>Shinde Ajay Balasaheb</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Infosys, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            28
                                                                                        </td>
                                                                                        <td>Gadwe Priyanka Rajendra</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            29
                                                                                        </td>
                                                                                        <td>Deshmukh Sneha Netaji</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            L & T, Mumbai
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            30
                                                                                        </td>
                                                                                        <td>Arshiya Naaz Shaikh Azeezr</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Samata Foundation, Moin UL Ullum School, Aurangabad
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            31
                                                                                        </td>
                                                                                        <td>Kulkarni Sanket Uday</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Infosis ltd, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            32
                                                                                        </td>
                                                                                        <td>Manware Anuja Ravindrar</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Dhoot Transmission Pvt. Ltd
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            33
                                                                                        </td>
                                                                                        <td>Kale Shubham Dileep</td>
                                                                                        <td>
                                                                                            2015-16
                                                                                        </td>
                                                                                        <td>
                                                                                            Intellinum Solutions India Pvt Ltd, Mumbai
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            34
                                                                                        </td>
                                                                                        <td>Wankhede Titiksha Ravindra</td>
                                                                                        <td>
                                                                                            2015-17
                                                                                        </td>
                                                                                        <td>
                                                                                            Infosys, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            35
                                                                                        </td>
                                                                                        <td>Trigote Deepali Dadarao</td>
                                                                                        <td>
                                                                                            2015-17< /center>
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            36
                                                                                        </td>
                                                                                        <td>Tongire Shweta Kanthilal</td>
                                                                                        <td>
                                                                                            2015-17
                                                                                        </td>
                                                                                        <td>
                                                                                            Capgemini, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            37
                                                                                        </td>
                                                                                        <td>Patil Pallavi Sanjay</td>
                                                                                        <td>
                                                                                            2015-17
                                                                                        </td>
                                                                                        <td>
                                                                                            Bussiness Technology
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            38
                                                                                        </td>
                                                                                        <td>Devatwal Yogeshwari Sanjay</td>
                                                                                        <td>
                                                                                            2015-17
                                                                                        </td>
                                                                                        <td>
                                                                                            Infosys, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            39
                                                                                        </td>
                                                                                        <td>Niture Akruti Omprakash</td>
                                                                                        <td>
                                                                                            2015-17
                                                                                        </td>
                                                                                        <td>
                                                                                            Capgemini, Pune
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            40
                                                                                        </td>
                                                                                        <td>Jaitmal Ishwar Ramesh</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            41
                                                                                        </td>
                                                                                        <td>Kharabe Neha Prabhakar</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS
                                                                                        </td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            42
                                                                                        </td>
                                                                                        <td>Pathan Shelkhan Khamruddin</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            43
                                                                                        </td>
                                                                                        <td>Dudhe Bhushan Jayant</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            Cognizant
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            44
                                                                                        </td>
                                                                                        <td>Nagre Rushikesh Ramdas
                                                                                        </td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            45
                                                                                        </td>
                                                                                        <td>Kulkarni Kajal Prashant</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            Fujitsu japan
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            46
                                                                                        </td>
                                                                                        <td>Tipare Bhagyashree Pravin</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            Accenture
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            47
                                                                                        </td>
                                                                                        <td>Dhumal Rahul Sainath</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            NEXBENICS
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            48
                                                                                        </td>
                                                                                        <td>Chavan Apeksha Yashodhanr</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            PROSTERA
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            49
                                                                                        </td>
                                                                                        <td>Shende Swapnil Mohan</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            InfoBeans
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            50
                                                                                        </td>
                                                                                        <td>Satpute Dipak Ramesh</td>
                                                                                        <td>
                                                                                            2015-18
                                                                                        </td>
                                                                                        <td>
                                                                                            Accenture
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            51
                                                                                        </td>
                                                                                        <td>Mahadik Pooja Rajendra</td>
                                                                                        <td>
                                                                                            2015-19
                                                                                        </td>
                                                                                        <td>
                                                                                            TCS
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            52
                                                                                        </td>
                                                                                        <td>Jadhav Vikaschandra Sanjay
                                                                                        </td>
                                                                                        <td>
                                                                                            2015-19
                                                                                        </td>
                                                                                        <td>
                                                                                            Aloha Technology, Baner, Pune.
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Fourth Accordion end-->
                                                            <!-- Fifth Accordion Start -->
                                                            <div class="accordion-item p-2 ">
                                                                <h2 class="accordion-header" id="headingFifth">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                                                        DEPARTMENT MOU's
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of Company
                                                                                        </th>
                                                                                        <th>
                                                                                            From <br>
                                                                                        </th>
                                                                                        <th>
                                                                                            Upto <br>
                                                                                        </th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>And We Media</td>
                                                                                        <td>
                                                                                            05/02/2024
                                                                                        </td>
                                                                                        <td>
                                                                                            05/02/2027
                                                                                        </td>


                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>Just Logic Software Pvt. Ltd.</td>
                                                                                        <td>
                                                                                            05/02/2024
                                                                                        </td>
                                                                                        <td>
                                                                                            05/02/2027
                                                                                        </td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>Smartpacey Institute & Technology Solution Pvt. Ltd.</td>
                                                                                        <td>
                                                                                            05/02/2024
                                                                                        </td>
                                                                                        <td>
                                                                                            05/02/2027
                                                                                        </td>

                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Fifth Accordion end -->

                                                            <!-- Sixth Accordion start -->
                                                            <div class="accordion-item p-2 ">
                                                                <h2 class="accordion-header" id="headingSixth">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
                                                                        DEPARTMENT PROJECTS
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseSixth" class="accordion-collapse collapse" aria-labelledby="headingSixth"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="col-md-12">
                                                                            <div class="heading-content">
                                                                            </div>

                                                                            <p><strong><u>A.Y. 2021-22</u></strong></p>
                                                                            <ul>
                                                                                <li style="list-style-type: disc;">Online Student Exam Portal</li>
                                                                                <li style="list-style-type: disc;">Stock Price Prediction</li>
                                                                                <li style="list-style-type: disc;"> Online Ayurvedic Medicine Website</li>
                                                                                <li style="list-style-type: disc;">Online Chatting App</li>
                                                                                <li style="list-style-type: disc;"> E-Submission System</li>
                                                                                <li style="list-style-type: disc;">Voice Recognition System</li>
                                                                                <li style="list-style-type: disc;">Farming Assistance Web Service</li>
                                                                                <li style="list-style-type: disc;"> Weather Forecasting For Farming</li>
                                                                                <li style="list-style-type: disc;">Application for Historical Places in Aurangabad</li>
                                                                                <li style="list-style-type: disc;">Pedometer</li>
                                                                                <li style="list-style-type: disc;">Daily Expense Tracker System</li>
                                                                                <li style="list-style-type: disc;">Blood Donation System</li>
                                                                                <li style="list-style-type: disc;"> Quiz Application</li>
                                                                                <li style="list-style-type: disc;">Shopping Web Application</li>
                                                                                <li style="list-style-type: disc;">Battery Operator Car using Android Phone</li>
                                                                                <li style="list-style-type: disc;">Criminal Face Detection System</li>
                                                                                <li style="list-style-type: disc;">Online food ordering Website</li>
                                                                                <li style="list-style-type: disc;">Alumni College Website</li>
                                                                                <li style="list-style-type: disc;">Crime Rate Prediction</li>

                                                                            </ul>
                                                                            <p><strong><u>A.Y. 2022-23</u></strong></p>
                                                                            <ul>
                                                                                <li style="list-style-type: disc;">"Go Green" Plants Shopping Website</li>
                                                                                <li style="list-style-type: disc;">Go for Pure Oil</li>
                                                                                <li style="list-style-type: disc;">Hospital Management System</li>
                                                                                <li style="list-style-type: disc;">School Management System</li>
                                                                                <li style="list-style-type: disc;">Wedding Management System</li>
                                                                                <li style="list-style-type: disc;">Tourism Management System</li>
                                                                                <li style="list-style-type: disc;">E farming System</li>
                                                                                <li style="list-style-type: disc;">vehicle plate Detection System</li>
                                                                                <li style="list-style-type: disc;">Online Optical shop</li>
                                                                                <li style="list-style-type: disc;">Restaurant Management System</li>
                                                                                <li style="list-style-type: disc;">Ayuevedic and general product Website</li>
                                                                                <li style="list-style-type: disc;">Coffee Shop Management System</li>
                                                                                <li style="list-style-type: disc;">BUS Pass Management system</li>
                                                                                <li style="list-style-type: disc;">Car Selling App</li>
                                                                                <li style="list-style-type: disc;">E-commerce shoes store</li>
                                                                                <li style="list-style-type: disc;">Café's Management Using QR</li>
                                                                                <li style="list-style-type: disc;">E Health Care Online Consultation</li>
                                                                                <li style="list-style-type: disc;">Online Jwellery Shop</li>
                                                                                <li style="list-style-type: disc;">Fingerprint Based ATM</li>
                                                                                <li style="list-style-type: disc;">Audio Book Generator</li>
                                                                                <li style="list-style-type: disc;">Accounting software</li>
                                                                                <li style="list-style-type: disc;">Student result Management System</li>
                                                                                <li style="list-style-type: disc;">obstacle Avoiding Robot car</li>
                                                                                <li style="list-style-type: disc;">Online Banquet Booking system</li>
                                                                                <li style="list-style-type: disc;">Valley Game</li>
                                                                                <li style="list-style-type: disc;">Weather Forcasting</li>
                                                                                <li style="list-style-type: disc;">GYM management system</li>
                                                                                <li style="list-style-type: disc;">Polychamp MSBTE resource locator</li>



                                                                            </ul>

                                                                            <p class="mt-2"><strong><u>A.Y. 2023-24</u></strong></p>
                                                                            <ul>
                                                                                <li style="list-style-type: disc;">Child Health Development Application</li>
                                                                                <li style="list-style-type: disc;">Face Attendance System</li>
                                                                                <li style="list-style-type: disc;">Movement Capture and Learning</li>
                                                                                <li style="list-style-type: disc;">Novels sites</li>
                                                                                <li style="list-style-type: disc;">Farmer Web Based Application</li>
                                                                                <li style="list-style-type: disc;">Develop The Application for Beauty Parlour</li>
                                                                                <li style="list-style-type: disc;">College Predictor</li>
                                                                                <li style="list-style-type: disc;">Sponsered Project</li>
                                                                                <li style="list-style-type: disc;">Medical Website</li>
                                                                                <li style="list-style-type: disc;">Nearby PG Website</li>
                                                                                <li style="list-style-type: disc;">Home Services Application</li>
                                                                                <li style="list-style-type: disc;">Puppies Home</li>
                                                                                <li style="list-style-type: disc;">Academia Hub</li>
                                                                                <li style="list-style-type: disc;">She Safe App</li>
                                                                                <li style="list-style-type: disc;">Sponsored Online Mobile and Repair Shop(Mauli Mobile Shop)</li>
                                                                                <li style="list-style-type: disc;">E-Grampanchayat</li>
                                                                                <li style="list-style-type: disc;">Stationary Store</li>
                                                                                <li style="list-style-type: disc;">Three Tier Verification of Scholarship for Home State Student</li>
                                                                                <li style="list-style-type: disc;">Heart Disease Detection App</li>
                                                                                <li style="list-style-type: disc;">Construction Estimator</li>
                                                                                <li style="list-style-type: disc;">Paretech Website</li>
                                                                                <li style="list-style-type: disc;">Daily Expence Tracker System</li>
                                                                                <li style="list-style-type: disc;">Jwellery Shop</li>
                                                                                <li style="list-style-type: disc;">Perfume Shop</li>
                                                                                <li style="list-style-type: disc;">Buy Book Website</li>

                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Sixth Accordian end -->
                                                            <!-- Seventh Accordion Start -->
                                                            <div class="accordion-item p-2 ">
                                                                <h2 class="accordion-header" id="headingSeventh">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSeventh" aria-expanded="false" aria-controls="collapseSeventh">
                                                                        DEPARTMENT ADVISORY BOARD (DAB)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseSeventh" class="accordion-collapse collapse" aria-labelledby="headingSeventh"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">

                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of the Committee Member
                                                                                        </th>
                                                                                        <th>
                                                                                            Details
                                                                                        </th>

                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td> Mrs.R. S. Pophale</td>
                                                                                        <td>
                                                                                            HOD
                                                                                        </td>



                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>Mrs. A. P .Borlepwar</td>
                                                                                        <td>
                                                                                            Sr. Faculty
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>Mrs. A. K. Kudlikar</td>
                                                                                        <td>
                                                                                            Sr. Faculty
                                                                                        </td>


                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            04
                                                                                        </td>
                                                                                        <td> Mrs. S. R. Rathi</td>
                                                                                        <td>
                                                                                            Academician
                                                                                        </td>


                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            05
                                                                                        </td>
                                                                                        <td>Mr. A. S. Nagrik</td>
                                                                                        <td>
                                                                                            Academician
                                                                                        </td>


                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            06
                                                                                        </td>
                                                                                        <td>Mr. Nikhil Brahmbhatt</td>
                                                                                        <td>
                                                                                            Employer (Industry Representative)
                                                                                        </td>


                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            07
                                                                                        </td>
                                                                                        <td>Mr. Sanket Deshpande</td>
                                                                                        <td>
                                                                                            Employer (Industry Representative)
                                                                                        </td>


                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            08
                                                                                        </td>
                                                                                        <td>Mr. Gaurav Kale</td>
                                                                                        <td>
                                                                                            Alumni Representative
                                                                                        </td>


                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            09
                                                                                        </td>
                                                                                        <td>Mrs. Supriya Shinde</td>
                                                                                        <td>
                                                                                            Alumni Representative
                                                                                        </td>


                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            10
                                                                                        </td>
                                                                                        <td> Mr. Nishant Wagh</td>
                                                                                        <td>
                                                                                            Parents Representative
                                                                                        </td>


                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            11
                                                                                        </td>
                                                                                        <td>Mr.Maroti Dande</td>
                                                                                        <td>
                                                                                            Parents Representative
                                                                                        </td>


                                                                                    </tr>


                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!--Seventh Accordion end -->

                                                            <!-- Eight Accordion Start -->
                                                            <div class="accordion-item p-2 ">
                                                                <h2 class="accordion-header" id="headingEight">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                        PROGRAMME ASSESSMENT COMMITTEE (PAC)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">

                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Sr. No.
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of Faculty
                                                                                        </th>
                                                                                        <th>
                                                                                            Representation <br>
                                                                                        </th>
                                                                                        <th>
                                                                                            Designation <br>
                                                                                        </th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>Mrs.R. S. Pophale</td>
                                                                                        <td>
                                                                                            Chairman
                                                                                        </td>
                                                                                        <td>
                                                                                            HOD
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>Mrs. A. P .Borlepwar</td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Sr. Faculty
                                                                                        </td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>Mrs. P.V. Polshetwar</td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Sr. Faculty
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            04
                                                                                        </td>
                                                                                        <td>Mrs. A. K. Kudlikar</td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Sr. Faculty
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            05
                                                                                        </td>
                                                                                        <td>Mrs. S. S. Mopari</td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Sr. Faculty
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            06
                                                                                        </td>
                                                                                        <td>Mr. D. Y. Vyavahare </td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Lecturer
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            07
                                                                                        </td>
                                                                                        <td>Ms. S. A. Samrat </td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Lecturer
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            08
                                                                                        </td>
                                                                                        <td>Mrs. M. V. Shisode</td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Lecturer
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            09
                                                                                        </td>
                                                                                        <td>Ms.H. M. Pathan</td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Lecturer
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            10
                                                                                        </td>
                                                                                        <td>Mrs. K. A. Sonawane</td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Lecturer
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            11
                                                                                        </td>
                                                                                        <td>Mr. M. A. Dhopte </td>
                                                                                        <td>
                                                                                            Member
                                                                                        </td>
                                                                                        <td>
                                                                                            Lecturer
                                                                                        </td>

                                                                                    </tr>


                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!--Eight Accordion end -->
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