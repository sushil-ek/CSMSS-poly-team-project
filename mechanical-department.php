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
                <h2 class="breadcrumb-title">Mechanical Engineering</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Mechanical Engineering</li>
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
                                        <a href="#"><i class="far fa-long-arrow-right"></i>Mechanical Engineering</a>
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
                                            <!-- img industrial-visit-me open-->
                                            <div class="carousel-item active">
                                                <img src="assets/img/department/industrial-visit-me.jpg" alt="industrial-visit-me" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img industrial-visit-me close-->
                                            <!-- img Passout Batch 2022-23 open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/passout-batch-me" alt="Passout Batch 2022-23" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img Passout Batch 2022-23 close-->
                                            <!-- img mechanics open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/mechanics-me.jpg" alt="mechanics-me" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img mechanics close-->
                                            <!-- img visit open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/visit-me.jpg." alt="visit-me" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img visit close-->

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
                                    <h3 class="mb-20">Mechanical Engineering Department</h3>
                                    <p class="mb-20" style="text-align: justify;">was established in the year 2009 with diploma programme in
                                        Mechanical Engineering, Mechanical Engineering is an engineering discipline that
                                        was developed from the application of principles from physics and materials
                                        science. According to the American Heritage Dictionary, it is the branch of
                                        engineering that encompasses the generation and application of heat and
                                        mechanical power and the design, production, and use of machines and tools. It
                                        is one of the oldest and broadest engineering disciplines.</p>
                                    <p class="mb-20" style="text-align: justify;">Mechanical engineers are traditionally concerned with the
                                        conception, design, implementation and operation of mechanical systems. The
                                        field requires a solid understanding of core concepts including mechanics,
                                        kinematics, thermodynamics, fluid mechanics, heat transfer, materials science,
                                        and energy. Mechanical engineers use the core principles as well as other
                                        knowledge in the field to design and analyze manufacturing plants, industrial
                                        equipment and machinery, heating and cooling systems, motor vehicles, aircraft,
                                        watercraft, robotics, medical devices Typical fields of work are aerospace,
                                        energy, machinery, robotics, and transportation and many more.
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
                                        Mechanical Engineering is a core engineering discipline. This department has
                                        been long recognized for the high quality of its academic and research programs.
                                        The central workshop has a separate building. The workshop has six major
                                        sections namely, fitting, carpentry, welding, smithy, foundry and machine shop.
                                        All the sections are fully equipped with the advanced technology equipment/
                                        machine. The department has well-furnished labs with all the amenities. In the
                                        coming year the department will be having its own research lab.As one of the
                                        finest College of Polytechnic in Maharashtra, we remain committed to excellence
                                        in years to come.
                                    </p>

                                    <!-- Department Vision start -->
                                    <div class="mb-3">
                                        <h3 class="mb-3">Department Vision</h3>
                                        <p>"To Develop Mechanical Engineers who serves the society and industry through
                                            their technical knowledge"</p>
                                    </div>
                                    <!-- Department Vision end -->
                                    <!-- Department Mission start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Department Mission</h3>
                                        <p><b class="text-dark">PEO 1:</b> To provide quality technical education by effective utilization of available resources and defined teaching learning process.</p>
                                        <p> <b class="text-dark">PEO 2:</b> To aware students about mechanical industrial needs by exposing them to industry.</p>
                                        <p><b class="text-dark">PEO 3:</b> To develop quality consciousness by imparting moral values.</p>
                                    </div>
                                    <!-- Department Mission end -->
                                    <!-- Future Plan Start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Future Plan</h3>
                                        <ul class="department-single-list">

                                            <li><i class="far fa-check"></i>To Increase the industry institute
                                                interaction</li>
                                            <li><i class="far fa-check"></i>To develop the industry supported lab by
                                                Collaborations with industry</li>
                                            <li><i class="far fa-check"></i>To make the department energy conservative
                                                and also generate energy from renewable sources to enhance green echo
                                                system</li>
                                            <li><i class="far fa-check"></i>To aware the student to solve complex
                                                engineering problems related to society and carryout innovative projects
                                            </li>

                                            <li><i class="far fa-check"></i>To establish the centre of excellence</li>
                                            <li><i class="far fa-check"></i>To establish more consultancy services</li>
                                            <li><i class="far fa-check"></i>Making teachers knowledgeable enough to
                                                train the students as per latest requirement of industries
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Future Plan Start -->
                                    <!-- PEO's start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                        <p><b class="text-dark">PEO 1:</b>Provide Socially Responsible, Environment
                                            Friendly Solutions To Mechanical Engineering Related Broad-Based Problems
                                            Adapting Professional Ethics.</p>
                                        <p> <b class="text-dark">PEO 2:</b> Adapt State-Of-The-Art Mechanical
                                            Engineering Broad-Based Technologies To Work In Multidisciplinary Work
                                            Environments.</p>
                                        <p><b class="text-dark">PEO 3:</b> Solve Broad-Based Problems Individually And
                                            As A Team Member Communicating Effectively In The World Of Work.</p>
                                    </div>
                                    <!--PEO's end  -->
                                    <!-- PSO start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                        <p><b class="text-dark">PSO1:</b> Modern Software Usage: Use Latest Mechanical
                                            Engineering Related Software's For Simple Design, Drafting, Manufacturing,
                                            Maintenance And Documentation Of Mechanical Engineering Components And
                                            Processes. </p>
                                        <p><b class="text-dark">PSO2:</b>Equipment And Instruments: Maintain Equipment
                                            And Instruments Related To Mechanical Engineering.</p>
                                        <p><b class="text-dark">PSO3:</b>Mechanical Engineering Processes: Manage
                                            Mechanical Engineering Processes By Selecting And Scheduling Relevant
                                            Equipment, Substrates, Quality Control Techniques, And Operational
                                            Parameters.</p>
                                    </div>
                                    <!-- PSO's end -->
                                    <!-- PO's start  -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Outcome(PO's)</h3>
                                        <p><b class="text-dark">PO1:</b>Basic and Discipline specific knowledge: Apply
                                            knowledge of basic mathematics, science and engineering fundamentals and
                                            engineering specialization to solve the engineering problems.
                                        <p>
                                        <p><b class="text-dark">PO2:</b> Problem analysis: Identify and analyze
                                            well-defined engineering problems using codified standard methods.</p>
                                        <p><b class="text-dark">PO3:</b> Design/ development of solutions: Design
                                            solutions for well-defined technical problems and assist with the design of
                                            systems components or processes to meet specified needs.
                                        <p>
                                        <p><b class="text-dark">PO4:</b> Engineering Tools, Experimentation and Testing:
                                            Apply modern engineering tools and appropriate technique to conduct standard
                                            tests and measurements.</p>
                                        <p><b class="text-dark">PO5:</b> Engineering Tools, Experimentation and Testing:
                                            Apply modern engineering tools and appropriate technique to conduct standard
                                            tests and measurements.</p>
                                        <p><b class="text-dark">PO6:</b> Project Management: Use engineering management
                                            principles individually, as a team member or a leader to manage projects and
                                            effectively communicate about well-defined engineering activities.</p>
                                        <p><b class="text-dark">PO7:</b> Life-long learning: Ability to analyze
                                            individual needs and engage in updating in the context of technological
                                            changes.</p>
                                    </div>
                                    <!-- PO's end -->
                                </div>

                                <section id="Admission Capacity">

                                    <h2 class="mb-3 text-black">Admission Intake Capacity : 60</h2>

                                    <!-- Accodian start -->
                                    <div class="my-5">
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
                                                                <center><img class="sticky" src="./assets/img/department/HODMech.jpeg" alt="HOD Image" width="150" height="200"></center>
                                                                <center><b>Mr. S. S. Madan</b><br><i>HOD</i></center>
                                                            </div>
                                                            <div class="col-lg-8 col-md-12">
                                                                <p style="text-align: justify">Welcome to the Department of Mechanical Engineering of CSMSS College of Polytechnic. The Department of Mechanical Engineering established in the year 2009 with an aim to developMechanical Engineers to serve the industry and society.</p>
                                                                <p style="text-align: justify">The department of Mechanical Engineering received ‘Excellent’ Grade by Maharashtra State Board of Technical Education (MSBTE), Mumbai for the excellent academic performance. The Department is equipped with highly qualified, experienced and young faculty members who devote towards inculcating knowledge and skills in budding Mechanical engineers.</p>
                                                            </div>
                                                            <p style="text-align: justify">Our department has well equipped laboratories and equipments as per MSBTE norms. The department motivates the students for higher studies.</p>
                                                            <p style="text-align: justify">With warm regards!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Section Start -->

                                        <!--faculty-details-->
                                        <p class="pt-10">
                                            <strong class="text-dark">Faculty Details</strong>
                                        </p>
                                        <!--first-table-->
                                        <div class="table-responsive">
                                            <table class=" table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>

                                                            Sr.No.

                                                        </th>
                                                        <th>

                                                            Particuler

                                                        </th>
                                                        <th>

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
                                                            <a href="#">A.Y. 2021-22</a>
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
                                            <!--first-table-end-->
                                            <!-- Second table -->
                                            <div class="table-responsive">
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

                                                                Qualification
                                                            </th>
                                                            <th>

                                                                Designation

                                                            </th>
                                                            <th>

                                                                Profile

                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                01
                                                            </td>
                                                            <td>Mr. MADAN SANDIP SARJERAO</td>
                                                            <td>
                                                                B.E.,M.E.
                                                            </td>
                                                            <td>

                                                                <b>HOD</b>

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\Madan Sir.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                02
                                                            </td>
                                                            <td>Mr.AWHALE SAGAR MANSARAM</td>
                                                            <td>
                                                                B.TECH., M.E.
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\S.M.Avhale.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                03
                                                            </td>
                                                            <td>Mrs. LAHORE DHANSHRI RATNAKAR</td>
                                                            <td>
                                                                B.E.,M.E.
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\Lahore Madam.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                04
                                                            </td>
                                                            <td>Mr. SAHANE GIRISH KISANRAO</td>
                                                            <td>
                                                                B.E.,M.E.
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\G.K.Sahane.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                05
                                                            </td>
                                                            <td>Mrs. UGALE SMITA KAKASAHEB</td>
                                                            <td>
                                                                B.E.
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\Ugle Madam.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                06
                                                            </td>
                                                            <td>Mr. CHIKNE RAVINDRA KAILAS</td>
                                                            <td>
                                                                B.E.
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\Chikne Sir.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                07
                                                            </td>
                                                            <td>Mrs. MULEY SHRADHA KRUSHNARAO</td>
                                                            <td>
                                                                B.E.
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\surwade madam.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        <tr>
                                                            <td>
                                                                08
                                                            </td>
                                                            <td>Mr. SHELKE VIJAY RUPCHAND</td>
                                                            <td>
                                                                B.E., M.E.
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\Shelke Sir.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        <tr>
                                                            <td>
                                                                09
                                                            </td>
                                                            <td>Mr. SONAWANE ANIKET APPASAHEB</td>
                                                            <td>
                                                                B.E.
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\Sonawane Sir.pdf" target="_blank" class="btn text-white"
                                                                    id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        <tr>
                                                            <td>
                                                                10
                                                            </td>
                                                            <td>Mr.RUPNAR GANESH POPAT</td>
                                                            <td>
                                                                B.E.,M.E
                                                            </td>
                                                            <td>

                                                                LECTURER

                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\mechanical engg\ganesh rupnar.pdf" target="_blank" class="btn text-white"
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
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-6 w-100">
                                                                <div class="accordion" id="accordionExample">
                                                                    <!--first accordion started-->
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header p-lg-2" id="headingOne">
                                                                            <button class="accordion-button collapsed"
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

                                                                                <div class="hedaing-content">
                                                                                </div>
                                                                                <ul>
                                                                                    <li>Following are the overall toppers of Mechanical Engineering department for the academic year 2022-23. </li>
                                                                                    <p class="mt-lg-3 mb-lg-3"><strong><u>Toppers of FY ME</u></strong></p>
                                                                                </ul>
                                                                                <!--first table in started first Accordion-->
                                                                                <div class="mt-3 table-responsive">
                                                                                    <table class="table table-bordered table-hover">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>
                                                                                                    Sr. No.

                                                                                                </th>
                                                                                                <th>

                                                                                                    Name of Student

                                                                                                </th>
                                                                                                <th>

                                                                                                    Percentage <br>

                                                                                                </th>
                                                                                                <th>

                                                                                                    Class Awarded <br>

                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    01
                                                                                                </td>
                                                                                                <td>SHAIKH MOHAMMAD BILAL ASIF</td>
                                                                                                <td>
                                                                                                    88
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    02
                                                                                                </td>
                                                                                                <td>THORBOLE KRUSHNA SUJIT</td>
                                                                                                <td>
                                                                                                    82.71
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    03
                                                                                                </td>
                                                                                                <td>TRIBHUVAN AMOL JIVAN</td>
                                                                                                <td>
                                                                                                    77.65
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>

                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <!--first table in end first Accordion-->

                                                                                <!--second table in started first Accordion-->
                                                                                <ul>
                                                                                    <p class="mt-lg-3 mb-lg-3"><strong><u>Toppers of SY ME</u></strong></p>
                                                                                </ul>
                                                                                <div class="mt-3 table-responsive">
                                                                                    <table class="table table-bordered table-hover">
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
                                                                                                <td>RATHOD MINAKSHI RAMRAO</td>
                                                                                                <td>
                                                                                                    82.95
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    02
                                                                                                </td>
                                                                                                <td>ZODGE MALVIK MAHESH</td>
                                                                                                <td>
                                                                                                    82.53
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    03
                                                                                                </td>
                                                                                                <td>RAUT SOPAN RATAN</td>
                                                                                                <td>
                                                                                                    78.11
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>

                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <!--second table in end first Accordion-->

                                                                                <!--third table in started first Accordion-->
                                                                                <ul>
                                                                                    <p class="mt-lg-3 mb-lg-3"><strong><u>Toppers of TY ME</u></strong></p>
                                                                                </ul>
                                                                                <div class="mt-3 table-responsive">
                                                                                    <table class="table table-bordered table-hover">
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
                                                                                                <td>KULKARNI SHRUTI RAVINDRA</td>
                                                                                                <td>
                                                                                                    92.67
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    02
                                                                                                </td>
                                                                                                <td>SATPUTE SNEHA SANTOSH</td>
                                                                                                <td>
                                                                                                    88.76
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    03
                                                                                                </td>
                                                                                                <td>RAUT GANESH LAXMAN</td>
                                                                                                <td>
                                                                                                    84
                                                                                                </td>
                                                                                                <td>
                                                                                                    First Class with Distinction
                                                                                                </td>
                                                                                            </tr>

                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <!--third table in end first Accordion-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--first Accordion end-->


                                                                    <!--second Accordion start-->
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header p-lg-2" id="headingTwo">
                                                                            <button class="accordion-button collapsed"
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
                                                                                <!--second table started-->
                                                                                <div class="mt-3 table-responsive">
                                                                                    <table class="table table-bordered table-hover">
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

                                                                                                    Organized <br>

                                                                                                </th>
                                                                                                <th>

                                                                                                    Name of Student <br>

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
                                                                                                <td>State Level Paper Presentation</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    MIT Polytechnic, Aurangabad
                                                                                                </td>
                                                                                                <td>
                                                                                                    Shruti Kulkarni
                                                                                                </td>
                                                                                                <td>
                                                                                                    Winner
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    02
                                                                                                </td>
                                                                                                <td>State Level Paper Presentation</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    MIT Polytechnic, Aurangabad
                                                                                                </td>
                                                                                                <td>
                                                                                                    Sneha Satpute
                                                                                                </td>
                                                                                                <td>
                                                                                                    Winner
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    03
                                                                                                </td>
                                                                                                <td>IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    IEDSSA
                                                                                                </td>
                                                                                                <td>
                                                                                                    Shaikh Shafan Imam
                                                                                                </td>
                                                                                                <td>
                                                                                                    Runner up
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    04
                                                                                                </td>
                                                                                                <td>IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    IEDSSA
                                                                                                </td>
                                                                                                <td>
                                                                                                    Omkesh R. Tandale
                                                                                                </td>
                                                                                                <td>
                                                                                                    Runner up
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    05
                                                                                                </td>
                                                                                                <td>IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</td>
                                                                                                <td>
                                                                                                    2017-18
                                                                                                </td>
                                                                                                <td>
                                                                                                    IEDSSA
                                                                                                </td>
                                                                                                <td>
                                                                                                    Umar Ulwan Khan
                                                                                                </td>
                                                                                                <td>
                                                                                                    Runner up
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    06
                                                                                                </td>
                                                                                                <td>IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    IEDSSA
                                                                                                </td>
                                                                                                <td>
                                                                                                    Shaikh Yahya Shaikh Zakir
                                                                                                </td>
                                                                                                <td>
                                                                                                    Runner up
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    07
                                                                                                </td>
                                                                                                <td>IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    IEDSSA
                                                                                                </td>
                                                                                                <td>
                                                                                                    Dusyant N. Sarje
                                                                                                </td>
                                                                                                <td>
                                                                                                    Runner up
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    08
                                                                                                </td>
                                                                                                <td>IEDSSA (Inter Engineering Diploma Students Sport Association.) in Table Tennis.</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    IEDSSA
                                                                                                </td>
                                                                                                <td>
                                                                                                    Dusyant N. Sarje
                                                                                                </td>
                                                                                                <td>
                                                                                                    Runner up
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    09
                                                                                                </td>
                                                                                                <td>IEDSSA (Inter Engineering Diploma Students Sport Association.) in ATHLETICS.</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    IEDSSA
                                                                                                </td>
                                                                                                <td>
                                                                                                    Rohit D. Kapse
                                                                                                </td>
                                                                                                <td>
                                                                                                    Winner
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    10
                                                                                                </td>
                                                                                                <td>National Conference entitled “Recent Innovations and Best Practices in Science and Technology”</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    CSMSS COP
                                                                                                </td>
                                                                                                <td>
                                                                                                    Duigvijay Patil
                                                                                                </td>
                                                                                                <td>
                                                                                                    3rd Rank
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    11
                                                                                                </td>
                                                                                                <td>National Conference entitled “Recent Innovations and Best Practices in Science and Technology”</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    CSMSS COP
                                                                                                </td>
                                                                                                <td>
                                                                                                    Shruti Kulkarni
                                                                                                </td>
                                                                                                <td>
                                                                                                    2nd Rank
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    12
                                                                                                </td>
                                                                                                <td>National Conference entitled “Recent Innovations and Best Practices in Science and Technology”</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    CSMSS COP
                                                                                                </td>
                                                                                                <td>
                                                                                                    Sneha Satpute
                                                                                                </td>
                                                                                                <td>
                                                                                                    2nd Rank
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    13
                                                                                                </td>
                                                                                                <td>National Conference entitled “Recent Innovations and Best Practices in Science and Technology”</td>
                                                                                                <td>
                                                                                                    2023-24
                                                                                                </td>
                                                                                                <td>
                                                                                                    CSMSS COP
                                                                                                </td>
                                                                                                <td>
                                                                                                    Dusyant N. Sarje
                                                                                                </td>
                                                                                                <td>
                                                                                                    3rd Rank
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

                                                                    <!--Third Accordion Start -->
                                                                    <div class="accordion-item p-2 ">
                                                                        <h2 class="accordion-header" id="headingThird">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseThird" aria-expanded="false" aria-controls="collapseThird">
                                                                                DEPARTMENT ADVISORY BOARD (DAB)
                                                                            </button>
                                                                        </h2>
                                                                        <div id="collapseThird" class="accordion-collapse collapse" aria-labelledby="headingThird"
                                                                            data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body">
                                                                                <div class="mt-3 table-responsive">
                                                                                    <table class="table table-bordered table-hover">
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
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    01
                                                                                                </td>
                                                                                                <td>Mr. S.S. Madan</td>
                                                                                                <td>
                                                                                                    Chairman
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    02
                                                                                                </td>
                                                                                                <td>Mr. S.M. Awhale</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    03
                                                                                                </td>
                                                                                                <td>Mr. K. B. Tidke</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    04
                                                                                                </td>
                                                                                                <td>Mr.Sunil Kirdak</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    05
                                                                                                </td>
                                                                                                <td>Mr.Shankar Khodke</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    06
                                                                                                </td>
                                                                                                <td>Mr.Vaibhav Gosavi</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    07
                                                                                                </td>
                                                                                                <td>Mr.H.K.Chaudhari</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    08
                                                                                                </td>
                                                                                                <td>Mr. Yogesh Arsul</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    09
                                                                                                </td>
                                                                                                <td>Mr. Amol Borude</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    10
                                                                                                </td>
                                                                                                <td>Mr.Ravindra Kulkarni</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    11
                                                                                                </td>
                                                                                                <td>Mr.Anil Sansare</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Third Accordion end -->

                                                                    <!-- Fourth Accordion start -->
                                                                    <div class="accordion-item p-2 ">
                                                                        <h2 class="accordion-header" id="headingFourth">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                                                                PROGRAMME ASSESSMENT COMMITTEE (PAC)
                                                                            </button>
                                                                        </h2>
                                                                        <div id="collapseFourth" class="accordion-collapse collapse"
                                                                            aria-labelledby="headingFourth" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body">
                                                                                <div class="mt-3 table-responsive">
                                                                                    <table class="table table-bordered table-hover">
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
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    01
                                                                                                </td>
                                                                                                <td>Mr. S.S. Madan</td>
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
                                                                                                <td>Mr. S.M. Awhale</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                                <td>
                                                                                                    Lecturer
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    03
                                                                                                </td>
                                                                                                <td>Mrs. D.R. Lahore</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                                <td>
                                                                                                    Lecturer
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    04
                                                                                                </td>
                                                                                                <td>Mr. G.K. Sahane</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                                <td>
                                                                                                    Lecturer
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    05
                                                                                                </td>
                                                                                                <td>Mr. A.A. Sonawane</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                                <td>
                                                                                                    Lecturer
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    06
                                                                                                </td>
                                                                                                <td>Mr. V.R. Shelke</td>
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
                                                                                                <td>Mrs. S.K. Ugale</td>
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
                                                                                                <td>Mrs. S.K. Muley</td>
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
                                                                                                <td>Mr. R.K. Chikne</td>
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
                                                                                                <td>Mr. G.P. Rupnar</td>
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
                                                                                                <td>Mr. K. B. Tidke</td>
                                                                                                <td>
                                                                                                    Member
                                                                                                </td>
                                                                                                <td>
                                                                                                    Lecturer
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    12
                                                                                                </td>
                                                                                                <td>Mrs. K.H. Pakhale</td>
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
                                                                    </div>
                                                                    <!-- Fourth Accordion end -->
                                                                    <!--fifth accordion started-->
                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header p-lg-2" id="headingOne">
                                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseOne">
                                                                                    LIST OF LABORATORIES
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapsefive" class="accordion-collapse collapse"
                                                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="mt-3 table-responsive">
                                                                                        <table class="table table-bordered table-hover">
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
                                                                                                    <td>
                                                                                                        01
                                                                                                    </td>
                                                                                                    <td>Theory of machines</td>
                                                                                                    <td>
                                                                                                        138668
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        02
                                                                                                    </td>
                                                                                                    <td>Industrial Fluid Power</td>
                                                                                                    <td>
                                                                                                        423629
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        03
                                                                                                    </td>
                                                                                                    <td>Thermal Engineering</td>
                                                                                                    <td>
                                                                                                        45475
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        04
                                                                                                    </td>
                                                                                                    <td>Metrology &amp; Quality control</td>
                                                                                                    <td>
                                                                                                        235835.1
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        05
                                                                                                    </td>
                                                                                                    <td>Fluid Mechanics &amp; Machinery</td>
                                                                                                    <td>
                                                                                                        334447
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        06
                                                                                                    </td>
                                                                                                    <td>Power Engineering</td>
                                                                                                    <td>
                                                                                                        193593
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        07
                                                                                                    </td>
                                                                                                    <td>Measurement &amp; Control</td>
                                                                                                    <td>
                                                                                                        106666
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        08
                                                                                                    </td>
                                                                                                    <td>Design of Machine Elements</td>
                                                                                                    <td>
                                                                                                        41000
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        09
                                                                                                    </td>
                                                                                                    <td>CNC LAB</td>
                                                                                                    <td>
                                                                                                        1399906.25
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        10
                                                                                                    </td>
                                                                                                    <td>CAD LAB</td>
                                                                                                    <td>
                                                                                                        800000
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>

                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <b>Total</b>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <b>3719219.35</b>
                                                                                                    </td>

                                                                                                </tr>
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
                                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapseTwo">
                                                                                    OUR ALUMNI
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="mt-3 table-responsive">
                                                                                        <table class="table table-bordered table-hover">
                                                                                            <thead>
                                                                                                <tr>
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
                                                                                                    <td>KHAIRNAR NIKHIL DEEPAK</td>
                                                                                                    <td>
                                                                                                        2011-12
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        SR.ASSOCIATE CONSULTANT SAP MM INFOSYS LTD.PUNE
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        02
                                                                                                    </td>
                                                                                                    <td>PATHAN WAJEED HAMIDKHAN</td>
                                                                                                    <td>
                                                                                                        2012-13
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        ASSISTANT MANAGER ,SUZUKI MOTOR GUJARAT PRIVATE LIMITED
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        03
                                                                                                    </td>
                                                                                                    <td>ARSUL YOGESH KAILAS</td>
                                                                                                    <td>
                                                                                                        2013-14
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        DY. MANAGER APPLICATION ENGINEERING (R&amp;D BUSINESS UNIT PUNE) KIRLOSKAR OIL ENGINES LIMITED
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        04
                                                                                                    </td>
                                                                                                    <td>SALVE KARUNA BHAGAWANRAO</td>
                                                                                                    <td>
                                                                                                        2013-14
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        PRODUCTION PLANNER, KONECRANES ,PUNE
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        05
                                                                                                    </td>
                                                                                                    <td>HARDE PRAVIN TUKARAM</td>
                                                                                                    <td>
                                                                                                        2013-14
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        SR. ENGINEER ( UTILITY) AT JK TYRE &amp; INDUSTRIES LTD
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        06
                                                                                                    </td>
                                                                                                    <td>KULKARNI ANUP ANILRAO</td>
                                                                                                    <td>
                                                                                                        2014-15
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        FOUNDER, SPHURIT TECHNOLOGIES , GROWTH CONSULTANT , DIGITAL MARKETING EXPERT
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        07
                                                                                                    </td>
                                                                                                    <td>WAKLE MANISHA SAKHAHARI</td>
                                                                                                    <td>
                                                                                                        2014-15
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        JE, MAHAGENCO,GOVT. OF MAHARASHTRA
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        08
                                                                                                    </td>
                                                                                                    <td>NAZIMUDDIN RAZIUDDIN F.</td>
                                                                                                    <td>
                                                                                                        2014-15
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        SALES ADMINISTRATION ,GREAVES COTTON LIMITED
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        09
                                                                                                    </td>
                                                                                                    <td>KARANDE SHAILESH SHIVAJI</td>
                                                                                                    <td>
                                                                                                        2015-16
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        DEPUTY MANAGER AT GODREJ TOOLING
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        10
                                                                                                    </td>
                                                                                                    <td>BORUDE ROHIT VISHNU</td>
                                                                                                    <td>
                                                                                                        2015-16
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        STARTED OWN IT COMPANY “SNYAM TECH SOFTWARE”
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        11
                                                                                                    </td>
                                                                                                    <td>WAGH YOGESH ATMARAM</td>
                                                                                                    <td>
                                                                                                        2015-16
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        DESIGN ENGINEER (BIW JIG &amp; FIXTURES) ROBTECH AUTOMATION &amp; SERVICES,PUNE.
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        12
                                                                                                    </td>
                                                                                                    <td>KALATRE KRISHNA RAMRAO</td>
                                                                                                    <td>
                                                                                                        2016-17
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        GRAPHICS &amp; ADVANCED GRAPHIC SPECIALIST AT JONH DEERE INDIA
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        13
                                                                                                    </td>
                                                                                                    <td>CHOURE POOJA SHRIHAREE</td>
                                                                                                    <td>
                                                                                                        2016-17
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        DESIGN ENGINEER,AT OSBORN LIPPERT PVT.LTD.
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        14
                                                                                                    </td>
                                                                                                    <td>SARAF AMIT ANANT</td>
                                                                                                    <td>
                                                                                                        2016-17
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        CUSTOMER RETENTION SPECIALIST &amp; CUSTOMER DELIGHT HEAD. UGAOO AGRI TECH.PUNE
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        15
                                                                                                    </td>
                                                                                                    <td>CHAWALI SACHIN BALAJI</td>
                                                                                                    <td>
                                                                                                        2017-18
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        SENIOR ENGINEER JCB INDIA LTD. PUNE
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        16
                                                                                                    </td>
                                                                                                    <td>PRATHAMESH RAJESH DHAMANE</td>
                                                                                                    <td>
                                                                                                        2017-18
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        EXECUTIVE AT SIEMENS ENERGY
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        17
                                                                                                    </td>
                                                                                                    <td>BOKIL PRASAD PRADEEPRAO</td>
                                                                                                    <td>
                                                                                                        2018-19
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        EQUIPMENT ENGINEER AT ITW INDIA PVT LTD
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        18
                                                                                                    </td>
                                                                                                    <td>KAYASTH MAYUR RAJENDRA</td>
                                                                                                    <td>
                                                                                                        2018-19
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        DATA ENGINEER AT TATA CONSULTANCY SERVICES,PUNE
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        19
                                                                                                    </td>
                                                                                                    <td>BHAVAR GANESH BABASAHEB</td>
                                                                                                    <td>
                                                                                                        2018-19
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        ASSOCIATE AT COGNIZANT (SAP HCM &amp; SAP ABAP CONSULTANT)
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        20
                                                                                                    </td>
                                                                                                    <td>BORUDE AMOL CHANGDEO</td>
                                                                                                    <td>
                                                                                                        2019-20
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        CEO ,HAPPAZON TECHNOLOGIES,AURANGABAD.
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        21
                                                                                                    </td>
                                                                                                    <td>PRADHAN SHUBHAM PRAKASH</td>
                                                                                                    <td>
                                                                                                        2019-20
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        PROJECT ENGINEER WIPRO,PUNE
                                                                                                    </td>

                                                                                                </tr>

                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--six Accordion end-->

                                                                        <!--seven Accordion start-->
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header p-lg-2" id="headingTwo">
                                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseTwo">
                                                                                    STUDENTS' ASSOCIATION (MESA) 2023-24:
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="mt-3 table-responsive">
                                                                                        <table class="table table-bordered table-hover">
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
                                                                                                    <td>
                                                                                                        01
                                                                                                    </td>
                                                                                                    <td>MS. SHRUTI KULKARNI</td>
                                                                                                    <td>
                                                                                                        PRESIDENT
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        02
                                                                                                    </td>
                                                                                                    <td>MR. GANESH RAUT</td>
                                                                                                    <td>
                                                                                                        VICE PRESIDENT
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        03
                                                                                                    </td>
                                                                                                    <td>MR. MALVIK ZODGE</td>
                                                                                                    <td>
                                                                                                        SECRETARY
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        04
                                                                                                    </td>
                                                                                                    <td>MS. SNEHA SATPUTE</td>
                                                                                                    <td>
                                                                                                        EDITORIAL /DOCUMENTATION HEAD
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        05
                                                                                                    </td>
                                                                                                    <td>MR. AADARSH BORSE</td>
                                                                                                    <td>
                                                                                                        CULTURAL HEAD
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        06
                                                                                                    </td>
                                                                                                    <td>MR. OM TAUR</td>
                                                                                                    <td>
                                                                                                        SPORT HEAD
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        07
                                                                                                    </td>
                                                                                                    <td>MS. ANUSHKA HAMAND</td>
                                                                                                    <td>
                                                                                                        LADY REPRESENTATIVE
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        08
                                                                                                    </td>
                                                                                                    <td>MR. DUSYANT SARJE</td>
                                                                                                    <td>
                                                                                                        TREASURER
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        09
                                                                                                    </td>
                                                                                                    <td>MR. SOPAN RAUT</td>
                                                                                                    <td>
                                                                                                        SOCIAL ACTIVITY HEAD
                                                                                                    </td>

                                                                                                </tr>

                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--seventh Accordion end-->
                                                                        <!--eight Accordion start-->
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header p-lg-2" id="headingTwo">
                                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseTwo">
                                                                                    DEPARTMENT MOU's
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div class="mt-3 table-responsive">
                                                                                    <table class="table table-bordered table-hover">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>

                                                                                                    Sr. No.

                                                                                                </th>
                                                                                                <th>

                                                                                                    Name of Company

                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    01
                                                                                                </td>
                                                                                                <td>Marathawada Auto Cluster, Waluj, MIDC Aurangabad.</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    02
                                                                                                </td>
                                                                                                <td>OTTOFlame Edutech Services</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    03
                                                                                                </td>
                                                                                                <td>Marathawada Association of Small Scale Industries and Agriculture (MASSIA), Hub Industry</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    04
                                                                                                </td>
                                                                                                <td>DNR India Auto Tech Pvt. Ltd.</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    05
                                                                                                </td>
                                                                                                <td>Tool Tech Tooling</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    06
                                                                                                </td>
                                                                                                <td>Gangamai Industries and Constructions Ltd.</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
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

                                                                                    <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2020-21</u></strong></p>
                                                                                    <ul>
                                                                                        <li style="list-style-type: disc;">Power Hammering Machine</li>
                                                                                        <li style="list-style-type: disc;"> Find out Defect and maintenance with Bagga Boring Works</li>
                                                                                        <li style="list-style-type: disc;"> Design and development of fixture with Galexy Engineering works</li>
                                                                                        <li style="list-style-type: disc;"> Vehicle Black Box System (VBBS)</li>
                                                                                        <li style="list-style-type: disc;"> Surface Condensor</li>
                                                                                        <li style="list-style-type: disc;"> Impacts of jet (Experimental set up)</li>
                                                                                        <li style="list-style-type: disc;"> Pedal Operated Hacksaw</li>
                                                                                        <li style="list-style-type: disc;"> Development of material handling system with Abhijeet Agro Center</li>
                                                                                        <li style="list-style-type: disc;"> Design of Burr cleaning system with Prabhakar Engineering</li>
                                                                                        <li style="list-style-type: disc;"> Solar Tree</li>
                                                                                        <li style="list-style-type: disc;"> Automatic Black Borad Cleaner</li>
                                                                                    </ul>
                                                                                    <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2021-22</u></strong></p>
                                                                                    <ul>
                                                                                        <li style="list-style-type: disc;">Semi Automated Floor cleaning Machine</li>
                                                                                        <li style="list-style-type: disc;">Automatic Dog Feeder</li>
                                                                                        <li style="list-style-type: disc;">Electrically Height adjustable Table</li>
                                                                                        <li style="list-style-type: disc;">Pedal Power</li>
                                                                                        <li style="list-style-type: disc;">U turn accident prevention</li>
                                                                                        <li style="list-style-type: disc;">Obstacle Avoider Robot</li>
                                                                                        <li style="list-style-type: disc;">LPG and CNG Gas Detector</li>
                                                                                        <li style="list-style-type: disc;">Box Shifting Machine</li>
                                                                                        <li style="list-style-type: disc;">Regenerative Bracking System</li>
                                                                                        <li style="list-style-type: disc;">Singlr Axis Solar Tracker</li>
                                                                                        <li style="list-style-type: disc;">Design And Fabrication of Agriculture sprayer</li>
                                                                                        <li style="list-style-type: disc;">Electromagnetic Braking System</li>
                                                                                        <li style="list-style-type: disc;">Green Energy City</li>

                                                                                    </ul>
                                                                                    <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2022-23</u></strong></p>
                                                                                    <ul>
                                                                                        <li style="list-style-type: disc;">Solar radiation tracking system</li>
                                                                                        <li style="list-style-type: disc;">Solar energy operated grass cutter</li>
                                                                                        <li style="list-style-type: disc;">Automatic spray pump</li>
                                                                                        <li style="list-style-type: disc;">Alchohol detector</li>
                                                                                        <li style="list-style-type: disc;">Mobile hydro-electric generator</li>
                                                                                        <li style="list-style-type: disc;">Solar panel cleaning machine</li>
                                                                                        <li style="list-style-type: disc;">Belt drive grinding machine</li>
                                                                                        <li style="list-style-type: disc;">Air pollution control electrostatic precipetator</li>
                                                                                        <li style="list-style-type: disc;">Ecofriendly road footpath cleaning machine</li>
                                                                                        <li style="list-style-type: disc;">Smart dust bin</li>
                                                                                        <li style="list-style-type: disc;">Solar electric vehicle</li>
                                                                                        <li style="list-style-type: disc;">Collision mitigation adas system.</li>
                                                                                        <li style="list-style-type: disc;">Electromagnetic breaking system</li>
                                                                                        <li style="list-style-type: disc;">Ecofriendly pyrolysis product</li>

                                                                                    </ul>

                                                                                    <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2023-24</u></strong></p>
                                                                                    <ul>
                                                                                        <li style="list-style-type: disc;">Eye Blink Sensor Smart Irrigation System</li>

                                                                                        <li style="list-style-type: disc;">Automatic bike stand</li>
                                                                                        <li style="list-style-type: disc;">Electriciy Generation by using foot step</li>
                                                                                        <li style="list-style-type: disc;">To find a mechanism which keeps the workpiece clamped unless the entire machining is done</li>
                                                                                        <li style="list-style-type: disc;">Shaft Driven Bicycle</li>
                                                                                        <li style="list-style-type: disc;">Regenerative Braking System</li>
                                                                                        <li style="list-style-type: disc;">Solution on Blow Holes in Casting</li>
                                                                                        <li style="list-style-type: disc;">Cut-Section of Vehicle</li>
                                                                                        <li style="list-style-type: disc;">Air Water Heater</li>
                                                                                        <li style="list-style-type: disc;">Steering Control Head Light </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--nine Accordion end-->
                                                                        <!--Accordin section End here-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </section>
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