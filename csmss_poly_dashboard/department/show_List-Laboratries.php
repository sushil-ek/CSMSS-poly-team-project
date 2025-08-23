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
            <h4 class="text-muted fw-bold py-3 mb-4">LIST OF LABORATORIES </h4>
            <div class="card">


              <ul class="nav nav-tabs ">
                <li class="active"><a data-toggle="tab" href="#menu1">Civil Engineering</a></li>
                <li><a data-toggle="tab" href="#menu2">Electrical Engineering</a></li>
                <li><a data-toggle="tab" href="#menu3">Mechanical Engineering</a></li>
                <li><a data-toggle="tab" href="#menu4">Electronic and Tele-communication Engineering</a></li>
                <li><a data-toggle="tab" href="#menu5">Computer Engineering</a></li>
                <li><a data-toggle="tab" href="#menu6">Artificial intelligence Engineering</a></li>

              </ul>


              <!-- CIVIL DEPARTMENT START -->
              <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">

                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>

                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">



                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Laboratories</th>
                          <th>Cost of Equipments (Rs.)</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <tr>
                          <td>1</td>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Surveying</strong></td>
                          <td>661595</td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong> Concrete Technology</strong></td>
                          <td>303840</td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Mechanics of Structure</strong></td>
                          <td>703205</td>
                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Geotechnical Engineering</strong>
                          </td>
                          <td>256594</td>
                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Public Health Engineering</strong></td>
                          <td>230431</td>
                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong> Model Room</strong></td>
                          <td>12480</td>
                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Civil Workshop</strong></td>
                          <td>4160</td>






                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Highway Engineering</strong>
                          </td>
                          <td>11500</td>






                          <td>



                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                <!-- CIVIL DEPARTMENT END -->

                <!--ELECTRICAL  DEPARTMENT START -->
                <div id="menu2" class="tab-pane fade">

                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>

                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">



                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Laboratories</th>
                          <th>Cost of Equipments (Rs.)</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <tr>
                          <td>1</td>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Electric Machine Laboratory</strong></td>
                          <td>806151</td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Switchgear and Protection Laboratory</strong></td>
                          <td>155719</td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Electrical Workshop</strong></td>
                          <td>8450</td>





                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Power Electronic Laboratory</strong>
                          </td>
                          <td>74300</td>






                          <td>



                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Basic Electrical Engineering Laboratory
                            </strong></td>
                          <td>262281</td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                <!--ELECTRICAL  DEPARTMENT END -->


                <!--MECHANICAL  DEPARTMENT START -->
                <div id="menu3" class="tab-pane fade">

                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>

                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">



                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Laboratories</th>
                          <th>Cost of Equipments (Rs.)</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <tr>
                          <td>1</td>
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Theory of machines</strong></td>
                          <td>138668</td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>2</td>
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Industrial Fluid Power</strong></td>
                          <td>423629</td>





                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>3</td>
                          <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Thermal Engineering</strong>
                          </td>
                          <td>45475</td>





                          <td>



                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>4</td>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Metrology & Quality control
                            </strong></td>
                          <td>235835.1</td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>5</td>
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Fluid Mechanics & Machinery</strong></td>
                          <td>334447</td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>6</td>
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Power Engineering</strong></td>
                          <td>193593</td>






                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>7</td>
                          <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Measurement & Control</strong>
                          </td>
                          <td>106666</td>






                          <td>



                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>8</td>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> Design of Machine Elements
                            </strong></td>
                          <td>41000</td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>9</td>
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>CNC LAB</strong></td>
                          <td>1399906.25</td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>10</td>
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>CAD LAB</strong></td>
                          <td>800000</td>






                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                <!--MECHANICAL  DEPARTMENT END -->

                <!--   Electronics & Tele-communication DEPARTMENT START -->
                <div id="menu4" class="tab-pane fade">

                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>

                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">



                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Laboratories</th>
                          <th>Cost of Equipments (Rs.)</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <tr>
                          <td>1</td>
                          <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Communication Lab</strong>
                          </td>
                          <td>755687</td>





                          <td>



                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Measurement Lab
                            </strong></td>
                          <td>742717</td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Basic Electronics Lab</strong></td>
                          <td>831545</td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong> Digital & microprocessor Lab</strong></td>
                          <td>153880</td>






                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Analog Electronics lab</strong>
                          </td>
                          <td>121326</td>






                          <td>



                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                <!--   Electronics & Tele-communication DEPARTMENT END -->


                <!--  Computer DEPARTMENT START -->
                <div id="menu5" class="tab-pane fade">

                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>

                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">



                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Laboratories</th>
                          <th>Cost of Equipments (Rs.)</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <tr>
                          <td>1</td>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> PROGRAMMING LAB 1
                            </strong></td>
                          <td></td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong> COMPUTER CENTER</strong></td>
                          <td></td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong> PROGRAMMING LAB 2</strong></td>
                          <td></td>





                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>SOFTWARE DEVELOPMENT AND TESTING</strong>
                          </td>
                          <td></td>






                          <td>



                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> HARDWARE & NETWORKING LAB
                            </strong></td>
                          <td></td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong> PROJECT LAB</strong></td>
                          <td></td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                <!--  Computer DEPARTMENT END -->


                <!--  Artificial Intelligence and Machine Learning DEPARTMENT START -->
                <div id="menu6" class="tab-pane fade">

                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>

                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">



                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name of Laboratories</th>
                          <th>Cost of Equipments (Rs.)</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <tr>
                          <td>1</td>
                          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong> Programming Lab 1</strong></td>
                          <td>1641893</td>





                          <td>

                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>2</td>
                          <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong> Programming Lab 2</strong>
                          </td>
                          <td>1207826</td>





                          <td>



                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>3</td>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Software Development Lab
                            </strong></td>
                          <td>1084244.45</td>


                          <td>
                            <div>
                              <a href="edit_List-Laboratries.php" class=" text-white">
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
                          <td>4</td>
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Hardware and Networking Lab</strong></td>
                          <td>1239244.45</td>



                          <td>
                            <div> <a href="edit_List-Laboratries.php" class=" text-white">
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
                <!--  Artificial Intelligence and Machine Learning DEPARTMENT END -->

              </div>
            </div>
          </div>


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