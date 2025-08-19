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
                        <h4 class="text-muted fw-bold py-3 mb-4">PROGRAMME ASSESSMENT COMMITTEE (PAC) </h4>

                        <div class="card">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Civil Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu1">Electrical Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu2">Mechanical Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu3">Electronics & Tele-communication Engineering </a></li>
                                <li><a data-toggle="tab" href="#menu4">Computer Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu5">Artificial intelligence Engineering</a></li>


                            </ul>

                            <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) start -->
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">

                                    <!-- Civil Engineering start -->

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>


                                        <div class="col-lg-6 d-flex justify-content-end">

                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Representation</th>
                                                    <th>Designation</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr.M. R. More</strong></td>

                                                    <td>Chairman</td>
                                                    <td><b>HOD</b></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>2</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr.S. B. Nagargoje</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>3</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr.V. A. Jadhav</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>4</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. R. H. Gore</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>5</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs.A.S.Shete</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>6</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Dr.A.P.Tayde</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>


                                                        </card>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs.A.S.Rudrakanthwar</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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


                                    <!-- Civil Engineering END -->

                                </div>
                                <!--PROGRAMME ASSESSMENT COMMITTEE (PAC) end  -->


                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) start -->
                                <!--  Electrical engineering start -->
                                <div id="menu1" class="tab-pane fade">


                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Representation</th>
                                                    <th>Designation</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">


                                                <!--  Electrical engineering start -->
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Rahane C. V.</strong></td>

                                                    <td>Chairman</td>
                                                    <td><b>HOD</b></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>2</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. Mitkar A. H.</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>3</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. Satish kumar</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>4</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. Faisal M. A.</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>5</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Pote A. M.</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>6</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. Jadhav P. R.</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>7</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. Bansod V. A.</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>8</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs. Aute P. J.</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>9</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. Patil U. A.</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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


                                    <!--  Electrical engineering end -->
                                </div>

                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) end -->

                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) start -->
                                <!-- Mechanical Engineering start-->
                                <div id="menu2" class="tab-pane fade">


                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Representation</th>
                                                    <th>Designation</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <!-- Mechanical Engineering start-->
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. S.S. Madan</strong></td>

                                                    <td>Chairman</td>
                                                    <td><b>HOD</b></td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>2</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. S.M. Awhale</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>



                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>3</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. D.R. Lahore</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>





                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>4</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. G.K. Sahane</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>





                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>5</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>MMr. A.A. Sonawane </strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>6</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. V.R. Shelke</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>



                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>7</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. S.K. Ugale</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>





                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>8</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs. S.K. Muley</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>





                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>9</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. R.K. Chikne</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. G.P. Rupnar </strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>



                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. K. B. Tidke</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>





                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>12</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs. K.H. Pakhale</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>





                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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







                                    <!-- Mechanical Engineering start-->


                                </div>



                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) end -->

                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) start -->
                                <!-- Electronics & Tele-communication Engineering  start -->
                                <div id="menu3" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Representation</th>
                                                    <th>Designation</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. M. D. Narangale</strong></td>

                                                    <td>Chairman</td>
                                                    <td><b>HOD</b></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>2</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs. S. H. Bhandaru</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>3</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. D. S. Lamb </strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>4</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr.V.U.Shisode</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>5</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. V.S.Patil</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>6</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs.Sakhare M.B.</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>7</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr.Dhanwade B.G.</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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


                                    <!-- Electronics & Tele-communication end -->



                                </div>


                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) end -->

                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) start -->
                                <!-- Computer Engineering start -->
                                <div id="menu4" class="tab-pane fade ">



                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Representation</th>
                                                    <th>Designation</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <!-- Computer Engineering start -->
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs.R. S. Pophale</strong>
                                                    </td>

                                                    <td>Chairman</td>
                                                    <td><b>HOD</b></td>




                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>2</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. A. P .Borlepwar</strong></td>

                                                    <td>Member</td>
                                                    <td>Sr. Faculty</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>3</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs. P.V. Polshetwar</strong></td>

                                                    <td>Member</td>
                                                    <td>Sr. Faculty</td>


                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>4</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. A. K. Kudlikar</strong></td>

                                                    <td>Member</td>
                                                    <td>Sr. Faculty</td>




                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>5</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>MMrs. S. S. Mopari</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Sr. Faculty</td>




                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>6</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. D. Y. Vyavahare</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>7</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Ms. S. A. Samrat</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>8</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. M. V. Shisode</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>

                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td>9</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Ms.H. M. Pathan</strong>
                                                    </td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>




                                                    <td>



                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. K. A. Sonawane</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Program-Assessment.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. M. A. Dhopte</strong></td>

                                                    <td>Member</td>
                                                    <td>Lecturer</td>


                                                    <td>
                                                        <div> <a href="edit_Program-Assessment.php" class=" text-white">
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




                                    <!-- Computer Engineering END -->



                                    <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) END -->


                                </div>
                                <div id="menu5" class="tab-pane fade ">

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container-xxl flex-grow-1 container-p-y">





                        <!-- Hoverable Table rows -->




                        <!--/ Hoverable Table rows -->


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