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
                <div class="content-wrapper">


                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4">FACULTY DETAILS</h4>
                        <div class="card">
                            <ul class="nav nav-tabs ">
                                <li class="active"><a data-toggle="tab" href="#civil">Civil Engineering</a></li>
                                <li><a data-toggle="tab" href="#electrical">Electrical Engineering</a></li>
                                <li><a data-toggle="tab" href="#mechanical">Mechanical Engineering</a></li>
                                <li><a data-toggle="tab" href="#electronic">electronic and Engineering</a></li>
                                <li><a data-toggle="tab" href="#computer">Computer Engineering</a></li>
                                <li><a data-toggle="tab" href="#Artificial">Artificial intelligence Engineering</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="civil" class="tab-pane fade in active">

                                    <!-- new civil start -->


                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Faculty-Details.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr.no.</th>
                                                    <th>Name </th>
                                                    <th>Qualification</th>
                                                    <th>Designation</th>
                                                    <th>Profile</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. MORE MAHESH RAMESHRAO </strong></td>
                                                    <td>B.E.,M.E.</td>
                                                    <td class="fw-bold">HOD</td>
                                                    <td><a href="https://drive.google.com/file/d/1EngXCArRFk1RfkAJkDQf_5gBRAHmaq3k/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. JADHAV VIKAS ABASAHEB </strong></td>
                                                    <td>B.E.,M.E.</td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1ooTlAHjW5WhVNbLFiz_81IF_l5nl4c-B/view">View</a></td>




                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. GORE RAJENDRA HAUSHIRAM </strong></td>
                                                    <td>B.E.,M.E.</td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1H3HVPYAXDo25AKfGtahQYaHpZtoJvoiZ/view">View</a></td>


                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs. SHETE AMRUTA SUNILKUMAR </strong>
                                                    </td>
                                                    <td>B.E.</td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1r2yEUJvkfkFnwlOMugyrWdYkFZJNS9aD/view">View</a></td>



                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. NAGARGOJE SADHU BAJIRAO </strong></td>
                                                    <td>B.E.,M.E.</td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1_yHfXnNSAbyUTafyw3ryLDVEfDfnOHYJ/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs.RUDRAKANTHWAR AKANKSHA SATISH </strong></td>
                                                    <td>B.E.</td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1wPFZEyIeZDj7kaaSxiMB8-JbACY2IXDP/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Dr.TAYDE AMIT PANJABRAO

                                                        </strong></td>
                                                    <td>M.Sc., Ph.D.</td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1JnH1s9y2YE51J_A_SniXklaYMW0hfhMu/view">View</a></td>




                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button></a>
                                                            <a href="#" class=" text-white">
                                                                <button type="button" class="btn rounded-pill btn-info">
                                                                    <i class="bx bx-trash me-1 "></i> Delete
                                                                </button></a>
                                                        </div>



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
                                            <a href="add_Faculty-Details.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr.no.</th>
                                                    <th>Name</th>
                                                    <th>Qualification</th>
                                                    <th>Designation</th>
                                                    <th>Profile</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. RAHANE CHANDRASHEKHAR VINAYAK
                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td class="fw-bold">HOD</td>
                                                    <td><a href="https://drive.google.com/file/d/1X6cI6_R3GyFUZmtPhtP_AXSJXFgGyk9i/view">View</a></td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. MALI SATISH KUMAR RAMLAKHAN
                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1DYCYIEdahuJQn-BslT_0v195NF5YxJUE/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr MOMIN FAISAL AHMED

                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1M5B61ncyrlowVM2bTqacLzNOR-H2GZAA/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. POTE AKSHAY MUNJABHAU

                                                        </strong>
                                                    </td>
                                                    <td>B.E.,M.TECH. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1K5ysi1PcZRNqm3PXhqYXnvV_bIWaf8_R/view">View</a></td>




                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. MITKAR AVINASH HARISHCHANDRA

                                                        </strong></td>
                                                    <td>B.E.,M.TECH. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/19cZS8iWewKqdVqeF7Jv_8JlBSPX_8WzF/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr.JADHAV PRADIP RAMDAS

                                                        </strong></td>
                                                    <td>B.E.,M.TECH. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1HplQfIXEqezpskySDZVWHx367v4s3jAX/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs.BANSOD VARSHA ASHOK

                                                        </strong></td>
                                                    <td> B.E.,M.TECH.</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1x4NaXJ9lqe4IsFWVI1LSIDwa_GqhXISa/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Ms. PATIL USHA ANNARAO

                                                        </strong>
                                                    </td>
                                                    <td> M.SC. (MATH)</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1NuVPZkzq65uvDORtZdICZfcTNNY9y0wi/view">View</a></td>



                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs.AUTE PRANJALI JAGDISHRAO

                                                        </strong></td>
                                                    <td>M.SC, B.ED (PHYSICS)</td>

                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1tnQEhxRHi2dWcjGw2wNvDwcauxWjV9Z5/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                <!-- electrical end -->

                                <!-- mechanical start -->
                                <div id="mechanical" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Faculty-Details.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr.no.</th>
                                                    <th>Name</th>
                                                    <th>Qualification</th>
                                                    <th>Designation</th>
                                                    <th>Profile</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. MADAN SANDIP SARJERAO

                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td class="fw-bold">HOD</td>
                                                    <td><a href="https://drive.google.com/file/d/1CBWnE8vJftJ0BKqbVvhU2WGdzkGJgSnW/view">View</a></td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr.AWHALE SAGAR MANSARAM

                                                        </strong></td>
                                                    <td>B.TECH., M.E.
                                                    </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1MgALD_l7sGPIX8Bzl4-r8_2RkH3RkC0d/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. LAHORE DHANSHRI RATNAKAR


                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/12mJPQGdxBd8B69O3PE7P8MrBRaINvRO3/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. SAHANE GIRISH KISANRAO


                                                        </strong>
                                                    </td>
                                                    <td>B.E.,M.E.
                                                    </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1qPO-IsNYUKUF_i_b-3oMzNAWsqrX6Oim/view">View</a></td>




                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. UGALE SMITA KAKASAHEB


                                                        </strong></td>
                                                    <td>B.E.
                                                    </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1MFsJMI5RJuz55dSw-N7MHNG43Y2neo8G/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. CHIKNE RAVINDRA KAILAS


                                                        </strong></td>
                                                    <td>B.E.
                                                    </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1mnWF9PrziRqCoZzKzwtqBvmoYL7zcfsC/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. MULEY SHRADHA KRUSHNARAO

                                                        </strong></td>
                                                    <td> B.E.
                                                    </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1dWYhE74FiENzz57biip8CKrl_HBIacgN/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. SHELKE VIJAY RUPCHAND


                                                        </strong>
                                                    </td>
                                                    <td> B.E., M.E.
                                                    </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1WhWK9RvctqLVHJYms9ZyouZSBQSxPaqS/view">View</a></td>



                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. SONAWANE ANIKET APPASAHEB


                                                        </strong></td>
                                                    <td>B.E.
                                                    </td>

                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1GCXYTAFHCedQt3EOIWpSp0MewetGfZw7/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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

                                                <td>10</td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr.RUPNAR GANESH POPAT



                                                    </strong></td>
                                                <td>B.E.,M.E
                                                </td>

                                                <td>LECTURER </td>
                                                <td><a href="https://drive.google.com/file/d/1WnYO8hpPaGaw-q477ljW8er2skseu4ob/view">View</a></td>

                                                <td>
                                                    <div>
                                                        <a href="edit_Faculty-Details.php" class=" text-white">
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

                                <!-- mechanical department end -->

                                <!-- electronic start -->
                                <div id="electronic" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Faculty-Details.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr.no.</th>
                                                    <th>Name</th>
                                                    <th>Qualification</th>
                                                    <th>Designation</th>
                                                    <th>Profile</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>DR.SHASHIKANT RANGNATHRAO DIKLE
                                                        </strong></td>
                                                    <td>B.E.,M.E.,Ph.D.
                                                    </td>
                                                    <td class="fw-bold">Principal</td>
                                                    <td><a href="https://drive.google.com/file/d/14f6giIZIfQVB6MUP8SaYJ--OVhTfII68/view">View</a></td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. NARANGALE MADHAV DATTATRAY
                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td>HOD</td>
                                                    <td><a href="https://drive.google.com/file/d/1OAqI_9WbpB3XjbCtQXRFHNMn_dD6vYhW/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Ms. BHANDARU SWARNSANDYA HARIBABU


                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/15wA4EY2S73dhzaVf3bWwtMdvvHhEeBhn/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mr. LAMB DHANANJAY SUDAMRAO

                                                        </strong>
                                                    </td>
                                                    <td>B.E.,M.E.</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1ge0pZDYoXHyTZygMUHNyk3J743EH7fWA/view">View</a></td>




                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. SHISODE VIRENDRASINH UDAYSINH
                                                    <td>B.E.</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1ojuyd2zCNIH0usLSoS0R1Vr5lCAeZrHa/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs. PATIL VIJAYA SAHEBRAO

                                                        </strong></td>
                                                    <td>M.Tech, B.E. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1LsOCz4kuKxFEpdkx6wPyR5urLzgsRBnn/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. DHANWADE BHARAT GANGARAM
                                                        </strong></td>
                                                    <td> M.A. (ENGLISH)</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/10kktRLN-4ykAimxbVY4zvtfa-GrPcsiO/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Ms. SAKHARE MANISHA BHASKARRAO
                                                        </strong></td>
                                                    <td>M.SC.(MATHS), B.ED.</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1QVy7NqlS5iAi1Qle0sLcVy8tT46a4MEH/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                <!-- electronic end -->

                                <!-- computer start -->
                                <div id="computer" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Faculty-Details.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr.no.</th>
                                                    <th>Name</th>
                                                    <th>Qualification</th>
                                                    <th>Designation</th>
                                                    <th>Profile</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. POPHALE RUPALI SUBHASH</strong></td>
                                                    <td>B.E., M.TECH. </td>
                                                    <td class="fw-bold">HOD</td>
                                                    <td><a href="https://drive.google.com/file/d/1jYDNlErcIFsjaPQRXVcQWZkGIt22PXxD/view">View</a></td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs. BORLEPWAR ARCHANA P.
                                                        </strong></td>
                                                    <td>B.E., M.TECH </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1TwdIjcd8w901strdm3JFOp41KCtlKkiu/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. SAMRAT SONU ASHOK

                                                        </strong></td>
                                                    <td>B.E. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1t_Wd_T8t2DffYo5B7rFRhgM_BLWs-jG-/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Miss. PATHAN HEENA MAHEBOOB

                                                        </strong>
                                                    </td>
                                                    <td>B.E. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1tu-aOLT45cMs0jlUUwqtzi9PxS2SnBqM/view">View</a></td>




                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. KUDLIKAR ANURADHA KIRAN

                                                        </strong></td>
                                                    <td>B.E.,M.E.. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/18vxcezpmY1QioZgc6VVjemYlnn7c2t19/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs.SONAWANE KALYANI ANIKET

                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1gKHoK50otBeRkZkCBJl1m27aum23hx8x/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr.DHOPTE MANGESH AMBADAS

                                                        </strong></td>
                                                    <td> B.E.</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1Fb3h90TW_T_sxtS1m48CpV75AtsA4S-k/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Miss.WAGH NISHA ANIL

                                                        </strong>
                                                    </td>
                                                    <td>B.E</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1FDbD8pYALrBIecOz4vlaDmFII4tiEJKz/view">View</a></td>



                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Miss.JADHAV MOHINI GULAB
                                                        </strong></td>
                                                    <td>B.E.</td>

                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1ddtFDKsJZCBanGcPb1pLoyJNhpfATTLv/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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





                                                </tr>


                                                <tr>
                                                    <td>10</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Miss.ZALKE RANI VINAYAK</strong></td>
                                                    <td>B.E. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1XpsAbxRDmXvGVcUwIwb4p4V16_SzOx91/view">View</a></td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Miss.WAGH NEHA SUNIL
                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1dWYhE74FiENzz57biip8CKrl_HBIacgN/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td>12</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs.LIPANE SHRADDHA UMESH

                                                        </strong></td>
                                                    <td>B.E., M.TECH.. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1ygQFWznjzE6775_llhGlMLeoCm1s56ec/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td>13</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Ms.KULKARNI RASHMI LAXMIKANT
                                                        </strong>
                                                    </td>
                                                    <td>B.E. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1wBJ18GZ8Y-_hYdnu_ihXgL1oJK4Gdcvm/view">View</a></td>




                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td>14</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Ms.JAYBHAYE PRIYANKA BABASAHEB


                                                        </strong></td>
                                                    <td>B.E.,M.E.. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/14kZkvJzTbePf04bVPG-kFS3_GDYxyadD/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td>15</td>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs.TURUKMANE ASHVINI MILIND

                                                        </strong></td>
                                                    <td>M.SC.(CHEMISTRY)B.ED. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/14kZkvJzTbePf04bVPG-kFS3_GDYxyadD/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td>16</td>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mr. KHILLARE SUDARSHAN DILIP

                                                        </strong></td>
                                                    <td> M.SC.(PHYSICS)</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/14kZkvJzTbePf04bVPG-kFS3_GDYxyadD/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td>17</td>
                                                    <td>
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs.MOPARI SHILPA SHRIKANT </strong>
                                                    </td>
                                                    <td>M.SC (STAT.), B.ED (SCI. & MATH)</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/105bsGeZaHD0oWK3wyMmszlMg6XEjEyEh/view">View</a></td>



                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td>18</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Dr.SHELKE VISHNU CHHABU
                                                        </strong></td>
                                                    <td>M.A.,Ph.D.(ENGLISH)</td>

                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1PS9BNvrSusiUkRcZlHf5jwELffKJTJA7/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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




                                <!-- computer department end -->
                                <!-- artificial department start -->
                                <div id="Artificial" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Faculty-Details.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr.no.</th>
                                                    <th>Name</th>
                                                    <th>Qualification</th>
                                                    <th>Designation</th>
                                                    <th>Profile</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mrs. Sonal Rajesh Borakhade
                                                        </strong></td>
                                                    <td>B.E.,M.E. </td>
                                                    <td class="fw-bold">HOD</td>
                                                    <td><a href="https://drive.google.com/file/d/16NUMicKAxOOBsQEt89JxRMDVWaCl9Le5/view">View</a></td>


                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mrs. Surwade Sulbha Sachin
                                                        </strong></td>
                                                    <td>B.Tech. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1dWYhE74FiENzz57biip8CKrl_HBIacgN/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. Thubrikar Nishigandha Harshad

                                                        </strong></td>
                                                    <td>B.Tech. </td>
                                                    <td>LECTURER</td>
                                                    <td><a href="https://drive.google.com/file/d/1dWYhE74FiENzz57biip8CKrl_HBIacgN/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Mrs. Pallavi Sanjay Futane

                                                        </strong>
                                                    </td>
                                                    <td>M.TECH. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1v34pmK5lY8wlumJ3qfMh8jGIuW9TYmD6/view">View</a></td>




                                                    <td>



                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mr. Dawane Maroti Parsaram

                                                        </strong></td>
                                                    <td>M.A. Eng., NET, SET </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1v34pmK5lY8wlumJ3qfMh8jGIuW9TYmD6/view">View</a></td>

                                                    <td>
                                                        <div>
                                                            <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Mr. Aditya Arun Sharma

                                                        </strong></td>
                                                    <td>M.TECH. </td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1oHSpXmsTsYmbu8wfVOcPbwAh3IOIyMc7/view">View</a></td>


                                                    <td>
                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mrs. Manisha B Sakhre

                                                        </strong></td>
                                                    <td> M.Sc. Maths, B.Ed.</td>
                                                    <td>LECTURER </td>
                                                    <td><a href="https://drive.google.com/file/d/1QVy7NqlS5iAi1Qle0sLcVy8tT46a4MEH/view">View</a></td>



                                                    <td>

                                                        <div> <a href="edit_Faculty-Details.php" class=" text-white">
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


                                <!-- artificial department end -->
                            </div>




                            <div class="content-backdrop fade"></div>
                            <!-- Content wrapper -->
                            <!-- / Layout page -->
                        </div>

                        <!-- Content -->


                        <hr class="my-5" />


                        <!-- Footer -->
                        <!-- Footer -->
                        <?php
                        include('../common/footer.php');

                        ?>
                        <!-- / Footer -->
                    </div>
                    <!-- Overlay -->
                    <div class="layout-overlay layout-menu-toggle"></div>
                </div>
                <!-- / Layout wrapper -->
            </div>

            <?php
            include('../common/footer-link.php');


            ?>
            <!-- Core JS -->

</body>

</html>