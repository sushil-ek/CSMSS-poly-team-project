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
  data-template="vertical-menu-template-free"
>
  <?php
    include('../common/header_link.php');
  ?>
  <style>
    .new-para {
  width: 441px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
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

         <!-- Navbar -->
        <?php
include '../common/header.php';

?>

          <!-- / Navbar -->

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="text-muted fw-bold py-3 mb-4">NEWS MEDIA</h4>

             

            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">NEWS MEDIA</div>
                  </div>
                 
                  <div class="col-lg-6 d-flex justify-content-end">
                    <a href="add-news-media.php">
                      <button type="button" class="btn btn-primary m-4">ADD+</button>
                    </a>
                  </div>
                </div>

                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>SR.NO</th>
                        <th>Title</th>
                        <th> img</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><p class="new-para">Opportunities in polytechnic education after the 10th</p></td>
                        <td>
                          
                            <img src="../../assets/img/news-media/sakal.jpeg" alt="Avatar" style="height:50px;width:50px"/>

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news-media.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>2</strong></td>
                        <td><p class="new-para">Chhatrapati Shahu Maharaj Shikshan Sanstha's College  of Polytechnic Students Maintained 100% Results In "Summer Examination- 2025".</p></td>
                        <td>
                         
                           <img src="../../assets/img/news-media/kesri.jpeg" alt="Avatar" style="height:50px;width:50px" />
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news-media.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>3</strong></td>
                        <td> <p class="new-para">Chhatrapati Shahu Maharaj Shikshan Sanstha's Collegeof Polytechnic Students maintained the bright tradition of the results in "Winter Examination - 2024" </p></td>
                        <td>
                           <img src="../../assets/img/news-media/Chhatrapat-winter1.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
                      
                        <td>
                          
                             <div> <a href="edit-news-media.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>4</strong>
                        </td>
                        <td> <p class="new-para">Indian Army Colonel Parshuram Wagh said that the Indian Army is a great option to build a career with national service </p></td>
                        <td>
                          <img src="../../assets/img/news-media/navbharat3.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                           
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news-media.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>5</strong>
                        </td>
                        <td> <p class="new-para">NBA Accreditation </p></td>
                        <td>
                          <img src="../../assets/img/news-media/sakal3.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>6</strong>
                        </td>
                        <td> <p class="new-para">सीएसएमएसएस कॉलेज ऑफ पॉलिटेक्निकने राखली निकालाची उज्वल परंपरा </p></td>
                        <td>
                         <img src="../../assets/img/news-media/desh1.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>7</strong>
                        </td>
                        <td> <p class="new-para">सीएसएमएसएस कॉलेज ऑफ पॉलिटेक्निकने विभागीय क्रीडा स्पर्धेमध्ये १२ पारितोषके पटकावली </p></td>
                        <td>
                         <img src="../../assets/img/news-media/img2.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>8</strong>
                        </td>
                        <td> <p class="new-para">CSMSS College of Polytechnic students winter exam - 2023 result is 97 percentage.</p></td>
                        <td>
                         <img src="../../assets/img/news-media/CSMSS-navbharat7.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>9</strong>
                        </td>
                        <td> <p class="new-para">National Road Sefety Program - 2024.</p></td>
                        <td>
                          <img src="../../assets/img/news-media/National-sakal6.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>10</strong>
                        </td>
                        <td> <p class="new-para">MSBTE Organised "Capacity Building Faculty Orientation Workshop" under K-Scheme. </p></td>
                        <td>
                         <img src="../../assets/img/news-media/MSBTE-m5.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                           
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>11</strong>
                        </td>
                        <td> <p class="new-para">CSMSS College of Polytechnic Students Annual Gathering-2024 </p></td>
                        <td>
                          <img src="../../assets/img/news-media/Annual-divya.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>12</strong>
                        </td>
                        <td> <p class="new-para">CSMSS College of Polytechnic got Excellent Grade by MSBTE,Mumbai </p></td>
                        <td>
                         <img src="../../assets/img/news-media/Excellent-desh3.jpeg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>13</strong>
                        </td>
                        <td> <p class="new-para">CSMSS College of Polytechnic received Excellent Remark by MSBTE, Mumbai </p></td>
                        <td>
                          <img src="../../assets/img/news-media/Remark-devgiri1.jpg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                           
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>14</strong>
                        </td>
                        <td> <p class="new-para">CSMSS College of Polytechnic last year students achieve 100% result in final exam </p></td>
                        <td>
                          <img src="../../assets/img/news-media/students-bharat.jpg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                           
                       
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>15</strong>
                        </td>
                        <td> <p class="new-para">MOU's signed between MASSIA and CSMSS College pf Polytechnic </p></td>
                        <td>
                         <img src="../../assets/img/news-media/MOU-sakal9.jpg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                          
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
                          </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>16</strong>
                        </td>
                        <td> <p class="new-para">CSMSS College of Polytechnic 24 Students get selected in Campus Placement </p></td>
                        <td>
                        <img src="../../assets/img/news-media/Placement-bharat1.jpg" alt="Avatar" style="height:50px;width:50px" />
                        </td>

                           
                       
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
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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