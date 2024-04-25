<?php include('admin_dashboard_header.php'); ?>

<section class="ftco-section" id="signup-form">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row no-gutters">
           
           
              <div class="contact-wrap w-100 p-md-5 p-4 shadow p-3 mb-5 bg-body rounded">
                <h1 class="mb-4 text-center font-weight-bolder noto">
             Register New Department
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
                        Name 
                       </label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="name_info"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group right-dir">
                        <label class="label noto-font" for="description">
                        Description       
                       </label>
                        <input type="description" class="form-control" name="description" id="description" placeholder="">
                        <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="description_info"></span>
                      </div>
                    </div>
                   

                    <div class="flex justify-center col-12 mt-2">
                      <div class="col-md-3 brand-btn py-2 form-group">
                        <div onClick="submitForm_to('<?php echo USER_REGISTRATION_API . 'addNewdepaerment_byadmin' ?>','<?php echo USER_REGISTRATION_BASIC . 'department_list' ?>','SignupForm')">
                          <span type="button" id="submit">
                          Save
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
                
                </form>
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