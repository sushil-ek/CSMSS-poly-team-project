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
    data-assets-path="../../assets/"
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
  }

  .nav-tabs::-webkit-scrollbar-thumb:hover {
    background: #555;
  }

  .nav-tabs li {
    flex: 0 0 auto;
  } 

  .wrap-text {
        white-space: pre-line;
        /* Allows breaks from HTML or \n */
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
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4">TOPPERS DETAILS</h4>

                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <ul class="nav nav-tabs ">
                                <li class="active"><a data-toggle="tab" href="#home">Civil Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu1">Electrical Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu2">Mechanical Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu3">Electronic and Tele-communication Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu4">Computer Engineering</a></li>
                                <li><a data-toggle="tab" href="#menu5">Artificial intelligence Engineering</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">

                                    <div class="row">
                                        <div class="col-lg-6 ">


                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Toppers.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.no.</th>
                                                    <th>Name of Student</th>
                                                    <th>Percentage</th>
                                                    <th>Class Awarded</th>
                                                    <th>Department</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <!-- Civil Start -->
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>ADITYA SANDEEP HIWRALE</strong></td>
                                                    <td>85.06</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>FY CE</td>

                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>DESHMUKH KRUSHNA YOGRAJ</strong></td>
                                                    <td>82.12</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>FY CE</td>


                                                    </td>

                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>THORAT SAKSHI EKNATH</strong></td>
                                                    <td>81.29</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>FY CE</td>

                                                    <td>

                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>BANKAR RUSHIKESH DEEPAK</strong>
                                                    </td>
                                                    <td>83.67</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>SY CE</td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>PATIL PARESH GULAB</strong></td>
                                                    <td>81.78</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>SY CE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>PATIL DHANESH SHYAM</strong></td>
                                                    <td>75.89</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>SY CE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>LOKHANDE PAWAN APPARAO</strong></td>
                                                    <td>93.3</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>TY CE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>PATHAN ADIL AMJAD</strong></td>
                                                    <td>92.9</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>TY CE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>ADAV OMKAR SAMBHAJI</strong></td>
                                                    <td>90.8</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Civil Engineering</td>
                                                    <td>TY CE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                <!-- Civil Ends -->

                                <!--Electrical Start -->

                                <div id="menu1" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Toppers.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.no.</th>
                                                    <th>Name of Student</th>
                                                    <th>Percentage</th>
                                                    <th>Class Awarded</th>
                                                    <th>Department</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong> BADGUJAR SHANTANU</strong></td>
                                                    <td>79.65</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> FY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>RAUT UDAY</strong></td>
                                                    <td>76.94</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> FY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>UBALE SIDDHANT AJINATH</strong></td>
                                                    <td>75.41</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> FY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>NIL OMKAR BHIMA</strong></td>
                                                    <td>81.13</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> SY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>TAYADE VEDANT SANTOSH</strong></td>
                                                    <td>74</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> SY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong> RATHOD NEHA POPAT</strong></td>
                                                    <td>73.25</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> SY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong> BANKAR OM RAJU</strong></td>
                                                    <td>88.1</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> TY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong> GAWANDE SUPRIT KAILAS</strong></td>
                                                    <td>85.1</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> TY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>BAHEKAR SHIVRAJ ASARAM</strong></td>
                                                    <td>84.2</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Electrical Engineering</td>
                                                    <td> TY EE</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                <!--  Electrical Section Ends -->

                                <!--  Mechanical Start -->

                                <div id="menu2" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Toppers.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.no.</th>
                                                    <th>Name of Student</th>
                                                    <th>Percentage</th>
                                                    <th>Class Awarded</th>
                                                    <th>Department</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody class="table-border-bottom-0">

                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>SHAIKH MOHAMMAD BILAL ASIF</strong></td>
                                                    <td>88</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> FY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pil btn-primary">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>THORBOLE KRUSHNA SUJIT</strong></td>
                                                    <td>82.71</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> FY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>TRIBHUVAN AMOL JIVAN</strong></td>
                                                    <td>77.65</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> FY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>RATHOD MINAKSHI RAMRAO</strong></td>
                                                    <td>82.95</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> SY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>ZODGE MALVIK MAHESH </strong></td>
                                                    <td>82.53</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> SY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary ">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>RAUT SOPAN RATAN</strong></td>
                                                    <td>78.11</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> SY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>KULKARNI SHRUTI RAVINDRA</strong></td>
                                                    <td>92.67</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> TY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>SATPUTE SNEHA SANTOSH</strong></td>
                                                    <td>88.76</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> TY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>RAUT GANESH LAXMAN </strong></td>
                                                    <td>84</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Mechanical Engineering</td>
                                                    <td> TY ME</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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

                                <!-- Mechnical Ends -->


                                <!-- Electronics & Telecommunication  Start  -->
                                <div id="menu3" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">
                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Toppers.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name of Student</th>
                                                    <th>Percentage</th>
                                                    <th>Class Awarded</th>
                                                    <th>Department</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody class="table-border-bottom-0">


                                                <tr>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>PARADKAR RUSHIKESH PRASAD </strong></td>
                                                    <td>86.59</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> FY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>SHRIKHANDE SAURABH BALKRISHNA </strong></td>
                                                    <td>84.59</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> FY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>GADWE ANIKET BHAGWAN </strong></td>
                                                    <td>78</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> FY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>DIVE ARUNDHATI DEEPAK </strong></td>
                                                    <td>79.56</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> SY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>DNYANESHWARI PATIL </strong></td>
                                                    <td>78.67</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> SY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>SALUNKE RADHIKA UMESH </strong></td>
                                                    <td>78</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> SY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>BHANDARE BHAKTI GANESH </strong></td>
                                                    <td>85.29</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> TY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>NAIK DIPIKA SHIVAJI </strong></td>
                                                    <td>83.18</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> TY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>SOPPA SRUSHTI SUNIL </strong></td>
                                                    <td>81.06</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Electronics &
                                                        Telecommunication Engineering</td>
                                                    <td> TY EJ</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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

                                <!-- Electronics & Telecommunication Engineering Ends -->

                                <!--  Computer Start-->
                                <div id="menu4" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Toppers.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name of Student</th>
                                                    <th>Percentage</th>
                                                    <th>Class Awarded</th>
                                                    <th>Department</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody class="table-border-bottom-0">


                                                <tr>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>KRRISH MANOJ MEHTA </strong></td>
                                                    <td>90.36</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td> FY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>SWAYAM RUSHIKESH KULKARNI </strong></td>
                                                    <td>85.94</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td> FY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>PATHAN MUBBASHIRA KHALEDKHAN </strong></td>
                                                    <td>85.00</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td> FY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>JADHAV ABHIJEET SANTOSH </strong></td>
                                                    <td>87.47</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td>SY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>OM RAJKUMAR VARMA </strong></td>
                                                    <td>86.74%</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td>SY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>HIWRALE SANCHITA KISHOR </strong></td>
                                                    <td>85.34%</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td>SY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>VAIDYA VARAD </strong></td>
                                                    <td>89.77</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td> TY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>PAWAR KOMAL SANTOSH</strong></td>
                                                    <td>88.91</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td> TY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>PATIL NIRANJAN ARUN </strong></td>
                                                    <td>88.74</td>
                                                    <td>First Class with Distinction</td>
                                                    <td>Computer Engineering</td>
                                                    <td> TY CO</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                <!-- Computer Ends -->

                                <!-- Artificial Intelligence and Machine Learning Start -->
                                <div id="menu5" class="tab-pane fade">


                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="h5 card-header">TOPPER </div>
                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Toppers.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name of Student</th>
                                                    <th>Percentage</th>
                                                    <th>Class Awarded</th>
                                                    <th>Department</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>KAKDE RIYA AUDUMBAR</strong></td>
                                                    <td>86.58</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> FY AIML</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>DAGALE PRAGATI SHARAD</strong></td>
                                                    <td>83.10</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> FY AIML </td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>DOLAS SHUBHAM ASHOK</strong></td>
                                                    <td>77.81</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> FY AIML</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>SHENGULE HARIOM RAVSAHEB</strong></td>
                                                    <td>90.05</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> FY AIML</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>GAWANDE MANASVI SANTOSH</strong></td>
                                                    <td>86.18</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> FY AIML</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>CHAVAN AKSHADA SURESH
                                                        </strong></td>
                                                    <td>84.41</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> FY AIML</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>KAKDE RIYA AUDUMBAR</strong></td>
                                                    <td>82.3</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> SY AIML</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>DAGALE PRAGATI SHARAD</strong></td>
                                                    <td>82.67</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> SY AIML</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>DOLAS SHUBHAM ASHOK
                                                        </strong></td>
                                                    <td>79.23</td>
                                                    <td>First Class with Distinction</td>
                                                    <td class="wrap-text">Artificial Intelligence and
                                                        Machine Learning</td>
                                                    <td> SY AIML</td>
                                                    </td>
                                                    <td>
                                                        <div> <a href="edit_Toppers.php" class=" text-white">
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
                            </div>
                        </div>
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