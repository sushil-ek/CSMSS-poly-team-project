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
                <h2 class="breadcrumb-title">Artificial Intelligence and Machine Learning</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Artificial Intelligence and Machine Learning</li>
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
                                        <a href="computer-department.php"><i class="far fa-long-arrow-right"></i>Computer Engineering</a>
                                        <a href="#"><i class="far fa-long-arrow-right"></i>Artificial Intelligance & Machine Learning</a>
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
                                            <!-- img Faculty open-->
                                            <div class="carousel-item active">
                                                <img src="assets/img/department/faculty-ai.jpg" alt="Faculty" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img Faculty close-->
                                            <!-- img lab open-->
                                            <div class="carousel-item">
                                                <img src="assets/img/department/lab-ai.jpg" alt="lab" style="height:450px ; width:800px">
                                            </div>
                                            <!-- img lab close-->

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
                                    <h3 class="mb-20">Artificial Intelligence and Machine Learning</h3>
                                    <p class="mb-20" style="text-align: justify;">
                                        Year of commencement: A. Y. 2022-23
                                        The inception of the department goes in the year 2022-2023. The motto of the department is to provide quality technical education & to make the students industry-ready. Our goal is to ensure that our diploma engineers are well prepared to play the pivotal roles in problem solving project leaders, entrepreneurs, and above all ethical citizens of a global society. The excellent infrastructure, dynamic teaching staff along with training and placement cell ensures a bright future to the students.
                                        The AI & ML course emphasizes creativity and innovative thinking and is supported by passionate faculties who strive to inspire their students. We promote teamwork among students through projects and co-curricular & extracurricular activities. We are confident that our students will emerge as assets not only to the institution and to the organization they join, but to the society as well </p>
                                    <!-- Short-term Future Plans start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Short-term Future Plans</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i> To Increase connectivity with maximum industries.</li>
                                            <li><i class="far fa-check"></i> Develop industry-institute interaction to impart professional and entrepreneurship skills in students.</li>
                                            <li><i class="far fa-check"></i> Inculcate social integrity and ethics among students through extra-curricular activities for overall development and life-long learning.</li>
                                            <To><i class="far fa-check"></i> To Setup the well equipped laboratories with higher configuration systems </li>
                                                <li><i class="far fa-check"></i> To motivate students to participate in State & National level Paper/Project Competition </li>
                                                <li><i class="far fa-check"></i>To organized National Level Conferences & Seminar </li>
                                                <li><i class="far fa-check"></i>To be the department with zero dropout rate </li>
                                        </ul>
                                    </div>
                                    <!-- Short-term Future Plans end -->
                                    <!-- Long-term Future Plans start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Long-term Future Plans</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i> To Be an NBA accredited program after 3 year</li>
                                            <li><i class="far fa-check"></i> To develop industry sponsored lab.</li>
                                            <li><i class="far fa-check"></i> To increase the placement of students.</li>
                                            <To><i class="far fa-check"></i> To organized International Level Conferences & Seminar for faculty</li>
                                                <li><i class="far fa-check"></i> To produce meritorious Students in the MSBTE </li>
                                                <li><i class="far fa-check"></i>To motivate faculties and students to have their own patent/IPR </li>
                                                <li><i class="far fa-check"></i>To provide skilled and competent professionals in the field of Artificial Intelligence and Machine Learning </li>
                                        </ul>
                                    </div>
                                    <!-- Long-term Future Plans end -->
                                    <!-- PO's start  -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Outcomes (PO's)</h3>
                                        <p><b class="text-dark">PO1 </b> Basic and Discipline specific knowledge: Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.</p>
                                        <p><b class="text-dark">PO2 </b> Problem analysis: Identify and analyses well-defined engineering problems using codified standard methods.</p>
                                        <p><b class="text-dark">PO3 </b> Design/ development of solutions: Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.</p>
                                        <p><b class="text-dark">PO4 </b> Engineering Tools, Experimentation and Testing: Apply modern engineering tools and appropriate technique to conduct standard tests and measurements..</p>
                                        <p><b class="text-dark">PO5 </b> Engineering practices for society, sustainability and environment: Apply appropriate technology in context of society, sustainability, environment and ethical practices.</p>
                                        <p><b class="text-dark">PO6 </b> Project Management: Use engineering management principles individually, as a team member or a leader to manage projects and effectively communicate about well-defined engineering activities.</p>
                                        <p><b class="text-dark">PO7 </b> Life-long learning: Ability to analyze individual needs and engage in updating in the context of technological changes.</p>
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
                                                            <center><img class="sticky" src="assets\img\department\HODAIML.jpeg" alt="HOD Image" width="150" height="200"></center>
                                                            <center><b>Mrs. S. R. Borakhade</b><br><i>HOD</i></center>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <p style="text-align: justify">It gives me immense pleasure to give you the Greetings! From the Department of Artificial Intelligence and Machine Learning (AN) of CSMSS College of Polytechnic, Aurangabad, it is striving towards the goal of providing innovative and quality education to the students to achieve academic excellence. Since its inception in 2022-2023, the department has maintained an excellent academic record and ‘Excellent’ grade also from MSBTE.</p>
                                                            <p style="text-align: justify">The M.S.B.T.E. Mumbai has conferred the ‘Excellent’ grade to the department for its academic activities, and has been certified by ISO. The Department has sufficient and good infrastructural </p>
                                                        </div>
                                                        <p style="text-align: justify">design, and well equipped laboratories.</p>
                                                        <p style="text-align: justify">The motto of the department is to provide quality technical education & to make the students industry-ready. Our goal is to ensure that our diploma engineers are well prepared to play the pivotal role in problem solving projects, make them efficient leaders, entrepreneurs, and above all ethical citizens of the global society. The excellent infrastructure, dynamic teaching staff along with training and placement cell ensures a bright future to the students. The greatest asset of the department is its highly motivated and learned faculty.</p>
                                                        <p style="text-align: justify">Thank you...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Section Start -->

                                    <!--faculty-details-->

                                    <!--first-table-start-->
                                    <div style="overflow-x: scroll;">
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
                                                    <td rowspan="1">Mrs. Sonal Rajesh Borakhade</td>
                                                    <td>
                                                        B.E.,M.E.
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
                                                    <td rowspan="1">Mrs. Surwade Sulbha Sachin</td>
                                                    <td>
                                                        B.Tech.
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
                                                    <td rowspan="1">Mrs. Thubrikar Nishigandha Harshad</td>
                                                    <td>
                                                        B.Tech.
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
                                                    <td rowspan="1">Mrs. Pallavi Sanjay Futane</td>
                                                    <td>
                                                        M.Tech.
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
                                                    <td rowspan="1">Mr. Dawane Maroti Parsaram</td>
                                                    <td>
                                                        M.A. Eng., NET, SET
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
                                                    <td rowspan="1">Mr. Aditya Arun Sharma</td>
                                                    <td>
                                                        M.Tech.
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
                                                    <td rowspan="1">Mrs. Manisha B Sakhre</td>
                                                    <td>
                                                        M.Sc. Maths, B.Ed.
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
                                                            <!--first Accordion started-->
                                                            <div class=" accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#collaspOne"
                                                                        aria-expanded="false" aria-controls="collaspOne">
                                                                        TOPPERS
                                                                    </button>
                                                                </h2>
                                                                <div id="collaspOne" class="accordion-collapse collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <ul>
                                                                            <li style="list-style-type: disc;">Following are
                                                                                the overall toppers of Artificial
                                                                                Intalligence & Machine Learning department
                                                                                for the academic year 2022-23.</li>
                                                                        </ul>
                                                                        <h5 style="margin-bottom: 10px;"><u>Toppers of FY
                                                                                AIML</u></h5>
                                                                        <!--first table started-->
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
                                                                                        <td>KAKDE
                                                                                            RIYA AUDUMBAR</td>
                                                                                        <td>
                                                                                            86.58
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction

                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>DAGALE
                                                                                            PRAGATI SHARAD</td>
                                                                                        <td>
                                                                                            83.10/center>
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction

                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>DOLAS
                                                                                            SHUBHAM ASHOK</td>
                                                                                        <td>
                                                                                            77.81
                                                                                        </td>
                                                                                        <td>
                                                                                            First Class with Distinction

                                                                                        </td>

                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!--first table end-->
                                                                            <!--second table stared-->
                                                                            <h5>
                                                                                <u>Toppers of FY AIML</u>
                                                                            </h5>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class=" table table-bordered table-hover">
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
                                                                                            <td>
                                                                                                SHENGULE HARIOM RAVSAHEB
                                                                                            </td>
                                                                                            <td>
                                                                                                90.05
                                                                                            </td>
                                                                                            <td>
                                                                                                First Class with Distinction

                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                02
                                                                                            </td>
                                                                                            <td>
                                                                                                GAWANDE MANASVI SANTOSH
                                                                                            </td>
                                                                                            <td>
                                                                                                86.18
                                                                                            </td>
                                                                                            <td>
                                                                                                First Class with Distinction

                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                03
                                                                                            </td>
                                                                                            <td>CHAVAN
                                                                                                AKSHADA SURESH </td>
                                                                                            <td>
                                                                                                84.41
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
                                                                            <h5>
                                                                                <u>Toppers of SY AIML</u>
                                                                            </h5>

                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class=" table table-bordered table-hover">

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
                                                                                            <td>KAKDE
                                                                                                RIYA AUDUMBAR</td>
                                                                                            <td>
                                                                                                82.3
                                                                                            </td>
                                                                                            <td>
                                                                                                First Class with Distinction

                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                02
                                                                                            </td>
                                                                                            <td>DAGALE
                                                                                                PRAGATI SHARAD</td>
                                                                                            <td>
                                                                                                82.67
                                                                                            </td>
                                                                                            <td>
                                                                                                First Class with Distinction

                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                03
                                                                                            </td>
                                                                                            <td>DOLAS
                                                                                                SHUBHAM ASHOK</td>
                                                                                            <td>
                                                                                                79.23
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
                                                            </div>


                                                            <!--first Accordion end-->

                                                            <!--second Accordion start-->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header p-lg-2" id="headingTwo">
                                                                    <button class="accordion-button border-0" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                                        STUDENTS' ACHIEVEMENT
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">

                                                                        <!--second table started-->
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">

                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr. No. </th>
                                                                                        <th>

                                                                                            Name of Event

                                                                                        </th>
                                                                                        <th>

                                                                                            Date

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
                                                                                        <td>
                                                                                            IEDSSA (Inter Engineering
                                                                                            Diploma
                                                                                            Students Sport Association.) in
                                                                                            Chess</td>
                                                                                        <td>
                                                                                            06-02-2024
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA
                                                                                        </td>
                                                                                        <td>
                                                                                            Aditi Pandit, Riddhi mehta

                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>
                                                                                            Stale
                                                                                            Level Paper Presentation
                                                                                            Competition
                                                                                            2023-24</td>
                                                                                        <td>
                                                                                            05-03-2024
                                                                                        </td>
                                                                                        <td>
                                                                                            CSMSSCOP
                                                                                        </td>
                                                                                        <td>
                                                                                            Hariom Ravsaheb
                                                                                            Shengule,Abhijeet Appasaheb
                                                                                            Ghanwat,Pranjal Appasaheb
                                                                                            Ghatge,Mayuri Champat Sasane

                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>
                                                                                            Stale
                                                                                            Level Paper Presentation
                                                                                            Competition
                                                                                            2023-24</td>
                                                                                        <td>
                                                                                            05-03-2024
                                                                                        </td>
                                                                                        <td>
                                                                                            CSMSSCOP
                                                                                        </td>
                                                                                        <td>
                                                                                            Rushikesh Raju Bhokare

                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            04
                                                                                        </td>
                                                                                        <td>
                                                                                            ELECSPIRE 2K23</td>
                                                                                        <td>
                                                                                            21-09-2023
                                                                                        </td>
                                                                                        <td>
                                                                                            CSMSSCOP
                                                                                        </td>
                                                                                        <td>
                                                                                            Rushikesh Bhokare,Dhiraj
                                                                                            Padswan
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            05
                                                                                        </td>
                                                                                        <td>
                                                                                            IEDSSA Chess</td>
                                                                                        <td>
                                                                                            07-01-2024
                                                                                        </td>
                                                                                        <td>
                                                                                            CSMSSCOP
                                                                                        </td>
                                                                                        <td>
                                                                                            Shantanu Somwanshi
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner Up
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            06
                                                                                        </td>
                                                                                        <td>
                                                                                            Stale
                                                                                            Level Quiz Competition 2023-24
                                                                                        </td>
                                                                                        <td>
                                                                                            05-03-2024
                                                                                        </td>
                                                                                        <td>
                                                                                            CSMSSCOP
                                                                                        </td>
                                                                                        <td>
                                                                                            Rushikesh Bhokare
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner Up
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            07
                                                                                        </td>
                                                                                        <td>
                                                                                            Brainwawes-2k23</td>
                                                                                        <td>
                                                                                            15-03-2023
                                                                                        </td>
                                                                                        <td>
                                                                                            CSMSSCOP
                                                                                        </td>
                                                                                        <td>
                                                                                            Tejinakar Aadesh,Sonwane
                                                                                            Bhavesh,Somwanshi Shantanu
                                                                                            R,Daud Dhananjay R.
                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            08
                                                                                        </td>
                                                                                        <td>
                                                                                            National Conference entitled
                                                                                            “Recent
                                                                                            Innovations and Best Practices
                                                                                            in
                                                                                            Science and Technology"</td>
                                                                                        <td>
                                                                                            21-03-2024
                                                                                        </td>
                                                                                        <td>
                                                                                            CSMSSCOP
                                                                                        </td>
                                                                                        <td>
                                                                                            Vedashree more, Riya Kakde

                                                                                        </td>
                                                                                        <td>
                                                                                            Winner
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            09
                                                                                        </td>
                                                                                        <td>
                                                                                            National Conference entitled
                                                                                            “Recent
                                                                                            Innovations and Best Practices
                                                                                            in
                                                                                            Science and Technology”</td>
                                                                                        <td>
                                                                                            21-03-2024
                                                                                        </td>
                                                                                        <td>
                                                                                            CSMSSCOP
                                                                                        </td>
                                                                                        <td>
                                                                                            Shravnee Bandale, Aditi
                                                                                            Pandit
                                                                                        </td>
                                                                                        <td>
                                                                                            Runner up
                                                                                        </td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                            <!--second table end-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--second Accordion end-->
                                                            <!--third Accordion start-->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header p-lg-2" id="headingThree">
                                                                    <button class="accordion-button border-0" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree" aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        LIST OF LABORATORIES
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
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

                                                                                            Cost of Equipments
                                                                                            (Rs.)

                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>
                                                                                            Programming Lab 1</td>
                                                                                        <td>
                                                                                            1641893
                                                                                        </td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>
                                                                                            Programming Lab 2</td>
                                                                                        <td>
                                                                                            1207826
                                                                                        </td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>
                                                                                            Software Development Lab
                                                                                        </td>
                                                                                        <td>
                                                                                            1084244.45
                                                                                        </td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            04
                                                                                        </td>
                                                                                        <td>
                                                                                            Hardware and Networking Lab
                                                                                        </td>
                                                                                        <td>
                                                                                            1239244.45
                                                                                        </td>

                                                                                    </tr>


                                                                                </tbody>
                                                                            </table>
                                                                            <!-- third accordion end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Accordion Start -->
                                                            <!--fourth Accordion Start-->
                                                            <div class=" accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingfour">
                                                                    <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                                                        aria-expanded="false" aria-controls="collapsefour">
                                                                        DEPARTMENT MOU's
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefour" class="accordion-collapse collapse"
                                                                    aria-labelledby="headingfour"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <!--fourth table started-->
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
                                                                                            From

                                                                                        </th>

                                                                                        <th>
                                                                                            Upto

                                                                                        </th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            01
                                                                                        </td>
                                                                                        <td>
                                                                                            Naskraft IT
                                                                                            Solutions
                                                                                            Pvt.
                                                                                            Ltd.
                                                                                        </td>
                                                                                        <td>
                                                                                            01-10-2022

                                                                                        </td>
                                                                                        <td>
                                                                                            01-10-2024
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            02
                                                                                        </td>
                                                                                        <td>
                                                                                            Marathawada Auto
                                                                                            Cluster,
                                                                                            Waluj,MIDC
                                                                                            Aurangabad.
                                                                                        </td>
                                                                                        <td>
                                                                                            23-06-2022
                                                                                        </td>
                                                                                        <td>
                                                                                            23-06-2025
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            03
                                                                                        </td>
                                                                                        <td>
                                                                                            Shri Venkatesh
                                                                                            Polymould
                                                                                            Pvt.
                                                                                            Ltd. </td>
                                                                                        <td>
                                                                                            05-04-2023
                                                                                        </td>
                                                                                        <td>
                                                                                            05-04-2025
                                                                                        </td>


                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            04
                                                                                        </td>
                                                                                        <td>
                                                                                            Mrs. Pravin Ambekar
                                                                                            AMB's
                                                                                            C-DSP,
                                                                                            Chh. Sambhajinagar
                                                                                        </td>
                                                                                        <td>
                                                                                            18-3-2024
                                                                                        </td>
                                                                                        <td>
                                                                                            21-3-2025
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--fourth Accordion end-->
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