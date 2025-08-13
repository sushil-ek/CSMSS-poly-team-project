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
                 
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4 ms-3">DEPARTMENT ADVISORY BOARD (DAB)</h4>
                        <div class="card">
                            <ul class="nav nav-tabs ">
                                <li class="active"><a data-toggle="tab" href="#civil">Civil Engineering</a></li>
                                <li><a data-toggle="tab" href="#electrical">Electrical Engineering</a></li>
                                <li><a data-toggle="tab" href="#mechanical">Mechanical Engineering</a></li>
                                <li><a data-toggle="tab" href="#electronic">electronic and Engineering</a></li>
                                <li><a data-toggle="tab" href="#computer">Computer Engineering</a></li>
                                <li><a data-toggle="tab" href="#Artificial">Artificial intelligence Engineering</a></li>
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
                                <div id="civil" class="tab-pane fade in active">

                                    <!-- new civil start -->


                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Advisory.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr.no.</th>
                                                    <th>Name of the Committee Member</th>
                                                    <th>Details</th>
                                                    <th>Actions</th>
                                                    <th></th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                <tr>
                                                    <td>01</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. M. R. More</strong></td>
                                                    <td>HOD</td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. S. B. Nagargoje</strong></td>
                                                    <td>Sr.Faculty</td>



                                                    <td>
                                                        <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. V. A. Jadhav</strong></td>
                                                    <td>Sr.Faculty</td>




                                                    <td>

                                                        <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. Pushpak Dabhade</strong>
                                                    </td>

                                                    <td>Academician</td>




                                                    <td>



                                                        <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td>05</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Sohail Ali</strong></td>
                                                    <td>Academician</td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td>06</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. Sanket Kulkarni</strong></td>
                                                    <td>Employer (Industry Representative)</td>



                                                    <td>
                                                        <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td>07</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. Avinash Chate
                                                        </strong></td>
                                                    <td>Employer (Industry Representative)</td>




                                                    <td>

                                                        <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td>08</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. Maruti Hud</strong>
                                                    </td>
                                                    <td>Alumni Representative</td>




                                                    <td>

                                                        <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Hitesh Shinde</strong></td>
                                                    <td>Alumni Representative</td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td>10</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. Pralhad Pardhi</strong></td>
                                                    <td>Parents Representative
                                                    </td>



                                                    <td>
                                                        <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <td>11</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. Amjad Pathan</strong></td>
                                                    <td>Parents Representative</td>
                                                    <td>

                                                        <div> <a href="edit_Department-Advisory.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                    </td>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- Civil Department End -->


                                <div id="electrical" class="tab-pane fade">

                                    <!-- Electrical department start -->

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Advisory.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr.no.</th>
                                                    <th>Name of the Committee Member</th>
                                                    <th>Details</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>01</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Rahane C. V.</strong></td>
                                                    <td>HOD</td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Department-Advisory.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>
                                    </div>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. Mitkar A. H.</strong></td>
                                        <td>Lecturer
                                        </td>



                                        <td>
                                            <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. Satish kumar
                                            </strong></td>
                                        <td>Lecturer</td>




                                        <td>

                                            <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. Channekar Pravin Arjun
                                            </strong>
                                        </td>

                                        <td>Alumni Representative
                                        </td>




                                        <td>



                                            <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        <td>05</td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Kartik Pandurang Lande
                                            </strong></td>
                                        <td>Alumni Representative
                                        </td>


                                        <td>
                                            <div>
                                                <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        <td>06</td>
                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Dr. Karpe S. R.
                                            </strong></td>
                                        <td>Academician
                                        </td>



                                        <td>
                                            <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        <td>07</td>
                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. Anil Gawade
                                            </strong></td>
                                        <td>Employer (Industry Representative)
                                        </td>




                                        <td>

                                            <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        <td>08</td>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs. Rupali Agrawal
                                            </strong>
                                        </td>
                                        <td>Employer (Industry Representative)
                                        </td>




                                        <td>



                                            <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Phulke Sandesh
                                            </strong></td>
                                        <td>Parents Representative
                                        </td>


                                        <td>
                                            <div>
                                                <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        <td>10</td>
                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. Kale Gorakh
                                            </strong></td>
                                        <td>Parents Representative
                                        </td>



                                        <td>
                                            <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                            <!-- electrical end -->

                            <!-- mechanical start -->
                            <div id="mechanical" class="tab-pane fade">

                                <div class="row">
                                    <div class="col-lg-6 ">

                                    </div>

                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <a href="add_Department-Advisory.php">
                                            <button type="button" class="btn btn-primary me-3">ADD+</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>sr.no.</th>
                                                <th>Name of the Committee Member</th>
                                                <th>Details</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">


                                            <tr>
                                                <td>01</td>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. S.S. Madan
                                                    </strong>
                                                </td>
                                                <td>Chairman
                                                </td>


                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. S.M. Awhale
                                                    </strong></td>
                                                <td>Member
                                                </td>


                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. K. B. Tidke
                                                    </strong></td>
                                                <td>Member

                                                </td>



                                                <td>
                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr.Sunil Kirdak

                                                    </strong></td>
                                                <td>Member
                                                </td>




                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr.Shankar Khodke

                                                    </strong>
                                                </td>

                                                <td>Member

                                                </td>




                                                <td>



                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr.Vaibhav Gosavi

                                                    </strong></td>
                                                <td>Member

                                                </td>


                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>07</td>
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr.H.K.Chaudhari

                                                    </strong></td>
                                                <td>Member
                                                </td>



                                                <td>
                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>08</td>
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. Yogesh Arsul

                                                    </strong></td>
                                                <td>Member

                                                </td>




                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>09</td>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. Amol Borude

                                                    </strong>
                                                </td>
                                                <td>Member

                                                </td>




                                                <td>



                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>10</td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr.Ravindra Kulkarni

                                                    </strong></td>
                                                <td>Member

                                                </td>


                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>11</td>
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr.Anil Sansare

                                                    </strong></td>
                                                <td>Member

                                                </td>



                                                <td>
                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                            <!-- mechanical department end -->

                            <!-- electronic start -->
                            <div id="electronic" class="tab-pane fade">

                                <div class="row">
                                    <div class="col-lg-6 ">

                                    </div>

                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <a href="add_Department-Advisory.php">
                                            <button type="button" class="btn btn-primary me-3">ADD+</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>sr.no.</th>
                                                <th>Name of the Committee Member</th>
                                                <th>Details</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">

                                            <tr>
                                                <td>01</td>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. M. D. Narangale

                                                    </strong>
                                                </td>
                                                <td>HOD

                                                </td>

                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. S. H. Bhandaru

                                                    </strong></td>
                                                <td>Faculty

                                                </td>

                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. D. S. Lamb

                                                    </strong></td>
                                                <td>Faculty


                                                </td>


                                                <td>
                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr.Yogesh B. Shejwal

                                                    </strong></td>
                                                <td>Alumni Representative

                                                </td>



                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr.Varad S. Bhadgaonkar


                                                    </strong>
                                                </td>

                                                <td>Alumni Representative


                                                </td>



                                                <td>



                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. R. A. Burukul


                                                    </strong></td>
                                                <td>Academician

                                                </td>

                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>07</td>
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. B. B. Nakhate

                                                    </strong></td>
                                                <td>Employer (Industry Representative)

                                                </td>


                                                <td>
                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>08</td>
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr.Battusingh Rajput


                                                    </strong></td>
                                                <td>Employer (Industry Representative)


                                                </td>



                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>09</td>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. Sanjay Bhadgaonkar


                                                    </strong>
                                                </td>
                                                <td>Parents Representative


                                                </td>



                                                <td>



                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>10</td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr.Santosh Tukaram Vibhute


                                                    </strong></td>
                                                <td>Parents Representative

                                                </td>

                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- electronic end -->

                            <!-- computer start -->
                            <div id="computer" class="tab-pane fade">

                                <div class="row">
                                    <div class="col-lg-6 ">

                                    </div>

                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <a href="add_Department-Advisory.php">
                                            <button type="button" class="btn btn-primary me-3">ADD+</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>sr.no.</th>
                                                <th>Name of the Committee Member</th>
                                                <th>Details</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <td>01</td>
                                            <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs.R. S. Pophale


                                                </strong></td>
                                            <td>HOD

                                            </td>


                                            <td>
                                                <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs. A. P .Borlepwar


                                                    </strong>
                                                </td>
                                                <td>Sr. Faculty


                                                </td>

                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. A. K. Kudlikar


                                                    </strong></td>
                                                <td>Sr. Faculty


                                                </td>

                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>04</td>
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs. S. R. Rathi


                                                    </strong></td>
                                                <td>Academician



                                                </td>


                                                <td>
                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>05</td>
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. A. S. Nagrik


                                                    </strong></td>
                                                <td>Academician


                                                </td>



                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>06</td>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. Nikhil Brahmbhatt



                                                    </strong>
                                                </td>

                                                <td>Employer (Industry Representative)



                                                </td>



                                                <td>



                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>07</td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Sanket Deshpande



                                                    </strong></td>
                                                <td>Employer (Industry Representative)


                                                </td>

                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>08</td>
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. Gaurav Kale


                                                    </strong></td>
                                                <td>Alumni Representative


                                                </td>


                                                <td>
                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>09</td>
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. Supriya Shinde



                                                    </strong></td>
                                                <td>Alumni Representative



                                                </td>



                                                <td>

                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>10</td>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. Nishant Wagh



                                                    </strong>
                                                </td>
                                                <td>Parents Representative



                                                </td>



                                                <td>



                                                    <div> <a href="edit_Department-Advisory.php" class=" text-white">
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
                                                <td>11</td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr.Maroti Dande



                                                    </strong></td>
                                                <td>Parents Representative

                                                </td>

                                                <td>
                                                    <div>
                                                        <a href="edit_Department-Advisory.php" class=" text-white">
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
                                        </tbody>
                                    </table>
                                </div>


                            </div>

                            <!-- computer department end -->
                            <!-- artificial department start -->
                            <div id="Artificial" class="tab-pane fade">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- artificial department end -->


                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="text-muted fw-bold py-3 mb-4"></h4>







                    <hr class="my-5" />


                    <!-- Footer -->
                    <!-- Footer -->
                    <?php
                    include('../common/footer.php');

                    ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
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