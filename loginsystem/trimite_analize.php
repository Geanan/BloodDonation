<?php
     include_once 'doctorHeader.php';
?>





<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-md-6">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header" style="background-color:  #CE3C3C">
                            <h4 class="mb-0" style="color: white">Trimite Analize</h4>
                        </div>

                        <div class="card-body">


                               <form class="form" role="form" autocomplete="off" action="includes/formular.inc.php" method="POST">
                                    
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Donor ID</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="first" placeholder="123">
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="last" placeholder="Jane">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="last" placeholder="Doe">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" name="email" placeholder="email@gmail.com">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Donor Username</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="janeuser" name="username">
                                    </div>
                                </div>

                                
                                


                                <div class="form-group row">
                                  <div class="file-field">
                                      <label class="col-md-3 col-form-label form-control-label">
                                        <div class="btn btn-primary btn-sm float-left" style="background-color: transparent; border-color: transparent;">
                                                
                                                <input type="file" style="background-color: red">
                                            </div></label>

                                        <div class="col-lg-9">
                                          <div class="file-path-wrapper">
                                           
                                            </div>
                                        </div>
                                        </div>



                                  </div>
                                
                                 


                               
                                 <div class="form-group row">
                                  <div class="checkbox">
                                      <label>
                                        <div class="col-lg-12">
                                          <input type="checkbox" name="check" value="true" >&nbsp&nbsp&nbsp&nbsp I have read the requirements. I am eligible to donate blood.
                                        </div>
                                        </label>

                                  </div>
                                  </div>
                                 
           




                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-secondary" value="Cancel">
                                        <input type="button" class="btn btn-danger" value="Trimite analize">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->
        </div>
    </div>
</div>

  

<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background-color: #CE3C3C; border-color:  #721121">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left" >

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase" style="color: #721121"> <b>Unde puteti dona sânge</b></h5>
          <p style="color: white">Toate centrele de donare au programul: Luni – Vineri 07:30 – 13.30.</p>
          <p style="color: white">În zilele caniculare programul de donare este redus – de regulă 07:30 – 11:30.
Contactați telefonic centrele, dacă nu puteți ajunge în primele ore ale dimineții, pentru confirmarea orarului.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase"  style="color: #721121"><b>Information</b></h5>

            <ul class="list-unstyled">
              <li>
                <a href="de_ceD.php" style="color: white">Why give blood</a>
              </li>
              <li>
                <a href="#!" style="color:white">Donation Process</a>
              </li>
              <li>
                <a href="#!" style="color: white">Where to donate</a>
              </li>
              <li>
                <a href="articlesD.php" style="color: white">News & Articles</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase" style="color: white">&nbsp&nbsp&nbsp&nbsp</h5>

            <ul class="list-unstyled">
              <li>
                <a href="staff.php" style="color:white">Home</a>
              </li>
              <li>
                <a href="#!" style="color: white">Contact us</a>
              </li>
              
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color: white">© 2018 Copyright:
      <a href="https://ocw.cs.pub.ro/courses/mps/proiect/proiect-2" style="color: #721121"> MPSproject.com </a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  </body>
</html>