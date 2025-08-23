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
  }

  .nav-tabs::-webkit-scrollbar-thumb:hover {
    background: #555;
  }

  .nav-tabs li {
    flex: 0 0 auto;
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
            <h4 class="text-muted fw-bold py-3 mb-4">STUDENT ACHIEVEMENT DETAIL'S</h4>



            <!-- Hoverable Table rows -->

            <div class="card">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a data-toggle="tab" href="#Civil">Civil Engineering</a>
                </li>
                <li><a data-toggle="tab" href="#Electrical">Electrical Engineering</a></li>
                <li><a data-toggle="tab" href="#Mechanical">Mechanical Engineering</a></li>
                <li><a data-toggle="tab" href="#electronic">Electronic and Tele-communication Engineering</a></li>
                <li><a data-toggle="tab" href="#Computer">Computer Engineering</a></li>
                <li><a data-toggle="tab" href="#Artificial">Artificial intelligence Engineering</a></li>
              </ul>
              <div class="tab-content">
                <div id="Civil" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-lg-6 ">
                      
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">

                      <a href="add_Student-Achivement.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Event</th>
                          <th>Year</th>
                          <th>Organized</th>
                          <th>Name of Student</th>
                          <th>Remark</th>
                          <th>Departments</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <!-- civil started -->
                        <tr>
                          <td>1</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Indian Society for Technical Education (ISTE), New Delhi.</strong></td>
                          <td>2023-24</td>
                          <td>ISTE</td>
                          <td>Digvijay Chavan</td>
                          <td>Winner</td>
                          <td>Civil</td>
                          <td>
                            <div>
                              <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;"><i class="fab fa-react fa-lg text-info me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football</strong></td>
                          <td>2023-24</td>
                          <td>IEDSSA</td>
                          <td class="text-truncate" style="max-width:250px; white-space:nowrap; overflow:hidden;">
                            Shaikh Arshan, Khan Daniyal, Mustafa Jethurwala Masood</td>
                          <td>Runner up</td>
                          <td>Civil</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;"><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Table Tennis</strong></td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td>Khan Daniyal</td>
                          <td>Runner up</td>
                          <td>Civil</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>IEDSSA (Inter Engineering Diploma Students Sport Association.) in 100M Running</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td>Khan Daniyal</td>
                          <td>Runner up</td>
                          <td>Civil</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>MSBTE Final year Exam</strong>
                          </td>
                          <td>2017-18</td>
                          <td>
                            MSBTE
                          </td>
                          <td>Shivanjali Jadhav</td>
                          <td>3rd Rank</td>
                          <td>Civil</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>NASCENT 2024</strong>
                          </td>
                          <td>2023-24</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            KK Wagh Polytechnic, Nashik
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Om Wankar, Digvijay Chavan</td>
                          <td>Participant</td>
                          <td>Civil</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <!-- civil end -->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div id="Electrical" class="tab-pane fade">
                  <!-- Electrical started -->
                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Student-Achivement.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Event</th>
                          <th>Year</th>
                          <th>Organized</th>
                          <th>Name of Student</th>
                          <th>Remark</th>
                          <th>Departments</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>1</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>MSBTE Project Competition</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            MSBTE
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Nilesh Jamdhade, Saas Sayeed and Atharva Kalaskar</td>
                          <td>Participant</td>
                          <td>Electrical</td>
                          <td>
                            <div>
                              <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>

                        <tr>
                          <td>2</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>IEDSSA</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            Kabaddi
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Mangesh Pawar, Atharva kalaskar, Gopal Rathod & Krushna Rajput</td>
                          <td>Participant</td>
                          <td>Electrical</td>
                          <td>
                            <div>
                              <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            Chess
                          </td>
                          <td>Balasaheb Dudhsagar</td>
                          <td>Participant
                          </td>
                          <td>Electrical</td>
                          <td>
                            <div>
                              <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            Kho-Kho
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Vivek Kolte, Jayraj Gadekar,Yogesh Sananse, Harshvardhan and Vedant Tayade & Sakshi Salunkhe</td>
                          <td>participant</td>
                          <td>Electrical</td>
                          <td>
                            <div>
                              <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            Basketball
                          </td>
                          <td>
                            Pranav Magar</td>
                          <td>participant</td>
                          <td>Electrical</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            Athletics
                          </td>
                          <td>
                            Atharva Kalaskar </td>
                          <td>participant</td>
                          <td>Electrical</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            Volleyball
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Tejas Deore & Vivek Kolte</td>
                          <td>participant</td>
                          <td>Electrical</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> State Level Technical Quiz Competition</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            CSMSS COP
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Asef Khan, Balaji Mote, Dhanraj Borate, Nil Omkar, Balasaheb Dudhsagar & Om Bankar</td>
                          <td>participant</td>
                          <td>Electrical</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> State Level Technical Quiz Competition</strong>
                          </td>
                          <td>2023-24</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            MIT Polytechnic,Chh. Sambhajinagar
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Vivek Kolte, Tejas Deore, Jayraj Gadekar, Arnav Khadse and Krushna Rajput</td>
                          <td>participant</td>
                          <td>Electrical</td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- Electrical end -->
                  </div>
                </div>
                <div id="Mechanical" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Student-Achivement.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <!-- Mechanical started -->
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Event</th>
                          <th>Year</th>
                          <th>Organized</th>
                          <th>Name of Student</th>
                          <th>Remark</th>
                          <th>Departments</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>1</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>State Level Paper Presentation</strong>
                          </td>
                          <td>2023-24</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            MIT Polytechnic, Aurangabad
                          </td>
                          <td>
                            Shruti Kulkarni</td>
                          <td>Winner</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>State Level Paper Presentation</strong>
                          </td>
                          <td>2023-24</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            MIT Polytechnic, Aurangabad
                          </td>
                          <td>
                            Sneha Satpute</td>
                          <td>Winner</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Shaikh Shafan Imam</td>
                          <td>Runner up</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Omkesh R. Tandale</td>
                          <td>Runner up</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Umar Ulwan Khan</td>
                          <td>Runner up</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Shaikh Yahya Shaikh Zakir</td>
                          <td>Runner up</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Football.</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Dusyant N. Sarje</td>
                          <td>Runner up</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Table Tennis.</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td>Dusyant N. Sarje</td>
                          <td>Runner up</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in ATHLETICS.</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td>
                            Rohit D. Kapse</td>
                          <td>Winner</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> National Conference entitled “Recent Innovations and Best Practices in Science and Technology”</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            CSMSS COP
                          </td>
                          <td>
                            Duigvijay Patil</td>
                          <td>3rd Rank</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> National Conference entitled “Recent Innovations and Best Practices in Science and Technology”</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            CSMSS COP
                          </td>
                          <td>
                            Shruti Kulkarni</td>
                          <td>
                            2nd Rank</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> National Conference entitled “Recent Innovations and Best Practices in Science and Technology”</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            CSMSS COP
                          </td>
                          <td>
                            Sneha Satpute</td>
                          <td>
                            2nd Rank</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>13</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> National Conference entitled “Recent Innovations and Best Practices in Science and Technology”</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            CSMSS COP
                          </td>
                          <td>
                            Dusyant N. Sarje</td>
                          <td>
                            3nd Rank</td>
                          <td>Mechanical </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Mechanical end -->
                <!-- Electronics & Telecommunication start -->
                <div id="electronic" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Student-Achivement.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Event</th>
                          <th>Year</th>
                          <th>Organized</th>
                          <th>Name of Student</th>
                          <th>Remark</th>
                          <th>Departments</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>1</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Quiz</strong>
                          </td>
                          <td>2023-24</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            MIT, chha.sambhajinagar
                          </td>
                          <td>
                            Saurabh Shrikhande</td>
                          <td>Runner up
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Quiz</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            MIT, chha.sambhajinagar
                          </td>
                          <td>
                            Rushikesh Paradkar</td>
                          <td>Runner up</td>
                          <td>Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Volleyball</strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Prachi Dattu Patil</td>
                          <td>Participation</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Volleyball
                            </strong>
                          </td>
                          <td>2023-24</td>
                          <td>
                            IEDSSA
                          </td>
                          <td>Bhakti Vikas Shinde</td>
                          <td>Participation</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Volleyball
                            </strong>
                          </td>
                          <td>2017-18</td>
                          <td>IEDSSA</td>
                          <td>Prachi Dattu Patil</td>
                          <td>Participation</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Chess</strong>
                          </td>
                          <td>2023-24</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">CSMSS,College of Polytechnic
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Saurabh Balkrushna,Shrikhande</td>
                          <td>Participation</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Basketball</strong>
                          </td>
                          <td>2023-24</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">CSMSS,College of Polytechnic
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Dhondage Ritesh Sanjaykumar</td>
                          <td>Participation</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Quiz</strong>
                          </td>
                          <td>2023-24</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Government Polytechnic,Latur
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Saurabh Balkrushna,Shrikhande</td>
                          <td>Participation</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Quiz</strong>
                          </td>
                          <td>2023-24</td>
                          <td>Government Polytechnic,Latur
                          </td>
                          <td>Rushikesh Paradkar</td>
                          <td>Participation</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Electronics & Telecommunication </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Electronics & Telecommunication end -->
                <!-- Computer started -->
                <div id="Computer" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Student-Achivement.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Event</th>
                          <th>Year</th>
                          <th>Organized</th>
                          <th>Name of Student</th>
                          <th>Remark</th>
                          <th>Departments</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>1</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>State Level Technical Event 'Brainwaves-2k25'(C-Coding)</strong>
                          </td>
                          <td>2024-25</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">MIT Polytechnic, Chh. Sambhajinagar
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Mehta Krish Manoj,Pathe Mrutyunjay Kishor</td>
                          <td>Winner</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>State Level Technical Event 'Brainwaves-2k25'(C-Coding)</strong>
                          </td>
                          <td>2024-25</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">MIT Polytechnic, Chh. Sambhajinagar
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Markar Vaidehi Raju, Kubade Priti Ashok</td>
                          <td>Runner up</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> State Level Technical Event 'Brainwaves-2k25' (Quiz Competition)</strong>
                          </td>
                          <td>2024-25</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">MIT Polytechnic, Chh. Sambhajinagar
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Kumbhakarn Prathmesh Avinash</td>
                          <td>Winner</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> State Level Technical Event 'Brainwaves-2k25' (Poster Presentation)</strong>
                          </td>
                          <td>2024-25</td>
                          <td>MIT Polytechnic, Chh. Sambhajinagar
                          </td>
                          <td>Kumbhakarn Prathmesh Avinash</td>
                          <td>Winner</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> State Level Technical Event 'Brainwaves-2k25' (Powerpoint Presentation)</strong>
                          </td>
                          <td>2024-25</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">MIT Polytechnic, Chh. Sambhajinagar
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Chape Kiran Rameshwar</td>
                          <td>Runner up</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Chess</strong>
                          </td>
                          <td>2024-25</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Mhaske Arya Mahesh</td>
                          <td>Winner</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Badminton</strong>
                          </td>
                          <td>2024-25</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Pathe Mrutyunjay Kishor,Vaidya Vivek Vidyadhar</td>
                          <td>Winner</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Long Jump</strong>
                          </td>
                          <td>2024-25</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Gaikwad Akash Krushna</td>
                          <td>Runner up</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Badminton</strong>
                          </td>
                          <td>2024-25</td>
                          <td>
                            IEDSSA
                          </td>
                          <td>Devre Subodh Rajratan</td>
                          <td>Runner up</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Table-TennisIEDSSA(Inter-Engineering Diploma Students Sports Association ) in Volleyball</strong>
                          </td>
                          <td>2024-25</td>
                          <td>IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Sadavarte Tanisha Rahul</td>
                          <td>Runner up</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Table-Tennis</strong>
                          </td>
                          <td>2024-25</td>
                          <td>
                            IEDSSA
                          </td>
                          <td>Agale Shrushti</td>
                          <td>Runner up</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Volleyball</strong>
                          </td>
                          <td>2024-25</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Sukase Ishwari Shivaji, Devre Kalyani Pradip, Hingmire Bhakti Anand,Edke Pranjal Santosh</td>
                          <td>
                            Runner up</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>13</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>IEDSSA(Inter-Engineering Diploma Students Sports Association ) in Volleyball</strong>
                          </td>
                          <td>2024-25</td>
                          <td>
                            IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">Pathe Mrutyunjay Kishor</td>
                          <td>
                            Runner up</td>
                          <td>Computer </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Computer end -->
                <!-- Artificial started -->
                <div id="Artificial" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Student-Achivement.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Event</th>
                          <th>Year</th>
                          <th>Organized</th>
                          <th>Name of Student</th>
                          <th>Remark</th>
                          <th>Departments</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>1</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA (Inter Engineering Diploma Students Sport Association.) in Chess</strong>
                          </td>
                          <td>06-02-2024</td>
                          <td>IEDSSA
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Aditi Pandit, Riddhi mehta</td>
                          <td>Winner</td>
                          <td>Artificial </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <td>2</td>
                        <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Stale Level Paper Presentation Competition 2023-24</strong>
                        </td>
                        <td>05-03-2024</td>
                        <td>CSMSSCOP
                        </td>
                        <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                          Hariom Ravsaheb Shengule,Abhijeet Appasaheb Ghanwat,Pranjal Appasaheb Ghatge,Mayuri Champat Sasane</td>
                        <td>Winner</td>
                        <td>Artificial </td>
                        <td>
                          <div> <a href="edit_Student-Achivement.php" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </button></a>
                            <a href="./edit_admission.php" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success">
                                <i class="bx bx-trash me-1 "></i> Delete
                              </button>
                            </a>
                          </div>
                        </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Stale Level Paper Presentation Competition 2023-24</strong>
                          </td>
                          <td>05-03-2024</td>
                          <td>
                            CSMSSCOP
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Rushikesh Raju Bhokare</td>
                          <td> Runner up</td>
                          <td> Artificial </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> ELECSPIRE 2K23</strong>
                          </td>
                          <td>21-09-2023</td>
                          <td>
                            CSMSSCOP
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Rushikesh Bhokare,Dhiraj Padswan</td>
                          <td> Runner up</td>
                          <td>Artificial </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> IEDSSA Chess</strong>
                          </td>
                          <td> 07-01-2024</td>
                          <td>CSMSSCOP
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Shantanu Somwanshi</td>
                          <td>Runner up</td>
                          <td>Artificial </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Stale Level Quiz Competition 2023-24</strong>
                          </td>
                          <td>05-03-2024</td>
                          <td>
                            CSMSSCOP
                          </td>
                          <td>Rushikesh Bhokare</td>
                          <td> Runner up</td>
                          <td>Artificial </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Brainwawes-2k23</strong>
                          </td>
                          <td>15-03-2023</td>
                          <td>CSMSSCOP</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Tejinakar Aadesh,Sonwane Bhavesh,Somwanshi Shantanu R,Daud Dhananjay R.</td>
                          <td>Winner</td>
                          <td>Artificial </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> National Conference entitled “Recent Innovations and Best Practices in Science and Technology"</strong>
                          </td>
                          <td>21-03-2024</td>
                          <td>
                            CSMSSCOP
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Vedashree more, Riya Kakde</td>
                          <td>Winner</td>
                          <td>Artificial </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> National Conference entitled “Recent Innovations and Best Practices in Science and Technology"</strong>
                          </td>
                          <td>21-03-2024</td>
                          <td>
                            CSMSSCOP
                          </td>
                          <td class="text-truncate" style="max-width:350px; white-space:nowrap; overflow:hidden;">
                            Shravnee Bandale, Aditi Pandit</td>
                          <td>Runner up</td>
                          <td>Artificial </td>
                          <td>
                            <div> <a href="edit_Student-Achivement.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                              <a href="./edit_admission.php" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-trash me-1 "></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Artificial end -->
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