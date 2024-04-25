<?php include('header.php'); ?>

<section class="ftco-section" id="signup-form">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row no-gutters">
            <div class="col-lg-5 col-12 d-flex align-items-stretch">
              <img src="<?php echo SPOTLESSHAIRASSETS; ?>WebsiteImages/Signup/signup.png" alt="img" class="info-wrap w-full img">
            </div>
            <div class="col-lg-7 col-12" id="signupScroll">
              <div class="contact-wrap w-100 p-md-5 p-4 shadow p-3 mb-5 bg-body rounded">
                <h1 class="mb-4 text-center font-weight-bolder noto">
             Register Your Account
                </h1>
                <div id="form-message-warning" class="mb-4"></div>
                <div id="form-message-success" class="mb-4">
                  Your message was sent, thank you!
                </div>
                <form method="POST" id="SignupForm" class="contactForm ltr">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="name">
                        First Name   
                       </label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="firstname_info"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="email">
                        Last Name       
                       </label>
                        <input type="email" class="form-control" name="lastname" id="lastname" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="lastname_info"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="mobile_number">
                        Mobile Number        
                        </label>
                        <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="mobile_number_info"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="email">
                        Email        
                        </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="email_info"></span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="gender">
                       Gender          
                        </label>
                        <select name="gender" id="gender" class="form-control">
                          <option value=""><?php echo "Select Gender" ?>            
                        </option>
                          <option value="0" <?php echo isset($user->gender) && $user->gender == '0' ? 'selected' : ''; ?>>Male </option>
                            <option value="1" <?php echo isset($user->gender) && $user->gender == '1' ? 'selected' : ''; ?>>Female </option>
                        </select>
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="gender_info"></span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="department_id">
                        Department          
                        </label>
                        <select name="department_id" id="department_id" class="form-control">
                          <option value="">Select Department         
                        </option>
                        <?php foreach($departments as $depaermet){?>
                           <option value="<?php echo $depaermet->id; ?>"> <?php echo $depaermet->description; ?>  
                       <?php } ?>
                        </select>
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="gender_info"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="">
                       Password           
                        </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="password_info"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="">
                       Confirm Password            
                       </label>
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="confirmpassword_info"></span>
                      </div>
                    </div>
                    <div class="flex justify-center col-12 mt-2">
                      <div class="col-md-3 brand-btn py-2 form-group">
                        <div onClick="submitForm_to('<?php echo USER_REGISTRATION_API . 'addNewUser' ?>','<?php echo USER_REGISTRATION_API . 'otpVerification' ?>','SignupForm')">
                          <span type="button" id="submit">
                          Signup 
                          </span>
                          &nbsp<i class="fa fa-sign-in" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 text-center py-4">
                      <center>
                      <div style="padding: 0px; line-height: 20px; text-shadow: none;" id="msgs-SignupForm"></div>
                      </center>
                      </div>
                    <div class="mt-2 text-center col-12">
                      <span class="p-4">
                     Already a Member? 
                      <span><a href="<?php echo USER_REGISTRATION_BASIC . 'login'; ?>" style="font-weight:bold;">
                     Login 
                    </a></span></span>
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
<script>
  function scrollToForm() {
    document.getElementById("signupScroll").scrollIntoView({
      behavior: "smooth"
    });
  }
  $(document).ready(function() {
    $('html, body').animate({
      scrollTop: $('#signup-form').offset().top
    }, 'slow');
  });
</script>
<!-- Footer -->
<?php include('footer.php'); ?>