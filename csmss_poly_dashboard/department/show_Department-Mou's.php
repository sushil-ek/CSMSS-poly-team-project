<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php
include('../common/header_link.php');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php
            include('../common/sidebar.php');
            ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php
                include '../common/header.php';
                ?>
                <!-- / Navbar -->

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4">DEPARTMENT MOU's</h4>


                        <div class="card">
                            <ul class="nav nav-tabs overflow-x-auto ">
                                <li class="active"><a data-toggle="tab" href="#home">Civil Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu1">Electrical Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu2">Mechanical Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu3">Electronic and Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu4">Computer Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu5">Artificial intelligence Engineering</a></li>

                            </ul>
                            <style>
                                .nav-tabs {
                                    display: flex;
                                    overflow-x: auto;
                                    white-space: nowrap;
                                    flex-wrap: nowrap;
                                }

                                .nav-tabs::-webkit-scrollbar {
                                    height: 6px;
                                    /* Horizontal scrollbar height */
                                }



                                .nav-tabs::-webkit-scrollbar-thumb:hover {
                                    background: #555;
                                }

                                .nav-tabs li {
                                    flex: 0 0 auto;
                                    /* Prevent shrinking */
                                }
                            </style>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Mou's.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Civil depaertment start -->

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Name of Company</th>
                                                    <th>From</th>
                                                    <th>Upto</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                <tr>
                                                    <td>01</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>EDUCADD LEARNING SOLUTIONS PVT. LTD</strong></td>
                                                    <td>02-02-2024</td>
                                                    <td>01-02-2027</td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>M/S VB ASSOCIATES</strong></td>
                                                    <td>16-07-2024</td>
                                                    <td>15-07-2027</td>

                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>GANGAMAI SUGAR INDUSTRIES PVT. LTD</strong></td>
                                                    <td>16-07-2024 </td>
                                                    <td>15-07-2027</td>
                                                    <td>

                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>CADD CENTER</strong>
                                                    </td>
                                                    <td>04-02-2024</td>
                                                    <td>03-02-2027</td>
                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <!-- Civil depaertment end -->

                                <!-- electrical depaertment start -->
                                <div id="menu1" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Mou's.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Name of Company</th>
                                                    <th>From</th>
                                                    <th>Upto</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                <tr>
                                                    <td>01</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Marathwada Auto Cluster , Waluj, Midc, Chhatrapati Sambhajinagar </strong></td>
                                                    <td>6/23/2022 </td>
                                                    <td>6/23/2025</td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;"><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Marahtawada Association Of Small Scale Industries And Agriculture , Chikalthana Midc Chhatrapati Sambhajinagar </strong>
                                                </td>
                                                    <td>8/27/2021 </td>
                                                    <td>8/27/2025</td>

                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>SS Control Pvt Ltd Chikalthana , Midc Chhatrapati Sambhajinagar</strong></td>
                                                    <td>8/27/2021 </td>
                                                    <td>8/27/2025</td>



                                                    <td>

                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Chandra Electricals, Chhatrapati Sambhajinagar </strong>
                                                    </td>
                                                    <td>8/27/2021 </td>
                                                    <td>8/27/2025</td>


                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>09</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>DNR India Auto Tech Pvt Ltd Midc Waluj, Chhatrapati Sambhajinagar </strong></td>
                                                    <td>8/26/2021 </td>
                                                    <td>8/26/2025</td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>05</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Shri Vidya Institute Of Skill Development, Chhatrapati Sambhajinagar</strong></td>
                                                    <td>7/8/2017 </td>
                                                    <td> 4/8/2025</td>

                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <td>06</td>
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Gangami Industries And Construction Limited Harinagar , Najik Babhulgaon, Ahmednagar</strong></td>
                                                <td>8/28/2021 </td>
                                                <td>8/28/2025</td>



                                                <td>

                                                    <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                            <button type="button" class="btn rounded-pill btn-info">
                                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                                            </button></a>
                                                        <a href="#" class=" text-white">
                                                            <button type="button" class="btn rounded-pill btn-info">
                                                                <i class="bx bx-trash me-1 "></i> Delete
                                                            </button></a>
                                                    </div>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- electrical depaertment end -->




                                <!-- mechanical depaertment start -->
                                <div id="menu2" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Mou's.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Name of Company</th>
                                                    <th>From</th>
                                                    <th>Upto</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">


                                                <tr>
                                                    <td>01</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Marathawada Auto Cluster, Waluj, MIDC Aurangabad. </strong>
                                                    </td>
                                                    <td> </td>
                                                    <td></td>
                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>OTTOFlame Edutech Services</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Marathawada Association of Small Scale Industries and Agriculture (MASSIA), Hub Industry</strong></td>
                                                    <td></td>
                                                    <td></td>

                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>DNR India Auto Tech Pvt. Ltd.</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>

                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>05</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Tool Tech Tooling</strong>
                                                    </td>
                                                    <td> </td>
                                                    <td></td>
                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>06</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Gangamai Industries and Constructions Ltd.</strong></td>
                                                    <td> </td>
                                                    <td></td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- mechanical depaertment end -->





                                <!-- Electronics department start -->
                                <div id="menu3" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Mou's.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Name of Company</th>
                                                    <th>From</th>
                                                    <th>Upto</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">




                                                <tr>
                                                    <td>01</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Shri Venkatesh Polymould Pvt. Ltd. </strong></td>
                                                    <td>05-04-2023 </td>
                                                    <td>05-04-2025</td>

                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>DNR India Auto Tech Pvt. Ltd.</strong></td>
                                                    <td>26-08-2021 </td>
                                                    <td>25-08-2024</td>
                                                    <td>

                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Crystal Technology </strong>
                                                    </td>
                                                    <td> 27-08-2021 </td>
                                                    <td>26-08-2025</td>


                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>CDSP, Chh.Sambhajinagar </strong></td>
                                                    <td>27-05-2024 </td>
                                                    <td>27-04-2025</td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>05</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Marathwada Auto Cluster , Waluj, Midc, Chhatrapati Sambhajinagar </strong></td>
                                                    <td>23-06-2022 </td>
                                                    <td>23-06-2025</td>

                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- ELectronics department end -->




                                <!-- Computer Department Start -->

                                <div id="menu4" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Mou's.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Name of Company</th>
                                                    <th>From</th>
                                                    <th>Upto</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>01</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>And We Media </strong></td>
                                                    <td>05/02/2024 </td>
                                                    <td>05/02/2027</td>
                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Just Logic Software Pvt. Ltd. </strong>
                                                    </td>
                                                    <td>05/02/2024 </td>
                                                    <td>05/02/2027</td>
                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Smartpacey Institute & Technology Solution
                                                            Pvt. Ltd. </strong></td>
                                                    <td>05/02/2024 </td>
                                                    <td>05/02/2027</td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- Computer Department End-->




                                <!-- Artficial Intelligence department start -->
                                <div id="menu5" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Mou's.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Name of Company</th>
                                                    <th>From</th>
                                                    <th>Upto</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>01</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Naskraft IT Solutions Pvt. Ltd. </strong></td>
                                                    <td>01-10-2022 </td>
                                                    <td>01-10-2024</td>

                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Marathawada Auto Cluster, Waluj,MIDC
                                                            Aurangabad. </strong></td>
                                                    <td>23-06-2022 </td>
                                                    <td>23-06-2025</td>



                                                    <td>

                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Shri Venkatesh Polymould Pvt. Ltd.
                                                        </strong>
                                                    </td>
                                                    <td>05-04-2023 </td>
                                                    <td>05-04-2025</td>
                                                    <td>
                                                        <div> <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-warning">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. Pravin Ambekar AMB's C-DSP, Chh.
                                                            Sambhajinagar </strong></td>
                                                    <td>18-3-2024 </td>
                                                    <td>21-3-2025</td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Mou's.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- Artficial Intelligence department  End -->
                            </div>










                        </div>









                        <hr class="my-5" />


                        <!-- Footer -->
                        <!-- Footer -->
                        <?php
                        include('../common/footer.php');

                        ?>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>

                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>
            </div>
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->
        <?php
        include('../common/footer-link.php');


        ?>
        <!-- Core JS -->

</body>

</html>