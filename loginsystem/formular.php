<?php
     include_once 'header.php';
?>



<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-md-6">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header" style="background-color:  #CE3C3C">
                            <h4 class="mb-0" style="color: white">Blood Donation Form</h4>
                        </div>

                        <div class="card-body">


                               <form class="form" role="form" autocomplete="off" action="includes/formular.inc.php" method="POST">
                                      <div class="form-group row">
                                       <label class="col-lg-3 col-form-label form-control-label"> Gender:</label>
                                    <div class="col-lg-9">
                   
                               <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-light ">
                                      <input type="radio" name="gender" value="Male" /> Male
                                  </label>
                                  <label class="btn btn-light ">
                                      <input type="radio" name="gender" value="Female" /> Female
                                  </label>
                                      </div>
                        
                                  </div>
                               </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="first" placeholder="Jane">
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
                                    <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="number" name="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Occupation*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="occupation"  placeholder="Manager" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Blood Group</label>
                                    <div class="col-lg-9">
                                        <select id="user_blood_group" class="form-control" size="0" name="group">
                                            <option value="A+">AB-</option>
                                            <option value="AB+" selected="selected">AB+</option>
                                            <option value="A-">A-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="janeuser" name="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" name="password" placeholder="***********">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Confirm</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" name="confirm" placeholder="***********">
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
                                   <label class=" col-form-label form-control-label"></label>
                                  <div class="col-lg-8">
                                        <center>
                                             <button type="submit" class="btn btn-danger" name="submit" style="width: auto;">Become a donor</button>
                                        </center>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->
        </div>
    </div>
</div>

  <section>
    
    
  </section>

  </body>
</html>