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

        <!-- Hoverable Table rows -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">OUR ALUMNI</h4>

            <div class="card">


              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#civil">Civil Engineering</a></li>
                <li><a data-toggle="tab" href="#Electrical">Electrical Engineering</a></li>
                <li><a data-toggle="tab" href="#Mechanical">Mechanical Engineering</a></li>
                <li><a data-toggle="tab" href="#Computer">Computer Engineering</a></li>
              </ul>
              <div class="tab-content">
                <div id="civil" class="tab-pane fade in active">

                  <!-- Content -->
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="h5 card-header">OUR ALUMNI </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Our-Alumni.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Student</th>
                          <th>Year of Passing</th>
                          <th>Achievement Details</th>
                          <th>DEPARTMENT</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 1</td>
                          <td>HANUMANT RANGNATH GADE</td>
                          <td>2011-12</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">BG CONSTRUCTION & DEVELOPRES, SABLKHED, AHAMADNAGAR</td>
                          <td>civil</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>VISHAL AMARSINGH BANSWAL</td>
                          <td>2012-13</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">PROPRIETOR: M/S. VB AND ASSOCIATES</td>
                          <td>civil</td>
                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>MAYUR ASARAM SATHE</td>

                          <td>2015-16</td>
                          <td>CONTRACTOR</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>ROSHAN UTTAM BAHIRAV</td>

                          <td>2015-16</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">CIVIL ENGINEER AT PC CONSTRUCTIONS</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>SARANG WAGHMARE</td>

                          <td>2015-16</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">MANAGING DIRECTOR AT BOLD STUDIO</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>MARUTI SUDAM HUD</td>

                          <td>2016-17</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">CEO OF DREAMS PLANNER & DESIGNER BIDKIN, PAITHAN</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>JAHIR KIRAN MALHARI </td>

                          <td>2016-17</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">STRUCTURAL ENGINEER AT RAMA GROUP PUNE</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>FAIZAN ZAKER QURESHI</td>

                          <td>2016-17</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">BIM ENGINEER IN DDDC UAE DUBAI</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>TUSHAR ANNASAHEB PAGORE </td>

                          <td>2017-18</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">FIELD MANAGER IN VATSALYA CONSULTING SERVICES</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>MANISH GORAKSHA ATAWANE</td>

                          <td>2017-18</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">BIM ENGINEER & MODELER AT MUMBAI AHMEDABAD HIGH SPEED RAIL PROJECT</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>11
                          </td>
                          <td>KHATIK JAMIRKHAN MUNIRKHAN </td>

                          <td>2017-18</td>
                          <td>PROJECT MANAGER</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>12
                          </td>
                          <td>KARHALE UMESH KASHINATH</td>

                          <td>2017-18</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">LECTURER ( ADITYA EDUCATION GROUP)</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>13
                          </td>
                          <td>SAURABH SOMINATH RITHE</td>

                          <td>2017-18</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">MANJEET PRIDE GROUP,CHATRAPATI SAMBHAJINAGER</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>14
                          </td>
                          <td>SHIRISH SHESERAO SALUNKE </td>

                          <td>2017-18</td>
                          <td>GOVT. CONTRACTOR</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>15
                          </td>
                          <td>SANDIP BHANUDAS DHEPLE</td>

                          <td>2017-18</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">JUNIOR ENGINEER (CIVIL) WATER RESOURCES DEPARTMENT</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>16
                          </td>
                          <td>SHAFEY KHAN </td>

                          <td>2018-19</td>
                          <td>INTERNSHIP AT QUBATIC</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>17
                          </td>
                          <td>ADARSH UDAY DUBEY </td>

                          <td>2018-19</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">CIVIL ENGINEER AT BHARUKA CONSTRUCTIONS.</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>18
                          </td>
                          <td>HITESH RAMESHWAR SHINDE </td>

                          <td>2018-19</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">SHUBHVASTU ENGINEER'S / GOVERNMENT CONTRACTOR</td>
                          <td>civil</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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

                <div id="Electrical" class="tab-pane fade">
                  <!-- Content -->
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="h5 card-header">OUR ALUMNI </div>
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
                          <th>Name of Student</th>
                          <th>Year of Passing</th>
                          <th>Achievement Details</th>
                          <th>Department</th>
                          <th>Event</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 1</td>
                          <td>Channekar Pravin Arjun</td>
                          <td>2022-23</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Placed in John Deere India Pvt. Ltd.</td>
                          <td>Electrical</td>
                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Kartik Parmeshwar Lande</td>
                          <td>2019-20</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Working as Automation Engineer</td>
                          <td>Electrical</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td> Jitendra Rathod</td>

                          <td>2019-20 </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Working as Technician in MAHADISCOM</td>
                          <td>Electrical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                <div id="Mechanical" class="tab-pane fade">

                  <!-- Content -->
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="h5 card-header">OUR ALUMNI </div>
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
                          <th>Name of Student</th>
                          <th>Year of Passing</th>
                          <th>Achievement Details</th>
                          <th>Department</th>
                          <th>Event</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 1</td>
                          <td>KHAIRNAR NIKHIL DEEPAK</td>
                          <td>2011-12</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">SR.ASSOCIATE CONSULTANT SAP MM INFOSYS LTD.PUNE</td>
                          <td>Mechanical</td>
                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>PATHAN WAJEED HAMIDKHAN</td>
                          <td>2012-13 </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">ASSISTANT MANAGER ,SUZUKI MOTOR GUJARAT PRIVATE LIMITED</td>
                          <td>Mechanical</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>ARSUL YOGESH KAILAS</td>

                          <td>2013-14 </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">DY. MANAGER APPLICATION ENGINEERING (R&D BUSINESS UNIT PUNE) KIRLOSKAR OIL ENGINES LIMITED</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>SALVE KARUNA BHAGAWANRAO</td>

                          <td>2013-14 </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">PRODUCTION PLANNER, KONECRANES ,PUNE</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>HARDE PRAVIN TUKARAM</td>

                          <td>2015-16</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">SR. ENGINEER ( UTILITY) AT JK TYRE & INDUSTRIES LTD</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>KULKARNI ANUP ANILRAO</td>

                          <td>2014-15</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">FOUNDER, SPHURIT TECHNOLOGIES , GROWTH CONSULTANT , DIGITAL MARKETING EXPERT</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>WAKLE MANISHA SAKHAHARI </td>

                          <td>2014-16</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">JE, MAHAGENCO,GOVT. OF MAHARASHTRA</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>FAIZAN ZAKER QURESHI</td>

                          <td>2014-15</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">SALES ADMINISTRATION ,GREAVES COTTON LIMITED</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>KARANDE SHAILESH SHIVAJI </td>

                          <td>2015-16</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">DEPUTY MANAGER AT GODREJ TOOLING</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>BORUDE ROHIT VISHNU</td>

                          <td>2015-16</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">STARTED OWN IT COMPANY “SNYAM TECH SOFTWARE”</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>11
                          </td>
                          <td>WAGH YOGESH ATMARAM </td>

                          <td>2015-16</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">DESIGN ENGINEER (BIW JIG & FIXTURES) ROBTECH AUTOMATION & SERVICES,PUNE.</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>12
                          </td>
                          <td>KALATRE KRISHNA RAMRAO</td>

                          <td>2016-17</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">GRAPHICS & ADVANCED GRAPHIC SPECIALIST AT JONH DEERE INDIA</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>13
                          </td>
                          <td>CHOURE POOJA SHRIHAREE</td>

                          <td>2016-17</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">DESIGN ENGINEER,AT OSBORN LIPPERT PVT.LTD</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>14
                          </td>
                          <td>SARAF AMIT ANANT </td>

                          <td>2016-17</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">CUSTOMER RETENTION SPECIALIST & CUSTOMER DELIGHT HEAD. UGAOO AGRI TECH.PUNE</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>15
                          </td>
                          <td>CHAWALI SACHIN BALAJI</td>

                          <td>2017-18</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">SENIOR ENGINEER JCB INDIA LTD. PUNE</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>16
                          </td>
                          <td>PRATHAMESH RAJESH DHAMANE</td>

                          <td>2017-18</td>
                          <td>EXECUTIVE AT SIEMENS ENERGY</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>17
                          </td>
                          <td>BOKIL PRASAD PRADEEPRAO </td>

                          <td>2018-19</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">EQUIPMENT ENGINEER AT ITW INDIA PVT LTD</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>18
                          </td>
                          <td>KAYASTH MAYUR RAJENDRA </td>

                          <td>2018-19</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">DATA ENGINEER AT TATA CONSULTANCY SERVICES,PUNE</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>19
                          </td>
                          <td>BHAVAR GANESH BABASAHEB</td>

                          <td>2018-19</td>
                          <td>ASSOCIATE AT COGNIZANT (SAP HCM & SAP ABAP CONSULTANT)</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>20
                          </td>
                          <td>BORUDE AMOL CHANGDEO </td>

                          <td>2019-20 </td>
                          <td>DCEO ,HAPPAZON TECHNOLOGIES,AURANGABAD.</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>21
                          </td>
                          <td>PRADHAN SHUBHAM PRAKASH</td>

                          <td>2019-20 </td>
                          <td>PROJECT ENGINEER WIPRO,PUNE</td>
                          <td>Mechanical</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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

                <div id="Computer" class="tab-pane fade">
                  <!-- Content -->
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="h5 card-header">OUR ALUMNI </div>
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
                          <th>Name of Student</th>
                          <th>Year of Passing</th>
                          <th>Achievement Details</th>
                          <th>Department</th>
                          <th>Event</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 1</td>
                          <td>Gawale Rahul Sahebrao</td>
                          <td>
                            2011-12

                          </td>
                          <td>
                            Techila Global Services
                          </td>
                          <td>Computer</td>
                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Naikwade Pradip Kakasaheb </td>
                          <td>
                            2011-12
                          </td>
                          <td>
                            JDCC BANK JALGAON
                          </td>
                          <td>Computer</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Makhija Juhi Prakash </td>
                          <td>
                            2011-12
                          </td>
                          <td>
                            ALC
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Naikwade Vishal V.
                          </td>
                          <td>
                            2011-12

                          </td>
                          <td>
                            Bandhan Bank , Nashik.
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td> Jadhav Shubhangi Babasabh</td>
                          <td>
                            2011-12
                          </td>
                          <td>
                            Nihilent Technology , Pune.
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Hiwrale Sushma J.</td>
                          <td>
                            2011-12
                          </td>
                          <td>
                            TCS , Pune..
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Chavhan Rahul Janardhan</td>
                          <td>
                            2011-12
                          </td>
                          <td>
                            PT Midas Daya , Teknologi, Indonesia.
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Aksa Khanr</td>
                          <td>
                            2011-12
                          </td>
                          <td>
                            Telcon Technology , Aurangabad.
                          </td>
                          <td>Computer</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Teke Urmila Shivaji</td>
                          <td>
                            2011-12
                          </td>
                          <td>
                            Wipro Technology , Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td>Satpute Vishal Ratan</td>
                          <td>
                            2011-12
                          </td>
                          <td>
                            Tata Steel Ltd, Aurangabad
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>11
                          </td>
                          <td>Deshpande Sanket Vivek</td>
                          <td>
                            2014-15
                          </td>
                          <td>
                            Ekatta Innovation
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>12
                          </td>
                          <td>Zalwar Shubham Manoj</td>
                          <td>
                            2014-15
                          </td>
                          <td>
                            Johnson & Johnson
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>13
                          </td>
                          <td> Gujar Akshay Bhimrao</td>
                          <td>
                            2014-15
                          </td>
                          <td>
                            ICICI GIC
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>14
                          </td>
                          <td>Narkhede Pankaj Pramil</td>
                          <td>
                            2014-15
                          </td>
                          <td>
                            Cognizant technology
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>15
                          </td>
                          <td>Burhade Satyam Dipak</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Atteq Software,Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>16
                          </td>
                          <td>Wagh Shrikant Pandurang
                          </td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            ATOS Intel,Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>17
                          </td>
                          <td>Sawant Seema Bhagchand</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            TCS,Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>18
                          </td>
                          <td>Thosar Mrunal Chandrabhan</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            IBM India pvt limited
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>19
                          </td>
                          <td>Bande Dnyaneshwar Macchindra</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Cognizant Technology solutio
                          </td>
                          <td>Computer</td>


                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>20
                          </td>
                          <td>Kolte Nikita Tulshiram</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Zcon solutions, Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>21
                          </td>
                          <td>Joshi Punam Surendra</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Quality kiosk technolg Pvt Ltd, Mumbai
                          </td>
                          <td>Computer</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>22
                          </td>
                          <td>Magar Vaishali Devidas</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Selleck India pvt Ltd, Hyderabad
                          </td>
                          <td>Computer</td>


                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>23
                          </td>
                          <td>Narwade Pranita Jayendra</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Ekatta Innovation
                          </td>
                          <td>Computer</td>
                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>24
                          </td>
                          <td>Salunke Ajinkya Kalyan</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Zebra Technology, Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>25
                          </td>
                          <td>Surse Aarti Ramraor</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            TCS
                          </td>
                          <td>Computer</td>
                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>26
                          </td>
                          <td>hinde Supriya Suresh</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            TCS
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>27
                          </td>
                          <td>Shinde Ajay Balasaheb</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Infosys, Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>28
                          </td>
                          <td>Gadwe Priyanka Rajendra</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            TCS, Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>29
                          </td>
                          <td>Deshmukh Sneha Netaji</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            L & T, Mumbai
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>30
                          </td>
                          <td>Arshiya Naaz Shaikh Azeezr</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Samata Foundation, Moin UL Ullum School, Aurangabad
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>31
                          </td>
                          <td>Kulkarni Sanket Uday</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Infosis ltd, Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 32</td>
                          <td>Manware Anuja Ravindrar</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Dhoot Transmission Pvt. Ltd
                          </td>
                          <td>Computer</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i>33</td>
                          <td>Kale Shubham Dileep</td>
                          <td>
                            2015-16
                          </td>
                          <td>
                            Intellinum Solutions India Pvt Ltd, Mumbai
                          </td>
                          <td>Computer</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>34
                          </td>
                          <td>Wankhede Titiksha Ravindra</td>
                          <td>
                            2015-17
                          </td>
                          <td>
                            Infosys, Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>35
                          </td>
                          <td>Trigote Deepali Dadarao</td>
                          <td>
                            2015-17< /center>
                          </td>
                          <td>
                            TCS
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>36
                          </td>
                          <td>Tongire Shweta Kanthilal</td>
                          <td>
                            2015-17
                          </td>
                          <td>
                            Capgemini, Pune
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>37
                          </td>
                          <td>Patil Pallavi Sanjay</td>
                          <td>
                            2015-17
                          </td>
                          <td>
                            Bussiness Technology
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>38
                          </td>
                          <td>Devatwal Yogeshwari Sanjay</td>
                          <td>
                            2015-17
                          </td>
                          <td>
                            Infosys, Pune
                          </td>
                          <td>Computer</td>


                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>39
                          </td>
                          <td>Niture Akruti Omprakash</td>
                          <td>
                            2015-17
                          </td>
                          <td>
                            Capgemini, Pune
                          </td>
                          <td>Computer</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>40
                          </td>
                          <td>Jaitmal Ishwar Ramesh</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            TCS
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>41
                          </td>
                          <td>Kharabe Neha Prabhakar</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            TCS
                          </td>
                          <td>Computer</td>



                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>42
                          </td>
                          <td>Pathan Shelkhan Khamruddin</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            TCS
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>43
                          </td>
                          <td>Dudhe Bhushan Jayant</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            Cognizant
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>44
                          </td>
                          <td>Nagre Rushikesh Ramdas
                          </td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            TCS
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>45
                          </td>
                          <td>Kulkarni Kajal Prashant</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            Fujitsu japan
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>46
                          </td>
                          <td>Tipare Bhagyashree Pravin</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            Accenture
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>47
                          </td>
                          <td>Dhumal Rahul Sainath</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            NEXBENICS
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>48
                          </td>
                          <td>Chavan Apeksha Yashodhanr</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            PROSTERA
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>49
                          </td>
                          <td>Shende Swapnil Mohan</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            InfoBeans
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>50
                          </td>
                          <td>Satpute Dipak Ramesh</td>
                          <td>
                            2015-18
                          </td>
                          <td>
                            Accenture
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>51
                          </td>
                          <td>Mahadik Pooja Rajendra</td>
                          <td>
                            2015-19
                          </td>
                          <td>
                            TCS
                          </td>
                          <td>Computer</td>

                          <td>


                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>52
                          </td>
                          <td>Jadhav Vikaschandra Sanjay
                          </td>
                          <td>
                            2015-19
                          </td>
                          <td>
                            Aloha Technology, Baner, Pune.
                          </td>
                          <td>Computer</td>

                          <td>
                            <div> <a href="edit_Our-Alumni.php" class=" text-white">
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


              </div>
            </div>

            <hr class="my-5" />


            <!-- Footer -->
            <!-- Footer -->
            <?php
            include('../common/footer.php');

            ?>
            <!-- / Footer -->
          </div>
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->

        <!-- / Layout page -->


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