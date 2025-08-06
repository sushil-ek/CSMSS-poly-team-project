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
                <h2 class="breadcrumb-title">Electrical Engineering</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Electrical Engineering</li>
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
                                        <a href="#"><i class="far fa-long-arrow-right"></i>Electrical Engineering</a>
                                        <a href="mechanical-department.php"><i class="far fa-long-arrow-right"></i>Mechanical Engineering</a>
                                        <a href="electronics-telecommunication-department.php"><i class="far fa-long-arrow-right"></i>Electronics & Telecommunication Engineering</a>
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
                                            <div class="carousel-item active">
                                                <!-- img Laboratory open-->
                                                <img src="assets\img\department\department-171.jpg" alt="Laboratory" style="height:450px ; width:800px">
                                                <!-- img Laboratory close-->
                                            </div>
                                            <div class="carousel-item">
                                                <!-- img Passout Batch 2022-23 open-->
                                                <img src="assets\img\department\department-174.jpg" alt="Passout Batch 2022-23" style="height:450px ; width:800px">
                                                <!-- img Passout Batch 2022-23 close-->
                                            </div>
                                            <div class="carousel-item">
                                                <!-- img Passout Batch 2022-23 open-->
                                                <img src="assets\img\department\department-469.jpg" alt="Passout Batch 2022-23" style="height:450px ; width:800px">
                                                <!-- img Passout Batch 2022-23 close-->
                                            </div>
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
                                    <h3 class="mb-20"> Electrical engineering </h3>
                                    <p class="mb-20" style="text-align: justify;">
                                        department was established in 2010. It is a field of engineering that generally
                                        deals with the study and application of electricity, electronics, and
                                        electromagnetism. This field first became an identifiable occupation in the
                                        latter half of the 19th century after commercialization of the electric
                                        telegraph, the telephone, and electric power distribution and use. Subsequently,
                                        broadcasting and recording media made electronics part of daily life. The
                                        invention of the transistor and, subsequently, the integrated circuit brought
                                        down the cost of electronics to the point where they can be used in almost any
                                        household object. </p>
                                    <p class="mb-20" style="text-align: justify;"> Electrical engineering has now subdivided into a wide range of
                                        subfields including electronics, digital computers, power
                                        engineering,telecommunications, control systems, RF engineering, signal
                                        processing, instrumentation, and microelectronics. The subject of electronic
                                        engineering is often treated as its own subfield but it intersects with all the
                                        other subfields, including the power electronics of power engineering.
                                        <!-- img in civil page -->
                                        <!-- <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/01.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/02.jpg" alt="">
                                        </div>
                                        </div> -->
                                    <p class="mb-20" style="text-align: justify;">
                                        Electrical engineers typically hold a degree in electrical engineering or
                                        electronic engineering. Practicing engineers may have professional certification
                                        and be members of a professional body. Such bodies include the Institute of
                                        Electrical and Electronic Engineers (IEEE) and theInstitution of Engineering and
                                        Technology (IET).
                                    </p>
                                    <p class="mb-20" style="text-align: justify;"> Electrical graduate are employed in Electricity Boards/Utility
                                        companies and large industries as engineers and managers, responsible for
                                        installation, maintenance, operation of power handling equipments and systems.
                                        Industries manufacturing large electrical machines and equipments employ
                                        engineers in design, production and testing. Educational Institutions and
                                        Research establishments recruit electrical engineers as faculty and scientists.
                                    </p>
                                    <!-- Department Vision start -->
                                    <div class="mb-3">
                                        <h3 class="mb-3">Department Vision</h3>
                                        <p>"To develop the competent Electrical Engineers with hands-on skills and moral
                                            values to face the challenges of Society and Industry"</p>
                                    </div>
                                    <!-- Department Vision end -->
                                    <!-- Department Mission start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Department Mission</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i>To impart the technical knowledge of the
                                                discipline among the students with reference to multidisciplinary
                                                approach
                                            </li>
                                            <li><i class="far fa-check"></i>To provide platform to the students through
                                                strong linkage with industry for their professional skills</li>
                                            <li><i class="far fa-check"></i>To create effective awareness among the
                                                students regarding social and environment responsibilities
                                            </li>
                                            <li><i class="far fa-check"></i>To prepare students having ethical standards
                                                and leadership qualities for life-long learning
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Department Mission end -->
                                    <!-- Future Plan Start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Future Plan</h3>
                                        <ul class="department-single-list">
                                            <b>Short Term Goals</b>
                                            <li><i class="far fa-check"></i>Entrepreneurship development: Promote
                                                entrepreneurial skills and encourage students to develop their own
                                                projects</li>
                                            <li><i class="far fa-check"></i>Placement assistance: Improve placement
                                                records through career counseling and training</li>
                                            <li><i class="far fa-check"></i>Industry collaborations: Establish
                                                collaborations with local industries for projects and placements </li>
                                            <li><i class="far fa-check"></i>Improve pass percentage: Aim for a
                                                significant increase in the overall pass percentage of the department
                                            </li>
                                            <br>
                                            <b>Long Term Goals</b>
                                            <li><i class="far fa-check"></i>Become a Center of Excellence: Position the
                                                department as a leading institution for electrical engineering diploma
                                                programs in the region</li>
                                            <li><i class="far fa-check"></i>Research and Development: Foster a culture
                                                of research and innovation among faculty and students</li>
                                            <li><i class="far fa-check"></i>Industry-Aligned Programs: Develop
                                                specialized programs to meet the specific needs of the local industry
                                            </li>
                                            <li><i class="far fa-check"></i>Social Responsibility: Engage in community
                                                service projects related to electrical engineering, such as energy
                                                efficiency initiatives.
                                            </li>
                                            <li><i class="far fa-check"></i>Alumni Network: Build a strong alumni
                                                network to support the department's growth</li>
                                            <li><i class="far fa-check"></i>Accreditation: Achieve and maintain national
                                                and international accreditation for the department</li>
                                        </ul>
                                    </div>
                                    <!-- Future Plan Start -->
                                    <!-- PEO's start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                        <p><b class="text-dark">PEO 1:</b>Provide socially responsible, environment friendly solutions to electrical engineering relate broad based problems adopting professional ethics.</p>
                                        <p> <b class="text-dark">PEO 2:</b> Adapt state of the art electrical engineering broad based technologies to work in multi-disciplinary work.</p>
                                        <p><b class="text-dark">PEO 3:</b> Solve Broad-based problems individually and as a team member communicating effectively in the world of work.</p>

                                    </div>
                                    <!--PEO's end  -->
                                    <!-- PSO start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                        <p><b class="text-dark">PSO1:</b> Electrical Equipment: Maintain various types of rotating and static electrical equipments.</p>
                                        <p><b class="text-dark">PSO2:</b> Electric Power Systems: Maintain different types of electrical power systems.</p>
                                    </div>
                                    <!-- PSO's end -->
                                    <!-- PO's start  -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Outcome(PO's)</h3>
                                        <p><b class="text-dark">PO1:</b> Basic and Discipline specific knowledge: Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.
                                        <p><b class="text-dark">PO2:</b> Problem analysis: Identify and analyze well-defined engineering problems using codified standard methods.</p>
                                        <p><b class="text-dark">PO3:</b> Design/ development of solutions: Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.
                                        <p>
                                        <p><b class="text-dark">PO4:</b> Engineering Tools, Experimentation and Testing:
                                            Apply modern engineering tools and appropriate technique to conduct standard
                                            tests and measurements.</p>
                                        <p><b class="text-dark">PO5:</b> Engineering practices for society,
                                            sustainability and environment: Apply appropriate technology in context of
                                            society, sustainability, environment and ethical practices.</p>
                                        <p><b class="text-dark">PO6:</b> Project Management: Use engineering management
                                            principles individually, as a team member or a leader to manage projects and
                                            effectively communicate about well-defined engineering activities.</p>
                                        <p><b class="text-dark">PO7:</b> Life-long learning: Ability to analyze
                                            individual needs and engage in updating in the context of technological
                                            changes.</p>
                                    </div>
                                    <!-- PO's end -->
                                </div>
                            </div>
                            <h2 class="mb-3 ms-4 ps-1 text-black">Admission Intake Capacity : 60</h2>
                            <!-- Accodian start -->
                            <div class="container my-5">
                                <div class="accordion" id="hodAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                HOD Message
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#hodAccordion">
                                            <div class="accordion-body">
                                                <div class="row mt-40">
                                                    <div class="col-md-3 text-center mb-3 float-left">
                                                        <!-- Image Tag (HOD Image) -->
                                                        <img src="assets\img\department\HOD-Electrical.jpg" alt="HOD"
                                                            class="hod-image float-start">
                                                        <div class="hod-name mt-2">Mr. C. V. Rahane</div>
                                                        <div class="hod-title">HOD</div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>Dear Electrical Students,</p>
                                                        <p style="text-align: justify;">A warm welcome in the electrical department! We are thrilled to have you
                                                            on board and to be a part of academic journey. As you begin your
                                                            studies, I want to assure you that our department is committed to
                                                            provide a comprehensive and engaging learning experience. Our faculties
                                                            are eager us to help, inculcate the skills and knowledge needed to be
                                                            successful in the field of electrical engineering.</p>
                                                        <p style="text-align: justify;">In the coming years, you will have the opportunity to explore a wide
                                                            range of topics, from circuit analysis and electronics to power</p>
                                                    </div>
                                                    <div class="col-md-12">

                                                        <p style="text-align: justify;">systems and control engineering. You will also have access to
                                                            state-of-the-art laboratories and facilities, where you can
                                                            appltheoretical concepts to real-world problems.
                                                            I encourage you to be curious, ask questions, and seek help when needed.
                                                            Our faculty and staff are here to support you every step of the way.
                                                            Once again, welcome in the electrical department! We look forward to see
                                                            your growth and achievements.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Section Start -->

                                <!--faculty-details-->

                                <!--table-started-->
                                <div class="table-responsible">
                                    <table class=" table table-bordered table-hover overflow-x:scroll">
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
                                                <td rowspan="1">
                                                    01
                                                </td>
                                                <td rowspan="1">Mr. RAHANE CHANDRASHEKHAR VINAYAK</td>
                                                <td>
                                                    B.E.,M.E.
                                                </td>
                                                <th>
                                                    HOD
                                                </th>
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
                                                <td rowspan="1">Mr. MALI SATISH
                                                    KUMAR RAMLAKHAN</td>
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
                                                    03
                                                </td>
                                                <td rowspan="1">Mr MOMIN FAISAL
                                                    AHMED</td>
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
                                                    04
                                                </td>
                                                <td rowspan="1">Mr. POTE AKSHAY
                                                    MUNJABHAU</td>
                                                <td>
                                                    B.E.,M.TECH
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
                                                <td rowspan="1">Mr. MITKAR AVINASH
                                                    HARISHCHANDRA</td>
                                                <td>
                                                    B.E.,M.TECH.
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
                                                    06
                                                </td>
                                                <td rowspan="1">Mr.JADHAV PRADIP
                                                    RAMDAS</td>
                                                <td>
                                                    B.E.,M.TECH.
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
                                                <td rowspan="1">Mrs.BANSOD VARSHA
                                                    ASHOK</td>
                                                <td>
                                                    B.E.,M.TECH.
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
                                                <td rowspan="1">Ms. PATIL USHA
                                                    ANNARAO</td>
                                                <td>
                                                    M.SC.(MATH)
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
                                                <td>
                                                    09
                                                </td>
                                                <td>Mrs.AUTE PRANJALI
                                                    JAGDISHRAO</td>
                                                <td>
                                                    M.SC,B.ED <br>(PHYSICS)
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
                                <!--table-end-->
                                <!-- Accordin Main Start -->

                                <!--Accordin section started here-->
                                <section id="Accordion-section">
                                    <div class="faq-area">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 w-100">
                                                    <!--first accordion started-->
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2" id="headingOne">
                                                                <button
                                                                    class="accordion-button collapsed"
                                                                    type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseOne">
                                                                    TOPPERS
                                                                </button>
                                                            </h2>
                                                            <div
                                                                id="collapseOne"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <ul>
                                                                        <li style="list-style-type: disc">
                                                                            Following are the overall toppers of civil engineering department
                                                                            for the academic year 2022-23.
                                                                        </li>
                                                                    </ul>
                                                                    <h5 style="margin-bottom: 10px"><u>Toppers of FY EE</u></h5>
                                                                    <!--first table started-->

                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr. No.</th>
                                                                                    <th>Name of Student</th>
                                                                                    <th>Percentage <br /></th>
                                                                                    <th>
                                                                                        Class Awarded
                                                                                        <br />
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">01</td>
                                                                                    <td rowspan="1">BADGUJAR SHANTANUE</td>
                                                                                    <td>79.65%</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">02</td>
                                                                                    <td rowspan="1">RAUT UDAY</td>
                                                                                    <td>76.94%</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">03</td>
                                                                                    <td rowspan="1">UBALE SIDDHANT AJINATH</td>
                                                                                    <td>75.41%</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--first table end-->
                                                                    <!--second table stared-->
                                                                    <h5 style="margin-bottom: 10px; margin-top: 20px">
                                                                        <u>Toppers of SY EE</u>
                                                                    </h5>

                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr. No.</th>
                                                                                    <th>Name of Student</th>
                                                                                    <th>Percentage <br /></th>
                                                                                    <th>
                                                                                        Class Awarded
                                                                                        <br />
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">01</td>
                                                                                    <td rowspan="1">NIL OMKAR BHIMA</td>
                                                                                    <td>81.13</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">02</td>
                                                                                    <td rowspan="1">TAYADE VEDANT SANTOSH</td>
                                                                                    <td>74</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">03</td>
                                                                                    <td rowspan="1">RATHOD NEHA POPAT</td>
                                                                                    <td>73.25</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--second table end-->

                                                                    <!--third table started-->
                                                                    <h5 style="margin-bottom: 10px; margin-top: 20px">
                                                                        <u>Toppers of TY EE</u>
                                                                    </h5>

                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th width="10%">Sr. No.</th>
                                                                                    <th width="30%">Name of Student</th>
                                                                                    <th>Percentage <br /></th>
                                                                                    <th>
                                                                                        Class Awarded
                                                                                        <br />
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">01</td>
                                                                                    <td rowspan="1">BANKAR OM RAJU</td>
                                                                                    <td>88.13</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">02</td>
                                                                                    <td rowspan="1">GAWANDE SUPRIT KAILAS</td>
                                                                                    <td>85.1</td>
                                                                                    <td>First Class with Distinction</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">03</td>
                                                                                    <td rowspan="1">BAHEKAR SHIVRAJ ASARAM</td>
                                                                                    <td>84.2</td>
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
                                                                    class="accordion-button collapsed"
                                                                    type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    STUDENTS' ACHIEVEMENT
                                                                </button>
                                                            </h2>
                                                            <div
                                                                id="collapseTwo"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <!--second table started-->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr. No.</th>
                                                                                    <th>Name of Event</th>
                                                                                    <th>Year <br /></th>
                                                                                    <th>Organized <br /></th>
                                                                                    <th>
                                                                                        Name of Student
                                                                                        <br />
                                                                                    </th>
                                                                                    <th>Remark</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">01</td>
                                                                                    <td rowspan="1">MSBTE Project Competition</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>MSBTE</td>
                                                                                    <td>Nilesh Jamdhade, Saas Sayeed and Atharva Kalaskar</td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">02</td>
                                                                                    <td rowspan="1">IEDSSA</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>Kabaddi</td>
                                                                                    <td>
                                                                                        Mangesh Pawar, Atharva kalaskar, Gopal Rathod & Krushna Rajput
                                                                                    </td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">03</td>
                                                                                    <td rowspan="1">IEDSSA</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>Chess</td>
                                                                                    <td>Balasaheb Dudhsagar</td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">04</td>
                                                                                    <td rowspan="1">IEDSSA</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>Kho-Kho</td>
                                                                                    <td>
                                                                                        Vivek Kolte, Jayraj Gadekar,Yogesh Sananse, Harshvardhan and
                                                                                        Vedant Tayade & Sakshi Salunkhe
                                                                                    </td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">05</td>
                                                                                    <td rowspan="1">IEDSSA</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>Basketball</td>
                                                                                    <td>Pranav Magar</td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">06</td>
                                                                                    <td rowspan="1">IEDSSA</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>Athletics</td>
                                                                                    <td>Atharva Kalaskar</td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">07</td>
                                                                                    <td rowspan="1">IEDSSA</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>Volleyball</td>
                                                                                    <td>Tejas Deore & Vivek Kolte</td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">08</td>
                                                                                    <td rowspan="1">State Level Technical Quiz Competition</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>CSMSS COP</td>
                                                                                    <td>
                                                                                        Asef Khan, Balaji Mote, Dhanraj Borate, Nil Omkar, Balasaheb
                                                                                        Dudhsagar & Om Bankar
                                                                                    </td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">09</td>
                                                                                    <td rowspan="1">State Level Technical Quiz Competition</td>
                                                                                    <td>2023-24</td>
                                                                                    <td>MIT Polytechnic,Chh. Sambhajinagar</td>
                                                                                    <td>
                                                                                        Vivek Kolte, Tejas Deore, Jayraj Gadekar, Arnav Khadse and
                                                                                        Krushna Rajput
                                                                                    </td>
                                                                                    <td>Participant</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--second table end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--second Accordion end-->

                                                        <!--Third Accordion Start -->
                                                        <div class="accordion-item p-2">
                                                            <h2 class="accordion-header" id="headingThird">
                                                                <button
                                                                    class="accordion-button collapsed"
                                                                    type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThird"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseThird">
                                                                    DEPARTMENT ADVISORY BOARD (DAB)
                                                                </button>
                                                            </h2>
                                                            <div
                                                                id="collapseThird"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingThird"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <!--first table started-->

                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr. No.</th>
                                                                                    <th>Name of the Committee Member</th>
                                                                                    <th>Details <br /></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">01</td>
                                                                                    <td rowspan="1">Mr. Rahane C. V.</td>
                                                                                    <td>HOD</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">02</td>
                                                                                    <td rowspan="1">Mr. Mitkar A. H.</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">03</td>
                                                                                    <td rowspan="1">Mr. Satish kumar</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">04</td>
                                                                                    <td rowspan="1">Mr. Channekar Pravin Arjun</td>
                                                                                    <td>Alumni Representative</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">05</td>
                                                                                    <td rowspan="1">Mr. Kartik Pandurang Lande</td>
                                                                                    <td>Alumni Representative</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">06</td>
                                                                                    <td rowspan="1">Dr. Karpe S. R.</td>
                                                                                    <td>Academician</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">07</td>
                                                                                    <td rowspan="1">Mr. Anil Gawade</td>
                                                                                    <td>Employer (Industry Representative)</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">08</td>
                                                                                    <td rowspan="1">Mrs. Rupali Agrawal</td>
                                                                                    <td>Employer (Industry Representative)</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">09</td>
                                                                                    <td rowspan="1">Mr. Phulke Sandesh</td>
                                                                                    <td>Parents Representative</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">10</td>
                                                                                    <td rowspan="1">Mr. Kale Gorakh</td>
                                                                                    <td>Parents Representative</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Third Accordion end -->

                                                        <!-- Fourth Accordion start -->
                                                        <div class="accordion-item p-2">
                                                            <h2 class="accordion-header" id="headingFourth">
                                                                <button
                                                                    class="accordion-button collapsed"
                                                                    type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFourth"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseFourth">
                                                                    PROGRAMME ASSESSMENT COMMITTEE (PAC)
                                                                </button>
                                                            </h2>
                                                            <div
                                                                id="collapseFourth"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingFourth"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr. No.</th>
                                                                                    <th>Name of Faculty</th>
                                                                                    <th>Representation <br /></th>
                                                                                    <th>Designation <br /></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">01</td>
                                                                                    <td rowspan="1">Mr. Rahane C. V.</td>
                                                                                    <td>Chairman</td>
                                                                                    <td>HOD</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">02</td>
                                                                                    <td rowspan="1">Mr. Mitkar A. H.</td>
                                                                                    <td>Member</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">03</td>
                                                                                    <td rowspan="1">Mr. Satish kumar</td>
                                                                                    <td>Member</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">04</td>
                                                                                    <td rowspan="1">Mr. Faisal M. A.</td>
                                                                                    <td>Member</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">05</td>
                                                                                    <td rowspan="1">Mr. Pote A. M.</td>
                                                                                    <td>Member</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">06</td>
                                                                                    <td rowspan="1">Mr. Jadhav P. R.</td>
                                                                                    <td>Member</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">07</td>
                                                                                    <td rowspan="1">Mrs. Bansod V. A.</td>
                                                                                    <td>Member</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">08</td>
                                                                                    <td rowspan="1">Mrs. Aute P. J.</td>
                                                                                    <td>Member</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">09</td>
                                                                                    <td rowspan="1">Mrs. Patil U. A.</td>
                                                                                    <td>Member</td>
                                                                                    <td>Lecturer</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Fourth Accordion end -->
                                                        <!--fifth accordion started-->

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2" id="headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseOne">
                                                                    LIST OF LABORATORIES
                                                                </button>
                                                            </h2>
                                                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingOne"
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
                                                                                    <th>

                                                                                        Cost of Equipments (Rs.) <br>

                                                                                    </th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        01
                                                                                    </td>
                                                                                    <td rowspan="1">Electric Machine Laboratory</td>
                                                                                    <td>
                                                                                        806151
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        02
                                                                                    </td>
                                                                                    <td rowspan="1">Switchgear and Protection Laboratory</td>
                                                                                    <td>
                                                                                        155719
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        03
                                                                                    </td>
                                                                                    <td rowspan="1">Electrical Workshop</td>
                                                                                    <td>
                                                                                        8450
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        04
                                                                                    </td>
                                                                                    <td rowspan="1">Power Electronic Laboratory</td>
                                                                                    <td>
                                                                                        74300
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        05
                                                                                    </td>
                                                                                    <td rowspan="1">Basic Electrical Engineering Laboratory</td>
                                                                                    <td>
                                                                                        262281
                                                                                    </td>

                                                                                </tr>

                                                                                <!-- and so on... -->
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--fifth Accordion end-->
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <!--six Accordion start-->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                                    OUR ALUMNI
                                                                </button>
                                                            </h2>
                                                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingTwo"
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

                                                                                        Name of Student

                                                                                    </th>
                                                                                    <th>

                                                                                        Year of Passing <br>

                                                                                    </th>
                                                                                    <th>

                                                                                        Achievement Details <br>

                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        01
                                                                                    </td>
                                                                                    <td rowspan="1">Channekar Pravin Arjun</td>
                                                                                    <td>
                                                                                        2022-23
                                                                                    </td>
                                                                                    <td>
                                                                                        Placed in John Deere India Pvt. Ltd.
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        02
                                                                                    </td>
                                                                                    <td rowspan="1">Kartik Parmeshwar Lande</td>
                                                                                    <td>
                                                                                        2019-20
                                                                                    </td>
                                                                                    <td>
                                                                                        Working as Automation Engineer
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        03
                                                                                    </td>
                                                                                    <td rowspan="1">Jitendra Rathod</td>
                                                                                    <td>
                                                                                        2019-20
                                                                                    </td>
                                                                                    <td>
                                                                                        Working as Technician in MAHADISCOM
                                                                                    </td>

                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--six Accordion end-->



                                                        <!--Seven Accordion Start-->
                                                        <div class=" accordion-item p-2">
                                                            <h2 class="accordion-header" id="headingseven">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                                    STUDENTS' ASSOCIATION (EESA)-2024-25
                                                                </button>
                                                            </h2>
                                                            <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <!--seven table started-->
                                                                    <div class="table-responsive">
                                                                        <table class=" table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>

                                                                                        Sr. No.

                                                                                    </th>
                                                                                    <th>

                                                                                        Name of the Candidate


                                                                                    </th>
                                                                                    <th>

                                                                                        Post <br>

                                                                                    </th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        01
                                                                                    </td>
                                                                                    <td rowspan="1">Pawar Om
                                                                                        Punjaram</td>
                                                                                    <td>
                                                                                        PRESIDENT
                                                                                        < /center>
                                                                                    </td>

                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        02
                                                                                    </td>
                                                                                    <td rowspan="1">Badgujar Shantanu </td>
                                                                                    <td>
                                                                                        VICE PRESIDENT
                                                                                    </td>

                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        03
                                                                                    </td>
                                                                                    <td rowspan="1">Rathod Neha </td>
                                                                                    <td>
                                                                                        SECRETARY
                                                                                    </td>


                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        04
                                                                                    </td>
                                                                                    <td rowspan="1">Roadsamudre Siddesh Balaji</td>
                                                                                    <td>
                                                                                        TECHNICAL EVENT CO-ORDINATOR-TY
                                                                                    </td>

                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        05
                                                                                    </td>
                                                                                    <td rowspan="1">Kolte Vivek </td>
                                                                                    <td>
                                                                                        DISCIPLINE HEAD
                                                                                    </td>

                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        06
                                                                                    </td>
                                                                                    <td rowspan="1"> Jadhav Sakshi Kakasaheb</td>
                                                                                    <td>
                                                                                        TECHNICAL EVENT CO-ORDINATOR-SY
                                                                                    </td>

                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        07
                                                                                    </td>
                                                                                    <td rowspan="1"> Deore Tejas</td>
                                                                                    <td>
                                                                                        SPORTS SECRETARY
                                                                                    </td>

                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        08
                                                                                    </td>
                                                                                    <td rowspan="1"> Gadekar Jayraj</td>
                                                                                    <td>
                                                                                        TREASURER
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        09
                                                                                    </td>
                                                                                    <td rowspan="1">Waghmar Prerna Vijay</td>
                                                                                    <td>
                                                                                        JOINT SECRETARY
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        10
                                                                                    </td>
                                                                                    <td rowspan="1">Bahure Rohini Vitthalsing</td>
                                                                                    <td>
                                                                                        DECORATION HEAD
                                                                                    </td>

                                                                                </tr>



                                                                            </tbody>
                                                                        </table>
                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Seven Accordion end-->



                                                        <!--eight Accordion start-->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2" id="headingEight">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                    DEPARTMENT MOU's
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class=" table table-bordered table-hover">
                                                                            <!--eight table started-->
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

                                                                                        Upto<br>


                                                                                    </th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        01
                                                                                    </td>
                                                                                    <td rowspan="1">
                                                                                        Marathwada Auto Cluster ,
                                                                                        Waluj, Midc, Chhatrapati
                                                                                        Sambhajinagar
                                                                                    </td>
                                                                                    <td>
                                                                                        6/23/2022
                                                                                    </td>
                                                                                    <td>
                                                                                        6/23/2025
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        02
                                                                                    </td>
                                                                                    <td rowspan="1">
                                                                                        Marahtawada Association Of
                                                                                        Small Scale Industries And
                                                                                        Agriculture , Chikalthana
                                                                                        Midc Chhatrapati
                                                                                        Sambhajinagar
                                                                                    </td>
                                                                                    <td>
                                                                                        8/27/2021
                                                                                    </td>
                                                                                    <td>
                                                                                        8/27/2025
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        03
                                                                                    </td>
                                                                                    <td rowspan="1">
                                                                                        SS Control Pvt Ltd
                                                                                        Chikalthana , Midc
                                                                                        Chhatrapati Sambhajinagar
                                                                                    </td>
                                                                                    <td>
                                                                                        8/27/2021
                                                                                    </td>
                                                                                    <td>
                                                                                        8/27/2025
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        04
                                                                                    </td>
                                                                                    <td rowspan="1">
                                                                                        Chandra Electricals,
                                                                                        Chhatrapati Sambhajinagar
                                                                                    </td>
                                                                                    <td>
                                                                                        8/27/2021
                                                                                    </td>
                                                                                    <td>
                                                                                        8/27/2025
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        05
                                                                                    </td>
                                                                                    <td rowspan="1">
                                                                                        DNR India Auto Tech Pvt Ltd
                                                                                        Midc Waluj, Chhatrapati
                                                                                        Sambhajinagar
                                                                                    </td>
                                                                                    <td>
                                                                                        8/26/2021
                                                                                    </td>
                                                                                    <td>
                                                                                        8/26/2025
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        06
                                                                                    </td>
                                                                                    <td rowspan="1">
                                                                                        Gangami Industries And
                                                                                        Construction Limited
                                                                                        Harinagar , Najik
                                                                                        Babhulgaon, Ahmednagar
                                                                                    </td>
                                                                                    <td>
                                                                                        8/28/2021
                                                                                    </td>
                                                                                    <td>
                                                                                        8/28/2025
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td rowspan="1">
                                                                                        07
                                                                                    </td>
                                                                                    <td rowspan="1">
                                                                                        Shri Vidya Institute Of
                                                                                        Skill Development,
                                                                                        Chhatrapati Sambhajinagar
                                                                                    </td>
                                                                                    <td>
                                                                                        7/8/2017
                                                                                    </td>
                                                                                    <td>
                                                                                        4/8/2025
                                                                                    </td>

                                                                                </tr>


                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--eight table end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--eight Accordion end-->
                                                        <!--nine Accordion start-->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapseTwo">
                                                                    DEPARTMENT PROJECTS
                                                                </button>
                                                            </h2>
                                                            <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-md-12">
                                                                        <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y.2022-23</u></strong></p>
                                                                        <ul>
                                                                            <li style="list-style-type: disc;"> Solar Inverter</li>
                                                                            <li style="list-style-type: disc;"> Overhead Projector</li>
                                                                            <li style="list-style-type: disc;"> Multipurpose automatic electric bell for educational institutes</li>
                                                                            <li style="list-style-type: disc;"> An Electric grain Filtration Machine</li>
                                                                            <li style="list-style-type: disc;"> Solar Powered LED street lightning with auto Intensity Control</li>
                                                                            <li style="list-style-type: disc;"> Innovative techniques to reduce temperature and sound effect</li>
                                                                            <li style="list-style-type: disc;"> E-bicycle</li>
                                                                            <li style="list-style-type: disc;"> Vaccum Cleaner</li>
                                                                            <li style="list-style-type: disc;"> Automatic Punching Machine</li>
                                                                            <li style="list-style-type: disc;"> Home Lightning using Solar Energy</li>
                                                                            <li style="list-style-type: disc;"> The Design and construction of Inverter</li>
                                                                            <li style="list-style-type: disc;"> Maintenance of OHP Projector</li>

                                                                        </ul>
                                                                        <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2023-24</u></strong></p>
                                                                        <ul>
                                                                            <li style="list-style-type: disc;">PA system for College Announcement</li>
                                                                            <li style="list-style-type: disc;">Energy Audit of CSMSS College of Polytechnic</li>
                                                                            <li style="list-style-type: disc;">Wind solar street lighting system</li>
                                                                            <li style="list-style-type: disc;">home automation using Arduino</li>
                                                                            <li style="list-style-type: disc;">Biometric Attendance System Using Fingerprint Sensor with Google Sheet</li>
                                                                            <li style="list-style-type: disc;">Prepaid Energy Meter using Arduino</li>
                                                                            <li style="list-style-type: disc;">Maintenance of Water Cooler</li>
                                                                            <li style="list-style-type: disc;">Automatic Phase Changer</li>
                                                                            <li style="list-style-type: disc;">Control panel modification &amp; reinstallation at CSMSS College of Polytechnic</li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- accordian DEPARTMENT PROJECT end -->
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