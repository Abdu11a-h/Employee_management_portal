<?php include('header.php'); ?>
<!-- Hero -->
<!-- <div class="container relative md-mt35">
  <div class="hero-left flex items-center justify-center flex-wrap gap5 w-full">
    <div class="hero-text">
      <h1 class="animate__animated animate__fadeInLeft">
        Otp Verification
      </h1>
      <p class="animate__animated animate__fadeInLeft">
        We are your personal taxation <br />
        experts.
      </p>
      <div aria-label="button" class="book-free-call w-full get">
        <button onclick="scrollToForm()">
          Otp
          <svg class="bounce c-color" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="CurrentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="18" y1="13" x2="12" y2="19" />
            <line x1="6" y1="13" x2="12" y2="19" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div> -->
<!-- End -->
<!-- Contact Us -->
<section class="ftco-section" id="otpVerification-form">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row no-gutters" style="display:flex;justify-content:center!important;align-items:center!important;">
            <div class="col-lg-5 col-12 d-flex align-items-stretch">
              <img src="<?php echo SPOTLESSHAIRASSETS; ?>WebsiteImages/Login/otpSecreen.png" alt="img" class="info-wrap w-100 img ">
            </div>
            <div class="col-lg-7 col-12 " style="padding-top:60px;" id="signupScroll">
              <div class="contact-wrap w-100 p-md-5 p-4 shadow p-3 mb-5 bg-body rounded">
                <h1 class="mb-1 text-center font-weight-bolder noto">
                 Verify Your Mobile Number 
               </h1>
                <p id="" class="text-center mb-4 mt-4 noto">
 Please check your inbox and verify your Mobile Number by entering 6 digit code
                </p>
                <div id="form-message-warning" class="mb-4"></div>
                <div id="form-message-success" class="mb-4">
                </div>
                <form method="POST" id="otpForm" class="contactForm ltr">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="otp">
                         Otp Code 
                        </label>
                        <input type="text" class="form-control" name="otp" id="otp" placeholder="OTP CODE">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="otp_info"></span>
                      </div>
                      <input id="email" type="hidden" class="edit-info-modal" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
                    </div>
                    <div class="col-12 flex justify-center mt-2">
                      <div class="col-md-3 brand-btn py-2 form-group">
                        <div onClick="submitForm_to('<?php echo USER_REGISTRATION_API . 'verifyUserSignupOtp' ?>','<?php echo USER_REGISTRATION_BASIC . 'login' ?>','otpForm')">
                          <span type="button" id="submit">
                       Verify Otp  
                          </span>
                          &nbsp<i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 text-center py-4">
                      <div style="padding: 0px;line-height: 20px; text-shadow: none;" id="msgs-otpForm"></div>
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
      scrollTop: $('#otpVerification-form').offset().top
    }, 'slow');
  });
</script>
<!-- Footer -->
<?php include('footer.php'); ?>