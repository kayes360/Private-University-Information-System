 <?php 
 session_start();
 require_once('../Login-Panel/login-with-facebook/config.php'); 
 
if(isset($_SESSION['access_token'])){
    header('Location:/project/landing-page/landing_page.php');
    exit();
} 

 $redirect_url = "https://localhost/login-with-facebook/fb-calback.php"  ;
 $permissions = ['email'];
 $login_url = $helper->getLoginUrl($redirect_url,$permissions);  
?>

<!-- Modal -->
 
        <i class="fas fa-times-circle close" id="cross-btn" data-dismiss="modal" aria-label="Close"></i></span></button>
      
      <div class="modal-body"> 
        <!-- tab start--> 
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item login">
                <a class="nav-link active " id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">
                    Login 
                </a>
            </li>
            <li class="nav-item">
                  <a class="nav-link sign-up" id="sign-up-tab" data-toggle="tab" href="#sign-up" role="tab" aria-controls="sign-up" aria-selected="false">
                      Sign-Up
                  </a>
            </li>
        </ul>
        
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <div class="login-form">
                    <form action="/project/Login-Panel/validation.php" method="post">
                    
                        <div class="form-group">  
                          <input type="text" name="email" class="form-control input-sm" placeholder="User Email"  />
                        </div>
                        <div class="form-group">  
                          <input type="password" name="password" class="form-control input-sm" placeholder="User Password"  />
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary"> Login</button> 
                        </div>
                        
                        <div class="form-group">
						<a href="<?php echo $login_url; ?>" class="btn btn-primary">
                          Login With Facebook 
						  </a>
						  <p><?php echo $login_url; ?></p>
                        </div>
                      </form>
                </div>
            </div>
            <div class="tab-pane fade" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">
                <div class="register-form">
                    <form action="registration.php" method="post" name="">
                        <div class="form-group">  
                          <input type="text" name="name" class="form-control" placeholder="User Name" required />
                        </div>
                        <div class="form-group">  
                          <input type="text" name="email" class="form-control" placeholder="User Email" required />
                        </div>
                        <div class="form-group">  
                          <input type="text" name="phonenumber" class="form-control" placeholder="User Phone Number" required />
                        </div>
                        <div class="form-group gender-group">  
                        <label    id="gender">Gender : </label> 
                          <div class="custom-control-inline custom-radio gender-male">
                            <input type="radio" id="m" name="gender" value="female" class="custom-control-input">
                            <label class="custom-control-label" for="m">Male</label>
                          </div> 
                            <div class="custom-control custom-radio custom-control-inline gender-female">
                              <input type="radio" id="f" name="gender" value="female"  class="custom-control-input">
                              <label class="custom-control-label" for="f">Female</label>
                            </div>
                        </div>
                        <div class="form-group"> 
                             <input type="number" class="form-control" id="age" name="age" placeholder="Age" required/> 
                            </div>
                        <div class="form-group">  
                          <input type="text" name="address" class="form-control" placeholder="User Address" required />
                        </div>
                        <div class="form-group">  
                          <input type="password" name="password" class="form-control" placeholder="User Password" required />
                        </div> 
                        <div class="form-group"> 
                        <button type="submit" class="btn btn-primary" id="register-btn"> Register</button> 
                      </div>  
                      </form>
                </div>
            </div> 
          </div>
        
        <!-- tab end-->
      </div>
   
<!-- Modal -->
  

