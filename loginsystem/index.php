

<?php

      include_once 'donorHeader.php';
   
      
?>

		<section>
			<div class="row" style="margin-left: 200px; margin-right:  200px ; margin-top: 50px;">
				<div class="col-md-6">
				
					<br>
			<h1 style="font-size: 60px; font-weight: bold; color: black;">Numai împreună putem salva!</h1>
			<p style="font-size: 25px; font-weight: lighter; margin-top: 20px;">Donează sânge şi arată că oricine se poate schimba din necunoscut în salvator!
      Vino alaturi de noi în echipa care resuscitează sau operează şi poţi da o şansă la viaţă! Sângele este medicamentul cel mai ieftin dar care este de nepreţuit în lupta cu secundele!
      Arată că iubeşti şi preţuieşti viaţa. Donează o picătură din a ta pentru a schimba prezentul şi oferii viitor altcuiva!
      Nu fi nepăsăstor pentru că mâine, cineva drag ţie, poate avea nevoie de sânge!
      Vino, acum, la cel mai apropiat centru de donare!</p>
				</div>
			
			
			<div class="col-md-6">
				<img src="img/illustration.png" style="width:540px; height: auto;">
			
			</div>
			</div>

		<hr class="divider">

		</center>

<center>
	<br>
	
        <div class="row" style="margin-left: 200px; margin-right:  200px ;">
                     <div class="col-sm-3">
                <div>
                                

        <div class="appointment-pod">
                
            <h3 class="h4 appointment-pod__heading" data-mh="appointment-block-heading" style="">Become a blood donor</h3>
            <div class="appointment-pod__text" data-mh="appointment-block-text" style="">
                <p><span>If you are completely new to blood donation</span></p>
                <br>
            </div>
               <div class="col-sm-7"><button class="btn  btn-danger btn-lg" href="formular.php" data-toggle="modal"  onclick="location.href = 'formular.php'"> <b>Become a donor</b></button></div>
        </div>


                </div>
            </div>           



             <div class="col-sm-3">
                <div>
                                

        <div class="appointment-pod">
               
            <h3 class="h4">Already a donor?</h3>
            <div class="appointment-pod__text" data-mh="appointment-block-text" style="">
                <p><span>Sign up for an online account to manage appointments</span></p>
            </div>
               <div class="col-sm-7"><button class="btn  btn-danger btn-lg" href="#signin" data-toggle="modal" data-target="#donor" onclick="location.href = '#signin'"> <b>Already a doner</b></button></div>
        </div>


                </div>
            </div>           
<div class="col-sm-3">
                <div>
                                

        <div class="appointment-pod">
               
            <h3 class="h4">Are you a doctor?</h3>
            <div class="appointment-pod__text" data-mh="appointment-block-text" style="">
                <p><span>Sign up for an online account to post issues and results</span></p>
            </div>
               <div class="col-sm-7"><button class="btn  btn-danger btn-lg" href="#signin" data-toggle="modal" data-target="#doctorModal" onclick="location.href = '#signin'"> <b>Sing in as doctor</b></button></div>
        </div>


                </div>
            </div>        
            <div class="col-sm-3">
                <div>
                                

        <div class="appointment-pod">
               
            <h3 class="h4">Are you part of the transfusion center staff?</h3>
            <div class="appointment-pod__text" data-mh="appointment-block-text" style="">
                <p><span>Sign up for an online account to post</span></p>
            </div>
               <div class="col-sm-7"><button class="btn  btn-danger btn-lg" href="#signin" data-toggle="modal" data-target="#staffModal" onclick="location.href = '#signin'"> <b>Sign in as staff</b></button></div>
        </div>


                </div>
            </div>        
   
              </div>
    
</center>
	
</div>

