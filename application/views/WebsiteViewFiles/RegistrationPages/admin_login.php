<?php include('header.php'); ?>
<style>
.google-btn {
  width: 184px;
  height: 42px;
  background: linear-gradient( 90deg, rgba(10, 187, 181, 1) 0%, rgba(38, 161, 156, 1) 95% );
  border-radius: 2px;
  box-shadow: 0 3px 4px 0 rgba(0,0,0,.25);
}
.modal-btn {
  width: 184px;
  background: linear-gradient( 90deg, rgba(10, 187, 181, 1) 0%, rgba(38, 161, 156, 1) 95% );
  border-radius: 2px;
  box-shadow: 0 3px 4px 0 rgba(0,0,0,.25);
}
  .google-icon-wrapper {
    position: absolute;
    margin-top: 1px;
    margin-left: 1px;
    width: 40px;
    height: 40px;
    border-radius: 2px;
    background-color: #fff;
  }
  .google-icon {
    position: absolute;
    margin-top: 11px;
    margin-left: 11px;
    width: 18px;
    height: 18px;
  }
  .btn-text {
    float: right;
    margin: 8px 12px 0 0;   
    color: #fff;
    font-size: 14px;
    letter-spacing: 0.2px;
    font-family: "Roboto";
  }
<?php if(isset($direction_Bit) && $direction_Bit == "2"){?>
body{
  font-family: "Times New Roman", Times, serif!important;
}
  <?php }?>


</style>

<section class="ftco-section" id="login-form">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row no-gutters" style="display:flex;justify-content:center!important;align-items:center!important;">
            <div class="col-lg-5 col-12 d-flex align-items-stretch">
              <img src="<?php echo SPOTLESSHAIRASSETS; ?>WebsiteImages/Login/login.png" alt="img" class="info-wrap w-100 img ">
            </div>
            <div class="col-lg-7 col-12 " style="padding-top:60px;" id="signupScroll">
              <div class="contact-wrap w-100 p-md-5 p-4 shadow p-3 mb-5 bg-body rounded">
                <h1 class="mb-4 text-center font-weight-bolder noto">
                  Login To Your Account (Admin)
                </h1>
                <div id="form-message-warning" class="mb-4"></div>
                <div id="form-message-success" class="mb-4">
                </div>


                <form method="POST" id="loginForm" class="contactForm ltr">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group right-dir ">
                        <label class="label noto right-dir noto-font" for="email">
                          Email
                        </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="email_info"></span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group  right-dir">
                        <label class="label right-dir noto-font" for="">
                      Password
                        </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="password_info"></span>
                      </div>
                    </div>
                    <div class="col-12 flex justify-center mt-2">
                      <div class="col-md-3 brand-btn py-2 form-group">
                        <div onClick="submitForm_to('<?php echo USER_REGISTRATION_API . 'admin_loginUser' ?>','<?php echo USER_REGISTRATION_BASIC . 'Admin_dasboard' ?>','loginForm')">
                          <span type="button" id="submit">
                          Login
                          </span>
                          &nbsp<i class="fa fa-sign-in" aria-hidden="true"></i>
                        </div>
                      </div>
                     
                      
                    </div>
                 
                
                 

                    <div class="col-lg-12 text-center py-4">
                      <div style="padding: 0px;line-height: 20px; text-shadow: none;" id="msgs-loginForm"></div>
                    </div>
                  
                </form>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End -->





<!-- Footer -->
<?php include('footer.php'); ?>