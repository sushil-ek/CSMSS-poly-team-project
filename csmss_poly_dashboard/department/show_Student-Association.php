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
                        <h4 class="text-muted fw-bold py-3 mb-4">STUDENTS' ASSOCIATION (EESA)-24-25</h4>
                        <!-- Hoverable Table rows -->
                        <div class="card">

                            <ul class="nav nav-tabs mt-5">
                                <li><a data-toggle="tab" href="#Electrical">Electrical Engineering</a></li>
                                <li><a data-toggle="tab" href="#Mechanical">Mechanical Engineering</a></li>
                                <li><a data-toggle="tab" href="#Electronic">Electronic and Engineering</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="Electrical" class="tab-pane fade in active">

                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="h5 card-header">STUDENTS' ASSOCIATION (EESA)-24-25 </div>
                                        </div>
                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_admission.php">
                                                <button type="button" class="btn btn-primary m-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name of the Candidate</th>
                                                    <th>Post</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 1</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Pawar Om Punjaram</td>

                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">PRESIDENT</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i>2</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Badgujar Shantanu</td>

                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">VICE PRESIDENT</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>
                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>3
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Rathod Neha</td>

                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">SECRETARY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>4
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Roadsamudre Siddesh Balaji</td>

                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">TECHNICAL EVENT CO-ORDINATOR-TY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>5
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Kolte Vivek</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">DISCIPLINE HEAD</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>6
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Jadhav Sakshi Kakasaheb</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">TECHNICAL EVENT CO-ORDINATOR-SY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                <tr>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>7
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Deore Tejas </td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">SPORTS SECRETARY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>8
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Gadekar Jayraj</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">TREASURER</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>9
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Waghmar Prerna Vijay </td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">JOINT SECRETARY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>10
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Bahure Rohini Vitthalsing</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">DECORATION HEAD</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electrical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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

                                <!--/ Hoverable Table rows -->

                                <div id="Mechanical" class="tab-pane fade">
                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="h5 card-header">STUDENTS' ASSOCIATION (EESA)-24-25</div>
                                        </div>
                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_admission.php">
                                                <button type="button" class="btn btn-primary m-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name of the Candidate</th>
                                                    <th>Post</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i>1</td>
                                                <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MS. SHRUTI KULKARNI</td>

                                                <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">PRESIDENT</td>
                                                <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                <td>
                                                    <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i>2</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MR. GANESH RAUT</td>

                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">VICE PRESIDENT</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>3
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;"> MR. MALVIK ZODGE</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">SECRETARY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>4
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MS. SNEHA SATPUTE/td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">EDITORIAL /DOCUMENTATION HEAD</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>5
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MR. AADARSH BORSE


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">CULTURAL HEAD</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>6
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MR. OM TAUR


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">SPORT HEAD</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>7
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MS. ANUSHKA HAMAND


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">LADY REPRESENTATIVE</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>8
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MR. DUSYANT SARJE


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">TREASURER</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>9
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MR. SOPAN RAUT


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">SOCIAL ACTIVITY HEAD</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Mechanical</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                <div id="Electronic" class="tab-pane fade">

                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="h5 card-header">STUDENTS' ASSOCIATION (EESA)-24-25</div>
                                        </div>
                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_admission.php">
                                                <button type="button" class="btn btn-primary m-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name of the Candidate</th>
                                                    <th>Post</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 1</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">DAITHANKAR TEJAS SACHIN</td>

                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">PRESIDENT</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>
                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i>2</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">GADWE ANIKET BHAGWAN</td>

                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">VICE PRESIDENT</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>3
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">GONDGE KRUSHNA ASHOK</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">SECRETARY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>4
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">MEHETAR SHRAVANI ARJUN</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">TECHNICAL EVENT CO-ORDINATOR-TY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>5
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">JIVRAK SONALI NARAYAN</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">DISCIPLINE HEAD</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>6
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">PARADKAR RUSHIKESH PRASA</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">SPORTS SECRETARY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-success">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>

                                                <tr>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>7
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">PATIL PRACHI DATTU </td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">TREASURER</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>8
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">SHRIKHANDE SAURABH BALKRISHNA</td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">JOINT SECRETARY</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>9
                                                    </td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">PRADHAN HARSHAL BHASKAR </td>


                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">DECORATION HEAD</td>
                                                    <td class="text-truncate" style="max-width:100px; white-space:nowrap; overflow:hidden;">Electronic</td>

                                                    <td>
                                                        <div> <a href="edit_event.php" class=" text-white">
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

                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>







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