<!-- Modal -->
<div class="modal fade bs-modal-sm" id="donor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs" id="navbarResponsive">
            <ul id="myTab" class="nav nav-tabs ">
              <li class="nav-link active" id="active" style="margin-right:10px; margin-left:10px; font-size: 15px; "><a href="#signin" data-toggle="tab" style="color: #721121">Sign In</a></li>
              <li class="nav-link " style="margin-right:10px; font-size: 15px;"><a href="formular.php" onclick="location.href = 'formular.php'" data-toggle="tab" style="color: #721121">Register</a></li>
              <li class="nav-link" style="margin-right:10px; font-size: 15px;"><a href="#why" data-toggle="tab" style="color: #721121">Why?</a></li>
            </ul>
        </div>

      <div class="modal-body">
        <div id="myTabContent" class="tab-content" >
        <div class="tab-pane fade in" id="why">
        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> Please contact <a mailto:href="janedoe@kittyNation.com"></a>janedoe@kittyNation.com for any other inquiries.<p></p>
        </div>
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" action="includes/login.inc.php" method="POST">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="uid">Username:</label>
              <div class="controls">
                <input id="uid" name="uid" type="text" class="form-control" placeholder="janeuser">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="pwd">Password:</label>
              <div class="controls">
                <input  id="pwd" name="pwd" class="form-control" type="password" placeholder="********">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="submit"></label>
              <div class="controls">
              	<div class="btn-group" role="group" aria-label="Button">
                <button id="submit" name="submit" class="btn btn-success custom" style="margin-top:33px;">Sign In</button></div>

                <div class="btn-group" role="group" aria-label="Button">
                <button id="submit" name="signinFB" class="btn btn-success custom" style="margin-top:33px; width: auto;">Sign in with Facebook</button>
           	 </div>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
      
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default custom" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade bs-modal-sm" id="doctorModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs" id="navbarResponsive">
            <ul id="myTabD" class="nav nav-tabs ">
              <li class="nav-link active" id="active" style="margin-right:10px; margin-left:10px; font-size: 15px; "><a href="#signinD" data-toggle="tab" style="color: #721121">Sign In</a></li>
              <li class="nav-link " style="margin-right:10px; font-size: 15px;"><a href="#signup" data-toggle="tab" style="color: #721121">Register</a></li>
              <li class="nav-link" style="margin-right:10px; font-size: 15px;"><a href="#whyD" data-toggle="tab" style="color: #721121">Why?</a></li>
            </ul>
        </div>

      <div class="modal-body">
        <div id="myTabContentD" class="tab-content" >
        <div class="tab-pane fade in" id="whyD">
        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> Please contact <a mailto:href="janedoe@kittyNation.com"></a>janedoe@kittyNation.com for any other inquiries.<p></p>
        </div>
        <div class="tab-pane fade active in" id="signinD">
            <form class="form-horizontal" action="includes/loginD.inc.php" method="POST">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="uid">Username:</label>
              <div class="controls">
                <input required="" id="uid" name="uid" type="text" class="form-control" placeholder="janedoe">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="pwd">Password:</label>
              <div class="controls">
                <input required="" id="pwd" name="pwd" class="form-control" type="password" placeholder="********">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="submit"></label>
              <div class="controls">
                <div class="btn-group" role="group" aria-label="Button">
                <button id="submit" name="submit" class="btn btn-success custom" style="margin-top:33px;">Sign In</button></div>

                <div class="btn-group" role="group" aria-label="Button">
                <button id="signin" name="signinFB" class="btn btn-success custom" style="margin-top:33px; width: auto;">Sign in with Facebook</button>
             </div>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade in " id="signup">
            <form class="form-horizontal" action="includes/signupD.inc.php" method="POST">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
             <!-- Nume input-->
            <div class="control-group">
              <label class="control-label" for="userid">First:</label>
              <div class="controls">
                <input required="" id="userid" name="first" type="text" class="form-control" placeholder="Jane">
              </div>
            </div>

            <!-- Nume input-->
            <div class="control-group">
              <label class="control-label" for="userid">Last:</label>
              <div class="controls">
                <input required="" id="userid" name="last" type="text" class="form-control" placeholder="Doe">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username:</label>
              <div class="controls">
                <input required="" id="userid" name="username" type="text" class="form-control" placeholder="janedoe">
              </div>
            </div>
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="username">Email:</label>
              <div class="controls">
                <input id="userid" name="email" class="form-control" type="text" placeholder="janedoe@kittyNation.com" required="">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" required="">
                <em>1-8 Characters</em>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="confirm">Re-Enter Password:</label>
              <div class="controls">
                <input id="reenterpassword" class="form-control" name="confirm" type="password" placeholder="********" required="">
              </div>
            </div>
            
            <!-- Multiple Radios (inline) -->
            <br>
            <div class="control-group">
              <label class="control-label" for="humancheck">Humanity Check:</label>
              <div class="controls">
                <label class="radio inline" for="humancheck-0" style="margin-right:15px;">
                  <input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
                <label class="radio inline" for="humancheck-1" style="margin-right:15px;">
                  <input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
              </div>
            </div>
            
           
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <div class="btn-group" role="group" aria-label="Button">
                <button id="submit" name="submit" class="btn btn-success custom" style="margin-top:33px;">Sign Up</button></div>
                <div class="btn-group" role="group" aria-label="Button">
                <button id="signin" name="signinFB" class="btn btn-success custom" style="margin-top:33px; width: auto;">Sign in with Facebook</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default custom" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade bs-modal-sm" id="staffModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs" id="navbarResponsive">
            <ul id="myTabD" class="nav nav-tabs ">
              <li class="nav-link active" id="active" style="margin-right:10px; margin-left:10px; font-size: 15px; "><a href="#signinS" data-toggle="tab" style="color: #721121">Sign In</a></li>
              <li class="nav-link " style="margin-right:10px; font-size: 15px;"><a href="#signupS" data-toggle="tab" style="color: #721121">Register</a></li>
              <li class="nav-link" style="margin-right:10px; font-size: 15px;"><a href="#whyS" data-toggle="tab" style="color: #721121">Why?</a></li>
            </ul>
        </div>

      <div class="modal-body">
        <div id="myTabContentS" class="tab-content" >
        <div class="tab-pane fade in" id="whyS">
        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> Please contact <a mailto:href="janedoe@kittyNation.com"></a>janedoe@kittyNation.com for any other inquiries.<p></p>
        </div>
        <div class="tab-pane fade active in" id="signinS">
            <form class="form-horizontal" action="includes/loginS.inc.php" method="POST">
            <fieldset>
            <!-- Sign In Form -->

              <div class="control-group">
              <label class="control-label" for="uid">Username:</label>
              <div class="controls">
                <input required="" id="uid" name="uid" type="text" class="form-control" placeholder="janedoe">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="pwd">Password:</label>
              <div class="controls">
                <input required="" id="pwd" name="pwd" class="form-control" type="password" placeholder="********">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="submit"></label>
              <div class="controls">
                <div class="btn-group" role="group" aria-label="Button">
                <button id="submit" name="submit" class="btn btn-success custom" style="margin-top:33px;">Sign In</button></div>

                <div class="btn-group" role="group" aria-label="Button">
                <button id="signin" name="signinFB" class="btn btn-success custom" style="margin-top:33px; width: auto;">Sign in with Facebook</button>
             </div>
              </div>
            </div>
            </fieldset>
            </form>
        </div>

        <div class="tab-pane fade in " id="signupS">
            <form class="form-horizontal" action="includes/signupS.inc.php" method="POST">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
             <!-- Nume input-->
             <div class="control-group">
              <label class="control-label" for="userid">First:</label>
              <div class="controls">
                <input required="" id="userid" name="first" type="text" class="form-control" placeholder="Jane">
              </div>
            </div>

            <!-- Nume input-->
            <div class="control-group">
              <label class="control-label" for="userid">Last:</label>
              <div class="controls">
                <input required="" id="userid" name="last" type="text" class="form-control" placeholder="Doe">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username:</label>
              <div class="controls">
                <input required="" id="userid" name="username" type="text" class="form-control" placeholder="janedoe">
              </div>
            </div>
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="username">Email:</label>
              <div class="controls">
                <input id="userid" name="email" class="form-control" type="text" placeholder="janedoe@kittyNation.com" required="">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" required="">
                <em>1-8 Characters</em>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="confirm">Re-Enter Password:</label>
              <div class="controls">
                <input id="reenterpassword" class="form-control" name="confirm" type="password" placeholder="********" required="">
              </div>
            </div>
            
            <!-- Multiple Radios (inline) -->
            <br>
            <div class="control-group">
              <label class="control-label" for="humancheck">Humanity Check:</label>
              <div class="controls">
                <label class="radio inline" for="humancheck-0" style="margin-right:15px;">
                  <input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
                <label class="radio inline" for="humancheck-1" style="margin-right:15px;">
                  <input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
              </div>
            </div>
            
           
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <div class="btn-group" role="group" aria-label="Button">
                <button id="submit" name="submit" class="btn btn-success custom" style="margin-top:33px;">Sign Up</button></div>
                <div class="btn-group" role="group" aria-label="Button">
                <button id="signin" name="signinFB" class="btn btn-success custom" style="margin-top:33px; width: auto;">Sign in with Facebook</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default custom" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>



</section>

<?php
    
     
      include_once 'footer.php';
    
?>

  </body>
</html>