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
            <h4 class="text-muted fw-bold py-3 mb-4">DEPARTMENT SLIDER</h4>



            <!-- Hoverable Table rows -->

            <div class="card">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a data-toggle="tab" href="#Civil">Civil Engineering</a>
                </li>
                <li><a data-toggle="tab" href="#Electrical">Electrical Engineering</a></li>
                <li><a data-toggle="tab" href="#Mechanical">Mechanical Engineering</a></li>
                <li><a data-toggle="tab" href="#electronic">electronic and Engineering</a></li>
                <li><a data-toggle="tab" href="#Computer">Computer Engineering</a></li>
                <li><a data-toggle="tab" href="#Artificial">Artificial intelligence Engineering</a></li>
              </ul>
              <div class="tab-content">
                <div id="Civil" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">

                      <a href="add_Department-Slider.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>Department</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <!-- civil started -->
                        <tr>
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Civil</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Civil</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                      <a href="add_Department-Slider.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>Department</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Electrical</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Electrical</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                      <a href="add_Department-Slider.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <!-- Mechanical started -->
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>image</th>
                            <th>Department</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td>
                              <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up list-unstyled"
                                title="Card img">
                                <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                              </li>
                            </td>
                            <td>Mechanical</td>
                            <td>
                              <div>
                                <a href="edit_Department-Slider.php" class=" text-white">
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
                            <td>
                              <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up list-unstyled"
                                title="Card img">
                                <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                              </li>
                            </td>
                            <td>Mechanical</td>
                            <td>
                              <div>
                                <a href="edit_Department-Slider.php" class=" text-white">
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
                      <a href="add_Department-Slider.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>Department</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Electronics & Telecommunication</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Electronics & Telecommunication</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                      <a href="add_Department-Slider.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>Department</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Computer</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Computer</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                      <a href="add_Department-Slider.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>Department</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Artificial</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
                          <td>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up list-unstyled"
                              title="Card img">
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </td>
                          <td>Artificial</td>
                          <td>
                            <div>
                              <a href="edit_Department-Slider.php" class=" text-white">
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
    </div>
  </div>

</body>

</html>